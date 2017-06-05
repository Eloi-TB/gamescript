@include('scripts.player-interactor')
<link href="{{ asset('css/minesweeper.css') }}" rel="stylesheet">
<script type="text/javascript" src="{{ asset('js/publi.js') }}"></script>
<meta name="viewport" content="width=440">
<div id="wrap">
  <div id="sidebar">
    <table id="sqTable" onmouseup="return false">
    <!-- Aquí va la taula HTML que es genera en el script, al principi de init() -->
    </table>
  </div>
</div>
<script>

var contPubli=0;
// Emacs settings: -*- mode: Fundamental; tab-width: 4; -*-

////////////////////////////////////////////////////////////////////////////
//                                                                        //
// Minesweeper: Javascript                                                //
//                                                                        //
// Copyright 1998-2009, Andrew D. Birrell                                 //
//                                                                        //
// Usage: init(width, total, mines)                                       //
//                                                                        //
////////////////////////////////////////////////////////////////////////////

var width;                          // set by calling "init"
var total;                          // set by calling "init"
var mines;                          // set by calling "init"


/* "adjacent" and "exposed" are indexed by square number = y*width+x */

/* "adjacent" contains the board layout and derived state.  adjacent[i] is
   the count of mines adjacent to square i, or "mine" if square i contains
   a mine.  */
var adjacent = new Array();         // count of adjacent mines
var mine = 9;                       // adjacency count for a mine

/* "exposed" contains the exposure state of the board.
   Values > "unexposed" represent exposed squares; these either have the
   distinquished values "exploded" or "incorrect", or some greater value
   (left over from the pending exposure queue) for plain old exposed
   squares.  Values <= "unexposed" include plain old unexposed squares, or
   one of the markers.

   During the "expose" method, the queue of pending exposures is a linked
   list through this array, using array indexes.  The method holds the head
   and tail.  "listEnd" is the tail marker.
*/
var exposed = new Array();          // exposure state / pending exposures
var listEnd = -1;                   // end marker in "exposed"
var incorrect = -2;                 // incorrect flag, at end of game
var exploded = -3;                  // exploded mine (at end of game!)
var unexposed = -4;                 // default state at start of game
var flagged = -5;                   // marker flag by user
var queried = -6;                   // query flag by user

var erasing = 0;                    // smiley absent during initialization
var sad = 1;                        // smiley value after loss
var bored = 2;                      // smiley value during game
var happy = 3;                      // smiley value after win

var flags = 0;                      // count of flags currently set
var remaining = 0;                  // count of unexposed squares
var sadness = happy;                // whether smiley is sad
var startTime;                      // time of first click, if any
var timer = false;                  // periodic elapsed time updater

var charInfinity = "&#x221E;";
var charFlag = "!";                 // or 2691, but not on Windows
var charQuestion = "?";
var charMine = "&#x2600;";
var charIncorrect = "&#x00D7;";

function setMines() {
	// update remaining mines display
	var elt = document.getElementById("mines");
	var count = mines - flags;
	elt.innerHTML = (count < -99 ? "-" + charInfinity : "" + count);
}

function setElapsed() {
	// update elapsed time display
	var elt = document.getElementById("timer");
	if (timer) {
		var now = new Date();
		var secs = Math.floor((now.getTime() - startTime.getTime())/1000);
		elt.innerHTML = (secs > 999 ? charInfinity : "" + secs);
	} else {
		elt.innerHTML = "&nbsp;";
	}
}

function setHappy() {
	// update the happy/sad icon display
	var smiley = document.getElementById("smiley");
	if (sadness == erasing) {
		smiley.src = "{{ asset('img/buscaminas/') }}" + "/erasing.gif";
	} else if (sadness == sad) {
		smiley.src = "{{ asset('img/buscaminas/') }}" + "/sad.gif";
	} else if (sadness == bored) {
		smiley.src = "{{ asset('img/buscaminas/') }}" + "/bored.gif";
	} else if (sadness == happy) {
		smiley.src = "{{ asset('img/buscaminas/') }}" + "/happy.gif";
	}
}

function setSq(thisSquare) {
	// update square display, based on "exposed" and "adjacent"
	var sq = document.getElementById("sq-" + thisSquare);
	var exp = exposed[thisSquare];
	var className = "sq";
	var s;
	if (exp <= unexposed) {
		// unexposed squares, including flagged or queried
		if (exp == unexposed) {
			s = "&nbsp;";
		} else if (exp == flagged) {
			s = charFlag;
			className += " sqFlagged";
		} else {
			s = charQuestion;
			className += " sqQuestion";
		}
	} else {
		// exposed squares
		var adj = adjacent[thisSquare];
		className += " sqExposed";
		if (exp == exploded) {
			s = charMine;
			className += " sqExploded";
		} else if (exp == incorrect) {
			s = charIncorrect;
			className += " sqIncorrect";
		} else if (adj == mine) {
			s = charMine;
			className += " sqMine";
		} else {
			s = "" + (adj == 0 ? "&nbsp;" : adj);
			className += " sq" + adj;
		}
	}
	sq.className = className;
	sq.innerHTML = s;
}

function timerAction() {
	// Called via setTimeout
	// Update the elapsed time, and schedule another call if wanted
	// Note: setInterval is similar, but stops (Safarai 1.3) after
	// user has navigated away then returned to the page.
	if (timer) {
		setElapsed();
		setTimeout("timerAction()", 100);
	}
}

function startTimer() {
	startTime = new Date();
	timer = true;
	timerAction();
}

function endGame(outcome) {
	// Turn off the timer and update the smiley
	console.log(outcome); //outcome=1 significa que hem perdut
	//anem a gravar a la bd que hem perdut
	//aquí fem la crida AJAX
	if (outcome == 1) { //hem perdut
		var victoria=0; //derrota
		var elt = document.getElementById("timer");
    alert(elt.innerHTML);

	} else if (outcome == 3) { //hem guanyat
		var victoria=1; //victòria
		var elt = document.getElementById("timer");
    storePlayerScore(
        JSON.parse("{{ json_encode($game_id->id) }}"),
        JSON.parse("{{ json_encode(Auth::id()) }}"),
        elt.innerHTML
    );
    alert(elt.innerHTML);

	}
	timer = false;
	sadness = outcome;
	setHappy();




}

function applyToNeighbours(thisSquare, f) {
	// Apply given function to each existing neighbours of given square
	// This is the only part of the program that knows the topology
	// The performance of this function has a visible effect on the program
	var x = thisSquare % width;
	if (thisSquare >= width) { // there's a row above
		if (x > 0) f(thisSquare - width - 1);
		f(thisSquare - width);
		if (x+1 < width) f(thisSquare - width + 1);
	}
	if (x > 0) f(thisSquare - 1);
	if (x+1 < width) f(thisSquare + 1);
	if (thisSquare < total-width) { // there's a row below
		if (x > 0) f(thisSquare + width - 1);
		f(thisSquare + width);
		if (x+1 < width) f(thisSquare + width + 1);
	}
}

var tail = listEnd;                  // tail of pending exposures

function expose1(thisSquare) {
	// Expose square and add to pending exposure list.
	if (exposed[thisSquare] <= unexposed &&
										exposed[thisSquare] != flagged) {
		remaining--;
		exposed[thisSquare] = listEnd;
		exposed[tail] = thisSquare;
		tail = thisSquare;
		setSq(thisSquare);
	}
}

function clickSq(event, thisSquare) {
	//canvi
	thisSquare = thisSquare.id.replace("sq-","");

	if (!event) event = window.event; // IE versus the rest
	if (sadness != bored) return false; // Game over: do nothing
	if (!timer) startTimer();
	if (exposed[thisSquare] > unexposed) {
		// already exposed: do nothing
	} else if (!event.which && event.button == 0) {
		// mouse-up after right-click on IE: do nothing
	} else if (event.shiftKey || event.button == 2) {
		// flag or unflag
		var exp = exposed[thisSquare];
		if (exp == unexposed) {
			exposed[thisSquare] = flagged;
			flags++;
			setMines();
		} else if (exp == flagged) {
			exposed[thisSquare] = queried;
			flags--;
			setMines();
		} else if (exp == queried) {
			exposed[thisSquare] = unexposed;
		}
		setSq(thisSquare);
	} else if (adjacent[thisSquare] == mine) {
		// exposing a mine: explode it and expose other mines
		remaining--;
		exposed[thisSquare] = exploded;
		setSq(thisSquare);
		var i;
		for (i = 0; i < total; i++) {
			if (i==thisSquare) {
			} else if (adjacent[i] == mine && exposed[i] != flagged) {
				remaining--;
				exposed[i] = listEnd;
				setSq(i);
			} else if (adjacent[i] != mine && exposed[i] == flagged) {
				remaining--;
				exposed[i] = incorrect;
				setSq(i);
			}
		}
		endGame(sad);
	} else {
		// expose the square, if not already exposed
		// If square has 0 adjacency, expose surrounding squares,
		// and iterate
		if (exposed[thisSquare] == flagged) {
			flags--;
			setMines();
		}
		remaining--;
		exposed[thisSquare] = listEnd;
		tail = thisSquare;
		setSq(thisSquare);
		var pending = thisSquare;
		// Until pending reaches the end of the exposure list, expose
		// neighbors
		while (pending != listEnd) {
			if (adjacent[pending]==0) applyToNeighbours(pending, expose1);
			pending = exposed[pending];
		}
		if (remaining==mines) {
			// End of game: flag all remaining unflagged mines
			var i;
			for (i = 0; i < total; i++) {
				if (adjacent[i] == mine && exposed[i] <= unexposed &&
												exposed[i] != flagged ) {
					exposed[i] = flagged;
					flags++;
					setSq(i);
				}
			}
			setMines();
			endGame(happy);
		}
	}
	return false;
}

function neighbourIsMine(thisSquare) {
	// Increase adjacency count, if this isn't itself a mine
	if (adjacent[thisSquare] != mine) adjacent[thisSquare]++;
}

function layMines() {
	// Lay the mines
	var laid = 0;
	while (laid < mines) {
		var target = Math.floor(Math.random() * total);
		// Despite what others might say, it's possible that "target
		// = total".  This is because although Math.random() is < 1,
		// in an extreme case the multiplication by "total" will round up.
		// We need to allow for this, if we really care about correctness.
		if (target < total && adjacent[target] != mine) {
			adjacent[target] = mine;
			applyToNeighbours(target, neighbourIsMine);
			laid++;
		}
	}
}

function eraseRows() {
	// erase square contents
	var i;
	for (i = 0; i < total; i++) {
		adjacent[i] = 0;
		if (exposed[i] != unexposed) {
			exposed[i] = unexposed;
			setSq(i);
		}
	}
}

function erase2() {
	// Forked part of erase
	eraseRows();
	layMines();
	sadness = bored;
	setHappy();
	return false;
}

function erase() {
	// Erase the board.  Uses "sadness" to disable clicks meanwhile
	if (sadness != erasing) {
		flags = 0;
		setMines();
		remaining = total;
		endGame(erasing);
		setElapsed();
		setTimeout("erase2()", 1); // allow repaint of score area
	}
}

function clickSmiley(event) {
	// Click in the smiley face.
	if (!event) event = window.event; // IE versus the rest
	if (event.button != 2) erase();
	return false;
}

function noContext() {
	// Disable context menu in squares
	return false;
}
/*
function myFunction(event, ele) {
	if (!event.which && event.button == 0) {
		// mouse-up after right-click on IE: do nothing
	} else if (event.shiftKey || event.button == 2) {
		console.log("botó dret a la casella " +  ele.id);
	} else {
		console.log("botó esquerra a la casella " +  ele.id);
	}
}
*/
function init(w, t, m) {

	width = w;
	total = t;
	mines = m;

	var j=0;
	var num=0;
	var taula = document.getElementById('sqTable');

	//primer creem la capçalera de la taula:
	var tr=document.createElement("tr");
	tr.setAttribute("id","capcalera");
	var td=document.createElement("td");
	td.setAttribute("class","score");
	td.setAttribute("colspan",width);
	td.innerHTML="<div class=\"counter\" id=\"mines\">&nbsp;</div><div class=\"counter\" id=\"timer\">&nbsp;</div><img id=\"smiley\" src=\"{{ asset('img/buscaminas/reasing.gif') }}\" alt=\"\" onmousedown=\"return clickSmiley(event)\">";
	tr.appendChild(td);
	taula.appendChild(tr);

	for (var i = 0; i < total/width; i++) {
		var tr=document.createElement("tr");
		var fila="fila-" + i;
		tr.setAttribute("id",fila);
		taula.appendChild(tr);
		for (var j = 0; j < width; j++) {
			var td=document.createElement("td");
			td.setAttribute("class","sq");
			var sq="sq-"+num;
			td.setAttribute("id",sq);
			tr.appendChild(td);
			num++;
		}
	}

	//crear els events de les cel.les de forma dinàmica
	//<TD CLASS=sq ID="sq-0" onmousedown="return clickSq(event,0)">&nbsp;</TD>
	for (var i = 0; i <total/width; i++) {
		for (var j = 0; j < width; j++) {
			var num = j+width*i;
			//http://stackoverflow.com/questions/7394750/adding-event-as-parameter-within-function-using-addeventlistener-doesnt-work
			document.getElementById("sq-"+num.toString()).addEventListener("mousedown",
				function(event) {
					if (!event) // i.e. the argument is undefined or null (versions antigues de IE)
						event = window.event;
					//myFunction(event, this);
					//canvi respecte l'original: en el segon paràmetre de clickSq no passem el número de la cel.la, sinó l'objecte
					clickSq(event,this);
				}
			);

		}
	}


	// Initial "onload" setup.  Set up globals and handlers, then erase.

	// The handlers here are non-standard and fail w3.org validation if
	// placed in the HTML.  Onselectstart prevents IE extending a selection
	// on shift-click, and oncontextmenu prevents right-click being grabbed
	// for context menus on some browsers.
	var sqTable = document.getElementById("sqTable");
	sqTable.onselectstart = function() { return false; };
	var i;
	for (i = 0; i < total; i++) {
		var sq = document.getElementById("sq-" + i);
		sq.oncontextmenu = noContext;
	}
	erase();

}


function destroy_table() {

	var fila = document.getElementById("fila-0");
	var element_pare = fila.parentNode;



	for (var i = 0; i < total/width; i++) {
		var fila = document.getElementById("fila-" + i);
		element_pare.removeChild(fila);
	}
}
setInterval(public, 10000);
init(12, 144, 22);
</script>
