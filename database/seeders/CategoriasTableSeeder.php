<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Categoria;

class CategoriaSeeder extends Seeder
{
    public function run()
    {
        // Crear categorías de ejemplo
        $categorias = [
            [
                'descripción' => 'Categoría 1',
            ],
            [
                'descripción' => 'Categoría 2',
            ],
            [
                'descripción' => 'Categoría 3',
            ],
        ];
        
        // Insertar las categorías en la base de datos
        foreach ($categorias as $categoria) {
            Categoria::create($categoria);
        }
    }
}
