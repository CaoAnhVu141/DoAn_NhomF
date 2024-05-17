<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductTypesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('producttypes')->truncate();

        DB::table('producttypes')->insert([
            [

                'name' => 'Loại A',
                'description' => 'Mô tả cho loại A',
                'checkactive' => true,
                'created_at' => now(),
                'updated_at' => now(),
                'id' => 1,
            ],
            [

                'name' => 'Loại B',
                'description' => 'Mô tả cho loại B',
                'checkactive' => true,
                'created_at' => now(),
                'updated_at' => now(),
                'id' => 2,
            ],
            [

                'name' => 'Loại D',
                'description' => 'Mô tả cho loại D',
                'checkactive' => true,
                'created_at' => now(),
                'updated_at' => now(),
                'id' => 3,
            ],
            [

                'name' => 'Loại C',
                'description' => 'Mô tả cho loại C',
                'checkactive' => true,
                'created_at' => now(),
                'updated_at' => now(),
                'id' => 4,
            ],
            // Thêm dữ liệu khác nếu cần
        ]);
    }
}
