@extends('layout')

@section('title','Pedido | '.$pedido->PED_ID)

@section('content')

<div class="container">
    <div class="row">
        <div class="col"></div>
        <div class="col"></div>
    </div>
    <div class="row">
        <div class="col">
            <p class="lead">Detalles del pedido</p>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th>Atributos</th>
                        <th>Valores</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>ID</th>
                        <td>{{$pedido->PED_ID}}</th>
                    </tr>
                    <tr>
                        <th>Fecha de Pedido</th>
                        <td>{{$pedido->PED_FechaPedido}}</td>
                    </tr>
                    <tr>
                        <th>Monto de Pedido</th>
                        <td>{{$pedido->PED_Monto}}</td>
                    </tr>
                    <tr>
                        <th>Estado de Pedido</th>
                        <td>{{$pedido->PED_Estado}}</td>
                    </tr>
                    <tr>
                        <th>
                            <a class="btn btn-primary" href="{{route('pedidos.edit',$pedido)}}">Editar</a>
                        </th>
                        <th>
                            <form action="{{route('pedidos.destroy',$pedido)}}" method="POST">
                                @csrf @method('DELETE')
                                <button class="btn btn-danger">Eliminar</button>
                            </form>
                        </th>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col">
            <p class="lead">Productos del Pedido</p>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th>-</th>
                        <th>-</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>-</th>
                        <td>-</td>
                    </tr>
                    <tr>
                        <th>-</th>
                        <td>-</td>
                    </tr>
                    <tr>
                        <th>-</th>
                        <td>-</td>
                    </tr>
                    <tr>
                        <th>-</th>
                        <td>-</td>
                    </tr>
                    <tr>
                        <th>-</th>
                        <td>-</td>
                    </tr>
                    <tr>
                        <th>-</th>
                        <td>-</td>
                    </tr>
                    <tr>
                        <th>-</th>
                        <td>-</td>
                    </tr>
                    <tr>
                        <th>-</th>
                        <td>-</td>
                    </tr>
                    <tr>
                        <th>-</th>
                        <td>-</td>
                    </tr>
                    <tr>
                        <th>ultimo</th>
                        <td>ultimo</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection