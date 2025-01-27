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
        Schema::create('checkouts', function (Blueprint $table) {
            $table->id();
            $table->string('serial_number', 255)->unique(); 
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->jsonb('products');
            $table->string('payment_method', 10);
            $table->float('amount')->defualt(0);
            $table->jsonb('discounts')->nullable();
            $table->string('currency', 3);
            $table->string('address', 255);
            $table->string('description', 255)->nullable();
            $table->string('status', 10)->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('checkouts');
    }
};
