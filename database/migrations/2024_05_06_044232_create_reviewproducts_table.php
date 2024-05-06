<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('reviewproducts', function (Blueprint $table) {
            $table->increments('id_review');
            $table->unsignedBigInteger('id_user')->comment('người dùng');
            $table->unsignedBigInteger('id_product')->comment('sản phẩm');
            $table->text('content')->comment('nội dung');
            $table->unsignedBigInteger('point')->comment('xếp điểm');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviewproducts');
    }
};
