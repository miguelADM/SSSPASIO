<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique();
            $table->string('telefono')->nullable();
            $table->string('password');
            $table->boolean('status')->default(0);
            $table->string('sexo')->nullable();
            $table->bigInteger('id_membresia')->unsigned()->nullable();
            $table->foreign('id_membresia')->references('id')->on('membresias')->onDelete('cascade');
            $table->bigInteger('id_grupo')->unsigned()->nullable();
            $table->foreign('id_grupo')->references('id')->on('grupo_trabajos')->onDelete('cascade');
            $table->bigInteger('id_rol')->unsigned()->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}