<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRutinaElevacionDetallesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rutina_elevacion_detalles', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_rutina')->unsigned()->nullable();
            $table->bigInteger('id_elevacion')->unsigned()->nullable();
            $table->foreign('id_rutina')->references('id')->on('rutinas')->onDelete('cascade');
            $table->foreign('id_elevacion')->references('id')->on('rutina_elevaciones')->onDelete('cascade');
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
        Schema::dropIfExists('rutina_elevacion_detalles');
    }
}