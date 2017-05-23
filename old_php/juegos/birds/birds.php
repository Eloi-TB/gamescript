 <!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../css/bootstrap.min.css"> 
<LINK REL=stylesheet HREF="../css/style2.css" TYPE="text/css"> 
<script src="../js/ajax.js"></script>


  <script type="text/javascript" src="phaser.min.js"></script>
  <script type="text/javascript" src="main.js"></script>
</head>

<body onload="setInterval(public, 10000);">

<div class="container">
  <div class="row">

<div class="col-md-12">
<h1>
Bienvenido 
 <?php
$nombre = $_POST['nombre'];
if ($nombre == "") {  ////// Si no se especifica usuario, pasa a ser Anonimo
    $nombre="Anonimo";
}

echo $nombre;

?>
</h1>
</div></div>
		<?php
$ju = "birds";
?>
 <div class="row">
 
<script type="text/javascript">
var us = "<?php echo $nombre;?>";
</script>


</br>
<div class="col-md-3">

<div >

<center>
Controles:

</br>
<table style="text-align:center;">
<tr><td>Barra espaciadora </td></tr>
<tr><td><IMG SRC="./assets/barra.png" width="100" height="25"></td></tr>
</table>

</center>

</div></div>
<!--------------  JUEGO        -------->



<div class="col-md-5">

  <div id="game_div"> </div>
</div>
<div class="col-md-3">
	<div id="resultado" class="resultado">Records:</br><?php include('../bd/consulta.php');?></div>	 
	<div  class="record"><?php include('../bd/consultaPersonal.php');?></div>	 
	</div></div>
 <div class="row">
 <div class="col-md-3">
 <div>

 <!----- Volver ---->
<form action="../../juegos.php" method="post" name="usuario">
    <div>
        <input type="hidden" name="nombre" value="<?php echo htmlspecialchars($nombre); ?>"> <!--   type="hidden"  -->
        <button type="submit" class="button" >Volver</button>
    </div>
	 </form>
    </div>
	</div>
<div class="col-md-4">

<img src="../img/pollo.jpg" id="publi" width="500" height="100"> 
</div>


	</div>	

</div>


</body>
</html>