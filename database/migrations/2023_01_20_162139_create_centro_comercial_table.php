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
        Schema::create('centro_comercial', function (Blueprint $table) {
            $table->increments('id_centro_comercial');
            $table->string('nombre_centro_comercial', 100)->nullable();
            $table->string('representante_cc', 100)->nullable();
            $table->string('contacto_cc', 15)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('centro_comercial');
    }
};
