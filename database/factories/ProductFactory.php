<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition(): array
    {
        $marcas = ['Nike','Adidas','Puma','New Balance','Jordan','Reebok','Vans','Converse','ASICS','Fila'];
        $modelos = ['Air Force 1','Ultraboost','RS-X','Air Max','Classic','Runner','Street','Court','Low','High'];
        $color = ['Blanco','Negro','Gris','Azul','Rojo','Beige','Verde'];

        $name = $this->faker->randomElement($marcas).' '.$this->faker->randomElement($modelos).' '.$this->faker->randomElement($color);

        $categoryId = Category::inRandomOrder()->value('id');

        return [
            'name' => $name,
            'description' => $this->faker->sentence(14),
            'price' => $this->faker->numberBetween(150000, 950000),
            'category_id' => $categoryId ?? Category::factory(),
        ];
    }
} 