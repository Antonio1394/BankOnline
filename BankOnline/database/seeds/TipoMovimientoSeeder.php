<?php
use App\TipoMovimiento;
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
      $tipo=new TipoMovimiento;
      $tipo->descripcion="Depósito";
      $tipo->save();

      $tipo=new TipoMovimiento;
      $tipo->descripcion="Retiro";
      $tipo->save();

      $tipo=new TipoMovimiento;
      $tipo->descripcion="Transacción";
      $tipo->save();
    }
}
