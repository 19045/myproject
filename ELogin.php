<?php
include 'connect.php';
session_start();
?>
<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" href="style7.css" type="text/css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script type="text/javascript" src="registration.js"></script>
</head>

<body>
	<?php
	$errors = array();
	if (isset($_POST['lbtn'])) {
		$email = $_POST['lemail'];
		$pass = $_POST['lpass'];
		echo $sql = "SELECT * FROM tbl_empdet WHERE `email` = '$email' AND `password` = '$pass'";
		$result = mysqli_query($con, $sql);
		if (($email == 'admin@gmail.com') && ($pass == "admin")) {
			echo ("<script language='Javascript'>
		window.location.href='admin/index.php';
		</script>");
		}
		if (mysqli_num_rows($result)) {
			$row = mysqli_fetch_array($result);
			$idd=$_SESSION['userId'] = $row['id'];
			$_SESSION['userName'] = $row['name'];
			$u_user = $row['email'];
			$u_pass = $row['password'];
			if (($email == $u_user) && ($pass == $u_pass)) {
				$_SESSION['sessionId'] = session_id();
				echo ("<script language='Javascript'>
			window.location.href='eindex.php';
			</script>");
			}
		} else {
			$errors['email'] = "Incorrect Username or password!";
		}
	}
	?>
	<h2>Three Star Hollow and Solid Bricks</h2>
	<div class="container" id="container">
		<div class="form-container sign-in-container">
			<form action="#" id="myform" method="post">
				<h1>Employee Login</h1>
			
				<font color="red">
					<?php
					if (count($errors) == 1) {
					?>
						<p>
							<b>
								<?php
								foreach ($errors as $showerror) {
									echo $showerror;
								}
								?>
							</b>
						</p>
					<?php
					}
					?>
				</font>
				<input type="email" placeholder="Email" name="lemail" id="lemail" />
				<input type="password" placeholder="Password" name="lpass" id="lpass" />
				<a href="Eforgot.php">Forgot Password</a>
				<input type="submit" name="lbtn" id="lbtn" value="submit"></button>
				Are You a User?  <a href="login.php">Login</a>	
			
			</form>
		

		</div>
		<div class="overlay-container">
			<div class="overlay">
				<div class="overlay-panel overlay-right">
					<h1>Welcome Back!</h1>
					<p>Enter your Credentials</p>
					<button type="button" class="ghost" onclick="redirect();">Sign Up</button>
				</div>
			</div>
		</div>
	</div>
	<script>
		function redirect() {
			window.location = "register.php";
		}

		function isalph(evt) {
			var charCode = (evt.which) ? evt.which : event.keyCode
			if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123))
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