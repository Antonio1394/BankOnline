<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagoPrestamoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pagosPrestamo', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idPrestamo')->unsigned();
            $table->decimal('cantidad');
            $table->date('fecha');

            // Relaciones
            $table->foreign('idPrestamo')
                  ->references('id')
                  ->on('prestamos');

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
        Schema::drop('pagoPrestamo');
    }
}
