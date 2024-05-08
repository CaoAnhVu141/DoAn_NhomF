<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AdminandUser;

class AdminAndUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Admin',
                'password' => bcrypt('12345678'), // Băm mật khẩu trước khi lưu vào cơ sở dữ liệu
                'email' => 'admin@gmail.com',
                'id_role' => 1, // ID của quyền (nếu có)
                'phone' => '123456789',
                'avatar' => 'uploads/avatar.jpg',
            ],
            [
                'name' => 'Jane Smith',
                'password' => bcrypt('12345678'),
                'email' => 'ok1@gmail.com',
                'id_role' => 2,
                'phone' => '987654321',
                'avatar' => 'uploads/avatar.jpg',
            ],
            // Thêm dữ liệu mẫu khác ở đây
        ];

        // Thêm dữ liệu vào bảng users
        foreach ($users as $user) {
            AdminandUser::create($user);
        }
    }
}
