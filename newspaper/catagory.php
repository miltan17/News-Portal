<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
 
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Khobor24.com</title> 
<link href="css/newapapercss.css" rel="stylesheet" type="text/css" />
<!--<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />-->
<link href="css/newspapercss1.css" rel="stylesheet" type="text/css" />
<link href="css/catagory_body.css" rel="stylesheet" type="text/css" />
<!--<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>-->
</head>
<body>
<div id="maindiv1">
<div id="maindiv2">

	<div id="title">

		<div id="name">
        	<div id="title_name">
        		<a href="index.php"><img src="img/news.PNG" alt="Khobor24.com" width="296" height="91"/> </a>
            </div> <!--end title_name-->
        	<div id="title_add"><img src="img/akiz.gif" width="450" height="92" /> 
            </div> <!--end title_add-->
        </div> <!--end name-->
      <div id="date_time">    		 
   			 <div id="date_time3">
             	
          
                
             </div>  
             <!--end date_time3-->
             <div id="date_time2" style="font-size:18px;color:#C06">
                <?php 
			   		echo date("l d F Y");
					echo"<br/>";
					echo gmdate("h:i:s A");
			   ?>
             </div> 
             <!--end date_time2-->
             
	  </div>
      <!--end date_time-->

	</div> <!--end title-->
    
    
    <div id="login_search">
    
    	<div id="login">
       	 <p1><a href="admin_login.php" target="_blank" style="text-decoration:none;color:#0CC">Log in</a></p1>
          <p2>|</p2> 
          <p3><a href="admin_register.php?" target="_blank" style="text-decoration:none;color:#0CC">Register</a></p3>
    	</div> <!--end login-->
		<div id="search">
        
        	<?php
				require_once'function.php';
				search();
			?>
        
        </div> <!--end search-->
    </div> <!--end login_search-->
   
    
    <div id="bb">
  
    <ul>
    	<li><a href="newspaper.php">প্রচ্ছদ</a></li>  
     <li><a href="catagory.php?cat=national">জাতীয়</a></li>   
     <li><a href="catagory.php?cat=international">আন্তর্জাতিক</a></li>
     <li><a href="catagory.php?cat=economics">অর্থনীতি</a></li>
     <li><a href="catagory.php?cat=politics">রাজনীতি</a></li>
     <li><a href="catagory.php?cat=sports">খেলা</a></li>
      <li><a href="catagory.php?cat=fun">বিনোদন</a></li>
        <li><a href="catagory.php?cat=technology">প্রযুক্তি</a></li>
        <li><a href="catagory.php?cat=health">স্বাস্থ্য</a></li>
        <li><a href="catagory.php?cat=lifestyle">লাইফস্টাইল</a></li>
        <li><a href="catagory.php?cat=others">অন্যান্য</a></li>
        </ul>
  
    </div>
    
    <br />
    
   <!-- <div id="menubar">
	<div id="menu">
      <ul id="MenuBar1" class="MenuBarHorizontal">
      <li><a href="#">প্রচ্ছদ</a></li>
        
            <li><a href="catagory.php?cat=national">জাতীয়</a></li>
          
        <li><a href="catagory.php?cat=international">আন্তর্জাতিক</a></li>
        <li><a href="catagory.php?cat=economics">অর্থনীতি</a></li>
        <li><a href="catagory.php?cat=politics">রাজনীতি</a></li>
        <li><a href="catagory.php?cat=sports">খেলা</a>
         </li>
        <li><a href="catagory.php?cat=fun">বিনোদন</a></li>
        <li><a href="catagory.php?cat=technology">প্রযুক্তি</a></li>
        <li><a href="catagory.php?cat=health">স্বাস্থ্য</a></li>
        <li><a href="catagory.php?cat=lifestyle">লাইফস্টাইল</a></li>
        <li><a href="catagory.php?cat=others">অন্যান্য</a></li>
      </ul>
    </div> 
    </div> <!--end menubar-->
    
    <div id="addshow">
    	<div id="add">
        <img src="img/ekhanei com.jpg" alt="ekhaneicom" width="1107" height="205"/>
        </div> <!--end add-->
        
        <div id="social_link">
        	<div id="fb"><a href="https://www.facebook.com" target="_blank" class="facebook"><img src="img/fb1.gif" alt="facebook" width="26" height="30"/></a></div> <!--end fb-->
            <div id="twt"><a href="https://www.twitter.com" target="_blank"><img src="img/twitter1.gif" alt="twiter" width="26" height="30"/></a></div> <!--end twt-->
            <div id="in"><img src="img/linkdn1.gif" alt="in" width="26" height="30"/></div> <!--end in-->
          <div id="googleplus"><img src="img/gplus1.gif" alt="googleplus" width="26" height="30"/></div> 
          <!--end google plus-->
          <div id="janina"><img src="img/rss1.gif" alt="janina" width="26" height="30"/></div> 
          <!-- end janina-->
      </div> <!--end social_link-->
    
    </div> <!--end addshow-->
    
    <!-- সর্বশেষ সংবাদ প্রচার-->
    <div id="sorbosessongbad">
    	<div id="sorboses">সর্বশেষঃ</div> <!--end sorboses-->
        <div id="songbad">
        <!--<a href="#" style="text-decoration:none" class="latestnews"><marquee scrolldelay="150" onmousemove="this.setAttribute('scrollamount',0,0)" onmouseout="this.setAttribute('scrollamount',6,0)">১৮২ রানেই অলআউট বাংলাদেশ...!!!!</marquee></a>-->
        	<?php
					require_once'function.php';
					sorboses();
					?>
        </div> <!--end songbad-->
    </div> <!-- end sorboses songbad-->
    
    <div id="space"></div>
</div> <!-- end maindiv2-->

<div id="maindiv3">
		<?php

			godown();

		?>
	<div id="titlenews"></div> <!--end titlenews-->
    <div id="allnews">
    
    	<div id="news1"></div>	<!--end news1-->
        <div id="news2"></div>	<!--end news2-->
    
    </div> <!--end allnews-->

</div> <!--end maindiv3-->

<div>
	<div class="footer">
    <div id="ff">
    	
        <ul>
    	<li><a href="#">প্রচ্ছদ</a></li>  
     <li><a href="catagory.php?cat=national">জাতীয়</a></li>   
     <li><a href="catagory.php?cat=international">আন্তর্জাতিক</a></li>
     <li><a href="catagory.php?cat=economics">অর্থনীতি</a></li>
     <li><a href="catagory.php?cat=politics">রাজনীতি</a></li>
     <li><a href="catagory.php?cat=sports">খেলা</a></li>
      <li><a href="catagory.php?cat=fun">বিনোদন</a></li>
        <li><a href="catagory.php?cat=technology">প্রযুক্তি</a></li>
        <li><a href="catagory.php?cat=health">স্বাস্থ্য</a></li>
        <li><a href="catagory.php?cat=lifestyle">লাইফস্টাইল</a></li>
        <li><a href="catagory.php?cat=others">অন্যান্য</a></li>
        </ul>
    
    </div>
		<div style="float:left; width:30%; border-top:3px solid white;">
        	<a href="index.php"><img src="img/news.PNG" width="267" height="106"/></a>
    	</div>
    	<div style="float:left; width:20%;border-top:8px solid white;line-height:4px;">
    		<address style="font-size:14px;padding:5px;">© সর্বস্বত্ব স্বত্বাধিকার সংরক্ষিত;         <p style="color:#000">khobor24.com</p></address>
    	</div>
    	<div style="float:right; width:48%;border-top:3px solid white;line-height:4px;font-size:14px;">
          <p><TT style="color:black">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;সম্পাদক ও প্রকাশক: উদয় হোসেন মিল্টন,
            </TT></p>
          <p><TT style="color:black">&nbsp;&nbsp;&nbsp;&nbsp;জিয়া হল, রাজশাহী প্রকৌশল ও প্রযুক্তি বিশ্ববিদ্যালয়, রাজশাহী।
            </TT></p>
          <p><TT style="color:black">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ই-মেইলঃ miltan17.ruet@gmail.com</TT></p>
          <p><TT style="color:black">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ফোনঃ ০১৬৭৭০৭৩৭২৯ </TT></p>
      </div>
	</div>


</div>
</div> <!-- end maindiv1-->
<!--<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
</script>-->

</body>
<?php
function godown(){
	require_once 'function_catagory.php';
	$cat =$_GET['cat'];
			//$pid =$_GET['pid'];
				//$aid =$_REQUEST['aid'];
				
				switch($cat){
					case 'national':
						nationalNews();
						break;
					case 'international':
						internationalNews();
						break;
					case 'economics':
						economicsNews();
						break;
					case 'politics':
						politicsNews();
						break;
					case 'sports':
						sportsNews();
						break;
					case 'fun':
						funNews();
						break;
					case 'technology':
						technologyNews();
						break;
					case 'health':
						healthNews();
						break;
					case 'lifestyle':
						lifestyleNews();
						break;
					case 'others':
						othersNews();
						break;								
				
		}
	}
?>
</html>