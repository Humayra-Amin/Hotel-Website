<?php

use Hamcrest\Description;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Symfony\Component\Routing\Loader\ProtectedPhpFileLoader;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
   
          
           

<<<<<<< HEAD
            $table->string(roomtitle);
            $table->string(buildingno);
            $table->string(roomno);
            $table->string(floorno);
            $table->string(category);
            $table->string(roomtype);
            $table->string(roomsize);
            $table->string(roomview);
            $table->string(guestservice);
            $table->string(facilities);
            $table->text(description);
            $table->text(image);

=======

           $table->timestamps();
          
>>>>>>> 65faa37f8eed8b949fcc808ad4839684d0bf9014
            
      

           
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
