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
        Schema::create('rollers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('roller_code')->nullable();
            //$table->unsignedBigInteger('stand_id')->nullable();
            //$table->unsignedBigInteger('standtype_id')->nullable();
            $table->enum('gender', ['male', 'female']);
            $table->enum('type', ['section', 'barmill']);
            $table->enum('position', ['roughing', 'intermadiate' , 'finishing']);
            $table->float('diameter', 8, 2); // total digits / decimal digits
            $table->float('kg_per_tonag', 8, 2); // total digits / decimal digits
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rollers');
    }
};
