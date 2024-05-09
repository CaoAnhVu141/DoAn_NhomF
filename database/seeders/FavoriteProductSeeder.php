<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FavoriteProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Tạo dữ liệu mẫu cho bảng favoriteproduct
        DB::table('favoriteproduct')->insert([
            [
                'id_product' => 1,
                'id_user' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_product' => 2,
                'id_user' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_product' => 3,
                'id_user' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
