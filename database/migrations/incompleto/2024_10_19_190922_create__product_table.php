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
        Schema::create('Product', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('quantity')->nullable(false);
            $table->decimal('price', 10, 2);
            $table->decimal('vat', 5, 2)->nullable(false)->unsigned();
            $table->integer('score')->unsigned()->default(1);
            $table->string('product_image');
            $table->boolean('active');
            $table->string('reason', 500);
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_product');
    }
};
