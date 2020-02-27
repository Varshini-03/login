<?php
		include('connection.php');
		$con =$dbConn;
		session_start();
		$Username=$_POST['Username'];
		$password=$_POST['password'];
		$query=mysqli_query($con,"select * from users where Username='{$Username}'and password='{$password}'") or die(mysqli_error($con));
		$user_name=mysqli_fetch_array($query);
		$bool=mysqli_affected_rows($con);
		if($bool>0){
			$_SESSION["current_user"]=$user_name['Username'];
			header("location: home.html");
		}
		else
		{
			echo '<script type = "text/javascript">';
			echo 'window.alert("Username or password incorrect. Try again!");';
			echo 'window.location.href="index.html";';
			echo '</script>';
		}
		
mysqli_close($con);