{{-- <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>personal Information</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Signika' rel='stylesheet'>
    <link rel="stylesheet" href="{{asset('employees/auth/personalInfo.css')}}">
</head>
    
  <body> --}}
 @extends('customer.layouts.app')
 @section('app')
    


<div class="container-xl px-4 mt-4">
<div class="body-change">
    <div class="row g-0">
        <div class="col-xl-4">
            <div class="file-card mb-10 mb-xl-0">
                <div class="custom-card-header">Profile Picture</div>
                <div class="custom-card-body text-center">
                 
                    <div class=" files-img">
                      
                        <div class="imageWrapper">
                          <img class="image" src="http://via.placeholder.com/700x500">
                        </div>
                      </div>
                      <p class="text-center para ">ABC</p>
                    <button type="submit" class= "btn btn-primary upload-img">Upload new image</button>

                </div>
                <!-- <div class="small-12 large-4 columns">
    
                    <div class=" files-img">
                      
                      <div class="imageWrapper">
                        <img class="image" src="http://via.placeholder.com/700x500">
                      </div>
                    </div>
                    
                    <button class="file-upload">            
                      <input type="file" class="file-input">Choose File
                    </button>
                  </div> -->
            
                </div>
                
        </div>
        <div class="col-xl-8">

            <div class="file-card mb-4">
                <div class="custom-card-header">Personal Information</div>
                <div class="custom-card-body">
                    <form>

                        <div class="row gx-3 mb-3">

                            <div class="col-md-6">
                                <input class="form-control" id="inputFirstName" type="text" placeholder="First name" value="">
                            </div>

                            <div class="col-md-6">
                                <input class="form-control" id="inputLastName" type="text" placeholder="Last name" value="">
                            </div>

                        </div>

                        <div class="row gx-3 mb-3">

                            <div class="col-md-6">
                                <input class="form-control" id="inputEmailAddress" type="text" placeholder="Email Address" value="">
                            </div>

                            <div class="col-md-6">
                                <input class="form-control" id="inputPhoneNumber" type="text" placeholder="Phone Number" value="">
                            </div>

                        </div>

                        <div class="row gx-3 mb-3">

                            <div class="col-md-6">
                                <input class="form-control" id="inputZip" type="text" placeholder="Zip" value="">
                            </div>

                            <div class="col-md-6">
                                <input class="form-control" id="inputCountry" type="text" placeholder="Country" value="">
                            </div>

                        </div>

                        <div class="row gx-3 mb-3">

                            <div class="col-md-6">
                                <input class="form-control" id="inputState" type="text" placeholder="State" value="">
                            </div>

                            <div class="col-md-6">
                                <input class="form-control" id="inputCity" type="text" placeholder="City" value="">
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