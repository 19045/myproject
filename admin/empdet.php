<html>

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="./registration.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <style>
        h1 {
            padding-bottom: 10px;
        }

        table,
        th,
        td {
            border: 1px solid black;
        }
        body {font-family: Arial, Helvetica, sans-serif;}
.{box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.class3{
    margin-left:12px;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
  margin-left:12px;
}
    </style>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Three Star Hollow and Solid Bricks</title>
    <link rel="icon" href="assets/img/head-logo.png" type="image/x-icon" />
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
    </head>
<body class="sb-nav-fixed">

    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a href="index.php"><img height="130px" width="200px" class="logo mt-3 ml-3" src="three star.jpg"></a>
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
                            Manage Users
                        </a>
                        <a class="nav-link" href="addproduct.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Insert products
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
                        <a class="nav-link" href="leave.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Employee Leave Apply
                        </a>
                        <a class="nav-link" href="reciept.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Salary Reciept
                        </a>
                    </div>
                </div>
            </nav>
        </div>
        <div class="container">
        <center>
      <h1>Add Employee details</h1>

    </center>
  <form  method="post" class="class3">
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" onkeypress="return isalph(event)" placeholder="Your name.." required>

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" onkeypress="return isalph(event)" placeholder="Your last name.." required>
    
    <label for="country">country</label>
        <select  value="India" name="country">
        <option value="India">India</option>
        </select>

    <label for="state">State</label>
        <select id="state" name="state">
        <option value="Assam">Assam</option>
        <option value="West Bengal">West Bengal</option>
        <option value="Bihar">Bihar</option>
        <option value="Uttar Pradesh">Uttar Pradesh</option>
        <option value="Tamil Nadu">Tamil Nadu</option>
        <option value="Rajasthan">Rajasthan</option>
        <option value="Haryana">Haryana</option>
        </select>

    <label for="pcode">District</label>
    <input type="text" id="dist" name="dist" onkeypress="return isalph(event)" placeholder="district" required>
    
    <label for="pcode">Pincode</label>
    <input type="text" id="pinc" name="pinc" onkeypress="return isnum(event)" placeholder="Your pincode" required>

    <label for="addres">Address</label>
    <input type="text" id="add" name="add" onkeypress="return isalph(event)" placeholder="Your address" required>

    <label for="phone">Phone Number</label>
    <input type="text" id="phone" name="phone" onkeypress="return isnum(event)" placeholder="phone number..." required>

    <label for="dob">dob</label>
    <input type="date" id="dob" name="dob" placeholder="Your dob"><br><br>

    <input type="submit" name="proceed" value="Submit">
  </form>
</div>

</body>
</html>
<?php
include 'connect.php';
if (isset($_POST['proceed'])) 
{
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $country = $_POST['country'];
    $state = $_POST['state'];
    $district = $_POST['dist'];
    $pincode = $_POST['pinc'];
    $address = $_POST['add'];
    $phone = $_POST['phone'];
    $dob = $_POST['dob'];

    $sql="INSERT INTO `tbl_empdet`(`first_name`, `last_name`, `country`, `state`,`district`, `pincode`, `address`, `phone_number`, `dob`) VALUES('$fname','$lname','$country','$state','$district','$pincode','$address','$phone','$dob')"; 
    $result=mysqli_query($con,$sql);
    if ($result) 
    {
        echo "<script>alert('Success..');
        
        </script>";
    }
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
    