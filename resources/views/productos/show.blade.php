@extends('layout')

@section('title','Producto | '.$producto->PRO_Descripcion)

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
                    <td >{{$producto->PRO_ID}}</td>
                </tr>
                <tr>
                    <td>Descripcion</td>
                    <td >{{$producto->PRO_Descripcion}}</td>
                </tr>
                <tr>
                    <td>Con Precio</td>
                    <td >{{$producto->PRO_Precio}}</td>
                </tr>
                <tr>
                    <td>Cantidad en Stock</td>
                    <td >{{$producto->PRO_Stock}}</td>
                </tr>
                <tr>
                    <td>Unidades de Medida</td>
                    <td >{{$producto->PRO_UM}}</td>
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