<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRutinaElevacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rutina_elevaciones', function (Blueprint $table) {
            $table->id();
            $table->text('nombre');
            $table->text('descripcion')->nullable();
            $table->text('objetivo')->nullable();
            $table->integer('tiempo'); // minutos
            $table->text('color');
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
        Schema::dropIfExists('rutina_elevaciones');
    }
}