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
        Schema::create('comunicado', function (Blueprint $table) {
            $table->increments('id_comunicado');
            $table->string('de_comunicado', 100)->nullable();
            $table->string('para_comunicado', 100)->nullable();
            $table->string('codigo_comunicado', 50)->nullable();
            $table->string('asunto_comunicado', 300)->nullable();
            $table->string('mensaje_comunicado', 500)->nullable();
            $table->string('detalle_comunicado', 500)->nullable();
            $table->date('fecha_creacion')->nullable();
            $table->date('fecha_caducidad');
            $table->string('foto_comunicado', 200);
            $table->string('tipo_comunicado', 300)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comunicado');
    }
};
