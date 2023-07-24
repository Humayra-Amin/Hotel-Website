
@extends('employee.layouts.app')

@section('content')

<div class="row">
         
        <div class="col-md-12 d-flex align-items-center justify-content-between">
                 <h2>Employee</h2>
            <div class="d-flex align-items-center justify-content-between">
                <form>
                <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                aria-label="Search" aria-describedby="basic-addon2">
                </form>
                <button class="btn btn-outline-dark ml-2">
                    <i class="fa fa-plus"></i>
                    Add Employee
                </button>
            </div>
        </div>
</div>
        
         
         <div class="col-md-12">
            <table class="table">
                <thead>
                <tr>
                <th scope="col ">
                <div class="form-check">
                
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
                </div>
                <tbody>

                @foreach ($employees as $employee)
                    <tr>
                    <th scope="row">    
                    <div class="form-check-left">
                        <!-- <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate"> -->
                        <label class="form-check-label" for="flexCheckIndeterminate"></label>
                    </div>
                    </th>
                    <td>{{$employee->id}}</td>
                    <td>Fardin</td>
                    <td>Farabi</td>
                    <td>01 January</td>
                    <td>Accountent</td>
                    <td>fardin@gmail.com</td>
                    <td>017202736</td>     
                    <!-- <td><button type="button" class="btn btn-dark">Show Price</td> -->
                    <td>
                    <td class="text-right">
                            <button type="button" title="view" class="btn btn-outline-primary btn-eye"><i class="fa-solid fa-eye"></i></button>
                            <button type="button" title="edit" class="btn btn-outline-dark btn-pencil"><i class="fa-solid fa-pencil"></i></button>
                            <button type="button" title="delete" class="btn btn-outline-danger btn-trash"><i class="fa-solid fa-trash"></button></i>
                        </td>
                    </tr>
                
                    @endforeach
                   
                </tbody>
            </table>
            <nav aria-label="Page navigation example ">
                <ul class="pagination justify-content-center mt-2 mb-4">
                    <li class="page-item disabled">
                        <a class="page-link"><<</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">>></a>
                    </li>
                </ul>
            </nav>
         </div>
</div>






@endsection