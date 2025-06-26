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

        $material = \App\Models\Material::create($validated);

        // Redirige de vuelta al formulario con mensaje de éxito
        return redirect()->route('materials.create')->with('success', 'Material creado exitosamente');
    }

    public function create()
    {
        $categorias = \App\Models\Categoria::all();
        return view('materials.create', compact('categorias'));
    }

    public function update(Request $request, $codigo)
    {
        $validated = $request->validate([
            'unidadMedida' => 'required|string',
            'descripcion' => 'required|string',
            'ubicacion' => 'required|string',
            'idCategoria' => 'required|exists:Categoria,idCategoria',
        ]);

        $material = \App\Models\Material::findOrFail($codigo);
        $material->update($validated);

        return response()->json([
            'message' => 'Material actualizado correctamente',
            'material' => $material
        ]);
    }

    public function apiIndex()
    {
        $materials = \App\Models\Material::with('categoria')->get();
        return response()->json($materials);
    }

    public function edit($codigo)
    {
        $material = \App\Models\Material::findOrFail($codigo);
        $categorias = \App\Models\Categoria::all();
        return view('materials.edit', compact('material', 'categorias'));
    }

    public function updateWeb(Request $request, $codigo)
    {
        $validated = $request->validate([
            'unidadMedida' => 'required|string',
            'descripcion' => 'required|string',
            'ubicacion' => 'required|string',
            'idCategoria' => 'required|exists:Categoria,idCategoria',
        ]);

        $material = \App\Models\Material::findOrFail($codigo);
        $material->update($validated);

        return redirect()->route('materials.edit', $codigo)->with('success', 'Material actualizado correctamente.');
    }

    public function index()
    {
        $materials = \App\Models\Material::with('categoria')->get();
        return view('materials.index', compact('materials'));
    }
} 
