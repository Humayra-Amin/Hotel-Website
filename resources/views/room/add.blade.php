 
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

        <form class="form-group"><!--form-->
            <h1 class="text-left">Add Room</h1>

            <div id="form"><!--form-->
                <h3 class="text-white">Room Details</h3>

            <div id="input"><!--input-->
                <input type="text" id="input-group" placeholder="Room No">
                <input type="text" id="input-group" placeholder="Floor No">
                 <select  id="input-group" style="background: hsl(192, 56%, 49%);">
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
</div>
@endsection