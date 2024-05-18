<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'id' => 3,
                'name' => 'Giày thể thao',
                'discription' => 'Giày dành cho các hoạt động thể thao',
                'checkactive' => 1,
                'image' => 'images/giay_the_thao.jpg'
            ],
            [
                'id' => 3,
                'name' => 'Giày chạy bộ',
                'discription' => 'Giày dành cho việc chạy bộ',
                'checkactive' => 1,
                'image' => 'images/giay_chay_bo.jpg'
            ],
            [
                'id' => 3,
                'name' => 'Giày leo núi',
                'discription' => 'Giày dành cho leo núi',
                'checkactive' => 1,
                'image' => 'images/giay_leo_nui.jpg'
            ],
            [
                'id' => 3,
                'name' => 'Giày bóng đá',
                'discription' => 'Giày dành cho bóng đá',
                'checkactive' => 1,
                'image' => 'uploads/giay_bong_da.jpg'
            ],
            [
                'id' => 3,
                'name' => 'Giày đi làm',
                'discription' => 'Giày dành cho môi trường làm việc',
                'checkactive' => 1,
                'image' => 'uploads/giay_di_lam.jpg'
            ],
            [
                'id' => 3,
                'name' => 'Giày dạo phố',
                'discription' => 'Giày thoải mái cho việc đi dạo phố',
                'checkactive' => 1,
                'image' => 'uploads/giay_dao_pho.jpg'
            ],
            [
                'id' => 3,
                'name' => 'Giày nam',
                'discription' => 'Giày dành cho nam giới',
                'checkactive' => 1,
                'image' => 'uploads/giay_nam.jpg'
            ],
            [
                'id' => 3,
                'name' => 'Giày nữ',
                'discription' => 'Giày dành cho nữ giới',
                'checkactive' => 1,
                'image' => 'uploads/giay_nu.jpg'
            ],
            [
                'id' => 3,
                'name' => 'Giày trẻ em',
                'discription' => 'Giày dành cho trẻ em',
                'checkactive' => 1,
                'image' => 'uploads/giay_tre_em.jpg'
            ],
            [
                'id' => 3,
                'name' => 'Giày cổ điển',
                'discription' => 'Giày mang phong cách cổ điển',
                'checkactive' => 1,
                'image' => 'uploads/giay_co_dien.jpg'
            ],
            [
                'id' => 3,
                'name' => 'Giày hiện đại',
                'discription' => 'Giày mang phong cách hiện đại',
                'checkactive' => 1,
                'image' => 'uploads/giay_hien_dai.jpg'
            ],
            [
                'id' => 3,
                'name' => 'Giày da',
                'discription' => 'Giày làm từ chất liệu da',
                'checkactive' => 1,
                'image' => 'uploads/giay_da.jpg'
            ],
            [
                'id' => 3,
                'name' => 'Giày vải',
                'discription' => 'Giày làm từ chất liệu vải',
                'checkactive' => 1,
                'image' => 'uploads/giay_vai.jpg'
            ],
            [
                'id' => 3,
                'name' => 'Nike',
                'discription' => 'Giày thương hiệu Nike',
                'checkactive' => 1,
                'image' => 'uploads/nike.jpg'
            ],
            [
                'id' => 3,
                'name' => 'Adidas',
                'discription' => 'Giày thương hiệu Adidas',
                'checkactive' => 1,
                'image' => 'uploads/adidas.jpg'
            ],
            [
                'id' => 3,
                'name' => 'Giày chống nước',
                'discription' => 'Giày có tính năng chống nước',
                'checkactive' => 1,
                'image' => 'uploads/giay_chong_nuoc.jpg'
            ],
            // Thêm dữ liệu mẫu khác ở đây
        ];

        // Thêm dữ liệu vào bảng categories
        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
