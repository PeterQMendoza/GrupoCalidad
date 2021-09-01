<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveCategoriaRequest;
use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{

    public function index()
    {
        //
        return view('categorias.index',[
            'categoria'=>Categoria::latest()->paginate()
        ]);
    }

    public function create()
    {
        //
        return view('categorias.create',[
            'categoria'=>new Categoria
        ]);
    }
    
    public function store(SaveCategoriaRequest $request)
    {
        //
        Categoria::create($request->validated());
        return redirect()->route('categorias.index')->with('status','La categoria fue agregada con exito');
    }
   
    public function show(Categoria $categoria)
    {
        return view('categorias.show',[
            'categoria'=>$categoria
        ]);
    }
    
    public function edit(Categoria $categoria)
    {
        //
        return view('categorias.edit',[
            'categoria'=>$categoria
        ]);
    }

    
    public function update(Categoria $categoria,SaveCategoriaRequest $request)
    {
        //
        $categoria->update($request->validated());
        return redirect()->route('categorias.show',$categoria)->with('status','Se actualizo la categoria');
    }
    
    
    public function destroy(Categoria $categoria)
    {
        //
        $categoria->delete();
        return redirect()->route('categorias.index')->with('status','La categoria fue eliminada correctamente');
    }
}

