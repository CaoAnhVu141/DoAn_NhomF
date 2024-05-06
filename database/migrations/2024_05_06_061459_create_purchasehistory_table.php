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
        Schema::create('purchasehistory', function (Blueprint $table) {
            $table->increments('id_history');
            $table->unsignedBigInteger('id_user');
            $table->unsignedBigInteger('id_product');
            $table->unsignedBigInteger('amount')->comment('số lượng nè');
            $table->unsignedBigInteger('total')->comment('tổng tiền nè');
            $table->unsignedBigInteger('id_transport')->comment('vận chuyển nè');
            $table->unsignedBigInteger('id_pay')->comment('phương thức thanh toán');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('purchasehistory');
    }
};
