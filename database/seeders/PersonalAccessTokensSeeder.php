<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Laravel\Passport\Passport;
use App\Models\User;

class PersonalAccessTokensSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Lấy danh sách các user cụ thể mà bạn muốn tạo token cho họ
        $users = User::whereIn('id_user', [1, 2, 3])->get();

        // Bỏ lưu trữ token vào CSDL
        Passport::tokensCan([
            'read' => 'Read Access',
            'write' => 'Write Access',
        ]);

        // Cấu hình Passport
//        Passport::routes();

        // Lặp qua mỗi user và tạo token cho họ
        foreach ($users as $user) {
            // Tạo token cho user
            $token = $user->createToken('Default Token', ['read', 'write']);
        }
    }
}
