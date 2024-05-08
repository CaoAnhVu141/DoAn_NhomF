<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Hash;   

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Long Khanh',
            'email' => 'phanlongkhanh.tdc2223@gmail.com',
            'password' => Hash::make('123456'),
            'phone' => '07778552202',
            'avatar' => 'phanlongkhanh.jpg',
            'address' => 'TPHCM',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => 'admin',
            'phone' => '0777855202',
            'avatar' => 'phanlongkhanh.jpg',
            'address' => 'Thành Phố Hồ Chí Minh , Streest Long Trường Thủ Đức',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        for ($i = 1; $i <= 50; $i++) {
            $user_name = 'nguoidung' . $i;
            DB::table('users')->insert([
                'name' => $user_name,
                'email' => $user_name . '@nguoidung.com',
                'password' => Hash::make('123456'),
                'phone' => '0123456789',
                'avatar' => 'nguoidung.jpg',
                'address' => 'TPHCM',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
