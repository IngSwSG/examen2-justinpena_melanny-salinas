<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    protected $primaryKey = 'idCategoria';
    public $incrementing = true;
    protected $keyType = 'int';

    protected $fillable = [
        'nombre',
    ];

    // Relación: Una categoría tiene muchos materiales
    public function materiales()
    {
        return $this->hasMany(Material::class, 'idCategoria', 'idCategoria');
    }
} 