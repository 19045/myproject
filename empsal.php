<!DOCTYPE html>
<html lang="en">
<?php
session_start();
$idd=$_SESSION['userId'];
?>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Three Star</title>
    <link rel="icon" href="assets/img/head-logo.png" type="image/x-icon" />
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <div class="input-group">
            </div>
        </form>
      
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="../login.php">Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading"></div>
                        <a class="nav-link" href="eindex.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>
                        <a class="nav-link" href="empsal.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            View salary
                        </a>
                        <a class="nav-link" href="empview.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Your details
                        </a>
                        <a class="nav-link" href="leavedet.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            View Leave application
                        </a>
                        
                        <a class="nav-link" href="leave.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Apply Leave
                        </a>
                    </div> 
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <center>
                    <h1>Salary details </h1>
                </center>
                <?php
                include("connect.php");
                $m = "SELECT * FROM `tbl_empsalary` WHERE u_id='$idd'";
                $sql = mysqli_query($con, $m);
                if (mysqli_num_rows($sql) > 0) {

                    echo ('<div class="card mb-6">
    <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                            
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Date</th>
                                            <th>Basic Salary</th>
                                            <th>Bonus</th>
                                            <th>Special Allowance</th>
                                            <th>Rent Allowance</th>
                                            <th>Total</th>
                                            <th>Salary Reciept</th>
                                            </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Date</th>
                                        <th>Basic Salary</th>
                                        <th>Bonus</th>
                                        <th>Special Allowance</th>
                                        <th>Rent Allowance</th>
                                        <th>Total</th>
                                        
                                        </tr>
                                        </tr>
                                    </tfoot>
                   
                                    <tbody>');
                    while ($row = mysqli_fetch_array($sql)) {
                        echo ("
                                                <tr>
                                                <td>" . $row['id'] . "</td>
                                                <td>" . $row['name'] . "</td>
                                                <td>" . $row['date'] . "</td>
                                                <td>" . $row['basic_salary'] . "</td>
                                                <td>" . $row['bonus'] . "</td>
                                                <td>" . $row['Special_allowance'] . "</td>
                                                <td>" . $row['rent_allowance'] . "</td>
                                                <td>" . $row['total'] . "</td>
                                                <td><a href='reciept.php?pid2=" . $row['id'] . "'>Print</a></td>"
                                               
                                                
                                            );

                        echo ("
                                                </tr>
                                            ");
                    }
                    echo ('</tbody>
                                </table>');
                }
                ?>
        </div>
    </div>
    </div>
    </main>
    <footer class="py-4 bg-light mt-auto">
        <div class="container-fluid px-4">
            <div class="d-flex align-items-center justify-content-between small">
                <div class="text-muted">Copyright &copy; Three star 2021</div>
            </div>
        </div>
    </footer>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
</body>
</html>