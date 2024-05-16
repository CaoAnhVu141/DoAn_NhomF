<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'tu lanh',
                'discription' => '444444444444',
                'checkactive' => 1,
                'id' => 3, // ID của thông tin chương trình (nếu có)
            ],
            [
                'name' => 'tivi',
                'discription' => '3453',
                'checkactive' => 1,
                'id' => 3,
            ],
            // Thêm dữ liệu mẫu khác ở đây
        ];

        // Thêm dữ liệu vào bảng categories
        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
