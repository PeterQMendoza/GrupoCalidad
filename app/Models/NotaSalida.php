<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NotaSalida extends Model
{
    use HasFactory;

    protected $primaryKey='NS_ID';

    public function pedido()
    {
        return $this->hasOne(Pedido::class);
    }

    public function hojaRequerimiento()
    {
        return $this->hasOne(HojaRequerimiento::class);
    }

    public function detalleNotaSalidas()
    {
        return $this->hasMany(DetalleNotaSalida::class);
    }
}
