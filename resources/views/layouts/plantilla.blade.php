<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/bootstrap.js') }}" defer></script>
    <script src="{{ asset('js/all.js') }}" defer></script>
    <script src="{{ asset('js/jquery-1.10.2.js') }}" defer></script>
    <script src="{{ asset('js/graficos.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('w3/fontawesome.css') }}" rel="stylesheet">
    <link href="{{ asset('w3/google-apis.css') }}" rel="stylesheet">
    <link href="{{ asset('w3/w3-theme-black.css') }}" rel="stylesheet">
    <link href="{{ asset('w3/w3.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

        <script src="https://code.highcharts.com/highcharts.js"></script>
        <script src="https://code.highcharts.com/modules/data.js"></script>
        <script src="https://code.highcharts.com/modules/exporting.js"></script>
        <script src="https://code.highcharts.com/modules/export-data.js"></script>
        <link  href="sprites/solid.svg">

        
        <script href="scss/fontawesome.scss" ></script>
        <script href="less/fontawesome.less" ></script>


        <style>
            html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif;}
            .w3-sidebar {
            z-index: 3;
            width: 250px;
            top: 45px;
            bottom: 0;
            height: inherit;
            }
        </style>
</head>
<body style="background-image: url('img/fondo.jpg')">
    <div id="app">
        {{-- Navbar --}}
            <div class="w3-top">
                <div class="w3-bar w3-theme-sgb1 w3-top w3-left-align w3-large">
                    <a class="w3-bar-item w3-button w3-right w3-hide-large w3-hover-white w3-large w3-theme-l1" href="javascript:void(0)" onclick="w3_open()"><i class="fa fa-bars"></i></a>

                    <a href="{{ route('inicio-admin') }}" class="w3-bar-item w3-button w3-theme-l1">Bibliocletas</a>
                    
                </div>
            </div>

        
<!-- Sidebar -->
    <nav class="w3-sidebar w3-bar-block w3-collapse w3-large w3-theme-l5 w3-animate-left" id="mySidebar">
        <a href="javascript:void(0)" onclick="w3_close()" class="w3-right w3-xlarge w3-padding-large w3-hover-black w3-hide-large" title="Close Menu">
        <i class="fa fa-remove"></i>
        </a>
            <h4 class="w3-bar-item"><b>Menu</b></h4>
            <a class="w3-bar-item w3-button w3-hover-black" href="{{ route('inicio-admin') }}">Inicio</a>
            <a class="w3-bar-item w3-button w3-hover-black" href="{{ route('administrar-libros-admin') }}">Administrar Libros</a>
            <a class="w3-bar-item w3-button w3-hover-black" href="{{ route('administrar-voluntarios-admin') }}">Administrar Voluntarios</a>
            <a class="w3-bar-item w3-button w3-hover-black" href="{{ route('administrar-beneficiarios-admin') }}">Administrar Beneficiarios</a>
            <a class="w3-bar-item w3-button w3-hover-black" href="{{ route('prestamos-devoluciones') }}">Prestamos y Devoluciones</a>
            <a class="w3-bar-item w3-button w3-hover-black" href="{{ route('categorias') }}">Categorias</a>
            <a class="w3-bar-item w3-button w3-hover-black" href="{{ route('autores') }}">Autores</a>
            <a class="w3-bar-item w3-button w3-hover-black" href="{{ route('editoriales') }}">Editoriales</a>
            <a class="w3-bar-item w3-button w3-hover-black" href="{{ route('reportes') }}">Reportes</a>

            <!-- Right Side Of Navbar -->
                    <ul class="w3-bar-item w3-button w3-hover-black">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
            

    </nav>

    <!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- Main content: shift it to the right by 250 pixels when the sidebar is visible -->
<div class="w3-main" style="margin-left:250px"></div>






        <main class="py-4">
            @yield('content')
        </main>
    
</div>


    <script>
        // Get the Sidebar
        var mySidebar = document.getElementById("mySidebar");

        // Get the DIV with overlay effect
        var overlayBg = document.getElementById("myOverlay");

        // Toggle between showing and hiding the sidebar, and add overlay effect
        function w3_open() {
          if (mySidebar.style.display === 'block') {
            mySidebar.style.display = 'none';
            overlayBg.style.display = "none";
          } else {
            mySidebar.style.display = 'block';
            overlayBg.style.display = "block";
          }
        }

        // Close the sidebar with the close button
        function w3_close() {
          mySidebar.style.display = "none";
          overlayBg.style.display = "none";
        }
        </script>
</body>
</html>
