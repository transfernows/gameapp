<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
      /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create('user_balance', function (Blueprint $table) {
            $table->id()->unique();
            $table->integer('user_id');
            $table->double('bonus_balance');
            $table->double('balance');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists('user_balance');
    }
};


