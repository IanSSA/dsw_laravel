@extends('layouts.admin')
@section('title', $viewData["title"])
@section('content')
<div class="card mb-4">
  <div class="card-header">
    Crear producto
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $errors)
              <li>{{$errors}}</li>
          @endforeach
        </ul>
      </div>
    @endif
    <form action="{{ route('admin.product.update', ['id'=> $viewData['producto']['id']]) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
      <div class="row">
        <div class="col">
          <div class="mb-3 row">
            <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Nombre:</label>
            <div class="col-lg-10 col-md-6 col-sm-12">
              <input name="name" id="name" value="{{$viewData['producto']["nombre_completo"]}}" type="text" class="form-control">
            </div>
          </div>
        </div>
        <div class="col">
          <div class="mb-3 row">
            <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Precio:</label>
            <div class="col-lg-10 col-md-6 col-sm-12">
              <input name="price" id="price" value="{{$viewData['producto']["precio"]}}" type="number" class="form-control">
            </div>
          </div>
        </div>
      </div>
      <div class="mb-3">
        <label class="form-label">Descripción</label>
        <textarea class="form-control" name="description" id="description" rows="3"></textarea>
      </div>
      <div class="mb-3">
        <img src="{{ asset("storage/{$viewData['producto']['pic_name']}") }}" class="img-fluid rounded">
        <label for="" class="form-label">Imagen del producto</label>
        <input name="imagen" id="imagen" type="file" class="form-control">
      </div>
      <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
  </div>
</div>
@endsection