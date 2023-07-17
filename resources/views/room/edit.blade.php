
@extends('room.layouts.app')


@section('app')
    
    

     

        <!-- Search?? -->
        <!-- Content Wrapper -->
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
<legend><center><h2><b>Edit Room</b></h2><h4></h4></center></legend><br>


       
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
            <div class="container">
	<div class="row">
		<div class="col-md-6">
			<form method="post" action="#" id="#">
				<div class="form-group files">
					<input type="file" class="form-control" multiple="">
				</div>
			</form>
		</div>
</div>

			

<!-- Select Basic -->
<form id="file-upload-form" action="<?php echo $_SERVER['PHP_SELF'] ?>">
	<input id="file-upload" type="file" name="fileUpload" />
	<label for="file-upload" id="file-drag">
		Select a file to upload
		<br />OR
		<br />Drag a file into this box
		
		<br /><br /><span id="file-upload-btn" class="button">Add a file</span>
	</label>
	
	<progress id="file-progress" value="0">
		<span>0</span>%
	</progress>
	
	<output for="file-upload" id="messages"></output>
</form>
<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4 d-flex flex-column"><br>
    <button type="submit" class="btn btn-warning" > Update Room </button>
  </div>
</div>
  </fieldset>
    </form>
        </div>
          </div> <!-- /.container -->
          
          @endsection
