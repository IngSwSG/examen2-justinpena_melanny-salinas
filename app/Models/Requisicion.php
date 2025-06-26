<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Requisicion extends Model
{
    use HasFactory;

    protected $primaryKey = 'idRequisicion';
    public $incrementing = true;
    protected $keyType = 'int';

    protected $fillable = [
        'fecha',
        'estado',
        'idUsuario',
    ];

    // Relación: Una requisición pertenece a un usuario
    public function usuario()
    {
        return $this->belongsTo(User::class, 'idUsuario', 'id');
    }

    // Relación: Una requisición tiene muchos items (ItemRequisicion)
    public function items()
    {
        return $this->hasMany(ItemRequisicion::class, 'idRequisicion', 'idRequisicion');
    }
} 