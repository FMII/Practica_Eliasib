@extends('adminlte::page')

@section('title', $movie['titulo'])

@section('content_header')
    <h1>{{ $movie['titulo'] }}</h1>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-6">
            <img src="{{ $movie['imagen'] }}" class="img-fluid rounded" alt="{{ $movie['titulo'] }}">
        </div>
        <div class="col-md-6">
            <h2>{{ $movie['titulo'] }}</h2>
            <p><strong>Actor principal:</strong> {{ $movie['actor'] }}</p>
            <p><strong>Descripción:</strong> {{ $movie['descripcion'] }}</p>
            <p><strong>Fecha de estreno:</strong> {{ $movie['fecha_estreno'] }}</p>
            <a href="{{ url('/') }}" class="btn btn-primary">Volver</a>
        </div>
    </div>
@endsection