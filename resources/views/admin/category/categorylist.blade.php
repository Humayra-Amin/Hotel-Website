@extends('admin.layouts.app')
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
                <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                  <div class="input-group">
                     <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                     <div class="input-group-append">
                        <button class="btn btn-primary" type="button">
                             <i class="fas fa-search fa-sm"></i>
                         </button>
                    </div>
                  </div>
                </form>
                   <!-- Topbar Navbar -->
                   <!-- Nav Item - User Information -->
                   <li class="nav-item dropdown no-arrow">
                       <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>
                          <img class="img-profile rounded-circle" src="{{asset('image/undraw_profile.svg')}}">
                       </a>
                         <!-- Dropdown - User Information -->
                         <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">

                          @auth
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                 Profile
                            </a>
                            <a class="dropdown-item" href="#">
                                 <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                 Settings
                            </a>
                                    
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                 <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Logout
                            </a>
                          @else
                            <a class="dropdown-item" href="room/login">
                                 <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                 Login
                            </a>
                            <a class="dropdown-item" href="room/login">
                                 <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                 Login
                            </a>
                           @endauth
                         </div>
                        </li>   
                    </nav>

        <div class="container">
        <div class="row">
        @include('admin.inc.message')


            <div class="col-md-12 d-flex align-items-center justify-content-between">
                <h2 class="category-fonts-title mx-3">CATEGORIES</h2>
                <div class="d-flex align-items-center justify-content-between">
                    <form>
                    <div class="input-group">
                            <input type="text" class="form-control bg-light border-1 small" placeholder="Search a room category"
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                    </div> 
                        
                        
                        <!-- <input type="text" placeholder="Search a room"> -->
                    </form>
                    <a class="btn btn-primary ml-3 category-fonts-title" href="/admin/category/categorylist">
                        <i class="fa fa-plus"></i>
                         Add Room Categories
                    </a>
                </div>
            </div>
            
            <div class="col-md-12 category-fonts">
                <div class="table-responsive-md mt-3">
                    <table class="table table-group">
                        <thead>
                        <tr>
                        <th class="line-gap">Category No</th>
                        <th class="line-gap">Category Name</th>
                        <th class="line-gap"></th>
                        </tr>
                        </thead>
                        <tbody>
                          @foreach ($categories as $category)
                            <tr>
                                <td>{{$category->id}}</td>
                                <td>{{$category->categoryname}}</td>
                                <td class="text-center">
<<<<<<< HEAD
                                 <a href="/admin/category/{{$category->id}}/edit/" title="edit" class="btn btn-outline-dark btn-pencil"><i class="fa-solid fa-pencil"></i></a>
                                 <button type="button" title="delete" class="btn btn-outline-danger btn-trash"><i class="fa-solid fa-trash"></button></i>
=======
                                 <button type="button" title="edit" class="btn btn-outline-dark btn-pencil"><i class="fa-solid fa-pencil"></button></i>
                                 <a href="/admin/{{$category->id}}/delete/" title="delete" class="btn btn-outline-danger btn-trash"><i class="fa-solid fa-trash"></i></a>
>>>>>>> 6695c8430cfa3ce12f9a3687a8187c71bc85f14e
                                 </td>
                              </tr>
                           @endforeach
                              {{-- <tr>
                                <td>2</td>
                                <td>DULUXE DOUBLE SUITS</td>
                                <td class="text-center">
                                 <button type="button" title="edit" class="btn btn-outline-dark btn-pencil"><i class="fa-solid fa-pencil"></button></i>
                                 <button type="button" title="delete" class="btn btn-outline-danger btn-trash"><i class="fa-solid fa-trash"></button></i>
                                 </td>
                              </tr>
                              <tr>
                                <td>3</td>
                                <td>EXECUTIVE TWIN SUITS</td>
                                <td class="text-center">
                                 <button type="button" title="edit" class="btn btn-outline-dark btn-pencil"><i class="fa-solid fa-pencil"></button></i>
                                 <button type="button" title="delete" class="btn btn-outline-danger btn-trash"><i class="fa-solid fa-trash"></button></i>
                                 </td>
                              </tr>
                              <tr>
                                <td>4</td>
                                <td>SINGLE SUITS</td>
                                <td class="text-center">
                                 <button type="button" title="edit" class="btn btn-outline-dark btn-pencil"><i class="fa-solid fa-pencil"></button></i>
                                 <button type="button" title="delete" class="btn btn-outline-danger btn-trash"><i class="fa-solid fa-trash"></button></i>
                                 </td>
                              </tr>
                              <tr>
                                <td>5</td>
                                <td>PERMIUM SUITS</td>
                                <td class="text-center">
                                 <button type="button" title="edit" class="btn btn-outline-dark btn-pencil"><i class="fa-solid fa-pencil"></button></i>
                                 <button type="button" title="delete" class="btn btn-outline-danger btn-trash"><i class="fa-solid fa-trash"></button></i>
                                 </td>
                              </tr>
                              <tr>
                                <td>6</td>
                                <td>QUEEN SUITS</td>
                                <td class="text-center">
                                 <button type="button" title="edit" class="btn btn-outline-dark btn-pencil"><i class="fa-solid fa-pencil"></button></i>
                                 <button type="button" title="delete" class="btn btn-outline-danger btn-trash"><i class="fa-solid fa-trash"></button></i>
                                 </td>
                              </tr> --}}
                            </tbody>
                        </table>



             
                  {{-- <div>
                    <ul class="pagination rounded-circle justify-content-center mt-2 mb-4">
                      <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                      <li class="page-item"><a class="page-link" href="#">1</a></li>
                      <li class="page-item"><a class="page-link" href="#">2</a></li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                      <li class="page-item"><a class="page-link" href="#">4</a></li>
          
                      <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                    </ul>
                </div> --}}

            </div>
        </div>
        </div>


@endsection

    