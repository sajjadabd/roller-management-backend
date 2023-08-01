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
        Schema::create('calibr_tarashes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('calibr_id')->nullable();
            $table->float('tarash_value', 8, 2); // total digits / decimal digits
            $table->float('previous_diameter', 8, 2); // total digits / decimal digits
            $table->float('new_diameter', 8, 2); // total digits / decimal digits
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('calibr_tarashes');
    }
};
