@include('scripts.player-interactor')

<script type="text/javascript" src="{{ asset('js/publi.js') }}"></script>
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
<div id="palabra" style="color: red"></div>
<script>
/* Juego */
var gan=0;
var per=0;
var score=0;
contPubli=0;
/****************************************************
* Cross Browser Snake game- By Brady Mulhollem- http://www.webtech101.com
*This game is available at http://www.dynamicdrive.com
****************************************************/


		var hombre = new Array("___\n", "   |\n", "   O\n", "  /", "|", "\\\n", "  /", " \\\n", "___")
var palabra
var libreriaPalabras = new Array("m u l t i m e d i a", "i n t e r n a u t a", "s e r v i d o r", "p r o t o c o l o", "c o r t a f u e g o s",
"n a v e g a d o r", "n o d o", "m a r c o", "p a g i n a", "t e l a r a ñ a",
"d e s c a r g a r", "v i r t u a l", "m e m o r i a", "d i s c o", "l o c a l",
"c o n e c t a r", "d e s c o n e c t a r", "e n c a m i n a d o r", "i n t e r n e t", "d o m i n i o",
"d i n a m i c o", "h i p e r v i n c u l o", "e n l a c e", "m a r c a d o r", "o r d e n a d o r", "l a p i z", "o f i m a t i c a", "i n f o r m e" )
var partes = 0
var colNueva = 0
var jugando


function ObtienePalabra() {
   //obtiene la palabra para jugar de forma pseudoaleatoria
   var indice = Math.round ( Math.random() * 27 )
   var cadena = new String( libreriaPalabras[indice] )
   palabra = cadena.split(" ")

}


function DibujaHombre(visor, partes) {
   //dibuja el hombre ahorcado
   //partes indica el numero de partes a dibujar
   var dibujo = ""
   if (partes < 10)
      for(var x = 0; x < partes; x++) {
         dibujo += hombre[x]
      }
   visor.displayHombre.value = dibujo
}


function DibujaLetra(visor, letra) {
   //dibuja una letra de la palabra
   //posicion indica donde debe dibujar la letra
   var flag = false
   //indica si se encontro la letra
   //obtiene cadena actual
   var cadena = new String(visor.displayPalabra.value)
   //la separa en sus espacios
   var letrasCadena = cadena.split(" ")
   cadena = ""
   for (var x = 0; x < palabra.length; x++) {
      if (palabra[x] == letra) {
         cadena += letra + " "
         flag = true
      } else
         cadena += letrasCadena[x] + " "
   }
   visor.displayPalabra.value = cadena
   return flag
}


function NuevaLetra(visor, letra) {
   //añade letra lista de letras
   visor.displayLetras.value += letra + " "
   //comprueba si ha de pasar a la siguiente fila
   if(colNueva == 3) {
      visor.displayLetras.value += "\n"
      colNueva = 0
   } else
      colNueva++
}


function Juega(visor, letra) {
   //comprueba si esta jugando
   if (jugando) {
      //ciclo de jugada
      //1. añade letra a la lista
      NuevaLetra(visor, letra)
      //2. dibuja la letra y comprueba si acierto
      var acierto = DibujaLetra(visor, letra)
      //3. si no acierto, dibuja hombre
      if (!acierto)
         DibujaHombre(visor, ++partes)
      //4. comprueba si fin
      if (partes == 9)
         FinJuego(false)
      else if (CompruebaPalabra(visor))
         FinJuego(true)
      } else {

   }
}

function IniciaJuego(visor) {
   //inicializa visor y variables globales
   jugando = true
   partes = 0
   colNueva = 0
   ObtienePalabra()
   DibujaHombre(visor, partes)
   visor.displayPalabra.value = ""
   for (var x = 0; x < palabra.length; x++)
      visor.displayPalabra.value += "_ "
   visor.displayLetras.value = ""
}

function CompruebaPalabra(visor) {
   //comprueba si se completo toda la palabra
   var fin = true
   //obtiene cadena actual
   var cadena = new String(visor.displayPalabra.value)
   //la separa en sus espacios
   var letrasCadena = cadena.split(" ")
   for(var x = 0; x < letrasCadena.length; x++)
      if (letrasCadena[x] == "_")
         fin = false
   return fin
}


function FinJuego(resultado) {
   //indica que si se ha perdido o ganado
   var solucion = ""
   jugando = false
   if (resultado) {
	 gan++;
      document.visor.ganadas.value++
	  document.getElementById('palabra').innerHTML="Acertaste!";
      //alert("Acertaste !")
   } else {
	 per++;
     document.visor.perdidas.value++
     //construye la palabra solucion
     for (var x = 0; x < palabra.length; x++)
        solucion += palabra[x]
		document.getElementById('palabra').innerHTML="Has muerto !\n La palabra era: " + solucion;
    // alert("Has muerto !\n La palabra era: " + solucion)
   }
		score=gan-per;
		if (score < 0){
		score=0;
		}

    storePlayerScore(
        JSON.parse("{{ json_encode($game_id->id) }}"),
        JSON.parse("{{ json_encode(Auth::id()) }}"),
        score
    );
  
}
setInterval(public, 10000);
</script>
