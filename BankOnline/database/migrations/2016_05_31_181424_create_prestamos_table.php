<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrestamosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prestamos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idCuenta')->unsigned();
            $table->decimal('monto');
            $table->date('fecha');
            $table->integer('noCuotas');

            // Relaciones
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
        Schema::drop('prestamos');
    }
}
