<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    public function up(): void {
        Schema::create('game_providers', function (Blueprint $table) {
            $table->id()->unique();
            $table->string('name');
            $table->string('slug');
            $table->string('logo_black');
            $table->string('logo_white');
            $table->boolean('status');
            $table->boolean('license');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists('game_providers');
    }
};
