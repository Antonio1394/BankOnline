<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(ClientesTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(TipoCuentaTableSeeder::class);
        $this->call(TipoMovimientoSeeder::class);
        $this->call(CuentasTalbeSeeder::class);



        Model::reguard();
    }
}
