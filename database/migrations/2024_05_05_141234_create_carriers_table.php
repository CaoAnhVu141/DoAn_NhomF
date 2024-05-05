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
        Schema::create('carriers', function (Blueprint $table) {
            $table->increments('id_carrier');
            $table->string('name');
            $table->string('email')->unique();
            $table->unsignedBigInteger('average time')->nullable()->comment('thời gian giao hàng trung bình');
            $table->unsignedBigInteger('average money')->nullable()->comment('chi phí trung bình');
            $table->boolean('checkactive')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carriers');
    }
};
