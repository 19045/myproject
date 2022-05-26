<!DOCTYPE html>
<html>
<?php
session_start();
$bs=$_session['bs'];
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
<style>
.customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 90%;
  margin-top:100px;
  margin-left:70px;
  

}

.customers td, .customers th {
  border: 1px solid #ddd;
  padding: 8px;
}



.customers tr:nth-child(even){background-color: #f2f2f2;}

.customers tr:hover {background-color: #ddd;}

.customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  
}
.button3 {width: 100%;}
</style>
</head>
<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a href="index.php"><img height="100px" width="250px" class="logo mt-3 ml-3" src="three star.jpg"></a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <div class="input-group">
            </div>
        </form>
        <!-- Navbar-->
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
                        <a class="nav-link" href="index.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>
                        <a class="nav-link" href="display.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Manage users
                        </a>
                        <a class="nav-link" href="addproduct.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Insert product
                        </a>
                        <a class="nav-link" href="sales_history.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Sales History
                        </a>
                        <a class="nav-link" href="#.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Manage Employees
                        </a>
                    </div>
                </div>
            </nav>
        </div>
<center>
<h1>Salary Entry</h1>
</center>
<form action="#" method="post">
                    <table id='customers' class='customers'>
                        <tr>
                            <th>Name</th>
                            <th>Date</th>
                            <th>Basic Salary</th>
                            <th>Bonus</th>
                            <th>Special Allowance</th>
                            <th>Rent Allowance</th>
                        </tr>
<?php
                include("connect.php");
                $m = "SELECT * FROM `tbl_empdet`";
                $sql = mysqli_query($con, $m);
         
                while($row=mysqli_fetch_array($sql)) 
                { ?>
                  
                    <tr>
                        <td><input type=" " name="firstname" value="<?php echo $row["first_name"]; ?>"></td>
                        <td><input type="date" name="date" id="date"></td>
                        <td><input type="text" name="bs" id="bs"></td>
                        <td><input type="text" name="bo" id="bo"></td>
                        <td><input type="text" name="sp"  id="sp"></td>
                        <td><input type="text" name="rent" id="rent"></td>
                    </tr>
                    <?php 
                    }
 ?>
    </table><br>
   
    <button class="button3" type="submit" name="proceed" value="Submit">Submit</button>
                </form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
</body>
</html>
<?php
include 'connect.php';
if (isset($_POST['proceed'])) 
{
    $name = $_POST['firstname'];
    $date = $_POST['date'];
    $basic = $_POST['bs'];
    $bonus = $_POST['bo'];
    $special = $_POST['sp'];
    $rent = $_POST['rent'];
    
    $sql="INSERT INTO `tbl_empsalary`(`name`, `date`, `basic_salary`, `bonus`, `Special_allowance`, `rent_allowance`) VALUES ('$name','$date','$basic','$bonus','$special','$rent')"; 
    $result=mysqli_query($con,$sql);
    if ($result) 
    {
        echo "<script>alert('Success..');
        
        </script>";
    }
}

?>


