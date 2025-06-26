<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unidad extends Model
{
    use HasFactory;

    protected $table = 'Unidad';
    protected $primaryKey = 'idUnidad';
    public $incrementing = true;
    protected $keyType = 'int';

    protected $fillable = [
        'nombre',
    ];

    // Relación: Una unidad tiene muchos usuarios
    public function usuarios()
    {
        return $this->hasMany(Usuario::class, 'idUnidad', 'idUnidad');
    }

    // Relación: Una unidad tiene muchos presupuestos
    
    public function presupuestos()
    {
        return $this->hasMany(Presupuesto::class, 'idUnidad', 'idUnidad');
    }
} 