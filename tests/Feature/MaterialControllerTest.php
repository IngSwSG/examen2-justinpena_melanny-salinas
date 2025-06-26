<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Categoria;

class MaterialControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_dadoUnMaterialQueNoExiste_insertarMaterial_funcionaCorrectamente()
    {
        
        $categoria = Categoria::create(['nombre' => 'Prueba']);

       
        $data = [
            'unidadMedida' => 'kg',
            'descripcion' => 'Cemento gris',
            'ubicacion' => 'Bodega 1',
            'idCategoria' => $categoria->idCategoria,
        ];

        // Llamamos al endpoint para insertar el material
        $response = $this->post('/material', $data);


        $response->assertStatus(201);
        $response->assertJsonFragment([
            'unidadMedida' => 'kg',
            'descripcion' => 'Cemento gris',
            'ubicacion' => 'Bodega 1',
            'idCategoria' => $categoria->idCategoria,
        ]);

        
        $this->assertDatabaseHas('Material', $data);
    }
} 