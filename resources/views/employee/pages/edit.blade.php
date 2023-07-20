@extends('employee.layouts.app')

@section('content')

<div class="container mt-3">
<h1 class="form-h1">Edit Employee</h1>
  <form>
    
  <div class="row jumbotron box">
      
      
      <div class="col-sm-6 form-group">
    <h2 class="form-text-color">Personal Information</h2>
</div>
<div class="col-md-6 form-group input-image" >
      <div class="d-flex align-items-center justify-content-start">
        <img id="image_upload" src="http://placehold.it/100" alt="your image" class="upload-image" />
          <div class="input-image-upload">
            <span class="upload-label">Upload Image</span>
            <input type='file' onchange="readURL(this);" />
          </div>
      </div>

        
      </div>
                        
    <div class="col-sm-6  form-group">
        <label for="name-f" class="form-label">First Name</label>
        <input type="text" class="form-control" name="fname" id="name-f" placeholder="Enter first name" required>
      </div>
      <div class="col-sm-6 form-group">
        <label for="name-l" class="form-label">Last name</label>
        <input type="text" class="form-control" name="lname" id="name-l" placeholder="Enter last name" required>
      </div>
      <div class="col-sm-6 form-group">
        <label for="name-e" class="form-label">Employee Id</label>
        <input type="text" class="form-control" name="eid" id="number" placeholder="Enter Employee id" required>
      </div>
      <div class="col-sm-6 form-group">
        <label for="address-1" class="form-label">Present Address</label>
        <input type="address" class="form-control" name="Locality" id="Present-address" placeholder="Locality/House/Street no." required>
      </div>
        <div class="col-sm-6 form-group">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" name="email" id="email" placeholder="Enter email" required>
      </div>
      <div class="col-sm-6 form-group">
        <label for="email" class="form-label">Input NID</label>
        <input type="nid" class="form-control" name="nid" id="nid" placeholder="Enter NID" required>
      </div>
      <div class="col-sm-6 form-group">
        <label for="Country" class="form-label">Position</label>
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
        <label for="Date" class="form-label">Date Of Birth</label>
        <input type="Date" name="dob" class="form-control" id="Date" placeholder="" required>
      </div>
      <div class="col-sm-6 form-group">
        <label for="sex" class="form-label">Gender</label>
        <select id="sex" class="form-control browser-default custom-select">
        <option value="">Select Gender</option>
          <option value="male">Male</option>
          <option value="female">Female</option>
          <option value="other">Others</option>
        </select>
      </div>
      <div class="col-sm-6 form-group">
        <label for="tel" class="form-label">Contact No.</label>
        <input type="tel" name="phone" class="form-control" id="tel" placeholder="Enter Contact Number" required>
      </div>
      <div class="col-sm-6 form-group">
      <label for="name-f" class="form-label">Joining Date</label>
        <input type="text" class="form-control" name="fname" id="name-f" placeholder="Enter first name" required>
      </div>
      
      <div class="col-sm-12">
        <input type="checkbox" class="form-check d-inline" id="chb" required><label for="chb" class="form-check-label form-label">&nbsp;I accept all terms and conditions.
</label>
      </div>

      <div class="col-sm-12 form-group mb-0">
        <button class="btn btn-primary float-right">Submit</button>
      </div>
    </div>
  </form>
</div>
    </form>
        </div>
@endsection