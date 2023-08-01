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
        Schema::create('calibr_changes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('roller_id')->nullable();
            $table->smallInteger('from_calibr');
            $table->smallInteger('to_calibr');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('calibr_changes');
    }
};
