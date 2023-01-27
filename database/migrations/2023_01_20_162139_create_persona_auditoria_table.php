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
        Schema::create('persona_auditoria', function (Blueprint $table) {
            $table->increments('id_persona_aud');
            $table->integer('id_persona')->nullable();
            $table->string('accion_aud', 300)->nullable();
            $table->integer('id_responsable')->nullable();
            $table->date('fecha_auditoria')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('persona_auditoria');
    }
};
