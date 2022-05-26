<?php
include 'connect.php';
session_start();
$id=$_GET['pid2'];
$fname=$_SESSION['fname'];
?>
<!doctype html>
<html>
<title></title>

<head>
<style>
    body{
        max-width:1800px;
    }
.customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 70%;
  margin-top:50px;
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
    margin-left: 1px;

}
</style>
  <meta charset="utf-8">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</head>
<body>
    <div class="body-content">
<div class="text-center">
  <center><img src="three star.jpg" class="rounded" width="300px" height="210px"></center>
  <center><h1>Three Star Hollow And Solid Bricks </h1></center>
</div><br><br>
<?php
    include("connect.php");
    $m2 = "SELECT * FROM `tbl_leave` where name= '$fname' ";
    $sql2 = mysqli_query($con, $m2);
    $count=1;
    $row2=mysqli_fetch_array($sql2);
    
    $date1=$row2["sdate"];
    $date2=$row2["edate"];
?>



<table>
  <tr>
    <th>No.of leaves taken</th>
    <th>Leave type</th>
    <th>Leave Starting Date</th>
    <th>Leave Ending Date</th>
  </tr>
  <tr>
    <td><?php

// Creates DateTime objects
$datetime1 = date_create($date1);
$datetime2 = date_create($date2);

// Calculates the difference between DateTime objects
$interval = date_diff($datetime1, $datetime2);

// Printing result in years & months format
echo $interval->format(' %d day');
?>
</td>
    <td><?php echo $row2["leave_type"]; ?></td>
    <td><?php echo $date1; ?></td>
    <td><?php echo $date2; ?></td>
  
   
   
  </tr>
</table>




</div>


<div style="margin-left:5%;">
    <?php
    $sel = "select * from tbl_empsalary where id=$id";
    $res = mysqli_query($con, $sel);
    while ($ar = mysqli_fetch_array($res)) {
         $uid=$ar['u_id'];
      echo ("
     <p> Name:".$ar['name']." </p> 
     <p> Date:".$ar['date']." </p> 
     
        ");

    }
    ?>
    <?php
    $sel2 = "select * from tbl_empdet where id=$uid";
    $res2 = mysqli_query($con, $sel2);
    while ($ar2 = mysqli_fetch_array($res2)) {
      echo ("
     <p> Address: ".$ar2['address']." </p>
     <p> Phone Number: ".$ar2['phone_number']." </p>
        ");

    }
    ?>
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
                $m = "SELECT * FROM `tbl_empsalary` where id= $id";
                $sql = mysqli_query($con, $m);
                $count=1;
                $row=mysqli_fetch_array($sql);
                ?>
                  
                    <tr>
                     
                        <td><input type=" " name="name" value="<?php echo $row["name"]; ?>"></td>
                        <td><input type=" " name="date" value="<?php echo $row["date"]; ?>"></td>
                        <td><input type="text" name="bs" id="bs" value="<?php echo $row["basic_salary"]; ?>"></td>
                        <td><input type="text" name="bo" id="bo" value="<?php echo $row["bonus"]; ?>"></td>
                        <td><input type="text" name="sp"  id="sp" value="<?php echo $row["Special_allowance"]; ?>"></td>
                        <td><input type="text" name="rent" id="rent" value="<?php echo $row["rent_allowance"]; ?>"></td>
                       

                    
                    </tr>
                    <tr>
                        <td style="border:none;"></td>
                        <td style="border:none;"></td>
                        <td style="border:none;"></td>
                        <td style="border:none;"></td>
                        <th>Grand Total</th>
                        <td><input type="text" name="total" value="<?php echo $row["total"]; ?>" id="total" readonly></td>
                     </tr>
                     <tr><td style="border:none;"></td>
                        <td style="border:none;"></td>
                        <td style="border:none;"></td>
                        <td style="border:none;"></td>
                        <td style="border:none;"><button type="button"  class="button3"  name="proceed">Back</button></td>
                        <td><button type="button" onclick="Print();" class="button3"  name="proceed">print</button></td>
                    </tr>
                    
  
    </table><br>
</div>
</div>
<script>
function Print()
{
    window.print();
}
</script>
</body>
</html>