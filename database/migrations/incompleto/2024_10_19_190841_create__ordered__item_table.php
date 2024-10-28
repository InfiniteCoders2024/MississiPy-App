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
        Schema::create('_ordered__item', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id')->constrained('_order');
            $table->foreignId('product_id')->constrained('_product');
            $table->unsignedInteger('quantity')->nullable(false);
            $table->decimal('price', 10, 2)->unsigned()->nullable(false);
            $table->decimal('vat_amount', 10, 2)->unsigned()->nullable(false);
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_ordered__item');
    }
};
