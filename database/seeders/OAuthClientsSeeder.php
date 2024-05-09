<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OAuthClientsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Tạo dữ liệu mẫu cho bảng oauth_clients
        DB::table('oauth_clients')->insert([
            [
                'user_id' => null,
                'name' => 'Client 1',
                'secret' => 'your-secret-1',
                'provider' => 'users',
                'redirect' => 'http://localhost/callback',
                'personal_access_client' => 0,
                'password_client' => 1,
                'revoked' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => null,
                'name' => 'Client 2',
                'secret' => 'your-secret-2',
                'provider' => 'users',
                'redirect' => 'http://localhost/callback',
                'personal_access_client' => 0,
                'password_client' => 1,
                'revoked' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Thêm các bản ghi khác nếu cần
        ]);
    }
}
