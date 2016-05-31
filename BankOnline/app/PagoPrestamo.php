<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PagoPrestamo extends Model
{
  protected $table = 'pagosPrestamo';

  protected $fillable = ['idPrestamo',
                         'cantidad',
                         'fecha'
                        ];

  public $relations = ['Prestamo'];

  public function Prestamo()
  {
    return $this->hasOne('App\Prestamo','id','idPrestamo');
  }
}
