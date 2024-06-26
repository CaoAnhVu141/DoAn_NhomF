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
        Schema::table('categorypost', function (Blueprint $table) {
            //
            $table->boolean('checkstatus')->default(true)->comment('check trạng thái nè');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('categorypost', function (Blueprint $table) {
            //
        });
    }
};
