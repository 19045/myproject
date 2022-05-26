<!DOCTYPE html>
<html lang="en">
<?php
session_start();
$idd=$_SESSION['userId'];
$fname=$_SESSION['fname'];
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 50%;
  margin-left:380px;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
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
        
        <?php
    include("connect.php");
    $m = "SELECT * FROM `tbl_empdet` where `id`='$idd '";
    $result = mysqli_query($con, $m);
    if (mysqli_num_rows($result)) {
    ?>
      <table class="table" style="margin-top: 90px;">
        <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">First Name</th>
            <th scope="col">Email</th>
            <th scope="col">Type</th>
            <th scope="col">Country</th>
            <th scope="col">State</th>
            <th scope="col">pincode</th>
            <th scope="col">Address</th>
            <th scope="col">Phone number</th>
            <th scope="col">Dob</th>
          </tr>

        </thead>
        <?php
        while ($row = mysqli_fetch_array($result)) {
          echo "<tr><td>";
          echo $row['id'];
          echo "</td><td>";
          echo $row['first_name'];
          echo "</td><td>";
          echo $row['email'];
          echo "</td><td>";
          echo $row['type_emp'];
          echo "</td><td>";
          echo $row['country'];
          echo "</td><td>";
          echo $row['state'];
          echo "</td><td>";
          echo $row['pincode'];
          echo "</td><td>";
          echo $row['address'];
          echo "</td><td>";
          echo $row['phone_number'];
          echo "</td><td>";
          echo $row['dob'];
          echo "</td><td>";

          echo "<button class='btn-2' type='button' data-bs-toggle='modal' data-bs-target='#staticBackdrop' name=Edit>Edit</i></button></form>";
          
          if (isset($_POST["Edit"])) {

            $id = $_POST["Edit"];
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
    </div>
    <div><br><br><br>
        <center>
    <h3>Leaves taken</h3>
</center>

<table>
  <tr>
    <th>S.No:</th>
    <th>No.of leaves taken</th>
    <th>Leave type</th>
    <th>Leave Starting Date</th>
    <th>Leave Ending Date</th>
  
    <!-- <th>Remaining Leaves</th> -->
  </tr>

<?php
    include("connect.php");
    $m2 = "SELECT * FROM `tbl_leave` where name= '$fname' ";
    $sql2 = mysqli_query($con, $m2);
    $count=1;
    $tot_taken=0;
    while($row2=mysqli_fetch_array($sql2))
    {
    
                    $date1=$row2["sdate"];
                    $date2=$row2["edate"];
                    if($row2['status' != 2])
                    {
                ?>

                <tr>
                <td><?php echo $count; ?></td>
                                    <td><?php

                                // Creates DateTime objects
                                $datetime1 = date_create($date1);
                                $datetime2 = date_create($date2);

                                // Calculates the difference between DateTime objects
                                $interval = date_diff($datetime1, $datetime2);

                                // Printing result in years & months format
                                echo $LD=$interval->format(' %d'),' days';
                                ?>
                                </td>
                    <td><?php echo $row2["leave_type"]; ?></td>
                    <td><?php echo $date1; ?></td>
                    <td><?php echo $date2; ?></td>
                   
                    <!-- <td><?php echo 10-$LD, ' days'; ?></td> -->
                
              
                    <?php 
                    $count++; 
                    $tot_taken=$tot_taken+$LD;


                    //$m4="UPDATE `tbl_empdet` SET `rem_leave`='$updated_leave' WHERE first_name= '$fname' ";
                    ?>
                </tr>
    <?php }
    else
    {
        
    }
}
$m3 = "SELECT * FROM `tbl_empdet` where first_name= '$fname' ";
$sql3 = mysqli_query($con, $m3);
$row3=mysqli_fetch_array($sql3);
$rem_L=$row3['rem_leave'];
$updated_leave=$rem_L-$tot_taken;
$type2=$row3['type_emp'];  
    ?>
</table>

<table>
    <tr>
        <th>Provided Leave</th>
        <th>Available Leave</th>    
    </tr>
    <tr>
     
<?php
if($type2=='Helper')
{
    echo"<td>10 days</td>";
}
else if($type2=='Brick Maker')
{
    echo"<td>15 days</td>";
}
else
{
    echo"";
}
?>
        <td><?php echo  $rem_L , ' days';?></td>
    </tr>
</table>
   


</div>


    </body>
 
    
            
    
