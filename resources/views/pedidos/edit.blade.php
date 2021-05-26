@extends('layout')

@section('title','Pedido | '.$pedido->PED_ID)

@section('content')


<div class="container-md">
    <div class="row">
        <div class="col">
        <h1>Editar pedido</h1>
        <p class="lead">Formulario para editar Pedido</p>
        <form method="POST" action="{{route('pedidos.update',$pedido)}}">
            @method('patch')
            @include('pedidos._form',['btnText'=>'Guardar'])
        </form>
        </div>
        <div class="col">
        @include('partials.validation_errors')
        </div>
    </div>
</div>

@endsection