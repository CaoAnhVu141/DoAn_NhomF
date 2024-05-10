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

                'name' => 'Super Strength',
                'discription' => 'This power grants superhuman strength to the user.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [

                'name' => 'Telekinesis',
                'discription' => 'This power allows the user to move objects with their mind.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Thêm dữ liệu khác nếu cần
        ]);
    }
}
