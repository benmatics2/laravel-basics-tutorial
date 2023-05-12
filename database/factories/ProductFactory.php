<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'=>fake()->unique()->sentence(3),
            'description'=>fake()->paragraph(),
            'price'=>rand(10, 100) * 100,
            'quantity'=>rand(2, 10),
            'user_id'=> User::factory() //Generates a User from factory and extracts id
        ];
    }
}

