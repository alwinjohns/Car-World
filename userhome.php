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
    	
</head>
<body>
<div class="bg">
			<?php
                include_once "userheader.php";
            ?>
   <!--==============================content================================-->
   <section id="content"><div class="ic"></div>
      <div class="block-1 box-1">
      	<br><br>
        <div>
            <img src="images/user.jpg" alt="" height="200" width="200">
        </div>
        <div>
        </div>
        <div>
			<?php
				$q="select * from users where Name='$id'";
				$rs=dbcon($q);	
				while($row=mysql_fetch_array($rs))
				{
					echo $row[0].'<br>';
					echo $row[1].'<br>';			
					echo $row[2].'<br>';			
					echo $row[3].'<br>';			
					echo $row[4].'<br>';			
					echo $row[5].'<br>';									
				}
			?>
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
