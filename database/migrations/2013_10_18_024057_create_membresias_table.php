<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Membresias;

class CreateMembresiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('membresias', function (Blueprint $table) {
            $table->id();
            $table->text('nombre')->nullable();
            $table->text('descripcion')->nullable();
            $table->text('beneficios')->nullable();
            $table->text('precio')->nullable();
            $table->text('duracion')->nullable();
            $table->text('imagen')->nullable();
            $table->timestamps();
        });

        $membresia = new Membresias();
        $membresia->nombre = 'Básica';
        $membresia->descripcion = 'Membresía básica';
        $membresia->beneficios = 'Beneficios básicos';
        $membresia->precio = '0';
        $membresia->duracion = '0';
        $membresia->save();

        $membresia = new Membresias();
        $membresia->nombre = 'Premium';
        $membresia->descripcion = 'Membresía premium';
        $membresia->beneficios = 'Beneficios premium';
        $membresia->precio = '100';
        $membresia->duracion = '30';
        $membresia->save();

        $membresia = new Membresias();
        $membresia->nombre = 'Empresarial';
        $membresia->descripcion = 'Membresía empresarial';
        $membresia->beneficios = 'Beneficios empresariales';
        $membresia->precio = '200';
        $membresia->duracion = '60';
        $membresia->save();
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('membresias');
    }
}
