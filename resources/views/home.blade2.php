@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <ul>
                        <li><a href="{{ asset('/games/snake') }}">Snake</a></li>
                        <li><a href="{{ asset('/games/birds') }}">birds</a></li>
                        <li><a href="{{ asset('/games/pacman') }}">pacman</a></li>
                        <li><a href="{{ asset('/games/buscaminas') }}">buscaminas</a></li>
                        <li><a href="{{ asset('/games/tetris') }}">tetris</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
