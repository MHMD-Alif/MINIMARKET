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
            ['code' => 'FDD0001', 'category_id' => 1, 'name' => 'Sari Roti Sobek Cokelat', 'unit' => 'pcs', 'stock' => 200, 'price' => 18000.00,'store_id' => 1, 'image_url' => 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.bormadago.com%2Fshop%2Fproduct%2F10327%2Fsari-roti-sobek-coklat-sarikaya&psig=AOvVaw31qRjM7UvoK6_E7SbmjLjW&ust=1736621260296000&source=images&cd=vfe&opi=89978449&ved=0CBQQjRxqFwoTCJj-wJHq64oDFQAAAAAdAAAAABAJ'],
            ['code' => 'FDD0002', 'category_id' => 1, 'name' => 'Chitato Rasa Sapi Panggang', 'unit' => 'pcs', 'stock' => 200, 'price' => 10000.00,'store_id' => 1, 'image_url' => 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.bormadago.com%2Fshop%2Fproduct%2F3923%2Fchitato-beef-bbq-68gr&psig=AOvVaw3BFiPEGWp15H4J-kG0Ajt5&ust=1736621086640000&source=images&cd=vfe&opi=89978449&ved=0CBQQjRxqFwoTCKiPhuzn64oDFQAAAAAdAAAAABAE'],
            ['code' => 'DRK0001', 'category_id' => 2, 'name' => 'Coca Cola', 'unit' => 'pcs', 'stock' => 200, 'price' => 7000.00,'store_id' => 1, 'image_url' => 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.canggusky.com%2Fproduct%2Fcoca-cola-can-250-ml%2F&psig=AOvVaw1CFGKOBdfX8EAsCF34WqjI&ust=1736620896610000&source=images&cd=vfe&opi=89978449&ved=0CBQQjRxqFwoTCND7mZzn64oDFQAAAAAdAAAAABAJ'],
            ['code' => 'DRK0002', 'category_id' => 2, 'name' => 'Fanta', 'unit' => 'pcs', 'stock' => 200, 'price' => 7000.00,'store_id' => 1, 'image_url' => 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.blibli.com%2Fp%2Ffanta-strawberry-can-minuman-ringan-330-ml%2Fps--LIS-60099-01171&psig=AOvVaw11JSKmB4t4cFTXAAB-LSdn&ust=1736620986770000&source=images&cd=vfe&opi=89978449&ved=0CBQQjRxqFwoTCNCTsrvn64oDFQAAAAAdAAAAABAE'],
            ['code' => 'SKC0001', 'category_id' => 3, 'name' => 'Nivea Men Deep Cleaning Face Wash', 'unit' => 'pcs', 'stock' => 200, 'price' => 34000.00,'store_id' => 1, 'image_url' => 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fid.mcgrocer.com%2Fdi-pl%2Fproduk%2FNivea-Men-Deep-Cleansing-Face-Wash-Protect-Care-150ml&psig=AOvVaw1HjK0oJMOrdCDyK-7fT6HQ&ust=1736621354812000&source=images&cd=vfe&opi=89978449&ved=0CBQQjRxqFwoTCODSle3o64oDFQAAAAAdAAAAABAp'],
            ['code' => 'SKC0002', 'category_id' => 3, 'name' => 'Gatsby Styling Wax Pomade', 'unit' => 'pcs', 'stock' => 200, 'price' => 63000.00,'store_id' => 1, 'image_url' => 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.watsons.co.id%2Fid%2Fstyling-wax-pomade-80g%2Fp%2FBP_72004&psig=AOvVaw3OWMg91FxGq3inJDhbEvnC&ust=1736621531215000&source=images&cd=vfe&opi=89978449&ved=0CBQQjRxqFwoTCIDlssbp64oDFQAAAAAdAAAAABAZ'],
        ]);
    }
}
