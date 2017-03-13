<?php
  	include_once "dbcon.php";
	if(isset($_POST['Add']))
	{	
		$company=$_POST['Company'];		
		$logo="";
		
		if($_FILES["Logo"]["name"]) 
		{
			$filename = $_FILES["Logo"]["name"];
			$source = $_FILES["Logo"]["tmp_name"];
			$type = $_FILES["Logo"]["type"];
			$logo=$company.$filename;
			$target_path = "images/Logo/".$company.$filename; 
			if(move_uploaded_file($source, $target_path))
			{
				   echo "Uploading success";
			}
		}
		$sql="insert into company values('$company','$logo')";
		$result=dbcon($sql);
	}
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
			<h1>Add News</h1>
            
            
            <?php
					echo '
					<div id="templatemo_content">
						<br>
						<form action="" method="post" enctype="multipart/form-data">
							<br>
							<table width="700" border="0">
								  <tr>
									<td width="43%">Date</td>
										<td width="57%">';
											echo '<form action="" method="POST"><select name="Day">';
											echo '<option selected>Day</option>';
											for($i=1;$i<=31;$i++)
											{
												echo '<option>'.$i.'</option>';
											}
											echo '</select>';
						
											echo '<select name="Month">';
											echo '<option selected>Month</option>';
											for($i=1;$i<=12;$i++)
											{
												echo '<option>'.$i.'</option>';
											}
											echo '</select>';
							
											echo '<select name="Year">';
											echo '<option selected>Year</option>';
											for($i=2013;$i<=2050;$i++)
											{
												echo '<option>'.$i.'</option>';
											}
											echo '</select>';
											echo '</form>';
							echo ' 	   </td>
								  </tr>
								  <tr>
									<td>Event/News</td>
									<td><input type="text" name="News" id="News" /></td>
								  </tr>
								  <tr>
									<td>Details</td>
									<td><textarea name="Details" id="Details" cols="45" rows="5"></textarea></td>
								  </tr>
								  <tr>
									<td>Picture</td>
									<td><input type="file" name="Picture" id="Picture" /></td>
								  </tr>
								  <tr>
									<td>&nbsp;</td>
									<td><input type="submit" name="Submit" id="Submit" value="Submit" class="row1"/></td>
								  </tr>
							</table>
						</form>';

						if(isset($_POST['Submit']))
							 {
								$d=trim($_POST['Day']);
								$m=trim($_POST['Month']);
								$y=trim($_POST['Year']);
								$date=$y.'-'.$m.'-'.$d;
				
								$news=trim($_POST['News']);
								$details=trim($_POST['Details']);

								if($_FILES["Picture"]["name"]) 
								{
									$filename = $_FILES["Picture"]["name"];
									$source = $_FILES["Picture"]["tmp_name"];
									$type = $_FILES["Picture"]["type"];
									$pictr=$news.$date.$filename;
									$target_path = "images/News/".$news.$date.$filename; 
									if(move_uploaded_file($source,$target_path))
									{
									   echo "Uploading success";
									}
					
								}
								 
								if($date!="Day/Month/Year" && $news!="" && $details!="" && $pictr!="")
								{
								$insertNews="insert into news(Date,News,Details,Picture)values('$date','$news','$details','$pictr')";
								$rs=dbcon($insertNews);
								header("location: addnews.php");
								}
								else
									echo '<font color="#CC0000">Enter all fields</font>';
							 }
				?>  
        </div>
                    	
        
   </section> 
  <!--==============================footer=================================-->
<?php
	include_once "footer.php";
?>
