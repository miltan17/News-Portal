<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<?php
//database connection info
$host = "sql303.byethost10.com";
$user="b10_15899091";
$pass = "khobor24113017";
$db = "b10_15899091_newspaper";
//establish database connection
$mysqli=new mysqli($host,$user,$pass,$db);
//mysql_set_charset('utf8');
if($mysqli->connect_error){
	echo"connection error: ".$mysqli->connect_error;
}
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
</body>
</html>