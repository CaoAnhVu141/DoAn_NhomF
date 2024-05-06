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
        Schema::create('invoices', function (Blueprint $table) {
            $table->increments('id_invoice');
            $table->string('codeinvoice')->nullable();
            $table->unsignedBigInteger('id_oder')->comment('mua hàng nè');
            $table->unsignedBigInteger('id_user')->comment('người dùng nè');
            $table->unsignedBigInteger('id_transport')->comment('vận chuyển nè');
            $table->unsignedBigInteger('id_product')->comment('sảm phẩm nè');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoices');
    }
};
