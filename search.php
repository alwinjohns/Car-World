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
</head>
<body>
<div class="bg">
			<?php
                include_once "header.php";
            ?>
   <!--==============================content================================-->
   <section id="content">
      <div class="block-1 box-1">
    
      <form action="" method="get" name="VehicleSearch">
      	<center><input name="Search" type="text" size="80"><input name="Submit" type="submit" value="Search"></center>
      </form>
      </div>
      	<?php	
		if(!isset($_GET['Submit']))
		{
			      echo '<img src="images/slide-2.jpg" height="" width="">';

		}
		else
		{
			$find = trim($_GET['Search']);
			
			$sql="SELECT * FROM spec WHERE Company LIKE'%$find%' or Model LIKE'%$find%' or Price='$find' or About LIKE'%$find%' or Type LIKE'%$find%' or Length LIKE'%$find%' or Width LIKE'%$find%' or Height LIKE'%$find%' or Seatingcap LIKE'%$find%' or Displacement LIKE'%$find%' or Fuel LIKE'%$find%' or Power LIKE'%$find%' or PowerRPM LIKE'%$find%' or Torque LIKE'%$find%' or TorqueRPM LIKE'%$find%' or Mileage LIKE'%$find%' or Transmission LIKE'%$find%' or Gears LIKE'%$find%' or Ac LIKE'%$find%' or Steering LIKE'%$find%' or Window LIKE'%$find%' or Brake LIKE'%$find%' or Airbag LIKE'%$find%' or Alloy LIKE'%$find%'";
			$result = dbcon($sql);

echo '<div class="block-1 box-1">';			
while ($row=mysql_fetch_array($result))
{	
$cmp=strtoupper($row['Company']);
$model=strtoupper($row['Model']);	
echo '<h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<font><a href="details.php?company='.$row[0].'&model='.$row[2].'">'.
$cmp.'    '.$model.'</a></font><br/><br/>
<img src="images/pic/'.$row['Picture'].'" height="80" width="120"><br/><br/>
<font></h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
'.$row['About'].'</font><br/><br/><br/><br/>';
}
echo '';
$anymatches=mysql_num_rows($result);
if ($anymatches == 0)
{
echo "Sorry, but we can not find an entry to match your query...<br><br>";
}

//And we remind them what they searched for
echo "<b><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Searched For:</b> " .$find;
//}
}
?>		
      </div></div>
   </section> 
   
  <!--==============================footer=================================-->
<?php
	include_once "footer.php";
?>
