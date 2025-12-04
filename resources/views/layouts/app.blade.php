<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'TE APOYAMOS SAS')</title>


    <!-- CDN de Bootstrap CSS -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    

    @vite('resources/css/app.css')

</head>
<body>

    <header class="header">

        <div class="nav-container">

            <div class="logo-container">
                <div class="logo-img">
                    <img src="{{asset('img/logo_titulo.png')}}" alt="logo">
                </div>
            </div>
            
            <div class="nav-links">
                <a href="{{ route('home') }}">Inicio</a>
                <a href="{{ route('about') }}">Nosotros</a>
                <a href="{{ route('services') }}">Servicios</a>
                <a href="#">Noticias</a>
                <a href="{{ route('cv.create') }}">Postúlate</a>
                <a href="#">Contacto</a>
            </div>
            <div class="nav-buttons">
                <a href="#" class="btn-blue">Iniciar sesión</a>
                <a href="#" class="btn-blue">Registrarse</a>
            </div>

        </div>

    </header>

    <div class="line"></div>

    <main class="content-container">
        @yield('content')
    </main>

    <footer class="footer">
        <div class="footer-container">
            <div>
                <span>Dirección</span> |
                <span>Teléfono</span> |
                <span>Correo</span>
            </div>
            <div>
                © Todos los derechos reservados
            </div>
            <div class="footer-links">
                <a href="#">Políticas de privacidad</a> |
                <a href="#">Términos de uso</a>
            </div>
        </div>
    </footer>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

</body>
</html>