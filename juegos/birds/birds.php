 <!DOCTYPE html>
<html>
<head>
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
div.controles {
  position: absolute;
  top: 150px; 
  left: 180px;
}

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

<style>
    #game_div, p {
      width: 400px;
      margin: auto;
      margin-top: 20px;
    }
  </style>

  <script type="text/javascript" src="phaser.min.js"></script>
  <script type="text/javascript" src="main.js"></script>
</head>

<body>
  <div id="game_div"> </div>
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
	</div>	

</div>


</body>
</html>