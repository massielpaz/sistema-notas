<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Docentes;
use App\Models\Estudiante;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Materias;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(5)->create();
        Materias::factory(5)->create();
        Estudiante::factory(5)->create();
        Docentes::factory(5)->create();
    }
}
