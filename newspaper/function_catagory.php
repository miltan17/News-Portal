<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="css/catagory_body.css" rel="stylesheet" type="text/css" />
<link href="css/newapapercss.css" rel="stylesheet" type="text/css" />
</head>

<body>

<?php
function nationalNews(){
	$host = "sql303.byethost10.com";
$user="b10_15899091";
$pass = "khobor24113017";
$db = "b10_15899091_newspaper";

//establish db connection

$mysqli = new mysqli($host,$user,$pass,$db);


echo'<div id="allnews">';
	echo'<div id="news1">';
	
		$sql = "select p.id,p.title as title,p.details as details,
p.created as created,p.image as image,p.catagory as catagory,a.id as authorID,a.fname as firstname,
a.lname as lastname from posts p,authors a where p.catagory='জাতীয়' order by created DESC LIMIT 0,2";

//prepare statement
$stmt =$mysqli->prepare($sql);
//$stmt->bind_param('i', $id);
$stmt->execute();
$stmt->bind_result($id,$title,$details,$created,$image,$catagory,$authorID,$firstname,$lastname);
while($stmt->fetch()){
				echo'<div>';
				echo'<h2>';
					echo'<a href="newspaper.php" style="text-decoration:none; color:#F00">প্রচ্ছদ</a>&nbsp;&nbsp;';
				echo'|&nbsp;&nbsp;';
				echo'<a href="catagory.php?cat=national" style="text-decoration:none;">'.$catagory.'</a>';
				echo'</h2>';
				echo'</div>';
				echo'<div>';
				echo'<img src="img/'.$image.'" width="500dp" height="350dp"/>';
				echo'</div>';
								
				echo '<div class="post-detail">';
				echo '<h2 style="border-bottom:2px;"><a href="post.php?id='.$id.'" class="one">'.$title.'</a></h2>';
				
				echo '<p class="summary">'.substr($details,0,800). ' ...<a href="post.php?id='.$id.'" style="text-decoration:none;" class="one">বিস্তারিত</a></p>';
				echo '</div>';
			}
			
	
	echo'</div>'; //<!--end news1-->
	
	
	echo'<div id="news2" style="font-size:18px;">';
	echo'<br/> <br/>';
	echo'<div style="height:30px; background:#F00; width:400px; text-align:center;">এই বিভাগের আরও খবর</div>';
	echo'<div>';
		$sql = "select p.id,p.title as title,p.details as details,
	p.created as created,p.image as image,p.catagory as catagory,a.id as authorID,a.fname as 				firstname, a.lname as lastname from posts p,authors a where p.catagory='জাতীয়' order by created DESC LIMIT 1,10";

//prepare statement
$stmt =$mysqli->prepare($sql);
//$stmt->bind_param('i', $id);
$stmt->execute();
$stmt->bind_result($id,$title,$details,$created,$image,$catagory,$authorID,$firstname,$lastname);
//echo '<ul style="list-style-type: none;">';
while($stmt->fetch()){
				//echo'<li><a href="post.php?id='.$id.'" class="one">'.$title.'</li><br></a>';	
				echo'<div>';
					echo'<div style="float:left;">';
						echo'<a href="post.php?id='.$id.'" class="one"><img src="img/'.$image.'" width="60dp" height="50dp"/></a>';
					echo'</div>';
					echo'<br>';
					echo'<div style="text-align:justify">';
					echo'<a href="post.php?id='.$id.'" class="one">'.$title.'</a>';
					
					echo'</div>';
				echo'</div>';							
			}
			//echo'</ul>';
			$stmt->close();
			$mysqli->close();
	
	echo'</div>';
	echo'<br>';
	echo'<br>';
	echo'<img src="img/Aarong.gif"/>';
	echo'</div>'; //<!--end news2-->
echo'</div>'; //end allnews
}


function internationalNews(){
	
	
	$host = "sql303.byethost10.com";
$user="b10_15899091";
$pass = "khobor24113017";
$db = "b10_15899091_newspaper";

//establish db connection

$mysqli = new mysqli($host,$user,$pass,$db);


echo'<div id="allnews">';
	echo'<div id="news1">';
	
		$sql = "select p.id,p.title as title,p.details as details,
p.created as created,p.image as image,p.catagory as catagory,a.id as authorID,a.fname as firstname,
a.lname as lastname from posts p,authors a where p.catagory='আন্তর্জাতিক' order by created DESC LIMIT 0,2";

//prepare statement
$stmt =$mysqli->prepare($sql);
//$stmt->bind_param('i', $id);
$stmt->execute();
$stmt->bind_result($id,$title,$details,$created,$image,$catagory,$authorID,$firstname,$lastname);
while($stmt->fetch()){
				echo'<div>';
				echo'<h2>';
					echo'<a href="newspaper.php" style="text-decoration:none; color:#F00">প্রচ্ছদ</a>&nbsp;&nbsp;';
				echo'|&nbsp;&nbsp;';
				echo'<a href="catagory.php?cat=national" style="text-decoration:none;">'.$catagory.'</a>';
				echo'</h2>';
				echo'</div>';
				echo'<div>';
				echo'<img src="img/'.$image.'" width="500dp" height="350dp"/>';
				echo'</div>';
								
				echo '<div class="post-detail">';
				echo '<h2 style="border-bottom:2px;"><a href="post.php?id='.$id.'" class="one">'.$title.'</a></h2>';
				
				echo '<p class="summary">'.substr($details,0,800). ' ...<a href="post.php?id='.$id.'" style="text-decoration:none;" class="one">বিস্তারিত</a></p>';
				echo '</div>';
			}
			
	
	echo'</div>'; //<!--end news1-->
	
	
	echo'<div id="news2" style="font-size:18px;">';
	echo'<br/> <br/>';
	echo'<div style="height:30px; background:#F00; width:400px; text-align:center;">এই বিভাগের আরও খবর</div>';
	echo'<div>';
		$sql = "select p.id,p.title as title,p.details as details,
	p.created as created,p.image as image,p.catagory as catagory,a.id as authorID,a.fname as 				firstname, a.lname as lastname from posts p,authors a where p.catagory='আন্তর্জাতিক' order by created DESC LIMIT 2,10";

//prepare statement
$stmt =$mysqli->prepare($sql);
//$stmt->bind_param('i', $id);
$stmt->execute();
$stmt->bind_result($id,$title,$details,$created,$image,$catagory,$authorID,$firstname,$lastname);
//echo '<ul style="list-style-type: none;">';
while($stmt->fetch()){
				//echo'<li><a href="post.php?id='.$id.'" class="one">'.$title.'</li><br></a>';
				echo'<div>';
					echo'<div style="float:left;">';
						echo'<a href="post.php?id='.$id.'" class="one"><img src="img/'.$image.'" width="60dp" height="50dp"/></a>';
					echo'</div>';
					echo'<br>';
					echo'<div style="text-align:justify">';
					echo'<a href="post.php?id='.$id.'" class="one">'.$title.'</a>';
					
					echo'</div>';
				echo'</div>';									
			}
			//echo'</ul>';
			$stmt->close();
			$mysqli->close();
	
	echo'</div>';
	echo'<br>';
	echo'<br>';
	echo'<img src="img/Aarong.gif"/>';
	echo'</div>'; //<!--end news2-->
echo'</div>'; //end allnews
}

function economicsNews(){
	
	$host = "sql303.byethost10.com";
$user="b10_15899091";
$pass = "khobor24113017";
$db = "b10_15899091_newspaper";

//establish db connection

$mysqli = new mysqli($host,$user,$pass,$db);


echo'<div id="allnews">';
	echo'<div id="news1">';
	
		$sql = "select p.id,p.title as title,p.details as details,
p.created as created,p.image as image,p.catagory as catagory,a.id as authorID,a.fname as firstname,
a.lname as lastname from posts p,authors a where p.catagory='অর্থনীতি'order by created DESC LIMIT 0,2";

//prepare statement
$stmt =$mysqli->prepare($sql);
//$stmt->bind_param('i', $id);
$stmt->execute();
$stmt->bind_result($id,$title,$details,$created,$image,$catagory,$authorID,$firstname,$lastname);
while($stmt->fetch()){
				echo'<div>';
				echo'<h2>';
					echo'<a href="newspaper.php" style="text-decoration:none; color:#F00">প্রচ্ছদ</a>&nbsp;&nbsp;';
				echo'|&nbsp;&nbsp;';
				echo'<a href="catagory.php?cat=national" style="text-decoration:none;">'.$catagory.'</a>';
				echo'</h2>';
				echo'</div>';
				echo'<div>';
				echo'<img src="img/'.$image.'" width="500dp" height="350dp"/>';
				echo'</div>';
								
				echo '<div class="post-detail">';
				echo '<h2 style="border-bottom:2px;"><a href="post.php?id='.$id.'" class="one">'.$title.'</a></h2>';
				
				echo '<p class="summary">'.substr($details,0,800). ' ...<a href="post.php?id='.$id.'" style="text-decoration:none;" class="one">বিস্তারিত</a></p>';
				echo '</div>';
			}
			
	
	echo'</div>'; //<!--end news1-->
	
	
	echo'<div id="news2" style="font-size:18px;">';
	echo'<br/> <br/>';
	echo'<div style="height:30px; background:#F00; width:400px; text-align:center;">এই বিভাগের আরও খবর</div>';
	echo'<div>';
		$sql = "select p.id,p.title as title,p.details as details,
	p.created as created,p.image as image,p.catagory as catagory,a.id as authorID,a.fname as 				firstname, a.lname as lastname from posts p,authors a where p.catagory='অর্থনীতি'order by created DESC LIMIT 1,10";

//prepare statement
$stmt =$mysqli->prepare($sql);
//$stmt->bind_param('i', $id);
$stmt->execute();
$stmt->bind_result($id,$title,$details,$created,$image,$catagory,$authorID,$firstname,$lastname);
//echo '<ul style="list-style-type: none;">';
while($stmt->fetch()){
				//echo'<li><a href="post.php?id='.$id.'" class="one">'.$title.'</li><br></a>';	
				echo'<div>';
					echo'<div style="float:left;">';
						echo'<a href="post.php?id='.$id.'" class="one"><img src="img/'.$image.'" width="60dp" height="50dp"/></a>';
					echo'</div>';
					echo'<br>';
					echo'<div style="text-align:justify">';
					echo'<a href="post.php?id='.$id.'" class="one">'.$title.'</a>';
					
					echo'</div>';
				echo'</div>';								
			}
			//echo'</ul>';
			$stmt->close();
			$mysqli->close();
	
	echo'</div>';
	echo'<br>';
	echo'<br>';
	echo'<img src="img/Aarong.gif"/>';
	echo'</div>'; //<!--end news2-->
echo'</div>'; //end allnews
}


function politicsNews(){
	$host = "sql303.byethost10.com";
$user="b10_15899091";
$pass = "khobor24113017";
$db = "b10_15899091_newspaper";

//establish db connection

$mysqli = new mysqli($host,$user,$pass,$db);


echo'<div id="allnews">';
	echo'<div id="news1">';
	
		$sql = "select p.id,p.title as title,p.details as details,
p.created as created,p.image as image,p.catagory as catagory,a.id as authorID,a.fname as firstname,
a.lname as lastname from posts p,authors a where p.catagory='রাজনীতি'order by created DESC LIMIT 0,2";

//prepare statement
$stmt =$mysqli->prepare($sql);
//$stmt->bind_param('i', $id);
$stmt->execute();
$stmt->bind_result($id,$title,$details,$created,$image,$catagory,$authorID,$firstname,$lastname);
while($stmt->fetch()){
				echo'<div>';
				echo'<h2>';
					echo'<a href="newspaper.php" style="text-decoration:none; color:#F00">প্রচ্ছদ</a>&nbsp;&nbsp;';
				echo'|&nbsp;&nbsp;';
				echo'<a href="catagory.php?cat=national" style="text-decoration:none;">'.$catagory.'</a>';
				echo'</h2>';
				echo'</div>';
				echo'<div>';
				echo'<img src="img/'.$image.'" width="500dp" height="350dp"/>';
				echo'</div>';
								
				echo '<div class="post-detail">';
				echo '<h2 style="border-bottom:2px;"><a href="post.php?id='.$id.'" class="one">'.$title.'</a></h2>';
				
				echo '<p class="summary">'.substr($details,0,800). ' ...<a href="post.php?id='.$id.'" style="text-decoration:none;" class="one">বিস্তারিত</a></p>';
				echo '</div>';
			}
			
	
	echo'</div>'; //<!--end news1-->
	
	
	echo'<div id="news2" style="font-size:18px;">';
	echo'<br/> <br/>';
	echo'<div style="height:30px; background:#F00; width:400px; text-align:center;">এই বিভাগের আরও খবর</div>';
	echo'<div>';
		$sql = "select p.id,p.title as title,p.details as details,
	p.created as created,p.image as image,p.catagory as catagory,a.id as authorID,a.fname as 				firstname, a.lname as lastname from posts p,authors a where p.catagory='রাজনীতি'order by created DESC LIMIT 1,10";

//prepare statement
$stmt =$mysqli->prepare($sql);
//$stmt->bind_param('i', $id);
$stmt->execute();
$stmt->bind_result($id,$title,$details,$created,$image,$catagory,$authorID,$firstname,$lastname);
//echo '<ul style="list-style-type: none;">';
while($stmt->fetch()){
				//echo'<li><a href="post.php?id='.$id.'" class="one">'.$title.'</li><br></a>';	
				echo'<div>';
					echo'<div style="float:left;">';
						echo'<a href="post.php?id='.$id.'" class="one"><img src="img/'.$image.'" width="60dp" height="50dp"/></a>';
					echo'</div>';
					echo'<br>';
					echo'<div style="text-align:justify">';
					echo'<a href="post.php?id='.$id.'" class="one">'.$title.'</a>';
					
					echo'</div>';
				echo'</div>';								
			}
			//echo'</ul>';
			$stmt->close();
			$mysqli->close();
	
	echo'</div>';
	echo'<br>';
	echo'<br>';
	echo'<img src="img/Aarong.gif"/>';
	echo'</div>'; //<!--end news2-->
echo'</div>'; //end allnews
}


function sportsNews(){
	$host = "sql303.byethost10.com";
$user="b10_15899091";
$pass = "khobor24113017";
$db = "b10_15899091_newspaper";

//establish db connection

$mysqli = new mysqli($host,$user,$pass,$db);


echo'<div id="allnews">';
	echo'<div id="news1">';
	
		$sql = "select p.id,p.title as title,p.details as details,
p.created as created,p.image as image,p.catagory as catagory,a.id as authorID,a.fname as firstname,
a.lname as lastname from posts p,authors a where p.catagory='খেলা'order by created DESC LIMIT 0,2";

//prepare statement
$stmt =$mysqli->prepare($sql);
//$stmt->bind_param('i', $id);
$stmt->execute();
$stmt->bind_result($id,$title,$details,$created,$image,$catagory,$authorID,$firstname,$lastname);
while($stmt->fetch()){
				echo'<div>';
				echo'<h2>';
					echo'<a href="newspaper.php" style="text-decoration:none; color:#F00">প্রচ্ছদ</a>&nbsp;&nbsp;';
				echo'|&nbsp;&nbsp;';
				echo'<a href="catagory.php?cat=national" style="text-decoration:none;">'.$catagory.'</a>';
				echo'</h2>';
				echo'</div>';
				echo'<div>';
				echo'<img src="img/'.$image.'" width="500dp" height="350dp"/>';
				echo'</div>';
								
				echo '<div class="post-detail">';
				echo '<h2 style="border-bottom:2px;"><a href="post.php?id='.$id.'" class="one">'.$title.'</a></h2>';
				
				echo '<p class="summary">'.substr($details,0,800). ' ...<a href="post.php?id='.$id.'" style="text-decoration:none;" class="one">বিস্তারিত</a></p>';
				echo '</div>';
			}
			
	
	echo'</div>'; //<!--end news1-->
	
	
	echo'<div id="news2" style="font-size:18px;">';
	echo'<br/> <br/>';
	echo'<div style="height:30px; background:#F00; width:400px; text-align:center;">এই বিভাগের আরও খবর</div>';
	echo'<div>';
		$sql = "select p.id,p.title as title,p.details as details,
	p.created as created,p.image as image,p.catagory as catagory,a.id as authorID,a.fname as 				firstname, a.lname as lastname from posts p,authors a where p.catagory='খেলা'order by created DESC LIMIT 2,10";

//prepare statement
$stmt =$mysqli->prepare($sql);
//$stmt->bind_param('i', $id);
$stmt->execute();
$stmt->bind_result($id,$title,$details,$created,$image,$catagory,$authorID,$firstname,$lastname);
//echo '<ul style="list-style-type: none;">';
while($stmt->fetch()){
				//echo'<li><a href="post.php?id='.$id.'" class="one">'.$title.'</li><br></a>';
				echo'<div>';
					echo'<div style="float:left;">';
						echo'<a href="post.php?id='.$id.'" class="one"><img src="img/'.$image.'" width="60dp" height="50dp"/></a>';
					echo'</div>';
					echo'<br>';
					echo'<div style="text-align:justify">';
					echo'<a href="post.php?id='.$id.'" class="one">'.$title.'</a>';
					
					echo'</div>';
				echo'</div>';									
			}
			//echo'</ul>';
			$stmt->close();
			$mysqli->close();
	
	echo'</div>';
	echo'<br>';
	echo'<br>';
	echo'<img src="img/Aarong.gif"/>';
	echo'</div>'; //<!--end news2-->
echo'</div>'; //end allnews
}


function funNews(){
	$host = "sql303.byethost10.com";
$user="b10_15899091";
$pass = "khobor24113017";
$db = "b10_15899091_newspaper";

//establish db connection

$mysqli = new mysqli($host,$user,$pass,$db);


echo'<div id="allnews">';
	echo'<div id="news1">';
	
		$sql = "select p.id,p.title as title,p.details as details,
p.created as created,p.image as image,p.catagory as catagory,a.id as authorID,a.fname as firstname,
a.lname as lastname from posts p,authors a where p.catagory='বিনোদন'order by created DESC LIMIT 0,2";

//prepare statement
$stmt =$mysqli->prepare($sql);
//$stmt->bind_param('i', $id);
$stmt->execute();
$stmt->bind_result($id,$title,$details,$created,$image,$catagory,$authorID,$firstname,$lastname);
while($stmt->fetch()){
				echo'<div>';
				echo'<h2>';
					echo'<a href="newspaper.php" style="text-decoration:none; color:#F00">প্রচ্ছদ</a>&nbsp;&nbsp;';
				echo'|&nbsp;&nbsp;';
				echo'<a href="catagory.php?cat=national" style="text-decoration:none;">'.$catagory.'</a>';
				echo'</h2>';
				echo'</div>';
				echo'<div>';
				echo'<img src="img/'.$image.'" width="500dp" height="350dp"/>';
				echo'</div>';
								
				echo '<div class="post-detail">';
				echo '<h2 style="border-bottom:2px;"><a href="post.php?id='.$id.'" class="one">'.$title.'</a></h2>';
				
				echo '<p class="summary">'.substr($details,0,800). ' ...<a href="post.php?id='.$id.'" style="text-decoration:none;" class="one">বিস্তারিত</a></p>';
				echo '</div>';
			}
			
	
	echo'</div>'; //<!--end news1-->
	
	
	echo'<div id="news2" style="font-size:18px;">';
	echo'<br/> <br/>';
	echo'<div style="height:30px; background:#F00; width:400px; text-align:center;">এই বিভাগের আরও খবর</div>';
	echo'<div>';
		$sql = "select p.id,p.title as title,p.details as details,
	p.created as created,p.image as image,p.catagory as catagory,a.id as authorID,a.fname as 				firstname, a.lname as lastname from posts p,authors a where p.catagory='বিনোদন'order by created DESC LIMIT 2,10";

//prepare statement
$stmt =$mysqli->prepare($sql);
//$stmt->bind_param('i', $id);
$stmt->execute();
$stmt->bind_result($id,$title,$details,$created,$image,$catagory,$authorID,$firstname,$lastname);
//echo '<ul style="list-style-type: none;">';
while($stmt->fetch()){
				//echo'<li><a href="post.php?id='.$id.'" class="one">'.$title.'</li><br></a>';	
				echo'<div>';
					echo'<div style="float:left;">';
						echo'<a href="post.php?id='.$id.'" class="one"><img src="img/'.$image.'" width="60dp" height="50dp"/></a>';
					echo'</div>';
					echo'<br>';
					echo'<div style="text-align:justify">';
					echo'<a href="post.php?id='.$id.'" class="one">'.$title.'</a>';
					
					echo'</div>';
				echo'</div>';								
			}
			//echo'</ul>';
			$stmt->close();
			$mysqli->close();
	
	echo'</div>';
	echo'<br>';
	echo'<br>';
	echo'<img src="img/Aarong.gif"/>';
	echo'</div>'; //<!--end news2-->
echo'</div>'; //end allnews
}


function technologyNews(){
	$host = "sql303.byethost10.com";
$user="b10_15899091";
$pass = "khobor24113017";
$db = "b10_15899091_newspaper";

//establish db connection

$mysqli = new mysqli($host,$user,$pass,$db);


echo'<div id="allnews">';
	echo'<div id="news1">';
	
		$sql = "select p.id,p.title as title,p.details as details,
p.created as created,p.image as image,p.catagory as catagory,a.id as authorID,a.fname as firstname,
a.lname as lastname from posts p,authors a where p.catagory='প্রযুক্তি'order by created DESC LIMIT 0,2";

//prepare statement
$stmt =$mysqli->prepare($sql);
//$stmt->bind_param('i', $id);
$stmt->execute();
$stmt->bind_result($id,$title,$details,$created,$image,$catagory,$authorID,$firstname,$lastname);
while($stmt->fetch()){
				echo'<div>';
				echo'<h2>';
					echo'<a href="newspaper.php" style="text-decoration:none; color:#F00">প্রচ্ছদ</a>&nbsp;&nbsp;';
				echo'|&nbsp;&nbsp;';
				echo'<a href="catagory.php?cat=national" style="text-decoration:none;">'.$catagory.'</a>';
				echo'</h2>';
				echo'</div>';
				echo'<div>';
				echo'<img src="img/'.$image.'" width="500dp" height="350dp"/>';
				echo'</div>';
								
				echo '<div class="post-detail">';
				echo '<h2 style="border-bottom:2px;"><a href="post.php?id='.$id.'" class="one">'.$title.'</a></h2>';
				
				echo '<p class="summary">'.substr($details,0,800). ' ...<a href="post.php?id='.$id.'" style="text-decoration:none;" class="one">বিস্তারিত</a></p>';
				echo '</div>';
			}
			
	
	echo'</div>'; //<!--end news1-->
	
	
	echo'<div id="news2" style="font-size:18px;">';
	echo'<br/> <br/>';
	echo'<div style="height:30px; background:#F00; width:400px; text-align:center;">এই বিভাগের আরও খবর</div>';
	echo'<div>';
		$sql = "select p.id,p.title as title,p.details as details,
	p.created as created,p.image as image,p.catagory as catagory,a.id as authorID,a.fname as 				firstname, a.lname as lastname from posts p,authors a where p.catagory='প্রযুক্তি'order by created DESC LIMIT 2,10";

//prepare statement
$stmt =$mysqli->prepare($sql);
//$stmt->bind_param('i', $id);
$stmt->execute();
$stmt->bind_result($id,$title,$details,$created,$image,$catagory,$authorID,$firstname,$lastname);
//echo '<ul style="list-style-type: none;">';
while($stmt->fetch()){
				//echo'<li><a href="post.php?id='.$id.'" class="one">'.$title.'</li><br></a>';
				echo'<div>';
					echo'<div style="float:left;">';
						echo'<a href="post.php?id='.$id.'" class="one"><img src="img/'.$image.'" width="60dp" height="50dp"/></a>';
					echo'</div>';
					echo'<br>';
					echo'<div style="text-align:justify">';
					echo'<a href="post.php?id='.$id.'" class="one">'.$title.'</a>';
					
					echo'</div>';
				echo'</div>';									
			}
			//echo'</ul>';
			$stmt->close();
			$mysqli->close();
	
	echo'</div>';
	echo'<br>';
	echo'<br>';
	echo'<img src="img/Aarong.gif"/>';
	echo'</div>'; //<!--end news2-->
echo'</div>'; //end allnews
}


function healthNews(){
	$host = "sql303.byethost10.com";
$user="b10_15899091";
$pass = "khobor24113017";
$db = "b10_15899091_newspaper";

//establish db connection

$mysqli = new mysqli($host,$user,$pass,$db);


echo'<div id="allnews">';
	echo'<div id="news1">';
	
		$sql = "select p.id,p.title as title,p.details as details,
p.created as created,p.image as image,p.catagory as catagory,a.id as authorID,a.fname as firstname,
a.lname as lastname from posts p,authors a where p.catagory='স্বাস্থ্য'order by created DESC LIMIT 0,2";

//prepare statement
$stmt =$mysqli->prepare($sql);
//$stmt->bind_param('i', $id);
$stmt->execute();
$stmt->bind_result($id,$title,$details,$created,$image,$catagory,$authorID,$firstname,$lastname);
while($stmt->fetch()){
				echo'<div>';
				echo'<h2>';
					echo'<a href="newspaper.php" style="text-decoration:none; color:#F00">প্রচ্ছদ</a>&nbsp;&nbsp;';
				echo'|&nbsp;&nbsp;';
				echo'<a href="catagory.php?cat=national" style="text-decoration:none;">'.$catagory.'</a>';
				echo'</h2>';
				echo'</div>';
				echo'<div>';
				echo'<img src="img/'.$image.'" width="500dp" height="350dp"/>';
				echo'</div>';
								
				echo '<div class="post-detail">';
				echo '<h2 style="border-bottom:2px;"><a href="post.php?id='.$id.'" class="one">'.$title.'</a></h2>';
				
				echo '<p class="summary">'.substr($details,0,800). ' ...<a href="post.php?id='.$id.'" style="text-decoration:none;" class="one">বিস্তারিত</a></p>';
				echo '</div>';
			}
			
	
	echo'</div>'; //<!--end news1-->
	
	
	echo'<div id="news2" style="font-size:18px;">';
	echo'<br/> <br/>';
	echo'<div style="height:30px; background:#F00; width:400px; text-align:center;">এই বিভাগের আরও খবর</div>';
	echo'<div>';
		$sql = "select p.id,p.title as title,p.details as details,
	p.created as created,p.image as image,p.catagory as catagory,a.id as authorID,a.fname as 				firstname, a.lname as lastname from posts p,authors a where p.catagory='স্বাস্থ্য'order by created DESC LIMIT 2,10";

//prepare statement
$stmt =$mysqli->prepare($sql);
//$stmt->bind_param('i', $id);
$stmt->execute();
$stmt->bind_result($id,$title,$details,$created,$image,$catagory,$authorID,$firstname,$lastname);
//echo '<ul style="list-style-type: none;">';
while($stmt->fetch()){
				//echo'<li><a href="post.php?id='.$id.'" class="one">'.$title.'</li><br></a>';	
				echo'<div>';
					echo'<div style="float:left;">';
						echo'<a href="post.php?id='.$id.'" class="one"><img src="img/'.$image.'" width="60dp" height="50dp"/></a>';
					echo'</div>';
					echo'<br>';
					echo'<div style="text-align:justify">';
					echo'<a href="post.php?id='.$id.'" class="one">'.$title.'</a>';
					
					echo'</div>';
				echo'</div>';								
			}
			//echo'</ul>';
			$stmt->close();
			$mysqli->close();
	
	echo'</div>';
	echo'<br>';
	echo'<br>';
	echo'<img src="img/Aarong.gif"/>';
	echo'</div>'; //<!--end news2-->
echo'</div>'; //end allnews
}


function lifestyleNews(){
	$host = "sql303.byethost10.com";
$user="b10_15899091";
$pass = "khobor24113017";
$db = "b10_15899091_newspaper";

//establish db connection

$mysqli = new mysqli($host,$user,$pass,$db);


echo'<div id="allnews">';
	echo'<div id="news1">';
	
		$sql = "select p.id,p.title as title,p.details as details,
p.created as created,p.image as image,p.catagory as catagory,a.id as authorID,a.fname as firstname,
a.lname as lastname from posts p,authors a where p.catagory='লাইফস্টাইল'order by created DESC LIMIT 0,2";

//prepare statement
$stmt =$mysqli->prepare($sql);
//$stmt->bind_param('i', $id);
$stmt->execute();
$stmt->bind_result($id,$title,$details,$created,$image,$catagory,$authorID,$firstname,$lastname);
while($stmt->fetch()){
				echo'<div>';
				echo'<h2>';
					echo'<a href="newspaper.php" style="text-decoration:none; color:#F00">প্রচ্ছদ</a>&nbsp;&nbsp;';
				echo'|&nbsp;&nbsp;';
				echo'<a href="catagory.php?cat=national" style="text-decoration:none;">'.$catagory.'</a>';
				echo'</h2>';
				echo'</div>';
				echo'<div>';
				echo'<img src="img/'.$image.'" width="500dp" height="350dp"/>';
				echo'</div>';
								
				echo '<div class="post-detail">';
				echo '<h2 style="border-bottom:2px;"><a href="post.php?id='.$id.'" class="one">'.$title.'</a></h2>';
				
				echo '<p class="summary">'.substr($details,0,800). ' ...<a href="post.php?id='.$id.'" style="text-decoration:none;" class="one">বিস্তারিত</a></p>';
				echo '</div>';
			}
			
	
	echo'</div>'; //<!--end news1-->
	
	
	echo'<div id="news2" style="font-size:18px;">';
	echo'<br/> <br/>';
	echo'<div style="height:30px; background:#F00; width:400px; text-align:center;">এই বিভাগের আরও খবর</div>';
	echo'<div>';
		$sql = "select p.id,p.title as title,p.details as details,
	p.created as created,p.image as image,p.catagory as catagory,a.id as authorID,a.fname as 				firstname, a.lname as lastname from posts p,authors a where p.catagory='লাইফস্টাইল'order by created DESC LIMIT 2,10";

//prepare statement
$stmt =$mysqli->prepare($sql);
//$stmt->bind_param('i', $id);
$stmt->execute();
$stmt->bind_result($id,$title,$details,$created,$image,$catagory,$authorID,$firstname,$lastname);
//echo '<ul style="list-style-type: none;">';
while($stmt->fetch()){
				//echo'<li><a href="post.php?id='.$id.'" class="one">'.$title.'</li><br></a>';
				echo'<div>';
					echo'<div style="float:left;">';
						echo'<a href="post.php?id='.$id.'" class="one"><img src="img/'.$image.'" width="60dp" height="50dp"/></a>';
					echo'</div>';
					echo'<br>';
					echo'<div style="text-align:justify">';
					echo'<a href="post.php?id='.$id.'" class="one">'.$title.'</a>';
					
					echo'</div>';
				echo'</div>';									
			}
			//echo'</ul>';
			$stmt->close();
			$mysqli->close();
	
	echo'</div>';
	echo'<br>';
	echo'<br>';
	echo'<img src="img/Aarong.gif"/>';
	echo'</div>'; //<!--end news2-->
echo'</div>'; //end allnews
}


function othersNews(){
	
	
	$host = "sql303.byethost10.com";
$user="b10_15899091";
$pass = "khobor24113017";
$db = "b10_15899091_newspaper";

//establish db connection

$mysqli = new mysqli($host,$user,$pass,$db);


echo'<div id="allnews">';
	echo'<div id="news1">';
	
		$sql = "select p.id,p.title as title,p.details as details,
p.created as created,p.image as image,p.catagory as catagory,a.id as authorID,a.fname as firstname,
a.lname as lastname from posts p,authors a where p.catagory='অন্যান্য'order by created DESC LIMIT 0,2";

//prepare statement
$stmt =$mysqli->prepare($sql);
//$stmt->bind_param('i', $id);
$stmt->execute();
$stmt->bind_result($id,$title,$details,$created,$image,$catagory,$authorID,$firstname,$lastname);
while($stmt->fetch()){
				echo'<div>';
				echo'<h2>';
					echo'<a href="newspaper.php" style="text-decoration:none; color:#F00">প্রচ্ছদ</a>&nbsp;&nbsp;';
				echo'|&nbsp;&nbsp;';
				echo'<a href="catagory.php?cat=national" style="text-decoration:none;">'.$catagory.'</a>';
				echo'</h2>';
				echo'</div>';
				echo'<div>';
				echo'<img src="img/'.$image.'" width="500dp" height="350dp"/>';
				echo'</div>';
								
				echo '<div class="post-detail">';
				echo '<h2 style="border-bottom:2px;"><a href="post.php?id='.$id.'" class="one">'.$title.'</a></h2>';
				
				echo '<p class="summary">'.substr($details,0,800). ' ...<a href="post.php?id='.$id.'" style="text-decoration:none;" class="one">বিস্তারিত</a></p>';
				echo '</div>';
			}
			
	
	echo'</div>'; //<!--end news1-->
	
	
	echo'<div id="news2" style="font-size:18px;">';
	echo'<br/> <br/>';
	echo'<div style="height:30px; background:#F00; width:400px; text-align:center;">এই বিভাগের আরও খবর</div>';
	echo'<div>';
		$sql = "select p.id,p.title as title,p.details as details,
	p.created as created,p.image as image,p.catagory as catagory,a.id as authorID,a.fname as 				firstname, a.lname as lastname from posts p,authors a where p.catagory='অন্যান্য'order by created DESC LIMIT 1,9";

//prepare statement
$stmt =$mysqli->prepare($sql);
//$stmt->bind_param('i', $id);
$stmt->execute();
$stmt->bind_result($id,$title,$details,$created,$image,$catagory,$authorID,$firstname,$lastname);
//echo '<ul style="list-style-type: none;">';
while($stmt->fetch()){
				//echo'<li><a href="post.php?id='.$id.'" class="one">'.$title.'</li><br></a>';
				echo'<div>';
					echo'<div style="float:left;">';
						echo'<a href="post.php?id='.$id.'" class="one"><img src="img/'.$image.'" width="60dp" height="50dp"/></a>';
					echo'</div>';
					echo'<br>';
					echo'<div style="text-align:justify">';
					echo'<a href="post.php?id='.$id.'" class="one">'.$title.'</a>';
					
					echo'</div>';
				echo'</div>';									
			}
			//echo'</ul>';
			$stmt->close();
			$mysqli->close();
	
	echo'</div>';
	echo'<br>';
	echo'<br>';
	echo'<img src="img/Aarong.gif"/>';
	echo'</div>'; //<!--end news2-->
echo'</div>'; //end allnews
}
?>


</body>
</html>