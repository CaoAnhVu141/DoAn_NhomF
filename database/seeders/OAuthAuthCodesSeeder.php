<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OAuthAuthCodesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Tạo dữ liệu mẫu cho bảng oauth_auth_codes
        DB::table('oauth_auth_codes')->insert([
                'user_id' => 1,
            'client_id' => 1,
            'scopes' => 'read write', // Scopes cần được cung cấp dưới dạng một chuỗi
            'revoked' => false,
            'expires_at' => now()->addDays(7), // Ví dụ: Hết hạn sau 7 ngày
        ]);
    }
}
