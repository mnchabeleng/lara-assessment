<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Supplier;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Supplier::insert([
            [
                'name' => 'Nike',
                'email' => 'admin@nike.com',
                'phone' => '0123456789',
                'address' => 'USA',
            ],
        ]);
    }
}
