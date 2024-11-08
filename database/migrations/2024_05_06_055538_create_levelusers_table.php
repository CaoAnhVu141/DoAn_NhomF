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
        Schema::create('levelusers', function (Blueprint $table) {
            $table->increments('id_leveluser');
            $table->string('namelevel');
            $table->unsignedBigInteger('id_user');
            $table->unsignedBigInteger('totalmoney')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('levelusers');
    }
};
