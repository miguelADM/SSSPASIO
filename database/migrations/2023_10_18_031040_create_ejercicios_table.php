<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEjerciciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ejercicios', function (Blueprint $table) {
            $table->id();
            $table->text('nombre');
            $table->text('descripcion')->nullable();
            $table->text('objetivo')->nullable();
            $table->text('imagen')->nullable();
            $table->bigInteger('id_clasificacion')->unsigned()->nullable();
            $table->foreign('id_clasificacion')->references('id')->on('clasificacion_ejercicios')->onDelete('cascade');
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
        Schema::dropIfExists('ejercicios');
    }
}
