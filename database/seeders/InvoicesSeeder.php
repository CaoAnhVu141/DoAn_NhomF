<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InvoicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Tạo dữ liệu mẫu cho bảng invoices
        DB::table('invoices')->insert([
            [
                'codeinvoice' => 'INV123',
                'id_user' => 1,
                'id_transport' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'codeinvoice' => 'INV456',
                'id_user' => 2,
                'id_transport' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'codeinvoice' => 'INV789',
                'id_user' => 3,
                'id_transport' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
