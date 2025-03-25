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
        Schema::create('prizes', function (Blueprint $table) { //poklonii
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->string('imageUrl');
        //    $table->foreignId('country_id');
            $table->integer('pointsCost');
            $table->integer('totalStock'); //broj slobodnih poklona
            $table->integer('remainingStock');
            $table->integer('maxPerUser');
         //   $table->boolean('status'); //true - ima jos, false - ne daje se vise
            $table->timestamps();
        });

        Schema::create('categories', function (Blueprint $table) { //kategorije
            $table->id();
            $table->string('naziv');
            $table->integer('points');
            $table->timestamps();
        });

        Schema::create('products', function (Blueprint $table) { //poruddžbine
            $table->id();
            $table->string('skuCode');
            $table->string('skuName');
            $table->string('category');
            $table->integer('pointsValue');
            $table->string('country');
            $table->timestamps();
        });

        Schema::create('receipts', function (Blueprint $table) { //racuni
            $table->id();
            $table->foreignId('userId');
            $table->string('rawOcrData');
            $table->string('status');
            $table->dateTime('submissionDate');
            $table->dateTime('processingDate');
            $table->integer('pointsAwarded');
        //    $table->timestamps();
        });

        Schema::create('receipt_products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('receiptId');
            $table->foreignId('productId');
            $table->integer('quantity');
            $table->integer('pointsAwarded');
            $table->timestamps();
        });

        Schema::create('user_prizes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('userId');
            $table->foreignId('prizedId');
            $table->dateTime('redemptionDate');
            $table->string('shippingStatus');
            $table->timestamps();
        });

//        Schema::create('receipt_detail', function (Blueprint $table) { //racuni
//            $table->id();
//            $table->foreignId('user_id');
//            $table->foreignId('receipt_id');
//            $table->string('racun');
//            $table->string('item');
//            $table->integer('points');
//            $table->timestamps();
//        });

        Schema::create('countries', function (Blueprint $table) { //zemljee
            $table->id();
            $table->string('name');
            $table->string('code');
            $table->timestamps();
        });

        // da li da se napravi notifications? blla bi prevelika
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prizes');
        Schema::dropIfExists('products');
        Schema::dropIfExists('receipts');
        Schema::dropIfExists('receipt_products');
        Schema::dropIfExists('user_prizes');
        Schema::dropIfExists('countries');
    }
};
