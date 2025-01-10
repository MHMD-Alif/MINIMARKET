<?php

namespace Database\Seeders;

use App\Models\Store;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('stores')->insert([
            ['name' => 'Jakarta 1', 'location' => 'Jalan Merdeka Raya No. 12'],
            ['name' => 'Bandung 2', 'location' => 'Jalan Cihampelas Indah No. 45'],
            ['name' => 'Yogyakarta 3', 'location' => 'Jalan Prawirotaman No. 78'],
        ]);
    }
}
