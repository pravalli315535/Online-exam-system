<?php
$filepath = realpath(dirname(__FILE__));
include_once ($filepath.'/classes/User.php');
$user = new User();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	   $name     = $_POST['name'];
	   $userName = $_POST['userName'];
	   $password = $_POST['password'];
	   $email    = $_POST['email'];

	   $userregi = $user->userRegistion($name, $userName, $password, $email);
	   
	   if ($userregi) {
	       echo "<script>alert('Registration Successful!');</script>";
	       echo "<script>window.location.href='index.php';</script>";
	   } else {
	       echo "<script>alert('Registration Failed!');</script>";
	   }
}

?>