<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="../css/bootstrap.min.css"> 
 <LINK REL="stylesheet" HREF="../css/style2.css" TYPE="text/css"> 
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

        <title>GRIM GATEWAY </title>
        <meta charset='utf-8' />
        <script type="text/javascript" src="libs/melonJS-1.0.2.js"></script>

        <script type="text/javascript" src="src/GameResources.js"></script>
        <script type="text/javascript" src="src/LD30.js"></script>
		
<script src="../../js/ajax.js"></script>




     <style type='text/css'>
            * { text-align: center }
            body {
                width: 100%;
                height: 100%;
                padding: 0;
                margin: 0;
                background-color:#090107;
                color:#ffffb1;
                font-family:"Arial", Arial, sans-serif;

            }
            p {
                font-size:14px;
                letter-spacing:1px;
                line-height:20px;
            }
			
			#canvas {
                text-align: center;
                margin: 0 auto;
                width: 1000px;
            }
        </style>
</head>
 <body onload= "init(12, 144, 22)">
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

</h1></div></div>
<script type="text/javascript">
var us = "<?php echo $nombre;?>";
</script>




  <div class="row">
  <div class="col-md-12">


  <div id='canvas'>
        </div>


</div></div>
 <div class="row">
<div class="col-md-1"></div>
<div class="col-md-3">
</br></br>
<!--------------  JUEGO        -------->





Controles:<br><br>


<table style="text-align:center;">
<tr><td></td><td>Arriba </td><td></td></tr>

<tr><td>Izquierda</td><td><IMG SRC="./img/flechas.png" width="100" height="80"></td><td>Derecha</td></tr>
<tr><td></td><td>Abajo</td><td></td></tr>


</table>

</table>

</div>

		<?php
$ju = "grim";
?>






<div class="col-md-5"></div>
<div class="col-md-2">
</br></br>
<div id="resultado" >Records:</br><?php include('../bd/consulta.php');?></div>	 

</div>

<div >
	 
	 	<div  ><?php include('../bd/consultaPersonal.php');?></div>	 

    </div>

</div>
 <div class="row">
<div class="col-md-3">

 <!----- volver ---->
<form action="../../juegos.php" method="post" name="usuario">
    <div  >
        <input type="hidden" name="nombre" value="<?php echo htmlspecialchars($nombre); ?>"> 
        <button type="submit" class="button" >Volver</button>
    </div>
	 </form>
	 </div>

<div class="col-md-4">

<img src="../img/pollo.jpg" id="publi" width="500" height="100"> 
</div>
 

<div class="col-md-4"> </div>
	</div>	
</div>

	<script src="./js/jquery-2.1.4.min.js"></script>
		<script src="./js/bootstrap.min.js"></script>
</body>
</html>