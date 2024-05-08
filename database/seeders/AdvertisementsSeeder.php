<?php

namespace Database\Seeders;

use App\Models\Advertisement;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdvertisementsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $advertisements = [
            [
                'title' => 'Quảng cáo 1',
                'image' => 'path/to/image1.jpg',
                'information' => 'Thông tin quảng cáo 1...',
                'id' => 1, // ID của thông tin chương trình (nếu có)
            ],
            [
                'title' => 'Quảng cáo 2',
                'image' => 'path/to/image2.jpg',
                'information' => 'Thông tin quảng cáo 2...',
                'id' => 2,
            ],
            // Thêm dữ liệu mẫu khác ở đây
        ];

        // Thêm dữ liệu vào bảng advertisements
        foreach ($advertisements as $advertisement) {
            Advertisement::create($advertisement);
        }
    }
}
