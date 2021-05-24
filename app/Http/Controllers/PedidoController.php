<?php

namespace App\Http\Controllers;

use App\Http\Requests\SavePedidoRequest;
use App\Models\Pedido;
use Illuminate\Http\Request;

class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('pedidos.index',[
            'pedido'=>Pedido::latest()->paginate()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pedidos.create',[
            'pedido'=>new Pedido
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SavePedidoRequest $request)
    {
        //
        Pedido::create($request->validated());
        return redirect()->route('pedidos.index')->with('status','El pedido fue agregado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Pedido $pedido)
    {
        //
        return view('pedidos.show',[
            'pedido'=>$pedido
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Pedido $pedido)
    {
        //
        return view('pedidos.edit',[
            'pedido'=>$pedido
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Pedido $pedido,SavePedidoRequest $request)
    {
        //
        $pedido->update($request->validated());
        return redirect()->route('pedidos.show',$pedido)->with('status','El pedido fue actualizado con exito');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pedido $pedido)
    {
        //
        $pedido->delete();
        return redirect()->route('pedidos.index')->with('status','El pedido fue eliminado con exito');
    }
}
