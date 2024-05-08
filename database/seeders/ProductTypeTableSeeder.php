<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use App\Models\ProductType;

class ProductTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         // Let's create some dummy data for product types
         $productTypes = [
            [
                'name' => 'Type 1',
                'description' => 'Description for Type 1',
                'checkactive' => true,
            ],
            // Add more product types as needed
        ];

        // Loop through the product types array and insert into the database
        foreach ($productTypes as $productTypeData) {
            ProductType::create($productTypeData);
        }
    }
}
