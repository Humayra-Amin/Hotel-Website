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
            {{-- <div id="roomImageSlider"> --}}
            <div class="slider">
            <!-- room images here -->
            <div>
                <img src="{{ asset('image/room-image1.jpg') }}" class="d-block w-100" alt="Room Image 1">
            </div>
            <div>
                <img src="{{ asset('image/room-image2.jpg') }}" class="d-block w-100" alt="Room Image 2">
            </div>
            <div>
                <img src="{{ asset('image/room-image3.jpg') }}" class="d-block w-100" alt="Room Image 2">
            </div>
            </div>

        </div>
    
    <div class="col-md-6 customize-fonts">
        <div class="room-details mt-4 mb-2">
        <h2 class="room-title customize-fonts">Deluxe Double Room</h2>
        <p>Room Type: Deluxe</p>
        <p>Category: Standard</p>
        <p>Room Size: 256 square feet</p>
        <p class="mb-2"> Room Facilities: </p>
           <p> <span class=".d-block mr-2"><i class="fas fa-wifi"></i> Free Wi-Fi</span>  <span class=".d-block mr-2"> <i class="fas fa-tv"></i> Flat-screen TV </span>
            <span class=".d-block mr-2"> <i class="fas fa-coffee"></i> Coffee Maker</span> <span class=".d-block mr-2"><i class="fas fa-bed"></i> King-sized Bed</span>
            <span class=".d-block mr-2"><i class="fas fa-swimming-pool"></i>Pool</span> <span class=".d-block mr-2"> <i class="fa-solid fa-volume-xmark"></i></i>Sound Proofing</span>
             <span class=".d-block mr-2"><i class="fas fa-city facility-item"></i>City View</span>  <span class=".d-block mr-2"><i class="fas fa-bath facility-item"></i>Private Bathroom </span></p>

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
                <p class="room-description mt-3 mb-3">
                    Elegantly furnished with solid wood furniture along with teak wood flooring, king sized bed with orthopedic bedding. All the rooms have ceiling height windows overlooking the front of the hotel and to the distance hills. Separate living room with a nice and cozy sitting arrangement make this ideal for business meeting or entertaining your guest without disturbing your partner.
                </p>
            </div>
            <div class="col-md-6">
                <p>View: City View</p>
                <p> Smoking: No Smoking</p>
            </div>

    </div>
    

    @endsection