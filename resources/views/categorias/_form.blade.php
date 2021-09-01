@csrf 
<div class="form-row">
    <div class="form-group col-md-10">
        <label for="nombre_cat">Nombre</label>
        <input class="form-control" type="text" name="nombre_cat" value="{{old('nombre_cat',$categoria->nombre)}}">
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-10">
        <label for="descripcion_cat">Description</label>
        <textarea class="form-control"  name="descripcion-cat" value="{{old('descripcion_cat',$categoria->descripcion)}}"></textarea>
    </div>
</div>
<button type="submit" class="btn btn-primary">{{$btnText}}</button>




