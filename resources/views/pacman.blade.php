@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h1>
        Bienvenido {{ Auth::user()->name }}
      </h1>
    </div>
  </div>
  <script type="text/javascript">
  /* Guarda en variable javascript el nombre de usuario */
  var us = "{{ Auth::user()->name }}";
  </script>
  <div class="row">
    <div class="col-md-1">
    </div>
    <!-- Div de controles del juego -->
    <div class="col-md-3">
    @include('controls.type1')
    </div>
    <?php
    /* Guarda en variable php el nombre del juego */
    $ju = "pacman";
    ?>
    <!-- Div en el que se muestra el juego -->
    <div class="col-md-5">
      <div id="pacman"></div>

      <script src={{ asset('js/games/pacman/pacman.js') }}></script>
      <script src={{ asset('js/games/pacman/modernizr-1.5.min.js') }}></script>
      <script>
      var el = document.getElementById("pacman");

      if (Modernizr.canvas && Modernizr.localstorage &&
        Modernizr.audio && (Modernizr.audio.ogg || Modernizr.audio.mp3)) {
          window.setTimeout(function () { PACMAN.init(el, "./"); }, 0);
        } else {
          el.innerHTML = "Sorry, needs a decent browser<br /><small>" +
          "(firefox 3.6+, Chrome 4+, Opera 10+ and Safari 4+)</small>";
        }
        </script>
      </div>
      <!----- Div que muestra los resultados de las consultas ---->
      <div class="col-md-2">
      </br></br>
      <div id="resultado" >Records:</br>
      </div>
    </div>
    <div>
      <div id="resultadop" >
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-4">
      <!-- Boton de volver
      <form action="../../juegos.php" method="post" name="usuario">
        <input type="hidden" name="nombre" value="<php echo htmlspecialchars("{ Auth::user()->name }}"); ?>">
        <button type="submit" class="button" >Volver</button>
      </form>
    </div> -->
    <!----- Div de publicidad ---->
    <div class="col-md-4">
      <img src="../img/pollo.jpg" id="publi" width="500" height="100">
    </div>
    <div class="col-md-4"> </div>
  </div>
</div>
<!--
<script src={{ asset('js/jquery-2.1.4.min.js') }}></script>
<script src={{ asset('js/bootstrap.min.js') }}></script> -->
<!-- include('scripts-pacman') -->
@endsection
