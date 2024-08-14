<?php
session_start();

if($_SERVER['REQUEST_METHOD']=='POST'){

	$username=  $_POST['username'];
	$password = $_POST['password'];

	if(isset($_SESSION[$username])){
		echo "It already exists.";
		//echo "<script>alert('It already exists.')</script>";
		//header('Location:register.html');
		//die("It already exists.");
		
	}else{

		$_SESSION[$username]=$password;
		echo "It is OK!";
		//setCookie($username,$paaword,time()+3600);
		//echo "<script>alert('It is OK!')</script>";
		//header('Location:login.html');
		//die("It is OK!");
		

	}

}
?>
