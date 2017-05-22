 <!DOCTYPE html>
<html>
<head>
<LINK REL=stylesheet HREF="../css/style.css" TYPE="text/css"> 
<script src="../js/ajax.js"></script>

<div class="usu">
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
<script type="text/javascript">
var us = "<?php echo $nombre;?>";
</script>
</div>
<div>

<div align="center">

<div class="controles">



Controles:<br><br>


<table style="text-align:center;">
<tr><td></td><td>Subir</td><td></td></tr>

<tr><td>Izquierda</td><td><IMG SRC="./img/flechas.png" width="100" height="80"></td><td>Derecha</td></tr>
<tr><td></td><td>Bajar</td><td></td></tr>


</table>
</div>

<!--------------  JUEGO        -------->



</head>

<body onload="setInterval(public, 10000);">
  
  <div id="pacman"></div>
  <script src="pacman.js"></script>
  <script src="modernizr-1.5.min.js"></script>
		<?php $ju = "pacman";?>
  <script>

    var el = document.getElementById("pacman");

    if (Modernizr.canvas && Modernizr.localstorage && 
        Modernizr.audio && (Modernizr.audio.ogg || Modernizr.audio.mp3)) {
      window.setTimeout(function () { PACMAN.init(el, "./"); }, 0);
    } else { 
      el.innerHTML = "Sorry, needs a decent browser<br /><small>" + 
        "(firefox 3.6+, Chrome 4+, Opera 10+ and Safari 4+)</small>";
    }
  </script>
  











</div>
<div class="publi">

<img src="../img/pollo.jpg" id="publi" width="500" height="100"> 
</div>
<div>

 <!----- JUEGO 1 ---->
<form action="../../juegos.php" method="post" name="usuario">
    <div  >
        <input type="hidden" name="nombre" value="<?php echo htmlspecialchars($nombre); ?>"> <!--   type="hidden"  -->
        <button type="submit" class="button" >Volver</button>
    </div>
	 </form>
	 
	
	 <div id="resultado" class="resultado">Records:</br><?php include('../bd/consulta.php');?></div>	 
	 <div  class="record"><?php include('../bd/consultaPersonal.php');?></div>	 
    </div>
	
	
	</div>	

</div>


</body>
</html>