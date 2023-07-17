
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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
   
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
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/dashboard">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Hotel Management</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="/dashboard">
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
