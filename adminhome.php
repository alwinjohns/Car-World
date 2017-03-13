<?php
include_once "dbcon.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" media="screen" href="css/reset.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/slidersmall.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700,300' rel='stylesheet' type='text/css'>
    <script src="js/jquery-1.7.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/tms-0.4.1.js"></script>
    <script>
		$(document).ready(function(){
			$('.slider')._TMS({
				show:0,
				pauseOnHover:true,
				prevBu:'.prev',
				nextBu:'.next',
				playBu:false,
				duration:500,
				preset:'fade',
				pagination:true,//'.pagination',true,'<ul></ul>'
				pagNums:false,
				slideshow:8000,
				numStatus:false,
				banners:'fromBottom',// fromLeft, fromRight, fromTop, fromBottom
				waitBannerAnimation:false,
				progressBar:false
			})
			
	 	}) 
		$(function(){
		  if($(window).width() <= 1066)
			{
			  $("#slider .prev").css("left", "55px")
			  $("#slider .next").css("right", "55px")
			}
		})
	</script>
    <script type="text/javascript">
		function Validate() 
		{	//email
			var emailFilter = /^[^@]+@[^@.]+\.[^@]*\w\w$/ ;
			var illegalChars= /[\(\)\<\>\,\;\:\\\"\[\]]/ ;
			if(document.Register.user.value=="") 
			{				
				document.getElementById("user").innerHTML="Enter e-mail id";
				return(false);
			}
			else if (!emailFilter.test(document.Register.user.value))
			{             
				document.getElementById("user").innerHTML= "Enter a valid email address";
				return(false);
			}
			else if(document.Register.user.value.match(illegalChars)) 
			{
				document.getElementById("user").innerHTML= "Email address contains illegal characters";
				return(false);
			}
			else
			{
				document.getElementById("user").innerHTML="";
			}
				
			
			//pass
			if(document.Register.password.value=="") 
			{				
				document.getElementById("password").innerHTML="Enter password";
				return(false);
			}
			else
			{
				document.getElementById("password").innerHTML="";
			}
			return(true);
		}
	</script> 

	<!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
      </div>
    <![endif]-->
    <!--[if lt IE 9]>
    	<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
    	<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700' rel='stylesheet' type='text/css'>
   		<script type="text/javascript" src="js/html5.js"></script>
    	<link rel="stylesheet" type="text/css" media="screen" href="css/ie.css">
	<![endif]-->
</head>
<body>
<div class="bg">
			<?php
                include_once "adminheader.php";
            ?>
   <!--==============================content================================-->
   <section id="content"><div class="ic"></div>
      <div class="block-1 box-1">
      	<br><br>
        <div>
            <img src="images/admin.jpg" alt="" height="200" width="200">
        </div>
        <div>
        </div>
        <div>
				<h3>Administrator<br>
                Kottayam CAR World<br>
                Ettumannor<br>
                Kottayam</h3>
        </div>
<br><br><br><br>
        <div class="last" align="right">
        </div>
      </div>
   </section> 
  <!--==============================footer=================================-->
<?php
	include_once "footer.php";
?>
