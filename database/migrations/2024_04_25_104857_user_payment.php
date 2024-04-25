<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create('user_payment', function (Blueprint $table) {
            $table->id()->unique();
            $table->integer('payment_type');
            $table->integer('payment_id');
            $table->float('paymet_order');
            $table->integer('user_payment_status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        //
    }
};

