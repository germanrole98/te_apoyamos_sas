@extends('layouts.app')
@section('title', 'Trabaja con Nosotros')
@section('content')

    <h1>Formulario de postulación</h1>

    @if (session('success'))
        <div class="success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('cv.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="name">Nombre Completo *</label>
            <input type="text" id="name" name="name" value="{{ old('name') }}" required>
            @error('name')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="email">Correo Electrónico *</label>
            <input type="email" id="email" name="email" value="{{ old('email') }}" required>
            @error('email')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="phone">Teléfono de Contacto</label>
            <input type="text" id="phone" name="phone" value="{{ old('phone') }}">
            @error('phone')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="message">Mensaje Adicional</label>
            <textarea id="message" name="message" rows="4">{{ old('message') }}</textarea>
            @error('message')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="cv_file">Subir Hoja de Vida (PDF/DOCX, máx 5MB) *</label>
            <input type="file" id="cv_file" name="cv_file" required>
            @error('cv_file')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn">Enviar Hoja de Vida</button>
    </form>
@endsection
