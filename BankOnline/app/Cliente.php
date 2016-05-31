<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
  protected $table = 'Clientes';

  protected $fillable = ['nombre', 'apellido', 'dpi','direccion','telefono','beneficiario'];


}
