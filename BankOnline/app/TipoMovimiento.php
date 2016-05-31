<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoMovimiento extends Model
{
  protected $table = 'tipoMovimiento';
  protected $fillable = ['descripcion'];
}
