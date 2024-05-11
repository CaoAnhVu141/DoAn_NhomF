<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Xóa dữ liệu cũ trong bảng (nếu cần)
        DB::table('products')->truncate();

        // Tạo dữ liệu mới
        $now = Carbon::now();
        $products = [
            [
                'name' => 'Product 1',
                'price' => 100,
                'description' => 'Description for Product 1',
                'discount' => 0,
                'image' => 'image1.jpg',
                'id_category' => 1,
                'id_producttype' => 1,
                'id_supplier' => 1,
                'checkactive' => 1,
                'amount' => 10,
                'id'=>1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'Product 2',
                'price' => 150,
                'description' => 'Description for Product 2',
                'discount' => 10,
                'image' => 'image2.jpg',
                'id_category' => 2,
                'id_producttype' => 2,
                'id_supplier' => 2,
                'checkactive' => 1,
                'amount' => 15,
                'id'=>2,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            // Thêm dòng dữ liệu khác nếu cần
        ];

        // Lưu dữ liệu vào bảng products
        DB::table('products')->insert($products);
    }
}
