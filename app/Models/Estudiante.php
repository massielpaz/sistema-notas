<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    use HasFactory;
    protected $table = 'estudiante';

    protected $fillable = [
        'carnet_estudiante',
        'nombre_estudiante',
        'correo_estudiante',
        'carrera_estudiante',
        'anio_estudiante'
    ];
}
