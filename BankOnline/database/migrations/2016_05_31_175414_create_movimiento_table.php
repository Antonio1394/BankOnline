<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMovimientoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movimientos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idCuenta')->unsigned();
            $table->integer('idTipo')->unsigned();
            $table->string('cuenta_origen');
            $table->string('cuenta_destino');
            $table->decimal('monto');
            $table->date('fecha');

            // relaciones
            $table->foreign('idCuenta')
                  ->references('id')
                  ->on('cuentas');

            $table->foreign('idTipo')
                  ->references('id')
                  ->on('tipoMovimiento');

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
        Schema::drop('movimientos');
    }
}
