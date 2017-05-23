 <!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="./juegos/css/bootstrap.min.css"> 
<style>


body {
 background-color: #81DAF5;}

div.central {
    background-color: #81DAF5;
    color: blue;
    margin: 20px 0 20px 0;
    padding: 200px;
}

div.usu{
  font-size: 24px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;


}
div.formulario {
  position: absolute;
  top: 450px; 
  left: 50px;
}

.button {
  
  padding: 3px 13px;
  font-size: 24px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: #4CAF50;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
  align: center;
}

.button:hover {background-color: #3e8e41}

.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
}

.button1 {border-radius: 12px;}

</style>
<body onload="setInterval('mover()',1000);">
<div class="container">
  <div class="row">

<div class="col-md-12">
<div class="usu">
<h1>
Bienvenido 
 <?php
  /* Muestra es usuario logeado */
$nombre = $_POST['nombre'];
if ($nombre == "") {  
    $nombre="Anonimo";
}
echo $nombre;
?>
</h1>
</div></div></div></div>
<div class="container">
  <div class="row">

<div class="col-md-12">
</br></br>

Estos son los juegos disponibles:
</div></div>
 <!----- Div con los primeros 3 juegos  ---->
 <div class="row">
 <div class="col-md-4">
 <!----- JUEGO 1 ---->
<form action="./juegos/snake/snake.php" method="post" name="usuario">
    <div  >
        <input type="hidden" name="nombre" value="<?php echo htmlspecialchars($nombre); ?>"> <!--   type="hidden"  -->
        <input type=image src="juegos/img/jusnake.png" class="button" width="250" height="150">
    </div></br>
	 </form>
	</div> 
	 <div class="col-md-4">
	 <!----- JUEGO 2 ---->
	 <form action="./juegos/birds/birds.php" method="post" name="usuario">
    <div>
        <input type="hidden" name="nombre" value="<?php echo htmlspecialchars($nombre); ?>"> <!--   type="hidden"  -->
           <input type=image src="juegos/img/jubirds.png" class="button" width="250" height="150">
    </div></br>
	 </form>
	 </div> 
	 <div class="col-md-4">
	 <!----- JUEGO 3 ---->
	 <form action="./juegos/tetris/tetris.php" method="post" name="usuario">
    <div>
        <input type="hidden" name="nombre" value="<?php echo htmlspecialchars($nombre); ?>"> <!--   type="hidden"  -->
         <input type=image src="juegos/img/jutetris.png" class="button" width="250" height="150">
    </div></br>
	 </form>
	  </div></div></br>
 <!----- Div con los últimos 3 juegos  ---->  
<div class="row">
 <div class="col-md-4">
	 <!----- JUEGO 4 ---->
	 <form action="./juegos/pacman/pacman.php" method="post" name="usuario">
    <div>
        <input type="hidden" name="nombre" value="<?php echo htmlspecialchars($nombre); ?>"> <!--   type="hidden"  -->
         <input type=image src="juegos/img/jupacman.png" class="button" width="250" height="150">
    </div>
	</div>
 <div class="col-md-4">
	 </form>
	  <!----- JUEGO 5 ---->
	 <form action="./juegos/buscaminas/index.php" method="post" name="usuario">
    <div>
        <input type="hidden" name="nombre" value="<?php echo htmlspecialchars($nombre); ?>"> <!--   type="hidden"  -->
        <input type=image src="juegos/img/jubuscaminas.png" class="button" width="250" height="150">
    </div>
	 </form>
	 	</div>
 <div class="col-md-4">
  <!----- JUEGO 6 ---->
	 <form action="./juegos/ahorcado/ahorcado.php" method="post" name="usuario">
    <div>
        <input type="hidden" name="nombre" value="<?php echo htmlspecialchars($nombre); ?>"> <!--   type="hidden"  -->
        <input type=image src="juegos/img/juahorcado.png" class="button" width="250" height="150">
    </div>
	 </form>
	 </div>
	</div>	
	</br>
	 <!----- Div con Pacman en movimiento  ---->
	<div class="container" >
<div class="row">
<div class="col-md-12" >
<div id="box" style="background:#81DAF5;height:100px;width:100px; float:left;"></div><div  id="pacman"  style="background:#81DAF5;height:100px;width:100px; float:left;"><canvas id="myCanvas" width="100" height="100" ></canvas></div><div  id="fantasma"  style="background:#81DAF5;height:100px;width:100px; float:left;"><canvas id="myCanvas2" width="100" height="100" ></canvas></div>
</div></div>
    </div>
</div>
<script src="./juegos/js/jquery-2.1.4.min.js"></script>
<script src="./juegos/js/bootstrap.min.js"></script>
<script src="./juegos/js/pacmanMovimiento.js"></script>		
<script>
/* Inicializa la función que mueve a Pacman */
ojos();   
</script>
</body>
</html>