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
        Schema::create('productinvoice', function (Blueprint $table) {
            $table->increments('id_intermediate');
            $table->unsignedBigInteger('id_product')->comment('id sản phẩm');
            $table->bigInteger('amount')->comment('số lượng nè');
            $table->bigInteger('price')->comment('giá');
            $table->string('image')->nullable()->comment('ảnh');
            $table->string('phone')->nullable()->comment('số điện thoại');
           $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productinvoice');
    }
};
