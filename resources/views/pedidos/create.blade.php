@extends('layout')

@section('title','Agregar Pedido')

@section('content')

<div class="container-md">
    <div class="row">
        <div class="col">
            <p>formulario para crear producto</p>
            <form method="POST" action="{{route('pedidos.store')}}">
                @include('pedidos._form',['btnText'=>'Crear'])
            </form>
        </div>
        <div class="col">
        @include('partials.validation_errors')
        </div>
    </div>
</div>

@endsection