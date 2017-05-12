<html>
  <head>
  <title>Registro de empleados</title>
  <script language="JavaScript" type="text/javascript" src="ajax.js"></script>
  </head>
  <body>
		<form name="registro" action="" onsubmit="guardarRegistro(); return false">
			<h2>Nuevo empleado</h2>
				<table>
				<tr>
                	<td>juego</td><td><label><input name="juego" type="hidden" value="snake" /></label></td>
               	</tr>
                <tr>
                	<td>Nombres</td><td><label><input name="user" type="text" /></label></td>
               	</tr>
                <tr>
					<td>score</td><td><label><input type="text" name="score"></label></td>
				</tr>
                <tr>
                   	<td>&nbsp;</td><td><label><input type="submit" name="Submit" value="Grabar" /></label></td>
                </tr>
                </table>
		</form>
 
		<div id="resultado"><?php include('consulta.php');?></div>
 
    </body>
</html>