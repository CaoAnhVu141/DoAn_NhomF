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
                'id_producttype' => 1,
                'name' => 'Loại A',
                'description' => 'Mô tả cho loại A',
                'checkactive' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_producttype' => 2,
                'name' => 'Loại B',
                'description' => 'Mô tả cho loại B',
                'checkactive' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Thêm dữ liệu khác nếu cần
        ]);
    }
}
