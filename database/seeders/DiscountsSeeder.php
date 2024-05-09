<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DiscountsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Tạo dữ liệu mẫu cho bảng discounts
        DB::table('discounts')->insert([
            [
                'codediscount' => 'DISCOUNT10',
                'quantity' => 10,
                'id_categorydiscount' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'codediscount' => 'DISCOUNT20',
                'quantity' => 20,
                'id_categorydiscount' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Thêm dữ liệu cho các discount khác ở đây
        ]);
    }
}
