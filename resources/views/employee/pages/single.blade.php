@extends('employee.layouts.app')

@section('content')

<div class="container mt-3">
<!-- <h2 >Add Employee</h2> -->
  <form>
    
    <div class="row jumbotron box8">
      
      
      <div class="col-sm-12 mx-t3 mb-4">
    <h2 class="text-center text-info"></h2>
</div>
<!-- <div class="col-md-6 ml-auto mr-auto" ></div> -->
<!-- <div class="input-file">

													<img id="file_upload" src="http://placehold.it/100" alt="your image" class="upload-img" />
													<div class="input-file-upload">
														<span class="upload-label">Upload Image</span>
														<input type='file' onchange="readURL(this);" />
													</div>
												</div> -->
             
    <div class="col-sm-6  form-group">
        <label for="name-f">First Name:</label>
        <<p class="card-text">Jason</p>
        <!-- <input type="text" class="form-control" name="fname" id="name-f" placeholder="Enter first name." required> -->
      </div>
      <div class="col-sm-6 form-group">
        <label for="name-l">Last name</label>
        <p class="card-text">Roy</p>
        <!-- <input type="text" class="form-control" name="lname" id="name-l" placeholder="Enter last name." required> -->
      </div>
      <div class="col-sm-6 form-group">
        <label for="name-e">Employee Id</label>
        <p class="card-text">234</p>
        <!-- <input type="text" class="form-control" name="eid" id="number" placeholder="Enter Employee id" required> -->
      </div>
      <div class="col-sm-6 form-group">
        <label for="address-1">Present Address</label>
        <p class="card-text">House no-30,Flo Rida,USA</p>
        <!-- <input type="address" class="form-control" name="Locality" id="Present-address" placeholder="Locality/House/Street no." required> -->
      </div>
        <div class="col-sm-6 form-group">
        <label for="email">Email</label>
        <p class="card-text">JasonRoy@gmail.com</p>
        <!-- <input type="email" class="form-control" name="email" id="email" placeholder="Enter email." required> -->
      </div>
      <div class="col-sm-6 form-group">
        <label for="email">Input NID</label>
        <p class="card-text">234567</p>
        <!-- <input type="nid" class="form-control" name="nid" id="nid" placeholder="Enter NID" required> -->
      </div>
      <div class="col-sm-6 form-group">
        <label for="Country">Position</label>
        <p class="card-text">Front Desk Receptionist</p>
        <!-- <select class="form-control custom-select browser-default"> -->
        <!-- <option value="">Select your Position</option>
      <option>Manager</option>
      <option>Assistant Manager</option>
      <option >Accountent</option>
      <option >Receptionist</option>
      <option >Security</option>
      <option >Room Service</option>
      <option >Janitor</option>
        </select> -->
      </div>
      <div class="col-sm-6 form-group">
        <label for="Date">Date Of Birth</label>
        <p class="card-text"> 01/05/1995</p>
        <!-- <input type="Date" name="dob" class="form-control" id="Date" placeholder="" required> -->
      </div>
      <div class="col-sm-6 form-group">
        <label for="sex">Gender</label>
        <p class="card-text">Male</p>
        <!-- <select id="sex" class="form-control browser-default custom-select">
        <option value="">Select Gender</option>
          <option value="male">Male</option>
          <option value="female">Female</option>
          <option value="other">Others</option>
        </select> -->
      </div>
      <div class="col-sm-6 form-group">
        <label for="tel">Contact No.</label>
        <p class="card-text"> +1 123-456-7890</p>
        <!-- <input type="tel" name="phone" class="form-control" id="tel" placeholder="Enter Contact Number." required>
      </div> -->
      
      <!-- <div class="col-sm-12"> -->
        <!-- <input type="checkbox" class="form-check d-inline" id="chb" required><label for="chb" class="form-check-label">&nbsp;I accept all terms and conditions.
        </label> -->
      </div>

      <!-- <div class="col-sm-12 form-group mb-0">
        <button class="btn btn-primary float-right">Submit</button>
      </div> -->
    </div>
  </form>
</div>
    </form>
        </div>



@endsection