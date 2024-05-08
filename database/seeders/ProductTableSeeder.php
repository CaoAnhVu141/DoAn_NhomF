<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use App\Models\Product;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('products')->insert([
                'name' => 'Iphone 15 ProMax',
                'price' => 430000000,
                'description' => 'San Pham Dien Tu',
                'discount' => 1,
                'image' => 'Iphone15.jpg',
                'id_category' => 1,
                'id_attribute' => 1,
                'id_producttype' => 1,
                'id_supplier' => 1,
                'checkactive' => true,
                'amount' => 10,
                'id' => 1,
        ]);

        $products = [
            [
                'name' => 'Product 2',
                'price' => 1000,
                'description' => 'Description for Product 1',
                'discount' => 100,
                'image' => 'product1.jpg',
                'id_category' => 2,
                'id_attribute' => 2,
                'id_producttype' => 2,
                'id_supplier' => 2,
                'checkactive' => true,
                'amount' => 10,
                'id' => 1,
            ],
            // Add more products as needed
        ];

        // Loop through the products array and insert into the database
        foreach ($products as $productData) {
            Product::create($productData);
        }
    }
}
