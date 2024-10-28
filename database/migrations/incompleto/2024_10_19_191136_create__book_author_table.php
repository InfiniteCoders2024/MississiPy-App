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
        Schema::create('Book_author', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained('_product');
            $table->foreignId('author_id')->constrained('_author');
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_book_author');
    }
};
