<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            ['name' => 'Deportivos', 'description' => 'Zapatos deportivos ideales para entrenar o uso diario.'],
            ['name' => 'Urbanos',    'description' => 'Diseños modernos y casuales para el día a día.'],
            ['name' => 'Casuales',   'description' => 'Zapatos cómodos y versátiles para cualquier ocasión.'],
            ['name' => 'Running',    'description' => 'Calzado especializado para correr y alto rendimiento.'],
        ];

        foreach ($categories as $data) {
            Category::create($data);
        }
    }
}