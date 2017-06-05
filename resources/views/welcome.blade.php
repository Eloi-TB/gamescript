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
    <link href="{{ asset('css/tableStyles.css') }}" rel="stylesheet">
</head>
<body>
    <div>
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{url('/home') }}">
                        {{ trans('messages.games')}}
                    </a>
                </div>
                <!--  languageeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee -->


                <ul class="nav navbar-nav navbar-center">
                    <li><a href="{{ url('lang', ['en']) }}">En</a></li>
                    <li><a href="{{ url('lang', ['es']) }}">Es</a></li>
                    <li><a href="{{ url('lang', ['cat']) }}">Cat</a></li>
                </ul>



                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('register') }}">{{ trans('messages.registrar')}}</a></li>
                    @else

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </li>
                @endif
            </ul>
        </div>
    </div>
</nav>

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
                        <caption class="name">{{$gamesScoresArray[$i]->getGameName()}}</caption>
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
                    <tfoot>
                        <tr>
                            <td colspan="3"><a href="{{ asset('/game') }}/{{$gamesScoresArray[$i]->getGameName()}}">{{ trans('messages.play')}}</a></td>
                        </tr>
                    </tfoot>
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
</div>
</div>
<!-- Scripts -->
<script src="{{ asset('js/jquery-2.1.4.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>
