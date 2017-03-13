<?php
include_once "dbcon.php";
	$q="select distinct Company from company";
	$r=dbcon($q);
	
	if(isset($_POST['add']))
	{	$cmpny=$_POST['cmpny'];
		$model=$_POST['model'];
		$price=$_POST['price'];
		$type=$_POST['type'];
		$length=$_POST['length'];
		$width=$_POST['width'];
		$height=$_POST['height'];
		$seat=$_POST['seat'];
		$disp=$_POST['displacement'];
		$fuel=$_POST['fuel'];
		$power=$_POST['power'];
		$powerrpm=$_POST['powerrpm'];
		$torque=$_POST['torque'];
		$torquerpm=$_POST['torquerpm'];
		$mileage=$_POST['mileage'];
		$transmission=$_POST['transmission'];
		$gears=$_POST['gears'];
		$ac=$_POST['ac'];
		$steering=$_POST['steering'];
		$window=$_POST['window'];
		$brake=$_POST['brake'];
		$airbag=$_POST['airbag'];
		$alloy=$_POST['alloy'];
		$about=$_POST['about'];
		
		$pictr="";
		$p1="";
		$p2="";
		$p3="";
		$logo="";
	if($_FILES["Picture1"]["name"]) 
	{
		$filename = $_FILES["Picture1"]["name"];
		$source = $_FILES["Picture1"]["tmp_name"];
		$type = $_FILES["Picture1"]["type"];
		$pictr=$model.$filename;
		$target_path = "images/pic/".$model.$filename; 
		if(move_uploaded_file($source, $target_path))
		{
			   echo "Uploading success";
		}
	}
	if($_FILES["Picture2"]["name"]) 
	{
		$filename = $_FILES["Picture2"]["name"];
		$source = $_FILES["Picture2"]["tmp_name"];
		$type = $_FILES["Picture2"]["type"];
		$p1=$model.$filename;
		$target_path = "images/pic/".$model.$filename; 
		if(move_uploaded_file($source, $target_path))
		{
			   echo "Uploading success";
		}
	}
	if($_FILES["Picture3"]["name"]) 
	{
		$filename = $_FILES["Picture3"]["name"];
		$source = $_FILES["Picture3"]["tmp_name"];
		$type = $_FILES["Picture3"]["type"];
		$p2=$model.$filename;
		$target_path = "images/pic/".$model.$filename; 
		if(move_uploaded_file($source, $target_path))
		{
			   echo "Uploading success";
		}
	}
	if($_FILES["Picture4"]["name"]) 
	{
		$filename = $_FILES["Picture4"]["name"];
		$source = $_FILES["Picture4"]["tmp_name"];
		$type = $_FILES["Picture4"]["type"];
		$p3=$model.$filename;
		$target_path = "images/pic/".$model.$filename; 
		if(move_uploaded_file($source, $target_path))
		{
			   echo "Uploading success";
		}
	}
		
			
				
		$sql="INSERT INTO SPEC (Company,Logo,Model,Picture,Price,About,Type,Length,Width,Height,Seatingcap,Displacement,Fuel,Power,PowerRPM,Torque,TorqueRPM,Mileage,Transmission,Gears,Ac,Steering,Window,Brake,Airbag,Alloy,p1,p2,p3)VALUES('$cmpny','$logo','$model','$pictr','$price','$about','$type','$length','$width','$height','$seat','$disp','$fuel','$power','$powerrpm','$torque','$torquerpm','$mileage','$transmission','$gears','$ac','$steering','$window','$brake','$airbag','$alloy','$p1','$p2','$p3')";
		
		
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
   <section id="content"><div class="ic"></div>
      <div class="block-1 box-1">
      	<form name="addmodel" method="post" action="" enctype="multipart/form-data">           
            <table id="tbOverview">
                <tbody>
                <tr>
                 <td>Company </td>
                    <td><select name="cmpny" id="cmpny">
    
    <option>Select a company </option>
  	
<?php 

	while($t=mysql_fetch_array($r))
	{
		echo "<option>$t[0]</option>";
	}
?>
    
  </select> </td>
                </tr>
                
                <td width="274">Model Name</td>
                    <td width="314"><input type="text" name="model" id=""/> </td>
                </tr>
                <td>Price</td>
                    <td><input type="text" name="price" id=""/> </td>
                </tr>
                <tr>
                 <td>Type</td>
                    <td><input type="text" name="type" id=""/> </td>
                </tr>
                <tr>   
                    <td>Length</td>
                    <td><input type="text" name="length" id=""/> mm</td>
                </tr>
                <tr>
                    <td>Width</td>
                    <td><input type="text" name="width" id=""/> mm</td>
                </tr>
                <tr>
                    <td>Height</td>
                    <td><input type="text" name="height" id=""/> mm</td>
                </tr>
                <tr>
                    <td>Seating Capacity</td>
                    <td><input type="text" name="seat" id=""/> Person</td>
                </tr>
                <tr>
                    <td>Displacement</td>
                    <td><input type="text" name="displacement" id=""/> cc</td>
                </tr>
                <tr>
                    <td>Fuel Type</td>
                    <td><input type="text" name="fuel" id=""/></td>
                </tr>
                <tr>
                    <td>Max Power</td>
                    <td><input type="text" name="power" id=""/> bhp</td>
                </tr>
                <tr>
                    <td>Max Power @ RPM</td>
                    <td><input type="text" name="powerrpm" id=""/> RPM</td>
                </tr>
                <tr>
                    <td>Max Torque</td>
                    <td><input type="text" name="torque" id=""/> Nm</td>
                </tr>
                <tr>
                    <td>Max Torque @ RPM</td>
                    <td><input type="text" name="torquerpm" id=""/> RPM</td>
                </tr>
                <tr>
                    <td>Mileage (ARAI)</td>
                    <td><input type="text" name="mileage" id=""/> kmpl</td>
                </tr>
                <tr>
                    <td>Transmission Type</td>
                    <td><input type="text" name="transmission" id=""/></td>
                </tr>
                <tr>
                    <td>No of gears</td>
                    <td><input type="text" name="gears" id=""/> Gears</td>
                </tr>
                <tr>
                   
                    <td>Air Conditioner</td>
                    <td><input type="text" name="ac" id=""/></td>
                </tr>
                <tr>
                    <td>Power Steering</td>
                    <td><input type="text" name="steering" id=""/></td>
                </tr>
                <tr>
                    <td>Power Windows</td>
                    <td><input type="text" name="window" id=""/></td>
                </tr>
                <tr>
                    <td>Braking System</td>
                    <td><input type="text" name="brake" id=""/></td>
                </tr>
                <tr>
                    <td>Airbags</td>
                    <td><input type="text" name="airbag" id=""/></td>
                </tr>
                <tr>
                    <td>Alloy Wheels</td>
                    <td><input type="text" name="alloy" id=""/>
                    </td>
                </tr>
                <tr>
                    <td>About</td>
                    <td><textarea name="about" cols="20" rows="2"></textarea>
                    </td>
                </tr>
                <tr>
                    <td>Add Picture 1 :</td>
                    <td><input name="Picture1" type="file" />
                    </td>
                </tr>
                <tr>
                    <td>Add Picture 2 :</td>
                    <td><input name="Picture2" type="file" />
                    </td>
                </tr>
                <tr>
                    <td>Add Picture 3 :</td>
                    <td><input name="Picture3" type="file" />
                    </td>
                </tr>
                <tr>
                    <td>Add Picture 4 :</td>
                    <td><input name="Picture4" type="file" />
                    </td>
                </tr>
                
                <tr><td></td>
                <td>
                <input name="add" value="Register Car" type="submit" class="red-btn" />
                
                </td></tr>
            </tbody></table>
      
		</div>
	</div><br/><br/><br/>
</form>
	
      </div>
   </section> 
  <!--==============================footer=================================-->
<?php
	include_once "footer.php";
?>
