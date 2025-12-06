<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Postulaciones CV</title>
    <!-- Carga de Tailwind CSS (asumiendo que usas Vite/NPM) -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://unpkg.com/lucide@latest"></script>
    <style>
        /* Estilos básicos para las insignias de estado */
        .status-accepted { @apply bg-green-100 text-green-800; }
        .status-pending { @apply bg-yellow-100 text-yellow-800; }
        .status-badge { @apply px-2 inline-flex text-xs leading-5 font-semibold rounded-full; }
    </style>
</head>
<body class="bg-gray-100 font-sans antialiased">

    <div class="min-h-screen flex flex-col">
        <!-- Navegación Admin -->
        <nav class="bg-white shadow-md">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between h-20">
                    <div class="flex items-center">
                        <img src="{{ asset('img/logo_titulo.png') }}" alt="Logo" class="h-16 w-auto">
                    </div>

                    <div class="flex items-center">
                        <span class="font-bold text-xl text-blue-900">PANEL DE GESTIÓN</span>
                    </div>
                    <div class="flex items-center space-x-4">
                        <a href="{{ route('home') }}" class="text-gray-600 hover:text-blue-900 transition duration-150">
                            Volver a la Landing
                        </a>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Contenido Principal -->
        <main class="flex-grow p-4 sm:p-6 lg:p-8">
            <div class="max-w-7xl mx-auto">
                <h1 class="text-3xl font-bold text-gray-900 mb-8">Gestión de Postulaciones (CV)</h1>

                <!-- Mensajes de Estado (Success/Error) -->
                @if (session('success'))
                    <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-6 rounded-lg">
                        {{ session('success') }}
                    </div>
                @endif
                @if (session('error'))
                    <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-6 rounded-lg">
                        {{ session('error') }}
                    </div>
                @endif

                <!-- Tabla de Postulaciones -->
                <div class="bg-white shadow overflow-hidden rounded-lg">
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Nombre
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Email
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Fecha Envío
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Estado
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Acciones
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @forelse ($applications as $app)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ $app->name }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $app->email }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $app->created_at->format('d/M/Y H:i') }}</td>
                                        
                                        <!-- Muestra el estado con insignia de color -->
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span class="status-badge {{ $app->accepted ? 'status-accepted' : 'status-pending' }}">
                                                {{ $app->accepted ? 'Aceptado' : 'Pendiente' }}
                                            </span>
                                        </td>

                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium flex space-x-3 items-center">
                                            <!-- Formulario para Toggle (cambiar estado) -->
                                            <form action="{{ route('admin.applications.toggleAccepted', $app) }}" method="POST" class="inline-block">
                                                @csrf
                                                @method('PUT')
                                                <button type="submit" 
                                                        class="px-3 py-1 text-xs font-semibold rounded-lg transition duration-150 shadow-sm
                                                        {{ $app->accepted 
                                                            ? 'bg-red-500 text-white hover:bg-red-600' 
                                                            : 'bg-green-500 text-white hover:bg-green-600' }}"
                                                        title="{{ $app->accepted ? 'Marcar como Pendiente' : 'Marcar como Aceptado/Revisado' }}">
                                                    {{ $app->accepted ? 'Pendiente' : 'Aceptar' }}
                                                </button>
                                            </form>

                                            <!-- Enlace de Descarga -->
                                            <a href="{{ route('admin.applications.download', $app) }}" 
                                               class="text-blue-500 hover:text-blue-600 transition duration-150 p-2 rounded-full hover:bg-gray-100" title="Descargar CV">
                                                <!-- Icono de descarga de Lucide -->
                                                <i data-lucide="download" class="w-4 h-4 inline-block"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="px-6 py-4 text-center text-gray-500">No hay postulaciones para mostrar.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
                
            </div>
        </main>

        <!-- Script para inicializar Lucide Icons -->
        <script>
            lucide.createIcons();
        </script>
    </div>
</body>
</html>
