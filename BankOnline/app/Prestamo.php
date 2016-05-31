<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prestamo extends Model
{
  protected $table = 'prestamos';

  protected $fillable = ['idCuenta',
                         'monto',
                         'fecha',
                         'noCuotas'
                        ];

  public $relations = ['Cuenta'];

  public function Cuenta()
  {
    return $this->hasOne('App\Cuenta','id','idCuenta');
  }
}
