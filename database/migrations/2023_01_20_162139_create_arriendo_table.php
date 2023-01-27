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
        Schema::create('arriendo', function (Blueprint $table) {
            $table->increments('id_arriendo');
            $table->integer('id_espacio_fisico')->nullable();
            $table->integer('id_empresa')->nullable();
            $table->string('vendedor_arriendo', 100)->nullable();
            $table->string('tipo_contrato', 100)->nullable();
            $table->float('costo_contrato', 0, 0)->nullable();
            $table->float('descuento_arriendo', 0, 0);
            $table->date('fecha_registro')->nullable();
            $table->date('fecha_vencimiento')->nullable();
            $table->string('observacion_arriendo', 300)->nullable();
            $table->boolean('estado_arriendo')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('arriendo');
    }
};
