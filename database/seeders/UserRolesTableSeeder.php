<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserRolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Xóa dữ liệu cũ trong bảng (nếu cần)
        DB::table('user_roles')->truncate();

        // Tạo dữ liệu mới
        DB::table('user_roles')->insert([
            [
                'id_aduser' => 1,
                'id' => 1,
                'id_role' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_aduser' => 2,
                'id' => 2,
                'id_role' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Thêm các dòng dữ liệu khác nếu cần
        ]);
    }
}
