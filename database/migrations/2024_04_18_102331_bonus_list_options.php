<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
       public function up(): void {
        Schema::create('bonus_list_options', function (Blueprint $table) {
            $table->id()->unique();
            $table->integer('bonus_id');
            $table->boolean('is_sport');
            $table->boolean('is_casino');
             $table->boolean('percent');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists('bonus_list_options');
    }
};


