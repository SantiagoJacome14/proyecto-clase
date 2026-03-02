<?php

namespace Database\Factories;

use App\Models\Cartitem;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class CartitemFactory extends Factory
{
    protected $model = Cartitem::class;

    public function definition(): array
    {
        return [
            'user_id' => User::inRandomOrder()->value('id') ?? User::factory(),
            'product_id' => Product::inRandomOrder()->value('id') ?? Product::factory(),
            'quantity' => $this->faker->numberBetween(1, 5),
        ];
    }
}