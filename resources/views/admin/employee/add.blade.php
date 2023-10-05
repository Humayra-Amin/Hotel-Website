@extends('admin.layouts.app')
@section('app')


<div id="content-wrapper" class="d-flex flex-column">
<!-- Topbar -->
<div id="content">
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





       <div class="container mt-3 ">




@include('admin.inc.message')




<h2 class="custom-h2">Add Employee</h2>
  

       <form action="{{ url('/admin/employee') }}" method="POST" enctype="multipart/form-data">
                      @csrf


    <div class="add-row files-jumbotron custom-box8">
      

      
      <div class="col-sm-3 form-group">
    <h2 class=" text-font ">Personal Information</h2>
</div>


<div class="col-md-6 form-group custom-input-file ">


                    <div class="d-flex align-items-center justify-content-start">

                      <img id="file_upload" src="http://placehold.it/100" alt="your image" class="custom-upload-img" />

                      <div class="custom-input-file-upload">

                        <span class="custom-upload-label">Upload Image</span>

                        <input type='file' name="image" onchange="readURL(this);" />

                      </div>

                    </div>

                  </div>



      <div class="col-sm-6  form-group">
        <label for="name-f" class="custom-label">First Name</label>
        <input type="text" class="form-control" name="fname" id="name-f" placeholder="Enter first name" required>
      </div>




      <div class="col-sm-6 form-group">
        <label for="name-l" class="custom-label">Last name</label>
        <input type="text" class="form-control" name="lname" id="name-l" placeholder="Enter last name" required>
      </div>



      
      <div class="col-sm-6 form-group">
        <label for="name-e" class="custom-label">Employee Id</label>
        <input type="text" class="form-control" name="eid" id="number" placeholder="Enter Employee id" required>
      </div>



      
      <div class="col-sm-6 form-group">
        <label for="address-1" class="custom-label">Present Address</label>
        <input type="address" class="form-control" name="Locality" id="Present-address" placeholder="Locality/House/Street no." required>
      </div>



      
        <div class="col-sm-6 form-group">
        <label for="email" class="custom-label">Email</label>
        <input type="email" class="form-control" name="email" id="email" placeholder="Enter email." required>
      </div>



      
      <div class="col-sm-6 form-group">
        <label for="tel" class="custom-label">Contact No.</label>
        <input type="tel" name="phone" class="form-control" id="tel" placeholder="Enter Contact Number." required>
      </div>



      
      <div class="col-sm-6 form-group">
        <label for="Date" class="custom-label">Date Of Birth</label>
        <input type="Date" name="dob" class="form-control" id="Date" placeholder="" required>
      </div>



      
      <div class="col-sm-6 form-group">
        <label for="email" class="custom-label">Input NID</label>
        <input type="nid" class="form-control" name="nid" id="nid" placeholder="Enter NID" required>
      </div>


      

      <div class="col-sm-6 form-group">
        <label for="position" class="custom-label">Position</label>
        <select class="form-control custom-select browser-default" name="position">
        <option >Select your Position</option>
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
        <label for="sex" class="custom-label">Gender</label>
        <select id="sex" class="form-control browser-default custom-select" name="sex">
        <option >Select Gender</option>
          <option value="Male">Male</option>
          <option value="Female">Female</option>
          <option value="Other">Others</option>
        </select>
      </div>



      
      <div class="col-sm-6 form-group">
        <label for="Date" class="custom-label">Joining Date</label>
        <input type="Date" name="joiningdate" class="form-control" id="jdate" placeholder="" required>
      </div>
      


      
      <div class="col-sm-6 form-group">
        <label for="Salary" class="custom-label">Salary</label>
        <input type="number" name="salary" class="form-control" id="Salary" placeholder="Enter Salary" required>
      </div>



      
      <div class="col-sm-6 form-group">
        <label for="Password" class="custom-label">Password</label>
        <input type="password" name="password" class="form-control" id="password" placeholder="Enter Password" required>
      </div>



      

      <div class="col-sm-6 form-group">
        <label for="Password" class="custom-label">Confirm Password</label>
        <input type="password" name="password_confirmation" class="form-control" id="confirm-password" placeholder="Enter Confirm Password" required>
      </div>



      

      <div class="col-sm-12">
        <input type="checkbox" class="form-check d-inline" id="chb" required><label for="chb" class="form-check-label custom-label">&nbsp;I accept all terms and conditions.
        </label>
      </div>



      
      <div class="col-sm-12 form-group mb-0">
        <button class="btn btn-primary float-right">Submit</button>
      </div>
      


      
    </div>


  </form>


</div>



        </div>


      </div>


      </div>
      

@endsection