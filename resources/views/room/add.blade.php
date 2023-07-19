 
@extends('room.layouts.app')
@section('app')
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

            <!-- Sidebar Toggle (Topbar) -->
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                <i class="fa fa-bars"></i>
            </button>

            <!-- Topbar Search -->
            <form

                class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                        aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button">
                            <i class="fas fa-search fa-sm"></i>
                        </button>
                    </div>
                </div>
            </form>

            <!-- Topbar Navbar -->
                 </nav>



        <div class="container"><!--container-->
    
        
           
                    <h1 class="text-left">Add Room</h1>
                <form class="form-group"><!--form--> 
                    <div class="col-md-12 d-flex align-items-left justify-content-between">
                    <div id="form"><!--form-->
                    <h2 class= "text-black">Room Details </h2>
                    <div class="a">
                   <div class="verticalLineTop"></div>
                   </div>
        
                    <div id="input"><!--input-->
                        <input type="text" id="input-group" placeholder="Room No">
                        <input type="text" id="input-group" placeholder="Floor No">
                    </div><!--input-->
                    <div id="input2"><!--input2-->  
                        <select id="input-group" name="Room">
                            <option value="">Room Type</option>
                            <option>Single</option>
                            <option>Double</option>
                            <option>Triple</option>
                            <option>Executive</option>
                            <option>Suit</option>
                            
                            </select>
                       <input type="number" id="input-group" placeholder="Rent">
                       <div id="input2"><!--input2-->  
                        
        
                        <div id="input4"><!--input4-->
                            
                            <input type="text" id="input-group1" placeholder="Description">
                            <input type="text" id="input-group1" placeholder="Facility">
                             
                        <div id="input4"><!--input4-->
        
                         <div id="input5"><!--input5-->
                            
                            <input type="file" name="name" multiple=>
                
                            
                        
                        
                            <div id="input5"><!--input5-->
        
                        
                            
                             <button class="btn added" id="ID">Added</button>
                        
                        
                            
                        </div><!--input5-->
        
                    
                        
                        
                        
                    </div><!--form-->
        
                </form><!--form-->
        
            </div><!--container-->
        </div>
 @endsection