<?php

namespace Database\Seeders;

use App\Models\Attribute;
use App\Models\Carrier;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarriersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $advertisements = [
            [
                'name' => 'Nhanh',
                'email' => 'nhacungcap1@gmail.com',
                'average time' => 3,
                'average money' => 20,
                'checkactive' => 1,
                'image'=> 'uploads/images',
                'id' => 3,
            ],
            [
                'name' => 'nha cung cap 2',
                'email' => 'nhacungcap2@gmail.com',
                'average time' => 35,
                'average money' => 434243,
                'checkactive' => 1,
                'image'=> 'uploads/images',
                'id' => 3,
            ],
            // Thêm dữ liệu mẫu khác ở đây
        ];

        // Thêm dữ liệu vào bảng advertisements
        foreach ($advertisements as $advertisement) {
            Carrier::create($advertisement);
        }
    }
}
