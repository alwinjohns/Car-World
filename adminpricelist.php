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
   <section id="content">
      <div class="block-1 box-1">
      	<?php	
			$sql="select * from spec"; 
			$rs=dbcon($sql);
			
							echo '<table border ="1"  align="Center" cellspacing="3" cellpadding="3" width="900">
									<thead>
										<tr>
											<th align="left"></th>
											<th align="left"><b>Company</b></th>
											<th align="left"><b>Model</b></th>
											<th align="left"><b>Price</b></th>
										</tr>
									</thead>';
										while($row=mysql_fetch_array($rs))
												{
													echo '<tr>
																<td align="center"><img src="images/pic/'.$row['Picture'].'" 		                                                                    height="80" width="100"></td>
														 		<td align="left"><br>'.$row['Company'].'</td>
																<td align="left"><br>'.$row['Model'].'</td>
														 		<td align="left"><br>'.$row['Price'].'</td>
														  </tr>';
												}
							echo '</table>';
		?>
      </div>
   </section> 
  <!--==============================footer=================================-->
<?php
	include_once "footer.php";
?>
