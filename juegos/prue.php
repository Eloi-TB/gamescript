
			
			
			
			
			
			
			
			
			
			
			<html>
			<head>
			
			
			</head>
			<body>
			
			
			<script>
			
			
				// Función para recoger los datos de PHP según el navegador, se usa siempre.
function objetoAjax(){
	var xmlhttp=false;
	try {
		xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
	} catch (e) {
 
	try {
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	} catch (E) {
		xmlhttp = false;
	}
}
 
if (!xmlhttp && typeof XMLHttpRequest!='undefined') {
	  xmlhttp = new XMLHttpRequest();
	}
	return xmlhttp;
}
 
//Función para recoger los datos del formulario y enviarlos por post  
function enviarDatos(sco){
 
 
 		var juego = "snake";
			
			var user = us;
			//var UsuScore = score;
  //div donde se mostrará lo resultados
 var divResultado = document.getElementById('resultado');
  //recogemos los valores de los inputs
  var us="sergioo";
  
    ju=juego;

 
  //instanciamos el objetoAjax
  ajax=objetoAjax();
 
  //uso del medotod POST
  //archivo que realizará la operacion
  //registro.php
  ajax.open("POST", "registro.php",true);
  //cuando el objeto XMLHttpRequest cambia de estado, la función se inicia
  ajax.onreadystatechange=function() {
	  //la función responseText tiene todos los datos pedidos al servidor
  	if (ajax.readyState==4) {
  		//mostrar resultados en esta capa
		divResultado.innerHTML = ajax.responseText
  		
	}
 }
	console.log(us);
	console.log(sco);
	console.log(ju);
	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	//enviando los valores a registro.php para que inserte los datos
	ajax.send("user="+us+"&score="+sco+"&juego="+ju)
			}
			</script>
			<script>
			enviarDatos(1200);
			console.log("www");
			</script>
			<div id="resultado" class="resultado">Records:</br><?php include('consulta.php');?></div>	
			
			</body></html>