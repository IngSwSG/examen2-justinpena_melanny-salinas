<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriaSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('Categoria')->insert([
            ['nombre' => 'Papelería'],
            ['nombre' => 'Limpieza'],
            ['nombre' => 'Construcción'],
            ['nombre' => 'Tecnología'],
            ['nombre' => 'Mobiliario'],
            ['nombre' => 'Seguridad'],
            ['nombre' => 'Laboratorio'],
            ['nombre' => 'Oficina'],
        ]);
    }
} 