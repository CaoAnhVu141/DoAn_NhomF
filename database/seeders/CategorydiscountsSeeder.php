<?php

namespace Database\Seeders;

use App\Models\Attribute;
use App\Models\CategoryDiscount;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorydiscountsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $advertisements = [
            [
                'name' => 'giam gia danh muc 1',
                'discription' => 'giam gia',
                'checkactive' => 1,
                'id_user' => 1, // ID của thông tin chương trình (nếu có)
            ],
            [
                'name' => 'giam gia danh muc 2',
                'discription' => 'giam gia',
                'checkactive' => 1,
                'id_user' => 2,
            ],
            // Thêm dữ liệu mẫu khác ở đây
        ];

        // Thêm dữ liệu vào bảng advertisements
        foreach ($advertisements as $advertisement) {
            CategoryDiscount::create($advertisement);
        }
    }
}
