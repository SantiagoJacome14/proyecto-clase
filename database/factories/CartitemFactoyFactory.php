<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CartitemFactory extends Factory
{
   
    protected $model = Cartitem::class;
    public function definition(): array
    {
        return [
            'product_id' => User::onRandomOrder()->first()->id,
            'product_id' => Product::inRandomOrder()->first()->id,
            'quantity' => fake()->numberBetween(1, 5),

        ];
    }
}