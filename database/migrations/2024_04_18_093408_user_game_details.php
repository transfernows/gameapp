<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
      public function up(): void {
        Schema::create('user_game_details', function (Blueprint $table) {
            $table->id()->unique();
            $table->integer('user_id');
            $table->boolean('is_casino');
            $table->boolean('is_sport');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists('user_game_details');
    }
};



