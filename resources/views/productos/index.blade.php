@extends('layout')

@section('title','Producto')

@section('content')
<div class="container-md">
    <h1>@lang('Productos')</h1>
    <div class="row">
        <div class="col-md-8">
            <h4><a class="btn btn-outline-primary my-2 my-lg-6" href="{{route('productos.create')}}">Nuevo Producto</a></h4>
        </div>
        <div class="col-md-4">
            <form class="form-inline my-2 my-lg-6">
                <input class="form-control mr-sm-2" type="search" placeholder="@lang('Search')" aria-label="@lang('Search')">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
                    <!-- @lang('Search') -->
                    <span>@lang('Search')</span>
                </button>
            </form>
        </div>
    </div>
    <div class="row row-cols-1 row-cols-md-4">
        @forelse($producto as $pro)
        <div class="col mb-4">
            <div class="card p-2 bg-white h-100">
                <img src="{{asset('img/014-image.svg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-title">
                        {{$pro->nombre}}
                        <span class="babge badge-pill h6 {{($pro->stock>15)?'badge-success':(($pro->stock>10)?'badge-warning':'badge-danger')}}">
                            {{$pro->stock}}
                            <small class="">{{$pro->um}}</small>
                        </span>
                    </p>
                    <p class="card-text">{{$pro->precio}}</p>
                    <a href="{{route('productos.show',$pro)}}" class="btn btn-primary">@lang('Details')</a>
                    <!-- <span class="sr-only">unread messages</span> -->
                </div>
                <div class="card-footer">
                    <small class="text-muted">Agregado {{$pro->created_at->diffForHumans()}}</small>
                </div>
            </div>
        </div>
        @empty
        <div class="col mb-4">
            <div class="card p-2 bg-white h-100">
                <!-- <img src="..." class="card-img-top" alt="..."> -->
                <div class="card-body">
                    <h5 class="card-title">Productos vacios</h5>
                    <p class="card-text">I'm sorry, we don't have any products to show.</p>
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