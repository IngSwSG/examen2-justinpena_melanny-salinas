<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $table = 'Usuario';
    protected $primaryKey = 'idUsuario';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'identification',
        'nombre',
        'apellidos',
        'telefono',
        'idUnidad',
    ];

    // Relación: Un usuario pertenece a una unidad
    public function unidad()
    {
        return $this->belongsTo(Unidad::class, 'idUnidad', 'idUnidad');
    }
} 