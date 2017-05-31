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
    <div class="col-md-4"></div>
    <div class="col-md-4">
      <div class="usu">
        <h1><div class="col-md-12">
          {{ trans('messages.welcome')}} {{ Auth::user()->name }}</h1>
        </div>
      </div>
    </div>
    <div class="col-md-4">
    </div>
  </div>
</div>
<div class="container">
  {{ trans('messages.ligasdisponibles')}}<br/><br/>
  <!--- Div con los primeros 3 juegos  ---->
  <div class="row">
    <div class="col-md-4">
    {{ trans('messages.tiempo1')}}<br/><br/>
    {{ trans('messages.patro')}} <img src="{{ asset('img/mike.gif') }}" alt="Snake" height="100" width="200"></br>
     Snake:<a href="{{ asset('/game/Snake') }}">{{ trans('messages.sus')}} </a>
    </div>
    <div class="col-md-4">
      {{ trans('messages.tiempo2')}}<br/><br/>
        {{ trans('messages.patro')}} <img src="{{ asset('img/nacoste.jpg') }}" alt="Snake" height="100" width="200"></br>
       Pacman:<a href="{{ asset('/game/pacman') }}"> {{ trans('messages.sus')}} </a>  </div>
    <div class="col-md-4">

      {{ trans('messages.resligas')}}<br/><br/>

      Tetris(9 al 18 de Mayo):
      <!-- Consulta   -->
      </div>

  </div>
  <br/>
  <!--- Div con los últimos 3 juegos  ---->
  <div class="row">
    <div class="col-md-4">
      <a href="{{ url('/home') }}" class="btn btn-primary" role="button">
          {{ trans('messages.return')}}
      </a>


    <div class="col-md-4">

    <div class="col-md-4">

      </div>
  </div>
</div>



@endsection
