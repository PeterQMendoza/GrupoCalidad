@extends('layout')

@section('title','Pedido')

@section('content')

<div class="container">
    <h1>Pedidos</h1>
    <div class="row justify-content-md-start">
        <div class="col-6 align-self-start">
            <a class="btn btn-primary" href="{{route('pedidos.create')}}">Nuevo Pedido
            <span class="badge badge-light">+</span>
            </a>
        </div>
        <div class="col-6 align-self-end">
            <label for="buscar" class="label">Ordenar por:</label>
            <input type="text" class="form-input" name="ordenar" placeholder="seleccionar">
        </div>
    </div>
    <div class="row">
        <div class="col">
         <p></p>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Fecha de Pedido</th>
                        <th scope="col">Monto</th>
                        <th scope="col">Estado</th>
                        <th scope="col">-</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($pedido as $ped)
                    <tr>
                        <th scope="row">{{$ped->PED_ID}}</th>
                        <th scope="row">{{$ped->PED_FechaPedido}}</th>
                        <th scope="row">{{$ped->PED_Monto}}</th>
                        <th scope="row">{{$ped->PED_Estado}}</th>
                        <th><a class="lin link-info" href="{{route('pedidos.show',$ped)}}">Ver detalles</a></th>
                    </tr>
                    @empty
                    <tr>
                        <th scope="col">-</th>
                        <th scope="col">-</th>
                        <th scope="col">-</th>
                        <th scope="col">-</th>
                        <th scope="col">-</th>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

{{$pedido->links()}}

@endsection