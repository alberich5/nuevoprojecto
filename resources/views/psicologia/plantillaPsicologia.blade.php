
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="oKZsc6POu1WWGjHu47khDK0YzQ6gAr5csVUFJcgy">

    <title>Laravel</title>

    <!-- Styles -->
    <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
    <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.css">-->


    @yield('css')

   </head>
<body>
    <div id="app">
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
                    <a class="navbar-brand" href="http://172.16.0.49">
                        SIPAB
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul  class="nav navbar-nav">



                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                            <li><a href="{{ url('/psicologia-captura') }}">Captura</a></li>
                            <li><a href="{{ url('/psicologia-lista') }}">Lista</a></li>
                    </ul>
                </div>
            </div>
        </nav>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
           <center><h2>Welcome Psicologia</h2></center>

                @yield('psicologia')
            </div>
        </div>
    </div>
</div>




    <!-- Scripts -->

   {!!Html::script('js/jquery.js')!!}
   {!!Html::script('js/bootstrap.js')!!}
   {!!Html::script('js/vue.js')!!}
   {!!Html::script('js/axios.js')!!}
   <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>

   @yield('js')

</body>
</html>
