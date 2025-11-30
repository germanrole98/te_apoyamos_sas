@extends('layouts.app')

@section('title', 'Soluciones Legales Confiables y Seguras')

@section('content')
    <div class="hero-section">
        <div class="hero-image">

            <img src="{{ asset('img/img-home.jpg') }}" alt="Soluciones Legales">

        </div>

        <div class="hero-text">

            <h1>Te brindamos <span class="highlight">soluciones </span>legales <span class="highlight">confiables y seguras.</span></h1>
            <a href="{{ route('services') }}" class="btn-service">Conoce nuestros servicios</a>

        </div>
    </div>
@endsection