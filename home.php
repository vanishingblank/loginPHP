<?php
session_start();
if(isset($_POST['del'])){

	unset($_SESSION['geton']);
}
if(isset($_SESSION['geton'])&& $_SESSION['geton']){


	echo "welcome ".$_SESSION['user']."!";
}else{
	echo 'Login please!';
	header("Location:login.html");
die("login please!");
}
?>

<form method="post" action="">
<input type="submit" value="logout" name="del">

</form>
