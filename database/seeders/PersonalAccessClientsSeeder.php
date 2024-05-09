<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PersonalAccessClientsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Tạo dữ liệu mẫu cho bảng oauth_personal_access_clients
        DB::table('oauth_personal_access_clients')->insert([
            [
                'client_id' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'client_id' => '2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Thêm các bản ghi khác nếu cần
        ]);
    }
}
