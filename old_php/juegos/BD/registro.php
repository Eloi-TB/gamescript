
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

 

///  consulta vieja    $sql="INSERT INTO $ju VALUES ('$us','$sco')";
  $sql="insert into scores (game_id, user_id, score) values ((select games.id from games where name='$ju'), (select users.id from users where name='$us'), '$sco');";
  mysql_query($sql,$con) or die('Error. '.mysql_error());
 
include('consulta.php');
?>


