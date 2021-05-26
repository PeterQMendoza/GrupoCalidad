@extends('layout')

@section('title','Producto')

@section('content')
<div class="container-md">
    <h1>@lang('Productos')</h1>
    <h4><a class="badge badge-secondary" href="{{route('productos.create')}}">Nuevo Producto</a></h4>
    <div class="row row-cols-1 row-cols-md-3">
        @forelse($producto as $pro)
        <div class="col mb-4">
            <div class="card h-100">
                <!-- <img src="..." class="card-img-top" alt="..."> -->
                <div class="card-body">
                    <div class="container">
                        <div class="row align-items-start">
                            <div class="col-8">
                                <h5 class="card-title">{{$pro->PRO_Descripcion}}</h5>
                            </div>
                            <div class="col-4">
                                <span class="babge badge-pill {{($pro->PRO_Stock>15)?'badge-success':(($pro->PRO_Stock>10)?'badge-warning':'badge-danger')}}">{{$pro->PRO_Stock}}</span>
                                <span class="sr-only">unread messages</span>
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col">
                                <p class="card-text">{{$pro->PRO_Precio}}</p>
                            </div>
                        </div>
                        <div class="row align-items-end">
                            <div class="col">
                                <a href="{{route('productos.show',$pro)}}" class="btn btn-primary">@lang('Details')</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Agregado {{$pro->created_at->diffForHumans()}}</small>
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
    </div>
    
</div>
@endsection