<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Materias extends Model
{
    use HasFactory;
    protected $table = 'materias';
    protected $primaryKey = 'id_materias';

    protected $fillable = [
        'nombre_materia'
    ];

    public function notas(): BelongsTo
    {
        return $this->BelongsTo(Notas::class, 'id_materia');
    }
}
