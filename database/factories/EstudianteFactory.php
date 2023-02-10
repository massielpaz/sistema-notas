<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Estudiante>
 */
class EstudianteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'carnet_estudiante' => fake()->unique()->randomNumber(8, true),
            'nombre_estudiante' => fake()->unique()->name(),
            'correo_estudiante' => fake()->unique()->safeEmail(),
            'anio_estudiante' => fake()->numberBetween(1, 5),
            'carrera_estudiante' => fake()->unique()->word()
        ];
    }
}
