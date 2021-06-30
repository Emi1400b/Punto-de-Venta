<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Punto de Venta</title>

        <!-- Materialize-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="assets/materialize/css/materialize.min.css" media="screen,projection" />
         <!-- Estilos de bootstrap -->
         <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet">
        <!-- Estilos de FontAwesome-->
        <link href="{{ asset('assets/css/font-awesome.css') }}" rel="stylesheet">
         <!-- Custom -->
         <link href="{{ asset('assets/css/custom-styles.css') }}" rel="stylesheet">
        <!-- Google Fonts-->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
        <!--Mensaje flotante-->
        <link href="{{ asset('assets/css/tooltip.css') }}" rel="stylesheet">
    
        <!--Autocompletar-->
        <link href="{{ asset('assets/js/autocomplete') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" />
    </head>

    <body>
        <div id="wrapper">
            <nav class="navbar navbar-default top-navbar" role="navigation">
                <div class="navbar-header">
                    <!--Menú Hamburguesa-->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!--Parte color rojo-->
                    <a class="navbar-brand waves-effect waves-dark" onclick="location.href='{{ url('/index') }}'">
                        <i class="large material-icons">store</i>
                        <strong>Punto de Venta</strong>
                    </a>
                    <!--Menú Hamburguesa-->
                    <div id="sideNav" href=""><i class="material-icons dp48">toc</i></div>
                </div>
                <!--usuario-->
                <ul class="nav navbar-top-links navbar-right">
                    <li>
                        <a class="dropdown-button waves-effect waves-dark" href="#!" data-activates="dropdown1">
                        <i class="fa fa-user fa-fw"></i> <b>Emi14</b>
                        <i class="material-icons right">arrow_drop_down</i>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- Estructura de usuario-->
            <ul id="dropdown1" class="dropdown-content">
                <form action="/logout" method="POST">
                {{ csrf_field() }}
                    <li>
                        <a href="#" onclick="this.closest('form').submit()"><i class="fa fa-sign-out fa-fw"></i> Cerrar Sesión</a>
                    </li>
                </form>
            </ul>
            
            
            <!--Menú lateral -->
            <nav class="navbar-default navbar-side" role="navigation">
                <div class="sidebar-collapse">
                    <ul class="nav" id="main-menu">
                        <li>
                            <a href="{{ url('/index') }}" class="waves-effect waves-dark"><i class="fa fa-home"></i> Inicio</a>
                        </li>
                        <li>
                            <a href="{{ url('/lista_usuarios') }}" class="waves-effect waves-dark"><i class="fa fa-user"></i> Usuarios</a>
                        </li>
                        <li>
                            <a  class="waves-effect waves-dark"><i class="fa fa-briefcase"></i>Empleados<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="{{ url('/lista_empleados') }}">Empleados</a></li>
                                <li><a href="{{ url('/lista_pues') }}">Puestos</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="" class="waves-effect waves-dark"><i class="fa fa-truck"></i> Proveedores</a>
                        </li>
                        <li>
                            <a href="{{ url('/lista_clientes') }}" class="waves-effect waves-dark"><i class="fa fa-male"></i> Clientes</a>
                        </li>
                        <li>
                            <a href="{{ url('/lista_ventas') }}" class="waves-effect waves-dark"><i class="fa fa-shopping-cart"></i> Ventas</a>
                        </li>
                        <li>
                            <a class="waves-effect waves-dark"><i class="fa fa-desktop"></i> Productos</a>
                        </li>
                        <li>
                            <a href="#" class="waves-effect waves-dark">
                                <i class="fa fa-clipboard">
                                </i> Orden de compra<span class="fa arrow"></span>
                            </a>
                            <ul class="nav nav-second-level">
                                <li>
                                <a href="#">Ordenes de compra</a>
                                </li>
                                <li>
                                <a href="#">Devoluciones</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>

        </div>
        
        @yield('content')
         
        <!-- Despliegue de submenu y boton cerrar -->
        <script src="{{ asset('assets/js/jquery-1.10.2.js') }}"></script>
        <!-- botón cerrar sesión -->
        <script src="{{ asset('assets/materialize/js/materialize.min.js') }}"></script>
        <!--Submenu-->
        <script src="{{ asset('assets/js/jquery.metisMenu.js') }}"></script>
        <script src="{{ asset('assets/js/custom-scripts.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
		
        <script>
            function fisico() {
                document.querySelector(".fisico").style.display = "block";
                document.getElementById("fisico").style.display = "block";
                document.querySelector(".fisico_cli").style.display = "block";
                document.querySelector(".moral").style.display = "none";
                document.getElementById("moral").style.display = "none";
            }

            function moral() {
                document.querySelector(".moral").style.display = "block";
                document.getElementById("moral").style.display = "block";
                document.querySelector(".fisico").style.display = "none";
                document.getElementById("fisico").style.display = "none";
                document.querySelector(".fisico_cli").style.display = "none";
            }
        </script>
        
        <!--Alertas-->
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="{{ asset('assets/js/alerta.js') }}"></script>
        

        <!-- Afecta al menú hamburguesa
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        -->
    </body>
</html>