@extends('layouts.app')

@section('content')
<div class="container">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <div class="row">
                <div class="col-sm-12 col-md-12">
                    <h1>
                        {{ $game_name }}
                    </h1>
                </div>
            </div>
        </div>
        <div class="panel-body">
            <div class="row">
                <!-- Div de controles del juego -->
                <div class="col-sm-12 col-md-3">
                    @include('controls.type1')
                    {{ $game_id->control_juego }}
                </div>
                <!-- Div en el que se muestra el juego -->
                <div class="col-sm-12 col-md-4" id="game_div">
                    @includeIf($partial)
                </div>
                <!-- Div que muestra los resultados de las consultas -->
                <div class="col-sm-12 col-md-4 move_right">
                    <div class="row">
                        <div class="col-sm-12 col-md-12">
                            <div>
                                <span id="puntuacions"></span>
                            </div>
                            @includeIf('scores_table')
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-3">
                    <!-- Boton de volver -->
                    <a href="{{ url('/home') }}" class="btn btn-primary" role="button">
                        {{ trans('messages.return')}}
                    </a>
                </div>
                <!-- Div de publicidad -->
                <div class="col-sm-12 col-md-5">
                    <img src="{{ asset('img/pollo.jpg') }}" id="publi" width="500" height="100">
                </div>
                <div class="col-sm-0 col-md-4">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
