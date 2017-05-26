@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h1>
        Bienvenido {{ Auth::user()->name }}
      </h1>
    </div>
  </div>
  <script type="text/javascript">
  /* Guarda en variable javascript el nombre de usuario */
  var us = "{{ Auth::user()->name }}";
  </script>
  <div class="row">
    <div class="col-md-1">
    </div>
    <!-- Div de controles del juego -->
    <div class="col-md-3">
      @include('controls.type1')
    </div>
    <?php
    /* Guarda en variable php el nombre del juego */
    $ju = "snake";
    ?>
    <!-- Div en el que se muestra el juego -->
    <script src={{ asset('js/games/snake/snake.js') }}></script>
    <div class="col-md-5">
      <script type="text/javascript">
      var snake = new cbsnake();
      </script>
    </div>
    <!-- Div que muestra los resultados de las consultas -->
    <div class="col-md-2">
      <br/><br/>
      <div id="resultado" >Records:<br/>
      </div>
    </div>
    <div>
      <div id="resultadop" >
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-4">
      <!-- Boton de volver -->
    </div>
    <!-- Div de publicidad -->
    <div class="col-md-4">
      <img src="../img/pollo.jpg" id="publi" width="500" height="100">
    </div>
    <div class="col-md-4">
    </div>
  </div>
</div>
@endsection
