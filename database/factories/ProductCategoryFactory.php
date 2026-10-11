<?php

namespace Database\Factories;

use App\Models\ProductCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<ProductCategory>
 */
class ProductCategoryFactory extends Factory
{
    /**
     * Definisikan state default model.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $kategori = [
            'Elektronik',
            'Pakaian',
            'Makanan & Minuman',
            'Olahraga',
            'Perabotan Rumah',
            'Kecantikan',
            'Otomotif',
            'Buku & Alat Tulis',
        ];

        return [
            'name' => $this->faker->unique()->randomElement($kategori),
            'description' => $this->faker->sentence(10),
        ];
    }
}
