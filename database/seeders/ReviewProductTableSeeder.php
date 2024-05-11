<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReviewProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     *
     * @return void
     */
    public function run()
    {
        // Xóa dữ liệu cũ trong bảng (nếu cần)
        DB::table('reviewproducts')->truncate();

        // Tạo dữ liệu mới
        DB::table('reviewproducts')->insert([
            [
                'id_review' => 1,
                'id_user' => 1,
                'id_product' => 1,
                'content' => 'This product is amazing!',
                'point' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_review' => 2,
                'id_user' => 2,
                'id_product' => 2,
                'content' => 'Great product, highly recommended!',
                'point' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Thêm các dòng dữ liệu khác nếu cần
        ]);
    }
}
