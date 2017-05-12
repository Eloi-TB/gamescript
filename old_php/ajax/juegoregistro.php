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
                <input name="juego" type="hidden" value="snake" /></label></td>
               	</tr>
                <tr>
                	<input name="user" type="text" /></label></td>
               	</tr>
                <tr>
					<input type="text" name="score"></label></td>
			
                </table>
		</form>
		<script>
			enviar();
			</script>
		<div id="resultado"><?php include('consulta.php');?></div>
 
 
 
 <script>
 function enviar(){
 
 
 document.forms["registro"].submit();
 }
 </script>
    </body>
</html>