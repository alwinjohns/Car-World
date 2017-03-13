<!DOCTYPE html>
<html lang="en">
<head>
    <title>About</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" media="screen" href="css/reset.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700,300' rel='stylesheet' type='text/css'>
    <script src="js/jquery-1.7.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
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
		include_once "userheader.php";
		include_once "dbcon.php";
	?>
   <!--==============================content================================-->
   <section id="content"><div class="ic"></div>
      <div class="sub-page">
      	<div class="sub-page-left">
        	<h2 class="p2">Lateset News</h2>
            <div class="wrap">
				<?php
					$sql="select * from news order by Date desc"; 
					$rs=dbcon($sql);
					echo '<table border ="1"  align="Center" cellspacing="3" cellpadding="3" width="600" bordercolor="#000066">
					<thead>
					
						<tr bgcolor="#666666">
							<th align="left"></th>
							<th align="left"><b>News</b></th>
							<th align="left"><b>Details</b></th>
							</tr>
					</thead>';
						while($row=mysql_fetch_array($rs,MYSQLI_ASSOC))
								{
									echo '<tr>
												<td align="center"><img src="images/Logo/'.$row['Picture'].'"                                                                           height="80" width="150"></td>
												<td align="left"><br>'.$row['News'].'</td>
												<td align="left"><br>'.$row['Details'].'</td>
										  </tr>';
								}
				echo '</table>';
				?>
            </div>
        	<div class="box-4">
            
            </div>
        </div>
        <div class="sub-page-right">
        	<div class="shadow bot-1">
                <h2 class="p2">Our Mission</h2>
                <p class="text-3 p2">Kottayam CAR World</p>
                <p class="upper">Deliver your dreams at lowest cost</p>
            </div>
        <br>
        <br>
            <div class="box-5">
                <h2 class="p2">Specialization</h2>
                <p class="text-3 upper">AUTOMOTIVE INDUSTRY</p>
                <img src="images/page2-img5.jpg" alt="">
                <p class="upper"></p>
            </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        </div>
      </div>  
   </section> 
  <!--==============================footer=================================-->
<?php
	include_once "footer.php";
?>
