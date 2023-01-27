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
        Schema::table('correo', function (Blueprint $table) {
            $table->foreign(['id_persona'], 'fk_persona_correo')->references(['id_persona'])->on('persona')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('correo', function (Blueprint $table) {
            $table->dropForeign('fk_persona_correo');
        });
    }
};
