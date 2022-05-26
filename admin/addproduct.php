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
        <div class="boxx">
            <center>
                <p style=" font-size: 40px; font-weight: bold; padding-bottom: 30px; padding-top: 30px; font-weight: bold;font-family: Impact, Haettenschweiler, 'Franklin Gothic Bold', 'Arial Black', 'sans-serif';color:#00FF24;">Add products</p>
            </center>
            <div class="">
                <form name="form1" action="#" method="post" enctype="multipart/form-data">
                    <table class="pdetails" border="2px">
                        <div>
                            <tr>
                                <td>Product Name</td>
                                <td><input type="text" name="name"  required=""></td>
                            </tr>
                        </div>
                        <div>
                            <td>Size</td>
                            <td><input type="text" name="size"  required=""></td>
                            </tr>
                        </div>
                        <div>
                            <tr>
                                <td>Stock</td>
                                <td><input type="text" name="stock" min="0" onkeypress="return  isnum(event)" required=""></td>
                        </div>
                        <div>
                            <tr>
                                <td>Price</td>
                                <td><input type="text" name="price" onkeypress="return isnum(event)" required=""></td>
                            </tr>
                        </div>
                        <div>
                            <tr>
                                <td>Image</td>
                                <td><input type="file" name="imageurl" multiple style="color:red;"></td>
                            </tr>
                        </div>
                        <div>
                            <tr>
                                <td>Category</td>
                                <td><select name="category" value="category">
                                        <option value="Cement_ based_bricks">Cement based bricks</option>
                                        <option value="other_building_materials">other building materials</option>
                                    </select>
                                </td>
                            </tr>
                        </div>
                        <div>
                            <tr>
                                <td colspan="2" align="center"> <input type="submit" name="addproductSubmit" id="buttton" value="upload"></td>

                            </tr>
                        </div>
                        <div>
                            <tr>
                                <td colspan="2" align="center"> <a href="index.php"><input type="button" name="back" id="buttton" value="Back"></a></td>

                            </tr>
                        </div>
                    </table>
                </form>
            </div>
        </div>

    </div>
    
</body>

</html>
<?php
error_reporting(0);
include 'connect.php';
if (isset($_POST['addproductSubmit'])) {
    $pnam = $_POST['name'];
    $psize = $_POST['size'];
    $pstock = $_POST['stock'];
    $pprice = $_POST['price'];
    $img = $_FILES['imageurl']['name'];
    $pcat = $_SESSION['category'] = $_POST['category'];

    $fnm = $_FILES['imageurl']['tmp_name'];
    $dst = 'product_image/' . $_FILES['imageurl']['name'];
    move_uploaded_file($fnm, $dst);

    $sql = "INSERT INTO `tbl_product`(`name`, `size`, `stock`, `price`, `imageurl`,`category`) VALUES ('$pnam','$psize','$pstock','$pprice','$dst','$pcat')";
    $res = mysqli_query($con, $sql);
    if ($pcat == 'other_building_material') {
        echo ("
        <script>
        alert('Product Added');
        window.location.href='#';
        </script>");
    }
}
?>