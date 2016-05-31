<?php
use App\tipoMovimiento;
use Illuminate\Database\Seeder;

class TipoMovimientoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $tipo=new tipoMovimiento;
      $tipo->descripcion="Depósito";
      $tipo->save();

      $tipo=new tipoMovimiento;
      $tipo->descripcion="Retiro";
      $tipo->save();

      $tipo=new tipoMovimiento;
      $tipo->descripcion="Transacción";
      $tipo->save();
    }
}
