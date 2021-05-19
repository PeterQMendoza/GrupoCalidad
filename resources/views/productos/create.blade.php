@extends('layout')

@section('title','Agregar Producto')

@section('content')
<p>formulario para crear producto</p>

@include('partials.validation_errors')

<form method="POST" action="{{route('productos.store')}}">

    @include('productos._form',['btnText'=>'Crear'])

</form>

@endsection