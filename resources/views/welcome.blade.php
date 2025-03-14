@extends('adminlte::page')

@section('title', 'Peliculas')

@section('content_header')
<div class="card" style="width: 18rem;">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        {{-- <a href="{{ route('movies.show', $movie['id']) }}" class="btn btn-primary">Ver más</a> --}}
        
    </div>
</div>
@stop

@section('content')
@stop

@section('css')
{{-- Add here extra stylesheets --}}
{{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
<script>
    console.log("Hi, I'm using the Laravel-AdminLTE package!");
</script>
@stop