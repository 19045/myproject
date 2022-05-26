<?php
include 'connect.php';
session_start();
?>
<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" href="style9.css" type="text/css">
    <script type="text/javascript" src="cart.js"></script>
</head>
<div class="shopping-cart">
  <!-- Title -->
  <div class="title">
    Shopping Bag
  </div>
 
  <!-- Product #1 -->
  <div class="item">
    <div class="buttons">
      <span class="delete-btn"></span>
      <span class="like-btn"></span>
    </div>
 
    <div class="image">
      <img src="item-1.png" alt="" />
    </div>
 
    <div class="description">
      <span>Common Projects</span>
      <span>Bball High</span>
      <span>White</span>
    </div>
 
    <div class="quantity">
      <button class="plus-btn" type="button" name="button">
        <img src="plus.svg" alt="" />
      </button>
      <input type="text" name="name" value="1">
      <button class="minus-btn" type="button" name="button">
        <img src="minus.svg" alt="" />
      </button>
    </div>
 
    <div class="total-price">$549</div>
  </div>
 
  <!-- Product #2 -->
  <div class="item">
    <div class="buttons">
      <span class="delete-btn"></span>
      <span class="like-btn"></span>
    </div>
 
    <div class="image">
      <img src="item-2.png" alt=""/>
    </div>
 
    <div class="description">
      <span>Maison Margiela</span>
      <span>Future Sneakers</span>
      <span>White</span>
    </div>
 
    <div class="quantity">
      <button class="plus-btn" type="button" name="button">
        <img src="plus.svg" alt="" />
      </button>
      <input type="text" name="name" value="1">
      <button class="minus-btn" type="button" name="button">
        <img src="minus.svg" alt="" />
      </button>
    </div>
 
    <div class="total-price">$870</div>
  </div>
 
  <!-- Product #3 -->
  <div class="item">
    <div class="buttons">
      <span class="delete-btn"></span>
      <span class="like-btn"></span>
    </div>
 
    <div class="image">
      <img src="item-3.png" alt="" />
    </div>
 
    <div class="description">
      <span>Our Legacy</span>
      <span>Brushed Scarf</span>
      <span>Brown</span>
    </div>
 
    <div class="quantity">
      <button class="plus-btn" type="button" name="button">
        <img src="plus.svg" alt="" />
      </button>
      <input type="text" name="name" value="1">
      <button class="minus-btn" type="button" name="button">
        <img src="minus.svg" alt="" />
      </button>
    </div>
 
    <div class="total-price">$349</div>
  </div>
</div>
if(isset($_POST['add_to_cart'])){
  if(isset($_SESSION['cart'])){

  }else{
    $session_array=array(
      'id'=>$_GET['id'],
      "name"=>$_POST['id'],
    )
  }
}


<?php 
                  
                  $m2 = "SELECT * FROM `tbl_leave` where name= '$uname'";
                  $sql22 = mysqli_query($con, $m2);
                  $row22=mysqli_fetch_array($sql22);
                  $date1=$row22['sdate'];
                  $date2=$row22['edate'];
                  $diff=date_diff($date1,$date2);
                  echo $diff->format("difference is: %a days ");
                    
 ?>


<?php
                include("connect.php");
                $m = "SELECT * FROM `tbl_empsalary` where id= $id";
                $sql = mysqli_query($con, $m);
                $count=1;
                $row=mysqli_fetch_array($sql);
                ?>
                  


                  <?php 
                  
                  $m2 = "SELECT * FROM `tbl_leave` where name= $uname";
                  $sql = mysqli_query($con, $m);
                  $count=1;
                  $row=mysqli_fetch_array($sql);
                    
 ?>