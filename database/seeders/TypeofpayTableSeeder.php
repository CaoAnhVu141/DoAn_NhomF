<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeofpayTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Xóa dữ liệu cũ trong bảng (nếu cần)
        DB::table('typeofpay')->truncate();

        // Tạo dữ liệu mới
        DB::table('typeofpay')->insert([
            [
                'id_pay' => 1,
                'name' => 'Credit Card',
                'discription' => 'Payment via credit card',
                'checkstatus' => true,
                'image' => 'credit_card.jpg',
                'icon' => 'credit_card_icon.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_pay' => 2,
                'name' => 'PayPal',
                'discription' => 'Payment via PayPal',
                'checkstatus' => true,
                'image' => 'paypal.jpg',
                'icon' => 'paypal_icon.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Thêm các dòng dữ liệu khác nếu cần
        ]);
    }
}
