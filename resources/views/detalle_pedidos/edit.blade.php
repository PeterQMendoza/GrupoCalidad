@extends('layout')

@section('title','Detalle de Pedido')

@section('content')

<h1>Editar pedido</h1>

@if($errors->any())
    <ul>
    @foreach($errors->all() as $error)
    <li>{{$error}}</li>
    </ul>
    @endforeach
@endif

<form method="POST" action="{{route('detalle_pedidos.update',$detalle_pedido)}}">
    @method('patch')

    @include('detalle_pedidos._form',['btnText'=>'Guardar'])

</form>

@endsection