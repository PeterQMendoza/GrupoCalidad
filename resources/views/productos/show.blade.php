@extends('layout')

@section('title','Producto | '.$producto->nombre)

@section('content')
<div class="container">
    <div class="row">
        <p class="lead">Detalles del Producto</p>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Atributos</th>
                    <th scope="col">Valores</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>ID</td>
                    <td >{{$producto->Id}}</td>
                </tr>
                <tr>
                    <td>Codigo</td>
                    <td >{{$producto->codigo}}</td>
                </tr>
                <tr>
                    <td>Nombre</td>
                    <td >{{$producto->nombre}}</td>
                </tr>
                <tr>
                    <td>Tiene precio</td>
                    <td >{{$producto->precio}}</td>
                </tr>
                <tr>
                    <td>Cantidad en stock</td>
                    <td >{{$producto->stock}}</td>
                </tr>
                <tr>
                    <td>Fecha de caducidad</td>
                    <td >{{$producto->vencimiento}}</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="row">
        <div class="col-10">
            <a class="btn btn-primary" href="{{route('productos.edit',$producto)}}">Editar</a>
        </div>
        <div class="col-2">
            <form action="{{route('productos.destroy',$producto)}}" method="POST">
                @csrf @method('DELETE')
                <button class="btn btn-primary">Eliminar</button>
            </form>
        </div>
    </div>
</div>

@endsection