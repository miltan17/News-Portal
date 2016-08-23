<?php
session_start();
if(isset($_SESSION['login_user'])==false){
	header("location:admin_login.php");
}

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">


<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin panel</title>
<link href="css/admin.css" rel="stylesheet" type="text/css" />
</head>
<?php 
	require_once 'function.php';
?>
<body>

<div class="header" >
    <!--TOP NAVIGATION BAR-->
	<div class="navbar">
    	<div class="navbar-inner" style="display:inline">
        	
                <a href="newspaper.php" style="text-decoration:none; font-size:30px; text-shadow:#F00; font-weight:bolder;">Khobor24.com</a>
                
            
        </div>
    </div>
</div>
<div class="maindiv">

	<div class="subdiv1">
    	<h1 style="font-size:35px">Adminisration Panel</h1>
        <?php
		
			$op =$_GET['op'];
			
				//$aid =$_REQUEST['aid'];
				
				switch($op){
					case 'edit':
						$pid =$_GET['pid'];
						editForm($pid);
						break;
					case 'update':
						$pid =$_REQUEST['pid'];
						editPost($pid);
						break;
					case 'add':
						addPostForm();
						break;
					case 'save':
						addPost();
						break;
					case 'delete':
						$pid =$_GET['pid'];
						deletePost($pid);
						break;
					/*case 'publish':
						publishPost($pid);
						break;
					case 'unpublish':
						unpublishPost($pid);
						break;*/
					case 'comment':
						c_approve();
						break;
					case 'c_delete':
						$nid=$_GET['nid'];
						deleteComment($nid);
						break;
					case 'approval':
						$nid=$_GET['nid'];
						approveComment($nid);
						break;						
					case 'admin_profile':
						profile();
						break;	
					case 'profile_update_form':
						$aid=$_GET['aid'];
						p_update_form($aid);
						break;
					case 'p_update':
						$aid=$_REQUEST['aid'];
						pass_update($aid);
						break;
						
					case 'lists':
					default:
						listPost();								
			
		}
		?>
    </div> <!--end subdiv1-->
    <div class="subdiv2">
    <div id="date_time2" style="font-size:18px;color:#C06">
    <?php 
			   		echo date("l d F Y");
					echo"<br/>";
					echo gmdate("h:i:s A");
			   ?>
               </div>
    	<h2>Quick Action</h2>
        <ul>
        	<li><a href="admin.php?op=lists" style="text-decoration:none; font-size:24px;" class="one">List Post</a></li>
            <li><a href="admin.php?op=add" style="text-decoration:none; font-size:24px;" class="one">Add Post</a></li>
            <li><a href="admin.php?op=comment" style="text-decoration:none; font-size:24px;" class="one">
             <?php
				$host = "sql303.byethost10.com";
$user="b10_15899091";
$pass = "khobor24113017";
$db = "b10_15899091_newspaper";



$mysqli = new mysqli($host,$user,$pass,$db);
				
// Check connection

$sql="select c.post_id from comments as c,user as u where c.c_email=u.email and c.status='unapprove'";

if ($result=mysqli_query($mysqli,$sql))
  {
  // Return the number of rows in result set
  $rowcount=mysqli_num_rows($result);
  printf("comments (%d)",$rowcount);
  // Free result set
  mysqli_free_result($result);
  }
			?>
            </a></li>
            
            <li><a href="admin.php?op=admin_profile" style="text-decoration:none; font-size:24px;" class="one">Admin profile</a></li>
       <li><a href="sign_out.php" style="text-decoration:none; font-size:24px; color:red;" class="one">Log out</a></li>     
        </ul>
       
    </div> <!--end subdiv2-->

</div> <!--end maindiv-->
</body>
</html>