@extends('layout')

@section('title','Detalle de Pedido | '.$detalle_pedido->PED_ID)

@section('content')

{{$detalle_pedido}}

<a href="{{route('detalle_pedidos.edit',$detalle_pedido)}}">Editar</a>

<form action="{{route('detalle_pedidos.destroy',$detalle_pedido)}}" method="POST">
    @csrf @method('DELETE')
    <button>Eliminar</button>
</form>

@endsection