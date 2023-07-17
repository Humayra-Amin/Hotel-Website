 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.0/css/bootstrap.min.css">


     <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
@extends('room.layouts.app')
@section('app')
    <div class="container"><!--container-->

        <form class="form-group"><!--form-->
            <h1 class="text-center">Add Room</h1>

            <div id="form"><!--form-->
                <h3 class="text-white">Room Details</h3>

            <div id="input"><!--input-->
                <input type="text" id="input-group" placeholder="Room No">
                <input type="text" id="input-group" placeholder="Floor No">
                 <select  id="input-group" style="background: black;">
                    <option value="">Room Type</option>
                    <option value="">Single</option>
                    <option value="">Double</option>
                    <option value="">Triple</option>
                    <option value="">Deluxe</option>
                    <option value="">Suit</option>
               <input type="number" id="input-group" placeholder="Rent">
                </div><!--input-->

                <div id="input4"><!--input4-->
                    
                    <input type="text" id="input-group1" placeholder="Description">
                    <input type="text" id="input-group1" placeholder="Facility">
                     

                 <div id="input5"><!--input4-->
                    
                     <input class="form-control" type="file"  multiple />
                
                    
                </div><!--input5-->

                
                    
                     <button class="btn added" id="ID">Added</button>
                
                    
                </div><!--input5-->

            
                
                
                
            </div><!--form-->

        </form><!--form-->

    </div><!--container-->
@endsection