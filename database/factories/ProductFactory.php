<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Product>
 */
class ProductFactory extends Factory
{
    /**
     * Definisikan state default model.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'product_category_id' => ProductCategory::factory(),
            'name' => $this->faker->words(3, true),
            'description' => $this->faker->paragraph(2),
            'price' => $this->faker->numberBetween(10000, 5000000),
            'stock' => $this->faker->numberBetween(0, 100),
            'image' => null,
        ];
    }
}
