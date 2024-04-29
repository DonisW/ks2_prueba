@extends('layouts.app')

@section('content')}
<div class="container">
    <form action="{{route('product.update', $product->id)}}" method="post" >
    @csrf 
    @method('put')
        <div class="mb-3">
            <label for="name" class="form-label">Nombre</label>
            <input type="text" class="form-control" name="name" placeholder="nombre del producto" value="{{$product->name}}">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">descripcion</label>
            <input type="text" class="form-control" name="description" placeholder="descripcion del producto" value="{{$product->description}}">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">precio</label>
            <input type="text" class="form-control" name="price" placeholder="precio del producto" value="{{$product->price}}">
        </div>
        <button type="submit" class="btn btn-primary">Agregar</button>
    </form>
</div>
@endsection