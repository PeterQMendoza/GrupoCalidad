@csrf 
<label for="DP_Precio">Precio<br><input type="checkbox" value="{{old('DP_Precio',$detalle_pedido->DP_Precio)?1:0}}" name="DP_Precio" id="DP_Precio" {{old('DP_Precio',$detalle_pedido->DP_Precio)?'checked':''}}></label>
<label for="DP_Cantidad">Monto<br><input type="number" name="DP_Cantidad" value="{{old('DP_Cantidad',$detalle_pedido->DP_Cantidad)}}"></label>
<button >{{$btnText}}</button>
<script type="text/javascript">
    document.getElementById('DP_Precio').onclick=function(){
        if(this.checked){
            this.value=1
        }else{
            this.value=0;
        }
    }
</script>