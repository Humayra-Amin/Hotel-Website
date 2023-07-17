@extends('room.layouts.app')


@section('app')
    


        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
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

                    <!-- Topbar Navbar -->
                    
                        </li>

                        

                </nav>
  
        

        <div class="container">
        <div class="row">
            
            <div class="col-md-12 d-flex align-items-center justify-content-between">
                <h2>Rooms</h2>
                <div class="d-flex align-items-center justify-content-between">
                    <form>
                    <div class="input-group">
                            <input type="text" class="form-control bg-light border-1 small" placeholder="Search a room"
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                    </div> 
                        
                        
                        <!-- <input type="text" placeholder="Search a room"> -->
                    </form>
                    <button class="btn btn-primary ml-3">
                        <i class="fa fa-plus"></i>
                        Add Room
                    </button>
                </div>
            </div>
            
            <div class="col-md-12">
                <div class="table-responsive-md mt-3">
                    <table class="table">
                        <thead>
                        <tr>
                        <th scope="row">
                        
                        <div class="form-check-left">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">
                            <label class="form-check-label" for="flexCheckIndeterminate"></label>
                        </div>
                        </th>
                        <th scope="col">Room No</th>
                        <th scope="col">Floor</th>
                        <th scope="col">Category</th>
                        <th scope="col">Price</th>
                        <th></th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <td scope="row">    
                            <div class="form-check-left">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">
                                <label class="form-check-label" for="flexCheckIndeterminate"></label>
                            </div>
                            </th>
                            <td >201</td>
                            <td>2nd floor</td>
                            <td>Single room</td>      
                            <td>1800 BDT</td>
                            <td class="text-right">
                                <button type="button" title="view" class="btn btn-outline-primary btn-eye"><i class="fa-solid fa-eye"></i></button>
                                <button type="button" title="edit" class="btn btn-outline-dark btn-pencil"><i class="fa-solid fa-pencil"></i></button>
                                <button type="button" title="delete" class="btn btn-outline-danger btn-trash"><i class="fa-solid fa-trash"></button></i>
                            </td>

                            </tr>
                            <tr>
                            <th scope="row">
                            <div class="form-check-left">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">
                                <label class="form-check-label" for="flexCheckIndeterminate"></label>
                            </div>
                            </th>
                            <td>202</td>
                            <td>2nd Floor</td>
                            <td>Double bed</td>
                            <td>3000 BDT</td>
                            <td class="text-right">
                                <button type="button" title="view" class="btn btn-outline-primary btn-eye"><i class="fa-solid fa-eye"></i></button>
                                <button type="button" title="edit" class="btn btn-outline-dark btn-pencil"><i class="fa-solid fa-pencil"></i></button>
                                <button type="button" title="delete" class="btn btn-outline-danger btn-trash"><i class="fa-solid fa-trash"></button></i>
                            </td>

                            </tr>
                            <tr>
                            <th scope="row">
                            <div class="form-check-left">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">
                                <label class="form-check-label" for="flexCheckIndeterminate"></label>
                            </div>
                            </th>
                            <td>203</td>
                            <td>2nd Floor</td>
                            <td>Double bed</td>
                            <td>2000 BDT</td>
                            <td class="text-right">
                                <button type="button" title="view" class="btn btn-outline-primary btn-eye"><i class="fa-solid fa-eye"></i></button>
                                <button type="button" title="edit" class="btn btn-outline-dark btn-pencil"><i class="fa-solid fa-pencil"></i></button>
                                <button type="button" title="delete" class="btn btn-outline-danger btn-trash"><i class="fa-solid fa-trash"></button></i>
                            </td>
                            </tr>
                            <tr>
                            <th scope="row">
                            <div class="form-check-left">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">
                                <label class="form-check-label" for="flexCheckIndeterminate"></label>
                            </div>
                            </th>
                            <td>204</td>
                            <td>2nd Floor</td>
                            <td>Deluxe Single Room</td>
                            <td>2000 BDT</td>
                            <td class="text-right">
                                <button type="button" title="view" class="btn btn-outline-primary btn-eye"><i class="fa-solid fa-eye"></i></button>
                                <button type="button" title="edit" class="btn btn-outline-dark btn-pencil"><i class="fa-solid fa-pencil"></i></button>
                                <button type="button" title="delete" class="btn btn-outline-danger btn-trash"><i class="fa-solid fa-trash"></button></i>
                            </td>
                            </tr>
                            <tr>
                            <th scope="row">
                            <div class="form-check-left">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">
                                <label class="form-check-label" for="flexCheckIndeterminate"></label>
                            </div>
                            </th>
                            <td>205</td>
                            <td>2nd Floor</td>
                            <td>Deluxe Double Room</td>
                            <td>1800 BDT</td>
                            <td class="text-right">
                                <button type="button" title="view" class="btn btn-outline-primary btn-eye"><i class="fa-solid fa-eye"></i></button>
                                <button type="button" title="edit" class="btn btn-outline-dark btn-pencil"><i class="fa-solid fa-pencil"></i></button>
                                <button type="button" title="delete" class="btn btn-outline-danger btn-trash"><i class="fa-solid fa-trash"></button></i>
                            </td>

                            </tr>
                            <tr>

                            <th scope="row">
                            <div class="form-check-left">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">
                                <label class="form-check-label" for="flexCheckIndeterminate"></label>
                            </div>
                            </th>
                            <td>301</td>
                            <td>3rd Floor</td>
                            <td>Deluxe Double Room</td>
                            <td>3500 BDT</td>
                            <td class="text-right">
                                <button type="button" title="view" class="btn btn-outline-primary btn-eye"><i class="fa-solid fa-eye"></i></button>
                                <button type="button" title="edit" class="btn btn-outline-dark btn-pencil"><i class="fa-solid fa-pencil"></i></button>
                                <button type="button" title="delete" class="btn btn-outline-danger btn-trash"><i class="fa-solid fa-trash"></button></i>
                            </td>
                            </tr>
                            <tr>
                            <th scope="row">
                            <div class="form-check-left">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">
                                <label class="form-check-label" for="flexCheckIndeterminate"></label>
                            </div>
                            </th>
                            <td>302</td>
                            <td>3rd floor</td>
                            <td>Single Room</td>
                            <td>3000 BDT</td>
                            <td class="text-right">
                                <button type="button" title="view" class="btn btn-outline-primary btn-eye"><i class="fa-solid fa-eye"></i></button>
                                <button type="button" title="edit" class="btn btn-outline-dark btn-pencil"><i class="fa-solid fa-pencil"></i></button>
                                <button type="button" title="delete" class="btn btn-outline-danger btn-trash"><i class="fa-solid fa-trash"></button></i>
                            </td>

                            </tr>
                            <tr>
                            <th scope="row">
                            <div class="form-check-left">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">
                                <label class="form-check-label" for="flexCheckIndeterminate"></label>
                            </div>
                            </th>
                            <td>302</td>
                            <td>3rd floor</td>
                            <td>Single Room</td>
                            <td>2000 BDT</td>
                            <td class="text-right">
                                <button type="button" title="view" class="btn btn-outline-primary btn-eye"><i class="fa-solid fa-eye"></i></button>
                                <button type="button" title="edit" class="btn btn-outline-dark btn-pencil"><i class="fa-solid fa-pencil"></i></button>
                                <button type="button" title="delete" class="btn btn-outline-danger btn-trash"><i class="fa-solid fa-trash"></button></i>
                            </td>

                            </tr>
                            <tr>
                            <th scope="row">
                            <div class="form-check-left">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">
                                <label class="form-check-label" for="flexCheckIndeterminate"></label>
                            </div>
                            </th>
                            <td>303</td>
                            <td>3rd floor</td>
                            <td>Single Room</td>
                            <td>1800 BDT</td>
                            <td class="text-right">
                                <button type="button" title="view" class="btn btn-outline-primary btn-eye"><i class="fa-solid fa-eye"></i></button>
                                <button type="button" title="edit" class="btn btn-outline-dark btn-pencil"><i class="fa-solid fa-pencil"></i></button>
                                <button type="button" title="delete" class="btn btn-outline-danger btn-trash"><i class="fa-solid fa-trash"></button></i>
                            </td>

                            </tr>
                            <tr>
                            <th scope="row">
                            <div class="form-check-left">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">
                                <label class="form-check-label" for="flexCheckIndeterminate"></label>
                            </div>
                            </th>
                            <td>304</td>
                            <td>3rd floor</td>
                            <td>Single Room</td>
                            <td>2000 BDT</td>
                            <td class="text-right">
                                <button type="button" title="view" class="btn btn-outline-primary btn-eye"><i class="fa-solid fa-eye"></i></button>
                                <button type="button" title="edit" class="btn btn-outline-dark btn-pencil"><i class="fa-solid fa-pencil"></i></button>
                                <button type="button" title="delete" class="btn btn-outline-danger btn-trash"><i class="fa-solid fa-trash"></button></i>
                            </td>

                            </tr>
                            <tr>
                            <th scope="row">
                            <div class="form-check-left">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">
                                <label class="form-check-label" for="flexCheckIndeterminate"></label>
                            </div>
                            </th>
                            <td>205</td>
                            <td>3rd floor</td>
                            <td>Single Room</td>
                            <td>1800 BDT</td>
                            <td class="text-right">
                                <button type="button" title="view" class="btn btn-outline-primary btn-eye"><i class="fa-solid fa-eye"></i></button>
                                <button type="button" title="edit" class="btn btn-outline-dark btn-pencil"><i class="fa-solid fa-pencil"></i></button>
                                <button type="button" title="delete" class="btn btn-outline-danger btn-trash"><i class="fa-solid fa-trash"></button></i>
                            </td>

                            </tr>
                        </tbody>
                    </table>
                </div>

                <nav aria-label="Page navigation example ">
                    <ul class="pagination justify-content-center mt-2 mb-4">
                        <li class="page-item disabled">
                            <a class="page-link">Previous</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        </div>


@endsection

    