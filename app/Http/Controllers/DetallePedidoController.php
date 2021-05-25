<?php

namespace App\Http\Controllers;

use App\http\Requests\SaveDetallePedidoRequest;
use App\Models\DetallePedido;
use Illuminate\Http\Request;

class DetallePedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('detalle_pedidos.index',[
            'detalle_pedido'=>DetallePedido::latest()->paginate()
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
        return view('detalle_pedidos.create',[
            'detalle_pedido'=>new DetallePedido
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SaveDetallePedidoRequest $request)
    {
        //
        DetallePedido::create($request->validated());
        return redirect()->route('detalle_pedidos.index')->with('status','SE ha creado la nota de salida exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(DetallePedido $detalle_pedido)
    {
        //
        return view('detalle_pedidos.show',[
            'detalle_pedido'=>$detalle_pedido
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(DetallePedido $detalle_pedido)
    {
        //
        return view('detalle_pedidos.edit',[
            'detalle_pedido'=>$detalle_pedido
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DetallePedido $detalle_pedido, SaveDetallePedidoRequest $request)
    {
        //
        
        return $request->validated();
        $detalle_pedido->update($request->validated());
        return redirect()->route('detalle_pedidos.show',$detalle_pedido)->with('status','Se ha cambiado la nota de salida exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(DetallePedido $detalle_pedido)
    {
        //
        $detalle_pedido->delete();
        return redirect()->route('detalle_pedidos.index')->with('status','Se ha eliminado la nota de salida exitosamente');
    }
}
