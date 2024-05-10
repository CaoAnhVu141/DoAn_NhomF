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
                'discription' => 'Mô tả cho loại A',
                'checkactive' => true,
                'created_at' => now(),
                'updated_at' => now(),
                'id' => 1,
            ],
            [

                'name' => 'Loại B',
                'discription' => 'Mô tả cho loại B',
                'checkactive' => true,
                'created_at' => now(),
                'updated_at' => now(),
                'id' => 2,
            ],
            // Thêm dữ liệu khác nếu cần
        ]);
    }
}
