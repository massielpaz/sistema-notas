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
        Schema::create("notas", function (Blueprint $table) {
            $table->integer('id_notas')->autoIncrement();
            $table->string('nombre_estudiante');
            $table->string('carrera_estudiante');
            $table->string('nombre_materia');
            $table->string('nombre_docente');
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
        Schema::drop('notas');
    }
};