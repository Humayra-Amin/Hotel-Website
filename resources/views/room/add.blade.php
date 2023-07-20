 
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



                 <div class="container mt-3">
                          <h2 class="text-left text-info1 custom-form-title">Add Room</h2>
                       
                    <form>
                      <div class="row box8">
                        
                        <div class="custom-form-inner">
                        </div>
                        <form id="form" method="post">
                          <div class="flexed">
                            <div class="formInput-group">
                              <div class="formInput-label"><label>Room No</label></div>
                              <div class="formInput-inputs input-text">
                                <input name="firstName" type="text" placeholder="room">
                              </div>
                            </div>
                    
                            <div class="formInput-group">
                              <div class="formInput-label"><label>Floor No</label></div>
                              <div class="formInput-inputs input-text">
                                <input name="lastName" type="text" placeholder="floor no">
                              </div>
                            </div>
                            <div class="col-sm-6 form-group custom-form-group">
                              <label for="name-f">Room No.</label>
                              <input type="number" class="form-control" name="roomno." id="name-f" placeholder="Enter Room No." required>
                            </div>
                            <div class="col-sm-6 form-group custom-form-group">
                              <label for="name-l">Floor No.</label>
                              <input type="number" class="form-control" name="floorno." id="name-l" placeholder="Enter Floor No." required>
                            </div>
                          
                            <div class="col-sm-6 form-group custom-form-group">
                              <label for="Category">Category</label>
                              <select class="form-control custom-select browser-default">
                                <option value="">Select your Room Category</option>
                              <option>Normal</option>
                              <option>Standered</option>
                              <option >Premium</option>
                              <option >Super Premium</option>
                              <option >Queen</option>
                            </select>
                            </div>
                            
                            
                            <div class="col-sm-6 form-group custom-form-group">
                              <label for="Country">Room Type</label>
                              <select class="form-control custom-select browser-default">
                                <option value="">Select Room Type</option>
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
                              <label for="size">Room Size</label>
                              <input type="number" name="roomsize" class="form-control" id="number" placeholder="" required>
                            </div>
                        
                            <div class="col-sm-6 form-group custom-form-group">
                              <label for="view">Room View</label>
                              <input type="text" name="roomview" class="form-control" placeholder="" required>
                            </div>
    
                            <div class="col-sm-12 form-group custom-form-group">
                                <label for="tel">Description</label>
                                <input type="text" name="description" class="form-control" placeholder="" required>
                            </div>
    
                            <div class="col-sm-12 form-group custom-form-group">
                                <label for="tel">Facilities</label>
                                <input type="text" name="phone" class="form-control" placeholder="" required>
                            </div>
    
    
                            <div class="col-sm-12 form-group custom-form-group">
                              <input type="file" id="upload-button" multiple accept="image/*" />
                              <label for="upload-button"
                                ><i class="fa-solid fa-upload"></i>&nbsp; Choose Or Drop Photos
                              </label>
                              <div id="error"></div>
                              <div id="image-display"></div>
                            </div>
                            
    
    
                            <div class="col-sm-4">
                              <input type="checkbox" class="form-check d-inline" id="chb" required><label for="chb" class="form-check-label">&nbsp;I accept all terms and conditions.
                              </label>
                            </div>
                      
                            <div class="col-sm-12 form-group mb-0">
                              <button class="btn btn-primary float-right">Submit</button>
                            </div>
                        </div>
                  
                      </div>
                    </form>
                  </div>
                                             
                  
                
                  
 @endsection