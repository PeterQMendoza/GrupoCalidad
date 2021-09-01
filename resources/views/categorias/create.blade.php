@extends('layout')

@section('title','Agregar Categoria')

@section('content')
<div class="container-md">
    <div class="row">
        <div class="col">
            <p class="lead">Formulario para agregar nueva categoria de producto</p>
            <form method="POST" action="{{route('categorias.store')}}">
                @include('categorias._form',['btnText'=>'Crear'])
            </form>
        </div>
        <div class="col">
        @include('partials.validation_errors')
        </div>
    </div>
</div>

@endsection