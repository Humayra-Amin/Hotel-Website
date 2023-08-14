  
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
                        <a class="dropdown-item" href="room/login">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                            Login
                        </a>
                        <a class="dropdown-item" href="room/login">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                            Login
                        </a>
                    @endauth

                    
                </div>
            </li>   
          </nav>



                  <div class="container mt-3">
                            <h2 class="text-left text-info1 custom-form-title">Edit Rooms</h2>
                        
                      <form action="/room/{{$room->id}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="row custom-jumbotron box8">
                          
                          <div class="custom-form-inner">
                              <div class="col-sm-6 form-group custom-form-group">
                                <label for="roomtitle">Room Title</label>
                                <input type="text" class="form-control" name="roomtitle" id="room-title" placeholder="Enter Room Name" value="{{$room->roomtitle}}" required>
                              </div>
                              <div class="col-sm-6 form-group custom-form-group">
                                <label for="roomno">Room No.</label>
                                <input type="number" class="form-control" name="roomno" id="room-no" placeholder="Enter Room No." value="{{$room->roomno}}" required>
                              </div>
                              <div class="col-sm-6 form-group custom-form-group">
                                <label for="buildingno">Floor No.</label>
                                <input type="text" class="form-control" name="floorno" id="room-no" placeholder="Enter Floor No." value="{{$room->floorno}}" required>
                              </div>
                              <div class="col-sm-6 form-group custom-form-group">
                                <label for="floorno">Price.</label>
                                <input type="text" class="form-control" name="price" id="floorno" placeholder="Enter Price."  value="{{$room->price}}" required>
                              </div>
                            
                              <div class="col-sm-6 form-group custom-form-group">
                                <label for="Category">Category</label>
                                <select name="category" class="form-control custom-select browser-default">
                                
                                  <option @if($room->category == 'Normal') selected @endif>Normal</option>
                                  <option @if($room->category == 'Standered') selected @endif>Standered</option>
                                  <option @if($room->category == 'Premium') selected @endif>Premium</option>
                                  <option @if($room->category == 'Super Premium') selected @endif>Super Premium</option>
                                  <option @if($room->category == 'Queen') selected @endif>Queen</option>
                                  
                                
                              </select>
                              </div>
                              
                              
                              <div class="col-sm-6 form-group custom-form-group">
                                <label for="Country">Room Type</label>
                                <select name="roomtype" class="form-control custom-select browser-default">
                  
                                  <option @if($room->roomtype == 'Single Room') selected @endif>Single Room</option>
                                  <option @if($room->roomtype == 'Double Room') selected @endif>Double Room</option>
                                  <option @if($room->roomtype == 'Quad Room') selected @endif>Quad Room</option>
                                  <option @if($room->roomtype == 'Hollywood Twin Room') selected @endif>Hollywood Twin Room</option>
                                  <option @if($room->roomtype == 'Double-Double Room') selected @endif> Double-Double Room</option>
                                  <option @if($room->roomtype == 'Interconnecting Room') selected @endif>Interconnecting Room</option>
                                  <option @if($room->roomtype == 'Adjoining Room') selected @endif> Adjoining Room</option>
                                  <option @if($room->roomtype == 'Duplex Room') selected @endif>Duplex Room</option>
                                </select>
                              </div>

                            
                              <div class="col-sm-6 form-group custom-form-group">
                                <label for="size">Room Size</label>
                                <input type="number" name="roomsize" class="form-control" id="number" placeholder="Enter Room size" value="{{$room->roomsize}}" required>
                              </div>

                              <div class="col-sm-6 form-group custom-form-group">
                                <label for="view">Room View</label>
                                <select name="roomview" class="form-control custom-select browser-default">
                            
                                <option @if($room->roomview == 'Sea View') selected @endif>Sea View</option>
                                <option @if($room->roomview == 'Mountain View') selected @endif>Mountain View</option>
                                <option @if($room->roomview == 'Mountain View') selected @endif>Road View</option>
                                </select>
                              </div>




                              <div class="col-sm-6 form-group custom-form-group">
                                <label for="guestservice">Guest Service</label>
                                <select name="guestservice[]" class="form-control custom-select browser-default" multiple>
                                  {{-- <option value="{{$room->guestservice}}">Select Services</option> --}}
                              
                                <option  {{in_array("24-Hour room service",$room->guestservice) ? 'selected' : '' }}>24-Hour room service</option>
                                <option  {{ in_array("Free wireless internet access",$room->guestservice) ? 'selected' : '' }}>Free wireless internet access</option>
                                <option  {{ in_array("Complimentary use of hotel bicycle",$room->guestservice) ? 'selected' : '' }}>Complimentary use of hotel bicycle</option>
                                <option  {{ in_array("Laundry service",$room->guestservice) ? 'selected' : '' }}>Laundry service</option>
                                <option  {{ in_array("Tour & excursions",$room->guestservice) ? 'selected' : '' }}>Tour & excursions</option>
                                <option  {{ in_array("24 Hour concierge",$room->guestservice) ? 'selected' : '' }}>24 Hour concierge</option>
                                <option  {{ in_array("E-Bike & horse cart rental",$room->guestservice) ? 'selected' : '' }}>E-Bike & horse cart rental</option>
                                <option  {{ in_array("Airport transfers",$room->guestservice) ? 'selected' : '' }}>Airport transfers</option>
                                <option  {{ in_array("Babysitting on request",$room->guestservice) ? 'selected' : '' }}>Babysitting on request</option>
                                </select>
                              </div>


                              <div class="col-sm-6 form-group custom-form-group">
                                <label for="view">Facilities</label>
                                <select name="facilities[]" class="form-control custom-select browser-default" multiple>
                                  {{-- <option value="{{$room->facilities}}">Select Facilities</option> --}}
                                <option {{in_array("Free Wi-Fi",$room->facilities) ? 'selected' : '' }}>Free Wi-Fi</option>
                                <option {{in_array("Flat-screen TV",$room->facilities) ? 'selected' : '' }}>Flat-screen TV</option>
                                <option {{in_array("Coffee Maker",$room->facilities) ? 'selected' : '' }}>Coffee Maker</option>
                                <option {{in_array("Pool",$room->facilities) ? 'selected' : '' }}>Pool</option>
                                <option {{in_array("24 Hour security",$room->facilities) ? 'selected' : '' }}>24 Hour security</option>
                                <option {{in_array("Car parking",$room->facilities) ? 'selected' : '' }}>Car parking</option>
                                <option {{in_array("Poolside bar",$room->facilities) ? 'selected' : '' }}>Poolside bar</option>
                                <option {{in_array("Disable rooms & Interconnecting room",$room->facilities) ? 'selected' : '' }}>Disable rooms & Interconnecting room</option>
                                <option {{in_array("Sunset boat trip",$room->facilities) ? 'selected' : '' }}>Sunset boat trip</option>
                                </select>
                              </div>

                          
                              
                              <div class="col-sm-12 form-group custom-form-group1">
                                <label for="description" class="form-label" >Description</label>
                                <textarea name="description" class="form-control" id="description" rows="3" >{{ $room->description}}</textarea>
                              </div>
                              
                    
                            
                  
                            <div class="col-sm-12">
                            <div class="upload__box">
                              <div class="upload__btn-box">
                                  <label class="upload__btn">
                                    @if ($room->image)
                                    @foreach ($room->image as $img)
                                    <div>
                                        <img src='{{Storage::disk("public")->url($img)}}' class="d-block w-100" >
                                    </div>
                                    @endforeach
                                 @endif
                                      Upload Room Image     
                                  <input  name="image[]" type="file" multiple data-max_length="20" class="upload__inputfile">
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
                                <button class="btn btn-primary btn-lg float-right add-room-btn">Update Room</button>
                              </div>
                          </div>
                    
                        </div>
                      </form>
                    </div>
                                              
                    
                  
                    
  @endsection