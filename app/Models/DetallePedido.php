<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetallePedido extends Model
{
    use HasFactory;

    protected $guarded=[];

    protected $primaryKey='DP_ID';

    protected $casts=[
        'DP_Precio'=>'boolean',
    ];

    // Relacion de uno a muchos (inversa)
    public function producto()
    {
        return $this->belongsTo('App\Models\Producto');
    }
    public function pedido()
    {
        return $this->belongsTo('App\Models\Pedido');
    }
}
