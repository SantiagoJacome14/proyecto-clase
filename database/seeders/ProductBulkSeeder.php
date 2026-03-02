<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductBulkSeeder extends Seeder
{
    public function run(): void
    {
        $marcas = ['Nike','Adidas','Puma','New Balance','Jordan','Reebok','Vans','Converse','Asics','Fila'];
        $modelos = ['Air Force','Ultraboost','RS-X','Air Max','Street','Runner','Classic','Court'];
        $colores = ['Blanco','Negro','Gris','Azul','Rojo','Beige','Verde'];

        $total = 100000;
        $chunk = 2000;

        for ($i = 0; $i < $total; $i += $chunk) {

            $rows = [];

            for ($j = 0; $j < $chunk; $j++) {

                $name = $marcas[array_rand($marcas)] . ' ' .
                        $modelos[array_rand($modelos)] . ' ' .
                        $colores[array_rand($colores)];

                $rows[] = [
                    'name' => $name,
                    'description' => 'Zapato premium '.Str::random(10).' con diseño moderno.',
                    'price' => rand(150000, 950000),
                    'category_id' => rand(1,5),
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            }

            DB::table('products')->insert($rows);
        }
    }
}