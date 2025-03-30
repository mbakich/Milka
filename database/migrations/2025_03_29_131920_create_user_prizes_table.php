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
        Schema::create('user_prizes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('userId');
            $table->foreignId('prizeId');
            $table->dateTime('redemptionDate');
            $table->string('shippingStatus');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_prizes');
    }
};
