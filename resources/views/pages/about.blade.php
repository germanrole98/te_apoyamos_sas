@extends('layouts.app')
@section('title', 'Sobre Nosotros y Alianzas')
@section('content')
    <div class="about-container">
        <div class="about-text">
            <h1>Sobre <span>nosotros</span></h1>
            <p>
                En TE APOYAMOS SAS, nuestra misión es ser su socio estratégico en la compleja esfera legal. Con una trayectoria consolidada basada en la ética, la experiencia y la innovación, brindamos soluciones jurídicas confiables y personalizadas que se anticipan a los desafíos de nuestros clientes. Nuestro equipo está compuesto por profesionales altamente especializados en diversas ramas del derecho, comprometidos con la excelencia y enfocados en proteger sus intereses y garantizar la seguridad jurídica de su patrimonio y sus proyectos a nivel nacional.
            </p>

            <h2>Nuestras <span>Alianzas</span></h2>
            <div class="alliances-container">
                <div class="alliance">Alianza</div>
                <div class="alliance">Alianza</div>
                <div class="alliance">Alianza</div>
                <div class="alliance">Alianza</div>
            </div>
        </div>
        <div class="about-image">
            <img src="{{ asset('img/img-about.jpeg') }}" alt="Nuestro Equipo">
        </div>
    </div>
@endsection