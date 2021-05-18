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
    @csrf @method('patch')
    <label for="PRO_Descripcion">Descripcion<br><input type="text" name="PRO_Descripcion" value="{{old('PRO_Descripcion',$producto->PRO_Descripcion)}}"></label>
    <label for="PRO_Precio">Precio<br><input type="checkbox" name="PRO_Precio" value="1" id="PRO_Precio" {{old('PRO_Precio')?'checked="checked"':''}}></label>
    <label for="PRO_Stock">Stock<br><input type="text" name="PRO_Stock" value="{{old('PRO_Stock',$producto->PRO_Stock)}}"></label>
    <label for="PRO_UM">Unidad de Medida<br><input type="text" name="PRO_UM" value="{{old('PRO_UM',$producto->PRO_UM)}}"></label>
    <button >Actualizar Producto</button>
</form>

@endsection