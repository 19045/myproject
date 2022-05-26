<!DOCTYPE html>
<html>
<?php
session_start();
$idd = $_SESSION['userId'];
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
                    <li><a class="dropdown-item" href="logout2.php">Logout</a></li>
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
</div>
</div>
</div>
</div> 
<?php
                include("connect.php");
                $m = "SELECT * FROM `tbl_empdet` where first_name= $fname";
                $sql = mysqli_query($con, $m);
             
           
            
                ?>
<div style="align-items:center; margin: 5% 20% 40% 40%">
        <form target="_self" id="bootstrapForm" method="POST">
    <fieldset>
        <h2>Employee leave Application<br><small></small></h2>
    </fieldset>
    
    <fieldset>
        <legend for="1874755157">Name</legend>
        <div class="form-group">
            <input id="1729637716" type="text" name="name" value="<?php echo $fname; ?>" class="form-control" onkeypress="return isalph(event)" required>
        </div>
    </fieldset>
    
    
    <fieldset>
        <legend for="919003939">Type of time-off requested</legend>
        <div class="form-group">
            <div class="radio" name="trq">
                <label>
                    <input type="radio" name="trq"  value="Vacation" required>
                    Vacation
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="trq"  value="Sick Leave" required>
                    Sick Leave
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="trq"  value="Maternity/Paternity" required>
                    Full day
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="trq" value="Bereavement">
                    Bereavement
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="trq" value="Jury Duty" >
                    Jury Duty
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="trq"  value="Other" >
                    Other
                </label>
            </div>
        </div>
    </fieldset>
    
    <fieldset>
        <legend for="1833993761">Start Date</legend>
        <div class="form-group">
            <input type="date" id="pro-start-date" name="sdate" placeholder="8/23/2019" class="form-control" min="<?php echo date('Y-m-d') ?>" required>
        </div>
    </fieldset>
    
    <fieldset>
        <legend for="861643251">End Date</legend>
        <div class="form-group">
            <input type="date" id="pro-start-date" name="edate" min="<?php echo date('Y-m-d') ?>" placeholder="8/23/2019" class="form-control" required>
        </div>
    </fieldset>
    
    <fieldset>
        <legend for="388489461">Time-off comments</legend>
        <div class="form-group">
            <textarea id="1357270616" name="com" class="form-control" onkeypress="return isalph(event)" required></textarea>
        </div>
    </fieldset>
    <input type="hidden" name="fvv" value="1">
    <input type="hidden" name="fbzx" value="5356028641311999799">
    
    <input type="hidden" name="pageHistory" value="0">

    <input type="submit" class="btn btn-primary" name="proceed" value="Submit">
</form>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js" integrity="sha256-2Pjr1OlpZMY6qesJM68t2v39t+lMLvxwpa8QlRjJroA=" crossorigin="anonymous"></script>
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
    $name = $_POST['name'];
    $phone = $_POST['phn'];
    $leave = $_POST['trq'];
    $startdate = $_POST['sdate'];
    $enddate = $_POST['edate'];
    $comments = $_POST['com'];


 

                //DATE CALCULATION
                $datetime1 = date_create($startdate);
                $datetime2 = date_create($enddate);
                $interval = date_diff($datetime1, $datetime2);
                $LD=$interval->format(' %d');
                               



    $m = "SELECT * FROM `tbl_empdet` where first_name = '$name'";
    $sql2 = mysqli_query($con, $m);
    $row2=mysqli_fetch_array($sql2);
    $uid=$row2['id'];
    $remaining_leave=$row2['rem_leave'];
    echo $r = "SELECT * FROM `tbl_leave` WHERE `u_id` = '$idd' AND `sdate` = '$startdate'";
    $rs = mysqli_query($con,$r);
    if($res = mysqli_num_rows($rs) > 0)
    {
        echo "<script>alert('Leave already taken');
        window.location.href='leave.php';
        </script>";
    }
    else
    {
    if($LD >  $remaining_leave)
    {
        echo "<script>alert('No Sufficient Leave Balance');
        window.location.href='leave.php';
        </script>";
    }
    else
    {

        $remaining_leave=$remaining_leave-$LD;
        $sql="INSERT INTO `tbl_leave`(`u_id`,`name`, `phone_number`, `leave_type`, `sdate`, `edate`, `duration` , `comments`) VALUES('$uid','$name','$phone','$leave','$startdate','$enddate','$LD','$comments')"; 
        $result=mysqli_query($con,$sql);

        $sql3="UPDATE `tbl_empdet` SET `rem_leave`='$remaining_leave' WHERE first_name= '$fname' ";
        $result3=mysqli_query($con,$sql3);
        if ($result && $result3) 
        {
            echo "<script>alert('Success..');
            
            </script>";
        }
    }
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

        document.getElementById("pro-start-date").onchange = function() {
                        var input = document.getElementById("pro-end-date");
                        input.setAttribute("min", this.value);
                    }
    </script>
