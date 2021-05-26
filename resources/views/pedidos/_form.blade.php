@csrf 
<div class="form-row">
    <div class="form-group col-md-10">
        <label for="PED_FechaPedido">Fecha de Pedido</label>
        <input class="form-control" type="date" name="PED_FechaPedido" value="{{old('PED_FechaPedido',$pedido->PED_FechaPedido)}}">
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-10">
        <label for="PED_Monto">Monto</label>
        <input class="form-control" type="number" name="PED_Monto" value="{{old('PED_Monto',$pedido->PED_Monto)}}">
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-10">
        <label for="PED_Estado">Estado</label>
        <input class="form-control" type="text" name="PED_Estado" value="{{old('PED_Estado',$pedido->PED_Estado)}}">
    </div>
</div>
<button type="submit" class="btn btn-primary">{{$btnText}}</button>
