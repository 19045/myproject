<?php
include 'connect.php';
session_start();
if (isset($_SESSION['sessionId'])) {
?>

  <!doctype html>
  <html>
  <title></title>

  <head>
    <meta charset="utf-8">
    <style>
      .flex-container {
        display: flex;
        background-color: #fff;
        align-items: stretch;
      }

      .flex-container>div {
        background-color: #f1f1f1;
        margin: 20px;
        padding: 30px;
        font-size: 14px;
        text-align: center;
        line-height: 75px;
      }
    </style>
  </head>
  <link rel="stylesheet" type="text/css" href="style.css">

  <body>
    <div class="topnav">
      <ul>
        <li><a class="active" href="#">Three Star Hollow and Solid Bricks</a></li>
        <li><a href="">Home</a></li>
        <li><a href="cmt.php">Cement Based Bricks</a></li>
        <li><a href="">Other Building Materials</a></li>
        <li><a href="profile.php"> <?php
                                    if (isset($_SESSION['login_user']))
                                      echo $_SESSION['userName']; ?> </a></li>

        <li><a class="log" href="logout.php">Logout</a></li>

      </ul>
    </div>

    <div class="slider1">
    </div>
    <div class="topnav1">
      <ul>
        <li><a class="active" href="">Featured Products</a></li>
        <li><a href="">Bricks</a></li>
        <li><a href="">Cements</a></li>
        <li><a href="#about">Concrete Windows</a></li>
        <li><a href="#about">Door Frames</a></li>
        <li><a href="#about">Well Bricks</a></li>
        <li><a href="#about">InterLocks</a></li>
      </ul>
    </div><br><br>
    <div class="flex-container">
      <div><img src="holdemo.jpg" width="200px" height="240px">
        <P>
        <h2>16" x 8" x 4" Hollow Bricks</h2>
        </P>
      </div>
      <div><img src="6inch.jpg" width="200px" height="240px">
        <P>
        <h2>16" x 8" x 6" solid Bricks</h2>
        </P>
      </div>
      <div><img src="8solid.jpg" width="200px" height="240px">
        <P>
        <h2>16" x 8" x 8" solid Bricks</h2>
        </P>
      </div>
      <div><img src="cement.jpg" width="240px" height="240px">
        <P>
        <h2>Cements</h2>
        </P>
      </div>
      <div><img src="window.jpg" width="240px" height="240px">
        <P>
        <h2>concrete windows</h2>
        </P>
      </div>
    </div>

    <div class="flex-container">
      <div><img src="sand.jpg" width="330px" height="260px">
        <P>
        <h2>M sand</h2>
        </P>
      </div>
      <div><img src="door.jpg" width="330px" height="260px">
        <P>
        <h2>Concrete Door Frame</h2>
        </P>
      </div>
      <div><img src="inter.jpg" width="330px" height="260px">
        <P>
        <h2>InterLocks</h2>
        </P>
      </div>

    </div>

    <style>
      ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        background-color: #fff;
        text-color: black;
      }

      .topnav1 input[type=text] {
        float: right;
        padding: 6px;

        border: none;
        margin-top: 8px;
        margin-right: 16px;
        font-size: 17px;
      }

      li {
        float: left;
      }

      li a {
        display: block;
        color: #000000;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
      }

      li a:hover {
        color: #fff;
      }

      li a:hover:not(.active) {
        background-color: #111;
      }

      .active {
        background-color: #4CAF50;
      }
    </style>
    <script>
      var slideIndex = 1;
      showSlides(slideIndex);

      function plusSlides(n) {
        showSlides(slideIndex += n);
      }

      function currentSlide(n) {
        showSlides(slideIndex = n);
      }

      function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        if (n > slides.length) {
          slideIndex = 1
        }
        if (n < 1) {
          slideIndex = slides.length
        }
        for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
      }
    </script>

  </body>

  </html>
<?php
} else {
  header("Location:login.php");
}
?>
</body>
</html>