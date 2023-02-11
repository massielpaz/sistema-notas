<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Notas extends Model
{
    use HasFactory;
    protected $table = 'notas';
    protected $primaryKey = 'id_nota';

    protected $fillable = [
        'nota',
        'id_estudiante',
        'id_materia',
        'id_docente'
    ];

    public function estudiante(): HasOne
    {
        return $this->hasOne(Estudiante::class, 'id_estudiante');
    }

    public function materia(): HasOne
    {
        return $this->hasOne(Materias::class, 'id_materias');
    }

    public function docente(): HasOne
    {
        return $this->hasOne(Docentes::class, 'id_docente');
    }
}
