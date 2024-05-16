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
                'name' => 'AnhVu',
                'password' => bcrypt('12345678'), // Băm mật khẩu trước khi lưu vào cơ sở dữ liệu
                'email' => 'caanhvu1810@gmail.com',
                'id_role' => 1, // ID của quyền (nếu có)
                'phone' => '123456789',
                'avatar' => 'uploads/avatar.jpg',
            ],
            [
                'name' => 'Khoái',
                'password' => bcrypt('12345678'),
                'email' => 'ok1@gmail.com',
                'id_role' => 2,
                'phone' => '12345678',
                'avatar' => '
                
                uploads/avatar.jpg',
            ],
            [
                'name' => 'Lỏ',
                'password' => bcrypt('12345678'),
                'email' => 'khabanh@gmail.com',
                'id_role' => 2,
                'phone' => '12345678',
                'avatar' => '
                
                uploads/avatar.jpg',
            ],

            [
                'name' => 'Jack',
                'password' => bcrypt('12345678'),
                'email' => 'demo@gmail.com',
                'id_role' => 2,
                'phone' => '12345678',
                'avatar' => '
                
                uploads/avatar.jpg',
            ],

            [
                'name' => 'MTA',
                'password' => bcrypt('12345678'),
                'email' => 'trungnguyen@gmail.com',
                'id_role' => 2,
                'phone' => '12345678',
                'avatar' => '
                
                uploads/avatar.jpg',
            ],
            // Thêm dữ liệu mẫu khác ở đây
        ];

        // Thêm dữ liệu vào bảng users
        foreach ($users as $user) {
            AdminandUser::create($user);
        }
    }
}
