@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h1>
        {{ $game_name }}
      </h1>
    </div>
  </div>
  <div class="panel panel-default">
  <div class="panel-heading">Panel Heading</div>
  <div class="panel-body">Panel Content</div>
</div>
  <!--
  <script type="text/javascript">
  /* Guarda en variable javascript el nombre de usuario */
  var us = " Auth::user()->name ";
</script>
-->
<div class="row">
  <div class="col-md-1">
  </div>
  <!-- Div de controles del juego -->
  <div class="col-md-3">
    @include('controls.type1')
  </div>
  <!-- Div en el que se muestra el juego -->
  <div class="col-md-5">
    @includeIf($partial)
  </div>
  <!-- Div que muestra los resultados de las consultas -->
  <div class="col-md-2">
    <div class="row">
      <div class="col-md-12">
        <div id="resultado">Mejores puntuaciones<br/>
          <ol>
            @foreach($scores as $score)
            <li> {{ $score->usuarios->name }} - {{ $score->score }} puntos</li>
            @endforeach
          </ol>
        </div>
      </div>
      <div class="col-md-12">
        @isset($personal_score->score)
          <div>
             Tu mejor puntuación<br/>
            <span id="maximaPuntuacion">{{ $personal_score->score}}</span> puntos
          </div>
        @endisset
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-4">
    <!-- Boton de volver -->
    <a href="{{ url('/home') }}">
      Volver
    </a>
  </div>
  <!-- Div de publicidad -->
  <div class="col-md-4">
    <img src="{{ asset('img/pollo.jpg') }}" id="publi" width="500" height="100">
  </div>
  <div class="col-md-4">
  </div>
</div>
</div>
@endsection
