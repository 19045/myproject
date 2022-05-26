<?php
include 'connect.php';
error_reporting(0);
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="style7.css" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="./registration.js"></script>
</head>

<body>
    <h2>Three Star Hollow and Solid Bricks</h2>
    <div class="container" id="container">
        <div class="form-container sign-in-container">
            <form action="#" method="post">
                <h1>Create Account</h1>
                <span>or use your email for registration</span>
                <input type="text" placeholder="Name" name="name" id="name" onkeypress="return isalph(event)" />
                <font color="red">
                    <p id="alert1"></p>
                </font>
                <input type="email" placeholder="Email" name="email" id="email" />
                <font color="red">
                    <p id="alert2"></p>
                </font>
                <input type="text" placeholder="Phone" name="phone" id="phone" maxlength="10" onkeypress="return isnum(event)" />
                <font color="red">
                    <p id="alert3"></p>
                </font>
                <input type="password" placeholder="Password" name="pass" id="pass" />
                <font color="red">
                    <p id="alert4"></p>
                </font>
                <input type="password" placeholder="Confirm Password" name="cpass" id="cpass" />
                <font color="red">
                    <p id="alert5"></p>
                </font>
                <input type="submit" name="proceed" id="proceed">Sign Up</button>
                <a href="ERegister.php">Employee SignUp</a>	
			
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-right">
                    <h1>Hello, Friend!</h1>
                    <p>Enter your personal details and start journey with us</p>
                    <button type="button" class="ghost" onclick="redirect();">Sign In</button>
                </div>
            </div>
        </div>
    </div>
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
</body>

</html>
<?php
if (isset($_POST['proceed'])) {
    $name = $_POST['name'];
    $mail = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['pass'];
    $confirm = $_POST['cpass'];
    if ($password != $confirm) {
        echo ("
        <script>
        alert('Password and Confirm Password Should be matched');
        </script>");
    } else {
        $to_email = $mail;
        $subject = "Login Details";
        $body = "Username: $mail \n Password: $confirm\n\n\n\n\n\n\nRegards,\nTeam Threestar";
        $headers = "From: lijinsanthosh@mca.ajce.in";
        if (mail($to_email, $subject, $body, $headers)) {
            $check = "SELECT * FROM registration WHERE `email` = '$mail' AND `status` = 1";
            $result = mysqli_query($con, $check);
            if (mysqli_num_rows($result) > 0) {
                echo ("User already exist");
            } else {
                $sql = "INSERT INTO `registration`( `name`, `email`, `phone`, `pass`) VALUES('$name','$mail','$phone','$password')";
                $res = mysqli_query($con, $sql);
                if ($res != 0) {
                    header('location:login.php');
                } else {
                    echo "not inserted";
                }
            }
        } else {
            echo "Email sending failed...";
        }
    }
}
?>