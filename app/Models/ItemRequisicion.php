<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemRequisicion extends Model
{
    use HasFactory;

    protected $primaryKey = 'idItemRequisicion';
    public $incrementing = true;
    protected $keyType = 'int';

    protected $fillable = [
        'idRequisicion',
        'codigo',
        'cantidad',
        'cantidadAprobada',
    ];

    // Relación: Un item pertenece a una requisición
    public function requisicion()
    {
        return $this->belongsTo(Requisicion::class, 'idRequisicion', 'idRequisicion');
    }

    // Relación: Un item pertenece a un material
    public function material()
    {
        return $this->belongsTo(Material::class, 'codigo', 'codigo');
    }
} 