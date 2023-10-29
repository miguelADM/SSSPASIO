<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRutinaElevacionEjerciciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rutina_elevacion_ejercicios', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_rutina_elevacion')->unsigned()->nullable();
            $table->bigInteger('id_ejercicio')->unsigned()->nullable();
            $table->foreign('id_rutina_elevacion')->references('id')->on('rutina_elevaciones')->onDelete('cascade');
            $table->foreign('id_ejercicio')->references('id')->on('ejercicios')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rutina_elevacion_ejercicios');
    }
}