@extends('layout')

@section('title','Producto | '.$producto->PRO_Descripcion)

@section('content')
<div class="container-md">
    <div class="row">
        <div class="col">
            <p class="lead">Formulario para editar producto</p>
            <form method="POST" action="{{route('productos.update',$producto)}}">
                @method('patch')
                @include('productos._form',['btnText'=>'Guardar'])
            </form>
        </div>
        <div class="col">
        @include('partials.validation_errors')
        </div>
    </div>
</div>


@endsection