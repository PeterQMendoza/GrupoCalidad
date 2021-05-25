@extends('layout')

@section('title','Detalle de Pedidos')

@section('content')
<div>
    <h1>Detalle de Pedidos</h1>
    <div>
        @forelse($detalle_pedido as $det_ped)
        <div>
            <div>
                <div>
                    <h5>{{$det_ped->DP_Precio}}</h5>
                    <p>{{$det_ped->DP_Cantidad}}</p>
                    <a href="{{route('detalle_pedidos.show',$det_ped)}}">detalles</a>
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
        {{$detalle_pedido->links()}}
        <a href="{{route('detalle_pedidos.create')}}">Nuevo Detalle de Pedido</a>

    </div>
@endsection