 <!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../css/bootstrap.min.css">
 <LINK REL="stylesheet" HREF="../css/style2.css" TYPE="text/css">
<script src="../js/ajax.js"></script>
</head>
	<body onload="setInterval(public, 10000);">
<div class="container">
  <div class="row">

<div class="col-md-12">
<h1>
Bienvenido
 <?php
  /* Muestra es usuario logeado */
$nombre = $_POST['nombre'];
if ($nombre == "") {
    $nombre="Anonimo";
}
echo $nombre;
?>
</h1></div></div>
<script type="text/javascript">
/* Guarda en variable javascript el nombre de usuario */
var us = "<?php echo $nombre;?>";
</script>
  <div class="row">
<div class="col-md-1"></div>
<!-------------- Div de controles del juego   -------->
<div class="col-md-2">
<br/><br/>
Controles:<br><br>
<table style="text-align:center;">
<tr><td><IMG SRC="../img/click.png" width="100" height="80"></td></tr>
</table>
</div>
<?php
/* Guarda en variable php el nombre del juego */
$ju = "ahorcado";
?>
<!--------------  Script del juego       -------->
 <script src="./js/snake.js"></script>



<!----- Div en el que se muestra el juego ---->
<div class="col-md-6">
<FORM NAME=visor>
   <TABLE width=547>
   <TR>
      <TD colspan=3 width=150 ALIGN=center><textarea name=displayHombre cols=15 rows=6></textarea>
      <TD colspan=3 WIDTH=150 ALIGN=center><textarea name=displayLetras cols=15 rows=6></textarea>
      <TD width=200>
   <TR>
      <TD colspan=6 width=300 ALIGN=center><INPUT NAME=displayPalabra SIZE=42>
      <TD ALIGN=center>&nbsp;
   <TR>
      <td align=center width=50><input type=button name=botA value=" A " onClick="Juega(this.form, 'a')">
      <td align=center width=50><input type=button name=botB value=" B " onClick="Juega(this.form, 'b')">
      <td align=center width=50><input type=button name=botC value=" C " onClick="Juega(this.form, 'c')">
      <td align=center width=50><input type=button name=botD value=" D " onClick="Juega(this.form, 'd')">
      <td align=center width=50><input type=button name=botE value=" E " onClick="Juega(this.form, 'e')">
      <td align=center width=50><input type=button name=botF value=" F " onClick="Juega(this.form, 'f')">
      <td>
    <tr>
      <td align=center><input type=button name=botG value=" G " onClick="Juega(this.form, 'g')">
      <td align=center><input type=button name=botH value=" H " onClick="Juega(this.form, 'h')">
      <td align=center><input type=button name=botI value=" I " onClick="Juega(this.form, 'i')">
      <td align=center><input type=button name=botJ value=" J " onClick="Juega(this.form, 'j')">
      <td align=center><input type=button name=botK value=" K " onClick="Juega(this.form, 'k')">
      <td align=center><input type=button name=botL value=" L " onClick="Juega(this.form, 'l')">
      <td align=center >Ganadas: <input type=text name=ganadas size=2 value=0>
    <tr>
      <td align=center><input type=button name=botM value=" M " onClick="Juega(this.form, 'm')">
      <td align=center><input type=button name=botN value=" N " onClick="Juega(this.form, 'n')">
      <td align=center><input type=button name=botÑ value=" Ñ " onClick="Juega(this.form, 'ñ')">
      <td align=center><input type=button name=botO value=" O " onClick="Juega(this.form, 'o')">
      <td align=center><input type=button name=botP value=" P " onClick="Juega(this.form, 'p')">
      <td align=center><input type=button name=botQ value=" Q " onClick="Juega(this.form, 'q')">
      <td align=center >Perdidas: <input type=text name=perdidas size=2 value=0>

    <tr>
      <td align=center><input type=button name=botR value=" R " onClick="Juega(this.form, 'r')">
      <td align=center><input type=button name=botS value=" S " onClick="Juega(this.form, 's')">
      <td align=center><input type=button name=botT value=" T " onClick="Juega(this.form, 't')">
      <td align=center><input type=button name=botU value=" U " onClick="Juega(this.form, 'u')">
      <td align=center><input type=button name=botV value=" V " onClick="Juega(this.form, 'v')">
      <td align=center><input type=button name=botW value=" W " onClick="Juega(this.form, 'w')">
      <td>
    <tr>
      <td align=center><input type=button name=botX value=" X " onClick="Juega(this.form, 'x')">
      <td align=center><input type=button name=botY value=" Y " onClick="Juega(this.form, 'y')">
      <td align=center><input type=button name=botZ value=" Z " onClick="Juega(this.form, 'z')">
      <td colspan=3 align=center><input type=button name=Inicia value="  Iniciar/Siguiente Palabra  " onClick="IniciaJuego(this.form)">
  </TABLE>
</FORM>
</div>
<!--- Div que muestra los resultados de las consultas ---->
<div class="col-md-2">
<br/><br/>
<div id="resultado" >Records:<br/><?php include('../bd/consulta.php');?></div>
<div>
	 <div id="resultadop" ><?php include('../bd/consultaPersonal.php');?></div>
</div><br/><br/>
<!--- Div que muestra si has acertado / palabra que no has acertado ---->
<div id="palabra" style="color: red"></div>
</div></div>
 <div class="row">
  <!--- Boton de volver ---->
<div class="col-md-3">
<form action="../../juegos.php" method="post" name="usuario">
    <div>
        <input type="hidden" name="nombre" value="<?php echo htmlspecialchars($nombre); ?>">
        <button type="submit" class="button" >Volver</button>
    </div>
	 </form>
	 </div>
 <!----- Div de publicidad ---->
<div class="col-md-4">
<img src="../img/pollo.jpg" id="publi" width="500" height="100">
</div>
<div class="col-md-4"> </div>
</div></div>
	<script src="./js/jquery-2.1.4.min.js"></script>
		<script src="./js/bootstrap.min.js"></script>
</body>
</html>
