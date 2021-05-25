@extends('layout')

@section('title','Agregar detalle Pedido')

@section('content')
<p>formulario para crear producto</p>

@include('partials.validation_errors')

<form method="POST" action="{{route('detalle_pedidos.store')}}">

    @include('detalle_pedidos._form',['btnText'=>'Crear'])

</form>

@endsection