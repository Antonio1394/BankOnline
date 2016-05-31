<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCuentaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cuentas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idTipo')->unsigned();
            $table->integer('idCliente')->unsigned();
            $table->integer('monto')->unsigned();
            $table->date('fechaCreacion');
            $table->boolean('estado');
            $table->string('noCuenta');
            $table->foreign('idTipo')
                  ->references('id')
                  ->on('tipoCuenta');
            $table->foreign('idCliente')
                  ->references('id')
                  ->on('clientes');
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
        Schema::drop('cuentas');
    }
}
