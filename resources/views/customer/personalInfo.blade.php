@extends('customer.layouts.apps')
@section('apps')
    
 @include('admin.inc.message')


<div class="container-xl complex px-4 mt-4">
 <div class="body-change">
    <div class="row g-0">
        <div class="col-xl-4">
            <div class="file-card mb-10 mb-xl-0">
                <div class="custom-card-header">Profile Picture
                </div>
                <div class="custom-card-body text-center">
                 
                    <div class=" files-img">
                      
                        <div class="imageWrapper">
                          <img class="image-info" src="http://via.placeholder.com/700x500">
                        </div>
                      </div>
                      <p class="text-center para">ABC</p>
                    {{-- <button type="file" class= "btn btn-primary upload-img">Upload new image</button> --}}
                    <button class="file-upload">            
                        <input type="file" class="file-input">Upload Image</button>
                </div>
            </div>
                
        </div>
        <div class="col-xl-8">

            <div class="file-card mb-4">
                <div class="custom-card-header">Personal Information</div>
                <div class="custom-card-body">
                    <form>

                        <div class="row gx-3 mb-3">

                            <div class="col-md-6">
                                <input class="personalform-control" id="inputFirstName" type="text" placeholder="First name" value="">
                            </div>

                            <div class="col-md-6">
                                <input class="personalform-control" id="inputLastName" type="text" placeholder="Last name" value="">
                            </div>

                        </div>

                        <div class="row gx-3 mb-3">

                            <div class="col-md-6">
                                <input class="personalform-control" id="inputEmailAddress" type="text" placeholder="Email Address" value="">
                            </div>

                            <div class="col-md-6">
                                <input class="personalform-control" id="inputPhoneNumber" type="text" placeholder="Phone Number" value="">
                            </div>

                        </div>

                        <div class="row gx-3 mb-3">

                            <div class="col-md-6">
                                <input class="personalform-control" id="inputZip" type="text" placeholder="Zip" value="">
                            </div>

                            <div class="col-md-6">
                                <input class="personalform-control" id="inputCountry" type="text" placeholder="Country" value="">
                            </div>

                        </div>

                        <div class="row gx-3 mb-3">

                            <div class="col-md-6">
                                <input class="personalform-control" id="inputState" type="text" placeholder="State" value="">
                            </div>

                            <div class="col-md-6">
                                <input class="personalform-control" id="inputCity" type="text" placeholder="City" value="">
                            </div>
                        </div>
                        
                        <button class="btn btn-primary" type="button">Save Details</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
 </div>
</div>
  {{-- </body>
</html> --}}
@endsection