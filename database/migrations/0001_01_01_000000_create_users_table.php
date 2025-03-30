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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('fullName');
            $table->string('email')->unique();
            $table->string('password');
//            $table->string('passwordHash');
            $table->string('phoneNumber')->nullable();
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->string('idNumber')->nullable();
//            $table->foreignId('country')->nullable();
            $table->string('country')->nullable();
            $table->integer('currentPoints')->default(0); // koliko ima poena
            $table->integer('redeemedPoints')->default(0); // koliko ima skupljenih poena
            $table->timestamp('email_verified_at')->nullable();
//            $table->rememberToken();
            $table->string('fcm_token')->nullable();
            $table->string('pushToken')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
