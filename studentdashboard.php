<?php
include ('security.php');
include ('message.php');

if (isset($_SESSION['user_type']) && $_SESSION['user_type'] === 'student') {
    $firstName = $_SESSION['first_name'];
    $lastName = $_SESSION['last_name'];
    $email = $_SESSION['email'];
    $age = $_SESSION['age'];
} else {
    // Redirect to login page if not logged in
    header("Location: index.php");
    exit;
}
?> 
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CIS Students  - Dashboard</title>

    <!-- Custom fonts for this template-->
    <!-- <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
        <link rel="stylesheet" href="CIS.css">
    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
   

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion nav nav-tabs" id="dashboardTabs" role="tablist">
        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-left justify-content-left" href="index.html">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-laugh-wink text-dark-400"></i>
            </div>
            <div class="sidebar-brand-text mx-3">CIS Student</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">
        <li class="nav-item active">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active" role="presentation">
            <a class="nav-link " id="courses-tab" data-bs-toggle="tab" data-bs-target="#courses" type="button" role="tab" aria-controls="courses" aria-selected="true">
                <i class="fas fa-book"></i> Courses
            </a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="teachers-tab" data-bs-toggle="tab" data-bs-target="#teachers" type="button" role="tab" aria-controls="teachers" aria-selected="false">
                <i class="fa-solid fa-chalkboard-user"></i> Teachers
            </a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="assignments-tab" data-bs-toggle="tab" data-bs-target="#assignments" type="button" role="tab" aria-controls="assignments" aria-selected="false">
                <i class="fas fa-tasks"></i> Assignments
            </a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="results-tab" data-bs-toggle="tab" data-bs-target="#results" type="button" role="tab" aria-controls="results" aria-selected="false">
                <i class="fas fa-fw fa-chart-area"></i> Results
            </a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">Addons</div>

        <!-- Nav Item - Pages Collapse Menu -->
       
        <!-- Nav Item - Logout -->
        <li class="nav-item">
            <a class="nav-link" data-toggle="modal" data-target="#logoutModal">
                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                <span>Logout</span>
            </a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>
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

                 
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 7, 2019</div>
                                        $290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li>

                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- Counter - Messages -->
                                <span class="badge badge-danger badge-counter">7</span>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Message Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_1.svg"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                            problem I've been having.</div>
                                        <div class="small text-gray-500">Emily Fowler · 58m</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_2.svg"
                                            alt="...">
                                        <div class="status-indicator"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">I have the photos that you ordered last month, how
                                            would you like them sent to you?</div>
                                        <div class="small text-gray-500">Jae Chun · 1d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_3.svg"
                                            alt="...">
                                        <div class="status-indicator bg-warning"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Last month's report looks great, I am very happy with
                                            the progress so far, keep up the good work!</div>
                                        <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                            told me that people say this to all dogs, even if they aren't good...</div>
                                        <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                                <?php
                                echo $_SESSION['first_name'];
                                ?> 

                                </span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
        
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <div>
                    <h1>Welcome, <?php echo  $firstName; ?>!</h1>
                        <p>Age: 16 | Nationality: Nigerian | State of Origin: Lagos</p>
                    </div>
                            <!-- <a class="d-none d-sm-inline-block btn btn-sm btn-warning shadow-sm" 
                            data-toggle="modal" data-target="#makePaymentModal">
                                <i class="fas fa-download fa-sm text-white-50"></i> Make Payment
                            </a> -->
                            <a href="pay.php" class="d-none d-sm-inline-block btn btn-sm btn-warning shadow-sm"  aria-label="Login">
                            <i class="fas fa-download fa-sm text-white-50"></i> Make payment
                                </a>

                            
                    </div>

    <!-- Tab Navigation -->
    <div class="container mt-8 my-4">
        
        <!-- Tab Content -->
        <div class="tab-content" id="dashboardTabContent">
            <div class="tab-pane fade show active" id="courses" role="tabpanel" aria-labelledby="courses-tab">
                <div class="dashboard-section">
                    <h3>Courses</h3>
                    <ul class="list-group">
                        <li class="list-group-item">Mathematics</li>
                        <li class="list-group-item">Physics</li>
                        <li class="list-group-item">Computer Science</li>
                        <li class="list-group-item">Biology</li>
                        <li class="list-group-item">English Literature</li>
                    </ul>
                </div>
            </div>
            <div class="tab-pane fade" id="teachers" role="tabpanel" aria-labelledby="teachers-tab">
                <div class="dashboard-section">
                    <h3>Teachers</h3>
                    <ul class="list-group">
                        <li class="list-group-item">Mr. Smith - Mathematics</li>
                        <li class="list-group-item">Mrs. Johnson - Physics</li>
                        <li class="list-group-item">Dr. Brown - Computer Science</li>
                        <li class="list-group-item">Ms. Davis - Biology</li>
                        <li class="list-group-item">Mr. Wilson - English Literature</li>
                    </ul>
                </div>
            </div>
            <div class="tab-pane fade" id="assignments" role="tabpanel" aria-labelledby="assignments-tab">
                <div class="dashboard-section">
                    <h3>Assignments</h3>
                    <ul class="list-group">
                        <li class="list-group-item">Math Homework: Due 20th Dec</li>
                        <li class="list-group-item">Physics Lab Report: Due 22nd Dec</li>
                        <li class="list-group-item">CS Project: Due 25th Dec</li>
                        <li class="list-group-item">Biology Essay: Due 28th Dec</li>
                    </ul>
                </div>
            </div>
            <div class="tab-pane fade" id="results" role="tabpanel" aria-labelledby="results-tab">
                <div class="dashboard-section">
                    <h3>Results</h3>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Subject</th>
                                <th>Grade</th>
                                <th>Remarks</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Mathematics</td>
                                <td>A</td>
                                <td>Excellent</td>
                            </tr>
                            <tr>
                                <td>Physics</td>
                                <td>B+</td>
                                <td>Good</td>
                            </tr>
                            <tr>
                                <td>Computer Science</td>
                                <td>A+</td>
                                <td>Outstanding</td>
                            </tr>
                            <tr>
                                <td>Biology</td>
                                <td>B</td>
                                <td>Average</td>
                            </tr>
                            <tr>
                                <td>English Literature</td>
                                <td>A</td>
                                <td>Great</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
    </div>
        </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2024</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <form action="code.php" method="POST">
             <button type ="submit" name="logout" class="btn btn-primary">Yes</button>
             </form>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="makePaymentModal" tabindex="-1" role="dialog" aria-labelledby="makePaymentModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                
                <div class="modal-body">
                <form class="form" id="paymentForm">
                        <p class="title">Make Payment</p>
                        <div class="flex">
                                <label>
                                    <i class="fas fa-user"></i>
                                    <input class="input" type="text" placeholder="" id="Fname" required="">
                                    <span>Firstname</span>
                                </label>
                            <label>
                                <i class="fas fa-user"></i>
                                <input class="input" type="text" placeholder="" id="Lname" required="">
                                <span>Lastname</span>
                            </label>
                        </div> 
                       
                        <label>
                            <i class="fas fa-envelope"></i>
                            <input class="input" type="email" placeholder="" id="email" required="">
                            <span>Email</span>
                        </label>
                    
                        <label>
                            <i class="fas fa-user"></i>
                            <input class="input" type="text" placeholder="" id="Session" required="">
                        <span>Session</span>
                        </label>
                    <div class="flex">
                            <label>
                                <i class="fas fa-user"></i>
                                <!-- <input class="input" type="text" placeholder="" id="Fname" required=""> -->
                                <select id="Term" class="input" >
                                    <option >Select Term</option>
                                    <option value="1st">1ST Term</option>
                                    <option value="2nd">2ND Term</option>
                                    <option value="3rd">3RD</option>
                                </select>
                                <!-- <span>Select Term</span> -->
                            </label>
                        
                        <label>
                            <i class="fas fa-user"></i>
                            <select class="input" id="amount">
                                <option>Select Class</option>
                                        <option value="20000">Nusery 1</option>
                                        <option value="20000">Nusery 2</option>
                                        <option value="25000">Pri 1</option>
                                        <option value="25000">Pri 2</option>
                                        <option value="25000">Pri 3</option>
                                        <option value="25000">Pri 4</option>
                                        <option value="25000">Pri 5</option>
                                        <option value="30000">JSS 1</option>
                                        <option value="30000">JSS 2</option>
                                        <option value="30000">JSS 3</option>
                                        <option value="35000">SSS 1</option>
                                        <option value="35000">SSS 2</option>
                                        <option value="60000">SSS 3</option>
                            </select>
                            
                            <!-- <span>Session</span> -->
                        </label>
                    </div>     
                        <button class="submit" onclick="payWithPaystack()">Pay</button>
                       
                      
                    </form>
                </div>
            </div>
        </div>

    <!-- Bootstrap core JavaScript-->
    <script >
        const paymentForm = document.getElementById('paymentForm');
paymentForm.addEventListener("submit", payWithPaystack, false);
function payWithPaystack(e) {
  e.preventDefault();

  let handler = PaystackPop.setup({
    key: 'pk_test_ab1fdfb1aa9798bf126fa9a1629f26a2b38ff7f5', // Replace with your public key
    email: document.getElementById("email-address").value,
    amount: document.getElementById("amount").value * 100,
    currency: 'NGN',
    ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
    // label: "Optional string that replaces customer email"
    onClose: function(){
      alert('Window closed.');
    },
    callback: function(response){
      let message = 'Payment complete! Reference: ' + response.reference;
      alert(message);
    }
  });

  handler.openIframe();
}
    </script>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

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

</html>