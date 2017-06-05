<!doctype html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>GameScript</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/welcome.css') }}" rel="stylesheet">
</head>
<body>
    <div>
        @if (Route::has('login'))
        <div class="top-right links">
            @if (Auth::check())
            <a href="{{ url('/home') }}">Home</a>
            @else
            <a href="{{ url('/login') }}">Login </a>
            <a href="{{ url('/register') }}">{{ trans('messages.registro')}}</a>
            @endif
        </div>
        @endif

        <div class="container">
            <div class="row">

                <div class="col-sm-12 col-md-12">
                    <h1>{{ trans('messages.welcome2')}} GameScript </h1>

                </div>
            </div>
            <div class="row">
                <div  class="col-sm-1 col-md-1" ></div>
                <div  class="col-sm-10 col-md-10" >
                    <!-- Consultas de resultados -->
                    @if(count($gamesScoresArray)>0)
                    <!-- por cada juego -->
                    @for($i=0; $i < count($gamesScoresArray); $i++)
                    @php
                        $j = 0
                    @endphp
                    <!-- por cada puntuación del juego -->
                    <div  class="col-sm-12 col-md-4" >
                        <table  class="table table-striped table-bordered">
                            <thead>
                                <caption>{{$gamesScoresArray[$i]->getGameName()}}</caption>
                                <tr>
                                    <th scope="row">
                                        {{ trans('messages.tableRank')}}
                                    </th>
                                    <th>
                                        {{ trans('messages.tableUser')}}
                                    </th>
                                    <th>
                                        {{ trans('messages.tableScore')}}
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($gamesScoresArray[$i]->getScores() as $score)
                                <tr class="rank{{ $j++ }}">
                                    <td>
                                        <span class="rank{{ $j }}"><strong>{{ $j }}</strong></span>
                                    </td>
                                    <td>
                                        {{ $score->usuarios->name }}
                                    </td>
                                    <td>
                                        {{ $score->score }}
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    @endfor
                    @endif
                </div>
                <div  class="col-sm-1 col-md-1" ></div>
            </div>
            <table class="table table-striped">
                ...
            </table>
        </div>
        <br/>
        <br/>
    </div>
</body>
</html>
