<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{
    protected $table = 'profesores';

    // Lista de campos permitidos para asignación masiva
    protected $fillable = [
        'nombre',
        'correo',
        'telefono',
        'especialidad',
    ];
}
