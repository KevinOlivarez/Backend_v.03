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
        Schema::table('permiso', function (Blueprint $table) {
            $table->foreign(['id_centro_comercial'], 'fk_centro_comercial_permiso')->references(['id_centro_comercial'])->on('centro_comercial')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('permiso', function (Blueprint $table) {
            $table->dropForeign('fk_centro_comercial_permiso');
        });
    }
};
