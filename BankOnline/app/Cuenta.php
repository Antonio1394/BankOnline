<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cuenta extends Model
{
  protected $table = 'cuentas';

  protected $fillable = ['idTipo',
                         'idCliente',
                         'monto',
                         'fechaCreacion',
                         'estado',
                         'noCuenta'
                        ];

  public $relations = ['cliente',
                       'tipo'];

	public function cliente()
	{
		return $this->hasOne('App\Cliente','id','idCliente');
	}

  public function tipo()
	{
		return $this->hasOne('App\TipoCuenta','id','idTipo');
	}


}
