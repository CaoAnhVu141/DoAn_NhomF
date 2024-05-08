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
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id_product');
            $table->string('name');
            $table->unsignedBigInteger('price');
            $table->text('description');
            $table->unsignedBigInteger('discount')->comment('giảm giá');
            $table->string('image');
            $table->unsignedBigInteger('id_category')->comment('danh mục sản phẩm');
            $table->unsignedBigInteger('id_attribute')->comment('thuộc tính sản phẩm');
            $table->unsignedBigInteger('id_producttype')->comment('loại sản phẩm');
            $table->unsignedBigInteger('id_supplier')->comment('nhà cung cấp');
            $table->boolean('checkactive')->default(true)->comment('kiểm tra hoạt động nè');
            $table->unsignedBigInteger('amount')->comment('số lượng');
            $table->unsignedBigInteger('id')->comment('người bán hàng'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
