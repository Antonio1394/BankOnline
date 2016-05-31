<?php
use App\Cliente;
use Illuminate\Database\Seeder;

class ClientesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cliente = new Cliente;
        $cliente->nombre='Juan Antonio';
        $cliente->apellido='Rivera Merida';
        $cliente->dpi='2631756261101';
        $cliente->direccion='Retalhuleu';
        $cliente->telefono='58745712';
        $cliente->beneficiario='Mi mama';
        $cliente->save();


    }
}
