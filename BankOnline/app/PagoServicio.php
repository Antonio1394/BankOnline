<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PagoServicio extends Model
{
    protected $table = 'pagoServicios';

    protected $fillable = ['idServicio',
                           'año',
                           'mes',
                           'estado'
                          ];

    public $relations = [
        'Servicio'
    ];

    public function servicio()
    {
        return $this->hasOne('App\Servicio', 'id', 'idServicio');
    }
}
