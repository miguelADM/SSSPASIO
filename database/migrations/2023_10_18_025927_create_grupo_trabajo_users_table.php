<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGrupoTrabajoUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grupo_trabajo_users', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_user')->unsigned()->nullable();
            $table->bigInteger('id_grupo_trabajo')->unsigned()->nullable();
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('id_grupo_trabajo')->references('id')->on('grupo_trabajos')->onDelete('cascade');
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
        Schema::dropIfExists('grupo_trabajo_users');
    }
}
