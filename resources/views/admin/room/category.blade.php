 
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
             <li class="nav-item dropdown no-arrow">
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
          </li>   
        </nav>

      
         <div class="full-content">
           <div class="row">
             <div class="col-md-3">
               <div class="search-place">
                 <input type="text" class="form-control" placeholder="Search for Booking-List">
                 <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-search icon-box" viewBox="0 0 16 16">
                   <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                 </svg>  
               </div>
             </div>
           </div>
           <h1 class="mt-4 mb-4 mop section-head">ROOM CATEGORIES</h1>
           <div class="row">
            <div class="col-md-4">
                <div class="card box-card">
                  <div class="field-body">
                    <img src="{{asset('image/hotel1.jpg')}}" class="img-fluid image-file" alt="">
                    <div class="centered">LUXURY  SUITS</div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card box-card">
                  <div class="field-body">
                    <img src="{{asset('image/hotel1.jpg')}}" class="img-fluid image-file" alt="">
                    <div class="centered">DULUXE SUITS</div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card box-card">
                  <div class="field-body">
                    <img src="{{asset('image/hotel1.jpg')}}" class="img-fluid image-file" alt="">
                    <div class="centered">DOUBLE SUITS</div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card box-card">
                  <div class="field-body">
                    <img src="{{asset('image/hotel1.jpg')}}" class="img-fluid image-file" alt="">
                    <div class="centered">DULUXE DOUBLE  SUITS</div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card box-card">
                  <div class="field-body">
                    <img src="{{asset('image/hotel1.jpg')}}" class="img-fluid image-file" alt="">
                    <div class="centered">EXECUTIVE TWIN SUITS</div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card box-card">
                  <div class="field-body">
                    <img src="{{asset('image/hotel1.jpg')}}" class="img-fluid image-file" alt="">
                    <div class="centered">SINGLE SUITS</div>
                  </div>
                </div>
              </div>
            



               



             {{-- <div class="col-sm-4">
               <div class="card booking-card">
                 <div class="price-tag">$250</div>
                 <div class="card-body">
                   <h5 class="card-title mt-4">Guest-name: Abdur Rahman</h5>
                   <ul class="details">
                     <li> Room Type: Deluxe</li>
                     <li> Capacity: 4 guests</li>
                     <li> Check-In: 2023-09-01</li>
                     <li> Check-Out: 2023-09-07</li>
                     <button class="button"> View More</button>
                   </ul>
                 </div>
               </div>
             </div>
             <div class="col-sm-4">
               <div class="card booking-card">
                 <div class="price-tag">$250</div>
                 <div class="card-body">
                   <h5 class="card-title mt-4">Guest-name: Abdur Rahman</h5>
                   <ul class="details">
                     <li> Room Type: Deluxe</li>
                     <li> Capacity: 4 guests</li>
                     <li> Check-In: 2023-09-01</li>
                     <li> Check-Out: 2023-09-07</li>
                     <button class="button"> View More</button>
                   </ul>
                 </div>
               </div>
             </div>
             <div class="col-sm-4">
               <div class="card booking-card">
                 <div class="price-tag">$250</div>
                 <div class="card-body">
                   <h5 class="card-title mt-4">Guest-name: Abdur Rahman</h5>
                   <ul class="details">
                     <li> Room Type: Deluxe</li>
                     <li> Capacity: 4 guests</li>
                     <li> Check-In: 2023-09-01</li>
                     <li> Check-Out: 2023-09-07</li>
                     <button class="button"> View More</button>
                   </ul>
                 </div>
               </div>
             </div>
             <div class="col-sm-4">
               <div class="card booking-card">
                 <div class="price-tag">$250</div>
                 <div class="card-body">
                   <h5 class="card-title mt-4">Guest-name: Abdur Rahman</h5>
                   <ul class="details">
                     <li> Room Type: Deluxe</li>
                     <li> Capacity: 4 guests</li>
                     <li> Check-In: 2023-09-01</li>
                     <li> Check-Out: 2023-09-07</li>
                     <button class="button"> View More</button>
                   </ul>
                 </div>
               </div>
             </div>
             <div class="col-sm-4">
               <div class="card booking-card">
                 <div class="price-tag">$250</div>
                 <div class="card-body">
                   <h5 class="card-title mt-4">Guest-name: Abdur Rahman</h5>
                   <ul class="details">
                     <li> Room Type: Deluxe</li>
                     <li> Capacity: 4 guests</li>
                     <li> Check-In: 2023-09-01</li>
                     <li> Check-Out: 2023-09-07</li>
                     <button class="button"> View More</button>
                   </ul>
                 </div>
               </div>
             </div>
           </div>
         </div> --}}
    
   
                
                  
 @endsection