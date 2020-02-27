 <?php
		include('connection.php');
		$con =$dbConn;
$file = $_FILES['image']['tmp_name'];

if (!isset($file))
  echo "Please select a image";
else
{
	$file_name = $_FILES['image']['name'];
  $file_im = addslashes(file_get_contents($_FILES['image']['tmp_name']));
  $insert = mysqli_query($con,"INSERT INTO images(file_name,file_im) VALUES ('$file_name','$file_im')");
  $query=mysqli_fetch_array($insert);
  $row=mysqli_affected_rows($con);
  if($row>0)
  {
	  echo '<script type = "text/javascript">';
			echo 'window.alert("Image Uploaded Successfully!");';
			echo 'window.location.href="home.html";';
			echo '</script>';
  }
  else
  {
	  echo '<script type = "text/javascript">';
			echo 'window.alert("Image not uploaded");';
			echo 'window.location.href="Upload.html";';
			echo '</script>';
  }
  
}
?>