<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Estudiante extends Model
{
    use HasFactory;
    protected $table = 'estudiante';
    protected $primaryKey = 'id_estudiante';

    protected $fillable = [
        'carnet_estudiante',
        'nombre_estudiante',
        'correo_estudiante',
        'carrera_estudiante',
        'anio_estudiante'
    ];

    public function notas(): BelongsTo
    {
        return $this->BelongsTo(Notas::class, 'id_estudiante');
    }
}
