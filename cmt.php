<?php
include 'connect.php';
session_start();
?>
<!doctype html>
<html>
<title></title>

<head>
  <meta charset="utf-8">
</head>
<link rel="stylesheet" type="text/css" href="style.css">

<body>
  <div class="topnav">
    <ul>
      <li><a class="active" href="#">Three Star Hollow and Solid Bricks</a></li>
      <li><a href="index.PHP">Home</a></li>
      <div class="dropdown">
        <button class="dropbtn">Cement based bricks
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
        </div>
      </div>
      <li><a href="obm.php">Other Building Materials</a></li>
      <li><a class="log" href="login.php">Logout</a></li>
      <?php
      if (isset($_SESSION['login_user']))
      ?>
      <li><a href="profile.php"> <?php echo $_SESSION['userName']; ?> </a></li>

    </ul>
  </div>


  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="hs3.png" class="d-block w-100" alt="..." width="80" height="600">
      <div class="carousel-caption d-none d-md-block">
        <h2>Build with us</h2>
        <h3>
          <p>Three Star Hollow And Solid Bricks.</p>
        </h3>
      </div>
    </div>
    <div class="carousel-item">
      <img src="hs2.jpg" class="d-block w-100" alt="" width="80" height="600">
      <div class="carousel-caption d-none d-md-block">
        <h2>Build with us</h2>
        <h3>
          <p>Three Star Hollow And Solid Bricks.</p>
        </h3>
      </div>
    </div>
    <div class="carousel-item">
      <img src="hs6.jpg" class="d-block w-100" alt="..." width="80" height="600">
      <div class="carousel-caption d-none d-md-block">
      </div>
    </div>
  </div>
  <div class="cmt">
    <p>
    <h2>Cement Based Bricks</h2>
    </p>
  </div><br><br>

  <div class="d-flex justify-content-center">
    <?php
    $sel = "select * from tbl_product where category='Cement_ based_bricks'";
    $res = mysqli_query($con, $sel);
    while ($ar = mysqli_fetch_array($res)) {
      echo ('
    <form action="bookproduct.php" method="get">
    <a name="id" href="bookproduct.php?i=' . $ar["id"] . '"><div class="image" style="float:left">
      
    <div class="card"  style="width: 20rem;">
    <img class="card-img-top bg-grey" src=' . $ar["imageurl"] . ' alt="Card image cap" width="300px" height="250px"></a>
    <center>
    <div class="card-body">
      <h5 class=card-title">' . $ar["name"] . ' </h5>
      <p class="card-text">Size=' . $ar["size"] . ' </p>
      <p class="card-text">Stock=' . $ar["stock"] . ' </p>
      <p class="card-text">Price=' . $ar["price"] . ' </p>
      <a href="bookproduct.php?i=' . $ar["id"] . '" class="btn btn-primary">Buy Now</a>
      <form method="POST"><a href="cart.php" class="btn btn-primary">add to cart</a></form>
    </div>
    </center>
  </div>
    </div></form>
  ');
    }
    ?>

  </div>

  <div class="card text-center bg-dark text-light mt-5">
    <div class="card-header">
      Three Star
    </div>
    <!-- <div class="card-body"> -->
    <!-- <h5 class="card-title">Special title treatment</h5>
      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> -->
    <!-- </div> -->
    <div class="card-footer text-muted">
      Copyright &copy; 2021
    </div>
  </div>

</body>

</html>