 
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
                     
                  @endauth

                  
              </div>
            </div>   
       </nav>



            <div class="col-md-12">


                <div class="checkout-card">


                    <div class="checkout-card-body">


                        <h2 class="checkout-h2">Hotel Checkout</h2>



                        <form method="POST" action="{{ url('/admin/booking/checkout') }}">
                        @csrf

                            <div class="form-group">


                                <label for="contact" class="checkout-label">Email or Phone Number</label>


                                <div class="input-group">


                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                    </div>


                                    <input type="text" name="emailorcontact" class="form-control" id="emailorcontact" placeholder="Email or Phone Number">
                                
                                
                                </div>


                            </div>



                            <a href="/admin/booking/singleview"><button type="submit" class="btn btn-primary-file ml-5">Search</button></a>
                        
                        
                        </form>
                    
                    
                    </div>
                
                
                </div>
            
            
            </div>
    
    
        </div>

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