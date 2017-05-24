<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }



            h1 { align: center;
              text-align: center;
            }


             body {
            /* Ubicación de la imagen */

            background-image: url({{ asset('images/maquina2.jpg') }});

            /* Para dejar la imagen de fondo centrada, vertical y
            horizontalmente */

            background-position: center center;

            /* Para que la imagen de fondo no se repita */
            background-repeat: no-repeat;

            /* La imagen se fija en la ventana de visualización para que la altura de la imagen no supere a la del contenido */

            background-attachment: fixed;

            /* La imagen de fondo se reescala automáticamente con el cambio del ancho de ventana del navegador */

            background-size: cover;

            /* Se muestra un color de fondo mientras se está cargando la imagen
            de fondo o si hay problemas para cargarla */

            background-color: #66999;
            }

            .button {

              padding: 3px 13px;
              font-size: 24px;
              cursor: pointer;
              text-decoration: none;
              outline: none;
              color: #fff;
              background-color: #4CAF50;
              border: none;
              border-radius: 15px;
              box-shadow: 0 9px #999;

            }

            .button:hover {background-color: #3e8e41}

            .button:active {
              background-color: #3e8e41;
              box-shadow: 0 5px #666;
              transform: translateY(4px);
            }


            .button1 {border-radius: 12px;}


        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
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


            <!----           Consultas de resultados       ---->

              <div class="row">
              <?php $ju="snake";?>
              <div  class="col-md-3" ></div>
           <div  class="col-md-2" >Snake:</br>Aqui va el include a consultas.php</div>
            <?php $ju="birds";?>
                 <div  class="col-md-2"   >Birds:</br>Aqui va el include a consultas.php</div>
            <?php $ju="tetris";?>
                   <div  class="col-md-2"  >Tetris:</br>Aqui va el include a consultas.php</div>
            <?php $ju="pacman";?>
            </div>
             <div class="row">
              <div  class="col-md-3" ></div>
                  <div  class="col-md-2" >Pacman:</br>Aqui va el include a consultas.php</div>
            <?php $ju="buscaminas";?>
                   <div  class="col-md-2" >Buscaminas:</br>Aqui va el include a consultas.php</div>
            <?php $ju="pacman";?>
                   <div  class="col-md-2"  >Pacman:</br>Aqui va el include a consultas.php</div>
            </div>	</div>
            </br>
            </br>





        </div>
    </body>
</html>
