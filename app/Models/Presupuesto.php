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
    ];

    // Relación: Un presupuesto tiene muchos MaterialUnidad
    public function materialesUnidades()
    {
        return $this->hasMany(MaterialUnidad::class, 'codigoPresupuesto', 'codigoPresupuesto');
    }
} 