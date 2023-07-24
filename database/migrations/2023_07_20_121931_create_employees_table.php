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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();

            $table->string('fname');
            $table->string('lname');
            $table->string('eid');
            $table->string('Locality');
            $table->string('email');
            $table->string('phone');
            $table->string('date');
            $table->string('nid');
            $table->string('country');
            $table->string('sex');
            $table->string('salary');
            $table->string('joiningdate');
            $table->text('image')->nullable();

            $table->timestamps();
       });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
