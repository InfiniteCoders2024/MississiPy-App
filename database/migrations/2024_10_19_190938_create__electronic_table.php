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
        Schema::create('_electronic', function (Blueprint $table) {
            // $table->id();
            $table->foreignId('product_id')->constrained('_product');
            $table->bigInteger('serial_number');
            $table->string('brand', 20);
            $table->string('model', 20);
            $table->text('spec_tec');
            $table->string('type', 10);
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_electronic');
    }
};
