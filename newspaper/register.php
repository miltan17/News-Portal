<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$host = "sql303.byethost10.com";
$user="b10_15899091";
$pass = "khobor24113017";
$db = "b10_15899091_newspaper";

//establish db connection

$mysqli = new mysqli($host,$user,$pass,$db);
$fname=trim($_POST['fname']);	
$lname=trim($_POST['lname']);
$email=trim($_POST['email']);
$username=trim($_POST['username']);
$password=trim($_POST['password']);


$query ="select * from user where username='$username' and email='$email'";
$result=mysqli_query($mysqli,$query);
$rowcount=mysqli_num_rows($result);

if($rowcount==0){
	

	$sql="insert into user(fname,lname,email,username,password) values(?,?,?,?,?)";

$stmt=$mysqli->prepare($sql);
$stmt->bind_param('sssss',$fname,$lname,$email,$username,$password);
if($stmt->execute()){
	echo"Registered succesfully!!";
	}
	$stmt->close();
	$mysqli->close();
}
else{
	
	
	echo"<p style='color:red;font-size:20px;'>Your email or username have already been regestered!!Please retry..</p>";

	//include('admin_register.php');

	}
	//$stmt->close();
	//$mysqli->close();


?>
</body>
</html>