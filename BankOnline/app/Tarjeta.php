<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tarjeta extends Model
{

  protected $table = 'tarjetas';

  protected $fillable = ['idCuenta',
                         'tipo',
                         'numeroTarjeta',
                         'fechaVencimiento'
                        ];

  public $relations = ['Cuenta'];

  public function Cuenta()
  {
    return $this->hasOne('App\Cuenta','id','idCuenta');
  }

}
