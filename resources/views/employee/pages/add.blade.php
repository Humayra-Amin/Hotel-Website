@extends('employee.layouts.app')

@section('content')

<div class="container mt-3">
  <form>
    <div class="row jumbotron box8">
      <div class="col-sm-12 mx-t3 mb-4">
        <h2 class="text-center text-info">Add Employee</h2>
      </div>
      <div class="col-sm-6 form-group">
        <label for="name-f">First Name</label>
        <input type="text" class="form-control" name="fname" id="name-f" placeholder="Enter first name." required>
      </div>
      <div class="col-sm-6 form-group">
        <label for="name-l">Last name</label>
        <input type="text" class="form-control" name="lname" id="name-l" placeholder="Enter last name." required>
      </div>
      <div class="col-sm-6 form-group">
        <label for="name-e">Employee Id</label>
        <input type="text" class="form-control" name="eid" id="number" placeholder="Enter Employee id" required>
      </div>
      <div class="col-sm-6 form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" name="email" id="email" placeholder="Enter email." required>
      </div>
      <div class="col-sm-6 form-group">
        <label for="Country">Position</label>
        <select class="form-control custom-select browser-default">
        <option value="">Select your Position</option>
      <option>Manager</option>
      <option>Assistant Manager</option>
      <option >Accountent</option>
      <option >Receptionist</option>
      <option >Security</option>
      <option >Room Service</option>
      <option >Janitor</option>
        </select>
      </div>
      <div class="col-sm-6 form-group">
        <label for="Date">Date Of Birth</label>
        <input type="Date" name="dob" class="form-control" id="Date" placeholder="" required>
      </div>
      <div class="col-sm-6 form-group">
        <label for="sex">Gender</label>
        <select id="sex" class="form-control browser-default custom-select">
        <option value="">Select Gender</option>
          <option value="male">Male</option>
          <option value="female">Female</option>
          <option value="unspesified">Others</option>
        </select>
      </div>
      <div class="col-sm-4 form-group">
        <label for="tel">Contact No.</label>
        <input type="tel" name="phone" class="form-control" id="tel" placeholder="Enter Contact Number." required>
      </div>
      <div class="col-sm-12">
        <input type="checkbox" class="form-check d-inline" id="chb" required><label for="chb" class="form-check-label">&nbsp;I accept all terms and conditions.
        </label>
      </div>

      <div class="col-sm-12 form-group mb-0">
        <button class="btn btn-primary float-right">Submit</button>
      </div>

    </div>
  </form>
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


@endsection