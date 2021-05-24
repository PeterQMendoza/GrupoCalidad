@csrf 
<label for="PED_FechaPedido">Fecha de Pedido<br><input type="date" name="PED_FechaPedido" value="{{old('PED_FechaPedido',$pedido->PED_FechaPedido)}}"></label>
<label for="PED_Monto">Monto<br><input type="number" name="PED_Monto" value="{{old('PED_Monto',$pedido->PED_Monto)}}"></label>
<label for="PED_Estado">Estado<br><input type="text" name="PED_Estado" value="{{old('PED_Estado',$pedido->PED_Estado)}}"></label>
<button >{{$btnText}}</button>