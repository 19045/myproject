<?php
session_start();
session_destroy();
unset($_SESSION['userId']);
echo ("<script language='Javascript'>
			window.location='index.php';
			</script>");
