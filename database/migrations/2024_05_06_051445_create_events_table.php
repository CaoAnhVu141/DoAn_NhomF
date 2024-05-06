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
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id_event');
            $table->string('name');
            $table->text('content');
            $table->string('image');
            $table->string('linkevent');
            $table->boolean('checkactive')->default(true)->comment('kiểm tra hoạt động á');
            $table->dateTime('start_date')->comment('bắt đầu');
            $table->dateTime('end_date')->comment('kết thúc');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
