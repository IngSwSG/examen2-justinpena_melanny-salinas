<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Presupuesto extends Model
{
    use HasFactory;

    protected $primaryKey = 'codigoPresupuesto';
    public $incrementing = true;
    protected $keyType = 'int';

    protected $fillable = [
        'nombrePresupuesto',
        'idUnidad',
    ];

    // Relación: Un presupuesto tiene muchos MaterialUnidad
    public function materialesUnidades()
    {
        return $this->hasMany(MaterialUnidad::class, 'codigoPresupuesto', 'codigoPresupuesto');
    }

    // Relación: Un presupuesto pertenece a una unidad
    public function unidad()
    {
        return $this->belongsTo(Unidad::class, 'idUnidad', 'idUnidad');
    }
} 