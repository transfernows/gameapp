<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('sessions', function ($table) {
            $table->string('id')->unique();
            $table->text('payload');
            $table->integer('last_activity');
            $table->integer('user_id')->unsigned(); //// ADD IT!
            $table->ipAddress('ip_address');
            $table->text('user_agent');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
