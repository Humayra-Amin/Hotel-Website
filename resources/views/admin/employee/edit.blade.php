@extends('employee.layouts.app')

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

<div class="container mt-3">
<h2 class="form-h2">Edit Employee</h2>
<form action="/employee/{{$employee->id}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method ('PUT')
  <div class="row jumbotron form-box8">
      
      
          <div class="col-sm-3 form-group">
        <h2 class="form-text-color">Personal Information</h2>
    </div>
  <div class="col-md-6 form-group form-input-file" >
    <div class="d-flex align-items-center justify-content-start">
      @foreach ($employee->image as $image)
            <img id="file_upload" src="{{Storage::disk("public")->url($image)}}" alt="your image" class="form-upload-img" />
      @endforeach
                <div class="form-input-file-upload">
                  <span class="form-upload-label">Upload Image</span>
                  <input type='file' name="image" onchange="readURL(this);" />
                </div>
          </div>
  </div>
                        
    <div class="col-sm-6  form-group">
        <label for="name-f" class="form-label">First Name</label>
        <input type="text" class="form-control" name="fname" id="name-f" placeholder="Enter first name" value="{{$employee->fname}}" required>
      </div>
      <div class="col-sm-6 form-group">
        <label for="name-l" class="form-label">Last name</label>
        <input type="text" class="form-control" name="lname" id="name-l" placeholder="Enter last name" value="{{$employee->lname}}" required>
      </div>
      <div class="col-sm-6 form-group">
        <label for="name-e" class="form-label">Employee Id</label>
        <input type="text" class="form-control" name="eid" id="number" placeholder="Enter Employee id" value="{{$employee->eid}}" required>
      </div>
      <div class="col-sm-6 form-group">
        <label for="address-1" class="form-label">Present Address</label>
        <input type="address" class="form-control" name="Locality" id="Present-address" placeholder="Locality/House/Street no." value="{{$employee->Locality}}" required>
      </div>
        <div class="col-sm-6 form-group">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" name="email" id="email" placeholder="Enter email" value="{{$employee->email}}" required>
      </div>
      <div class="col-sm-6 form-group">
        <label for="email" class="form-label">Input NID</label>
        <input type="nid" class="form-control" name="nid" id="nid" placeholder="Enter NID" value="{{$employee->nid}}" required>
      </div>
      <div class="col-sm-6 form-group">
        <label for="position" class="form-label">Position</label>
        <select class="form-control custom-select browser-default" name="position">
          <option >Select your Position</option>
              <option @if($employee->position == 'Manager') selected @endif>Manager</option>
              <option @if($employee->position == 'Assistant Manager') selected @endif>Assistant Manager</option>
              <option @if($employee->position == 'Accountent') selected @endif>Accountent</option>
              <option @if($employee->position == 'Receptionist') selected @endif>Receptionist</option>
              <option @if($employee->position == 'Security') selected @endif>Security</option>
              <option @if($employee->position == 'Room Service') selected @endif>Room Service</option>
              <option @if($employee->position == 'Janitor') selected @endif>Janitor</option>
        </select>
      </div>
      <div class="col-sm-6 form-group">
        <label for="Date" class="form-label">Date Of Birth</label>
        <input type="Date" name="dob" class="form-control" id="Date" placeholder="" value="{{$employee->dob}}" required>
      </div>
      <div class="col-sm-6 form-group">
        <label for="sex" class="form-label">Gender</label>
        <select id="sex" class="form-control browser-default custom-select" name="sex">
          <option >Select Gender</option>
          <option @if($employee->sex == 'Male') selected @endif>Male</option>
          <option @if($employee->sex == 'Female') selected @endif>Female</option>
          <option @if($employee->sex == 'Others') selected @endif>Others</option>
        </select>
      </div>
      <div class="col-sm-6 form-group">
        <label for="tel" class="form-label">Contact No.</label>
        <input type="tel" name="phone" class="form-control" id="tel" placeholder="Enter Contact Number" value="{{$employee->phone}}" required>
      </div>
      <div class="col-sm-6 form-group">
        <label for="Date" class="form-label">Joining Date</label>
        <input type="Date" name="joiningdate" class="form-control" id="jdate" placeholder="" value="{{$employee->joiningdate}}" required>
      </div>
      <div class="col-sm-6 form-group">
        <label for="Date" class="form-label">Salary</label>
        <input type="number" name="salary" class="form-control" id="Salary" placeholder="" value="{{$employee->salary}}" required>
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