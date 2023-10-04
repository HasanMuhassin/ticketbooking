<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vijaya Theater Admin</title>

    <link rel="stylesheet" href="css/show_edit.css">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <!-- css for icon-->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    
</head>

<body>

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class='bx bxs-camera-movie'></i>
                </div>
                <div class="sidebar-brand-text mx-3">VIJAYA <sup>THEATER</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class='bx bxs-home-alt-2'></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="movie-admin.php">
                    <i class='bx bxs-movie'></i>
                    <span>Movie Management</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="show-admin.php">
                    <i class='bx bxs-movie-play'></i>
                    <span>show Management</span>
                </a>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Booking Management</span>
                </a>

            </li>
            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="user.php">
                    <i class='bx bxs-user-account'></i>
                    <span>User Management</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
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


                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <div class="moive-add-title">
                            <h1 class="addtitle">EDIT SHOW DETAILS</h1>
                        </div>
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Vijaya theater</span>
                                <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i> Logout
                                </a>
                            </div>
                        </li>
                    </ul>
                </nav>
                <!-- End of Topbar -->

<!-- Modal -->
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
<?php
$connection= mysqli_connect("localhost","root","","vijaya_theater");
if(isset($_POST['adedit-btn']))
{
    $id = $_POST['edit_id'];
    $query = "SELECT * FROM  show_table WHERE show_id='$id'";
    $query_run=mysqli_query($connection,$query);

    foreach($query_run as $row)
    {
        ?>                                         
                    <div class="add-show">
                        <div class="add-smovie">
                            <h1 class="moive-name">Select Movie Categories</h1>
                            <select name="show-type" id="showti" required>
                                <option value="<?php echo $row['categories'];?>" selected> Main movie</option>
                                <option value="<?php echo $row['categories'];?>"> Now Showing</option>
                            </select>
                            <h1 class="moive-name">Movie Name</h1>
                            <select name="addshow-movielist" id="showmovie" size="1" >
                                <option value="<?php echo $row['movie_name'];?>"></option>
                                <option value="<?php echo $row['movie_name'];?>"></option>
                                <option value="<?php echo $row['movie_name'];?>"></option>
                                <option value="<?php echo $row['movie_name'];?>"></option>
                                <option value="<?php echo $row['movie_name'];?>"></option>
                                <option value="<?php echo $row['movie_name'];?>"></option>
                                <option value="<?php echo $row['movie_name'];?>"></option>
                                <option value="<?php echo $row['movie_name'];?>"></option>
                                <option value="<?php echo $row['movie_name'];?>"></option>
                                <option value="<?php echo $row['movie_name'];?>"></option>
                            </select>
                            <div id="date1">
                                <h1 class="moive-name">Movie Show Date</h1>
                                <input name="showdate" value="<?php echo $row['start_date'];?>" type="text" class="movie-d1" required>
                            </div>
                            <div class="show-time">
                                <legend>Show Time</legend>
                                <div class="check1">
                                    <input type="checkbox" value="<?php echo $row['show_time'];?>" name="showtime" id="t1">
                                    <label for="t1" class="t1">First show 8.00 AM</label>
                                    <input type="checkbox" value="<?php echo $row['show_time'];?>" name="showtime" id="t2">
                                    <label for="t2" class="t1">Second show 2.00 PM</label>
                                </div>
                                <div class="check2">
                                    <input type="checkbox" value="<?php echo $row['show_time'];?>" name="showtime" id="t3">
                                    <label for="t3" class="t1">Third show 6.30 PM</label>
                                    <input type="checkbox" value="<?php echo $row['show_time'];?>" name="showtime" id="t4">
                                    <label for="t4" class="t1">Last show 9.30 PM</label>
                                </div>
                                <a href="user.php" class="btn_can">
                                    <button>Cancel</button>
                                </a>
                                <button type="submit" class="btn_update">Update</button>
                            </div>                                                                                                                                   
                        </div>
                    </div>
        <?php
    }
}

?>
                </div>          
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

            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    </body>

</html>