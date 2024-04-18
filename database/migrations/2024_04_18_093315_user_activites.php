<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void {
        Schema::create('user_activites', function (Blueprint $table) {
            $table->id()->unique();
            $table->integer('user_id');
            $table->ipAddress('ip_adress');
            $table->text('user_agent');
            $table->datetime('last_login');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists('user_activites');
    }
};


