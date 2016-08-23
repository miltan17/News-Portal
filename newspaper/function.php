<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<?php
//show list of all posts
function listPost(){
	require_once'function.db.php';
echo"<h3>Post list</h3>";

$sql="select id,title,details,created,modified,catagory from posts order by modified DESC LIMIT 0,30";
$result=$mysqli->query($sql);
echo"<table class='table'>";
echo"<th>Title</th>";
echo"<th>Created</th>";
echo"<th>Modified</th>";
echo"<th>Catagory</th>";
echo"<th>Action</th>";

while($post=$result->fetch_object()){
echo"<tr>";
echo'<td><a style="text-decoration:none;" href="post.php?id='.$post->id.'">'.$post->title.'</a></td>';
echo"<td>$post->created</td>";
echo"<td>$post->modified</td>";
echo"<td>$post->catagory</td>";
echo"<td>";
echo"<a href=admin.php?op=edit&pid=$post->id style='text-decoration:none;color:#0F0'><i class=icon-edit><img src='img/glyphicons_150_edit.png' width=12 height=12></i></a>&nbsp;";
echo"<a href=admin.php?op=delete&pid=$post->id style='text-decoration:none;color:#F00'><i class=icon-remove><img src='img/glyphicons_207_remove_2.png' width=12 height=12></i></a>&nbsp;";
echo"<a href=admin.php?op=publish&pid=$post->id><i class=icon-arrow-up></i></a>&nbsp;";	
echo"<a href=admin.php?op=unpublish&pid=$post->id><i class=icon-arrow-down></i></a>";

echo"</td>";
echo"</tr>";
}
echo"</table>";
$result->free_result();
$mysqli->close();
}

//show add posts form
function addPostForm(){
echo"<h3>Add Post Here</h3>";
echo"<form action='admin.php?op=save' method='post'>";
echo"<label for='title' style='font-size:20px;'>Title :  </label>";
echo"<input class='input-large' type='text' name='title' required='required' value='' placeholder='type your post title....' style='width:450px; height='40px;''/>";

echo"<p style='font-size:20px; text-align:'top;''>Post content : <textarea class='input-block-level' name='text' rows='3' style='width:350px;'></textarea></p>";
echo"<br/>";
echo"<select name='catagory' style='width:100px; height:40px;'>";
echo"<option value='জাতীয়' name='জাতীয়'>জাতীয়</option>";
echo"<option value='আন্তর্জাতিক' name='আন্তর্জাতিক'>আন্তর্জাতিক</option>";
echo"<option value='খেলা' name='খেলা'>খেলা</option>";
echo"<option value='অর্থনীতি' name='অর্থনীতি'>অর্থনীতি</option>";
echo"<option value='রাজনীতি' name='রাজনীতি'>রাজনীতি</option>";
echo"<option value='বিনোদন' name='বিনোদন'>বিনোদন</option>";
echo"<option value='স্বাস্থ্য' name='স্বাস্থ্য'>স্বাস্থ্য</option>";
echo"<option value='প্রযুক্তি' name='প্রযুক্তি'>প্রযুক্তি</option>";
echo"<option value='শিক্ষা' name='শিক্ষা'>শিক্ষা</option>";
echo"<option value='অন্যান্য' name='অন্যান্য'>অন্যান্য</option>";
echo"<option value='স্পটলাইট' name='স্পটলাইট'>স্পটলাইট</option>";
echo"</select>";
echo"<br/><br>";
echo"<label for='photo' style='font-size:20px;'>upload photo :</label><br/>";
echo"<br/>";
//echo"<input class='input-large' type='text' name='image_name' value='' placeholder='type your image name....'/>";
echo"<input type='file' name='image' />";
echo"<br/>";
echo"<input class='btn btn-primary' type='submit' value='Add Post' style='height:40px; background-color:#0099FF;'/>&nbsp;";
echo"<input class='btn' type='reset' value='cancel' style='height:40px; background-color:#0099FF;''/>";
echo"</form>";	
}

//save post submitted by add form
function addPost(){
	//require_once'function.db.php';
	$host = "sql303.byethost10.com";
$user="b10_15899091";
$pass = "khobor24113017";
$db = "b10_15899091_newspaper";

//establish db connection

$mysqli = new mysqli($host,$user,$pass,$db);
$title=trim($_POST['title']);	
$content=trim($_POST['text']);
$photo=trim($_POST['image']);
$catagory=trim($_POST['catagory']);

//$imageName=trim($_POST['image']['image_name']);
//$imageData=trim(file_get_contents($_FILES['image']['tmp_name']));
//$imageType=trim($_POST['image']['type']);
//$imageName=mysql_real_escape_string($_FILES['image']['name']);
//$imageData=mysql_real_escape_string(file_get_contents($_FILES['image']['tmp_name']));
//$imageType=mysql_real_escape_string($_FILES['image']['type']);
$author='1';
//if(substr($imageType,0,5) == "image")
//{
	$sql="insert into posts(title,details,author_id,created,modified,image,catagory) values(?,?,?,NOW(),NOW(),?,?)";

$stmt=$mysqli->prepare($sql);
$stmt->bind_param('ssiss',$title,$content,$author,$photo,$catagory);
if($stmt->execute()){
	echo"Post <br> $title </b> added succesfully!!";
	}
	$stmt->close();
	$mysqli->close();
}
//else{
//echo"only images are allowed"; 
//}

//}

//Delete a post
function deletePost($id){

$host = "sql303.byethost10.com";
$user="b10_15899091";
$pass = "khobor24113017";
$db = "b10_15899091_newspaper";
//establish db connection

$mysqli = new mysqli($host,$user,$pass,$db);

//select post
$sql ="delete from posts where id= ?";

//prepare statement
$stmt =$mysqli->prepare($sql);
$stmt->bind_param('i', $id);
$stmt->execute();
//$stmt->bind_result($id,$title,$details,$author_id,$created,$modified,$image,$catagory);
echo"post # $id deleted.";
			$stmt->close();
			$mysqli->close();
}

//edit post form
function editForm($id){

$host = "sql303.byethost10.com";
$user="b10_15899091";
$pass = "khobor24113017";
$db = "b10_15899091_newspaper";

//establish db connection

$mysqli = new mysqli($host,$user,$pass,$db);
$sql="select id,title,details,author_id,created,modified,image,catagory from posts where id=?";
$stmt=$mysqli->prepare($sql);
$stmt->bind_param('i',$id);
$stmt->execute();
$stmt->bind_result($id,$title,$details,$author_id,$created,$modified,$image,$catagory);


while($stmt->fetch()){
echo"<h3>Edit Post</h3>";
echo"<form action='admin.php?op=update' method='post'>";
echo"<label for='title' style='font-size:20px;'>Title :  </label>";
echo"<input class='input-large' type='text' name='title' required='required' value='".$title."' style='width:450px; height='40px;''/>";

echo"<p style='font-size:20px; text-align:'top;''>Post content : <textarea class='input-block-level' name='text' rows='3' style='width:350px; height:100px;'>";
echo $details;
echo"</textarea></p>";
echo"<br/>";
echo"<select name='catagory' style='width:100px; height:40px;'>";
echo"<option value='জাতীয়' name='জাতীয়'>জাতীয়</option>";
echo"<option value='আন্তর্জাতিক' name='আন্তর্জাতিক'>আন্তর্জাতিক</option>";
echo"<option value='খেলা' name='খেলা'>খেলা</option>";
echo"<option value='অর্থনীতি' name='অর্থনীতি'>অর্থনীতি</option>";
echo"<option value='রাজনীতি' name='রাজনীতি'>রাজনীতি</option>";
echo"<option value='বিনোদন' name='বিনোদন'>বিনোদন</option>";
echo"<option value='স্বাস্থ্য' name='স্বাস্থ্য'>স্বাস্থ্য</option>";
echo"<option value='প্রযুক্তি' name='প্রযুক্তি'>প্রযুক্তি</option>";
echo"<option value='শিক্ষা' name='শিক্ষা'>শিক্ষা</option>";
echo"<option value='অন্যান্য' name='অন্যান্য'>অন্যান্য</option>";
echo"<option value='স্পটলাইট' name='স্পটলাইট'>স্পটলাইট</option>";
echo"</select>";
echo"<br/><br>";
echo"<lebel for='created'>created: <input type='text' name='created' value='".$created."'/></lebel>";
echo"</br>";
echo"<lebel for='modified'>modified: <input type='text' name='modified' value='".$modified."'/></lebel>";
echo"</br></br>";
echo"<label for='photo' style='font-size:20px;'>upload photo :</label><br/>";
//echo"<input class='input-large' type='text' name='image_name' value='' placeholder='type your image name....'/>";
echo"<input type='file' name='image' />";
echo"<br/>";
echo"<input type='hidden' name='pid' value=$id";
echo"<br/></br>";
echo"<input class='btn btn-primary' type='submit' value='update Post' style='height:40px; background-color:#0099FF;'/>&nbsp;";
echo"<input class='btn' type='reset' value='cancel' style='height:40px; background-color:#0099FF;''/>";
echo"</form>";	
}
$stmt->close();
$mysqli->close();

}

//edit post 
function editPost($id){
$host = "sql303.byethost10.com";
$user="b10_15899091";
$pass = "khobor24113017";
$db = "b10_15899091_newspaper";

//establish db connection

$mysqli = new mysqli($host,$user,$pass,$db);
$title=trim($_POST['title']);	
$content=trim($_POST['text']);
$created=trim($_POST['created']);
$modified=trim($_POST['modified']);
$photo=trim($_POST['image']);
$catagory=trim($_POST['catagory']);

$sql="update posts set title=?, details=?, created=?, modified=NOW(), image=?, catagory=? where id=?";

$stmt=$mysqli->prepare($sql);
$stmt->bind_param('sssssi',$title,$content,$created, $photo,$catagory,$id);
if($stmt->execute()){
	echo"Post <br> $title </b> added succesfully!!";
	}
	$stmt->close();
	$mysqli->close();	
}

//publish a post
function publishPost($id){
echo"post published";	
}

//unpublish a post
function unpublishPost($id){
echo"post unpublished";	
}

function getpost($id){
	//database connection info
$host = "sql303.byethost10.com";
$user="b10_15899091";
$pass = "khobor24113017";
$db = "b10_15899091_newspaper";
//establish db connection

$mysqli = new mysqli($host,$user,$pass,$db);

//select post
$sql = "select p.id,p.title as title,p.details as details,
p.created as created,p.image as image,p.catagory as catagory,a.id as authorID,a.fname as firstname,
a.lname as lastname from posts p,authors a where
p.author_id=a.id AND p.id=? order by created DESC";

//prepare statement
$stmt =$mysqli->prepare($sql);
$stmt->bind_param('i', $id);
$stmt->execute();
$stmt->bind_result($id,$title,$details,$created,$image,$catagory,$authorID,$firstname,$lastname);
echo'<div>';
while($stmt->fetch()){
				
				
				
				//echo'<div>';
				echo'<h3 style="border-bottom:2px solid #CCC;border-top:2px solid #CCC; height:auto;">';
				echo'<a href="newspaper.php" style="text-decoration:none;">প্রচ্ছদ</a>&nbsp;&nbsp;';
				echo'<a href="#" style="text-decoration:none;">'.$catagory.'</a>';
				echo'</h3>';
				//echo'</div>';
				
				echo '<div class="post-detail">';
				echo '<h1 style="border-bottom:2px solid #CCC">'.$title.'</h1>';
				echo '<address><span class="icon-user"></span>'.$firstname.' '.$lastname.'&nbsp;&nbsp;
				<span class="icon-calendar"></span> '. date("d M Y h:i:s a",strtotime($created)).'</address>';
				echo'</div>';
				
				echo'<div>';
				echo'<div style="float:left">';
				echo'<img src="img/'.$image.'"/>&nbsp;';
				echo'</div>';
				
				
				echo'<div style="border-bottom:2px solid black;border-right:2px solid #CCC;">';
				echo '<p>'.nl2br($details).'</p>';
				echo'</div>';
											
				
}
echo'</div>';

				
				$sql1="select c.post_id from comments as c,user as u where c.post_id=$id and c.c_email=u.email and c.status='approve'";

if ($result=mysqli_query($mysqli,$sql1))
  {
  // Return the number of rows in result set
  $rowcount=mysqli_num_rows($result);
  echo"<h2 style='color:red'>comments($rowcount)</h2>";
  // Free result set
  mysqli_free_result($result);
  }
				
				
				
				
				$sql = "select c_name,c_text from comments where status='approve' and post_id=?";

//prepare statement
$stmt =$mysqli->prepare($sql);
$stmt->bind_param('i',$id);
$stmt->execute();
$stmt->bind_result($c_name,$c_text);
echo"<div style='border:2px solid #CCC;'>";
while($stmt->fetch()){
	echo"<div style='background-color:#F3F3F3'>";
	echo"<p style='color:#099'>$c_name: &nbsp;&nbsp; $c_text</p>";
	echo"</div>";
		
	}
		
		echo"<br>";	
				include('comment.php');
		
			$stmt->close();
			$mysqli->close();
}

function jatio1(){
	require_once'function.db.php';
	
	//select post
$sql = "select p.id,p.title as title,p.details as details,
p.created as created,p.image as image,p.catagory as catagory,a.id as authorID,a.fname as firstname,
a.lname as lastname from posts p,authors a where p.catagory='জাতীয়' order by created DESC LIMIT 0,1";

//prepare statement
$stmt =$mysqli->prepare($sql);
//$stmt->bind_param('i', $id);
$stmt->execute();
$stmt->bind_result($id,$title,$details,$created,$image,$catagory,$authorID,$firstname,$lastname);
while($stmt->fetch()){
				echo'<div>';
				echo'<img src="img/'.$image.'" width="300dp" height="200dp"/>';
				echo'</div>';
								
				echo '<div class="post-detail">';
				echo '<h2 style="border-bottom:2px;"><a href="post.php?id='.$id.'" class="one">'.$title.'</a></h2>';
				
				echo '<p class="summary">'.substr($details,0,300). ' ...<a href="post.php?id='.$id.'" style="text-decoration:none;" class="one">বিস্তারিত</a></p>';
				echo '</div>';
			}
			$stmt->close();
			$mysqli->close();
}


function jatio2(){
	//require_once'function.db.php';
	$host = "sql303.byethost10.com";
$user="b10_15899091";
$pass = "khobor24113017";
$db = "b10_15899091_newspaper";

//establish database connection
$mysqli=new mysqli($host,$user,$pass,$db);

if($mysqli->connect_error){
	echo"connection error: ".$mysqli->connect_error;
}
	//select post
$sql = "select p.id,p.title as title,p.details as details,
p.created as created,p.image as image,p.catagory as catagory,a.id as authorID,a.fname as firstname,
a.lname as lastname from posts p,authors a where p.catagory='জাতীয়' order by created DESC LIMIT 1,2";

//prepare statement
$stmt =$mysqli->prepare($sql);
//$stmt->bind_param('i', $id);
$stmt->execute();
$stmt->bind_result($id,$title,$details,$created,$image,$catagory,$authorID,$firstname,$lastname);
while($stmt->fetch()){
				echo'<div>';
				echo'<a href="post.php?id='.$id.'" class="one">';
					echo'<div style="border-bottom:2px solid #CCC;float:left;">';
						echo'<img src="img/'.$image.'" width="100dp" height="60dp"/>';
					echo'</div>';
					echo'<br>';
					echo'<div>';
						echo ''.$title.'';
						echo'</div>';
						echo'</a>';
					echo'</div>';
					//echo'<div style="float:right;">';
						//echo '<h4>'.$title.'</h4>';
					//echo'</div>';
				//echo'</div>';
								
			}
			$stmt->close();
			$mysqli->close();
	
}


function sirsokhobor(){
	//require_once'function.db.php';
	$host = "sql303.byethost10.com";
$user="b10_15899091";
$pass = "khobor24113017";
$db = "b10_15899091_newspaper";

//establish database connection
$mysqli=new mysqli($host,$user,$pass,$db);

if($mysqli->connect_error){
	echo"connection error: ".$mysqli->connect_error;
}
	//select post
$sql = "select p.id,p.title as title,p.details as details,
p.created as created,p.image as image,p.catagory as catagory,a.id as authorID,a.fname as firstname,
a.lname as lastname from posts p,authors a where p.catagory not in('অন্যান্য','লাইফস্টাইল','স্বাস্থ্য','বিনোদন') order by created DESC LIMIT 0,7";

//prepare statement
$stmt =$mysqli->prepare($sql);
//$stmt->bind_param('i', $id);
$stmt->execute();
$stmt->bind_result($id,$title,$details,$created,$image,$catagory,$authorID,$firstname,$lastname);
while($stmt->fetch()){
				echo'<li><a href="post.php?id='.$id.'" class="one">'.$title.'</li><br></a>';								
			}
			$stmt->close();
			$mysqli->close();
	
}

function spot_image(){
	$host = "sql303.byethost10.com";
$user="b10_15899091";
$pass = "khobor24113017";
$db = "b10_15899091_newspaper";

//establish database connection
$mysqli=new mysqli($host,$user,$pass,$db);

if($mysqli->connect_error){
	echo"connection error: ".$mysqli->connect_error;
}
	//select post
$sql = "select p.id,p.title as title,p.details as details,
p.created as created,p.image as image,p.catagory as catagory,a.id as authorID,a.fname as firstname,
a.lname as lastname from posts p,authors a where p.catagory='স্পটলাইট' order by created DESC LIMIT 0,1";

//prepare statement
$stmt =$mysqli->prepare($sql);
//$stmt->bind_param('i', $id);
$stmt->execute();
$stmt->bind_result($id,$title,$details,$created,$image,$catagory,$authorID,$firstname,$lastname);
while($stmt->fetch()){
				echo'<div>';
				echo'<img src="img/'.$image.'" width="250dp" height="200dp"/>';
				echo'</div>';
								
				echo '<div class="post-detail">';
				echo '<h2 style="border-bottom:2px;"><a href="post.php?id='.$id.'" class="one">'.$title.'</a></h2>';
				
				echo '<p class="summary">'.substr($details,0,250). ' ...<a href="post.php?id='.$id.'" style="text-decoration:none;" class="one">বিস্তারিত</a></p>';
				echo '</div>';
			}
			$stmt->close();
			$mysqli->close();
}

function sorboses(){
	$host = "sql303.byethost10.com";
$user="b10_15899091";
$pass = "khobor24113017";
$db = "b10_15899091_newspaper";

//establish database connection
$mysqli=new mysqli($host,$user,$pass,$db);

if($mysqli->connect_error){
	echo"connection error: ".$mysqli->connect_error;
}
	//select post
$sql = "select p.id,p.title as title,p.details as details,
p.created as created,p.image as image,p.catagory as catagory,a.id as authorID,a.fname as firstname,
a.lname as lastname from posts p,authors a where p.catagory IN('রাজনীতি','খেলা') order by created DESC LIMIT 0,6";

//prepare statement
$stmt =$mysqli->prepare($sql);
//$stmt->bind_param('i', $id);
$stmt->execute();
$stmt->bind_result($id,$title,$details,$created,$image,$catagory,$authorID,$firstname,$lastname);
echo'<marquee scrolldelay="150" onmousemove="this.setAttribute("scrollamount",0,0)" onmouseout="this.setAttribute("scrollamount",6,0)">';
while($stmt->fetch()){
				echo'<a href="post.php?id='.$id.'" style="text-decoration:none" class="latestnews">'.$title.'</a>&nbsp;&nbsp;&nbsp;';								
			}
			echo'</marquee>';
			$stmt->close();
			$mysqli->close();
	
}

function rajniti1(){

$host = "sql303.byethost10.com";
$user="b10_15899091";
$pass = "khobor24113017";
$db = "b10_15899091_newspaper";

//establish database connection
$mysqli=new mysqli($host,$user,$pass,$db);

if($mysqli->connect_error){
	echo"connection error: ".$mysqli->connect_error;
}
	
	//select post
$sql = "select p.id,p.title as title,p.details as details,
p.created as created,p.image as image,p.catagory as catagory,a.id as authorID,a.fname as firstname,
a.lname as lastname from posts p,authors a where p.catagory='রাজনীতি' order by created DESC LIMIT 0,1";

//prepare statement
$stmt =$mysqli->prepare($sql);
//$stmt->bind_param('i', $id);
$stmt->execute();
$stmt->bind_result($id,$title,$details,$created,$image,$catagory,$authorID,$firstname,$lastname);
while($stmt->fetch()){
				echo'<div>';
				echo'<img src="img/'.$image.'" width="340dp" height="200dp"/>';
				echo'</div>';
								
				echo '<div class="post-detail">';
				echo '<h2 style="border-bottom:2px;"><a href="post.php?id='.$id.'" class="one">'.$title.'</a></h2>';
				
				echo '<p class="summary">'.substr($details,0,350). ' ...<a href="post.php?id='.$id.'" style="text-decoration:none;" class="one">বিস্তারিত</a></p>';
				echo '</div>';
			}
			$stmt->close();
			$mysqli->close();	
}

function rajniti2(){
	
	$host = "sql303.byethost10.com";
$user="b10_15899091";
$pass = "khobor24113017";
$db = "b10_15899091_newspaper";
	//establish database connection
	$mysqli=new mysqli($host,$user,$pass,$db);

	if($mysqli->connect_error){
		echo"connection error: ".$mysqli->connect_error;
	}
	//select post
	$sql = "select p.id,p.title as title,p.details as details,
	p.created as created,p.image as image,p.catagory as catagory,a.id as authorID,a.fname as 				firstname, a.lname as lastname from posts p,authors a where p.catagory='রাজনীতি' order by created DESC LIMIT 1,6";

//prepare statement
$stmt =$mysqli->prepare($sql);
//$stmt->bind_param('i', $id);
$stmt->execute();
$stmt->bind_result($id,$title,$details,$created,$image,$catagory,$authorID,$firstname,$lastname);
echo '<ul style="list-style-type: none;">';
while($stmt->fetch()){
				echo'<li><a href="post.php?id='.$id.'" class="one">'.$title.'</li><br></a>';								
			}
			echo'</ul>';
			$stmt->close();
			$mysqli->close();
	
}

function khela1(){
	$host = "sql303.byethost10.com";
$user="b10_15899091";
$pass = "khobor24113017";
$db = "b10_15899091_newspaper";
	//establish database connection
	$mysqli=new mysqli($host,$user,$pass,$db);

	if($mysqli->connect_error){
		echo"connection error: ".$mysqli->connect_error;
	}
	//select post
	$sql = "select p.id,p.title as title,p.details as details,
	p.created as created,p.image as image,p.catagory as catagory,a.id as authorID,a.fname as 				firstname, a.lname as lastname from posts p,authors a where p.catagory='খেলা' order by created DESC LIMIT 1,7";

//prepare statement
$stmt =$mysqli->prepare($sql);
//$stmt->bind_param('i', $id);
$stmt->execute();
$stmt->bind_result($id,$title,$details,$created,$image,$catagory,$authorID,$firstname,$lastname);
echo '<ul style="list-style-type: none;">';
while($stmt->fetch()){
				echo'<li><a href="post.php?id='.$id.'" class="one">'.$title.'</li><br></a>';								
			}
			echo'</ul>';
			$stmt->close();
			$mysqli->close();
	
}

function khela2(){
	
	$host = "sql303.byethost10.com";
$user="b10_15899091";
$pass = "khobor24113017";
$db = "b10_15899091_newspaper";

//establish database connection
$mysqli=new mysqli($host,$user,$pass,$db);

if($mysqli->connect_error){
	echo"connection error: ".$mysqli->connect_error;
}
	
	//select post
$sql = "select p.id,p.title as title,p.details as details,
p.created as created,p.image as image,p.catagory as catagory,a.id as authorID,a.fname as firstname,
a.lname as lastname from posts p,authors a where p.catagory='খেলা' order by created DESC LIMIT 0,1";

//prepare statement
$stmt =$mysqli->prepare($sql);
//$stmt->bind_param('i', $id);
$stmt->execute();
$stmt->bind_result($id,$title,$details,$created,$image,$catagory,$authorID,$firstname,$lastname);
while($stmt->fetch()){
				echo'<div>';
				echo'<img src="img/'.$image.'" width="325dp" height="200dp"/>';
				echo'</div>';
								
				echo '<div class="post-detail">';
				echo '<h2 style="border-bottom:2px;"><a href="post.php?id='.$id.'" class="one">'.$title.'</a></h2>';
				
				echo '<p class="summary">'.substr($details,0,350). ' ...<a href="post.php?id='.$id.'" style="text-decoration:none;" class="one">বিস্তারিত</a></p>';
				echo '</div>';
			}
			$stmt->close();
			$mysqli->close();	
}


function binodon1(){
	$host = "sql303.byethost10.com";
$user="b10_15899091";
$pass = "khobor24113017";
$db = "b10_15899091_newspaper";

//establish database connection
$mysqli=new mysqli($host,$user,$pass,$db);

if($mysqli->connect_error){
	echo"connection error: ".$mysqli->connect_error;
}
	
	//select post
$sql = "select p.id,p.title as title,p.details as details,
p.created as created,p.image as image,p.catagory as catagory,a.id as authorID,a.fname as firstname,
a.lname as lastname from posts p,authors a where p.catagory='বিনোদন' order by created DESC LIMIT 0,1";

//prepare statement
$stmt =$mysqli->prepare($sql);
//$stmt->bind_param('i', $id);
$stmt->execute();
$stmt->bind_result($id,$title,$details,$created,$image,$catagory,$authorID,$firstname,$lastname);
while($stmt->fetch()){
				echo'<div>';
				echo'<img src="img/'.$image.'" width="340dp" height="200dp"/>';
				echo'</div>';
								
				echo '<div class="post-detail">';
				echo '<h2 style="border-bottom:2px;"><a href="post.php?id='.$id.'" class="one">'.$title.'</a></h2>';
				
				echo '<p class="summary">'.substr($details,0,350). ' ...<a href="post.php?id='.$id.'" style="text-decoration:none;" class="one">বিস্তারিত</a></p>';
				echo '</div>';
			}
			$stmt->close();
			$mysqli->close();	
}

function binodon2(){
	
	$host = "sql303.byethost10.com";
$user="b10_15899091";
$pass = "khobor24113017";
$db = "b10_15899091_newspaper";

	//establish database connection
	$mysqli=new mysqli($host,$user,$pass,$db);

	if($mysqli->connect_error){
		echo"connection error: ".$mysqli->connect_error;
	}
	//select post
	$sql = "select p.id,p.title as title,p.details as details,
	p.created as created,p.image as image,p.catagory as catagory,a.id as authorID,a.fname as 				firstname, a.lname as lastname from posts p,authors a where p.catagory='বিনোদন' order by created DESC LIMIT 1,7";

//prepare statement
$stmt =$mysqli->prepare($sql);
//$stmt->bind_param('i', $id);
$stmt->execute();
$stmt->bind_result($id,$title,$details,$created,$image,$catagory,$authorID,$firstname,$lastname);
echo '<ul style="list-style-type: none;">';
while($stmt->fetch()){
				echo'<li><a href="post.php?id='.$id.'" class="one">'.$title.'</li><br></a>';								
			}
			echo'</ul>';
			$stmt->close();
			$mysqli->close();
	
}


function bangladesh1(){
	
	$host = "sql303.byethost10.com";
$user="b10_15899091";
$pass = "khobor24113017";
$db = "b10_15899091_newspaper";

	//establish database connection
	$mysqli=new mysqli($host,$user,$pass,$db);

	if($mysqli->connect_error){
		echo"connection error: ".$mysqli->connect_error;
	}
	//select post
	$sql = "select p.id,p.title as title,p.details as details,
	p.created as created,p.image as image,p.catagory as catagory,a.id as authorID,a.fname as 				firstname, a.lname as lastname from posts p,authors a where p.catagory='জাতীয়' order by created DESC LIMIT 1,7";

//prepare statement
$stmt =$mysqli->prepare($sql);
//$stmt->bind_param('i', $id);
$stmt->execute();
$stmt->bind_result($id,$title,$details,$created,$image,$catagory,$authorID,$firstname,$lastname);
echo '<ul style="list-style-type: none;">';
while($stmt->fetch()){
				echo'<li><a href="post.php?id='.$id.'" class="one">'.$title.'</li><br></a>';								
			}
			echo'</ul>';
			$stmt->close();
			$mysqli->close();
	
}


function bangladesh2(){
	
	
	$host = "sql303.byethost10.com";
$user="b10_15899091";
$pass = "khobor24113017";
$db = "b10_15899091_newspaper";

//establish database connection
$mysqli=new mysqli($host,$user,$pass,$db);

if($mysqli->connect_error){
	echo"connection error: ".$mysqli->connect_error;
}
	
	//select post
$sql = "select p.id,p.title as title,p.details as details,
p.created as created,p.image as image,p.catagory as catagory,a.id as authorID,a.fname as firstname,
a.lname as lastname from posts p,authors a where p.catagory='জাতীয়' order by created DESC LIMIT 0,1";
//prepare statement
$stmt =$mysqli->prepare($sql);
//$stmt->bind_param('i', $id);
$stmt->execute();
$stmt->bind_result($id,$title,$details,$created,$image,$catagory,$authorID,$firstname,$lastname);
while($stmt->fetch()){
				echo'<div>';
				echo'<img src="img/'.$image.'" width="325dp" height="200dp"/>';
				echo'</div>';
								
				echo '<div class="post-detail">';
				echo '<h2 style="border-bottom:2px;"><a href="post.php?id='.$id.'" class="one">'.$title.'</a></h2>';
				
				echo '<p class="summary">'.substr($details,0,350). ' ...<a href="post.php?id='.$id.'" style="text-decoration:none;" class="one">বিস্তারিত</a></p>';
				echo '</div>';
			}
			$stmt->close();
			$mysqli->close();	
}


function antorjatik1(){

$host = "sql303.byethost10.com";
$user="b10_15899091";
$pass = "khobor24113017";
$db = "b10_15899091_newspaper";

//establish database connection
$mysqli=new mysqli($host,$user,$pass,$db);

if($mysqli->connect_error){
	echo"connection error: ".$mysqli->connect_error;
}
	
	//select post
$sql = "select p.id,p.title as title,p.details as details,
p.created as created,p.image as image,p.catagory as catagory,a.id as authorID,a.fname as firstname,
a.lname as lastname from posts p,authors a where p.catagory='আন্তর্জাতিক' order by created DESC LIMIT 0,1";

//prepare statement
$stmt =$mysqli->prepare($sql);
//$stmt->bind_param('i', $id);
$stmt->execute();
$stmt->bind_result($id,$title,$details,$created,$image,$catagory,$authorID,$firstname,$lastname);
while($stmt->fetch()){
				echo'<div>';
				echo'<img src="img/'.$image.'" width="340dp" height="200dp"/>';
				echo'</div>';
								
				echo '<div class="post-detail">';
				echo '<h2 style="border-bottom:2px;"><a href="post.php?id='.$id.'" class="one">'.$title.'</a></h2>';
				
				echo '<p class="summary">'.substr($details,0,350). ' ...<a href="post.php?id='.$id.'" style="text-decoration:none;" class="one">বিস্তারিত</a></p>';
				echo '</div>';
			}
			$stmt->close();
			$mysqli->close();	
}


function antorjatik2(){
	
	$host = "sql303.byethost10.com";
$user="b10_15899091";
$pass = "khobor24113017";
$db = "b10_15899091_newspaper";
	//establish database connection
	$mysqli=new mysqli($host,$user,$pass,$db);

	if($mysqli->connect_error){
		echo"connection error: ".$mysqli->connect_error;
	}
	//select post
	$sql = "select p.id,p.title as title,p.details as details,
	p.created as created,p.image as image,p.catagory as catagory,a.id as authorID,a.fname as 				firstname, a.lname as lastname from posts p,authors a where p.catagory='আন্তর্জাতিক' order by created DESC LIMIT 1,7";

//prepare statement
$stmt =$mysqli->prepare($sql);
//$stmt->bind_param('i', $id);
$stmt->execute();
$stmt->bind_result($id,$title,$details,$created,$image,$catagory,$authorID,$firstname,$lastname);
echo '<ul style="list-style-type: none;">';
while($stmt->fetch()){
				echo'<li><a href="post.php?id='.$id.'" class="one">'.$title.'</li><br></a>';								
			}
			echo'</ul>';
			$stmt->close();
			$mysqli->close();
	
}

function search(){
	
	$host = "sql303.byethost10.com";
$user="b10_15899091";
$pass = "khobor24113017";
$db = "b10_15899091_newspaper";

	//establish database connection
	$mysqli=new mysqli($host,$user,$pass,$db);

	if($mysqli->connect_error){
		echo"connection error: ".$mysqli->connect_error;
	}
echo"<div style='float:right;'>";	
echo"<form action='http://www.google.com/search' target='_blank' style='float:left;'>";
echo"<input class='input-large' type='text' name='as_q' value='' placeholder='search here....' style='height:20px;width:400px'/>&nbsp;";
echo"<input class='btn btn-primary' type='submit' value='search' title='search' style='height:30px;background-color:#06F'/>";
echo"</form>";	
echo"</div>";
}


function projukti(){
$host = "sql303.byethost10.com";
$user="b10_15899091";
$pass = "khobor24113017";
$db = "b10_15899091_newspaper";

//establish database connection
$mysqli=new mysqli($host,$user,$pass,$db);

if($mysqli->connect_error){
	echo"connection error: ".$mysqli->connect_error;
}
	
	//select post
$sql = "select p.id,p.title as title,p.details as details,
p.created as created,p.image as image,p.catagory as catagory,a.id as authorID,a.fname as firstname,
a.lname as lastname from posts p,authors a where p.catagory='প্রযুক্তি' order by created DESC LIMIT 0,1";

//prepare statement
$stmt =$mysqli->prepare($sql);
//$stmt->bind_param('i', $id);
$stmt->execute();
$stmt->bind_result($id,$title,$details,$created,$image,$catagory,$authorID,$firstname,$lastname);
while($stmt->fetch()){
				echo'<div>';
				echo'<img src="img/'.$image.'" width="385dp" height="250dp"/>';
				echo'</div>';
								
				echo '<div class="post-detail">';
				echo '<h2 style="border-bottom:2px;"><a href="post.php?id='.$id.'" class="one">'.$title.'</a></h2>';
				
				echo '<p class="summary">'.substr($details,0,500). ' ...<a href="post.php?id='.$id.'" style="text-decoration:none;" class="one">বিস্তারিত</a></p>';
				echo '</div>';
			}
			$stmt->close();
			$mysqli->close();	
}


function economics(){

$host = "sql303.byethost10.com";
$user="b10_15899091";
$pass = "khobor24113017";
$db = "b10_15899091_newspaper";

//establish db connection

$mysqli = new mysqli($host,$user,$pass,$db);

echo'<div id="news2" style="font-size:18px; padding-top:10px">';
	echo'<div style="height:30px; background:#003; width:360px; text-align:center;color:#FFF">অর্থনীতি খবর</div>';
	echo'<div>';
		$sql = "select p.id,p.title as title,p.details as details,
	p.created as created,p.image as image,p.catagory as catagory,a.id as authorID,a.fname as firstname, a.lname as lastname from posts p,authors a where p.catagory='অর্থনীতি' order by created DESC LIMIT 0,7";

//prepare statement
$stmt =$mysqli->prepare($sql);
//$stmt->bind_param('i', $id);
$stmt->execute();
$stmt->bind_result($id,$title,$details,$created,$image,$catagory,$authorID,$firstname,$lastname);
echo '<ul style="list-style-type: none;">';
while($stmt->fetch()){
				echo'<li><a href="post.php?id='.$id.'" class="one">'.$title.'</li><br></a>';								
			}
			echo'</ul>';
			$stmt->close();
			$mysqli->close();
	
	echo'</div>';
	echo'</div>'; //<!--end news2-->	
}


function projukti_list(){
	
	$host = "sql303.byethost10.com";
$user="b10_15899091";
$pass = "khobor24113017";
$db = "b10_15899091_newspaper";

//establish db connection

$mysqli = new mysqli($host,$user,$pass,$db);

echo'<div id="news2" style="font-size:18px; padding-top:10px">';
	echo'<div style="height:30px; background:#003; width:360px; text-align:center;color:#FFF">প্রযুক্তির খবর</div>';
	echo'<div>';
		$sql = "select p.id,p.title as title,p.details as details,
	p.created as created,p.image as image,p.catagory as catagory,a.id as authorID,a.fname as firstname, a.lname as lastname from posts p,authors a where p.catagory='প্রযুক্তি' order by created DESC LIMIT 0,7";

//prepare statement
$stmt =$mysqli->prepare($sql);
//$stmt->bind_param('i', $id);
$stmt->execute();
$stmt->bind_result($id,$title,$details,$created,$image,$catagory,$authorID,$firstname,$lastname);
echo '<ul style="list-style-type: none;">';
while($stmt->fetch()){
				echo'<li><a href="post.php?id='.$id.'" class="one">'.$title.'</li><br></a>';								
			}
			echo'</ul>';
			$stmt->close();
			$mysqli->close();
	
	echo'</div>';
	echo'</div>'; //<!--end news2-->
}

function health_list(){
	
	$host = "sql303.byethost10.com";
$user="b10_15899091";
$pass = "khobor24113017";
$db = "b10_15899091_newspaper";

//establish db connection

$mysqli = new mysqli($host,$user,$pass,$db);

echo'<div id="news2" style="font-size:18px; padding-top:10px">';
	echo'<div style="height:30px; background:#003; width:360px; text-align:center;color:#FFF">স্বাস্থ্য খবর</div>';
	echo'<div>';
		$sql = "select p.id,p.title as title,p.details as details,
	p.created as created,p.image as image,p.catagory as catagory,a.id as authorID,a.fname as firstname, a.lname as lastname from posts p,authors a where p.catagory='স্বাস্থ্য' order by created DESC LIMIT 0,7";

//prepare statement
$stmt =$mysqli->prepare($sql);
//$stmt->bind_param('i', $id);
$stmt->execute();
$stmt->bind_result($id,$title,$details,$created,$image,$catagory,$authorID,$firstname,$lastname);
echo '<ul style="list-style-type: none;">';
while($stmt->fetch()){
				echo'<li><a href="post.php?id='.$id.'" class="one">'.$title.'</li><br></a>';								
			}
			echo'</ul>';
			$stmt->close();
			$mysqli->close();
	
	echo'</div>';
	echo'</div>'; //<!--end news2-->
}

function registration(){
	
	echo"<form action='register.php' method='post'>";
echo"<label for='title' style='font-size:20px;'>First Name :  </label>";
echo"<input class='input-large' type='text' name='fname' required='required' value='' placeholder='type your first name....' style='width:250px; height='60px;''/>";

echo"<br/>";

echo"<label for='title' style='font-size:20px;'>Last Name :  </label>";
echo"<input class='input-large' type='text' name='lname' required='required' value='' placeholder='type your last name....' style='width:250px; height='60px;''/>";
echo"<br/>";

echo"<label for='title' style='font-size:20px;'>Your Email :  </label>";
echo"<input class='input-large' type='text' name='email' required='required' value='' placeholder='type your email address....' style='width:250px; height='60px;''/>";

echo"<br/>";

echo"<label for='title' style='font-size:20px;'>Username :  </label>";
echo"<input class='input-large' type='text' name='username' required='required' value='' placeholder='type your username....' style='width:250px; height='60px;''/>";

echo"<br/>";

echo"<label for='title' style='font-size:20px;'>Password :  </label>";
echo"<input class='input-large' type='text' name='password' required='required' value='' placeholder='type your password....' style='width:250px; height='40px;''/>";

echo"<br/>";


echo"<input class='btn btn-primary' type='submit' value='Add' style='height:40px; background-color:#0099FF;'/>&nbsp;";
echo"<input class='btn' type='reset' value='cancel' style='height:40px; background-color:#0099FF;''/>";
echo"</form>";	
	
}

function register(){

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




	$sql="insert into user(fname,lname,email,username,password) values(?,?,?,?,?)";

$stmt=$mysqli->prepare($sql);
$stmt->bind_param('sssss',$fname,$lname,$email,$username,$password);
if($stmt->execute()){
	echo"Post <br> </b> added succesfully!!";
	}
	$stmt->close();
	$mysqli->close();
	
}


function c_approve(){
	$host = "sql303.byethost10.com";
$user="b10_15899091";
$pass = "khobor24113017";
$db = "b10_15899091_newspaper";

//establish db connection

$mysqli = new mysqli($host,$user,$pass,$db);

echo"<h3 style='color:#F00'>Pending Comment....</h3>";

$sql="select c.comment_id,c.c_name,c.c_email,c.c_text,c.status from comments as c,user as u where c.c_email=u.email and c.status='unapprove' order by c.comment_id desc";
$result=$mysqli->query($sql);
echo"<table class='table'>";
echo"<th>Id</th>";
echo"<th>Name</th>";
echo"<th>Email</th>";
echo"<th>Comment</th>";
echo"<th>Status</th>";
echo"<th>Action</th>";

while($post=$result->fetch_object()){
echo"<tr>";
echo"<td>$post->comment_id &nbsp;</td>";
echo'<td>'.$post->c_name.'&nbsp;</td>';
echo"<td>$post->c_email &nbsp;</td>";
echo"<td>'$post->c_text' &nbsp;</td>";
echo"<td>$post->status &nbsp;</td>";
echo"<td>";
echo"<a href=admin.php?op=approval&nid=$post->comment_id style='text-decoration:none;color:#0F0'>approve</a>&nbsp;";
echo"<a href=admin.php?op=c_delete&nid=$post->comment_id style='text-decoration:none;color:#F00'>delete</a>&nbsp;";

echo"</td>";
echo"</tr>";
}
echo"</table>";
$result->free_result();
$mysqli->close();
}


function deleteComment($nid){
	$host = "sql303.byethost10.com";
$user="b10_15899091";
$pass = "khobor24113017";
$db = "b10_15899091_newspaper";
//establish db connection
//$nid=$_REQUEST['post_id'];
$mysqli = new mysqli($host,$user,$pass,$db);
//select post
$sql ="delete from comments where comment_id=$nid and status='unapprove'";
//prepare statement
$stmt =$mysqli->prepare($sql);
$stmt->execute();
echo"comment # $nid deleted.";
			$stmt->close();
			$mysqli->close();
}



function approveComment($nid){
	$host = "sql303.byethost10.com";
$user="b10_15899091";
$pass = "khobor24113017";
$db = "b10_15899091_newspaper";

//establish db connection
//$nid=$_REQUEST['post_id'];
$mysqli = new mysqli($host,$user,$pass,$db);
//select post
$sql ="UPDATE comments SET status='approve' where comment_id=$nid and status='unapprove'";
//prepare statement
$stmt =$mysqli->prepare($sql);
$stmt->execute();
echo"comment # $nid is approved.";
			$stmt->close();
			$mysqli->close();
}


function bicitro(){
$host = "sql303.byethost10.com";
$user="b10_15899091";
$pass = "khobor24113017";
$db = "b10_15899091_newspaper";
//establish db connection

$mysqli = new mysqli($host,$user,$pass,$db);

	
		$sql = "select p.id,p.title as title,p.details as details,
	p.created as created,p.image as image,p.catagory as catagory,a.id as authorID,a.fname as firstname, a.lname as lastname from posts p,authors a where p.catagory='অন্যান্য' order by created DESC LIMIT 0,5";

//prepare statement
$stmt =$mysqli->prepare($sql);
//$stmt->bind_param('i', $id);
$stmt->execute();
$stmt->bind_result($id,$title,$details,$created,$image,$catagory,$authorID,$firstname,$lastname);
echo '<ul style="list-style-type: none;">';
while($stmt->fetch()){
				echo'<li><a href="post.php?id='.$id.'" class="one">'.$title.'</li><br></a>';								
			}
			echo'</ul>';
			$stmt->close();
			$mysqli->close();
	
	
	//<!--end news2-->

}

function profile(){
$host = "sql303.byethost10.com";
$user="b10_15899091";
$pass = "khobor24113017";
$db = "b10_15899091_newspaper";

//establish db connection

$mysqli = new mysqli($host,$user,$pass,$db);

echo"<h3 style='color:#F00'>Admin profile....</h3>";

$sql="select id,fname,lname,email,username,password from authors";
$result=$mysqli->query($sql);
echo"<table class='table'>";
echo"<th>Id</th>";
echo"<th>fname</th>";
echo"<th>lname</th>";
echo"<th>Email</th>";
echo"<th>username</th>";
echo"<th>password</th>";
echo"<th>Action</th>";

while($post=$result->fetch_object()){
echo"<tr>";
echo"<td>$post->id &nbsp;</td>";
echo"<td>$post->fname &nbsp;</td>";
echo"<td>$post->lname&nbsp;</td>";
echo"<td>$post->email &nbsp;</td>";
echo"<td>$post->username &nbsp;</td>";
echo"<td>$post->password &nbsp;</td>";
echo"<td>";
echo"<a href=admin.php?op=profile_update_form&aid=$post->id style='text-decoration:none;color:#F00'>update</a>&nbsp;";

echo"</td>";
echo"</tr>";
}
echo"</table>";
$result->free_result();
$mysqli->close();	
}

function p_update_form($aid){
	$host = "sql303.byethost10.com";
$user="b10_15899091";
$pass = "khobor24113017";
$db = "b10_15899091_newspaper";
//establish db connection

$mysqli = new mysqli($host,$user,$pass,$db);

echo"<h3>Update profile</h3>";
$sql="select id,fname,lname,email,username,password from authors
where id=$aid";
$result=$mysqli->query($sql);

while($post=$result->fetch_object()){

echo"<form action='admin.php?op=p_update&aid=$post->id' method='post'>";
echo"<label for='title' style='font-size:20px;'>fname :  </label>";
echo"<input class='input-large' type='text' name='fname' required='required' value='".$post->fname."' style='width:450px; height='40px;''/>";

echo"<br/>";
echo"<label for='title' style='font-size:20px;'>lname :  </label>";
echo"<input class='input-large' type='text' name='lname' required='required' value='".$post->lname."' style='width:450px; height='40px;''/>";

echo"<br/>";
echo"<label for='title' style='font-size:20px;'>email :  </label>";
echo"<input class='input-large' type='text' name='email' required='required' value='".$post->email."' style='width:450px; height='40px;''/>";

echo"<br/>";
echo"<label for='title' style='font-size:20px;'>username :  </label>";
echo"<input class='input-large' type='text' name='username' required='required' value='".$post->username."' style='width:450px; height='40px;''/>";

echo"<br/>";
echo"<label for='title' style='font-size:20px;'>password :  </label>";
echo"<input class='input-large' type='text' name='password' required='required' value='".$post->password."' style='width:450px; height='40px;''/>";

echo"<br/></br>";
echo"<input class='btn btn-primary' type='submit' value='p_update Post' style='height:40px; background-color:#0099FF;'/>&nbsp;";
echo"<input class='btn' type='reset' value='cancel' style='height:40px; background-color:#0099FF;''/>";
echo"</form>";	
}
$result->free_result();
$mysqli->close();
}

function pass_update($aid){
$host = "sql303.byethost10.com";
$user="b10_15899091";
$pass = "khobor24113017";
$db = "b10_15899091_newspaper";

//establish db connection
$aid=$_REQUEST['aid'];
$mysqli = new mysqli($host,$user,$pass,$db);
$fname=trim($_POST['fname']);	
$lname=trim($_POST['lname']);
$email=trim($_POST['email']);
$username=trim($_POST['username']);
$password=trim($_POST['password']);


$sql="update authors set fname=?, lname=?, email=?, username=?, password=? where id=$aid";

$stmt=$mysqli->prepare($sql);
$stmt->bind_param('sssss',$fname,$lname,$email, $username,$password);
if($stmt->execute()){
	echo"updated succesfully!!";
	}
	$stmt->close();
	$mysqli->close();	
}
?>



</body>
</html>