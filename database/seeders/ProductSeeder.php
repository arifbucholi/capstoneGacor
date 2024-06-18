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
                'name' => 'Batik Batikan',
                'description' => null, // atau isi dengan deskripsi sesuai kebutuhan
                'price' => 99999,
                'stock' => null, // atau isi dengan jumlah stok
                'category_id' => 1, // sesuaikan dengan kategori yang sudah ada di database
                'material' => 'Material A', // atau sesuai dengan material produk
                'jenis_pakaian' => 'Jenis A', // atau sesuai dengan jenis pakaian
                'nama_brand' => 'Brand A', // atau sesuai dengan nama brand
                'code_brand' => 'ABC123', // atau sesuai dengan kode brand
                'ukuran' => 'XL', // atau sesuai dengan ukuran
                'sold' => 50, // jumlah terjual
                'rating' => 4, // rating produk
                'image' => 'baju1.jpg', // nama file gambar di dalam direktori public/img/
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Batik Asli',
                'description' => null, // atau isi dengan deskripsi sesuai kebutuhan
                'price' => 89999,
                'stock' => null, // atau isi dengan jumlah stok
                'category_id' => 1, // sesuaikan dengan kategori yang sudah ada di database
                'material' => 'Material B', // atau sesuai dengan material produk
                'jenis_pakaian' => 'Jenis B', // atau sesuai dengan jenis pakaian
                'nama_brand' => 'Brand B', // atau sesuai dengan nama brand
                'code_brand' => 'XYZ456', // atau sesuai dengan kode brand
                'ukuran' => 'L', // atau sesuai dengan ukuran
                'sold' => 30, // jumlah terjual
                'rating' => 3, // rating produk
                'image' => 'baju2.jpg', // nama file gambar di dalam direktori public/img/
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Batik Palsu',
                'description' => null, // atau isi dengan deskripsi sesuai kebutuhan
                'price' => 109999,
                'stock' => null, // atau isi dengan jumlah stok
                'category_id' => 2, // sesuaikan dengan kategori yang sudah ada di database
                'material' => 'Material C', // atau sesuai dengan material produk
                'jenis_pakaian' => 'Jenis C', // atau sesuai dengan jenis pakaian
                'nama_brand' => 'Brand C', // atau sesuai dengan nama brand
                'code_brand' => 'DEF789', // atau sesuai dengan kode brand
                'ukuran' => 'M', // atau sesuai dengan ukuran
                'sold' => 70, // jumlah terjual
                'rating' => 5, // rating produk
                'image' => 'baju3.jpg', // nama file gambar di dalam direktori public/img/
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
