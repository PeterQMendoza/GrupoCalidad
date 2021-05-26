@csrf 
<div class="form-row">
    <div class="form-group col-md-10">
        <label for="PRO_Descripcion">Descripcion</label>
        <input class="form-control" placeholder="producto" type="text" name="PRO_Descripcion" value="{{old('PRO_Descripcion',$producto->PRO_Descripcion)}}">
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-10">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="PRO_Precio" value="1" id="PRO_Precio" {{old('PRO_Precio',$producto->PRO_Precio)?'checked="checked"':''}}>
            <label class="form-check-label" for="PRO_Precio">Precio</label>
        </div>
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-10">
        <label for="PRO_Stock">Stock</label>
        <input class="form-control" placeholder="1234" type="number" name="PRO_Stock" value="{{old('PRO_Stock',$producto->PRO_Stock)}}">
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-10">
        <label for="PRO_UM">Unidad de Medida</label>
        <input class="form-control" placeholder="medida" type="text" name="PRO_UM" value="{{old('PRO_UM',$producto->PRO_UM)}}">
    </div>
</div>
<button type="submit" class="btn btn-primary">{{$btnText}}</button>




