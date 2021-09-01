@extends('layout')

@section('title','Categoria')

@section('content')
<div class="container-md">
    <h1>@lang('Categorias')</h1>
    <div class="row">
        <div class="col-md-8">
            <h4><a class="btn btn-outline-primary my-2 my-lg-6" href="{{route('categorias.create')}}">Nuevo Categoria</a></h4>
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
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">id</th>
                <th scope="col">nombre</th>
                <th scope="col">descripción</th>
                <th scope="col">{{$categoria}}</th>
            </tr>
        </thead>
        <tbody>
            @forelse($categoria as $cat)
            <tr>
                <th scope="row">{{$cat->id}}</th>
                <td>{{$cat->nombre}}</td>
                <td>{{$cat->descripcion}}</td>
                <td><a href="{{route('categorias.show',$cat)}}" class="btn btn-primary">@lang('Details')</a></td>
            </tr>
            @empty
            <tr>
                <th scope="row">--</th>
                <td>No hay ninguna categoria</td>
                <td>--</td>
            </tr>
            @endforelse
        </tbody>
        
        {{$categoria->links()}}
    </table>
    
</div>
@endsection