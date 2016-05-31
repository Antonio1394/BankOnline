<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicios', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idTarjeta')->unsigned();
            $table->date('fechaPago');
            $table->decimal('monto');
            $table->string('descripcion');

            // Relaciones
            $table->foreign('idTarjeta')
                  ->references('id')
                  ->on('tarjetas');

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
        Schema::drop('servicio');
    }
}
