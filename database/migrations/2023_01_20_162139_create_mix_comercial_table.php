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
        Schema::create('mixComercial', function (Blueprint $table) {
            $table->increments('id_mix_comercial');
            $table->string('nombre_mix', 100)->nullable();
            $table->string('descripcion_mix', 300)->nullable();
            $table->integer('mix_padre')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mixComercial');
    }
};
