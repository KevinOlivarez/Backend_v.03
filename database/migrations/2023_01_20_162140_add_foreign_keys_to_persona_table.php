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
        Schema::table('persona', function (Blueprint $table) {
            $table->foreign(['id_administrativo'], 'fk_administrativo_persona')->references(['id_administrativo'])->on('administrativo')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['id_centro_comercial'], 'fk_centro_comercial_persona')->references(['id_centro_comercial'])->on('centro_comercial')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['id_cliente'], 'fk_cliente_persona')->references(['id_cliente'])->on('cliente')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['id_empresa'], 'fk_empresa_persona')->references(['id_empresa'])->on('empresa')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['id_genero'], 'fk_genero_persona')->references(['id_genero'])->on('genero')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['rol_persona'], 'fk_rol_persona_persona')->references(['id_rol_persona'])->on('rol_persona')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['id_tipo_identificacion'], 'fk_tipo_identificacion_persona')->references(['id_tipo_identificacion'])->on('tipo_identificacion')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('persona', function (Blueprint $table) {
            $table->dropForeign('fk_administrativo_persona');
            $table->dropForeign('fk_centro_comercial_persona');
            $table->dropForeign('fk_cliente_persona');
            $table->dropForeign('fk_empresa_persona');
            $table->dropForeign('fk_genero_persona');
            $table->dropForeign('fk_rol_persona_persona');
            $table->dropForeign('fk_tipo_identificacion_persona');
        });
    }
};
