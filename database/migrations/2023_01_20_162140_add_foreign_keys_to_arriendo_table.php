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
        Schema::table('arriendo', function (Blueprint $table) {
            $table->foreign(['id_empresa'], 'fk_empresa_arriendo')->references(['id_empresa'])->on('empresa')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['id_espacio_fisico'], 'fk_espacio_fisico_arriendo')->references(['id_espacio_fisico'])->on('espacio_fisico')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('arriendo', function (Blueprint $table) {
            $table->dropForeign('fk_empresa_arriendo');
            $table->dropForeign('fk_espacio_fisico_arriendo');
        });
    }
};
