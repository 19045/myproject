<?php
include 'connect.php';
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <title>profile</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <style>
        .wrapper {
            width: 400px;
            margin: 0 auto;
            background-color: #b2ccd3;
        }
    </style>
</head>

<body style="background-color:#b2ccd3;">
    <div class="topnav">
        <ul>
            <li><a class="active" href="#">Three Star Hollow and Solid Bricks</a></li>
            <li><a href="index.PHP">Home</a></li>
            <li><a href="cmt.php">Cement Based Bricks</a></li>
            <li><a href="obm.php">Other Building Materials</a></li>
            <li><a class="log" href="login.php">Logout</a></li>

        </ul>
    </div><br>
    <div class="container">
        <form action="" method="post">

        </form>
        <div class="wrapper">
            <h2 style="text-align:center;">My Profile</h2>
            <center>
                <img src="user.jpg" width="100px" height="90px">
                <div>Welcome <?php echo $_SESSION['userName']; ?></div>
                <br><br>
                <table border='3'>
                    <?php
                    $sql = 'SELECT * FROM registration WHERE `id` = ' . $_SESSION['userId'] . '  ';
                    $result = mysqli_query($con, $sql);
                    if (mysqli_num_rows($result) > 0) {
                        $row = mysqli_fetch_array($result);
                        echo "
            <tr>
               <td>Name</td>
               <td>" . $row['name'] . "</td>
           </tr>
           <tr>
               <td>Email</td>
               <td>" . $row['email'] . "</td>
           </tr>
           <tr>
               <td>Phone</td>
               <td>" . $row['phone'] . "</td>
           </tr>
           <tr>
               <td>Password</td>
               <td>" . $row['pass'] . "</td>
           </tr>
            ";
                    }
                    ?>

                </table><br>
                <button class="btn-2" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Edit</button>
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">Update your details</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form class="modal-body" action="#" method="post">
                                <table border='2'>
                                    <?php
                                    $sql = 'SELECT * FROM registration WHERE `id` = ' . $_SESSION['userId'] . '  ';
                                    $result = mysqli_query($con, $sql);
                                    if (mysqli_num_rows($result) > 0) {
                                        $row = mysqli_fetch_array($result);
                                        echo "
            <tr>
               <td>Name</td>
               <td><input type='text' value=" . $row['name'] . " name='name' id='name'></td>
           </tr>
           <tr>
               <td>Phone</td>
               <td><input type='text' value=" . $row['phone'] . "  name='phone' id='phone'></td>
           </tr>
           <tr>
               <td>Password</td>
               <td><input type='text' value=" . $row['pass'] . " name='cpass' id='pass'></td>
           </tr>
           <td>Enter new Password</td>
               <td><input type='text' name='pass'></td>
           </tr>
            ";
                                    }
                                    ?>
                                </table>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <input type="submit" name="updateprofile" id="updateprofile" class="btn btn-primary"></button>
                                </div>
                        </div>
                    </div>
                </div>
            </center>
        </div>
    </div>
    </form>
</body>

<?php
if (isset($_POST['updateprofile'])) {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $password = $_POST['pass'];
    $uid = $_SESSION['userId'];
    $sql = "UPDATE `registration` SET `name`='$name',`phone`='$phone',`pass`='$password' WHERE `id`='$uid'";
    $res = mysqli_query($con, $sql);
    if ($res != 0) {
        header('location:profile.php');
    } else {
        echo "not inserted";
    }
}
?>