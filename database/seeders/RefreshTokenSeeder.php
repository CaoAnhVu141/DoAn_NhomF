<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RefreshTokenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Tạo dữ liệu mẫu cho bảng oauth_refresh_tokens
        DB::table('oauth_refresh_tokens')->insert([
            [
                'id' => 1,
                'access_token_id' => 1,
                'revoked' => false,
                'expires_at' => now()->addDays(30), // Thêm ngày hết hạn của token ở đây
            ],
            // Thêm dòng dữ liệu khác nếu cần
        ]);
    }
}
