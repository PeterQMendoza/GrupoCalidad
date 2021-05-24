@extends('layout')

@section('title','Agregar Pedido')

@section('content')
<p>formulario para crear producto</p>

@include('partials.validation_errors')

<form method="POST" action="{{route('pedidos.store')}}">

    @include('pedidos._form',['btnText'=>'Crear'])

</form>

@endsection