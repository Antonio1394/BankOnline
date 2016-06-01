<?php
use App\Cuenta;
use Illuminate\Database\Seeder;

class CuentasTalbeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cuenta=new Cuenta;
        $cuenta->idTipo=1;
        $cuenta->idCliente=2;
        $cuenta->monto=5000;
        $cuenta->fechaCreacion='2016/06/01';
        $cuenta->estado=true;
        $cuenta->noCuenta='2016-'.rand(0,15);
        $cuenta->save();

    }
}
