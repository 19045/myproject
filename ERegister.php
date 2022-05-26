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
        body {font-family: Arial, Helvetica, sans-serif;}
.{box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=password], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=email], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}
input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.class3{
    margin-left:12px;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
  margin-left:12px;
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
    </head>
<body class="sb-nav-fixed">

  
    <div id="layoutSidenav">
        
        <div class="container">
        <center>
      <h1>Employee Register</h1>

    </center>
  <form  method="post" class="class3">
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" onkeypress="return isalph(event)" placeholder="Your name.." required>

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" onkeypress="return isalph(event)" placeholder="Your last name.." required>
    
    <label for="email">Email</label>
    <input type="email" id="email" name="email"  placeholder="Email" required>

    <label for="pass">Password</label>
    <input type="password" id="pass" name="pass"  placeholder="Password" required>

    <label for="pass2">Confirm Password</label>
    <input type="password" id="pass2" name="pass2"  placeholder="Confirm Password" required>
    
    <label for="country">country</label>
        <select  value="India" name="country">
        <option value="India">India</option>
        </select>

    <label for="state">State</label>
        <select id="state" name="state">
        <option value="Assam">Assam</option>
        <option value="West Bengal">West Bengal</option>
        <option value="Bihar">Bihar</option>
        <option value="Uttar Pradesh">Uttar Pradesh</option>
        <option value="Tamil Nadu">Tamil Nadu</option>
        <option value="Rajasthan">Rajasthan</option>
        <option value="Haryana">Haryana</option>
        </select>

    <label for="pcode">District</label>
    <input type="text" id="dist" name="dist" onkeypress="return isalph(event)" placeholder="district" required>

    <label for="state">Type of employee</label>
        <select id="emp" name="emp">
        <option value="Brick Maker">Brick Maker</option>
        <option value="Helper">Helper</option>
        </select>
    
    <label for="pcode">Pincode</label>
    <input type="text" id="pinc" name="pinc" onkeypress="return isnum(event)" placeholder="Your pincode" required>

    <label for="addres">Address</label>
    <input type="text" id="add" name="add" onkeypress="return isalph(event)" placeholder="Your address" required>

    <label for="phone">Phone Number</label>
    <input type="text" id="phone" name="phone" maxlength="10" onkeypress="return isnum(event)" placeholder="phone number..." required >

    <label for="dob">dob</label>
    <input type="date" id="dob" name="dob" placeholder="Your dob"><br><br>

    <input type="submit" name="proceed" value="Submit">
  </form>
</div>

</body>
</html>
<?php
include 'connect.php';
if (isset($_POST['proceed'])) 
{
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $email = $_POST['email'];

    echo $pass = $_POST['pass'];
    echo $pass2 = $_POST['pass2'];
    
    $country = $_POST['country'];
    $state = $_POST['state'];
    $district = $_POST['dist'];
    $typeemp = $_POST['emp'];
    $pincode = $_POST['pinc'];
    $address = $_POST['add'];
    $phone = $_POST['phone'];
    $dob = $_POST['dob'];

    if($pass != $pass2)
    {
        echo "<script>window.alert('Password Doesn't Match');
        window.location.href='ERegister.php';
        </script>";
        die();
    }

    $sql2="SELECT `email` FROM `tbl_empdet` WHERE email = '$email'";
    $result2=mysqli_query($con,$sql2);
    if (mysqli_num_rows($result2))
    {
        echo "<script>alert('Email Exists..Registration Failed..');
        window.location.href='ERegister.php';
        </script>";
    }
    
    else
    {
        if (isset($_POST['proceed'])) 
{
   
        $sql="INSERT INTO `tbl_empdet`(`first_name`, `last_name`,`email`,`password`, `country`, `state`,`district`,`type_emp`, `pincode`, `address`, `phone_number`, `dob`) VALUES('$fname','$lname','$email','$pass','$country','$state','$district','$typeemp','$pincode','$address','$phone','$dob')"; 
        $result=mysqli_query($con,$sql);
        
        if ($result != 0) {
            echo "<script>alert('Success..');
            window.location.href='ELogin.php';
            </script>";
        
        
        } else {
            echo "<script>alert('Failed..');
            </script>";
        }
    
    }
    }
}
?>
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
    