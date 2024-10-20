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
        Schema::create('_client', function (Blueprint $table) {
            $table->id();
            $table->string('firstname', 250)->nullable(false);
            $table->string('surname', 250)->nullable(false);
            $table->string('email', 50)->unique()->nullable(false);
            $table->string('password', 255)->nullable(false);
            $table->string('address', 100)->nullable(false);
            $table->string('zip_code', 10)->nullable(false);
            $table->string('city', 30)->nullable(false);
            $table->string('country', 30)->default('Portugal');
            $table->string('phone_number', 15);
            $table->timestamp('last_login')->nullable(false)->default(now());
            $table->date('birthdate')->nullable(false);
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_client');
    }
};
