<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveProductoRequest;
use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    //
    public function index()
    {
        return view('productos.index',[
            'producto'=>Producto::latest()->paginate()
        ]);
    }

    public function show(Producto $producto)
    {
        return view('productos.show',[
            'producto'=>$producto
        ]);
    }
    public function create()
    {
        return view('productos.create');
    }

    public function store(SaveProductoRequest $request)
    {
        
        Producto::create($request->validated());

        return redirect()->route('productos.index');
    }

    public function edit(Producto $producto)
    {
        return view('productos.edit',[
            'producto'=>$producto
        ]);
    }

    public function update(Producto $producto,SaveProductoRequest $request)
    {
        $producto->update($request->validated());
        return redirect()->route('productos.show',$producto);
    }
}
