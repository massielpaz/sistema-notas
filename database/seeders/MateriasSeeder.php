<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Materias;

class MateriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        # Materias::factory(5)->create();
        $Materias = [
            "Ingles",
            "Matematicas",
            "Español",
            "Medio ambiente",
            "Desarrollador de Software",
            "Cálculo I",
            "Cálculo II",
            "Diseño grafico",
            "Diseño y arquitectura de redes",
            "Diseño web",
            "Mercadotecnia",
            "Sistemas Expertos",
            "Ing. de Software I",
            "Ing. de Software II"
        ];

        foreach ($Materias as $Materia) {
            Materias::create([
                'nombre_materia' => $Materia
            ]);
        }
    }
}
