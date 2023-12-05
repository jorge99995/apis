<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->bigIncrements('cliente_id');
            $table->string('nombres');
            $table->string('dni');
            $table->string('celular');
            $table->string('correo');
            $table->string('lugar_trabajo');
            $table->string('area');
            $table->string('ciudad');
            $table->string('codigo');
            $table->string('registro');
            $table->dateTime('fecha_emision');
            $table->string('horas_lectivas');
            $table->dateTime('fecha_inicio');
            $table->dateTime('fecha_fin');
            $table->string('tema_curso');
            $table->string('nota');
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
        Schema::dropIfExists('clientes');
    }
}
