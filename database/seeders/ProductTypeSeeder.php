<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProductTypeSeeder extends Seeder
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
        $now = Carbon::now();
        $productTypes = [
            [
                'product_type_name' => 'Type 1',
                'product_description' => 'Description for Type 1',
                'product_type_checkstatus' => 1,
                'product_views' => 100,
                'product_sold' => 50,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'product_type_name' => 'Type 2',
                'product_description' => 'Description for Type 2',
                'product_type_checkstatus' => 1,
                'product_views' => 120,
                'product_sold' => 60,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            // Thêm dòng dữ liệu khác nếu cần
        ];

        // Lưu dữ liệu vào bảng product_type
        DB::table('product_type')->insert($productTypes);
    }
}
