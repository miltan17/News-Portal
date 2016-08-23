


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Khobor24.com- Log In</title>
<link href="css/admin_login.css" rel="stylesheet" type="text/css">
</head>
<?php
include('admin_log.php'); // Includes Login Script
?>
<body>
<div id="main">
<h1 style="color:#00F">Login Here..........</h1>
<p><img src="img/glyphicons_212_down_arrow.png"/></p>
<div id="login">
  <h2>Login Form</h2>

<form action="" method="POST">
<label style="color:#03F"><strong>UserName :</strong></label>
<input id="name" name="username" placeholder="username" type="text" required="required">
<label style="color:#03F"><strong>Password :</strong></label>
<input id="password" name="password" placeholder="**********" type="password" required="required">
<input name="submit" type="submit" value="Login ">
<span><?php echo $error; ?></span>
</form>
</div>
</div>
</body>
</html>