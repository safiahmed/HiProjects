<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Hiprojects| Home</title>
<link href="css/unsubscribe.css" rel="stylesheet" type="text/css" media="screen" />
<link rel="stylesheet" href="css/bootstrap.css" />
<script type="text/javascript" src="Js/jquery-1.10.2.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	var pageTitle = document.title; //HTML page title
	var pageUrl = location.href; //Location of the page	
	//user hovers on the share button	
	$('#share-wrapper li').hover(function() {
		var hoverEl = $(this); //get element
		
		//browsers with width > 699 get button slide effect
		if($(window).width() > 699) { 
			if (hoverEl.hasClass('visible')){
				hoverEl.animate({"margin-left":"-117px"}, "fast").removeClass('visible');
			} else {
				hoverEl.animate({"margin-left":"0px"}, "fast").addClass('visible');
			}
		}
	});		
	//user clicks on a share button
	$('.button-wrap').click(function(event) {
			var shareName = $(this).attr('class').split(' ')[0]; //get the first class name of clicked element
			
			switch (shareName) //switch to different links based on different social name
			{
				case 'facebook':
					var openLink = 'https://www.facebook.com/sharer/sharer.php?u=' + encodeURIComponent(pageUrl) + '&amp;title=' + encodeURIComponent(pageTitle);
					break;
				case 'twitter':
					var openLink = 'http://twitter.com/home?status=' + encodeURIComponent(pageTitle + ' ' + pageUrl);
					break;
				case 'digg':
					var openLink = 'http://www.digg.com/submit?phase=2&amp;url=' + encodeURIComponent(pageUrl) + '&amp;title=' + encodeURIComponent(pageTitle);
					break;
				case 'stumbleupon':
					var openLink = 'http://www.stumbleupon.com/submit?url=' + encodeURIComponent(pageUrl) + '&amp;title=' + encodeURIComponent(pageTitle);
					break;
				case 'delicious':
					var openLink = 'http://del.icio.us/post?url=' + encodeURIComponent(pageUrl) + '&amp;title=' + encodeURIComponent(pageTitle);
					break;
				case 'google':
					var openLink = 'https://plus.google.com/share?url=' + encodeURIComponent(pageUrl) + '&amp;title=' + encodeURIComponent(pageTitle);
					break;
				case 'email':
					var openLink = 'mailto:?subject=' + pageTitle + '&body=Found this useful link for you : ' + pageUrl;
					break;
			}		
		//Parameters for the Popup window
		winWidth 	= 650;	
		winHeight	= 450;
		winLeft   	= ($(window).width()  - winWidth)  / 2,
		winTop    	= ($(window).height() - winHeight) / 2,	
		winOptions   = 'width='  + winWidth  + ',height=' + winHeight + ',top='    + winTop    + ',left='   + winLeft;		
		//open Popup window and redirect user to share website.
		window.open(openLink,'Share This Link',winOptions);
		return false;
	});
});
</script>
</head>
<body>	
<div id="share-wrapper">
    <ul class="share-inner-wrp">
        <!-- Facebook -->
        <li class="facebook button-wrap"><a href="#">Facebook</a></li>
        
        <!-- Twitter -->
        <li class="twitter button-wrap"><a href="#">Tweet</a></li>
        
         <!-- Digg -->
        <li class="digg button-wrap"><a href="#"></a></li>
        
        <!-- Stumbleupon -->
        <li class="stumbleupon button-wrap"><a href="#">Printer</a></li>
      
         <!-- Delicious -->
       
        
        <!-- Google -->
        <li class="google button-wrap"><a href="#">Plus Share</a></li>
        
        <!-- Email -->
        <li class="email button-wrap"><a href="#">Email</a></li>
    </ul>
</div>

<div id="mrova-img-control" style="margin-top: -84px; top: 50%;"></div>
<div id="wrapper">
<div id="page">
<div id="Header_wrapper"> 
<div class="hanechitra2">
</div>
<div class="hanechitra3">
	<div id="innerlogo">
	<ul>        
			<li><a href="#"><img src="images/flike.png"></a></li>
			<li><a href="#"><img src="images/tweet.png"></a></li>
			<li><a href="#"><img src="images/pin.png"></a></li>
			<li><a href="#"><img src="images/share.png"></a></li>
			<li><a href="#"><img src="images/inshare.png"></a></li>
		</ul>
	
	
	</div>
</div>

<div class="hanechitra4">

<div id="upperlogo">
	<ul>    
	
			<li><a href="#"><img src="images/register.png"></a></li>    
			<li><a href="#"><img src="images/mycart (2).png"></a></li>
			<li><a href="#"><img src="images/mycart (1).png"></a></li>
		
			
		
		</ul>
	</div>
</div>
<div id="menu">
		<ul id="main">        
			<li ><a href="index.html">Home</a></li>
			<li><a href="About Us.html">Our Expertise</a></li>
			<li><a href="brands.html">Project Kits</a></li>
			<li><a href="About Water.html">Learning Material</a></li>
			<li><a href="Technology.html">Videos</a></li>
			<li><a href="career_services.php">Dealers Network</a></li>
			<li><a href="learning/learning.php">Support</a></li>
			<li><a href="Forum/Naira_forum/index.php">Contact </a></li>
			<li><input type="search" placeholder="Enter Search terms"></li>
		</ul>
	</div>
	<div class="hanechitra-kavacha">
    	<div class="hanechitra"></div>
</div>


<div id="page">
<div id="khaja">
    <div id="khajafooter"> 
    		
    	<div class="col_allw3008">
        	<div class="top-sidebar">
					<form id="contact-form" name="myemailform" action="email_unsubscribe.php" method="post">
			<h2>Unsubscribe</h2><br/><br/>
		
		<div>
				<label>
					<span>Email: (required)</span>
					<input placeholder="Please enter your email address" type="email" tabindex="2" name="email" id="input_type" required><br/><br/><br/>
				</label>
			</div>
			
		
			<div id="send">
				<button name="submit" type="submit" id="contact-submit">unsubscribe</button>
			</div>
		
			<div>
			<br/><br/>
				<!--<button name="Subscribe" type="submit" id="contact-submit">Send Email</button>-->
			</div>
			
		<?php
			
					/*		if(isset($_POST['contact-submit']))
							
							{
								
                             	 
								
								
								
				$testi_by1=trim(strip_tags($_POST['name']));
				$testi_by=trim(strip_tags($_POST['email']));
				$testi_matter=trim(strip_tags($_POST['message']));
				$testi_by2=trim(strip_tags($_POST['project']));
				$testi_by3=trim(strip_tags($_POST['college_name']));
				$testi_by4=trim(strip_tags($_POST['advice_message']));
				
	            $insert="insert into tbl_feedback(feed_name,feed_collegename,feed_email,option,proj_name,feed_message,advice_message,price_review,quality_review,value_review) values('".$testi_by1."','".$testi_by3."','".$testi_by."','".$activeval14."'.,'".$testi_by2."','".$testi_matter."','".$testi_by4."','".$activeval1."','".$activeval2."','".$activeval3."')";
                $result = mysql_query($insert) or die("Query failed : " . mysql_error());
                echo $result;
				header("Location:feedback.php");
					 
					}	
					*/
				?>
			
			
			
			
			
		</form>
				</div>
		</div>		
		<div class="box_strip"></div>
        <div class="cleaner"></div>    
    </div>	 
	</div>

		</div>
			
			
			
	<div id="footer_wrapper">
    <div id="footer"> 
    	<div class="col_allw300">
        	<h3>E-Commerce</h3>
            <ul class="footer_list">
            	<li class="datalist">Platform Overview</li>
                <li><a href="privacypolicy.php">Technology</a></li>
                <li class="datalist">Shopping Experience</li>
                <li class="datalist">Store Management</li>
				<li class="datalist">Analytics&Reporting</li>                		
            </ul>
        </div>
    	<div class="col_allw300">
        	<h3>Comapany</h3>
            <ul class="footer_list">
                <li class="datalist">About</li>            
            	<li class="datalist">Careers</li>
				<li class="datalist">Contact</li>
								<li class="datalist">Blog</li>

            </ul>
        </div>
		<div class="col_allw300">
        	<h3>Follow Us</h3>
            <ul class="footer_list">
                <li class="datalist">Newsletter</li>            
            	<li><a href="#">Linkedin</li>
                <li><a href="#">Facebook</li>
                <li><a href="#">Twitter</li>
               
            </ul>
        </div>
    	       <div class="col_allw300">
        	<h3>Get Started</h3>
            <ul class="footer_list">
                <li class="datalist">Get A Quote</li>            
            	<li><a href="#" target="_parent">Talk to our sales team-</a></li>               
                <li><a href="#" target="_parent">contact@projectsguide.com </a></li>
				
            </ul>
        </div>
    
        <div class="cleaner"></div>
    
    </div>
</div>
  <div id="footer_menu">
    <div id="footer2"> 
    	<div class="col_allw300_menu">    
        	<h3>Project Guide</h3>
		
            <ul class="footer_list_menu">
    <li><a href="privacypolicy.php">Policies :Terms&Conditions |</a></li>
                <li><a href="#">Privacy Policy  |</a></li>   			        		
            </ul>   
    </div>
	
   </div>
    <div id="footer2"> 
    	<div class="col_allw300_menu">        
            <ul class="footer_list_menu">
            	
                <li><a href="#">About Us  |</a></li>
                <li><a href="contact_us.php">FAQ |</a></li>
				<li><a href="terms of use.php">Testimonials |</a></li>     
                <li><a href="contact_us.php">Careers  |</a></li>
				<li><a href="terms of use.php">Feedback  |</a></li> 
                <li><a href="contact_us.php">Sitemap |</a></li>
				<li><a href="terms of use.php">Contact Us |</a></li>    
                				        		
            </ul>   

    </div>
	<div id="copyright">    	
            Copyright ©2013 Projects Guide.com 
    </div>
   </div>
</div>
</div>

</div>



   <span>
	<a href="#" title="Scroll to Top" class="scrollup" style="display: inline;"></a>
<span>

<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
		<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    	<script src="Js/bootstrap.js"></script>
    	<script type="text/javascript">
  	$(document).ready(function(){ // Ready Function Start
        		$("#myCarousel").carousel({interval:2000});
        		
        	});//Ready Function End
  </script>
  
</body>
</html>