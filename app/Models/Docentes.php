<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Docentes extends Model
{
    use HasFactory;
    protected $table = 'docentes';

    protected $fillable = [
        'nombre_docente',
        'titulo_docente',
        'correo_docente',
        'telefono_docente'
    ];
}
