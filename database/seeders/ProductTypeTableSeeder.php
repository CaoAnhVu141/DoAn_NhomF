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
                
                'name' => 'Cho người già',
                'discription' => 'Mô tả cho loại A',
                'checkactive' => 1,
                'id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
               
                'name' => 'Cho trẻ em',
                'discription' => 'Mô tả cho loại B',
                'checkactive' => 1,
                'id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Thêm dữ liệu khác nếu cần
        ]);
    }
}
