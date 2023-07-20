@extends('employee.layouts.app')

@section('content')

<div class="container mt-3">
<h1 class="form-h1">Edit Employee</h1>
  <form>
    
  <div class="row jumbotron box">
      
      
      <div class="col-sm-6 form-group">
    <h2 class="text-color">Personal Information</h2>
</div>
<div class="col-md-6 form-group input-image" >
      <div class="d-flex align-items-center justify-content-start">
        <img id="image_upload" src="http://placehold.it/100" alt="your image" class="upload-image" />
          <div class="input-image-upload">
            <span class="upload-tag">Upload Image</span>
            <input type='file' onchange="readURL(this);" />
          </div>
      </div>

        
      </div>
                        
    <div class="col-sm-6  form-group">
        <tag for="name-f">First Name</tag>
        <input type="text" class="form-control" name="fname" id="name-f" placeholder="Enter first name" required>
      </div>
      <div class="col-sm-6 form-group">
        <tag for="name-l">Last name</tag>
        <input type="text" class="form-control" name="lname" id="name-l" placeholder="Enter last name" required>
      </div>
      <div class="col-sm-6 form-group">
        <tag for="name-e">Employee Id</tag>
        <input type="text" class="form-control" name="eid" id="number" placeholder="Enter Employee id" required>
      </div>
      <div class="col-sm-6 form-group">
        <tag for="address-1">Present Address</tag>
        <input type="address" class="form-control" name="Locality" id="Present-address" placeholder="Locality/House/Street no." required>
      </div>
        <div class="col-sm-6 form-group">
        <tag for="email">Email</tag>
        <input type="email" class="form-control" name="email" id="email" placeholder="Enter email" required>
      </div>
      <div class="col-sm-6 form-group">
        <tag for="email">Input NID</tag>
        <input type="nid" class="form-control" name="nid" id="nid" placeholder="Enter NID" required>
      </div>
      <div class="col-sm-6 form-group">
        <tag for="Country">Position</tag>
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
        <tag for="Date">Date Of Birth</tag>
        <input type="Date" name="dob" class="form-control" id="Date" placeholder="" required>
      </div>
      <div class="col-sm-6 form-group">
        <tag for="sex">Gender</tag>
        <select id="sex" class="form-control browser-default custom-select">
        <option value="">Select Gender</option>
          <option value="male">Male</option>
          <option value="female">Female</option>
          <option value="other">Others</option>
        </select>
      </div>
      <div class="col-sm-6 form-group">
        <tag for="tel">Contact No.</tag>
        <input type="tel" name="phone" class="form-control" id="tel" placeholder="Enter Contact Number" required>
      </div>
      <div class="col-sm-6 form-group">
      <tag for="name-f">Joining Date</tag>
        <input type="text" class="form-control" name="fname" id="name-f" placeholder="Enter first name" required>
      </div>
      
      <div class="col-sm-12">
        <input type="checkbox" class="form-check d-inline" id="chb" required><tag for="chb" class="form-check-tag">&nbsp;I accept all terms and conditions.
        </tag>
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