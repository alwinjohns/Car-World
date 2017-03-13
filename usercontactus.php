<?php
  	include_once "dbcon.php";
	if(isset($_POST['send']))
	{
		$name=$_POST['name'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$msg=$_POST['msg'];
		
  $sql="insert into complaints  values('$name','$email','$phone','$msg')";
		dbcon($sql);
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
                include_once "userheader.php";
			?>
   <!--==============================content================================-->
   <section id="content">
      <div class="block-1 box-1">
 	<form id="form" method="post" >
            <h2>Contact Us</h2>
                <label><input type="text" name="name" value="<?php echo $id ?>" onBlur="if(this.value=='') this.value='Name'" onFocus="if(this.value =='Name' ) this.value=''" readonly></label>
                <label><input type="text" name="email" value="Email" onBlur="if(this.value=='') this.value='Email'" onFocus="if(this.value =='Email' ) this.value=''"></label>
                <label><input type="text" value="Phone" onBlur="if(this.value=='') this.value='Phone'" onFocus="if(this.value =='Phone' ) this.value=''" name="phone" ></label>
                <label><textarea name="msg" onBlur="if(this.value==''){this.value='MESSAGE'}" onFocus="if(this.value=='MESSAGE'){this.value=''}">MESSAGE</textarea></label>
        </div>
            	<input name="Submit" type="submit" value="Submit">
    	<input name="clear" type="reset" value="clear">
     </form>
   </section>
  <!--==============================footer=================================-->
<?php
	include_once "footer.php";
?>
<?php
include_once "dbcon.php";
if(isset($_POST['Submit']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];	
	$phone=$_POST['phone'];	
	$msg=$_POST['msg'];	
	$q="insert into complaints values('$name','$email','$phone','$msg')";
	dbcon($q);
}
?>