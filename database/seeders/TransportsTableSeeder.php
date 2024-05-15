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
                'name' => 'Viettel Post',
                'id_carrier' => 1,
                'transportfee' => 20000,
                'deliverytime' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_transport' => 2,
                'name' => 'Giao hàng nhanh',
                'id_carrier' => 2,
                'transportfee' => 30000,
                'deliverytime' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Thêm các dòng dữ liệu khác nếu cần
        ]);
    }
}
