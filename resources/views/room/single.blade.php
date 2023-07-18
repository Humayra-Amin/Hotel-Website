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
            <div class="col-md-6">
            <div id="roomImageSlider" class="carousel slide mt-4 mb-2" data-bs-ride="carousel">
            <div class="carousel-inner">
            <!-- room images here -->
            <div class="carousel-item active">
                <img src="{{ asset('image/room-image1.jpg') }}" class="d-block w-100" alt="Room Image 1">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('image/room-image2.jpg') }}" class="d-block w-100" alt="Room Image 2">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('image/room-image3.jpg') }}" class="d-block w-100" alt="Room Image 2">
            </div>
            <!--  more images as needed -->

            <!-- image slider controls -->
            <button class="carousel-control-prev" type="button" data-bs-target="#roomImageSlider" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#roomImageSlider" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="room-details mt-4 mb-2">
        <h2 class="room-title">Deluxe Double Room</h2>
        <p>Room Type: Deluxe</p>
        <p>Category: Standard</p>
        <p>Room Size: 256 square feet</p>
        <p class="mb-2"> Room Facilities: </p>
           <p> <i class="fas fa-wifi"></i> Free Wi-Fi, <i class="fas fa-tv"></i> Flat-screen TV, <i class="fas fa-coffee"></i> Coffee Maker, <i class="fas fa-bed"></i> King-sized Bed,
             <i class="fas fa-swimming-pool"></i> Pool,  <i class="fas fa-soundcloud facility-item"></i>Sound Proofing,  <i class="fas fa-city facility-item"></i>City View,  <i class="fas fa-bath facility-item"></i>Private Bathroom </p>

        <p class="room-details">
             Featuring free toiletries, this double room includes a private bathroom with a bath, a shower and a hairdryer. This double room has air conditioning, flat-screen TV with cable channels, city views, as well as fruit for guests. The unit has 1 bed.
        </p>
        {{-- <p>View: City View</p>
        <p> Smoking: No Smoking</p>  --}}

        </div>

        </div>
        </div>

        <div class="row">
            <div class= "col-md-6">
                <p class="room-description mt-2 mb-3">
                    Elegantly furnished with solid wood furniture along with teak wood flooring, king sized bed with orthopedic bedding. All the rooms have ceiling height windows overlooking the front of the hotel and to the distance hills. Separate living room with a nice and cozy sitting arrangement make this ideal for business meeting or entertaining your guest without disturbing your partner.
                </p>
            </div>
            <div class="col-md-6">
                <p>View: City View</p>
                <p> Smoking: No Smoking</p>
            </div>

    </div>
    

       

            

        
        @endsection