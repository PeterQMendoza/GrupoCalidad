@extends('layout')

@section('title','Pedido')

@section('content')
<div>
    <h1>Pedidos</h1>
    <div>
        @forelse($pedido as $ped)
        <div>
            <div>
                <div>
                    <h5>{{$ped->PED_FechaPedido}}</h5>
                    <p>{{$ped->PED_Monto}}</p>
                    <a href="{{route('pedidos.show',$ped)}}">detalles</a>
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
        {{$pedido->links()}}
        <a href="{{route('pedidos.create')}}">Nuevo Pedido</a>

    </div>
@endsection