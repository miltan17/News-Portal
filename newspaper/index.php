<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
 
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Khobor24.com</title> 
<link href="css/slideshow.css" rel="stylesheet" type="text/css" />
<link href="css/newapapercss.css" rel="stylesheet" type="text/css" />
<!--<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />-->
<link href="css/newspapercss1.css" rel="stylesheet" type="text/css" />
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
      	  
             <!--end date_time3-->
             <div id="date_time2" style="font-size:18px;color:#C06">
               <?php 
			   		echo date("l d F Y");
					echo"<br/>";
					echo gmdate("h:i:s A");
			   ?>
             </div> 
             <!--end date_time2-->
      </div> <!--end date_time-->

	</div> <!--end title-->
    
    
    
    <div id="login_search">
    
    	<div id="login">
       	  <p1><a href="admin_login.php" target="_blank" style="text-decoration:none;color:#0CC">Admin</a></p1>
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
    
    <br />
    
   <!-- <div id="menubar">-->
	<!--<div id="menu">
      <ul id="MenuBar1" class="MenuBarHorizontal">
      <li><a href="#">প্রচ্ছদ</a></li>
        <li><a class="MenuBarItemSubmenu" href="catagory.php?cat='jatio'">বাংলাদেশ</a>
          <ul>
            <li><a href="catagory.php?cat=national">জাতীয়</a></li>
          </ul>
        </li>
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
    </div>-->
      <!--end menubar-->
    
    <div id="addshow">
    	<div id="add">
        <img src="img/ekhanei com.jpg" alt="ekhaneicom" width="1107" height="205"/>
        </div> <!--end add-->
        
        <div id="social_link">
        	<div id="fb"><a href="https://www.facebook.com" target="_blank" class="facebook"><img src="img/fb1.gif" alt="facebook" width="26" height="30" style="border:1px solid #06F;padding-bottom:3px;"/></a></div> <!--end fb-->
            <div id="twt"><a href="https://www.twitter.com" target="_blank"><img src="img/twitter1.gif" alt="twiter" width="26" height="30" style="border:1px solid #06F;padding-bottom:3px;"/></a></div> <!--end twt-->
            <div id="in"><img src="img/linkdn1.gif" alt="in" width="26" height="30" style="border:1px solid #06F;padding-bottom:3px;"/></div> <!--end in-->
          <div id="googleplus"><img src="img/gplus1.gif" alt="googleplus" width="26" height="30" style="border:1px solid #06F;padding-bottom:3px;"/></div> 
          <!--end google plus-->
          <div id="janina"><img src="img/rss1.gif" alt="janina" width="26" height="30" style="border:1px solid #06F;padding-bottom:3px;"/></div> 
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
    
    
    <!--khobor prokash-->
    <div id="khoborprokash">
    <div id="khoborprokash1">
    	<div id="jatio_sirsokhobor">
        	<div id="jatio">
            	<div id="jatio1">
                	<?php
					require_once'function.php';
					jatio1();
					?>
                </div> <!--end jatio1-->
                <div id="jatio2">
                <?php
					require_once'function.php';
                	jatio2();
                ?>
                </div> <!--end jatio2-->
            </div> <!--end jatio-->
        	<div id="sirsikhobar">
            	<div id="sirso">শীর্ষ খবর</div>
             	<div id="khobor">
                	<div id="khobor_1">
                    <ul style="list-style-type: none;">
                    	<?php
							require_once'function.php';
							sirsokhobor();
						?>
                    </ul>
                  </div> <!--end khobor_1-->
                </div> 
             	<!--end khobor-->
              <div id="sobkhobor">শীর্ষ খবর</div>
            </div> <!--end sirsokhobor--> 
        </div> <!--end jatio_sirsokhobor-->
        <div id="spotlight_add1">
        	<div id="spotlight">
            	<div id="spotlight1">
                	<div id="spot_title">স্পটলাইট</div> <!--end spot_title-->
                    <div id="spot_image">
                    	<?php
							require_once'function.php';
							spot_image();
						?>
                    </div> <!--end spot_image-->
                    <div id="spot_add"><img src="img/Atashi_add.gif" alt=""/></div> 
                    <!--end spot_add-->
                </div> <!--end spotlight1-->
            </div> <!--end spotlight-->
        	<div id="add1">
            	<div id="add1_1"><img src="img/Aarong.gif" width="263" /></div>
                <div id="add1_2"><img src="img/asuliamodeltown.gif" width="263" /></div>
                <div id="add1_3"><img src="img/abc-radio.jpg" width="263" /></div>
          </div> <!--end add1-->
        </div> <!--end spotlight_add1-->
    </div> <!--end khoborprokash1-->
    </div> <!--end khobarprokash-->
    
   
</div> <!--end maindiv2-->



<div id="maindiv1_3" style="border-bottom:2px solid #CCC;">



  <div id="maindiv3">
    <div id="maindiv4">
      <div id="add_photo_video">
        <div id="md3add1">
          <div id="md3add1_1"><img src="img/asuliamodeltown.gif" /></div>
          <!--end md3add1_1-->
          <img src="img/carsell.gif" />
          <div id="md3add1_2"></div>
          <!--end md3add1_2-->
        </div>
        <!--end md3add1-->
        <div id="md3photo">
          <div id="md3photo1">
            <div id="md3photo_heading" style="text-shadow:2px -1px 0px #FFF;">ছবিতে আজ</div>
            <!--end md3photo_heading-->
             <div id="slideshow">
             
             
             
             <div class="slideshow_div">
				<div id="slideshow_div1">
					<div id="slider">
						<div id="Photolist">
							
							<ul>
							
								<li id="list1" class="slide_photo1"><a href="#"><img src="img/Ecnec-grid+line.jpg" alt="রাজধানীর বিদ্যুৎ চাহিদা মেটাতে বড় প্রকল্প" width="400" height="250"/></a>
									<div class="tooltip">
										<h1>রাজধানীর বিদ্যুৎ চাহিদা মেটাতে বড় প্রকল্প</h1>
									</div>
								</li>
								
								<li id="list2" class="slide_photo2"><a href="#"><img src="img/md3photo1.jpg" alt="গ্রামবাঙলার সাধারন মানুষের অসাধারন জীবনযাত্রা..." width="400" height="250"/></a>
									<div class="tooltip">
										<h1>গ্রামবাঙলার সাধারন মানুষের অসাধারন জীবনযাত্রা...</h1>
									</div>
								</li>
								
								<li id="list3" class="slide_photo3"><a href="#"><img src="img/baby.jpg" alt="শিশুদের সেলফোন ব্যবহার করা উচিত নয়" width="400" height="250"/></a>
									<div class="tooltip">
										<h1>শিশুদের সেলফোন ব্যবহার করা উচিত নয়</h1>
									</div>
								</li>
								
								<li id="list4" class="slide_photo4"><a href="#"><img src="img/chill.jpg" alt="মরিচের যত গুন" width="400" height="250"/></a>
									<div class="tooltip">
										<h1>মরিচের যত গুন</h1>
									</div>
								</li>
								
								<li id="list5" class="slide_photo5"><a href="#"><img src="img/alarzi.jpg" alt="শীতে এলার্জির প্রকটতা" width="400" height="250"/></a>
									<div class="tooltip">
										<h1>শীতে এলার্জির প্রকটতা</h1>
									</div>
								</li>
								
							</ul>
								
						</div>
					</div>
				</div>
			</div>
             
             
             
             </div><!--end slideshow -->
            
            
            
            <!--slide practicce -->
            
            
            
            
            
            
            
          </div>
          <!--end md3photo1-->
          <div id="md3photo2">
            <div id="more_photo_heading">বিচিত্র খবর</div>
            <!--end more_photo_heading-->
            <div id="more_photo" style="width:290px">
            <?php
				require_once'function.php';
            	bicitro();
				?>
            </div>
            <!--end more_photo-->
          </div>
          <!--end md3photo2-->
        </div>
        <!--end md3photo-->
      </div>
      <!--end add_photo_video-->
      <div id="vot_add">
       		<?php
						require_once'function.php';
						projukti();
			?>
                	
      </div>
      <!--end vot_add-->
    </div>
  </div><!--end maindiv3-->
  
  
  
  <div id="maindiv5">
  	<div id="othernews">
    	<div id="bichitro_khobor">
        	<img src="img/e2688d8a3c9a5c62167c67a6b93be65f.gif" width="360" height="280"/>
        </div>
        <div id="grambangla">
        	<?php
						require_once'function.php';
						economics();
			?>
        </div>
        <div id="bichitro_khobor">
        	<img src="img/jobsinbd-forads.gif" width="360" height="280"/>
        </div>
        <div id="grambangla">
        	<?php
						require_once'function.php';
						projukti_list();
			?>
        </div>
        <div id="bichitro_khobor">
        	<img src="img/10244527771941899292.png" width="360" height="280"/>
        </div>
         <div id="grambangla">
        	<?php
						require_once'function.php';
						health_list();
			?>
        </div>
    </div>
  	<div id="allnews">
    
    
    	<div id="catagory">
        	<div id="catagory_heading">
            রাজনীতি
            </div><!--end of  catagory_heading-->
            <div id="catagory_news">
            	<div id="catagory_news1">
                
                	<?php
						require_once'function.php';
						rajniti1();
					?>
                	
                </div><!--end of catagory_news1-->
                <div id="catagory_news2">
                
                	<?php
						require_once'function.php';
						rajniti2();
					?>
                
                </div><!--end of catagory_news2-->
            </div><!--end of catagoryynews-->
        </div><!--end of catagory-->
    	

    	<div id="catagory">
        	<div id="catagory_heading">
            খেলা
            </div><!--end of  catagory_heading-->
            <div id="catagory_news">
            	<div id="catagory_news1">
                
                	<?php
						require_once'function.php';
						khela1();
					?>
                
                </div><!--end of catagory_news1-->
                <div id="catagory_news2">
                
                	<?php
						require_once'function.php';
						khela2();
					?>
                
                </div><!--end of catagory_news2-->
            </div><!--end of catagoryynews-->
        </div><!--end of catagory-->
        
        
        <div id="catagory">
        	<div id="catagory_heading">
            বিনোদন
            </div><!--end of  catagory_heading-->
            <div id="catagory_news">
            	<div id="catagory_news1">
                
                	<?php
						require_once'function.php';
						binodon1();
					?>
                
                </div><!--end of catagory_news1-->
                <div id="catagory_news2">
                
                	<?php
						require_once'function.php';
						binodon2();
					?>
                
                </div><!--end of catagory_news2-->
            </div><!--end of catagoryynews-->
        </div><!--end of catagory-->
        
        
        <div id="catagory">
        	<div id="catagory_heading">
            বাংলাদেশ
            </div><!--end of  catagory_heading-->
            <div id="catagory_news">
            	<div id="catagory_news1">
                
                	<?php
						require_once'function.php';
						bangladesh1();
					?>
                
                </div><!--end of catagory_news1-->
                <div id="catagory_news2">
                
                	<?php
						require_once'function.php';
						bangladesh2();
					?>
                
                </div><!--end of catagory_news2-->
            </div><!--end of catagoryynews-->
        </div><!--end of catagory-->
        
        
        <div id="catagory">
        	<div id="catagory_heading">
            আন্তর্জাতিক
            </div><!--end of  catagory_heading-->
            <div id="catagory_news">
            	<div id="catagory_news1">
                
                	<?php
						require_once'function.php';
						antorjatik1();
					?>
                
                </div><!--end of catagory_news1-->
                <div id="catagory_news2">
                
                	<?php
						require_once'function.php';
						antorjatik2();
					?>
                
                </div><!--end of catagory_news2-->
            </div><!--end of catagoryynews-->
        </div><!--end of catagory-->
        
        
    </div> <!--end allnews-->
   
  </div> <!--end maindiv5-->
  
  
</div> <!--end maindiv1_3-->
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
</div>
<!--<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
</script>-->
</body>
</html>


