<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Xóa dữ liệu cũ trong bảng (nếu cần)
        DB::table('product_type')->truncate();

        // Tạo dữ liệu mới
        DB::table('product_type')->insert([
            [
                'product_type_id' => 1,
                'product_type_name' => 'Electronics',
                'product_description' => 'Description for Electronics products',
                'product_type_checkstatus' => true,
                'product_views' => 1000,
                'product_sold' => 500,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_type_id' => 2,
                'product_type_name' => 'Clothing',
                'product_description' => 'Description for Clothing products',
                'product_type_checkstatus' => true,
                'product_views' => 2000,
                'product_sold' => 1000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Thêm các dòng dữ liệu khác nếu cần
        ]);
    }
}
