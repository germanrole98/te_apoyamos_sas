@extends('layouts.app')

@section('title', 'Nuestros Servicios Legales')

@section('content')
    <div class="services-container-main">
        <div class="services-header">
            <h1>Nuestros <span>servicios</span></h1>
        </div>

        <div class="services-container">

            <div class="services-card">
                <h2>Derecho Corporativo y Mercantil</h2>
                <p>
                    Asesoría integral en la constitución de empresas, fusiones, adquisiciones y reestructuraciones. Garantizamos el cumplimiento normativo para la operación de su negocio.
                </p>
                <a href="#" class="btn-more-info">Más información</a>
            </div>

            <div class="services-card">
                <h2>Litigio y Resolución de Disputas</h2>
                <p>
                    Representación efectiva en procesos judiciales civiles, comerciales y administrativos. Enfocados en soluciones rápidas y eficientes para proteger sus intereses.
                </p>
                <a href="#" class="btn-more-info">Más información</a>
            </div>

            <div class="services-card">
                <h2>Asesoría en Derecho Laboral</h2>
                <p>
                    Gestión de contratos, elaboración de reglamentos internos y defensa en controversias laborales. Aseguramos un entorno de trabajo justo y legal.
                </p>
                <a href="#" class="btn-more-info">Más información</a>
            </div>

        </div>
    </div>
@endsection