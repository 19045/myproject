<?php
include 'connect.php';
session_start();
$rand = $_SESSION['rand'];
?>

<head>

    <head>
        <style>
            body {
                margin: 0;
                padding: 0;
                background-color: #17a2b8;
                height: 100vh;
            }

            #login .container #login-row #login-column #login-box {
                margin-top: 120px;
                max-width: 600px;
                height: 320px;
                border: 1px solid #9C9C9C;
                background-color: #EAEAEA;
            }

            #login .container #login-row #login-column #login-box #login-form {
                padding: 20px;
            }

            #login .container #login-row #login-column #login-box #login-form #register-link {
                margin-top: -85px;
            }
        </style>
    </head>

</head>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<body>
    <div id="login">
        <h3 class="text-center text-white pt-5">OTP VERIFICATION</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="" method="post">
                            <h3 class="text-center text-info">OTP VERIFICATION</h3>
                            <div class="form-group">
                                <label for="password" class="text-info">OTP:</label><br>
                                <input type="text" name="otp" id="password" class="form-control">
                            </div>
                            <div class="form-group">

                                <input type="submit" name="submit" class="btn btn-info btn-md" value="submit">
                            </div>
                            <br><br>
                            <div id="register-link" class="text-right">
                                <a href="login.php" class="text-info">Login here</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<?php
$email = $_SESSION['email'];
if (isset($_POST['submit'])) {
    $otp = $_POST['otp'];
    if ($rand == $otp) {
        echo '
        <script>
        window.location.href="reset.php";
        </script>';
    } else {
        echo '
        <script>
        alert("Invalid otp");
        </script>';
    }
}
?>