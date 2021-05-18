<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $primaryKey='PRO_ID';

    protected $guarded=[];

    protected $casts=[
        'PRO_Precio'=>'integer',
    ];

}

