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
        Schema::create('roller_changes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('roller_id')->nullable();
            $table->enum('status', [
                'raw' , 
                //'waitingfortarash' , 
                'ready' ,
                'online', 
                'offline' , 
                //'onstand'
            ]);
            $table->boolean('convertion');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('roller_changes');
    }
};
