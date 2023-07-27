@extends('employee.layouts.app')

@section('content')

    
<div class=container>
<h2 class="group-h2">Employee Details</h2><br><br><br>
<div class= "row">
<div class="col-md-6 mt-4 mb-2">
<div class="slider">

    <div>
    <img src="{{asset('employees/images/JR.jpg')}}" class="d-block w-50" >  
    </div>
</div>

</div>

<div class="col-md-6 group-fonts">
<div class="employee-details mt-4 mb-2">

<h2 class="group-h2">Jason Roy</h2>
                <p>Employee Id: 234</p>
                <p>Position: Manager</p>
                <p>email:Jasonroy10@gmail.com</p>
                <p>Present Address: House no: 10</p>
                <p>Gender: Male</p>
                <p>Joining Date: 12/02/2023</p>
                <p>Phone: +123 456 7890</p>
</div>
</div>
</div>



@endsection



