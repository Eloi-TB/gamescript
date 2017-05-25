 <!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../css/bootstrap.min.css">
 <LINK REL="stylesheet" HREF="../css/style2.css" TYPE="text/css">
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=440">

<link href="minesweeper.css" rel=stylesheet>
<script src="../js/ajax.js"></script>
</head>
 <body onload= "init(12, 144, 22)">
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
</h1></div></div>
<script type="text/javascript">
/* Guarda en variable javascript el nombre de usuario */
var us = "<?php echo $nombre;?>";
</script>
 <div class="row">
<div class="col-md-1"></div>
<!-------------- Div de controles del juego   -------->
<div class="col-md-3">
</br></br>
Controles:<br><br>
<table style="text-align:center;">
<tr><td><IMG SRC="../img/click.png" width="100" height="80"></td></tr>
</table>
</div>
<?php
/* Guarda en variable php el nombre del juego */
$ju = "buscaminas";
?>
<!----- Div en el que se muestra el juego ---->
<div class="col-md-5">
<div id="wrap">
  <div id="main">
  </div>
  <div id="sidebar">
    <table id="sqTable" onmouseup="return false">
    </table>
  </div>
</div>
</div>
<!----- Div que muestra los resultados de las consultas ---->
<div class="col-md-2">
</br></br>
<div id="resultado" >Records:</br><?php include('../bd/consulta.php');?></div>
</div>
<div >
	 	<div id="resultadop"><?php include('../bd/consultaPersonal.php');?></div>
    </div>
</div>

 <div class="row">
<div class="col-md-3">
<!----- Boton de volver ---->
<form action="../../juegos.php" method="post" name="usuario">
    <div  >
        <input type="hidden" name="nombre" value="<?php echo htmlspecialchars($nombre); ?>">
        <button type="submit" class="button" >Volver</button>
    </div>
	 </form>
	 </div>
 <!----- Div de publicidad ---->
<div class="col-md-4">
<img src="../img/pollo.jpg" id="publi" width="500" height="100">
</div>
<div class="col-md-4"> </div>
	</div>
</div>
<script type="text/javascript" SRC="minesweeper.js"></script>
	<script src="../js/jquery-2.1.4.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
</body>
</html>
