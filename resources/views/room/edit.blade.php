
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
    <h1 class="text-left">Edit Room</h1>


       
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label id="room-label" for="room">Room No</label>
						<input type="text" name="room" id="room" placeholder="Enter your room no" class="form-control" required>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label id="floor-label" for="floor">Floor No</label>
						<input type="floor" name="floor" id="floor" placeholder="Enter your floor no" class="form-control" required>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label id="rent-label" for="number">Rent <small></small></label>
						<input type="number" name="rent" id="number" min="0" max="100" class="form-control" placeholder="rent" >
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label>Room type</label>
						<select id="dropdown" name="room" class="form-control" required>
							<option disabled selected value>Room</option>
							<option value="single">Single</option>
							<option value="double">Double</option>
							<option value="triple">Triple</option>
							<option value="premium">Premium</option>
						</select>
					</div>
				</div>
			</div>



			<div class="row">
				<div class="col-md-12">
					<div class="form-group">
						<label>Description</label>
						<textarea  id="description" class="form-control" name="description" placeholder="...."></textarea>
					</div>
				</div>
			</div>
            
			

<!-- Upload  -->
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
      <progress class="progress" id="file-progress" value="0">
        <span>0</span>%
      </progress>
    </div>
  </label>
</form>

<!-- Button -->
<div class="text-center">
    <button class="btn btn-primary waves-effect waves-light " id="btn-submit">Update Room</button>
  </div>
  </fieldset>
    </form>
        </div>
          </div> <!-- /.container -->
          
@endsection
 