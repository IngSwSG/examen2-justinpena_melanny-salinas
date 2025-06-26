<?php

namespace App\Http\Controllers;

use App\Models\Material;
use Illuminate\Http\Request;

class MaterialController extends Controller
{
    // Método para insertar un material con una categoría existente
    public function store(Request $request)
    {
        $validated = $request->validate([
            'unidadMedida' => 'required|string',
            'descripcion' => 'required|string',
            'ubicacion' => 'required|string',
            'idCategoria' => 'required|exists:Categoria,idCategoria',
        ]);

        $material = Material::create($validated);

        return response()->json([
            'message' => 'Material creado exitosamente',
            'material' => $material
        ], 201);
    }

    public function create()
    {
        $categorias = \App\Models\Categoria::all();
        return view('materials.create', compact('categorias'));
    }
} 
