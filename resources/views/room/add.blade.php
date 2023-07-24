 
@extends('room.layouts.app')
@section('app')
<div id="content-wrapper" class="d-flex flex-column">


  @if ($errors->any())
  <div class="alert alert-danger">
      <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
      </ul>
  </div>
@endif


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



                 <div class="container mt-3">
                          <h2 class="text-left text-info1 custom-form-title">Add Rooms</h2>
                       
                    <form action="{{ url('room') }}" method="POST">
                      @csrf
  
                      <div class="row custom-jumbotron box8">
                        
                        <div class="custom-form-inner">
                            <div class="col-sm-6 form-group custom-form-group">
                              <label for="roomtitle">Room Title</label>
                              <input type="text" class="form-control" name="roomtitle" id="roomtitle" placeholder="Enter Room Name">
                            </div>
                            <div class="col-sm-6 form-group custom-form-group">
                              <label for="buildingno">Building No</label>
                              <input type="number" class="form-control" name="buildingno" id="buildingno" placeholder="Enter Room No." required>
                            </div>
                            <div class="col-sm-6 form-group custom-form-group">
                              <label for="roomno">Room No</label>
                              <input type="number" class="form-control" name="roomno" id="roomno" placeholder="Enter Room No." required>
                            </div>
                            <div class="col-sm-6 form-group custom-form-group">
                              <label for="floorno">Floor No</label>
                              <input type="number" class="form-control" name="floorno" id="floorno" placeholder="Enter Floor No." required>
                            </div>
                          
                            <div class="col-sm-6 form-group custom-form-group">
                              <label for="Category">Category</label>
                              <select name="category" class="form-control custom-select browser-default">
                                <option>Select your Room Category</option>
                                <option>Normal</option>
                                <option>Standered</option>
                                <option >Premium</option>
                                <option >Super Premium</option>
                                <option >Queen</option>
                            </select>
                            </div>
                            
                            
                            <div class="col-sm-6 form-group custom-form-group">
                              <label for="roomtype">Room Type</label>
                              <select name="roomtype" class="form-control custom-select browser-default">
                                <option >Select Room Type</option>
                                <option>Single Room</option>
                                <option>Double Room</option>
                                <option >Quad Room</option>
                                <option >Hollywood Twin Room</option>
                                <option > Double-Double Room</option>
                                <option >Interconnecting Room</option>
                                <option > Adjoining Room</option>
                                <option >Duplex Room</option>
                              </select>
                            </div>

                          
                            <div class="col-sm-6 form-group custom-form-group">
                              <label for="roomsize">Room Size</label>
                              <input type="number" name="roomsize" class="form-control" id="number" placeholder="Enter Room size" required>
                            </div>

                            <div class="col-sm-6 form-group custom-form-group">
                              <label for="roomview">Room View</label>
                              <select name="roomview" class="form-control custom-select browser-default">
                              <option>Select Room View</option>
                              <option>Sea View</option>
                              <option>Mountain View</option>
                              <option>Road View</option>
                              </select>
                            </div>




                            <div class="col-sm-6 form-group custom-form-group">
                              <label for="guestservice">Guest Service</label>
                              <select name="guestservice" class="form-control custom-select browser-default" multiple>
                              <option >Select Services</option>
                              <option>24-Hour room service</option>
                              <option>Free wireless internet access</option>
                              <option >Complimentary use of hotel bicycle</option>
                              <option >Laundry service</option>
                              <option >Tour & excursions</option>
                              <option >24 Hour concierge</option>
                              <option >E-Bike & horse cart rental</option>
                              <option >Airport transfers</option>
                              <option >Babysitting on request</option>
                              </select>
                            </div>


                            <div class="col-sm-6 form-group custom-form-group">
                              <label for="facilities">Facilities</label>
                              <select name="facilities" class="form-control custom-select browser-default" multiple>
                              <option>Select Facilities</option>
                              <option>Free Wi-Fi</option>
                              <option>Flat-screen TV</option>
                              <option >Coffee Maker</option>
                              <option >Pool</option>
                              <option >24 Hour security</option>
                              <option >Car parking</option>
                              <option >Poolside bar</option>
                              <option >Disable rooms & Interconnecting room</option>
                              <option >Sunset boat trip</option>
                              </select>
                            </div>

                        
                            
                            <div class="col-sm-12 form-group custom-form-group1">
                              <label for="description" class="form-label">Description</label>
                              <textarea name="description" class="form-control" id="description" rows="3"></textarea>
                            </div>
                            
                            
                            <div class="col-sm-12">
                              <div class="upload__box">
                                <div class="upload__btn-box">
                                  <label class="upload__btn">
                                    Upload Room Images
                                    <input  name="image" type="file" multiple="" data-max_length="20" class="upload__inputfile">
                                  </label>
                                </div>
                                <div class="upload__img-wrap"></div>
                              </div>
                            </div>
    
                        
                            <div class="col-sm-4">
                              <input type="checkbox" class="form-check d-inline" id="chb" required><label for="chb" class="form-check-label">&nbsp;I accept all terms and conditions.
                              </label>
                            </div>
                      
                            <div class="col-sm-12 form-group mb-0">
                              <button class="btn btn-primary btn-lg float-right add-room-btn">Submit</button>
                            </div>
                        </div>
                  
                      </div>
                    </form>
                  </div>
                                             
                  
                
                  
 @endsection