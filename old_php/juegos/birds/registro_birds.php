
<?php
 
//Configuracion de la conexion a base de datos
  $bd_host = "localhost"; 
  $bd_usuario = "root"; 
  $bd_password = ""; 
  $bd_base = "gamescript"; 
 
$con = mysql_connect($bd_host, $bd_usuario, $bd_password); 
mysql_select_db($bd_base, $con); 
 
//variables POST
  $us=$_POST['user'];
  $sco=$_POST['score'];
  $ju=$_POST['juego'];

 
//registra los datos del empleados
$sql="insert into puntuaciones (idJuego, idUsuario, puntuacion) values ((select idJuego from juegos where nombreJuego='$ju'), (select idUsuario from usuarios where nombre='$us'), '$sco');";
  
mysql_query($sql,$con) or die('Error. '.mysql_error());
 
include('consulta_birds.php');
?>