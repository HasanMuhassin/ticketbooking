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

    <link rel="stylesheet" href="css/admin-movie.css">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
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
                <a class="nav-link collapsed" href="admin-booking.php">
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
            <hr class="sidebar-divider">
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
                            <h1 class="addtitle">MOVIE DETAILS</h1>
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
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Add Movie Detail</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="moviebd.php" method="POST" class="movie-detail">
                    <div class="modal-body">
                        <div class="movie-book">
                            <div class="add-movie">                        
                                <div class="mc">
                                    <h3 class="movie-name">Select Movie Categorie</h3>
                                    <select id="moviet" name="categorie" required>
                                        <option value="Main movie" selected> Main movie</option>
                                        <option value="Now Showing"> Now Showing</option>
                                        <option value="Up coming movie"> Up coming movie</option>
                                        <option value="Populer movie"> Populer movie</option>
                                    </select>
                                </div>
                                <div class="movieline1">
                                    <div class="mname">
                                        <input type="text" name="name" class="moive-name" placeholder="Movie Name" required>
                                    </div>
                                    <div class="mgender">
                                    <input type="text" name="gender" class="moive-gender" placeholder="Gender" required>
                                    </div>
                                </div>
                                    <div class="mtext">
                                        <input type="text" name="about" class="moive-about" placeholder="About" required>
                                    </div>
                                <div class="movieline2">
                                    <div class="mdir">
                                        <input type="text" name="dir" class="moive-director" placeholder="Director" required>
                                    </div>
                                <div class="mlan">
                                    <input type="text" name="lang" class="moive-languages" placeholder="Languages" required>
                                </div>
                            </div>
                            <div class="movieline3">
                                <div class="mrt">
                                    <input type="text" name="run" class="moive-runtime" placeholder="Run time" required>
                                </div>
                                <div class="mgre">
                                    <input type="text" name="rele" class="moive-release" placeholder="Release Date" required>
                                </div>
                            </div>
                            <div class="movieline4">
                                <div class="mimg">
                                    <input type="file" name="img" class="moive-image" placeholder="Movie Image" required>
                                </div>
                                <div class="mtra">
                                    <input type="text" name="tra" class="moive-trailer" placeholder="Movie trailer link" required>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" name="movieadd" class="btn btn-primary">Add Movie</button>
                            </div>                           
                        </div>
                </form> 
            </div>
        </div>                                   
    </div>       
    </div>
</div>           
                



<div class="admin-movie">
<?php
        if(isset($_SESSION['success']) && $_SESSION['success'] !='')
        {
            echo '<h2>'.$_SESSION['success'].'</h2>';
            unset($_SESSION['success']);
        }       
    ?>
    <div class="movie-add">
            <div class="add-moviebtn">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Add Movie
                </button>
            </div>
            <div class="movie-detail-table">
            <?php
            $connection= mysqli_connect("localhost","root","","vijaya_theater");

            $query = "SELECT * FROM movie";
            $query_run = mysqli_query($connection, $query);

            ?>
                <div class="movieadmin-add">
                    <table class="table">
                        <thead>
                        <tr class="table-head">
                            <th scope="col">ID</th>
                            <th scope="col">Title</th>
                            <th scope="col">Categorie</th>
                            <th scope="col">Gender</th>
                            <th scope="col">About</th>
                            <th scope="col">Director</th>
                            <th scope="col">Languages</th>
                            <th scope="col">Run_Time</th>
                            <th scope="col">Release_date</th>
                            <th scope="col">Image</th>
                            <th scope="col">trailer</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        if(mysqli_num_rows($query_run)> 0)
                        {
                                while($row= mysqli_fetch_assoc($query_run))
                                {
                        ?>
                        <tr class="table-data">
                            <td><?php echo $row['movie_id'];?></td>
                            <td><?php echo $row['movie_name'];?></td>
                            <td><?php echo $row['categorie'];?></td>
                            <td><?php echo $row['gender'];?></td>
                            <td><?php echo $row['about'];?></td>
                            <td><?php echo $row['director'];?></td>
                            <td><?php echo $row['language'];?></td>
                            <td><?php echo $row['runtime'];?></td>
                            <td><?php echo $row['release_date'];?></td>
                            <td><?php echo $row['image'];?></td>
                            <td><?php echo $row['video_url'];?></td>
                            <td>
                            <form action="movie_edit.php" method="POST">
                            <input type="hidden" name="edit_id" value="<?php echo $row['movie_id'];?>">
                            <button type="submit" class="addm-btn" name="adedit-btn">
                                Edit
                            </button>
                        </form>  
                            <td>
                                <button type="submit" class="dem-btn">
                                    Delete
                                </button>                   
                            </td>
                        </tr>
                        <?php
                                }
                        }
                        else
                        {
                            echo "No Record Found";
                        }

                        ?>

                        </tbody>
                    </table>
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

        <!-- Custom styles for this template-->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>



</body>

</html>