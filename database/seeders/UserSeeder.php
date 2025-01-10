<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Jayusman',
            'email' => 'owner@gmail.com',
            'username' => 'owner',
            'password' => 'password',
        ])->assignRole('owner');
        User::factory()->create([
            'name' => 'Dimas',
            'email' => 'manager@gmail.com',
            'username' => 'manager',
            'password' => 'password',
            'store_id' => 1,
        ])->assignRole('manager');
        User::factory()->create([
            'name' => 'Andre',
            'email' => 'inventory@gmail.com',
            'username' => 'inventory',
            'password' => 'password',
            'store_id' => 1,
        ])->assignRole('inventory');
        User::factory()->create([
            'name' => 'Tono',
            'email' => 'cashier@gmail.com',
            'username' => 'cashier',
            'password' => 'password',
            'store_id' => 1,
        ])->assignRole('cashier');
        User::factory()->create([
            'name' => 'Anton',
            'email' => 'cashier2@gmail.com',
            'username' => 'cashier2',
            'password' => 'password',
            'store_id' => 2,
        ])->assignRole('cashier');
    }
}
