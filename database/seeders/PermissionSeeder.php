<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Tạo dữ liệu mẫu cho bảng permissions
        $permissions = [
            ['per_name' => 'permission_1', 'created_at' => now(), 'updated_at' => now()],
            ['per_name' => 'permission_2', 'created_at' => now(), 'updated_at' => now()],
            ['per_name' => 'permission_3', 'created_at' => now(), 'updated_at' => now()],
            // Thêm các dòng dữ liệu khác nếu cần
        ];

        // Lưu dữ liệu vào bảng permissions
        Permission::insert($permissions);
    }
}
