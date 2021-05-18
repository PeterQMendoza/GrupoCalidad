@extends('layout')

@section('title','Producto')

@section('content')
<div>
    <h1>Productos</h1>
    <div>
        @forelse($producto as $pro)
        <div>
            <div>
                <div>
                    <h5>{{$pro->PRO_Descripcion}}</h5>
                    <p>{{$pro->PRO_Precio}}</p>
                    <a href="{{route('productos.show',$pro)}}">detalles</a>
                </div>
            </div>
        </div>
        @empty
        <div class="col mb-4">
            <div class="card h-100">
                <!-- <img src="..." class="card-img-top" alt="..."> -->
                <div class="card-body">
                    <h5 class="card-title">Workshops empty</h5>
                    <p class="card-text">I'm sorry, we don't have any workshops to show.</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">nothing</small>
                </div>
            </div>
        </div>
        @endforelse
        {{$producto->links()}}
        <a href="{{route('productos.create')}}">NUevo Producto</a>
    </div>
@endsection