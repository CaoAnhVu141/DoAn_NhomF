<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PowersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Xóa dữ liệu cũ (nếu có)
        DB::table('powers')->truncate();

        // Chèn dữ liệu mới
        DB::table('powers')->insert([
            [
                'id_power' => 1,
                'name' => 'Super Strength',
                'description' => 'This power grants superhuman strength to the user.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_power' => 2,
                'name' => 'Telekinesis',
                'description' => 'This power allows the user to move objects with their mind.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Thêm dữ liệu khác nếu cần
        ]);
    }
}
