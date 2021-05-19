@extends('layout')

@section('title','Producto | '.$producto->PRO_Descripcion)

@section('content')

<h1>Editar producto</h1>

@if($errors->any())
    <ul>
    @foreach($errors->all() as $error)
    <li>{{$error}}</li>
    </ul>
    @endforeach
@endif

<form method="POST" action="{{route('productos.update',$producto)}}">
    @method('patch')

    @include('productos._form',['btnText'=>'Guardar'])

</form>

@endsection