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
        Schema::create('_recommendation', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained('_product');
            $table->foreignId('client_id')->constrained('_client');
            $table->string('reason', 500);
            $table->dateTime('start_date');
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_recommendation');
    }
};
