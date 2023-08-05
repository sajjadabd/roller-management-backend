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
        Schema::create('calibrs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('roller_id')->nullable();
            $table->float('diameter', 8, 2); // total digits / decimal digits
            $table->float('width', 8, 2); // total digits / decimal digits
            $table->unsignedBigInteger('tonag_karkard')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('calibrs');
    }
};
