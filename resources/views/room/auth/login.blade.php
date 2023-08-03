@extends('room.layouts.app')


@section('app')


            <div class="W3-container">
                <div class="row justify-content-center">
                <div class="col-md-5">
                    <div class="card bg-success-subtle text-emphasis-success ">
                    <h3 class="card-title text-center">Login </h3>
                    <div class="card-body ">
                        <form>
                        <div class="form-group d-flex ">
                            <input type="email" class="form-control" id="email" placeholder="Email">
                        </div>

                        <div class="form-group d-flex">
                            <input type="password" class="form-control" id="password" placeholder="Password">
                        </div>

                        <div class=" d-flex align-items-center justify-content-center ">

                            <button class="btn btn-primary button2">Login</button>



                        </div>

                        <a class=" d-flex align-items-center justify-content-center medium" href=#>Forget Password?</a>
                        <div class="d-flex align-items-center justify-content-center medium ">
                            <p>Don't have an Account? <a href="Register.html">Register</a></p>
                        </div>
                        </form>

            </div>
@endsection