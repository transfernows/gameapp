<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
      public function up(): void {
        Schema::create('settings', function (Blueprint $table) {
            $table->id()->unique();
            $table->string('title');
            $table->string('favicon');
            $table->string('logo');
            $table->string('description');
            $table->json('social');
            $table->longText('extra_js');
            $table->longText('extra_css');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists('settings');
    }
};

