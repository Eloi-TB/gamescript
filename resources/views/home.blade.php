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
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h1>
                    {{ trans('messages.disponibles')}}
                </h1>
            </div>
            <div class="panel-body">
                <!-- Juegos -->
                @foreach($gamesNames as $game)
                <div class="col-sm-6 col-md-4">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h2 class="panel-title">
                            {{ $game->name }}
                        </h2>
                    </div>
                    <div class="centerr-block">
                        <a href="{{ asset('/game') }}/{{ $game->name }}"> <img src="{{ asset('img/ju') }}{{ $game->name }}.png" alt="{{ $game->name }}" height="100" width="200"> </a>
                    </div>
                </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<!--- Div con Pacman en movimiento  ---->
<div class="container" >
    <div class="row">
        <div class="col-sm-12 col-md-12" >
            <div id="box" style="background:#d8ebfe;height:100px;width:100px; float:left;"></div><div  id="pacman"  style="background:#d8ebfe;height:100px;width:100px; float:left;"><canvas id="myCanvas" width="100" height="100" ></canvas></div><div  id="fantasma"  style="background:#d8ebfe;height:100px;width:100px; float:left;"><canvas id="myCanvas2" width="100" height="100" ></canvas></div>
        </div>
    </div>
</div>
<script src="{{ asset('/js/pacmanMovimiento.js') }}"></script>
@endsection
