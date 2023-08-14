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
 

      <h2 class="CCC" style="color: black;">Employee Details</h2>
      <div class="group-container mt-3">
        <div class="group-card-text">
        </div>
          <div class="row">
            <div class="col-12">
            </div>
           

            <div class="col-4">
            <div class="slider">
            @foreach ($employee->image as $image)
                    <img src='{{Storage::disk("public")->url($image)}}' class="image">     
                @endforeach
                <h2 class="group-card-title">{{$employee->employeetitle}}</h2>
                </div>
            </div>

            <div class="col-3 bbb fs-5 ">
                <h2 class="group-h2">First Name:</h2>
                <p>{{$employee->fname}}</p>
                <h2 class="group-h2">Date of Birth:</h2>
                <p>{{$employee->dob}}</p>
                <h2 class="group-h2">Position:</h2>
                <p>{{$employee->position}}</p>
                <h2 class="group-h2">Present Address:</h2>
                <p>{{$employee->Locality}}</p>
                <h2 class="group-h2">Gender:</h2>
                <p>{{$employee->sex}}</p>
                <h2 class="group-h2">Contact No:</h2>
                <p>{{$employee->phone}}</p>
            </div>

            <div class="col-3 aaa fs-5">
                <h2 class="group-h2">Last Name:</h2>
                <p>{{$employee->lname}}</p>
                <h2 class="group-h2">Employee Id:</h2>
                <p>{{$employee->eid}}</p>
                <h2 class="group-h2">Joining Date:</h2>
                <p>{{$employee->joiningdate}}</p>
                <h2 class="group-h2">Salary:</h2>
                <p>{{$employee->salary}}</p>
                <h2 class="group-h2">Email:</h2>
                <p>{{$employee->email}}</p>
                <h2 class="group-h2">Input Nid:</h2>
                <p>{{$employee->nid}}</p>
                
                
            </div>

           
        
        </div>
    
          
        </div>
    
    
@endsection



