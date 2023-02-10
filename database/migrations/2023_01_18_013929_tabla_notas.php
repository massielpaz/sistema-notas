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
            $table->integer('id_estudiante');
            $table->integer('id_materia');
            $table->integer('id_docente');
            $table->integer('nota');
            $table->timestamps();

            $table->foreign('id_estudiante')->references('id_estudiante')->on('estudiante');
            $table->foreign('id_materia')->references('id_materias')->on('materias');
            $table->foreign('id_docente')->references('id_docente')->on('docentes');
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
        Schema::dropIfExists('notas');
    }
};
