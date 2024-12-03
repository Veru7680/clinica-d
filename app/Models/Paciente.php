<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory; // Asegúrate de que esta línea esté aquí
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory; // Asegúrate de que esta línea esté presente

    protected $fillable = [
        'nombre', 'apellido', 'email', 'telefono', 'direccion', 'estado',
    ];
}
