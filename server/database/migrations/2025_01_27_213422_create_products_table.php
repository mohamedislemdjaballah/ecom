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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('brand_id')->constrained()->onDelete('cascade');
            $table->string('name', 255);
            $table->string('slug', 255);
            $table->decimal('price', 10, 2);
            $table->jsonb('discount')->nullable();
            $table->string('description', 255)->nullable();
            $table->string('thumbnail', 255)->nullable();
            $table->jsonb('images')->nullable();
            $table->jsonb('videos')->nullable();
            $table->jsonb('translations')->nullable();
            $table->integer('stock');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
