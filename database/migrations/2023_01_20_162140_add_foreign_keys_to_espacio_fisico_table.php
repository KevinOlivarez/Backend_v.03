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
        Schema::table('espacio_fisico', function (Blueprint $table) {
            $table->foreign(['id_etapa_comercial'], 'fk_etapa_comercial_espacio_fisico')->references(['id_etapa_comercial'])->on('etapa_comercial')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('espacio_fisico', function (Blueprint $table) {
            $table->dropForeign('fk_etapa_comercial_espacio_fisico');
        });
    }
};
