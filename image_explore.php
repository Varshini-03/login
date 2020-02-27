<?php
include('connection.php');
	$con =$dbConn;
?>


<html>
<title>
Explore
</title>
<body>
<table align="center" border="1px" style="width:800px; line-height:40px;">
<tr>
<th colspan="2"> <h2> Select any image to view </h2></th>
</tr>
<tr>
<th> IMAGE </th>
<th> VIEWS </th>
</tr>
<?php
$query=mysqli_query($con,"SELECT * from images");
while($rows=mysqli_fetch_array($query))
{
	$id=$rows['id'];
echo'<tr>
<td ><center><a href="pa_view.php?id='.$rows['id'].'">
<br>
<img style="width:90px;height:70px;"src="data:image/jpeg;base64,'.base64_encode( $rows['file_im'] ).'"/>
</a>
<form id="upvote-form" action="upvote.php" method="post"> '.$rows["likes"].'
<input type="hidden"name="id" value="'.$id.'" autocomplete="off"/>
<button type ="submit"name="upvote"> 
<span>&#128077;</span></button>
</form>

<form id="downvote-form" action="downvote.php" method="post">'.$rows["dislikes"].'
<input type="hidden"name="id"value="'.$id.'" autocomplete="off"/>
<button type ="submit" name="downvote"> 
<span>&#128078;</span></button>
</form>

<td><b><center><font size="24">'.$rows['views'].'</center></font></b></td>
</tr>';
}
?>
<a href="home.html">Back</a>
</table>
</body>
</html>