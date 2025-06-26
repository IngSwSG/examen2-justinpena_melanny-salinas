<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MaterialUnidad extends Model
{
    use HasFactory;

    protected $primaryKey = 'idMaterialUnidad';
    public $incrementing = true;
    protected $keyType = 'int';

    protected $fillable = [
        'cantidad',
        'idUnidad',
        'codigo',
        'codigoPresupuesto',
    ];

    // Relación: Un MaterialUnidad pertenece a un Material
    public function material()
    {
        return $this->belongsTo(Material::class, 'codigo', 'codigo');
    }

    // Relación: Un MaterialUnidad pertenece a una Unidad
    public function unidad()
    {
        return $this->belongsTo(Unidad::class, 'idUnidad', 'idUnidad');
    }

    // Relación: Un MaterialUnidad pertenece a un Presupuesto
    public function presupuesto()
    {
        return $this->belongsTo(Presupuesto::class, 'codigoPresupuesto', 'codigoPresupuesto');
    }
} 