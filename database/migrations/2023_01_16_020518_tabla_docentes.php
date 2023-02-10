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
        Schema::create("docentes", function (Blueprint $table) {
            $table->integer('id_docente')->autoIncrement();
            $table->string('nombre_docente');
            $table->string('titulo_docente');
            $table->string('correo_docente');
            $table->string('telefono_docente');
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
        Schema::dropIfExists('docentes');
    }
};
