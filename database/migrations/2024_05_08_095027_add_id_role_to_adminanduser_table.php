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
        Schema::table('adminanduser', function (Blueprint $table) {
            //
            $table->unsignedBigInteger('id_role')->comment('người quản lý nè');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('adminanduser', function (Blueprint $table) {
            //
        });
    }
};
