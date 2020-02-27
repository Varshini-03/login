<?php 
	include('connection.php');
	$con =$dbConn;
	session_start();
	$id=$_POST['id'];
	$sql="UPDATE images set dislikes = dislikes+1 where id='{$id}'";
	$result=mysqli_query($con,$sql);
	if($sql)
	{
			header('location:image_explore.php');
	}
		
	mysqli_close($con);
?>