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
      	<form name="addmodel" method="post" action="" enctype="multipart/form-data">  
        <center>         
			<table width="750" border="1">
              <tr>
                <th scope="col" colspan="2"><center>Add a new company</center></th>
              </tr>
              <tr>
                <td width="366">&nbsp;Company Name : </td>
                <td width="368">&nbsp;<input name="Company" type="text"></td>
              </tr>
              <tr>
                <td>&nbsp;Logo : </td>
                <td>&nbsp;<input name="Logo" type="file"></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;<input name="Add" type="submit" value="Add Company">&nbsp;<input name="Clear" type="reset"></td>
              </tr>
            </table>
            </center>
		</form>
	
      </div>
   </section> 
  <!--==============================footer=================================-->
<?php
	include_once "footer.php";
?>
