 <!DOCTYPE html>
<html>
<head>
<style>
div.controles {
  position: absolute;
  top: 150px; 
  left: 100px;
}

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
<div class="usu">

Bienvenido 
 <?php
$nombre = $_POST['nombre'];
if ($nombre == "") {  ////// Si no se especifica usuario, pasa a ser Anonimo
    $nombre="Anonimo";
}
echo $nombre;
?>
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


     <style type="text/css">
	 
div.controles {
  position: absolute;
  top: 150px; 
  left: 180px;
}
      @font-face {
	    font-family: 'BDCartoonShoutRegular';
        src: url('BD_Cartoon_Shout-webfont.ttf') format('truetype');
	    font-weight: normal;
	    font-style: normal;
      }
      #pacman {
        height:450px;
        width:342px;
        margin:20px auto;
      }
      #shim { 
        font-family: BDCartoonShoutRegular; 
        position:absolute;
        visibility:hidden
      }
      h1 { font-family: BDCartoonShoutRegular; text-align:center; }
      body { width:342px; margin:0px auto; font-family:sans-serif; }
      a { text-decoration:none; }
    </style>

</head>

<body>
  
  <div id="pacman"></div>
  <script src="pacman.js"></script>
  <script src="modernizr-1.5.min.js"></script>

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
<div>

 <!----- JUEGO 1 ---->
<form action="../../juegos.php" method="post" name="usuario">
    <div  >
        <input type="hidden" name="nombre" value="<?php echo htmlspecialchars($nombre); ?>"> <!--   type="hidden"  -->
        <button type="submit" class="button" >Volver</button>
    </div>
	 </form>
	 
	
	 
	 
    </div>
	</div>	

</div>


</body>
</html>