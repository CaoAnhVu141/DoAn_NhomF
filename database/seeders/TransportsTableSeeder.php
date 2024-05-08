<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransportsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Xóa dữ liệu cũ trong bảng (nếu cần)
        DB::table('transports')->truncate();

        // Tạo dữ liệu mới
        DB::table('transports')->insert([
            [
                'id_transport' => 1,
                'name' => 'Express Shipping',
                'id_carrier' => 1,
                'transportfee' => 10.00,
                'deliverytime' => '1-2 days',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_transport' => 2,
                'name' => 'Standard Shipping',
                'id_carrier' => 2,
                'transportfee' => 5.00,
                'deliverytime' => '3-5 days',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Thêm các dòng dữ liệu khác nếu cần
        ]);
    }
}
