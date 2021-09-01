<?php

namespace App\Models;
use App\Models\ProductoCategoria;

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

    public function producto_categoria()
    {
        return $this->belongsTo(ProductoCategoria::class);
    }


}

