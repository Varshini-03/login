<?php
include('connection.php');
	$con =$dbConn;
	session_start();
	$id=$_GET['id'];
	?>
<html>
  <head>
    <script src="https://aframe.io/releases/1.0.3/aframe.min.js"></script>
  </head>
  <body>
  <?php
    $sql="UPDATE images set views = views+1 where id='{$id}'";
	$result=mysqli_query($con,$sql);
  	$query=mysqli_query($con,"select * from images where id='{$id}'") or die(mysqli_error($con));
	$im=mysqli_fetch_array($query);
	
	echo'<a href="image_explore.php">BACK</a>
    <a-scene embedded>
	  <a-assets>
    <img id="boxTexture" src="data:image/jpeg;base64,'.base64_encode($im['file_im'] ).'">
    </a-assets>

  <a-sky src="#boxTexture" position="0 2 -5" rotation="0 45 0" scale="2 2 2"></a-sky>
  <a-light type="ambient" color="#445451"></a-light>
  <a-light type="point" intensity="2" position="2 4 4"></a-light>
    </a-scene>'
	?>
  </body>
</html>

