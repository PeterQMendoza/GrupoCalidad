<?php

namespace App\Models;
use App\Models\Producto;
use App\Models\Categoria;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductoCategoria extends Model
{
    use HasFactory;

    protected $primaryKey='Id';

    public function productos()
    {
        return $this->hasMany(Producto::class);
    }
    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }
}
