<!-- Usamos, como plantilla, la vista layouts.app (/resources/views/layouts/app.blade.php) -->
@extends('layouts.app')                                 

<!-- Inyectamos el texto que contiene el título en el yield "title" -->
@section("title", $viewData["title"])

<!-- Inyectamos el texto con el contenido de la página en el yield "content" -->
@section('content')
    <div>
        <div class="col-md-6 col-lg-4 mb-2" style="column-count: 2">
            <img src="{{ asset('/img/'. $viewData['producto']['pic_name'])}}" class="img-fluid rounded">
            <div>
                <label>Nombre: {{$viewData['producto']["nombre_completo"]}}</label> <br>
                <label>Precio: {{$viewData['producto']["precio"]}}</label>
            </div>
    </div>

@endsection