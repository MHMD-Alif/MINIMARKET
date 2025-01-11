<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            ['code' => 'FDD0001', 'category_id' => 1, 'name' => 'Sari Roti Sobek Cokelat', 'unit' => 'pcs', 'stock' => 200, 'price' => 18000.00,'store_id' => 1, 'image_url' => 'https://i.pinimg.com/736x/2a/81/71/2a8171a9bec917f4e4fa47ebd9a0ab42.jpg'],
            ['code' => 'FDD0002', 'category_id' => 1, 'name' => 'Lays Classic', 'unit' => 'pcs', 'stock' => 200, 'price' => 10000.00,'store_id' => 1, 'image_url' => 'https://i.pinimg.com/736x/14/fb/f5/14fbf589a2f366f1c3c38a217bf04876.jpg'],
            ['code' => 'DRK0001', 'category_id' => 2, 'name' => 'Coca Cola', 'unit' => 'pcs', 'stock' => 200, 'price' => 7000.00,'store_id' => 1, 'image_url' => 'https://i.pinimg.com/736x/d8/ab/64/d8ab648475be320fc3f113dd2c058053.jpg'],
            ['code' => 'DRK0002', 'category_id' => 2, 'name' => 'Fanta', 'unit' => 'pcs', 'stock' => 200, 'price' => 7000.00,'store_id' => 1, 'image_url' => 'https://i.pinimg.com/736x/5c/86/3d/5c863da3e6f0364a46cf350e8928ea9a.jpg'],
            ['code' => 'SKC0001', 'category_id' => 3, 'name' => 'Nivea Men Deep Cleaning Face Wash', 'unit' => 'pcs', 'stock' => 200, 'price' => 34000.00,'store_id' => 1, 'image_url' => 'https://i.pinimg.com/736x/53/af/5f/53af5f66b4912f5a21643991bdb6e112.jpg'],
            ['code' => 'SKC0002', 'category_id' => 3, 'name' => 'Biore UV Sunscreen', 'unit' => 'pcs', 'stock' => 200, 'price' => 50000.00,'store_id' => 1, 'image_url' => 'https://i.pinimg.com/736x/8c/64/64/8c6464240d1b9125e9454b93583a4cc5.jpg'],
        ]);
    }
}
