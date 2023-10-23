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

        Schema::create('bookings', function (Blueprint $table) {
            $table->id();

            $table->string('cname');
            $table->string('email');
            $table->string('tel');
            $table->string('nid');
            $table->string('room_id');
            $table->string('guestnumber');
            $table->date('checkInDate');
            $table->date('checkOutDate');
            $table->decimal('price');
            $table->decimal('discount')->nullable();
            $table->text('specialrequest')->nullable();

            $table->timestamps();
        });

    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

        Schema::dropIfExists('booking');

    }

    
};
