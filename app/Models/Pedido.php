<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;

    protected $primaryKey='PED_ID';

    protected $guarded=[];

    // Relacion uno a muchos
    public function detallePedidos()
    {
        return $this->hasMany('App\Models\DetallePedido');
    }
}
