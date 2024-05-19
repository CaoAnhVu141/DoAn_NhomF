<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Xóa dữ liệu cũ trong bảng (nếu cần)
        DB::table('products')->truncate();

        // Tạo dữ liệu mới
        $now = Carbon::now();
        $products = [
            [
                'name' => 'Nike air force 1',
                'price' => 1000000,
                'description' => 'Description for Product 1',
                'discount' => 10,
                'image' => 'images/1715907312.jpeg', 
                'list_images' => "1715907312.jpeg",
                'id_category' => 1,    
                'id_producttype' => 1,           
                'id_supplier' => 1,
                'checkactive' => 1,
                'amount' => 100,
                'created_at' => $now,
                'updated_at' => $now,
                'id' => 3,
            ],
            [
                'name' => 'Nike air force 4',
                'price' => 1000000,
                'description' => 'Description for Product 1',
                'discount' => 10,
                'image' => 'images/1715907312.jpeg', 
                'list_images' => "[\"images\\\/1715907312_image1.jpeg\",\"images\\\/1715907312_image2.jpeg\",\"images\\\/1715907312_image3.jpeg\",\"images\\\/1715907312_image4.jpeg\",\"images\\\/1715907312_image5.jpeg\",\"images\\\/1715907312_image6.jpeg\"]",
                'id_category' => 1,    
                'id_producttype' => 1,           
                'id_supplier' => 1,
                'checkactive' => 1,
                'amount' => 100,
                'created_at' => $now,
                'updated_at' => $now,
                'id' => 3,
            ],
            [
                'name' => 'Nike air force 3',
                'price' => 1000000,
                'description' => 'Description for Product 1',
                'discount' => 10,
                'image' => 'images/1715907312.jpeg', 
                'list_images' => "[\"images\\\/1715907312_image1.jpeg\",\"images\\\/1715907312_image2.jpeg\",\"images\\\/1715907312_image3.jpeg\",\"images\\\/1715907312_image4.jpeg\",\"images\\\/1715907312_image5.jpeg\",\"images\\\/1715907312_image6.jpeg\"]",
                'id_category' => 1,    
                'id_producttype' => 1,           
                'id_supplier' => 1,
                'checkactive' => 1,
                'amount' => 100,
                'created_at' => $now,
                'updated_at' => $now,
                'id' => 3,
            ],
            [
                'name' => 'Nike air force 4',
                'price' => 1000000,
                'description' => 'Description for Product 1',
                'discount' => 10,
                'image' => 'images/1715907312.jpeg', 
                'list_images' => "[\"images\\\/1715907312_image1.jpeg\",\"images\\\/1715907312_image2.jpeg\",\"images\\\/1715907312_image3.jpeg\",\"images\\\/1715907312_image4.jpeg\",\"images\\\/1715907312_image5.jpeg\",\"images\\\/1715907312_image6.jpeg\"]",
                'id_category' => 1,    
                'id_producttype' => 1,           
                'id_supplier' => 1,
                'checkactive' => 1,
                'amount' => 100,
                'created_at' => $now,
                'updated_at' => $now,
                'id' => 3,
            ],
            [
                'name' => 'Nike air force 5',
                'price' => 1000000,
                'description' => 'Description for Product 1',
                'discount' => 10,
                'image' => 'images/1715907312.jpeg', 
                'list_images' => "[\"images\\\/1715907312_image1.jpeg\",\"images\\\/1715907312_image2.jpeg\",\"images\\\/1715907312_image3.jpeg\",\"images\\\/1715907312_image4.jpeg\",\"images\\\/1715907312_image5.jpeg\",\"images\\\/1715907312_image6.jpeg\"]",
                'id_category' => 1,    
                'id_producttype' => 1,           
                'id_supplier' => 1,
                'checkactive' => 1,
                'amount' => 100,
                'created_at' => $now,
                'updated_at' => $now,
                'id' => 3,
            ], [
                'name' => 'Nike air force 6',
                'price' => 1000000,
                'description' => 'Description for Product 1',
                'discount' => 10,
                'image' => 'images/1715907312.jpeg', 
                'list_images' => "[\"images\\\/1715907312_image1.jpeg\",\"images\\\/1715907312_image2.jpeg\",\"images\\\/1715907312_image3.jpeg\",\"images\\\/1715907312_image4.jpeg\",\"images\\\/1715907312_image5.jpeg\",\"images\\\/1715907312_image6.jpeg\"]",
                'id_category' => 1,    
                'id_producttype' => 1,           
                'id_supplier' => 1,
                'checkactive' => 1,
                'amount' => 100,
                'created_at' => $now,
                'updated_at' => $now,
                'id' => 3,
            ], [
                'name' => 'Nike air force 7',
                'price' => 1000000,
                'description' => 'Description for Product 1',
                'discount' => 10,
                'image' => 'images/1715907312.jpeg', 
                'list_images' => "[\"images\\\/1715907312_image1.jpeg\",\"images\\\/1715907312_image2.jpeg\",\"images\\\/1715907312_image3.jpeg\",\"images\\\/1715907312_image4.jpeg\",\"images\\\/1715907312_image5.jpeg\",\"images\\\/1715907312_image6.jpeg\"]",
                'id_category' => 1,    
                'id_producttype' => 1,           
                'id_supplier' => 1,
                'checkactive' => 1,
                'amount' => 100,
                'created_at' => $now,
                'updated_at' => $now,
                'id' => 3,
            ], [
                'name' => 'Nike air force 8',
                'price' => 1000000,
                'description' => 'Description for Product 1',
                'discount' => 10,
                'image' => 'images/1715907312.jpeg', 
                'list_images' => "[\"images\\\/1715907312_image1.jpeg\",\"images\\\/1715907312_image2.jpeg\",\"images\\\/1715907312_image3.jpeg\",\"images\\\/1715907312_image4.jpeg\",\"images\\\/1715907312_image5.jpeg\",\"images\\\/1715907312_image6.jpeg\"]",
                'id_category' => 1,    
                'id_producttype' => 1,           
                'id_supplier' => 1,
                'checkactive' => 1,
                'amount' => 100,
                'created_at' => $now,
                'updated_at' => $now,
                'id' => 3,
            ], [
                'name' => 'Nike air force 9',
                'price' => 1000000,
                'description' => 'Description for Product 1',
                'discount' => 10,
                'image' => 'images/1715907312.jpeg', 
                'list_images' => "[\"images\\\/1715907312_image1.jpeg\",\"images\\\/1715907312_image2.jpeg\",\"images\\\/1715907312_image3.jpeg\",\"images\\\/1715907312_image4.jpeg\",\"images\\\/1715907312_image5.jpeg\",\"images\\\/1715907312_image6.jpeg\"]",
                'id_category' => 1,    
                'id_producttype' => 1,           
                'id_supplier' => 1,
                'checkactive' => 1,
                'amount' => 100,
                'created_at' => $now,
                'updated_at' => $now,
                'id' => 3,
            ],
            [
                'name' => 'Nike air force 10',
                'price' => 1000000,
                'description' => 'Description for Product 1',
                'discount' => 10,
                'image' => 'images/1715907312.jpeg', 
                'list_images' => "[\"images\\\/1715907312_image1.jpeg\",\"images\\\/1715907312_image2.jpeg\",\"images\\\/1715907312_image3.jpeg\",\"images\\\/1715907312_image4.jpeg\",\"images\\\/1715907312_image5.jpeg\",\"images\\\/1715907312_image6.jpeg\"]",
                'id_category' => 1,    
                'id_producttype' => 1,           
                'id_supplier' => 1,
                'checkactive' => 1,
                'amount' => 100,
                'created_at' => $now,
                'updated_at' => $now,
                'id' => 3,
            ],
            // Thêm dòng dữ liệu khác nếu cần
        ];

        // Lưu dữ liệu vào bảng products
        DB::table('products')->insert($products);
    }
}
