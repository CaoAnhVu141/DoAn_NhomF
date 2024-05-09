<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Xóa dữ liệu cũ trong bảng (nếu cần)
        DB::table('posts')->truncate();

        // Tạo dữ liệu mới
        DB::table('posts')->insert([
            [
                'id_post' => 1,
                'name' => 'Post 1',
                'description' => 'Description for Post 1',
                'content' => 'Content for Post 1',
                'avatar' => 'post1.jpg',
                'id_categorypost' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_post' => 2,
                'name' => 'Post 2',
                'description' => 'Description for Post 2',
                'content' => 'Content for Post 2',
                'avatar' => 'post2.jpg',
                'id_categorypost' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Thêm các dòng dữ liệu khác nếu cần
        ]);
    }
}
