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
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <h1>Bienvenido a GameScript</h1>
              </div>
            </div>
              <!--           Consultas de resultados       -->
              <div class="row">

                <div  class="col-md-3" ></div>
                <div  class="col-md-2" >Snake:</br>hjfghj</div>

                <div  class="col-md-2"   >Birds:</br>fgjfgj</div>

                <div  class="col-md-2"  >Tetris:</br>gjfgjh</div>

              </div>
              <div class="row">
                <div  class="col-md-3" ></div>
                <div  class="col-md-2" >Pacman:</br>fgjfgj</div>

                <div  class="col-md-2" >Pacman:</br>fgjfgjh</div>

                <div  class="col-md-2"  >Pacman:</br>fjhfgjh</div>
              </div>	</div>
            </br>
            <div class="container" >
              <div class="row"><div class="col-md-4"></div>
              <div class="col-md-4">
                <form action="./juegos.php" method="post" name="usuario">
                  <div class="formulario">
                    Nombre:<input type="text" name="nombre" value="">
                  </div></div>
                  <div class="col-md-4" >
                    <button type="submit" class="button" >Entrar</button>
                  </div>
                </form>
              </div>
            </div>
        </div>
    </body>
</html>
