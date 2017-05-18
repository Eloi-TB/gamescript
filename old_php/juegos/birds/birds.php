 <!DOCTYPE html>
<html>
<head>
<LINK REL=stylesheet HREF="../css/style.css" TYPE="text/css"> 
<script src="../js/ajax.js"></script>






<div class="usu">

Bienvenido 
 <?php
$nombre = $_POST['nombre'];
if ($nombre == "") {  ////// Si no se especifica usuario, pasa a ser Anonimo
    $nombre="Anonimo";
}
echo $nombre;
?>
		<?php
$ju = "birds";
?>
<script type="text/javascript">
var us = "<?php echo $nombre;?>";
</script>
</div>
<div>
</br>
<div align="center">
<div class="controles">


Controles:


<table style="text-align:center;">
<tr><td>Barra espaciadora </td></tr>
<tr><td><IMG SRC="./assets/barra.png" width="100" height="25"></td></tr>
</table>



</div>
<!--------------  JUEGO        -------->



  <script type="text/javascript" src="phaser.min.js"></script>
  <script type="text/javascript" src="main.js"></script>
</head>

<body>
  <div id="game_div"> </div>
</div>
<div class="publi">

<img src="../img/pollo.jpg" id="publi" width="500" height="100"> 
</div>
<div>

 <!----- Volver ---->
<form action="../../juegos.php" method="post" name="usuario">
    <div>
        <input type="hidden" name="nombre" value="<?php echo htmlspecialchars($nombre); ?>"> <!--   type="hidden"  -->
        <button type="submit" class="button" >Volver</button>
    </div>
	 </form>
    </div>
	<div id="resultado" class="resultado">Records:</br><?php include('../bd/consulta.php');?></div>	 
	<div  class="record"><?php include('../bd/consultaPersonal.php');?></div>	 
	</div>	

</div>


</body>
</html>