@extends('layout')

@section('title','Agregar Producto')

@section('content')
<p>formulario para crear producto</p>

@if($errors->any())
    <ul>
    @foreach($errors->all() as $error)
    <li>{{$error}}</li>
    </ul>
    @endforeach
@endif

<form method="POST" action="{{route('productos.store')}}">
    @csrf
    <label for="PRO_Descripcion">Descripcion<br><input type="text" name="PRO_Descripcion" value="{{old('PRO_Descripcion')}}"></label>
    <label for="PRO_Precio">Precio<br><input type="checkbox" name="PRO_Precio" value="1" id="PRO_Precio" {{old('PRO_Precio')?'checked="checked"':''}}></label>
    <label for="PRO_Stock">Stock<br><input type="text" name="PRO_Stock" value="{{old('PRO_Stock')}}"></label>
    <label for="PRO_UM">Unidad de Medida<br><input type="text" name="PRO_UM" value="{{old('PRO_UM')}}"></label>
    <button >Agregar Producto</button>
</form>

@endsection