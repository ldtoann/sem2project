<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
    public function definition(): array
    {
        $name = $this->faker->name();
        return [
            'name' => $name,
            'desc' => $this->faker->realText(),
            'slug' => Str::slug($name, '-'),
            'price' => $this->faker->numberBetween(1000000, 2000000),
            'quantity' => $this->faker->randomDigit(),
            'category_id' => $this->faker->numberBetween(1, 10),
        ];
    }
}
