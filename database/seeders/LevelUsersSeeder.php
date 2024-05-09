<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LevelUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Tạo dữ liệu mẫu cho bảng levelusers
        DB::table('levelusers')->insert([
            [
                'namelevel' => 'Beginner',
                'id_user' => 1,
                'totalmoney' => 100,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'namelevel' => 'Intermediate',
                'id_user' => 2,
                'totalmoney' => 200,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'namelevel' => 'Advanced',
                'id_user' => 3,
                'totalmoney' => 300,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
