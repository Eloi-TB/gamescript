@extends('layouts.app')

@section('content')
<!doctype html>
<head>
<style>

h1{
  text-align: center;
}
body{
 background-color: #81DAF5;
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


.button1 {border-radius: 12px;
}

</style>
</head>
<body onload="setInterval('mover()',1000);">
<div class="container">
  <div class="row">
<div class="col-md-4"></div>
<div class="col-md-4">
<div class="usu">
<h1>


  <div id="nombre" class="col-md-12">
    <script>
    var usbi="{{ Auth::user()->name }}";
    document.getElementById('nombre').innerHTML="Bienvenido " +usbi;
    </script>

</h1>
</div></div></div>
<div class="col-md-4"></div>
</div></div>
<div class="container">






Estos son los juegos disponibles:
 <!--- Div con los primeros 3 juegos  ---->
 <div class="row">
 <div class="col-md-4">
 <!--- JUEGO 1 ---->
<form  action="{{ asset('views/welcome.blade.php') }}"   method="post" name="usuario">
    <div  >
        <input type="hidden" name="nombre" value="">
        <input type=image src="{{ asset('images/jusnake.png') }}" class="button" width="250" height="150">
    </div></br>
	 </form>
	</div>
	 <div class="col-md-4">
	 <!--- JUEGO 2 ---->
	 <form action="./juegos/birds/birds.php" method="post" name="usuario">
    <div>
           <input type=image src="{{ asset('images/jubirds.png') }}" class="button" width="250" height="150">
    </div></br>
	 </form>
	 </div>
	 <div class="col-md-4">
	 <!--- JUEGO 3 ---->
	 <form action="./juegos/tetris/tetris.php" method="post" name="usuario">
    <div>
         <input type=image src="{{ asset('images/jutetris.png') }}" class="button" width="250" height="150">
    </div></br>
	 </form>
	  </div></div></br>
 <!--- Div con los últimos 3 juegos  ---->
<div class="row">
 <div class="col-md-4">
	 <!--- JUEGO 4 ---->
	 <form action="./juegos/pacman/pacman.php" method="post" name="usuario">
    <div>
         <input type=image src="{{ asset('images/jupacman.png') }}" class="button" width="250" height="150">
    </div>
	</div>
 <div class="col-md-4">
	 </form>
	  <!--- JUEGO 5 ---->
	 <form action="./juegos/buscaminas/index.php" method="post" name="usuario">
    <div>
        <input type=image src="{{ asset('images/jubuscaminas.png') }}" class="button" width="250" height="150">
    </div>
	 </form>
	 	</div>
 <div class="col-md-4">
  <!--- JUEGO 6 ---->
	 <form action="./juegos/ahorcado/ahorcado.php" method="post" name="usuario">
    <div>
        <input type=image src="{{ asset('images/juahorcado.png') }}" class="button" width="250" height="150">
    </div>
	 </form>
	 </div>
	</div></div>
	</br>
	 <!--- Div con Pacman en movimiento  ---->
	<div class="container" >
<div class="row">
<div class="col-md-12" >
<div id="box" style="background:#81DAF5;height:100px;width:100px; float:left;"></div><div  id="pacman"  style="background:#81DAF5;height:100px;width:100px; float:left;"><canvas id="myCanvas" width="100" height="100" ></canvas></div><div  id="fantasma"  style="background:#81DAF5;height:100px;width:100px; float:left;"><canvas id="myCanvas2" width="100" height="100" ></canvas></div>
</div></div>
    </div>
</div>
<script src="{{ asset('js/jquery-2.1.4.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('/js/pacmanMovimiento.js') }}"></script>
<script>
/* Inicializa la función que mueve a Pacman */
ojos();
</script>
</body>
@endsection
