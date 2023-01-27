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
        Schema::table('login_usuario', function (Blueprint $table) {
            $table->foreign(['id_persona'], 'fk_persona_login_usuario')->references(['id_persona'])->on('persona')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['id_super_admin'], 'fk_super_admin_login_usuario')->references(['id_super_admin'])->on('super_administrador')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('login_usuario', function (Blueprint $table) {
            $table->dropForeign('fk_persona_login_usuario');
            $table->dropForeign('fk_super_admin_login_usuario');
        });
    }
};
