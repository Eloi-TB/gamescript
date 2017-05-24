<?php


/* Declaración de la conexión   */
  $bd_host = "localhost";
  $bd_usuario = "root";
  $bd_password = "";
  $bd_base = "gamescript";



  	$con = mysql_connect($bd_host, $bd_usuario, $bd_password);
  	mysql_select_db($bd_base, $con);
    
/* Variables POST   */
  $nombre=$_POST['user'];
  $ju=$_POST['juego'];



 /* Consulta */
 if ($ju == "buscaminas"){

 $sql=mysql_query("SELECT  score FROM scores where game_id=(select id from games where name = '$ju') AND user_id=(select id from users where name = '$nombre') ORDER BY score ASC  LIMIT 1;",$con);

 }else{
$sql=mysql_query("SELECT  score FROM scores where game_id=(select id from games where name = '$ju') AND user_id=(select id from users where name = '$nombre') ORDER BY score DESC  LIMIT 1;",$con);
}
?>

<!-- Creación de la tabla para mostrar resultados-->
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
