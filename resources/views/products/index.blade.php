<!-- Usamos, como plantilla, la vista layouts.app (/resources/views/layouts/app.blade.php) -->
@extends('layouts.app')                                 

<!-- Inyectamos el texto que contiene el título en el yield "title" -->
@section("title", $viewData["title"])

<!-- Inyectamos el texto con el contenido de la página en el yield "content" -->
@section('content') 

    <div class="row">
        @foreach ($viewData['productos'] as $product)
        <div class="col-md-6 col-lg-4 mb-2">
            <form action="{{ route('products.show', ['id'=> $product['id']])}}" method="POST">
                @method('GET')
                <img src="{{ asset("storage/{$product['pic_name']}") }}" class="img-fluid rounded">
                <button class="btn bg-primary text-white" href="{{ route('home.index') }}">{{$product['nombre_completo']}}</button>
            </form>
        </div>
        @endforeach
    </div>

@endsection