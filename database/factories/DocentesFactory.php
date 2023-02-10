<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Docentes>
 */
class DocentesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'titulo_docente' => fake()->unique()->word(),
            'nombre_docente' => fake()->unique()->name(),
            'correo_docente' => fake()->unique()->safeEmail(),
            'telefono_docente' => fake()->randomNumber(8, true)
        ];
    }
}
