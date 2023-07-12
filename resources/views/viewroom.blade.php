<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>
<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Hotel Management</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Hotel Rooms</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Components:</h6>
                        <a class="collapse-item" href="buttons.html">View room</a>
                        <a class="collapse-item" href="cards.html">Add room</a>
                        <a class="collapse-item" href="cards.html">Edit room</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Employee</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Utilities:</h6>
                        <a class="collapse-item" href="utilities-color.html">View Employee list</a>
                        <a class="collapse-item" href="utilities-border.html">Add Employee</a>
                        <a class="collapse-item" href="utilities-animation.html">Edit Employee</a>
                       
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            

        </ul>
        <!-- End of Sidebar -->

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
         <br>
         <h1></h1>
         <h2 class="col-md-12 text-center">Hotel Rooms</h2><br>
         <br>
         <div class="col-md-12">
         <table class="table">
      <thead>
      <tr>
      <th scope="col">
      <div class="form-check">
           <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">
           <label class="form-check-label" for="flexCheckIndeterminate"></label>
      </div>
      </th>
      <th scope="col">Room No</th>
      <th scope="col">Floor</th>
      <th scope="col">Category</th>
      <th scope="col">Price</th>
      <th colspan=3 scope="col">Edit</th>
   </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">    
      <div class="form-check">
           <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">
          <label class="form-check-label" for="flexCheckIndeterminate"></label>
      </div>
      </th>
      <td>201</td>
      <td>2nd floor</td>
      <td>Single room</td>      
      <td><button type="button" class="btn btn-dark">Show Price</td>
      <td><button type="button" class="btn btn-eye"><i class="fa-solid fa-eye"></i></button></td>
      <td><button type="button" class="btn btn-pencil"><i class="fa-solid fa-pencil"></i></button></td>
      <td><button type="button" class="btn btn-trash"><i class="fa-solid fa-trash"></button></i></td>

    </tr>
    <tr>
      <th scope="row">
      <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">
          <label class="form-check-label" for="flexCheckIndeterminate"></label>
      </div>
      </th>
      <td>202</td>
      <td>2nd Floor</td>
      <td>Double bed</td>
      <td><button type="button" class="btn btn-dark">Show Price</td>
      <td><button type="button" class="btn btn-eye"><i class="fa-solid fa-eye"></i></button></td>
      <td><button type="button" class="btn btn-pencil"><i class="fa-solid fa-pencil"></i></button></td>
      <td><button type="button" class="btn btn-trash"><i class="fa-solid fa-trash"></button></i></td>

    </tr>
    <tr>
      <th scope="row">
      <div class="form-check">
           <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">
          <label class="form-check-label" for="flexCheckIndeterminate"></label>
      </div>
      </th>
      <td>203</td>
      <td>2nd Floor</td>
      <td>Double bed</td>
      <td><button type="button" class="btn btn-dark">Show Price</td>
      <td><button type="button" class="btn btn-eye"><i class="fa-solid fa-eye"></i></button></td>
      <td><button type="button" class="btn btn-pencil"><i class="fa-solid fa-pencil"></i></button></td>
      <td><button type="button" class="btn btn-trash"><i class="fa-solid fa-trash"></button></i></td>
    </tr>
    <tr>
      <th scope="row">
      <div class="form-check">
           <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">
          <label class="form-check-label" for="flexCheckIndeterminate"></label>
      </div>
      </th>
      <td>204</td>
      <td>2nd Floor</td>
      <td>Deluxe Single Room</td>
      <td><button type="button" class="btn btn-dark">Show Price</td>
      <td><button type="button" class="btn btn-eye"><i class="fa-solid fa-eye"></i></button></td>
      <td><button type="button" class="btn btn-pencil"><i class="fa-solid fa-pencil"></i></button></td>
      <td><button type="button" class="btn btn-trash"><i class="fa-solid fa-trash"></button></i></td>
    </tr>
    <tr>
      <th scope="row">
      <div class="form-check">
           <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">
          <label class="form-check-label" for="flexCheckIndeterminate"></label>
      </div>
      </th>
      <td>205</td>
      <td>2nd Floor</td>
      <td>Deluxe Double Room</td>
      <td><button type="button" class="btn btn-dark">Show Price</td>
      <td><button type="button" class="btn btn-eye"><i class="fa-solid fa-eye"></i></button></td>
      <td><button type="button" class="btn btn-pencil"><i class="fa-solid fa-pencil"></i></button></td>
      <td><button type="button" class="btn btn-trash"><i class="fa-solid fa-trash"></button></i></td>

    </tr>
    <tr>

      <th scope="row">
      <div class="form-check">
           <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">
          <label class="form-check-label" for="flexCheckIndeterminate"></label>
      </div>
      </th>
      <td>301</td>
      <td>3rd Floor</td>
      <td>Deluxe Double Room</td>
      <td><button type="button" class="btn btn-dark">Show Price</td>
      <td><button type="button" class="btn btn-eye"><i class="fa-solid fa-eye"></i></button></td>
      <td><button type="button" class="btn btn-pencil"><i class="fa-solid fa-pencil"></i></button></td>
      <td><button type="button" class="btn btn-trash"><i class="fa-solid fa-trash"></button></i></td>
    </tr>
    <tr>
      <th scope="row">
      <div class="form-check">
           <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">
          <label class="form-check-label" for="flexCheckIndeterminate"></label>
      </div>
      </th>
      <td>302</td>
      <td>3rd floor</td>
      <td>Single Room</td>
      <td><button type="button" class="btn btn-dark">Show Price</td>
      <td><button type="button" class="btn btn-eye"><i class="fa-solid fa-eye"></i></button></td>
      <td><button type="button" class="btn btn-pencil"><i class="fa-solid fa-pencil"></i></button></td>
      <td><button type="button" class="btn btn-trash"><i class="fa-solid fa-trash"></button></i></td>

    </tr>
    <tr>
      <th scope="row">
      <div class="form-check">
           <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">
          <label class="form-check-label" for="flexCheckIndeterminate"></label>
      </div>
      </th>
      <td>302</td>
      <td>3rd floor</td>
      <td>Single Room</td>
      <td><button type="button" class="btn btn-dark">Show Price</td>
      <td><button type="button" class="btn btn-eye"><i class="fa-solid fa-eye"></i></button></td>
      <td><button type="button" class="btn btn-pencil"><i class="fa-solid fa-pencil"></i></button></td>
      <td><button type="button" class="btn btn-trash"><i class="fa-solid fa-trash"></button></i></td>

    </tr>
    <tr>
      <th scope="row">
      <div class="form-check">
           <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">
          <label class="form-check-label" for="flexCheckIndeterminate"></label>
      </div>
      </th>
      <td>303</td>
      <td>3rd floor</td>
      <td>Single Room</td>
      <td><button type="button" class="btn btn-dark">Show Price</td>
      <td><button type="button" class="btn btn-eye"><i class="fa-solid fa-eye"></i></button></td>
      <td><button type="button" class="btn btn-pencil"><i class="fa-solid fa-pencil"></i></button></td>
      <td><button type="button" class="btn btn-trash"><i class="fa-solid fa-trash"></button></i></td>

    </tr>
    <tr>
      <th scope="row">
      <div class="form-check">
           <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">
          <label class="form-check-label" for="flexCheckIndeterminate"></label>
      </div>
      </th>
      <td>304</td>
      <td>3rd floor</td>
      <td>Single Room</td>
      <td><button type="button" class="btn btn-dark">Show Price</td>
      <td><button type="button" class="btn btn-eye"><i class="fa-solid fa-eye"></i></button></td>
      <td><button type="button" class="btn btn-pencil"><i class="fa-solid fa-pencil"></i></button></td>
      <td><button type="button" class="btn btn-trash"><i class="fa-solid fa-trash"></button></i></td>

    </tr>
    <tr>
      <th scope="row">
      <div class="form-check">
           <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">
          <label class="form-check-label" for="flexCheckIndeterminate"></label>
      </div>
      </th>
      <td>305</td>
      <td>3rd floor</td>
      <td>Single Room</td>
      <td><button type="button" class="btn btn-dark">Show Price</td>
      <td><button type="button" class="btn btn-eye"><i class="fa-solid fa-eye"></i></button></td>
      <td><button type="button" class="btn btn-pencil"><i class="fa-solid fa-pencil"></i></button></td>
      <td><button type="button" class="btn btn-trash"><i class="fa-solid fa-trash"></button></i></td>

    </tr>
  </tbody>
</table>
         </div>
      </div>
    </div>

    
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>
  </body>
</html>