@extends('layout')

@section('title','Producto | '.$producto->PRO_Descripcion)

@section('content')

{{$producto}}

<a href="{{route('productos.edit',$producto)}}">Editar</a>

<form action="{{route('productos.destroy',$producto)}}" method="POST">
    @csrf @method('DELETE')
    <button>Eliminar</button>
</form>

@endsection