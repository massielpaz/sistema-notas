<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Docentes extends Model
{
    use HasFactory;
    protected $table = 'docentes';
    protected $primaryKey = 'id_docente';

    protected $fillable = [
        'nombre_docente',
        'titulo_docente',
        'correo_docente',
        'telefono_docente'
    ];

    public function notas(): BelongsTo
    {
        return $this->BelongsTo(Notas::class, 'id_docente');
    }
}
