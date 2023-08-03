@extends('room.layouts.app')


@section('app')
    




       

            <!-- Main Content -->
            <div id="content">

                    <!-- Topbar -->
                    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                       <form
                            class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                            <div class="input-group">
                                <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                    aria-label="Search" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="button">
                                        <i class="fas fa-search fa-sm"></i>
                                    </button>
                                </div>
                            </div>
                        </form>

                       </nav> 
  
        

        <div class="container">
        <div class="row">
            
            <div class="col-md-12 d-flex align-items-center justify-content-between">
                <h2>Employee</h2>

                @include('employee.inc.message')

                <div class="d-flex align-items-center justify-content-between">
                    <form>
                    <div class="input-group">
                            <input type="text" class="form-control bg-light border-1 small" placeholder="Search a room"
                                aria-label="Search" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                <button class="btn btn-dark" type="button">
                                <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                    </div> 
                </form>
                    <a class="btn btn-outline-dark ml-2" href="/employee/add">
                    <i class="fa fa-plus"></i>
                    Add Employee
                    </a>
                </div>
            </div>
            
            <div class="col-md-12 customize-fonts">
                <div class="table-responsive-md mt-3">
                    <table class="table">
                        <thead>
                        <tr>
                        <th scope="row">
                        
                        <div class="form-check-left">
                            <!-- <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate"> -->
                            <label class="form-check-label" for="flexCheckIndeterminate"></label>
                        </div>
                        </th>
                        <th scope="col"> Id </th>
                <th scope="col">First Name</th>
                <th scope="col">last Name</th>
                <th scope="col">Joining</th>
                <th scope="col">Position</th>
                <th scope="col">Email</th>
                <th scope="col">Contact</th>
                <th></th>
                 
                        </tr>
                        </thead>
                        <tbody>


                            
                        @foreach ($employees as $employee)
        

                            <tr>
                                <td scope="row">    
                                <div class="form-check-left">
                                    <label class="form-check-label" for="flexCheckIndeterminate"></label>
                                </div>
                              </th>

                         <td>{{$employee->eid}}</td>
                    <td>{{$employee->fname}}</td>
                    <td>{{$employee->lname}}</td>
                    <td>{{$employee->joiningdate}}</td>
                    <td>{{$employee->position}}</td>
                    <td>{{$employee->email}}</td>
                    <td>{{$employee->phone}}</td>  
                              
                                <td class="text-right">
                                <span> <button type="button" title="view" class="btn btn-outline-primary btn-eye"><i class="fa-solid fa-eye"></i></button></span>
                                <span> <button type="button" title="edit" class="btn btn-outline-dark btn-pencil"><i class="fa-solid fa-pencil"></i></button></span>
                                <span> <button type="button" title="delete" class="btn btn-outline-danger btn-trash"><i class="fa-solid fa-trash"></button></i></span>
                                </td>

                          </tr>
                            <!-- <tr>
                            <td>00012</td>
                    <td>fardin</td>
                    <td>farabi</td>
                    <td>02 january 23</td>
                    <td>manager</td>
                    <td>farabi@gmail.com</td>
                    <td>>018394363</td> 
                    <td class="text-right">
                                <span> <button type="button" title="view" class="btn btn-outline-primary btn-eye"><i class="fa-solid fa-eye"></i></button></span>
                                <span> <button type="button" title="edit" class="btn btn-outline-dark btn-pencil"><i class="fa-solid fa-pencil"></i></button></span>
                                <span> <button type="button" title="delete" class="btn btn-outline-danger btn-trash"><i class="fa-solid fa-trash"></button></i></span>
                                </td>
                                 </tr>
                             -->

                        @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="pagination justify-content center mt-2 mb-2">
                   
                  </div>
                  <div>
                    <ul class="pagination rounded-circle justify-content-center mt-2 mb-4">
                      <li class="page-item"><a class="page-link" href="#">&Lang;</a></li>
                      <li class="page-item"><a class="page-link" href="#">1</a></li>
                      <li class="page-item"><a class="page-link" href="#">2</a></li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                      <li class="page-item"><a class="page-link" href="#">4</a></li>
                      <li class="page-item"><a class="page-link" href="#">&Rang;</a></li>
                    </ul>
                </div>

    
            </div>
        

@endsection

    