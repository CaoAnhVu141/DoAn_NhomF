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
        Schema::create('advertisement', function (Blueprint $table) {
            $table->increments('id_adver')->comment('quảng cáo nè');
            $table->string('title');
            $table->string('image')->nullable();
            $table->text('information')->comment('thông tin chương trình');
            $table->unsignedBigInteger('id')->comment('người tạo ra bài viết');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('advertisement');
    }
};
