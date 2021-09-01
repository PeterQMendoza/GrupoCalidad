@extends('layout')

@section('title','Categoria | '.$categoria->nombre)

@section('content')
<div class="container-md">
    <div class="row">
        <div class="col">
            <p class="lead">Formulario para editar categoria</p>
            <form method="POST" action="{{route('categorias.update',$categoria)}}">
                @method('patch')
                @include('categorias._form',['btnText'=>'Guardar'])
            </form>
        </div>
        <div class="col">
        @include('partials.validation_errors')
        </div>
    </div>
</div>


@endsection