<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Isi database dengan 4 produk.
     * Halaman 1: Laptop, Accessories, Buku Laravel (paginate 3)
     * Halaman 2: Seblak
     */
    public function run(): void
    {
        // Buat 4 kategori produk
        $elektronik = ProductCategory::create([
            'name' => 'Elektronik',
            'description' => 'Produk-produk elektronik dan gadget terkini.',
        ]);

        $aksesoris = ProductCategory::create([
            'name' => 'Aksesoris',
            'description' => 'Aksesoris pelengkap gadget dan fashion.',
        ]);

        $buku = ProductCategory::create([
            'name' => 'Buku',
            'description' => 'Buku-buku berkualitas untuk belajar dan referensi.',
        ]);

        $makanan = ProductCategory::create([
            'name' => 'Makanan',
            'description' => 'Makanan lezat khas Indonesia.',
        ]);

        // Produk 1 - Halaman 1
        Product::create([
            'product_category_id' => $elektronik->id,
            'name'                => 'Laptop',
            'description'         => 'Laptop performa tinggi cocok untuk kerja dan gaming.',
            'price'               => 12000000,
            'stock'               => 10,
            'image'               => 'https://images.unsplash.com/photo-1496181133206-80ce9b88a853?w=400&h=300&fit=crop',
        ]);

        // Produk 2 - Halaman 1
        Product::create([
            'product_category_id' => $aksesoris->id,
            'name'                => 'Accessories',
            'description'         => 'Mouse gaming ergonomis untuk produktivitas dan gaming.',
            'price'               => 150000,
            'stock'               => 25,
            'image'               => 'https://images.unsplash.com/photo-1527864550417-7fd91fc51a46?w=400&h=300&fit=crop',
        ]);

        // Produk 3 - Halaman 1 (baru ditambahkan)
        Product::create([
            'product_category_id' => $buku->id,
            'name'                => 'Buku Laravel',
            'description'         => 'Panduan lengkap belajar Laravel dari dasar hingga mahir.',
            'price'               => 500000,
            'stock'               => 15,
            'image'               => 'https://images.unsplash.com/photo-1544716278-ca5e3f4abd8c?w=400&h=300&fit=crop',
        ]);

        // Produk 4 - Halaman 2
        Product::create([
            'product_category_id' => $makanan->id,
            'name'                => 'Seblak',
            'description'         => 'Seblak pedas mercon khas Bandung, cocok untuk pencinta kuliner pedas.',
            'price'               => 20000,
            'stock'               => 50,
            'image'               => 'https://images.unsplash.com/photo-1569050467447-ce54b3bbc37d?w=400&h=300&fit=crop',
        ]);
    }
}
