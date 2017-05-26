 <!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<LINK REL=stylesheet HREF="../css/style2.css" TYPE="text/css">
	<script src="../js/ajax.js"></script>

</head>

<body onload="setInterval(public, 10000);">

<div class="container">
  <div class="row">

<div class="col-md-12">
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
</div></div>
<?php
/* Guarda en variable php el nombre del juego */
$ju = "birds";
?>
 <div class="row">

<script type="text/javascript">
/* Guarda en variable javascript el nombre de usuario */
var us = "<?php echo $nombre;?>";
</script>
<br/>
<!--- Div de controles del juego   -------->
<div class="col-md-3">
<div>
<center>
Controles:
<br/>
<table style="text-align:center;">
<tr><td>Barra espaciadora </td></tr>
<tr><td><IMG SRC="./assets/barra.png" width="100" height="25"></td></tr>
</table>
</center>
</div></div>
<!-- Div en el que se muestra el juego ---->
<div class="col-md-5">
  <div id="game_div"></div>
</div>
<!--- Div que muestra los resultados de las consultas ---->
<div class="col-md-3">
	<div id="resultado" class="resultado">Records:<br/><?php include('../bd/consulta.php');?></div>
	<div id="resultadop"><?php include('../bd/consultaPersonal.php');?></div>
	</div></div>
 <div class="row">
  <!----- Boton de volver ---->
 <div class="col-md-3">
<form action="../../juegos.php" method="post" name="usuario">
        <input type="hidden" name="nombre" value="<?php echo htmlspecialchars($nombre); ?>">
        <button type="submit" class="button" >Volver</button>
	 </form>
	</div>
 <!----- Div de publicidad ---->
<div class="col-md-4">
<img src="../img/pollo.jpg" id="publi" width="500" height="100">
</div></div></div>
<script type="text/javascript" src="phaser.min.js"></script>
<script type="text/javascript" src="main.js"></script>
</body>
</html>
