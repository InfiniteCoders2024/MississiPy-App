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
        Schema::create('Order', function (Blueprint $table) {
            $table->id();
            $table->dateTime('date_time')->default(now());
            $table->enum('delivery_method', ['regular', 'urgent'])->default('regular')->length(10);
            $table->enum('status', ['open', 'processing', 'pending','closed', 'cancelled'])->default('open')->length(10);
            $table->bigInteger('payment_card_number')->nullable();
            $table->string('payment_card_name', 20)->nullable();
            $table->date('payment_card_expiration')->nullable();
            $table->foreignId('client_id')->constrained('_client');
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_order');
    }
};
