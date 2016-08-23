<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Registration</title>
<link href="css/admin.css" rel="stylesheet" type="text/css" />
</head>
<?php
				require_once'function.php';
?>
<body>

<div class="header" >
    <!--TOP NAVIGATION BAR-->
	<div class="navbar">
    	<div class="navbar-inner" style="display:inline">
        	
                <a href="newspaper.php" style="text-decoration:none; font-size:30px; text-shadow:#F00; font-weight:bolder;">Khobor24.com</a>
          <br /> 
          <br />
             
            
        </div>
    </div>
</div>

<div class="maindiv">

	<div class="subdiv1">
    	<a href="#" style="text-decoration:none; font-size:30px; text-shadow:#F00; font-weight:bolder;"><h1 style="font-size:35px;color:#0F3;">Register here......</h1></a>
        <?php
			//require_once'function.php';
											
				//$op =$_GET['op'];
			
				//$aid =$_REQUEST['aid'];
				
				//switch($op){
					
					//case 'rsave':
						//register();
						//break;
					//case 'lists':
					//default:
					registration();									
				
		//}
		
		?>
    </div> <!--end subdiv1-->
    <!--<div class="subdiv2">
    	<h2>Quick Action</h2>				

        <ul>
        	<li><a href="admin.php?op=lists" style="text-decoration:none; font-size:24px;" class="one">List Post</a></li>
            <li><a href="admin.php?op=add" style="text-decoration:none; font-size:24px;" class="one">Add Post</a></li>
            <li><a href="admin.php?op=adv" style="text-decoration:none; font-size:24px;" class="one">Add Add</a></li>
        </ul>
    </div> <!--end subdiv2--> 

</div> 

</body>
</html>