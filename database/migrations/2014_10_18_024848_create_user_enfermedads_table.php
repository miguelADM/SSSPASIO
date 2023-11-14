<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserEnfermedadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_enfermedad', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_user')->unsigned()->nullable();
            $table->bigInteger('id_enfermedad')->unsigned()->nullable();
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('id_enfermedad')->references('id')->on('enfermedades')->onDelete('cascade');
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
        Schema::dropIfExists('user_enfermedad');
    }
}
