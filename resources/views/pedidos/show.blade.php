@extends('layout')

@section('title','Pedido | '.$pedido->PED_ID)

@section('content')

{{$pedido}}

<a href="{{route('pedidos.edit',$pedido)}}">Editar</a>

<form action="{{route('pedidos.destroy',$pedido)}}" method="POST">
    @csrf @method('DELETE')
    <button>Eliminar</button>
</form>

@endsection