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
        Schema::create('favoriteproduct', function (Blueprint $table) {
            $table->increments('id_favorite')->comment('yêu thích nhoa');
            $table->unsignedBigInteger('id_product')->comment('sản phẩm');
            $table->unsignedBigInteger('id_user')->comment('người mua');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('favoriteproduct');
    }
};
