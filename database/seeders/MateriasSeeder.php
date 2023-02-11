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
            "Ing. de Software",
            "Programacion"
        ];

        foreach ($Materias as $Materia) {
            Materias::create([
                'nombre_materia' => $Materia
            ]);
        }
    }
}
