<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OAuthAccessTokensSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Tạo dữ liệu mẫu cho bảng oauth_access_tokens
        DB::table('oauth_access_tokens')->insert([
            'user_id' => 1,
            'client_id' => 1,
            'name' => 'Access Token 1',
            'scopes' => 'read write', // Scopes cần được cung cấp dưới dạng một chuỗi
            'revoked' => false,
            'created_at' => now(),
            'updated_at' => now(),
            'expires_at' => now()->addDays(7), // Ví dụ: Hết hạn sau 7 ngày
        ]);
    }
}
