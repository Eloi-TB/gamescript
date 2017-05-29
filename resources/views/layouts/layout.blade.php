<html lang="en">
  <head>
    <title>Styde.Net</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  </head>
  <body>

    <nav class="navbar navbar-default container">
      <div class="container-fluid">
      <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">En</a></li>
            <li><a href="#">Es</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="jumbotron container">
        <p>{{ trans('welcome.home') }}</p>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
