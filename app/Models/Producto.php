<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $primaryKey='Id';

    protected $guarded=[];

    protected $casts=[
        'precio'=>'decimal:2',
    ];

    //Relacion de uno a muchos
    // public function detallePedidos()
    // {
    //     return $this->hasMany('App\Models\DetallePedido');
    // }

}

