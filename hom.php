<?php
 	session_start();
	include_once "dbcon.php";
	$q="select distinct Company from spec";
	$result=dbcon($q);
		
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Car World</title>
    <meta charset="utf-8">
    
    <link rel="stylesheet" href="css/login_style.css">
    
    <link rel="stylesheet" type="text/css" media="screen" href="css/reset.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/slider.css">
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
				slideshow:3000,
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
</head>
<body>
<div class="bg">
	<?php
		include_once "header.php";
		include_once "dbcon.php";
	?>
   <div id="slider">
       <div class="slider-block">
          <div class="slider">
              <ul class="items">
              <?php
			  		$sql="select * from slideshow"; 
					$rs=dbcon($sql);
					
					while($row=mysql_fetch_array($rs))
					{
                  echo '<li><img src="images/Slideshow/'.$row['Picture'].'" alt="" /><div class="banner"><div><span>'.$row['Company'].'</span><strong>'.$row['Model'].'</strong><p>'.$row['About'].'p><a href="#" class="button">Read More</a></div></div></li>';
					}
			 ?>
              </ul>
          </div>
          <a href="#" class="prev"></a>
          <a href="#" class="next"></a>
        </div>
    </div>
    <section id="content"><div class="ic"></div>
      <div class="block-1 box-1">
        <div>
        <div class="login">

      <h1>Find Your Car &nbsp;&nbsp;</h1><br/><br/>
           
<form id="research" name="research" method="get" action="">
  <label for="comp"></label>
  
  <p><br/>&nbsp;Select a company
  <select name="cmpny" id="cmpny" onChange="showUser(this.value)">
    <br/>
    <option>Select a company </option>
  	
<?php 
	while($row=mysql_fetch_array($result))
	{
		echo "<option>$row[0]</option>";
	}
?>
    
  </select>
</p>

<!--<div id="txtHint"><b>Person info will be listed here.</b></div>-->

<div id="txtHint"> 
<p><br/>
&nbsp;Select a model&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;      	
  <select name="model" id="model">
    
    <option> -- model --</option>
  
  
  
  </select>
 	</div> 
</p>

        
        <p class="submit"><input type="submit" name="search" value="Search"></p>
      </for><p>
      </form>



    
  
</body>
</html>
<?php
if(isset($_GET['search']))
{ $a=$_GET['cmpny'];$b=$_GET['model'];
header("Location: details.php?company=$a&model=$b");
}
?>
        
        </div>
        </div>
        </section>
        </div>
        <br/>
        <br/>
        
   <!--==============================content================================-->
  <!--==============================footer=================================-->
    <footer>Popular free website templates <a href="http://www.websitetemplatesonline.com" target="_blank">at www.WebsiteTemplatesOnline.com</a>. | <a href="http://www.getjoomlatemplatesfree.com/" title="Joomla Templates">GetJoomlaTemplatesFree.com</a>, the Smart Choice.<br>
        Website Template designed by <a href="http://www.templatemonster.com/" class="link" rel="nofollow" target="_blank">TemplateMonster.com</a>
    </footer>	
</div> 
</body>
</html>

<!--  AJAX  -->
<script>
function showUser(str)
{
if (str=="")
  {
  document.getElementById("txtHint").innerHTML="";
  return;
  }
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","research_ajax.php?q="+str,true);
xmlhttp.send();
}
</script>

<!--  AJAX end -->