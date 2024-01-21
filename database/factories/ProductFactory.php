<?php

namespace Database\Factories;

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
    public function definition(): array
    {
        return [
            'title' => $this->faker->title(),
            'description' => $this->faker->text(100),
            'price' => $this->faker->numberBetween(100, 10000),
            'thumbnail' => $this->faker->file(base_path('/tests/Fixtures/images/products'), storage_path('/app/public/images/products'), false),
        ];
    }
}
