@extends('layouts.app')

@section('content')
<!doctype html>
<html>
<head>
  <link href="{{ asset('/css/styleshome.css') }}" rel="stylesheet">
  <meta charset="utf-8">


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
          </div>
        </div>
      </div>
      <div class="col-md-4">
      </div>
    </div>
  </div>
  <div class="container">






    Estos son los juegos disponibles:
    <!--- Div con los primeros 3 juegos  ---->
    <div class="row">
      <div class="col-md-4">
        <!--- JUEGO 1 ---->
        <a href="{{ asset('/games/snake') }}"> <img src="{{ asset('img/jusnake.png') }}" alt="Snake" height="100" width="200"> </a>



      </div>
      <div class="col-md-4">
        <!--- JUEGO 2 ---->
        <a href="{{ asset('/games/birds') }}"> <img src="{{ asset('img/jubirds.png') }}" alt="Snake" height="100" width="200"> </a>



      </div>
      <br/>


      <div class="col-md-4">
        <!--- JUEGO 3 ---->
        <a href="{{ asset('/games/tetris') }}"> <img src="{{ asset('img/jutetris.png') }}" alt="Snake" height="100" width="200"> </a>

      </div>
    </div>
    <br/>
    <!--- Div con los últimos 3 juegos  ---->
    <div class="row">
      <div class="col-md-4">
        <!--- JUEGO 4 ---->
        <a href="{{ asset('/games/pacman') }}"> <img src="{{ asset('img/jupacman.png') }}" alt="Snake" height="100" width="200"> </a>
      </div>
      <!--- JUEGO 5 ---->
      <div class="col-md-4">
        <a href="{{ asset('/games/buscaminas') }}"> <img src="{{ asset('img/jubuscaminas.png') }}" alt="Snake" height="100" width="200"> </a>
      </div>
      <div class="col-md-4">
        <!--- JUEGO 6 ---->
        <a href="{{ asset('/games/ahorcado') }}"> <img src="{{ asset('img/juahorcado.png') }}" alt="Snake" height="100" width="200"> </a>

      </div>
    </div>
  </div>
  <br/>
  <!--- Div con Pacman en movimiento  ---->
  <div class="container" >
    <div class="row">
      <div class="col-md-12" >
        <div id="box" style="background:#81DAF5;height:100px;width:100px; float:left;"></div><div  id="pacman"  style="background:#81DAF5;height:100px;width:100px; float:left;"><canvas id="myCanvas" width="100" height="100" ></canvas></div><div  id="fantasma"  style="background:#81DAF5;height:100px;width:100px; float:left;"><canvas id="myCanvas2" width="100" height="100" ></canvas></div>
      </div>
    </div>
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
</html>
@endsection
