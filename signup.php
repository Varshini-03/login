 <?php
		include('connection.php');
		$con =$dbConn;
		session_start();
		$Username=$_POST['Username'];
		$email_id =$_POST['email_id'];
		$password=$_POST['password'];
		$query=mysqli_query($con,"select * from users where email_id='{$email_id}'") or die(mysqli_error($con));
		$user_name=mysqli_fetch_array($query);
		$bool=mysqli_affected_rows($con);
		if($bool>0){
			echo '<script type = "text/javascript">';
			echo 'window.alert("You are already a user!");';
			echo 'window.location.href="index.html";';
			echo '</script>';
		}
		else
		{
			$query=mysqli_query($con,"INSERT into users (Username,email_id,password) VALUES ('{$Username}','{$email_id}','{$password}')") or die('query invalid');

			echo '<script type = "text/javascript">';
			echo 'window.alert("You have registered successfully!");';
			echo 'window.location.href="index.html";';
			echo '</script>';
		}
		
mysqli_close($con);