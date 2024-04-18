<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void {
        Schema::create('slider_images', function (Blueprint $table) {
            $table->id()->unique();
            $table->integer('category_id');
            $table->string('image');
            $table->string('thumb');
            $table->string('url');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists('slider_images');
    }
};
