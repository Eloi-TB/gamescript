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

background-image: url(juegos/img/maquina2.jpg);

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

<body >

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
<?php $ju="buscaminas";?>
 <div  class="col-md-2" >Buscaminas:</br><?php include('./juegos/bd/consultas.php');?></div>
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

<script src="./juegos/js/jquery-2.1.4.min.js"></script>
		<script src="./juegos/js/bootstrap.min.js"></script>
		</body>
</html>