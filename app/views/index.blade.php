<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/ico/favicon.png">

    <title>Jumbotron Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    {{ HTML::style('assets/bootstrap.css') }}

    <!-- Custom styles for this template -->
    {{ HTML::script('assets/js/jquery.js') }}

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
      <script src="assets/js/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      @include('menu')
    </div>
    @include('notifikasi')
    @yield('content')


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    {{ HTML::script('assets/assets/js/jquery.js') }}
    {{ HTML::script('assets/assets/js/bootstrap.min.js') }}
  </body>
</html>
