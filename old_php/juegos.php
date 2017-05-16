 <!DOCTYPE html>
<html>
<head>
<style>


body {
 background-color: #81DAF5;}

div.central {
    background-color: #81DAF5;
    color: blue;
    margin: 20px 0 20px 0;
    padding: 200px;
}

div.usu{
  font-size: 24px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;


}
div.formulario {
  position: absolute;
  top: 450px; 
  left: 50px;
}

.button {
  
  padding: 3px 13px;
  font-size: 24px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: #4CAF50;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
  align: center;
}

.button:hover {background-color: #3e8e41}

.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
}

.button1 {border-radius: 12px;}

</style>
<div class="usu">

Bienvenido 
 <?php
$nombre = $_POST['nombre'];
if ($nombre == "") {  ////// Si no se especifica usuario, pasa a ser Anonimo
    $nombre="Anonimo";
}
echo $nombre;
?>
</div>
<div>
</br></br></br>
<div>
Estos son los juegos disponibles:
<div>

 <!----- JUEGO 1 ---->
<form action="./juegos/snake/snake.php" method="post" name="usuario">
    <div  >
        <input type="hidden" name="nombre" value="<?php echo htmlspecialchars($nombre); ?>"> <!--   type="hidden"  -->
        <button type="submit" class="button" >Snake</button>
    </div></br>
	 </form>
	 
	 <!----- JUEGO 2 ---->
	 <form action="./juegos/birds/birds.php" method="post" name="usuario">
    <div>
        <input type="hidden" name="nombre" value="<?php echo htmlspecialchars($nombre); ?>"> <!--   type="hidden"  -->
        <button type="submit" class="button" >Birds</button>
    </div></br>
	 </form>
	 
	 <!----- JUEGO 3 ---->
	 <form action="./juegos/tetris/tetris.php" method="post" name="usuario">
    <div>
        <input type="hidden" name="nombre" value="<?php echo htmlspecialchars($nombre); ?>"> <!--   type="hidden"  -->
        <button type="submit" class="button" >Tetris</button>
    </div></br>
	 </form>
	 
	 <!----- JUEGO 4 ---->
	 <form action="./juegos/pacman/pacman.php" method="post" name="usuario">
    <div>
        <input type="hidden" name="nombre" value="<?php echo htmlspecialchars($nombre); ?>"> <!--   type="hidden"  -->
        <button type="submit" class="button" >Pacman</button>
    </div>
	 </form>
	 </div>
	</div>	
</div>


</body>
</html>