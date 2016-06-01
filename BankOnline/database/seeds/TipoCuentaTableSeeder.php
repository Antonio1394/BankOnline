<?php
use App\TipoCuenta;
use Illuminate\Database\Seeder;

class TipoCuentaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tipo=new TipoCuenta;
        $tipo->descripcion="Ahorro";
        $tipo->save();


        $tipo=new TipoCuenta;
        $tipo->descripcion="Monetaria";
        $tipo->save();
    }
}
