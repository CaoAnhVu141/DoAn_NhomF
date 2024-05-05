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
        Schema::create('categorypost', function (Blueprint $table) {
            $table->increments('id_category');
            $table->string('name');
            $table->text('discription');
            $table->unsignedBigInteger('checkstatus')->comment('check trạng thái danh mục bài viết nha');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categorypost');
    }
};
