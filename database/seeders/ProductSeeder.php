<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'name' => 'Rok Pias',
                'description' => null,
                'price' => 99999,
                'stock' => null,
                'category_id' => 1,
                'material' => 'Besi',
                'jenis_pakaian' => 'Wanita',
                'nama_brand' => 'Laweyan Lur',
                'code_brand' => 'RPB101',
                'ukuran' => 'XL',
                'sold' => 50,
                'rating' => 4,
                'image' => 'baju1.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Outer Batik',
                'description' => null,
                'price' => 89999,
                'stock' => null,
                'category_id' => 1,
                'material' => 'Kayu',
                'jenis_pakaian' => 'Wanita',
                'nama_brand' => 'Laweyan Bro',
                'code_brand' => 'OBK102',
                'ukuran' => 'L',
                'sold' => 30,
                'rating' => 3,
                'image' => 'baju2.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Gamis 3D',
                'description' => null,
                'price' => 109999,
                'stock' => null,
                'category_id' => 2,
                'material' => 'Baja',
                'jenis_pakaian' => 'Wanita',
                'nama_brand' => 'Laweyan Luwe',
                'code_brand' => 'GB3D101',
                'ukuran' => 'M',
                'sold' => 70,
                'rating' => 5,
                'image' => 'baju3.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Batik Persebaya',
                'description' => null,
                'price' => 209999,
                'stock' => null,
                'category_id' => 2,
                'material' => 'Kulit Buaya',
                'jenis_pakaian' => 'Wanita',
                'nama_brand' => 'Laweyan Hijau',
                'code_brand' => 'DBL103',
                'ukuran' => 'M',
                'sold' => 70,
                'rating' => 5,
                'image' => 'baju4.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        // Memasukkan data ke dalam database
        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
