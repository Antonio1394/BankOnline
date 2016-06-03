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
        $cliente->nombre='Rony Carlos';
        $cliente->apellido='Gonzales Tunchez';
        $cliente->dpi='2631756261101';
        $cliente->email = 'pepe@gmail.com';
        $cliente->direccion='Retalhuleu';
        $cliente->telefono='58745712';
        $cliente->beneficiario='Mi mama';
        $cliente->save();

        $cliente = new Cliente;
        $cliente->nombre='Pablo';
        $cliente->apellido='Mendez Argueta';
        $cliente->dpi='2631756891104';
        $cliente->email = 'pablo@gmail.com';
        $cliente->direccion='Retalhuleu';
        $cliente->telefono='54125484';
        $cliente->beneficiario='Mi mama';
        $cliente->save();


    }
}
