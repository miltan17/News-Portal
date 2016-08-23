<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
session_start();
?>
<?php
 // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
	
	if (empty($_POST['username']) || empty($_POST['password'])) {
		$error = "Username or Password is invalid";
	}
else
{
// Define $username and $password
$username=$_POST['username'];
$password=$_POST['password'];


// To protect MySQL injection for Security purpose
//$username = stripslashes($username);
//$password = stripslashes($password);
//$username = mysql_real_escape_string($username);
//$password = mysql_real_escape_string($password);

//require_once'function.db.php';
	$host = "sql303.byethost10.com";
$user="b10_15899091";
$pass = "khobor24113017";
$db = "b10_15899091_newspaper";


$con=mysqli_connect("$host","$user","$pass","$db");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="select * from authors where password='$password' AND username='$username'";

if ($result=mysqli_query($con,$sql))
  {
  // Return the number of rows in result set
  $rowcount=mysqli_num_rows($result);
  // Free result set
  //mysqli_free_result($result);
  }


if ($rowcount == 1) {
	$_SESSION['login_user']=$username; // Initializing Session
	header("location: admin.php?op=lists"); // Redirecting To Other Page
}

else {
	$error = "Username or Password is invalid";
}

mysql_close($connection); // Closing Connection
}
}
?>
</body>
</html>