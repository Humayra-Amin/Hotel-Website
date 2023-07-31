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
                <h2 class="group-card-title">{{$employee->employeetitle}}</h2>
                </div>
            </div>


            <div class="col-3 bbb fs-5 ">
                <h2 class="label">First Name :{{$employee->fname}}</h2>

                <h2 class="label">Date of Birth :{{$employee->dob}}</h2>
    
                <h2 class="label">Position:{{$employee->position}}</h2>
    
                <h2 class="label">Present Address :{{$employee->Locality}}</h2>
    
                <h2 class="label">Gender:{{$employee->sex}}</h2>
    
                <h2 class="label">Contact No :{{$employee->phone}}</h2>
                
                
            </div>

            

            <div class="col-3 aaa fs-5">
      
              
                <h2 class="label"> Last Name :{{$employee->lname}}</h2>

                <h2  class="label">Employee Id:{{$employee->eid}}</h2>
    
                <h2  class="label">Joining Date :{{$employee->joiningdate}}</h2>
    
                <h2  class="label">Salary :{{$employee->salary}}</h2>
    
                <h2  class="label">Email :{{$employee->email}}</h2>
                       
                <h2  class="label">Input Nid :{{$employee->nid}}</h2>
                
                
            </div>

           
        
        </div>
    
          
        </div>
    
    
@endsection



