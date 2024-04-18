<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
         public function up(): void {
        Schema::create('blog_content', function (Blueprint $table) {
            $table->id()->unique();
            $table->integer('category_id');
            $table->string('title');
            $table->longText('content');
            $table->longText('image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists('blog_content');
    }
};
