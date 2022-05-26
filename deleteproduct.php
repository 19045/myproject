<html>

<head>
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <style>
        h1 {
            padding-bottom: 10px;
        }
    </style>
</head>
<link rel="stylesheet" type="text/css" href="style.css">

<body>
    <div class="topnav">
        <ul>
            <li><a class="active" href="">Three Star Hollow and Solid Bricks</a></li>
            <li><a href="index.php">Home</a></li>
            <li><a href="">Cement Based Bricks</a></li>
            <li><a href="#about">Other Building Materials</a></li>
            <li><a class="log" href="login.php">Logout</a></li>
        </ul>
    </div>
    <center>
        <h1>Delete _Products</h1>
    </center>
    <?php
    include("connect.php");
    $m = "SELECT * FROM `tbl_product`";
    $result = mysqli_query($con, $m);
    if (mysqli_num_rows($result)) {
        echo "<table border='1' align='center'><tr><th>NAME</th><th>Sie</td><th>Stock</th><th>Price</th><th>Category</th><th>Delete</th></tr>";
        while ($row = mysqli_fetch_array($result)) {
            echo "<tr><td>";
            echo $row['name'];
            echo "</td><td>";
            echo $row['size'];
            echo "</td><td>";
            echo $row['stock'];
            echo "</td><td>";
            echo $row['price'];
            echo "</td><td>";
            echo $row['category'];
            echo "</td><td>";
            echo "<form action='#' method=post><button value='" . $row['id'] . "' class='btn btn-danger' name=delete>Delete</i></button></form>";
            if (isset($_POST["delete"])) {

                $id = $_POST["delete"];
                $query2 = "DELETE FROM `tbl_product` WHERE  `status`='0' WHERE `id` ='$id' ";
                mysqli_query($con, $query2);
                echo ("<script LANGUAGE='JavaScript'>
    window.alert('product deleted');
	window.location.href='deleteproduct.php';
    </script>");
            }
        }
    }
    ?>