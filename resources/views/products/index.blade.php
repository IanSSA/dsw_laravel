<!-- Usamos, como plantilla, la vista layouts.app (/resources/views/layouts/app.blade.php) -->
@extends('layouts.app')                                 

<!-- Inyectamos el texto que contiene el título en el yield "title" -->
@section("title", $viewData["title"])

<!-- Inyectamos el texto con el contenido de la página en el yield "content" -->
@section('content') 

    <div class="row">
        <div class="col-md-6 col-lg-4 mb-2">
            <form action="{{ route('products.show', ['id'=> 1])}}" method="POST">
                @method('GET')
                <img src="{{ asset("/img/game.png") }}" class="img-fluid rounded">
                <button class="btn bg-primary text-white" href="{{ route('home.index') }}">Game</button>
            </form>
        </div>
        <div class="col-md-6 col-lg-4 mb-2">
            <form action="{{ route('products.show', ['id'=> 2])}}" method="POST">
                @method('GET')
                <img src="{{ asset("/img/safe.png") }}" class="img-fluid rounded">
                <button class="btn bg-primary text-white">Safe</button>
            </form>
        </div>
        <div class="col-md-6 col-lg-4 mb-2">
            <form action="{{ route('products.show', ['id'=> 3])}}" method="POST">
                @method('GET')
                <img src="{{ asset("/img/submarine.png") }}" class="img-fluid rounded">
                <button class="btn bg-primary text-white">Submarine</button>
        </div>
    </div>

@endsection