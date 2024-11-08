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
        Schema::create('transports', function (Blueprint $table) {
            $table->increments('id_transport');
            $table->string('name');
            $table->unsignedBigInteger('id_carrier');
            $table->unsignedBigInteger('transportfee')->comment('phí vẩn chuyển');
            $table->unsignedBigInteger('deliverytime')->comment('thời gian giao hàng');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transports');
    }
};
