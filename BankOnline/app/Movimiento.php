<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movimiento extends Model
{
  protected $table = 'movimiento';
  protected $fillable = ['idCuenta',
                         'idTipo',
                         'cuenta_origen',
                         'cuenta_destino',
                         'monto',
                         'fecha'
                        ];


  public $relations = ['Cuenta',
                       'tipo'];

	public function cliente()
	{
		return $this->hasOne('App\Cuenta','id','idCuenta');
	}

  public function tipo()
	{
		return $this->hasOne('App\TipoMovimiento','id','idTipo');
	}
  
}
