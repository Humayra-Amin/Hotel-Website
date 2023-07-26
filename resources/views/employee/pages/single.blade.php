@extends('employee.layouts.app')

@section('content')

<div class="container mt-3">
 <div class="card-text">
        <h1 class="form-h1">Single Employee</h1>
            
            
  <form>
          <div class="row jumbotron box6">
       
          <div class="container">
            <img src="{{asset('employees/images/JR.jpg')}}" style="width:14%" >     
          </div>

      <div class="col-sm-12 mx-t3 mb-4">
    <h2 class="text-center text-info"></h2>
</div>    
    <div class="col-sm-6 form-group">

        <label for="name-f" class="group-label ">First Name</label>
        <p class="card-text">Jason</p>
        
      </div>
      <div class="col-sm-6 form-group">
        <label for="name-l" class="group-label">Last name</label>
        <p class="card-text">Roy</p>
        
      </div>
      <div class="col-sm-6 form-group">
        <label for="name-e" class="group-label">Employee Id</label>
        <p class="card-text">234</p>
       
      </div>
      <div class="col-sm-6 form-group">
        <label for="address-1" class="group-label">Present Address</label>
        <p class="card-text" >House no-30,Flo Rida,USA</p>
       
      </div>
        <div class="col-sm-6 form-group">
        <label for="email" class="group-label">Email</label>
        <p class="card-text">JasonRoy@gmail.com</p>
        
      </div>
      <div class="col-sm-6 form-group">
        <label for="email" class="group-label">Input NID</label>
        <p class="card-text">234567</p>
        
      </div>
      <div class="col-sm-6 form-group">
        <label for="Country" class="group-label">Position</label>
        <p class="card-text">Front Desk Receptionist</p>
        
      </div>
      <div class="col-sm-6 form-group">
        <label for="Date" class="group-label">Date Of Birth</label>
        <p class="card-text"> 01/05/1995</p>
        
      </div>
      <div class="col-sm-6 form-group">
        <label for="sex" class="group-label">Gender</label>
        <p class="card-text">Male</p>
        
      </div>
      <div class="col-sm-6 form-group">
        <label for="tel" class="group-label">Contact No.</label>
        <p class="card-text"> +1 123-456-7690</p>
       
      </div>

      <div class="col-sm-6 form-group">
        <label for="join" class="group-label">Joining Date:</label>
        <p class="card-text"> 12/07/2023</p>
       
      </div>

      <div class="col-sm-6 form-group">
        <label for="Sal" class="group-label">Salary</label>
        <p class="card-text"> 3000</p>
       
      </div>


    </div>
  </form>
</div>
    </form>
        </div>



@endsection