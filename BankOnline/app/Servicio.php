<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
  protected $table = 'servicios';

  protected $fillable = ['idTarjeta',
                         'fechaPago',
                         'monto',
                         'descripcion'];

  public $relations = ['Tarjeta'];

  public function Tarjeta()
  {
    return $this->hasOne('App\Tarjeta','id','idTarjeta');
  }
}
