<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PurchaseHistoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Xóa dữ liệu cũ trong bảng (nếu cần)
        DB::table('purchasehistory')->truncate();

        // Tạo dữ liệu mới
        DB::table('purchasehistory')->insert([
            [
                'id_history' => 1,
                'id_user' => 1,
                'id_product' => 1,
                'amount' => 2,
                'total' => 50.00,
                'id_transport' => 1,
                'id_pay' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_history' => 2,
                'id_user' => 2,
                'id_product' => 2,
                'amount' => 1,
                'total' => 30.00,
                'id_transport' => 2,
                'id_pay' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Thêm các dòng dữ liệu khác nếu cần
        ]);
    }
}
