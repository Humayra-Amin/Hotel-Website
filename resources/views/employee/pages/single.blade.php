@extends('employee.layouts.app')

@section('content')

    
<div class=container>
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
</div>

@endsection



