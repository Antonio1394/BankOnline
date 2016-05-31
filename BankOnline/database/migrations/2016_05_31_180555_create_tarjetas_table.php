<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTarjetasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tarjetas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idCuenta')->unsigned();
            $table->string('tipo');
            $table->string('numeroTarjeta');
            $table->date('fechaVencimiento');

            // relaciones
            $table->foreign('idCuenta')
                  ->references('id')
                  ->on('cuentas');
                  
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tarjetas');
    }
}
