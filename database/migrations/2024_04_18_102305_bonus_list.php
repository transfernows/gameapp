<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    public function up(): void {
        Schema::create('bonus_list', function (Blueprint $table) {
            $table->id()->unique();
            $table->integer('category_id');
            $table->string('name');
            $table->longText('content');
            $table->text('banner');
            $table->text('thumbnail');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists('bonus_list');
    }
};

