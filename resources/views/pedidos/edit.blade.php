@extends('layout')

@section('title','Pedido | '.$pedido->PED_ID)

@section('content')

<h1>Editar pedido</h1>

@if($errors->any())
    <ul>
    @foreach($errors->all() as $error)
    <li>{{$error}}</li>
    </ul>
    @endforeach
@endif

<form method="POST" action="{{route('pedidos.update',$pedido)}}">
    @method('patch')

    @include('pedidos._form',['btnText'=>'Guardar'])

</form>

@endsection