<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstacionamientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estacionamientos', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamp('horaDesde');
            $table->timestamp('horaHasta')->nullable();
            $table->unsignedInteger('vehiculoId');
            $table->unsignedInteger('zonaId');
            $table->float('monto', 4, 2);
            $table->unsignedInteger('origenId');
            $table->enum('estado', ['Activo', 'Finalizado'])->default('Activo');
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
        Schema::dropIfExists('estacionamientos');
    }
}