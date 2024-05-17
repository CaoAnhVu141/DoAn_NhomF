<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Tạo dữ liệu mẫu cho bảng orders
        // DB::table('oders')->insert([
        //     [
        //         'id_user' => 1,
        //         'id_transport' => 1,
        //         'status' => 'pending',
        //         'amount' => 3,
        //         'intomoney' => 150000, // Ví dụ số tiền
        //         'address' => '123 Street, City, Country',
        //         'id_pay' => 1,
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        //     [
        //         'id_user' => 2,
        //         'id_transport' => 2,
        //         'status' => 'processing',
        //         'amount' => 2,
        //         'intomoney' => 100000, // Ví dụ số tiền
        //         'address' => '456 Avenue, Town, Country',
        //         'id_pay' => 2,
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        //     // Thêm dữ liệu mẫu khác nếu cần
        // ]);
    }
}
