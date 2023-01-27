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
        Schema::create('login_usuario', function (Blueprint $table) {
            $table->bigIncrements('id_login_usuario');
            $table->integer('id_persona')->nullable();
            $table->text('token');
            $table->text('token_exp');
            $table->string('nombre_login', 100);
            $table->text('clave_login');
            $table->integer('id_super_admin')->nullable();
            $table->date('ultima_conexion');
            $table->date('fecha_creacion');
            $table->date('fecha_actualizacion');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('login_usuario');
    }
};
