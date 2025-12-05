<!DOCTYPE html>
<html lang="es" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'TE APOYAMOS SAS')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 text-gray-800">



    <!-- NAVBAR -->
    <nav class="bg-white shadow-lg fixed w-full z-10 top-0 text-lg border-b-2 border-emerald-500">
        <div class="max-w-7xl mx-auto flex items-center justify-between py-4 px-6">

            <!-- LOGO -->
            <div class="flex items-center">
                <img src="{{ asset('img/logo_titulo.png') }}" alt="Logo" class="h-16 w-auto">
            </div>

            <!-- LINKS CENTRALES -->
            <div class="hidden md:flex space-x-8 text-gray-700 font-medium">
                <a href="#inicio" class="hover:text-blue-900 transition">Inicio</a>
                <a href="#nosotros" class="hover:text-blue-900 transition">Nosotros</a>
                <a href="#servicios" class="hover:text-blue-900 transition">Servicios</a>
                <a href="#postulate" class="hover:text-blue-900 transition">Postúlate</a>
                <a href="#contacto" class="hover:text-blue-900 transition">Contacto</a>
            </div>

            <!-- BOTONES -->
            <div class="hidden md:flex space-x-4">
                <a href="#"
                    class="px-4 py-2 bg-blue-900 text-white rounded-lg shadow hover:bg-blue-700 transition">
                    Iniciar sesión
                </a>
                <a href="#"
                    class="px-4 py-2 bg-blue-900 text-white rounded-lg shadow hover:bg-blue-700 transition">
                    Registrarse
                </a>
            </div>



        </div>

        
    </nav>

    <!-- CONTENIDO PRINCIPAL -->
    <main class="max-w-7xl mx-auto py-10 px-6">
        @yield('content')
    </main>

    <!-- FOOTER -->
    <footer class="bg-blue-900 text-gray-300 py-8 mt-12">
        <div class="max-w-7xl mx-auto text-center space-y-3">

            <div class="text-sm">
                <span class="font-semibold">Dirección</span> |
                <span>Teléfono</span> |
                <span>Correo</span>
            </div>

            <div class="text-sm">
                © Todos los derechos reservados
            </div>

            <div class="text-sm space-x-2">
                <a href="#" class="hover:text-white">Políticas de privacidad</a> |
                <a href="#" class="hover:text-white">Términos de uso</a>
            </div>

        </div>
    </footer>

</body>
</html>
