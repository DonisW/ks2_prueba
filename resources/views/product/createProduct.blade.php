@extends('layouts.app')

@section('content')
<div class="container">
<form action="{{route('product.store')}}" method="post">
@csrf
    <div class="mb-3">
        <label for="name" class="form-label">Nombre</label>
        <input type="text" class="form-control" name="name" placeholder="nombre del producto">
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">descripcion</label>
        <input type="text" class="form-control" name="description" placeholder="descripcion del producto">
    </div>
    <div class="mb-3">
        <label for="price" class="form-label">precio</label>
        <input type="text" class="form-control" name="price" placeholder="precio del producto">
    </div>
    <div class="text-center">
        <a class="btn btn-secondary" href="{{route('product.index')}}">Volver</a>
        <button type="submit" class="btn btn-primary">Agregar</button>
    </div>
</form>
</div>

@endsection