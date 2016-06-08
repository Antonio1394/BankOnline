<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagoServiciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pagoServicios', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idServicio')->unsigned();
            $table->integer('año');
            $table->integer('mes');
            $table->boolean('estado');

            $table->foreign('idServicio')
                    ->references('id')
                    ->on('servicios');
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
        Schema::drop('pagoServicios');
    }
}
