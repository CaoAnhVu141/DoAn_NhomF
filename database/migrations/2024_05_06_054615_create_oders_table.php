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
        Schema::create('oders', function (Blueprint $table) {
            $table->increments('id_oder');
            $table->unsignedBigInteger('id')->comment('người bán');
            $table->unsignedBigInteger('id_user')->comment('người mua');
            $table->unsignedBigInteger('id_transport')->comment('hãng vận chuyển');
            $table->string('status')->default('Đã tiếp nhận')->comment('tình trạng đơn hàng nè');
            $table->unsignedBigInteger('amount')->comment('số lượng nè');
            $table->unsignedBigInteger('intomoney')->comment('thành tiền nè');
            $table->unsignedBigInteger('id_pay')->comment('hình thức thanh toán nè');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('oders');
    }
};
