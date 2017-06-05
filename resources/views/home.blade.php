@extends('layouts.app')

@section('content')
<!-- ejecutar script pacman -->
<script>
window.onload = function() {
  setInterval('mover()',1000);
};
</script>
<div class="container">
  <div class="row">
    <div class="col-sm-4 col-md-4"></div>
    <div class="col-sm-4 col-md-4">
      <div class="usu">
        <h1><div class="col-sm-12 col-md-12">
          {{ trans('messages.welcome')}} {{ Auth::user()->name }}</h1>
        </div>
      </div>
    </div>
    <div class="col-sm-4 col-md-4">
    </div>
  </div>
</div>
<div class="container">
  {{ trans('messages.disponibles')}}<br/><br/>
  <!--- Div con los primeros 3 juegos  ---->
  <div class="row">
    <div class="col-sm-4 col-md-4">
      <!--- JUEGO 1 ---->
      <a href="{{ asset('/game/Snake') }}"> <img src="{{ asset('img/jusnake.png') }}" alt="Snake" height="100" width="200"> </a>
    </div>
    <div class="col-sm-4 col-md-4">
      <!--- JUEGO 2 ---->
      <a href="{{ asset('/game/Birds') }}"> <img src="{{ asset('img/jubirds.png') }}" alt="Birds" height="100" width="200"> </a>
    </div>
    <div class="col-sm-3 col-md-3">
      <!--- JUEGO 3 ---->
      <a href="{{ asset('/game/Tetris') }}"> <img src="{{ asset('img/jutetris.png') }}" alt="Tetris" height="100" width="200"> </a>
    </div>
    <div class="col-sm-1 col-md-1">
      <a href="{{ url('/ligas') }}" class="btn btn-primary" role="button">
          {{ trans('messages.ligas')}}
      </a>
      </div>
  </div>
  <br/>
  <!--- Div con los últimos 3 juegos  ---->
  <div class="row">
    <div class="col-sm-4 col-md-4">
      <!--- JUEGO 4 ---->
      <a href="{{ asset('/game/Pacman') }}"> <img src="{{ asset('img/jupacman.png') }}" alt="Pacman" height="100" width="200"> </a>
    </div>
    <!--- JUEGO 5 ---->
    <div class="col-sm-4 col-md-4">
      <a href="{{ asset('/game/Buscaminas') }}"> <img src="{{ asset('img/jubuscaminas.png') }}" alt="Buscaminas" height="100" width="200"> </a>
    </div>
    <div class="col-sm-4 col-md-4">
      <!--- JUEGO 6 ---->
      <a href="{{ asset('/game/Ahorcado') }}"> <img src="{{ asset('img/juahorcado.png') }}" alt="Ahorcado" height="100" width="200"> </a>
    </div>
  </div>
</div>
<br/>
<!--- Div con Pacman en movimiento  ---->
<div class="container" >
  <div class="row">
    <div class="col-sm-12 col-md-12" >
      <div id="box" style="background:#81DAF5;height:100px;width:100px; float:left;"></div><div  id="pacman"  style="background:#81DAF5;height:100px;width:100px; float:left;"><canvas id="myCanvas" width="100" height="100" ></canvas></div><div  id="fantasma"  style="background:#81DAF5;height:100px;width:100px; float:left;"><canvas id="myCanvas2" width="100" height="100" ></canvas></div>
    </div>
  </div>
</div>
<script src="{{ asset('/js/pacmanMovimiento.js') }}"></script>
@endsection
