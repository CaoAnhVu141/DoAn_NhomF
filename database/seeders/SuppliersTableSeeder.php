<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use App\Models\Supplier;

class SuppliersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Let's create some dummy data for suppliers
        $suppliers = [
            [
                'name' => 'Supplier 1',
                'description' => 'Description for Supplier 1',
                'email' => 'supplier1@example.com',
                'phone' => '123456789',
                'address' => '123 Supplier St, City, Country'
            ],
            // Add more suppliers as needed
        ];

        // Loop through the suppliers array and insert into the database
        foreach ($suppliers as $supplierData) {
            Supplier::create($supplierData);
        }
    }
}
