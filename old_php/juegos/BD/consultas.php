<?php
 
/* Declaración de la conexión   */
  $bd_host = "localhost"; 
  $bd_usuario = "root"; 
  $bd_password = ""; 
  $bd_base = "gamescript"; 
 


	$con = mysql_connect($bd_host, $bd_usuario, $bd_password); 
	mysql_select_db($bd_base, $con); 
	
	
	 /* Consulta */
	if ($ju == "buscaminas"){
	$sql=mysql_query("SELECT (select name from users where users.id = scores.user_id), score FROM scores where game_id=(select id from games where name = '$ju')  ORDER BY score ASC  LIMIT 5;",$con);

	
	}else{
	
$sql=mysql_query("SELECT (select name from users where users.id = scores.user_id), score FROM scores where game_id=(select id from games where name = '$ju')  ORDER BY score DESC  LIMIT 5;",$con);

}
?>
<!-- Creación de la tabla para mostrar resultados -->
<table style="color:#000099;width:150px;">
	<tr style="background:#9BB;">
		<td>Jugador</td>
		<td>Puntuación</td>	
	</tr>
<?php
  while($row = mysql_fetch_array($sql)){
  echo "<tr>";
  	echo "<td>".$row['(select name from users where users.id = scores.user_id)']."</td>";
  	echo "<td>".$row['score']."</td>";
  	echo "</tr>";
  }

mysql_close($con);
?>
</table>