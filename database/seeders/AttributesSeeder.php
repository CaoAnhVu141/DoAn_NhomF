<?php

namespace Database\Seeders;

use App\Models\Advertisement;
use App\Models\Attribute;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AttributesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $advertisements = [
            [
                'name' => 'Hàng Quảng Châu',
                'discription' => 'path/to/image1.jpg',
                'checkactive' => 1,
                'id' => 1, // ID của thông tin chương trình (nếu có)
            ],
            [
                'name' => 'Hàng Nội Địa',
                'discription' => 'path/to/image1.jpg',
                'checkactive' => 1,
                'id' => 2,
            ],
            // Thêm dữ liệu mẫu khác ở đây
        ];
        // Thêm dữ liệu vào bảng advertisements
        foreach ($advertisements as $advertisement) {
            Attribute::create($advertisement);
        }
    }
}
