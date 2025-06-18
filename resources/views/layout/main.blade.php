<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>



    <link rel="stylesheet"  href="{{ asset('css/general.css') }}">
    <link rel="stylesheet"  href="{{ asset('css/cabeceraPie.css') }}">
    <link rel="stylesheet"  href="{{ asset('css/modoOscuro.css') }}">
    <link rel="stylesheet"  href="{{ asset('css/landingPage.css') }}">


</head>
<body>

    
    <!-- Menú superior -->
    <header>
        <nav>
            <ul>
                <li><a href="index.html">Inicio</a></li>
                <li class="dropdown">
                    <a href="recetas.html" class="dropbtn">Recetas</a>
                    <div class="dropdown-content">
                        <a href="recetas.html">Recetas Populares</a>
                        <a href="buscador.html">Buscador de Recetas</a>
                        <a href="desayunos.html">Desayunos</a>
                        <a href="comidas.html">Comidas</a>
                        <a href="cenas.html">Cenas</a>
                        <a href="bebidas.html">Bebidas</a>
                        <a href="postres.html">Postres</a>
                    </div>
                </li>
                <li><a href="nosotros.html">Sobre nosotros</a></li>
                <li><a href="contacto.html">Contacto</a></li>
                <li><a href="newsletter.html">Newsletter</a></li>
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
</body>
</html>