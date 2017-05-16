<?php
 
//Configuracion de la conexion a base de datos
  $bd_host = "localhost"; 
  $bd_usuario = "root"; 
  $bd_password = ""; 
  $bd_base = "gamescript"; 
 
 
	$con = mysql_connect($bd_host, $bd_usuario, $bd_password); 
	mysql_select_db($bd_base, $con); 
 


$sql=mysql_query("SELECT (select nombre from usuarios where usuarios.idUsuario = puntuaciones.idUsuario), puntuacion FROM puntuaciones where puntuaciones.idJuego=(select idJuego from juegos where nombreJuego = 'pacman')  ORDER BY puntuacion DESC  LIMIT 5;",$con);

?>
<table style="color:#000099;width:250px;">
	<tr style="background:#9BB;">
		<td>Jugador</td>
		<td>Puntuación</td>
	
	</tr>
<?php
  while($row = mysql_fetch_array($sql)){
  echo "<tr>";
  	echo "<td>".$row['(select nombre from usuarios where usuarios.idUsuario = puntuaciones.idUsuario)']."</td>";
  	echo "<td>".$row['puntuacion']."</td>";
  	echo "</tr>";
  }
?>
</table>