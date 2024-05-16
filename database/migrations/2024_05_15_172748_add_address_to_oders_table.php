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
        Schema::table('oders', function (Blueprint $table) {
            //
            $table->string('name');
            $table->string('district')->comment("Tên quận nè");
            $table->string("city")->comment("thành phố nè");
            $table->string('phone');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('oders', function (Blueprint $table) {
            //
        });
    }
};
