<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
     public function up(): void {
        Schema::create('user_logs', function (Blueprint $table) {
            $table->id()->unique();
            $table->integer('user_id');
            $table->integer('type_id');
            $table->json('data');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists('user_logs');
    }
};

