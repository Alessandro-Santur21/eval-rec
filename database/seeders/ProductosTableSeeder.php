<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\ProductoSeeder;
class ProductosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $categoria = Categoria::first();

        // Crear productos de ejemplo
        $productos = [
            [
                'nombre' => 'Producto 1',
                'precio' => 9.99,
                'id_categoria' => $categoria->id_categoria,
            ],
            [
                'nombre' => 'Producto 2',
                'precio' => 19.99,
                'id_categoria' => $categoria->id_categoria,
            ],
            [
                'nombre' => 'Producto 3',
                'precio' => 14.99,
                'id_categoria' => $categoria->id_categoria,
            ],
        ];

        // Insertar los productos en la base de datos
        foreach ($productos as $producto) {
            Producto::create($producto);
        }
    }
}
