<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'TE APOYAMOS SAS')</title>

    @vite('resources/css/app.css')

</head>
<body>

    <header class="header">
        <div class="nav-container">
            <div class="logo-container">
                <div class="logo">TE</div>
                <div class="logo">APOYAMOS</div>
                <div class="logo">SAS</div>
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
</body>
</html>