<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participante extends Model
{
    use HasFactory;

    protected $fillable = [
        'cedula',
        'nombre',
        'f_nacimiento',
        'agencia',
        'ciudad',
        'genero',
        'departamento',
        'telefono',
        'sumatoria',
    ];
    
    protected $table = 'participantes';
}
