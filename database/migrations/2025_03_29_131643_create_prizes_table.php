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
           // $table->string('imageUrl');
            //    $table->foreignId('country_id');
            $table->integer('pointsCost');
            $table->integer('totalStock'); //broj slobodnih poklona
            $table->integer('remainingStock');
            $table->integer('maxPerUser');
            $table->string('country')->nullable();
            //   $table->boolean('status'); //true - ima jos, false - ne daje se vise
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prizes');
    }
};
