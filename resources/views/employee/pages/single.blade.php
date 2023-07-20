@extends('employee.layouts.app')

@section('content')

<div class="container mt-3">
            <h2>Single Employee</h2>
            
            <div class="container">
            <img src="{{asset('employees/images/JR.jpg')}}" width="18px" height="20px">
                <!-- <div class="topright">Top Right</div> -->
            </div>
  <form>
    <div class="row jumbotron box8">
      
      <div class="col-sm-12 mx-t3 mb-4">
    <h2 class="text-center text-info"></h2>
</div>    
    <div class="col-sm-6  form-group">

        <label for="name-f" class="group-label">First Name</label>
        <p class="card-text">Jason</p>
        
      </div>
      <div class="col-sm-6 form-group">
        <label for="name-l" class="group-label">Last name</label>
        <p class="card-text">Roy</p>
        
      </div>
      <div class="col-sm-6 form-group">
        <label for="name-e">Employee Id</label>
        <p class="card-text">234</p>
       
      </div>
      <div class="col-sm-6 form-group">
        <label for="address-1">Present Address</label>
        <p class="card-text">House no-30,Flo Rida,USA</p>
       
      </div>
        <div class="col-sm-6 form-group">
        <label for="email">Email</label>
        <p class="card-text">JasonRoy@gmail.com</p>
        
      </div>
      <div class="col-sm-6 form-group">
        <label for="email">Input NID</label>
        <p class="card-text">234567</p>
        
      </div>
      <div class="col-sm-6 form-group">
        <label for="Country">Position</label>
        <p class="card-text">Front Desk Receptionist</p>
        
      </div>
      <div class="col-sm-6 form-group">
        <label for="Date">Date Of Birth</label>
        <p class="card-text"> 01/05/1995</p>
        
      </div>
      <div class="col-sm-6 form-group">
        <label for="sex">Gender</label>
        <p class="card-text">Male</p>
        
      </div>
      <div class="col-sm-6 form-group">
        <label for="tel">Contact No.</label>
        <p class="card-text"> +1 123-456-7890</p>
       
      </div>

      
    </div>
  </form>
</div>
    </form>
        </div>



@endsection