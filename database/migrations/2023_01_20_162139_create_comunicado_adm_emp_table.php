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
        Schema::create('comunicado_adm_emp', function (Blueprint $table) {
            $table->bigIncrements('id_comunicado_adm_emp');
            $table->integer('id_administrativo')->nullable();
            $table->integer('id_comunicado')->nullable();
            $table->integer('id_empresa')->nullable();
            $table->string('tipo_comunicado', 100)->nullable();
            $table->integer('estado_revision')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comunicado_adm_emp');
    }
};
