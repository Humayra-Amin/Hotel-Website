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
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
   
          
        
            $table->string('roomtitle');
            $table->string('roomno');
            $table->string('floorno');
            $table->string('price');
            $table->string('category');
            $table->string('roomtype');
            $table->string('roomsize');
            $table->string('roomview');
            $table->text('availablerooms');
            $table->text('maxoccupancy');
            $table->text('guestservice');
            $table->text('facilities');
            $table->text('description')->nullable();
            $table->text('image')->nullable();


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rooms');
    }
};
