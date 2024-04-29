@extends('layouts.app')

@section('content')
<div class="container g-2">
    <div class="text-center  mb-3 g-2 mt-2">
        <!-- <button class="btn btn-primary" > -->
            <a  class="btn btn-primary" href="{{route('product.create')}}">Agregar Productos</a>
    <!-- </button> -->
    </div>
    <div class="table">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>descripcion</th>
                    <th>precio</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->price }}</td>
                    <td>
                        <div class="btn-group">
                            <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                acciones
                            </button>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="{{route('product.edit', $product->id)}}">Editar</a>
                                    <a href="">
                                        <form action="{{route('product.destroy', $product->id)}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit">Eliminar</button>
                                        </form>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection