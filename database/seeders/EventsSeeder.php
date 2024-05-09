<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Tạo dữ liệu mẫu cho bảng events
        DB::table('events')->insert([
            [
                'name' => 'Event 1',
                'content' => 'Content for Event 1',
                'image' => 'image1.jpg',
                'linkevent' => 'https://example.com/event1',
                'checkactive' => true,
                'start_date' => '2024-05-10',
                'end_date' => '2024-05-15',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Event 2',
                'content' => 'Content for Event 2',
                'image' => 'image2.jpg',
                'linkevent' => 'https://example.com/event2',
                'checkactive' => true,
                'start_date' => '2024-06-01',
                'end_date' => '2024-06-05',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Thêm dữ liệu cho các sự kiện khác ở đây
        ]);
    }
}
