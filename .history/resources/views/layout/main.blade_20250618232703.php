<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>



    <link rel="stylesheet"  href="{{ asset('css/general.css') }}">
    <link rel="stylesheet"  href="{{ asset('css/cabeceraPie.css') }}">
    <link rel="stylesheet"  href="{{ asset('css/modoOscuro.css') }}">


</head>
<body>


    <!-- Menú superior -->
    <header>
        <nav>
            <ul>
                <li><a href="{{ route( 'index')}}">Inicio</a></li>
                <li class="dropdown">
                    <a href="{{ route( 'recetaPopulares')}}" class="dropbtn">Recetas</a>
                    <div class="dropdown-content">
                        <a href="{{ route( 'recetaPopulares')}}">Recetas Populares</a>
                        <a href="{{ route( 'buscador')}}">Buscador de Recetas</a>
                        <a href="{{ route( 'desayuno')}}">Desayunos</a>
                        <a href="{{ route( 'comida')}}">Comidas</a>
                        <a href="{{ route( 'cena')}}">Cenas</a>
                        <a href="{{ route( 'bebida')}}">Bebidas</a>
                        <a href="{{ route( 'postre')}}">Postres</a>
                    </div>
                </li>
                <li><a href="{{ route( 'nosotros')}}">Sobre nosotros</a></li>
                <li><a href="{{ route( 'contacto')}}">Contacto</a></li>
                <li><a href="{{ route( 'newsletter')}}">Newsletter</a></li>
            </ul>
        </nav>
        <div>
            <button id="modo-oscuro" class="boton-modo-oscuro">🌙 Modo Oscuro</button>
        </div>
    </header>

    <main class="container">
        @yield('content')
    </main>
    <footer>
        <p>&copy; 2025 Recetas de Cocina EBIS. Todos los derechos reservados.</p><a class="privacidad-cookies" href="privacidad.html">Política de Privacidad y Cookies</a>
    </footer>

    @yield('scripts')
    @vite(['resources/js/modooscuro.js'])
    @vite(['public/css/modooscuro.css'])
    @vite(['public/css/landingpage.css'])




</body>
</html>
