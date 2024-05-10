<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SuppliersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Xóa dữ liệu cũ trong bảng (nếu cần)
        DB::table('suppliers')->truncate();

        // Tạo dữ liệu mới
        DB::table('suppliers')->insert([
            [

                'name' => 'Supplier A',
                'description' => 'Description for Supplier A',
                'email' => 'suppliera@example.com',
                'phone' => '123456789',
                'address' => '123 Supplier Street, City, Country',
                'created_at' => now(),
                'updated_at' => now(),
                'id' => 1,
            ],
            [

                'name' => 'Supplier B',
                'description' => 'Description for Supplier B',
                'email' => 'supplierb@example.com',
                'phone' => '987654321',
                'address' => '456 Supplier Avenue, Town, Country',
                'created_at' => now(),
                'updated_at' => now(),
                'id' => 2,
            ],
            // Thêm các dòng dữ liệu khác nếu cần
        ]);
    }
}
