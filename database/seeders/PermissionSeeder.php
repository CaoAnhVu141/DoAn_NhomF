<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Xóa dữ liệu cũ trong bảng (nếu cần)
        DB::table('permission')->truncate();

        // Tạo dữ liệu mới
        $now = Carbon::now();
        $permissions = [
            ['per_name' => 'permission_1', 'created_at' => $now, 'updated_at' => $now],
            ['per_name' => 'permission_2', 'created_at' => $now, 'updated_at' => $now],
            ['per_name' => 'permission_3', 'created_at' => $now, 'updated_at' => $now],
            // Thêm dòng dữ liệu khác nếu cần
        ];

        // Lưu dữ liệu vào bảng permissions
        DB::table('permission')->insert($permissions);
    }
}
