<!DOCTYPE html>
<html>
<?php
session_start();
echo $id=$_GET['pid'];
$idd=$_SESSION['uid']=$id;
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
.head{
    margin-top:80px;

    
}
.customers{

    margin-right: -106px;
    margin-left: 248px;
}
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
                        <a class="nav-link" href="empdet.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Enter Employees Details
                        </a>
                        <a class="nav-link" href="empdis.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Display Employees Details
                        </a>
                        <a class="nav-link" href="empsal.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Add employee salary
                        </a>
                        <a class="nav-link" href="saldis.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Display salary details
                        </a>
                        <a class="nav-link" href="sales_history.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Sales History
                        </a>
                        <a class="nav-link" href="#.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Manage Employees
                        </a>
                        <a class="nav-link" href="leave.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Employee Leave Apply
                        </a>
                    </div>
                </div>
            </nav>
        </div>

<form action="#" method="post">
<center>
<h1 class="head">Salary Entry</h1>
</center>
                    <table id='customers' class='customers'>
                        <tr>
                 
                        <th>Name</th>
                            <th>Date</th>
                            <th>Basic Salary</th>
                            <th>Bonus</th>
                            <th>Special Allowance</th>
                            <th>Rent Allowance</th>
                          
                            <!-- <th>Rent Allowance</th> -->
                        </tr>
<?php
                include("connect.php");
                $m = "SELECT * FROM `tbl_empdet` where id= $id";
                $sql = mysqli_query($con, $m);
                $count=1;
                $row=mysqli_fetch_array($sql)
                ?>
                  
                    <tr>
                     
                        <td><input type=" " name="firstname" value="<?php echo $row["first_name"]; ?>"></td>
                        <td><input type="date" name="date" onkeypress="return isnum(event)" required id="date"></td>
                        <td><input type="text" name="bs" maxlength="4" onkeypress="return isnum(event)" required id="bs"></td>
                        <td><input type="text" name="bo" maxlength="4" onkeypress="return isnum(event)" required id="bo"></td>
                        <td><input type="text" name="sp" maxlength="4" onkeypress="return isnum(event)" required  id="sp"></td>
                        <td><input type="text" name="rent" onkeypress="return isnum(event)" id="rent" onchange="totalSal();"></td>
                       

                    
                    </tr>
                    <tr>
                        <td style="border:none;"></td>
                        <td style="border:none;"></td>
                        <td style="border:none;"></td>
                        <td style="border:none;"></td>
                        <th>Grand Total</th>
                        <td><input type="text" name="total" id="total" readonly></td>
                     </tr>
                     <tr><td style="border:none;"></td>
                        <td style="border:none;"></td>
                        <td style="border:none;"></td>
                        <td style="border:none;"></td>
                        <td style="border:none;"></td>
                        <td><button type="submit" class="button3"  name="proceed">Save</button></td>
                    </tr>
                    
                    <?php 
                  
                    
 ?>
    </table><br>
   
   
                </form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
    <script>
        function totalSal()
        {
            let bs = Number(document.getElementById("bs").value);
            let bo = Number(document.getElementById("bo").value);
            let sp = Number(document.getElementById("sp").value);
            let rent = Number(document.getElementById("rent").value);
            let tot = parseInt(bs+bo+sp+rent);
            document.getElementById("total").value=tot;
        }

    </script>
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
    $total=$_POST['total'];
    $sql="INSERT INTO `tbl_empsalary`(`u_id`,`name`, `date`, `basic_salary`, `bonus`, `Special_allowance`, `rent_allowance`,`total`) VALUES ('$id','$name','$date','$basic','$bonus','$special','$rent','$total')"; 
    $result=mysqli_query($con,$sql);

    if ($result) 
    {
        echo "<script>alert('Success..');
        
        </script>";
    }

    $sql2="UPDATE `tbl_empdet` SET status= 0 WHERE first_name = '$name' ";
    mysqli_query($con,$sql2);
   
}

?> 
<script>
        function redirect() {
            window.location = "login.php";
        }

        function isalph(evt) {
            var charCode = (evt.which) ? evt.which : event.keyCode
            if ((charCode == 32) || (charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123))
                return true;
            return false;
        }

        function isnum(evt) {
            var charCode = (evt.which) ? evt.which : event.keyCode
            if (charCode > 31 && (charCode < 48 || charCode > 57))
                return false;
            return true;
        }
    </script>


