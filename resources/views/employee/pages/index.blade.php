
@extends('employee.layouts.app')

@section('content')

<div class="row">
         
        <div class="col-md-12 d-flex align-items-center justify-content-between">
            <h2>Employee</h2>
            <div class="d-flex align-items-center justify-content-between">
                <form>
                <button class="btn btn-primary ml-2">
                    <input type="text" placeholder="Search a employee">
                </form>
                <button class="btn btn-primary ml-2">
                    <i class="fa fa-plus"></i>
                    Add Employee
                </button>
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
                <th scope="col">Position</th>
                <th scope="col">Email</th>
                <th scope="col">Contact</th>
                <th></th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row">    
                    <div class="form-check-left">
                        <!-- <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate"> -->
                        <label class="form-check-label" for="flexCheckIndeterminate"></label>
                    </div>
                    </th>
                    <td>001</td>
                    <td>Fardin</td>
                    <td>Farabi</td>
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
                    <tr>
                    <th scope="row">
                    <div class="form-check right">
                        <!-- <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate"> -->
                        <!-- <label class="form-check-label" for="flexCheckIndeterminate"></label> -->
                    </div>
                    </th>
                    <td>002</td>
                    <td>Safayet</td>
                    <td>Hossain</td>
                    <td>Assistent Manager</td>
                    <td>Safayet@gmail.com</td>
                    <td>01829821975</td>
                    <!-- <td><button type="button" class="btn btn-dark">Show Price</td> -->
                    <td>
                    <td class="text-right">
                            <button type="button" title="view" class="btn btn-outline-primary btn-eye"><i class="fa-solid fa-eye"></i></button>
                            <button type="button" title="edit" class="btn btn-outline-dark btn-pencil"><i class="fa-solid fa-pencil"></i></button>
                            <button type="button" title="delete" class="btn btn-outline-danger btn-trash"><i class="fa-solid fa-trash"></button></i>
                        </td>
                   </tr>
                    <tr>
                    <th scope="row">
                    <div class="form-check-left">
                        <!-- <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate"> -->
                        <label class="form-check-label" for="flexCheckIndeterminate"></label>
                    </div>
                    </th>
                    <td>003</td>
                    <td>Momen</td>
                    <td>Hoque</td>
                    <td>Manager</td>
                    <td>hoque@gmail.com</td>
                    <td>01776789627</td>
                    <!-- <td><button type="button" class="btn btn-dark">Show Price</td> -->
                    <td>
                    <td class="text-right">
                            <button type="button" title="view" class="btn btn-outline-primary btn-eye"><i class="fa-solid fa-eye"></i></button>
                            <button type="button" title="edit" class="btn btn-outline-dark btn-pencil"><i class="fa-solid fa-pencil"></i></button>
                            <button type="button" title="delete" class="btn btn-outline-danger btn-trash"><i class="fa-solid fa-trash"></button></i>
                        </td>
                    </tr>
                    <tr>
                    <th scope="row">
                    <div class="form-check-left">
                        <!-- <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate"> -->
                        <label class="form-check-label" for="flexCheckIndeterminate"></label>
                    </div>
                    </th>
                    <td>004</td>
                    <td>Jubair</td>
                    <td>Hrid</td>
                    <td>Receptionist</td>
                    <td>hraid@gmail.com</td>
                    <td>01929789620</td>
                    <!-- <td><button type="button" class="btn btn-dark">Show Price</td> -->
                    <td>
                    <td class="text-right">
                            <button type="button" title="view" class="btn btn-outline-primary btn-eye"><i class="fa-solid fa-eye"></i></button>
                            <button type="button" title="edit" class="btn btn-outline-dark btn-pencil"><i class="fa-solid fa-pencil"></i></button>
                            <button type="button" title="delete" class="btn btn-outline-danger btn-trash"><i class="fa-solid fa-trash"></button></i>
                        </td>
                    </tr>
                    <tr>
                    <th scope="row">
                    <div class="form-check-left">
                        <!-- <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate"> -->
                        <label class="form-check-label" for="flexCheckIndeterminate"></label>
                    </div>
                    </th>
                    <td>005</td>
                    <td>Rakibul</td>
                    <td>Khan</td>
                    <td>Security</td>
                    <td>khan@gmail.com</td>
                    <td>01629769627</td>
                    <!-- <td><button type="button" class="btn btn-dark">Show Price</td> -->
                    <td>
                    <td class="text-right">
                            <button type="button" title="view" class="btn btn-outline-primary btn-eye"><i class="fa-solid fa-eye"></i></button>
                            <button type="button" title="edit" class="btn btn-outline-dark btn-pencil"><i class="fa-solid fa-pencil"></i></button>
                            <button type="button" title="delete" class="btn btn-outline-danger btn-trash"><i class="fa-solid fa-trash"></button></i>
                        </td>
                     </tr>
                    <tr>

                    <th scope="row">
                    <div class="form-check-left">
                        <!-- <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate"> -->
                        <label class="form-check-label" for="flexCheckIndeterminate"></label>
                    </div>
                    </th>
                    <td>006</td>
                    <td>Noky</td>
                    <td>Ali</td>
                    <td>Room Service</td>
                    <td>noky@gmail.com</td>
                    <td>018789557</td>
                    <!-- <td><button type="button" class="btn btn-dark">Show Price</td> -->
                    <td>
                    <td class="text-right">
                            <button type="button" title="view" class="btn btn-outline-primary btn-eye"><i class="fa-solid fa-eye"></i></button>
                            <button type="button" title="edit" class="btn btn-outline-dark btn-pencil"><i class="fa-solid fa-pencil"></i></button>
                            <button type="button" title="delete" class="btn btn-outline-danger btn-trash"><i class="fa-solid fa-trash"></button></i>
                        </td>
                    </tr>
                    <tr>
                    <th scope="row">
                    <div class="form-check-left">
                        <!-- <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate"> -->
                        <label class="form-check-label" for="flexCheckIndeterminate"></label>
                    </div>
                    </th>
                    <td>007</td>
                    <td>shakil</td>
                    <td>Barua</td>
                    <td>Accountent</td>
                    <td>iqbal@gmail.com</td>
                    <td>0199789627</td>
                    <!-- <td><button type="button" class="btn btn-dark">Show Price</td> -->
                    <td>
                    <td class="text-right">
                            <button type="button" title="view" class="btn btn-outline-primary btn-eye"><i class="fa-solid fa-eye"></i></button>
                            <button type="button" title="edit" class="btn btn-outline-dark btn-pencil"><i class="fa-solid fa-pencil"></i></button>
                            <button type="button" title="delete" class="btn btn-outline-danger btn-trash"><i class="fa-solid fa-trash"></button></i>
                        </td>
                     </tr>
                    <tr>
                    <th scope="row">
                    <div class="form-check-left">
                        <!-- <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate"> -->
                        <label class="form-check-label" for="flexCheckIndeterminate"></label>
                    </div>
                    </th>
                    <td>008</td>
                    <td>Antu</td>
                    <td>Baura</td>
                    <td>Room Service</td>
                    <td>antu@gmail.com</td>
                    <td>01729782796</td>
                    <!-- <td><button type="button" class="btn btn-dark">Show Price</td> -->
                    <td>
                    <td class="text-right">
                            <button type="button" title="view" class="btn btn-outline-primary btn-eye"><i class="fa-solid fa-eye"></i></button>
                            <button type="button" title="edit" class="btn btn-outline-dark btn-pencil"><i class="fa-solid fa-pencil"></i></button>
                            <button type="button" title="delete" class="btn btn-outline-danger btn-trash"><i class="fa-solid fa-trash"></button></i>
                        </td>
                       </tr>
                    <tr>
                    <th scope="row">
                    <div class="form-check-left">
                        <!-- <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate"> -->
                        <label class="form-check-label" for="flexCheckIndeterminate"></label>
                    </div>
                    </th>
                    <td>009</td>
                    <td>Rubel</td>
                    <td>khan</td>
                    <td>Janitor</td>
                    <td>Rubel@gmail.com</td>
                    <td>01757789627</td>
                    <!-- <td><button type="button" class="btn btn-dark">Show Price</td> -->
                    <td>
                    <td class="text-right">
                            <button type="button" title="view" class="btn btn-outline-primary btn-eye"><i class="fa-solid fa-eye"></i></button>
                            <button type="button" title="edit" class="btn btn-outline-dark btn-pencil"><i class="fa-solid fa-pencil"></i></button>
                            <button type="button" title="delete" class="btn btn-outline-danger btn-trash"><i class="fa-solid fa-trash"></button></i>
                        </td>

                    </tr>
                    
                    </tr>
                </tbody>
            </table>
            <nav aria-label="Page navigation example ">
                <ul class="pagination justify-content-center mt-2 mb-4">
                    <li class="page-item disabled">
                        <a class="page-link"><</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">></a>
                    </li>
                </ul>
            </nav>
         </div>
      </div>


@endsection