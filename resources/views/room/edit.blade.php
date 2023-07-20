
@extends('room.layouts.app')
@section('app')
<div id="content-wrapper" class="d-flex flex-column  justify-content-between">

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
                        </li>
                </nav>

  <div class="container">

    <form class="well form-horizontal ms-end custom-form" action=" " method="post"  id="contact_form">
<fieldset>

<!-- Form Name -->
<form class="form-group"><!--form-->
    <h1 class="text-left text-info1 custom-form-title">Edit Room</h1>
    

      <div class="row box8">


				<div class="col-sm-6 form-group custom-form-group">
					<label>Room type</label>
						<select id="dropdown" name="room" class="form-control" required>
							<option disabled selected value>Room type</option>
							<option value="Budget Double Room">Budget Double Room</option>
							<option value="Deluex Room">Deluex Room</option>
							<option value="King Room">King Room</option>
							<option value="Queen Room">Queen Room</option>
						</select>
				</div>
				<div class="col-sm-6 form-group custom-form-group">
					<div class="form-group">
						<label>Category</label>
						<select id="dropdown" name="room" class="form-control" required>
							<option disabled selected value>Category</option>
							<option value="Standard Room">Standard Room</option>
							<option value="Premium Room">Premium Room</option>
							<option value="Deluxe Room">Deluxe Room</option>
							<option value="Suites Room">Suites Room</option>
						</select>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-sm-6 form-group custom-form-group">
					<div class="form-group">
						<label id="room-label" for="number">Room Size <small></small></label>
						<input type="number" name="rent" id="number" min="200" max="1000" class="form-control" placeholder="Room size" >
					</div>
				</div>
				<div class="col-sm-6 form-group custom-form-group">
					<div class="form-group">
						<label>Room Facilities</label>
						<select id="dropdown" name="room" class="form-control" required>
							<option disabled selected value>Room Facilities</option>
							<option value="Free WiFi">Free WiFi</option>
							<option value="Flat-screen TV">Flat-screen TV</option>
							<option value="Coffee Maker">Coffee Maker</option>
							<option value="King-sized Bed">King-sized Bed</option>
              <option value="Pool">Pool</option>
              <option value="Sound Proofing">Sound Proofing</option>
              <option value="City View">City View</option>
              <option value="Private Bathroom">Private Bathroom</option>
						</select>
					</div>
				</div>
			</div>



			<div class="row">
        <div class="col-sm-12 form-group custom-form-group">
          <label>Room View</label>
            <select id="dropdown" name="room" class="form-control" required>
              <option disabled selected value>Room View</option>
              <option value="City View">City View</option>
              <option value="Sea View">Sea View</option>
              <option value="Mountain View">Mountain View</option>
            </select>
        </div>
        <div class="col-sm-12 form-group custom-form-group">
					<div class="form-group">
						<label>Description</label>
						<textarea  id="description" class="form-control" name="description" placeholder="...."></textarea>
					</div>
				</div>
			</div>
            
			

<!-- Upload  -->
<div class="text-center" style="
margin-top: 30px;
">
<form id="file-upload-form" class="uploader">
  <input id="file-upload" type="file" name="fileUpload" accept="image/*" />

  <label for="file-upload" id="file-drag">
    <img id="file-image" src="#" alt="Preview" class="hidden">
    <div id="start">
      <i class="fa fa-download" aria-hidden="true"></i>
      <div>Select a file or drag here</div>
      <div id="notimage" class="hidden">Please select an image</div>
      <span id="file-upload-btn" class="btn btn-primary">Select a file</span>
    </div>
    <div id="response" class="hidden">
      <div id="messages"></div>
    </div>
  </label>
</form>

<!-- Button -->
<div class="text-center" style="
margin-top: 30px;
">
    <button class="btn btn-primary waves-effect waves-light " id="btn-submit">Update Room</button>
  </div>
  </fieldset>
    </form>
        </div>
          </div> <!-- /.container -->
          
@endsection
 