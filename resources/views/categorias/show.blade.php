@extends('layout')

@section('title','Categoria | '.$categoria->nombre)

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
                    <td >{{$categoria->id}}</td>
                </tr>
                <tr>
                    <td>Codigo</td>
                    <td >{{$categoria->nombre}}</td>
                </tr>
                <tr>
                    <td>Nombre</td>
                    <td >{{$categoria->descripcion}}</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="row">
        <div class="col-10">
            <a class="btn btn-primary" href="{{route('categorias.edit',$categoria)}}">Editar</a>
        </div>
        <div class="col-2">
            <form action="{{route('categorias.destroy',$categoria)}}" method="POST">
                @csrf @method('DELETE')
                <button class="btn btn-primary">Eliminar</button>
            </form>
        </div>
    </div>
</div>

@endsection