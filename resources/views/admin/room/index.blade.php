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
                         <!-- Nav Item - User Information -->
                         <li class="nav-item dropdown no-arrow">
                            <a  class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>
                                <img class="img-profile rounded-circle"
                                    src="{{asset('image/undraw_profile.svg')}}">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">

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
                                    <a class="dropdown-item" href="admin/room/login">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Login
                                    </a>
                                    <a class="dropdown-item" href="admin/room/login">
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
                    <a class="btn btn-primary ml-3" href="/admin/room/add">
                        <i class="fa fa-plus"></i>
                         Add Room 
                    </a>
                </div>
            </div>
            
            <div class="col-md-12 customize-fonts table-line">
                <div class="table-responsive-md mt-3">
                    <table class="table">
                        <thead>
                        <tr>
                    
                        <th class=col-md-2>Room no</th>
                        <th class=col-md-2>Room Title</th>
                        <th class=col-md-2>Floor No</th>
                
                        <th class=col-md-2>Price</th>
                        <th class=col-md-2></th>
                        </tr>
                        </thead>
                        <tbody>


                            
                    @foreach ($rooms as $room)
        

                            <tr>
                                <td>{{$room->roomno}}</td>  
                                <td>{{$room->roomtitle}}</td>  
                                <td>{{$room->floorno}}</td>
                                {{-- <td>{{$room->category_id}}</td>     --}}
                                <td>{{$room->price}}</td>  
                                <td class="text-center">
                                <a href="/admin/room/{{$room->id}}" title="view" class="btn btn-outline-primary btn-eye"><i class="fa-solid fa-eye"></i></a>
                                <a href="/admin/room/{{$room->id}}/edit/" title="edit" class="btn btn-outline-dark btn-pencil"><i class="fa-solid fa-pencil"></i></a>
                                <form action="/admin/room/{{$room->id}}/delete/" method="DELETE">
                                <button type="submit" title="delete" class="btn btn-outline-danger btn-trash"><i class="fa-solid fa-trash"></i></button>
                                </form>
                            </td>

                             </tr>
                            

                        @endforeach
                        </tbody>
                    </table>
                </div>

                {{-- <div class="pagination justify-content center mt-2 mb-2">
                    <button class="btn-nav left-btn">
                      
                    </button>
                    <div class="page-numbers">
                      <button class="btn-page">1</button>
                      <button class="btn-page">2</button>
                      <button class="btn-page btn-selected">3</button>
                      <button class="btn-page">4</button>
                      <button class="btn-page">5</button>
                      <button class="btn-page">6</button>
                      <span class="dots">...</span>
                      <button class="btn-page">23</button>
                    </div>
                    <button class="btn-nav right-btn">
                      
                    </button>
                  </div> --}}
                  <div>
                    <ul class="pagination rounded-circle justify-content-center mt-2 mb-4">
                      <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                      <li class="page-item"><a class="page-link" href="#">1</a></li>
                      <li class="page-item"><a class="page-link" href="#">2</a></li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                      <li class="page-item"><a class="page-link" href="#">4</a></li>
          
                      <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                    </ul>
                </div>
{{-- 
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
                </nav> --}}
            </div>
        </div>
        </div>


@endsection

    