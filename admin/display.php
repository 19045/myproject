<html>

<head>
  <title></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
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

  <style>
    h1 {
      padding-bottom: 10px;
    }
  </style>
</head>
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
                        <a class="nav-link" href="sales_history.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Sales History
                        </a>
                        <a class="nav-link" href="empdis.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                             Employees details
                        </a>
                        <a class="nav-link" href="empsal.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Add Employee Salary
                        </a>
                        <a class="nav-link" href="saldis.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Display Salary Details
                        </a>
                        <a class="nav-link" href="approve.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Employee leave approve
                        </a>
        </div>
      </div>
    </nav>
  </div>

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

    <center>
      <h1>User_Details</h1>

    </center>
    <?php
    include("connect.php");
    $m = "SELECT * FROM `registration` where `status`='1'";
    $result = mysqli_query($con, $m);
    if (mysqli_num_rows($result)) {
    ?>
      <table class="table" style="margin-top: 90px;">
        <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Phone Number</th>
            <th scope="col">Email</th>
            <th scope="col">Delete</th>
          </tr>

        </thead>
        <?php
        while ($row = mysqli_fetch_array($result)) {
          echo "<tr><td>";
          echo $row['id'];
          echo "</td><td>";
          echo $row['name'];
          echo "</td><td>";
          echo $row['phone'];
          echo "</td><td>";
          echo $row['email'];
          echo "</td><td>";
          echo "<form action='#' method=post><button value='" . $row['id'] . "' class='btn btn-danger' name=delete>Delete</i></button></form>";
          if (isset($_POST["delete"])) {

            $id = $_POST["delete"];
            $query2 = "UPDATE `registration` SET `status`='0' WHERE `id` ='$id' ";
            mysqli_query($con, $query2);
            echo ("<script LANGUAGE='JavaScript'>
    window.alert('User Deactivated');
	window.location.href='display.php';
    </script>");
          }
        }
        ?>
      </table>
    <?php
    }

    ?>



  </body>

</html>