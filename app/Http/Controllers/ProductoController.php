<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveProductoRequest;
use App\Models\Producto;
use App\Models\Categoria;
use App\Models\ProductoCategoria;
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
        $s=getdate()['seconds'];
        $m=getdate()['minutes'];
        $h=getdate()['hours'];
        $d=getdate()['mday'];
        $mes=getdate()['mon'];
        $y=getdate()['year'];
        $cod='pro'.$s.$m.$h.$d.$mes.$y;

        return view('productos.create',[
            'cod'=>$cod,
            'producto'=>new Producto,
            'categoria'=>Categoria::latest()->paginate()
        ]);
    }

    public function store(SaveProductoRequest $request)
    {
        Producto::create($request->validated());

        return redirect()->route('productos.index')->with('status','El producto fue agregado con exito');
    }

    public function edit(Producto $producto)
    {
        $cod=$producto->codigo;
        return view('productos.edit',[
            'cod'=>$cod,
            'producto'=>$producto
        ]);
    }

    public function update(Producto $producto,SaveProductoRequest $request)
    {
        $producto->update($request->validated());
        return redirect()->route('productos.show',$producto)->with('status','El producto fue actualizado con exito');
    }

    public function destroy(Producto $producto)
    {
        $producto->delete();
        return redirect()->route('productos.index')->with('status','El producto fue eliminado con exito');
    }
}
