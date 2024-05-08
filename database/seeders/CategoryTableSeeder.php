<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use App\Models\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Let's create some dummy data for categories
        $categories = [
            [
                'name' => 'Category 1',
                'description' => 'Description for Category 1',
                'checkactive' => true,
            ],
            // Add more categories as needed
        ];

        // Loop through the categories array and insert into the database
        foreach ($categories as $categoryData) {
            Category::create($categoryData);
        }
    }
}
