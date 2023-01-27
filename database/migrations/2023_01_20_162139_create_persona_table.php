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
        Schema::create('persona', function (Blueprint $table) {
            $table->increments('id_persona');
            $table->integer('id_tipo_identificacion');
            $table->integer('id_genero')->nullable();
            $table->integer('id_centro_comercial');
            $table->string('nombres_persona', 100);
            $table->string('apellidos_persona', 100);
            $table->string('direccion_persona', 100)->nullable();
            $table->date('fecha_registro');
            $table->boolean('estado_persona');
            $table->string('estado_civil', 50)->nullable();
            $table->integer('rol_persona');
            $table->integer('id_cliente')->nullable();
            $table->integer('id_administrativo')->nullable();
            $table->integer('id_empresa')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('persona');
    }
};
