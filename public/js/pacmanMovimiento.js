
 var oj=0;
 var pac=0;
 /* Declaración de las canvas */
var c = document.getElementById("myCanvas");
var d = document.getElementById("myCanvas2");


/*   Función para mover de posición las canvas */
function mover(){
        $("#box").animate({width: "900px"},10000);
        $("#box").animate({width: "0px"},10000);
ojos();

}


/*   Función para mover la boca a Pacman */

function ojos(){

if ( oj == 0) {

for (r=0; r<=5; r++){
var ctxqqq = c.getContext("2d");
ctxqqq.beginPath();
ctxqqq.arc(38,63,30,Math.PI*2.3,0);
ctxqqq.strokeStyle = '#d8ebfe';
ctxqqq.stroke();

var ct90 = c.getContext("2d");
ct90.strokeStyle = '#d8ebfe';
ct90.moveTo(68,63);
ct90.lineTo(38,70);

ct90.stroke();
var ct46 = c.getContext("2d");
ct46.moveTo(38,70);
ct46.lineTo(56,89);
ct46.stroke();}
for (r=0; r<=5; r++){
var ctxqqq = c.getContext("2d");
ctxqqq.beginPath();
ctxqqq.arc(38,63,30,Math.PI*2,0);
ctxqqq.strokeStyle = 'yellow';
ctxqqq.stroke();

var ct46 = c.getContext("2d");
ct46.moveTo(68,63);
ct46.lineTo(38,70);
ct46.stroke();
}
 oj++;

}else { if ( oj == 1){

for (r=0; r<=5; r++){
var ctxqqq = c.getContext("2d");
ctxqqq.beginPath();
ctxqqq.arc(38,63,30,Math.PI*2,0);
ctxqqq.strokeStyle = '#d8ebfe';
ctxqqq.stroke();

var ct454 = c.getContext("2d");
ct454.moveTo(68,63);
ct454.lineTo(38,70);
ct454.strokeStyle = '#d8ebfe';
ct454.stroke();

var ct466 = c.getContext("2d");
ct466.moveTo(38,70);
ct466.lineTo(56,89);
ct466.strokeStyle = '#d8ebfe';
ct466.stroke();}

for (r=0; r<=5; r++){
var ctxqqq = c.getContext("2d");
ctxqqq.beginPath();
ctxqqq.arc(38,63,30,Math.PI*2.3,0);
ctxqqq.strokeStyle = 'yellow';
ctxqqq.stroke();

var ct45 = c.getContext("2d");
ct45.moveTo(68,63);
ct45.lineTo(38,70);
ct45.stroke();
ct45.stroke();

var ct46 = c.getContext("2d");
ct46.moveTo(38,70);
ct46.lineTo(56,89);
ct46.stroke();
}
oj--;
}}}


 // Inicializa función
ojos();






/*   Dibujo de Pacman en canvas */
var ctxqqq = c.getContext("2d");
ctxqqq.beginPath();
ctxqqq.arc(38,63,30,Math.PI*2.3,0);
ctxqqq.strokeStyle = 'yellow';
ctxqqq.stroke();


var ct45 = c.getContext("2d");
ct45.moveTo(68,63);
ct45.lineTo(38,70);
ct45.stroke();



var ctxa = c.getContext("2d");
ctxa.beginPath();
ctxa.arc(40,50,5,0,2*Math.PI);
ctxa.stroke();


/*   Dibujo de Fantasma en canvas */

var ctxq = d.getContext("2d");
ctxq.beginPath();
ctxq.arc(50,55,20,Math.PI,0);
ctxq.stroke();
ctxq.strokeStyle = 'red';

var ct45 = d.getContext("2d");
ct45.moveTo(30,55);
ct45.lineTo(30,90);
ct45.stroke();
var ct46 = d.getContext("2d");
ct46.moveTo(70,50);
ct46.lineTo(70,90);
ct46.stroke();
var ct46 = d.getContext("2d");
ct46.moveTo(70,90);
ct46.lineTo(60,80);
ct46.stroke();
var ct46 = d.getContext("2d");
ct46.moveTo(60,80);
ct46.lineTo(50,90);
ct46.stroke();var ct46 = d.getContext("2d");
ct46.moveTo(50,90);
ct46.lineTo(40,80);
ct46.stroke();
ct46.stroke();var ct46 = d.getContext("2d");
ct46.moveTo(40,80);
ct46.lineTo(30,90);
ct46.stroke();

var ctxa = d.getContext("2d");
ctxa.beginPath();
ctxa.arc(40,55,5,0,2*Math.PI);

ctxa.stroke();
var ctxa = d.getContext("2d");
ctxa.beginPath();
ctxa.arc(60,55,5,0,2*Math.PI);
ctxa.stroke();
