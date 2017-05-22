<?php
 
//Configuracion de la conexion a base de datos
  $bd_host = "localhost"; 
  $bd_usuario = "root"; 
  $bd_password = ""; 
  $bd_base = "gamescript"; 
 
 

	$con = mysql_connect($bd_host, $bd_usuario, $bd_password); 
	mysql_select_db($bd_base, $con); 
 
 
 if ($ju == "buscaminas"){
 
 $sql=mysql_query("SELECT  score FROM scores where game_id=(select id from games where name = '$ju') AND user_id=(select id from users where name = '$nombre') ORDER BY score ASC  LIMIT 1;",$con);

 }else{
	//SELECT (select nombre from usuarios where usuarios.idUsuario = puntuaciones.idUsuario), puntuacion FROM puntuaciones
//$sql=mysql_query("SELECT ((select nomus from users where id_us = idus), score FROM scores ORDER BY score DESC  LIMIT 5;",$con);
$sql=mysql_query("SELECT  score FROM scores where game_id=(select id from games where name = '$ju') AND user_id=(select id from users where name = '$nombre') ORDER BY score DESC  LIMIT 1;",$con);
//$sql=mysql_query("SELECT user, score FROM snake ORDER BY score DESC  LIMIT 5;",$con);
}
?>
<table style="color:#000099;width:130px;">
	<tr style="background:#9BB;">	
		<td>Record Personal</td>
	
	</tr>
<?php
  while($row = mysql_fetch_array($sql)){
  echo "<tr>";
  	echo "<td>".$row['score']."</td>";
  	echo "</tr>";
  }
mysql_close($con);
?>
</table>