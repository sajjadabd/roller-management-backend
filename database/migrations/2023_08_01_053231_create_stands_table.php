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
        Schema::create('stands', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('stand_code')->nullable();
            $table->unsignedBigInteger('top_roller')->nullable();
            $table->unsignedBigInteger('bottom_roller')->nullable();
            $table->float('center_distance', 8, 2); // total digits / decimal digits
            $table->float('air_gap', 8, 2); // total digits / decimal digits
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stands');
    }
};
