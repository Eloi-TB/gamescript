
 
 
 
 		function public(){
			if (contPubli < 1) {
				 document.getElementById("publi").src="../img/coche.jpg";
				contPubli++;
			}else{
			  document.getElementById("publi").src="../img/pollo.jpg";
			  contPubli--;
			}
			}