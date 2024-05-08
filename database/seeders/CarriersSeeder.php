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
                'name' => 'nha cung cap 1',
                'email' => 'nhacungcap1@gmail.com',
                'average time' => 35,
                'average money' => 434243,
                'id' => 1,
            ],
            [
                'name' => 'nha cung cap 2',
                'email' => 'nhacungcap2@gmail.com',
                'average time' => 35,
                'average money' => 434243,
                'id' => 2,
            ],
            // Thêm dữ liệu mẫu khác ở đây
        ];

        // Thêm dữ liệu vào bảng advertisements
        foreach ($advertisements as $advertisement) {
            Carrier::create($advertisement);
        }
    }
}
