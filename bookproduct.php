<?php
include 'connect.php';
session_start();
?>
<!doctype html>
<html>
<title></title>

<head>
    <meta charset="utf-8">
    <style>
        div.polaroid {
            width: 50%;
            background-color: white;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            margin-bottom: 30px;
        }

        div.container {
            text-align: center;
            padding: 10px 20px;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script type="text/javascript" src="./registration.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
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

<body style="background-color: #fefbd8; text-align: center;">
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
            <li><a href="">Other Building Materials</a></li>
            <li><a class="log" href="login.php">Logout</a></li>

            <?php
            if (isset($_SESSION['login_user']))
            ?>
            <li><a href="profile.php"> <?php echo $_SESSION['userName']; ?> </a></li>

        </ul>
    </div>

    <?php
    $id = $_GET['i'];
    $sel = "select * from tbl_product where id='$id'";
    $res = mysqli_query($con, $sel);
    $itemCount = 0;
    while ($ar = mysqli_fetch_array($res)) {
        $itemCount = $ar["stock"];
    ?>
        <center>

            <div class="polaroid"><img height="400" width="300" src="<?php echo $ar["imageurl"]; ?>">
                <h4><?php echo $ar["name"]; ?></h4>
                <h4>Available Stock:<?php echo $ar["stock"]; ?></h4>
        </center><br>
        </div>
        </div>
    <?php
    }
    ?>


    <form method="post" action="#">
        <input type="hidden" name="itemCount" value="<?php echo $itemCount; ?>">
        <input type="hidden" name="itemId" value="<?php echo $id; ?>">
        </div>

        <center>
            <table border="2" cellspacing=10px cellpadding=15px>
                <tr>
                    <td><b>Enter your name</b></td>
                    <td>
                        <input type="text" id="name" name="name" onkeypress="return isalph(event)" required="">
                    </td>
                </tr>
                <tr>
                    <td><b>Enter your mail id</b></td>
                    <td>
                        <input type="email" id="email" name="email" onkeypress="return isalph(event)" required="">
                    </td>
                </tr>
                <tr>
                    <td><b>Enter your delivery address</b></td>
                    <td>
                        <input type="text" id="addres" name="addres" onkeypress="return isalph(event)" required="">
                    </td>
                <tr>
                    <td><b>Select your date for delivery</b></td>
                    <td>
                        <input type="date" name="date" min="<?php echo date('Y-m-d'); ?>" id="dat" required="">
                    </td>
                </tr>
                <tr>
                    <td><b>Contact number</b></td>
                    <td>
                        <input type="text" name="contactnumber" id="num" maxlength="10" onkeypress="return isnum(event)" required="">
                    </td>
                </tr>
                <tr>
                    <td><b>Enter the quantity of bricks</b></td>
                    <td>
                        <input type="number" name="amount" id="num" min="0" required="">
                    </td>
                </tr>

            </table><br>


            <button class="submit" type="submit" name="proceed" value="<?php echo $id; ?>" id="proceed" style="background-color:#fefbd8; height:50px; width:200px; border-radius:10px; ">Proceed to Pay</button>
    </form><br><br>
    </center>
    </div>
    <div style="clear: both;"></div>
    </div>
    <br><br>
    </center>
    <div class="fixed-footer">
        <div align="center" class="container">
            <center>
                copyright &copy; owned by lijin@2021.all rights reserved
            </center>
        </div>
    </div>
</body>

</html>
<?php
if (isset($_POST['proceed'])) {
    $itemCount = $_POST['amount'];
    $itemId = $_POST['itemId'];
    $_SESSION['kid'] = $_POST['proceed'];
    $bname = $_POST['name'];
    $mail = $_POST['email'];
    $baddress = $_POST['addres'];
    $bdate = $_POST['date'];
    $bcontact = $_POST['contactnumber'];
    $bamt = $_POST['amount'];
    //Find quantity
    $quantityCheck = "SELECT `stock` FROM `tbl_product` WHERE `id`='$id'";
    $quantityCheckResult = mysqli_query($con, $quantityCheck);
    $fetchAmt = mysqli_fetch_assoc($quantityCheckResult);
    $Camount = $fetchAmt['stock'];

    if ($Camount < $bamt) {
        echo ("<script LANGUAGE='JavaScript'>
                window.location.href='bookproduct.php';
                </script>");
    } else {
        $newAmt = $Camount - $bamt;
        $sql = "INSERT INTO `tbl_book`( `Name`, `email`, `address`, `date`, `contact`, `amt_bricks`) VALUES('$bname','$mail','$baddress','$bdate','$bcontact ','$bamt');
                UPDATE `tbl_product` SET `stock`='$newAmt' WHERE `id`='$itemId'";
        if (mysqli_multi_query($con, $sql)) {
            $to_email = $mail;
            $subject = "Ordered Details";
            $body = "Ordere placed successfully";
            $headers = "From: lijinsanthosh@mca.ajce.in";
            mail($to_email, $subject, $body, $headers);
            echo ("<script LANGUAGE='JavaScript'>
                window.location.href='payment.php';5
                </script>");
        }else{
            //Alert- Error in booking
        }
    }
}
?>