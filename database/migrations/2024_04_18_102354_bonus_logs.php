<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
      public function up(): void {
        Schema::create('bonus_logs', function (Blueprint $table) {
            $table->id()->unique();
            $table->integer('request_id');
            $table->json('messsage');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists('bonus_logs');
    }
};
