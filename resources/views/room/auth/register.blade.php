@extends('room.layouts.app')

@section('app')

            <div class="W3-container">
                  <div class="row justify-content-center ">
                  <div class="col-md-5 ">
                  <div class="card bg-success-subtle text-emphasis-success">
                     <h2 class="card-title text-center">Register </h2>
                  <div class="card-body">
                        <form>
                           <div class="form-group">
                              <input type="text" class="form-control" id="name" placeholder="Name">
                           </div>
                           <div class="form-group">
                              <input type="email" class="form-control" id="email" placeholder="Email">
                           </div>
                                             
                               
                         <div class="form-group">
                             <input type="password" class="form-control" id="password" placeholder="Password">
                        </div>
                         <div class="form-group">
                             <input type="password" class="form-control" id="confirm-password" placeholder="Confirm Password">
                        </div>
                         <div class="text-center">
                     
                                    <button class="btn btn-primary button5">Create New Account</button>                              
                          
                           </div>
                           <div class="d-flex align-items-center justify-content-center small">
                              <p>Already have an Account? <a href="Login.html">Login</a></p>
                           </div>
   
   
                          </form>
                      </div>
@endsection