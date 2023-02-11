<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => fake()->name(),
            'username' => 'admin',
            'email' => 'admin@uml.edu.ni',
            'email_verified_at' => now(),
            'password' => 'laravel',
            'remember_token' => Str::random(10)
        ]);
        $this->call([
            MateriasSeeder::class,
            EstudianteSeeder::class,
            DocenteSeeder::class
        ]);
    }
}
