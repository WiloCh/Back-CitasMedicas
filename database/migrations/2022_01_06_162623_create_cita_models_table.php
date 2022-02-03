<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitaModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cita_models', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('md_id');
            $table->integer('pc_id');
            $table->string('ct_fecha');
            $table->string('ct_hora');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cita_models');
    }
}
