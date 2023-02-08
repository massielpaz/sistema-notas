<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create("estudiante", function (Blueprint $table) {
            $table->integer('id_estudiante')->autoIncrement();
            $table->string('carnet_estudiante');
            $table->string('nombre_estudiante');
            $table->string('correo_estudiante');
            $table->string('carrera_estudiante');
            $table->integer('anio_estudiante');
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
        //
        Schema::dropIfExists('estudiante');
    }
};
