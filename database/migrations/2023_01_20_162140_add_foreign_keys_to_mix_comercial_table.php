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
        Schema::table('mix_comercial', function (Blueprint $table) {
            $table->foreign(['mix_padre'], 'fk_mix_recursivo')->references(['id_mix_comercial'])->on('mix_comercial')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('mix_comercial', function (Blueprint $table) {
            $table->dropForeign('fk_mix_recursivo');
        });
    }
};
