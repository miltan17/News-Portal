<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php

echo'<br>';
				echo'<div style="border-top:2px solid black">';
					echo'<form method="post" action="post.php?id='.$id.'">';
					echo'<h2 style="color:#0033FF">মন্তব্য করুন...</h2>';
					echo'<table width="50%" style="padding:4px" bgcolor="#CCCCCC">';
						echo "<tr>";
							echo'<td>ব্যবহারকারীর নামঃ</td>';
							echo'<td>';
								echo"<input type='text'      name='c_name' placeholder='আপনার নাম...' required='required'/>";
							echo'</td>';
						echo"</tr>";
				 		echo "<tr>";
							echo'<td>ইমেইলঃ</td>';
							echo'<td>';
								echo"<input type='text'      name='c_email' placeholder='আপনার ইমেইল...' required='required'/>";
							echo'</td>';
						echo"</tr>";
						echo"<tr>";
							echo'<td>মন্তব্যঃ</td>';
							echo'<td>';
								echo"<textarea name='c_text' cols='80' rows='4' placeholder='আপনার মন্তব্য করুন...' required='required'/>";
								echo"</textarea>";
							echo'</td>';
						echo"</tr>";
						echo"<tr>";
							 echo'<td colspan="4" align="right">';
							    echo"<input type='submit' name='Post_comment' value='comment' style='background-color:#0033FF'/>";
							 echo'</td>';	
						echo"</tr>";
					echo'</table>';
					
					echo'</form>';
				echo'</div>';
				echo '</div>';
?>
<?php
if(isset($_POST['Post_comment'])){
$host = "sql303.byethost10.com";
$user="b10_15899091";
$pass = "khobor24113017";
$db = "b10_15899091_newspaper";

//establish db connection
require_once'function.php';
$pid=$_REQUEST['id'];
$mysqli = new mysqli($host,$user,$pass,$db);		
$c_name=trim($_POST['c_name']);	
$c_email=trim($_POST['c_email']);
$c_text=trim($_POST['c_text']);
$status='unapprove';
//if(substr($imageType,0,5) == "image")
//{
$query ="select * from user where username='$c_name' and email='$c_email'";
$result=mysqli_query($mysqli,$query);
$rowcount=mysqli_num_rows($result);

if($rowcount==1){
	
	$sql="insert into comments(post_id,c_name,c_email,c_text,status) values(?,?,?,?,?)";

$stmt=$mysqli->prepare($sql);
$stmt->bind_param('issss',$pid,$c_name,$c_email,$c_text,$status);
if($stmt->execute()){
	//echo"<p style='font-size:40px'>your comment will be published after approval!!</p>";
	echo"<script>alert('your comment will be published after approval!!')</script>";
	echo"<script>window.open('post.php?id=$pid')</script>";
	//getpost($pid);
	//echo"post.php?id=$pid";
	
}
}
else{
	echo"<script>alert('you are not regestered!!please regester first')</script>";
	echo"<script>window.open('post.php?id=$pid')</script>";
	
	exit();
	}
}


?>
</body>
</html>