 <!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="./juegos/css/bootstrap.min.css"> 


<style>


h1 { align: center;
	text-align: center;
}

 
 body {
/* Ubicación de la imagen */

background-image: url(juegos/img/maquina.jpg);

/* Para dejar la imagen de fondo centrada, vertical y
horizontalmente */

background-position: center center;

/* Para que la imagen de fondo no se repita */
background-repeat: no-repeat;

/* La imagen se fija en la ventana de visualización para que la altura de la imagen no supere a la del contenido */

background-attachment: fixed;

/* La imagen de fondo se reescala automáticamente con el cambio del ancho de ventana del navegador */

background-size: cover;

/* Se muestra un color de fondo mientras se está cargando la imagen
de fondo o si hay problemas para cargarla */

background-color: #66999;
} 

.button {
  
  padding: 3px 13px;
  font-size: 24px;
  cursor: pointer;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: #4CAF50;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
 
}

.button:hover {background-color: #3e8e41}

.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}


.button1 {border-radius: 12px;}

</style>
</head>

<body onload="setInterval('mover()',1000);">

<div class="container">
  <div class="row">

<div class="col-md-12">
<h1>Bienvenido a GameScript </h1>

</div></div>


<!----           Consultas de resultados       ---->

  <div class="row">
  <?php $ju="snake";?>
  <div  class="col-md-3" ></div>
<div  class="col-md-2" >Snake:</br><?php include('./juegos/bd/consultas.php');?></div>	
<?php $ju="birds";?>
<div  class="col-md-2"   >Birds:</br><?php include('./juegos/bd/consultas.php');?></div>
<?php $ju="tetris";?>
<div  class="col-md-2"  >Tetris:</br><?php include('./juegos/bd/consultas.php');?></div>
<?php $ju="pacman";?>
</div>
 <div class="row">
  <div  class="col-md-3" ></div>
<div  class="col-md-2" >Pacman:</br><?php include('./juegos/bd/consultas.php');?></div>
<?php $ju="pacman";?>
 <div  class="col-md-2" >Pacman:</br><?php include('./juegos/bd/consultas.php');?></div>
<?php $ju="pacman";?>
<div  class="col-md-2"  >Pacman:</br><?php include('./juegos/bd/consultas.php');?></div>
</div>	</div>	
</br>
<div class="container" >
<div class="row"><div class="col-md-4"></div>
<div class="col-md-4">
<form action="./juegos.php" method="post" name="usuario">
    <div class="formulario">
        Nombre:<input type="text" name="nombre" value="">
        
    </div></div>
	<div class="col-md-4" >
        <button type="submit" class="button" >Entrar</button>
		
    </div>
	</form>
    
	
    </div>
    



</div>


</br>

<!--------      pacman   -------->

<!--
<div class="container" >
<div class="row">
<div class="col-md-12" >
<div id="box" style="background:#81DAF5;height:100px;width:100px; float:left;"></div><div  id="pacman"  style="background:#81DAF5;height:100px;width:100px; float:left;"><canvas id="myCanvas" width="100" height="100" ></canvas></div><div  id="fantasma"  style="background:#81DAF5;height:100px;width:100px; float:left;"><canvas id="myCanvas2" width="100" height="100" ></canvas></div>
</div></div>
    </div>
-->
<script>

 var oj=0;
 var pac=0;
var c = document.getElementById("myCanvas");
var d = document.getElementById("myCanvas2");



function mover(){ // Función para mover de posición las canvas
   
        $("#box").animate({width: "900px"},10000);
   // $("#pacman").hide();
   
        $("#box").animate({width: "0px"},10000);
  // $("#pacman").stop();

ojos();

}

function ojos(){   /// Función para mover boca a pacman

if ( oj == 0) { 

for (r=0; r<=5; r++){
var ctxqqq = c.getContext("2d");
ctxqqq.beginPath();
ctxqqq.arc(38,63,30,Math.PI*2.3,0);
ctxqqq.strokeStyle = '#81DAF5';
ctxqqq.stroke();

var ct90 = c.getContext("2d");
ct90.strokeStyle = '#81DAF5';
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
ctxqqq.strokeStyle = '#81DAF5';
ctxqqq.stroke();

var ct454 = c.getContext("2d");
ct454.moveTo(68,63);
ct454.lineTo(38,70);
ct454.strokeStyle = '#81DAF5';
ct454.stroke();

var ct466 = c.getContext("2d");
ct466.moveTo(38,70);
ct466.lineTo(56,89);
ct466.strokeStyle = '#81DAF5';
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

ojos();   // Inicializa función


var ctx = c.getContext("2d");

var grd = ctx.createLinearGradient(200,0,200,200);
grd.addColorStop(0, "white");
grd.addColorStop(1,"black");

ctx.fillStyle = grd;
ctx.fillRect(100,120,200,100);




///// Dibujo de pacman
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


///  Dibujo de fantasma

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









</script>
<script src="./juegos/js/jquery-2.1.4.min.js"></script>
		<script src="./juegos/js/bootstrap.min.js"></script>
		</body>
</html>