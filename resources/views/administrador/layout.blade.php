<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Administrador</title>

    <!-- Styles -->
       <!-- Styles -->
     <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">
     <link href="{{asset('wizard/css/material-bootstrap-wizard.css')}}" rel="stylesheet" type="text/css">
     <link rel="stylesheet" href="{{ asset('omar/css/style.default.css') }}" id="theme-stylesheet">
     @yield('css')

   </head>
<body>
  <div class="modal fade" id="sucursal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
  	<div class="modal-dialog  modal-sm">
  		<div class="modal-content">
  			<div class="modal-header" id="cabeceraModal">
  				<button type="button" class="close" data-dismiss="modal">
  					<span>&times;</span>
  				</button>
  				<center><h4>Seleccionar Sucursal</h4></center>
  			</div>
  			<div class="modal-body">
  		<table>
  			<thead>
  				<tr>
  					<th colspan="1"></th>
  					<th colspan="1">
  					</th>
  				</tr>
  			</thead>
  			<tbody>
  				<td>

  				</td>
  					<td width="10px">
  						<input type="submit" class="btn btn-primary btn-lg" value="Seleccionar" id="botonSucursal">
  					</td>
  			</tbody>
  		</table>
  			</div>
  		</div>
  	</div>
  </div>

    <div id="app" class="contenedorBase">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigaiont</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="sipab" href="{{ url('/') }}" >
                        {{ config('app.username', 'SIPAB') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                               <li class="dropdown">
                                <a href="#" class="dropdown-toggle letras" data-toggle="dropdown" role="button" aria-expanded="false" id="tamanolistado">
                                    Usuario <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="{{ route('administrador.usuario.index') }}">listar</a></li>
                                    <li><a href="{{ route('register') }}">Panel</a></li>
                                </ul>
                               </li>
                <!--Son los valores de prueba para ver la catidad de pestañas que caben aqui-->
                              <li class="dropdown">
                               <a href="#" class="dropdown-toggle letras" data-toggle="dropdown" role="button" aria-expanded="false">
                                   Prueba1 <span class="caret"></span>
                               </a>

                               <ul class="dropdown-menu" role="menu">
                                   <li><a href="">prueba1</a></li>
                               </ul>
                              </li>

                              <li class="dropdown">
                               <a href="#" class="dropdown-toggle letras" data-toggle="dropdown" role="button" aria-expanded="false">
                                   Prueba2 <span class="caret"></span>
                               </a>

                               <ul class="dropdown-menu" role="menu">
                                   <li><a href="">prueba2</a></li>
                               </ul>
                              </li>

                              <li class="dropdown">
                               <a href="#" class="dropdown-toggle letras" data-toggle="dropdown" role="button" aria-expanded="false">
                                   Prueba3 <span class="caret"></span>
                               </a>

                               <ul class="dropdown-menu" role="menu">
                                   <li><a href="">prueba3</a></li>
                               </ul>
                              </li>

                              <li class="dropdown">
                               <a href="#" class="dropdown-toggle letras" data-toggle="dropdown" role="button" aria-expanded="false">
                                   Prueba4 <span class="caret"></span>
                               </a>

                               <ul class="dropdown-menu" role="menu">
                                   <li><a href="">prueba4</a></li>
                               </ul>
                              </li>

                              <li class="dropdown">
                               <a href="#" class="dropdown-toggle letras" data-toggle="dropdown" role="button" aria-expanded="false">
                                   Prueba5 <span class="caret"></span>
                               </a>

                               <ul class="dropdown-menu" role="menu">
                                   <li><a href="">prueba5</a></li>
                               </ul>
                              </li>

                              <li class="dropdown">
                               <a href="#" class="dropdown-toggle letras" data-toggle="dropdown" role="button" aria-expanded="false">
                                   Prueba6 <span class="caret"></span>
                               </a>

                               <ul class="dropdown-menu" role="menu">
                                   <li><a href="">prueba6</a></li>
                               </ul>
                              </li>

                              <li class="dropdown">
                               <a href="#" class="dropdown-toggle letras" data-toggle="dropdown" role="button" aria-expanded="false">
                                   Prueba7 <span class="caret"></span>
                               </a>

                               <ul class="dropdown-menu" role="menu">
                                   <li><a href="">prueba7</a></li>
                               </ul>
                              </li>

                              <li class="dropdown">
                               <a href="#" class="dropdown-toggle letras" data-toggle="dropdown" role="button" aria-expanded="false">
                                   Prueba8 <span class="caret"></span>
                               </a>

                               <ul class="dropdown-menu" role="menu">
                                   <li><a href="">prueba8</a></li>
                               </ul>
                              </li>

                              <li class="dropdown">
                               <a href="#" class="dropdown-toggle letras" data-toggle="dropdown" role="button" aria-expanded="false">
                                   Prueba9 <span class="caret"></span>
                               </a>

                               <ul class="dropdown-menu" role="menu">
                                   <li><a href="">prueba9</a></li>
                               </ul>
                              </li>

                <!--Aqui terminan los valores de prueba-->
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Iniciar sesion</a></li>
                            <li><a href="{{ route('register') }}">Registrar</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle letras" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->username }} <span class="caret"></span>
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
        <hr>

        <div class="container ">

            @yield('content')
        </div>



    </div>

    <!-- Scripts para Administrador -->

    @yield('js')
</body>
</html>
