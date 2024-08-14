<?php
session_start();
if($_SERVER['REQUEST_METHOD']=='POST'){

	$username = $_POST['username'];
	$password = $_POST['password'];

	if(isset($_SESSION[$username]))
	{
		if($_SESSION[$username]==$password)
		
		{
			$_SESSION['geton'] = true;
		$_SESSION['user'] = $username;	
			header("Location:home.php");
			die();
		
		}else{
			$_SESSION['geton'] = false;

			echo "WRONG INFORMATION!";
		}
	}else{
			$_SESSION['geton'] = false;
		echo 'NOT FOUND!';
	}

}


?>
