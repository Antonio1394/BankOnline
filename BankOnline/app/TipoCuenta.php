<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoCuenta extends Model
{
    protected $table = 'tipoCuenta';
    protected $fillable = ['descripcion'];
}
