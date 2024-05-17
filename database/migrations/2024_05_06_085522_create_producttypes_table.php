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
        Schema::create('producttypes', function (Blueprint $table) {
            $table->increments('id_producttype');
            $table->string('name');
            $table->text('description')->default('');
            $table->boolean('checkactive')->default(true)->comment('check hoạt động nè');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('producttypes');
    }
};
