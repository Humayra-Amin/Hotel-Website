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






<div class="container mt-3 ">



 @include('admin.inc.message')
    
    
    <h2 class="file-h2">Add Reservation</h2>
      
    <form action="{{ url('admin/booking') }}" method="POST" enctype="multipart/form-data">
      @csrf

    
        <div class="reserve-row reserve-jumbotron custom-box8">
          
          
          <div class="col-sm-8 form-group">
            <h2 class="text-center">Reservation</h2>
          </div>


    
          <div class="col-sm-12  form-group">
            <label for="cname" class="reserve-label">Customer Name</label>
            <input type="text" class="form-control" name="cname" id="cname" placeholder="Name" required>
          </div>
    


          <div class="col-sm-6 form-group">
            <label for="email" class="reserve-label">Email</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
          </div>



          <div class="col-sm-6 form-group">
            <label for="tel" class="reserve-label">Contact No.</label>
            <input type="tel" name="tel" class="form-control" id="tel" placeholder="Contact Number" required>
          </div>



          <div class="col-sm-6 form-group">
            <label for="email" class="reserve-label">National Id</label>
            <input type="nid" class="form-control" name="nid" id="nid" placeholder="NID" required>
          </div>



        <div class="col-sm-6 form-group">
          <label for="roomcategory" class="reserve-label">Room Category </label>
          <select class="form-control" name="roomcategory" id="roomcategory" required>
              <option value="Normal">Normal</option>
              <option value="Standered">Standered</option>
              <option value="Premium">Premium</option>
              <option value="Super Premium">Super Premium</option>
              <option value="Queen">Queen</option>
          </select>
        </div>
        


        <div class="col-sm-6 form-group">
          <label for="roomno" class="reserve-label">Room No.</label>
          <input type="number" class="form-control" name="roomno" id="roomno" placeholder="Room No." required>
        </div>



          <div class="col-sm-6 form-group">
            <label for="guestnumber" class="reserve-label">Number of Guests</label>
            <input type="text" class="form-control" name="guestnumber" id="guestnumber" placeholder="Number of Guests" required>
          </div>



          <div class="col-sm-6 form-group">
            <label for="checkInDate" class="reserve-label">Check-in Date</label>
                <input type="date" class="form-control" name="checkInDate" id="checkInDate" required>
          </div>



          <div class="col-sm-6 form-group">
            <label for="checkOutDate" class="reserve-label">Check-out Date</label>
            <input type="date" class="form-control" name="checkOutDate" id="checkOutDate" required>
          </div>


          <div class="col-sm-6 form-group">
            <label for="price" class="reserve-label">Price</label>
            <input type="number" name="price" class="form-control" id="price" placeholder="Price" required>
          </div>


          <div class="col-sm-6 form-group">
            <label for="discount" class="reserve-label">Discount</label>
            <input type="number" name="discount" class="form-control" id="Discount" placeholder="discount">
          </div>



          <div class="col-sm-12 form-group">
            <label for="specialrequest" class="reserve-label">Special Request, Ex. extra bed, comforter.....</label>
            <textarea name="specialrequest" class="form-control" id="specialrequest" rows="3"></textarea>
          </div>

    
    
          <button type="submit" class="btn btn-primary button-file">Submit</button>


        </div>


        </form>


    </div>


@endsection

