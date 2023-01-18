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
        Schema::create("horario", function (Blueprint $table) {
            $table->integer('id_horario')->autoIncrement();
            $table->string('carrera');
            $table->string('nombre_docente');
            $table->string('nombre_materia');
            $table->string('seccion');
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
        Schema::drop('horario');
    }
};
