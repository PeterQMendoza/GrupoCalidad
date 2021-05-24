<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;

    protected $primaryKey='PED_ID';

    protected $guarded=[];

    public function detallePedidos()
    {
        return $this->hasMany(DetallePedido::class);
    }
}
