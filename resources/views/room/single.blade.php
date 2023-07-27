        @extends('room.layouts.app')


        @section('app')

        <!-- Content Wrapper -->
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
                    
                
        <div class=container>
        <div class= "row">
            <div class="col-md-6 mt-4 mb-2">
            {{-- <div id="roomImageSlider"> --}}
            <div class="slider">
                <!-- room images here -->
              
                 
                @foreach ($room->image as $img)
                <div>
                    <img src='{{Storage::disk("public")->url($img)}}' class="d-block w-100" alt="Room Image 1">
                </div>
                @endforeach
            </div>
           

        </div>
    
    <div class="col-md-6 customize-fonts">
        <div class="room-details mt-4 mb-2">
        <h2 class="room-title customize-fonts-title">{{$room->roomtitle}}</h2>
        <p>Room Type: {{$room->roomtype}}</p>
        <p>Category: {{$room->category}} </p>
        <p>Room Size:{{$room->roomsize}}</p>
        <p class="mb-2"> Room Facilities:{{$room->facilities}} </p>
          
        <p>View:{{$room->roomview}} </p>
        <p class="room-details">{{$room->description}}
        </p>
        
        </div>

        </div>
        </div>

  
        
    

    @endsection