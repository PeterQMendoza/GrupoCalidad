@csrf 
<label for="PRO_Descripcion">Descripcion<br><input type="text" name="PRO_Descripcion" value="{{old('PRO_Descripcion',$producto->PRO_Descripcion)}}"></label>
<label for="PRO_Precio">Precio<br><input type="checkbox" name="PRO_Precio" value="1" id="PRO_Precio" {{old('PRO_Precio')?'checked="checked"':''}}></label>
<label for="PRO_Stock">Stock<br><input type="text" name="PRO_Stock" value="{{old('PRO_Stock',$producto->PRO_Stock)}}"></label>
<label for="PRO_UM">Unidad de Medida<br><input type="text" name="PRO_UM" value="{{old('PRO_UM',$producto->PRO_UM)}}"></label>
<button >{{$btnText}}</button>