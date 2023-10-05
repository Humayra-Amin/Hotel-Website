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


        Schema::create('room_book', function (Blueprint $table) {
            $table->id();
            $table->string('room_id')->nullable();
            $table->string('book')->nullable();
            $table->timestamps();
            $table->string('price');
            $table->string('customer_id');
            $table->string('name');
            $table->string('email');
            $table->string('roomcategory');
            $table->string('roomtype');
            $table->string('capacity');
            $table->string('checkin');
            $table->string('checkout');
        });


    }



    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        
        Schema::dropIfExists('room_book');

    }
    
};
