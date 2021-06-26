@csrf 
<div class="form-row">
    <div class="form-group col-md-10">
        <label for="codigo">Codigo</label>
        <input class="form-control" type="text" name="codigo" value="{{old('codigo',$cod)}}" readonly>
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-6">
        <label for="nombre">Nombre</label>
        <input class="form-control" placeholder="producto" type="text" name="nombre" value="{{old('nombre',$producto->nombre)}}">
    </div>
    <div class="form-group col-md-4">
        <label for="um">Unidad de Medida</label>
        <input class="form-control" placeholder="um." type="text" name="um" value="{{old('um',$producto->um)}}">
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-8">
        <div class="form-check">
            <label for="precio_v">Precio</label>
            <input class="form-control" placeholder="precio" type="text" name="precio" id="precio" value="{{old('precio',$producto->precio)}}">
        </div>
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-2">
        <label for="stock">Stock</label>
        <input class="form-control" placeholder="1234" type="number" name="stock" value="{{old('stock',$producto->stock)}}">
    </div>
    <div class="form-group col-md-4">
        <label for="vencimiento">Fecha de Vencimiento</label>
        <input class="form-control" placeholder="dd/mm/yy" type="date" name="vencimiento" value="{{old('vencimiento',$producto->vencimiento)}}">
    </div>
    <div class="form-group col-md-4">
        <label for="estado">Estado</label>
        <input class="form-control" placeholder="abcde" type="text" name="estado" value="{{old('estado',$producto->estado)}}">
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-8">
        <label for="estado">Categoria</label>
        <select id="inputState" class="form-control">
            <option selected>Categoria 1</option>
            <option>categoria 2</option>
            <option>categoria 3</option>
      </select>
    </div>
    <!-- <div class="form-group col-md-2">
        <label for="agregar_categoria">Agregar</label>
        <button class="form-control btn btn-success" type="button" data-toggle="modal" data-target="#agregarCategoria">+
        </button>
        <div class="modal fade" id="agregarCategoria" tabindex="-1" aria-labelledby="agregarCategoria" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="agregarCategoria">Agregar Nueva Categoria</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Nombre</label>
                        <input type="text" class="form-control" id="recipient-name">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Descripcion</label>
                        <textarea class="form-control" id="message-text"></textarea>
                    </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-primary">Crear Categoria</button>
                </div>
                </div>
            </div>
        </div>
    </div> -->
</div>
<div class="form-row">
    <div class="form-group col-md-8">
        <label for="estado">Marca</label>
        <select id="inputState" class="form-control">
            <option selected>Marca 1</option>
            <option>Marca 2</option>
            <option>Marca 3</option>
      </select>
    </div>
    <!-- <div class="form-group col-md-2">
        <label for="agregar_marca">Agregar</label>
        <button class="form-control btn btn-success" type="button" data-toggle="modal" data-target="#agregarMarca">+
        </button>
        <div class="modal fade" id="agregarMarca" tabindex="-1" aria-labelledby="agregarMarca" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="agregarMarca">Agregar Nueva Marca</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Nombre</label>
                        <input type="text" class="form-control" id="recipient-name">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Descripcion</label>
                        <textarea class="form-control" id="message-text"></textarea>
                    </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-primary">Crear Categoria</button>
                </div>
                </div>
            </div>
        </div>
    </div> -->
</div>
<button type="submit" class="btn btn-primary">{{$btnText}}</button>




