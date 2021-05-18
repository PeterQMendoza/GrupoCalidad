@extends('layout')

@section('title','Producto | '.$producto->PRO_Descripcion)

@section('content')

{{$producto}}

<a href="{{route('productos.edit',$producto)}}">Editar</a>

@endsection