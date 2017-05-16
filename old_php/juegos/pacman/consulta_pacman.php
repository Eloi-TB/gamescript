<?php
 
//Configuracion de la conexion a base de datos
  $bd_host = "localhost"; 
  $bd_usuario = "root"; 
  $bd_password = ""; 
  $bd_base = "gamescript"; 
 
 
	$con = mysql_connect($bd_host, $bd_usuario, $bd_password); 
	mysql_select_db($bd_base, $con); 
 

$sql=mysql_query("SELECT * FROM pacman ORDER BY score DESC  LIMIT 5;",$con);
?>
<table style="color:#000099;width:250px;">
	<tr style="background:#9BB;">
		<td>Jugador</td>
		<td>Puntuación</td>
	
	</tr>
<?php
  while($row = mysql_fetch_array($sql)){
  echo "<tr>";
  	echo "<td>".$row['user']."</td>";
  	echo "<td>".$row['score']."</td>";
  	echo "</tr>";
  }
?>
</table>