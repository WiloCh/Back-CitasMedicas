<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePacienteModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paciente_models', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('pc_nombre')->nullable();
            $table->integer('pc_edad')->nullable();
            $table->integer('pc_telefono')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('paciente_models');
    }
}
