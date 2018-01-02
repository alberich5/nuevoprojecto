<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sipab</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->

    <link rel="stylesheet" href="{{ asset('omar/css/bootstrap.min.css') }}">
    <!-- Fontastic Custom icon font-->


    <!-- Google fonts - Poppins -->

    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{ asset('omar/css/style.default.css') }}" id="theme-stylesheet">
    <!-- Favicon-->
    <link rel="shortcut icon" href="favicon.png">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    @yield('content')
    <!-- Javascript files-->
    <script src="{{ asset('js/nieve.js') }}"></script>
    <script src="{{ asset('omar/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('omar/js/popper.min.js') }}"> </script>
    <script src="{{ asset('omar/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('omar/js/jquery.cookie.js') }}"> </script>
    <script src="{{ asset('omar/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('omar/js/front.js') }}"></script>

  </body>
</html>
