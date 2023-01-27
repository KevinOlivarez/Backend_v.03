<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('espacio_fisico', function (Blueprint $table) {
            $table->increments('id_espacio_fisico');
            $table->integer('id_etapa_comercial')->nullable();
            $table->string('denominacion_ef', 100)->nullable();
            $table->string('ubicacion_ef', 300)->nullable();
            $table->string('medidas_ef', 100)->nullable();
            $table->string('descripcion_ef', 300)->nullable();
            $table->string('fotografia_ef', 100)->nullable();
            $table->string('tipo_ef', 100)->nullable();
            $table->string('codigo_ef', 100);
            $table->boolean('estado_ef')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('espacio_fisico');
    }
};
