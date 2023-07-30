@extends('employee.layouts.app')

@section('content')

    
<!-- <div class=container>
<h2 class="group-h2">Employee Details</h2><br><br><br>
<div class= "row">
<div class="col-md-6 mt-4 mb-2">
<div class="slider">

@foreach ($employee->image as $img)
                    <img src='{{Storage::disk("public")->url($img)}}' class="d-block w-50">
                @endforeach

</div>
</div>

<div class="col-md-6 group-fonts">
<div class="employee-details mt-4 mb-2">

<h2 class="group-h2">Jason Roy</h2>
                <p>Employee Id: {{$employee->employeeid}}</p>
                <p>Position: {{$employee->position}}</p>
                <p>email:{{$employee->email}}</p>
                <p>Present Address: {{$employee->presentaddress}}</p>
                <p>Gender: {{$employee->gender}}</p>
                <p>Joining Date: {{$employee->joiningdate}}</p>
                <p>Phone: {{$employee->phone}}</p>
</div>
</div>
</div> -->



      <h2 class="CCC" style="color: black;">Employee Details</h2>
      <div class="group-container mt-3">
        <div class="group-card-text">
        </div>
          <div class="row">
            <div class="col-12">
            </div>
           

            <div class="im col-4">
            <div class="slider">
            @foreach ($employee->image as $image)
                    <img src='{{Storage::disk("public")->url($image)}}' class="image">     
                @endforeach
                <h2 class="group-card-title">Jason Roy</h2>
                </div>
            </div>


            <div class="col-3 bbb fs-5 ">
                <b class="label">First Name :{{$employee->employeefirstname}}</b>
                <p class="card-text">Jason</p>

                <b class="label">Date of Birth :{{$employee->employeedateofbirth}}</b>
                <p class="card-text"> 01/05/1995</p>
    
                <b class="label">Position:{{$employee->employeeposition}}</b>
                <p class="card-text">Front Desk Receptionist</p>
    
                <b  class="label">Present Address :{{$employee->employeepresentaddress}}</b>
                <p class="card-text" >House no-30,Flo Rida,USA</p>
    
                <b  class="label">Gender:{{$employee->employeegender}}</b>
                <p class="card-text">Male</p>
    
                <b  class="label">Contact No :{{$employee->employeecontactno}}</b>
                <p class="card-text"> +1 123-456-7690</p>
                
                
            </div>

            

            <div class="col-3 aaa fs-5">
      
              
                <b  class="label"> Last Name :{{$employee->employeelastname}}</b>
                <p class="card-text">Roy</p>

                <b  class="label">Employee Id:{{$employee->employeeemployeeid}}</b>
                <p class="card-text">234</p>
    
                <b  class="label">Joining Date :{{$employee->employeejoiningdate}}</b>
                <p class="card-text"> 12/07/2023</p>
    
                <b  class="label">Salary :{{$employee->employeesalary}}</b>
                <p class="card-text"> 3000</p>
    
                <b  class="label">Email :{{$employee->employeeemail}}</b>
                <p class="card-text">JasonRoy@gmail.com</p>
                       
                <b  class="label">Input Nid :{{$employee->employeeinputnid}}</b>
                <p class="card-text">234567</p>              
                
                
            </div>

           
        
        </div>
    
          
        </div>
    
    
    
    




@endsection



