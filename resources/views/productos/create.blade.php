@extends('layout')

@section('title','Agregar Producto')

@section('content')
<div class="container-md">
    <div class="row">
        <div class="col">
            <p class="lead">Formulario para crear producto</p>
            <form method="POST" action="{{route('productos.store')}}">
                @include('productos._form',['btnText'=>'Crear'])
            </form>
        </div>
        <div class="col">
        @include('partials.validation_errors')
        </div>
    </div>
</div>

@endsection