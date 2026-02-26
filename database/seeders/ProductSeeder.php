<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Category;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $products = [
            [
                'name' => 'Nike Air Force 1',
                'description' => 'Zapatos urbanos clásicos en color blanco, cómodos y versátiles.',
                'price' => 350000,
            ],
            [
                'name' => 'Adidas Ultraboost',
                'description' => 'Zapatos deportivos con tecnología Boost para máxima comodidad.',
                'price' => 520000,
            ],
            [
                'name' => 'Puma RS-X',
                'description' => 'Diseño moderno y deportivo, ideal para uso diario.',
                'price' => 400000,
            ],
        ];

        foreach ($products as $data) {
            Product::create([
                'name' => $data['name'],
                'description' => $data['description'],
                'price' => $data['price'],
                'category_id' => Category::inRandomOrder()->value('id'),
            ]);
        }
    }
}