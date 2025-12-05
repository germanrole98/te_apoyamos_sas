@extends('layouts.app')

@section('content')

    <!-- Contenedor Principal de la Landing Page -->
    <div class="landing-page">

    
        <!-- SECCIÓN 1: INICIO / HERO (ID: inicio) -->

        <section id="inicio" class="py-20 md:py-32 bg-gray-50">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                    
                    <!-- Columna Izquierda: Imagen de Fondo -->
                    <div class="relative h-96 lg:h-auto overflow-hidden rounded-lg shadow-xl">
                        {{-- Imagen del inicio --}}
                        <img src="{{ asset('img/img-home.jpg') }}" alt="Reunión legal con mazo" class="w-full h-full object-cover">
                    </div>

                    <!-- Columna Derecha: Texto Principal -->
                    <div class="text-center lg:text-left">
                        <h1 class="text-5xl md:text-6xl font-extrabold text-gray-900 leading-tight mb-4">
                            Te brindamos 
                            <span class="text-secondary-mint">soluciones legales</span> 
                            confiables y seguras.
                        </h1>
                        <p class="text-xl text-gray-600 mb-8">
                            Un equipo de profesionales dedicados a proteger tus intereses y ofrecerte el mejor camino legal.
                        </p>
                        <a href="#servicios" class="inline-block px-8 py-3 bg-blue-900 text-white font-semibold rounded-lg shadow-md hover:bg-emerald-500 transition duration-300">
                            Conoce nuestros servicios
                        </a>
                    </div>

                </div>
            </div>
        </section>

        <!-- ============================================== -->
        <!-- SECCIÓN 2: NOSOTROS (ID: nosotros) -->
        <!-- ============================================== -->

        <section id="nosotros" class="py-20 md:py-32 bg-white">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                    
                    <!-- Columna Izquierda: Texto y Alianzas -->
                    <div class="lg:pr-12">
                        <h2 class="text-5xl font-bold text-primary-dark mb-6">Sobre nosotros</h2>
                        <p class="text-gray-600 mb-8 leading-relaxed">
                            En TE APOYAMOS SAS, nuestra misión es ser su socio estratégico en la compleja esfera legal. 
                            Con una trayectoria consolidada basada en la ética, la experiencia y la innovación, brindamos soluciones jurídicas confiables y personalizadas 
                            que se anticipan a los desafíos de nuestros clientes. Nuestro equipo está compuesto por profesionales altamente especializados en diversas 
                            ramas del derecho, comprometidos con la excelencia y enfocados en proteger sus intereses y garantizar la seguridad jurídica de su patrimonio 
                            y sus proyectos a nivel nacional.
                        </p>

                        <h3 class="text-4xl font-semibold text-primary-dark mb-6">Nuestras Alianzas</h3>
                        <div class="flex flex-wrap gap-4 justify-center lg:justify-start">
                            <div class="px-8 py-6 border-2 border-secondary-mint text-secondary-mint rounded-full font-semibold hover:hover:bg-emerald-500 hover:text-white hover:border-emerald-200 transition duration-200 cursor-pointer">Alianza A</div>
                            <div class="px-8 py-6 border-2 border-secondary-mint text-secondary-mint rounded-full font-semibold hover:hover:bg-emerald-500 hover:text-white hover:border-emerald-200 transition duration-200 cursor-pointer"">Alianza B</div>
                            <div class="px-8 py-6 border-2 border-secondary-mint text-secondary-mint rounded-full font-semibold hover:hover:bg-emerald-500 hover:text-white hover:border-emerald-200 transition duration-200 cursor-pointer">Alianza C</div>
                        </div>
                    </div>

                    <!-- Columna Derecha: Imagen del equipo -->
                    <div class="relative h-96 overflow-hidden rounded-lg shadow-xl hidden lg:block">
                        {{-- Imagen del equipo --}}
                        <img src="{{ asset('img/img-about.jpg') }}" alt="Equipo de trabajo" class="w-full h-full object-cover">
                    </div>

                </div>
            </div>
        </section>

        <!-- ============================================== -->
        <!-- SECCIÓN 3: SERVICIOS (ID: servicios) -->
        <!-- ============================================== -->

    
        <section id="servicios" class="py-20 md:py-32 bg-gray-100">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 text-center">
                <h2 class="text-4xl font-bold text-primary-dark mb-12">Nuestros servicios</h2>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    
                    {{-- Tarjeta de Servicio 1 --}}
                    <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-2xl transition duration-300">
                        <i data-lucide="scale" class="w-12 h-12 text-secondary-mint mx-auto mb-4"></i>
                        <h3 class="text-2xl font-semibold text-primary-dark mb-3">Derecho Corporativo y Mercantil</h3>
                        <p class="text-gray-600 mb-6">
                            Asesoría integral en la constitución de empresas, fusiones, adquisiciones y reestructuraciones. Garantizamos el cumplimiento normativo para la operación de su negocio.
                        </p>
                        <button class="px-6 py-2 bg-blue-900 text-white font-medium rounded-lg hover:bg-emerald-500 transition">Más información</button>
                    </div>

                    {{-- Tarjeta de Servicio 2 --}}
                    <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-2xl transition duration-300">
                        <i data-lucide="briefcase" class="w-12 h-12 text-secondary-mint mx-auto mb-4"></i>
                        <h3 class="text-2xl font-semibold text-primary-dark mb-3">Litigio y Resolución de Disputas</h3>
                        <p class="text-gray-600 mb-6">
                            Representación efectiva en procesos judiciales civiles, comerciales y administrativos. Enfocados en soluciones rápidas y eficientes para proteger sus intereses.
                        </p>
                        <button class="px-6 py-2 bg-blue-900 text-white font-medium rounded-lg hover:bg-emerald-500 transition">Más información</button>
                    </div>

                    {{-- Tarjeta de Servicio 3 --}}
                    <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-2xl transition duration-300">
                        <i data-lucide="handshake" class="w-12 h-12 text-secondary-mint mx-auto mb-4"></i>
                        <h3 class="text-2xl font-semibold text-primary-dark mb-3">Asesoría en Derecho Laboral</h3>
                        <p class="text-gray-600 mb-6">
                            Gestión de contratos, elaboración de reglamentos internos y defensa en controversias laborales. Aseguramos un entorno de trabajo justo y legal.
                        </p>
                        <button class="px-6 py-2 bg-blue-900 text-white font-medium rounded-lg hover:bg-emerald-500 transition">Más información</button>
                    </div>

                </div>
            </div>
        </section>
        
        

        <!-- ============================================== -->
        <!-- SECCIÓN 5: POSTÚLATE (ID: postulate)
        <!-- ============================================== -->

        <section id="postulate" class="py-20 md:py-32 bg-gray-50">
            <div class="mx-auto max-w-3xl px-4 sm:px-6 lg:px-8 text-center">
                
                <h2 class="text-4xl font-bold text-primary-dark mb-10">Formulario de postulación</h2>

                <div class="bg-white p-8 md:p-12 rounded-xl shadow-2xl">

                    <!-- MENSAJES DE ESTADO (Éxito o Error) -->
                    @if (session('success'))
                        <div class="success bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-6 rounded-lg text-left" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if (session('error'))
                         <div class="error bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-6 rounded-lg text-left" role="alert">
                            {{ session('error') }}
                        </div>
                    @endif
                    
                    <form action="{{ route('cv.store') }}" method="POST" enctype="multipart/form-data"> 
                        @csrf
                        
                        <!-- Nombre Completo -->
                        <div class="form-group mb-6 text-left">
                            <label for="name" class="block text-gray-700 font-medium mb-2">Nombre Completo *</label>
                            <input type="text" id="name" name="name" value="{{ old('name') }}" required
                                class="w-full px-4 py-3 rounded-lg border-2 border-gray-300 focus:border-secondary-mint focus:ring-secondary-mint transition duration-150 @error('name') border-red-500 @enderror" placeholder="Tu nombre completo">
                            @error('name')
                                <div class="error text-red-500 text-sm mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Correo Electrónico -->
                        <div class="form-group mb-6 text-left">
                            <label for="email" class="block text-gray-700 font-medium mb-2">Correo Electrónico *</label>
                            <input type="email" id="email" name="email" value="{{ old('email') }}" required
                                class="w-full px-4 py-3 rounded-lg border-2 border-gray-300 focus:border-secondary-mint focus:ring-secondary-mint transition duration-150 @error('email') border-red-500 @enderror" placeholder="ejemplo@correo.com">
                            @error('email')
                                <div class="error text-red-500 text-sm mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Teléfono de Contacto -->
                        <div class="form-group mb-6 text-left">
                            <label for="phone" class="block text-gray-700 font-medium mb-2">Teléfono de Contacto</label>
                            <input type="text" id="phone" name="phone" value="{{ old('phone') }}"
                                class="w-full px-4 py-3 rounded-lg border-2 border-gray-300 focus:border-secondary-mint focus:ring-secondary-mint transition duration-150 @error('phone') border-red-500 @enderror" placeholder="Opcional">
                            @error('phone')
                                <div class="error text-red-500 text-sm mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Mensaje Adicional -->
                        <div class="form-group mb-6 text-left">
                            <label for="message" class="block text-gray-700 font-medium mb-2">Mensaje Adicional</label>
                            <textarea id="message" name="message" rows="4"
                                class="w-full px-4 py-3 rounded-lg border-2 border-gray-300 focus:border-secondary-mint focus:ring-secondary-mint transition duration-150 resize-none @error('message') border-red-500 @enderror" placeholder="Háblanos sobre tu experiencia o interés">{{ old('message') }}</textarea>
                            @error('message')
                                <div class="error text-red-500 text-sm mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Subir Hoja de Vida -->
                        <div class="form-group mb-8 text-left">
                            <label for="cv_file" class="block text-gray-700 font-medium mb-2">Subir Hoja de Vida (PDF/DOCX, máx 5MB) *</label>
                            <input type="file" id="cv_file" name="cv_file" required
                                class="w-full p-2 text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none @error('cv_file') border-red-500 @enderror">
                            @error('cv_file')
                                <div class="error text-red-500 text-sm mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Botón de Envío -->
                        <button type="submit" class="btn w-full px-6 py-3 bg-blue-900 text-white font-semibold rounded-lg shadow-md hover:bg-emerald-500 transition duration-300">
                            Enviar Hoja de Vida
                        </button>

                    </form>
                </div>
            </div>
        </section>


        <!-- ============================================== -->
        <!-- SECCIÓN 6: CONTACTO (ID: contacto) -->
        <!-- ============================================== -->

    
        <section id="contacto" class="py-20 md:py-32 bg-white">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                    
                    <!-- Columna Izquierda: Información de Contacto y Redes -->
                    <div class="text-center lg:text-left">
                        <h2 class="text-4xl font-bold text-primary-dark mb-8">Contáctanos</h2>

                        <div class="space-y-6 mb-10 text-center lg:text-left">
                             <div class="flex items-center justify-center lg:justify-start">
                                <i data-lucide="map-pin" class="w-8 h-8 text-secondary-mint mr-4"></i>
                                <div>
                                    <h3 class="text-xl font-semibold text-gray-700">Ubicación</h3>
                                    <p class="text-gray-500">Dirección de la Oficina Principal</p>
                                </div>
                            </div>
                            <div class="flex items-center justify-center lg:justify-start">
                                <i data-lucide="phone" class="w-8 h-8 text-secondary-mint mr-4"></i>
                                <div>
                                    <h3 class="text-xl font-semibold text-gray-700">Teléfono</h3>
                                    <p class="text-gray-500">+57 1 555-0000</p>
                                </div>
                            </div>
                            <div class="flex items-center justify-center lg:justify-start">
                                <i data-lucide="mail" class="w-8 h-8 text-secondary-mint mr-4"></i>
                                <div>
                                    <h3 class="text-xl font-semibold text-gray-700">Correo</h3>
                                    <p class="text-gray-500">contacto@teapoyamos.sas.com</p>
                                </div>
                            </div>
                        </div>

                       
                    </div>

                    <!-- Columna Derecha: Formulario de Contacto -->
                    <div class="bg-gray-50 p-8 md:p-12 rounded-xl shadow-2xl">
                        <h3 class="text-3xl font-bold text-primary-dark mb-6 text-center">Formulario de contacto</h3>
                        <form action="#" method="POST"> 
                             @csrf
                            <div class="mb-6">
                                <input type="text" name="contact_name" placeholder="Ingresa tu nombre" required
                                    class="w-full px-4 py-3 rounded-lg border-2 border-gray-300 focus:border-secondary-mint focus:ring-secondary-mint transition duration-150">
                            </div>
                            <div class="mb-6">
                                <input type="email" name="contact_email" placeholder="Ingresa tu correo" required
                                    class="w-full px-4 py-3 rounded-lg border-2 border-gray-300 focus:border-secondary-mint focus:ring-secondary-mint transition duration-150">
                            </div>
                            <div class="mb-8">
                                <textarea name="description" placeholder="Ingresa la descripción de tu solicitud" rows="4" required
                                    class="w-full px-4 py-3 rounded-lg border-2 border-gray-300 focus:border-secondary-mint focus:ring-secondary-mint transition duration-150 resize-none"></textarea>
                            </div>

                            <button type="submit" class="w-full px-6 py-3 bg-blue-900 text-white font-semibold rounded-lg shadow-md hover:bg-emerald-500 transition duration-300">
                                Enviar
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </section>


    </div>

@endsection