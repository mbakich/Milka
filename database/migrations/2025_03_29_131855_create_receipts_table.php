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
        Schema::create('receipts', function (Blueprint $table) { //racuni
            $table->id();
            $table->foreignId('userId');
            $table->text('rawOcrData');
            $table->string('status');
            $table->dateTime('submissionDate');
            $table->dateTime('processingDate');
            $table->integer('pointsAwarded');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('receipts');
    }
};
