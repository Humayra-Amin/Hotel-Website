@extends('admin.layouts.app')


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
                        
                        <!-- Nav Item - User Information -->
                        <div class="nav-item dropdown no-arrow">
                                <a  class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>
                                    <img class="img-profile rounded-circle"
                                        src="{{asset('image/undraw_profile.svg')}}">
                                </a>
                                <!-- Dropdown - User Information -->
                                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                    aria-labelledby="userDropdown">

                                    @auth
                                        <a class="dropdown-item" href="#">
                                            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                            Profile
                                        </a>
                                        <a class="dropdown-item" href="#">
                                            <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                            Settings
                                        </a>
                                        
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                            Logout
                                        </a>
                                    @else
                                        <a class="dropdown-item" href="admin/login">
                                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                            Login
                                        </a>
                                        <a class="dropdown-item" href="admin/login">
                                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                            Login
                                        </a>
                                    @endauth

                                    
                                </div>
                            </div>   

                            

                    </nav>


                    <div class="dash-container">
<div class="row">
                            <h3 class="rtitle">BOOKINGS</h3>
        

                            <div class="room-cards">
                                <!-- Room Card 1 -->

                                <div class="col-md-3">
                                <div class="room-card">
                                    <img src="{{asset('image/9.jpg')}}" class="img-fluid imagefile" alt="">
                                    <h2 class=roomh2>SINGLE ROOM</h2>
                                    <p>Occupied</p>
                                    <p>Price: $150/night</p>
                                    <a href="#" class="btn btn-primary">View Details</a>
                                </div>
                            </div>


                                <!-- Room Card 2 -->
                                <div class="col-md-3">
                                <div class="room-card">
                                    <img src="{{asset('image/9.jpg')}}" class="img-fluid imagefile" alt="">                
                                    <h2 class=roomh2>DOUBLE ROOM</h2>
                                    <p>Available</p>
                                    <p>Price: $120/night</p>
                                    <a href="#" class="btn btn-primary">View Details</a>
                                </div>
                            </div>



                                <!-- Room Card 3 -->
                                <div class="col-md-3">
                                <div class="room-card">
                                    <img src="{{asset('image/9.jpg')}}" class="img-fluid imagefile" alt="">
                                    <h2 class=roomh2>COUPLE ROOM</h2>
                                    <p>Occupied</p>
                                    <p>Price: $150/night</p>
                                    <a href="#" class="btn btn-primary">View Details</a>
                                </div>
                            </div>
                        </div>
        
        
                                                    <!-- Room Card 3 -->
                                                    <div class="col-md-3">
                                                    <div class="room-card">
                                                        <img src="{{asset('image/9.jpg')}}" class="img-fluid imagefile" alt="">
                                                        <h2 class=roomh2>VIP ROOM</h2>
                                                        <p>Occupied</p>
                                                        <p>Price: $150/night</p>
                                                        <a href="#" class="btn btn-primary">View Details</a>
                                                    </div>
                                                </div>


                                            </div>

                            <div class="dash-row">
            
            
                                <div class="col-md-3">
                                    <div class="dash-card">
                                        <div class="dash-card-body">
                                            <h5 class="dash-card-title"><i class="fas fa-bed"></i> Available Rooms</h5>
                                            {{-- <p class="dash-card-text">Total reservations: 50</p>
                                            <p class="dash-card-text">Pending reservations: 10</p>
                                            <p class="dash-card-text">Occupied rooms: 40</p> --}}
                                            <p class="dash-card-text">Available rooms: 10</p>
                                            <a href="" class="btn btn-primary">View Details</a>
                                        </div>
                                    </div>
                                </div>
                                
                                
                             
                                
                                
                        
                                <div class="col-md-3">
                                    <div class="dash-card">
                                        <div class="dash-card-body">
                                            <h5 class="dash-card-title"><i class="fas fa-sign-out-alt"></i> Checkout</h5>
                                            {{-- <p class="dash-card-text">Available rooms: 30</p>
                                            <p class="dash-card-text">Occupied rooms: 20</p>
                                            <p class="dash-card-text">Rooms under cleaning: 5</p>
                                            <p class="dash-card-text">Maintenance in progress: 2</p> --}}
                                            <p class="dash-card-text">Today's checkouts: 10</p>
                                            <a href="" class="btn btn-primary">View Details</a>
                                        </div>
                                    </div>
                                </div>
                                
            
            
                                <div class="col-md-3">
                                    <div class="dash-card">
                                        <div class="dash-card-body">
                                            <h5 class="dash-card-title"><i class="fas fa-bed"></i> Bookings</h5>
                                            {{-- <p class="dash-card-text">Total reservations: 50</p>
                                            <p class="dash-card-text">Pending reservations: 10</p>
                                            <p class="dash-card-text">Occupied rooms: 40</p> --}}
                                            <p class="dash-card-text">Today's booking: 10</p>
                                            <a href="" class="btn btn-primary">View Details</a>
                                        </div>
                                    </div>
                                </div>



            
                                <div class="col-md-3">
                                    <div class="dash-card">
                                        <div class="dash-card-body">
                                            <h5 class="dash-card-title"><i class="fas fa-credit-card"></i> Payments</h5>
                                            {{-- <p class="dash-card-text">Check-ins today: 5</p>
                                            <p class="dash-card-text">Check-outs today: 3</p> --}}
                                            <p class="dash-card-text">Total revenue: $2000</p>
                                            {{-- <p class="dash-card-text">Outstanding payments: $500</p>
                                            <p class="dash-card-text">Average daily rate: $150</p> --}}
                                            <a href="" class="btn btn-primary">View Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
            
            
            
            
                            {{-- <div class="row">
                                <div class="col-md-12">
                                    <canvas id="bookingStatusChart"></canvas>
                                </div>
                            </div> --}}
             
                    
            
                    {{-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> --}}


                {{-- </div> --}}
            </div>

        
        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                    <div class="modal-footer">
                        <form action="{{url('/admin/logout')}}" method="DELETE">
                            @csrf
                      
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <button class="btn btn-primary">Logout</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
       
                    
    @endsection