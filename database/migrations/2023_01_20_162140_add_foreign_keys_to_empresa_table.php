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
        Schema::table('empresa', function (Blueprint $table) {
            $table->foreign(['id_destino_empresa'], 'fk_destino_empresa_empresa')->references(['id_destino_empresa'])->on('destino_empresa')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['id_mix_comercial'], 'fk_mix_comercial_empresa')->references(['id_mix_comercial'])->on('mix_comercial')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('empresa', function (Blueprint $table) {
            $table->dropForeign('fk_destino_empresa_empresa');
            $table->dropForeign('fk_mix_comercial_empresa');
        });
    }
};
