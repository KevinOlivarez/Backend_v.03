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
        Schema::table('comunicado_adm_emp', function (Blueprint $table) {
            $table->foreign(['id_administrativo'], 'fk_administrativo_comunicado_adm_emp')->references(['id_administrativo'])->on('administrativo')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['id_comunicado'], 'fk_comunicado_comunicado_adm_emp')->references(['id_comunicado'])->on('comunicado')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['id_empresa'], 'fk_empresa_comunicado_adm_emp')->references(['id_empresa'])->on('empresa')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('comunicado_adm_emp', function (Blueprint $table) {
            $table->dropForeign('fk_administrativo_comunicado_adm_emp');
            $table->dropForeign('fk_comunicado_comunicado_adm_emp');
            $table->dropForeign('fk_empresa_comunicado_adm_emp');
        });
    }
};
