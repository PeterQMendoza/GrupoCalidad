<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HojaRequerimientos extends Model
{
    use HasFactory;

    protected $primaryKey='HR_ID';
    
    public function productos()
    {
        return $this->hasMany(Productos::class);
    }

    public function detalleHojaRequermientos()
    {
        return $this->hasMany(DetalleHojaRequerimiento::class);
    }
}
