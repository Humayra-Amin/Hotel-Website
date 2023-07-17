@extends('employee.layouts.app')

@section('content')



    <form class="well form-horizontal ms-end custom-form" action=" " method="post"  id="contact_form">
<fieldset>

<!-- Form Name -->
<legend><center><h2><b>Employee Edit</b></h2><h4><b>Edit Your Details Below</b></h4></center></legend><br>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label">Employee Id</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="employee_id" placeholder="" class="form-control"  type="text">
    </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">First Name</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="first_name" placeholder="" class="form-control"  type="text">
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >Last Name</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="last_name" placeholder="" class="form-control"  type="text">
    </div>
  </div>
</div>

  <div class="form-group"> 
  <label class="col-md-4 control-label">Position</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
    <select name="department" class="form-control selectpicker">
      <option value="">Change your Position</option>
      <option>Manager</option>
      <option>Assistant Manager</option>
      <option >Officer</option>
      <option >Receptionist</option>
      <option >Security</option>
      <option >Room Service</option>
      <option >Janitor</option>
    </select>
  </div>
</div>
</div>
  

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label">E-Mail</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
  <input name="email" placeholder="" class="form-control"  type="text">
    </div>
  </div>
</div>


<!-- Text input-->
       
<div class="form-group">
  <label class="col-md-4 control-label">Contact Info</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
  <input name="contact_no" placeholder="" class="form-control" type="text">
    </div>
  </div>
</div>

<!-- Select Basic -->
<form id="file-upload-form" action="<?php echo $_SERVER['PHP_SELF'] ?>">
	<input id="file-upload" type="file" name="fileUpload" />
	<label for="file-upload" id="file-drag">
		Select a file to upload
		<br />OR
		<br />Drag a file into this box
		
		<br /><br /><span id="file-upload-btn" class="button">Add a file</span>
	</label>
	
	<progress id="file-progress" value="0">
		<span>0</span>%
	</progress>
	
	<output for="file-upload" id="messages"></output>
</form>
<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4 d-flex flex-column"><br>
    <button type="submit" class="btn btn-warning" > SUBMIT <span class="glyphicon glyphicon-send"></span></button>
  </div>
</div>
  </fieldset>
    </form>
        </div>
         

          @endsection