<?php

namespace App\Models;
use App\Models\ProductoCategoria;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    protected $primaryKey='id';

    protected $guarded=[];

    public function producto_categoria()
    {
        return $this->hasMany(ProductoCategoria::class);
    }
}
