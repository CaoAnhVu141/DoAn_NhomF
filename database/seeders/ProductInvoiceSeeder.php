<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProductInvoiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Xóa dữ liệu cũ trong bảng (nếu cần)
        DB::table('productinvoice')->truncate();

        // Tạo dữ liệu mới
        $now = Carbon::now();
        $productInvoices = [
            [
                'id_intermediate' => 1,
                'id_product' => 1,
                'amount' => 2,
                'price' => 100,
                'image' => 'image1.jpg',
                'phone' => '123456789',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id_intermediate' => 2,
                'id_product' => 2,
                'amount' => 1,
                'price' => 150,
                'image' => 'image2.jpg',
                'phone' => '987654321',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            // Thêm dòng dữ liệu khác nếu cần
        ];

        // Lưu dữ liệu vào bảng productinvoice
        DB::table('productinvoice')->insert($productInvoices);
    }
}
