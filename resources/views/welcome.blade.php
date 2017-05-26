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
            <h1>Bienvenido a GameScript </h1>

            </div></div>

            <!---          Consultas de resultados   ---->
              <div class="row">
              <?php $ju="snake";?>
              <div  class="col-md-3" ></div>
           <div  class="col-md-2" >Snake:<br/>Aqui va el include a consultas.php</div>
            <?php $ju="birds";?>
                 <div  class="col-md-2"   >Birds:<br/>Aqui va el include a consultas.php</div>
            <?php $ju="tetris";?>
                   <div  class="col-md-2"  >Tetris:<br/>Aqui va el include a consultas.php</div>
            <?php $ju="pacman";?>

            </div>
             <div class="row">
              <div  class="col-md-3" ></div>
                  <div  class="col-md-2" >Pacman:<br/>Aqui va el include a consultas.php</div>
            <?php $ju="buscaminas";?>
                   <div  class="col-md-2" >Buscaminas:<br/>Aqui va el include a consultas.php</div>
            <?php $ju="pacman";?>
                   <div  class="col-md-2"  >Pacman:<br/>Aqui va el include a consultas.php</div>
            </div>	</div>
            <br/>
            <br/>
        </div>
    </body>
</html>
