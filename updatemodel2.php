<?php
include_once "dbcon.php";
	$cmpny=$_GET['company'];
	$model=$_GET['model'];
	if(isset($_POST['add']))
	{	
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
		
			
				
	$sql="UPDATE `spec` SET `Company`='$cmpny',`Logo`='$logo',`Model`='$model',`Picture`='$pictr',`Price`='$price',`About`='$about',`Type`='$type',`Length`='$length',`Width`='$width',`Height`='$height',`Seatingcap`='$seat',`Displacement`='$disp',`Fuel`='$fuel',`Power`='$',`PowerRPM`=[value-15],`Torque`=[value-16],`TorqueRPM`=[value-17],`Mileage`=[value-18],`Transmission`=[value-19],`Gears`=[value-20],`Ac`=[value-21],`Steering`=[value-22],`Window`=[value-23],`Brake`=[value-24],`Airbag`=[value-25],`Alloy`=[value-26],`p1`=[value-27],`p2`=[value-28],`p3`=[value-29] WHERE 1";
		
		
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

</head>
<body>
<div class="bg">
			<?php
                include_once "adminheader.php";
            ?>
   <!--==============================content================================-->
   <section id="content"><div class="ic"></div>
      <div class="block-1 box-1">
      <?php
		$q="select * from spec where Company='$cmpny' and Model='&model'";
		$rs=dbcon($q);	
		while($row=mysql_fetch_array($rs))
		{
		echo '
      	<form name="addmodel" method="post" action="" enctype="multipart/form-data">           
            <table id="tbOverview">
                <tbody>
                
                <tr>
                <td width="262">Price</td>
                    <td width="248"><input type="text" name="price" value="'.$row[4].'" id=""/> </td>
                </tr>
                <tr>
                 <td>Type</td>
                    <td><input type="text" name="type" value="'.$row[6].'" id=""/> </td>
                </tr>
                <tr>   
                    <td>Length</td>
                    <td><input type="text" name="length" value="'.$row[7].'"  id=""/> mm</td>
                </tr>
                <tr>
                    <td>Width</td>
                    <td><input type="text" name="width" value="'.$row[8].'"  id=""/> mm</td>
                </tr>
                <tr>
                    <td>Height</td>
                    <td><input type="text" name="height" value="'.$row[9].'" id=""/> mm</td>
                </tr>
                <tr>
                    <td>Seating Capacity</td>
                    <td><input type="text" name="seat" name="seat" value="'.$row[10].'"  id=""/> Person</td>
                </tr>
                <tr>
                    <td>Displacement</td>
                    <td><input type="text" name="displacement" id="" value="'.$row[11].'"/> cc</td>
                </tr>
                <tr>
                    <td>Fuel Type</td>
                    <td><input type="text" name="fuel" id="" value="'.$row[12].'"/></td>
                </tr>
                <tr>
                    <td>Max Power</td>
                    <td><input type="text" name="power" id="" value="'.$row[13].'"/> bhp</td>
                </tr>
                <tr>
                    <td>Max Power @ RPM</td>
                    <td><input type="text" name="powerrpm" id="" value="'.$row[14].'" value="'.$row[15].'"/> RPM</td>
                </tr>
                <tr>
                    <td>Max Torque</td>
                    <td><input type="text" name="torque" id="" value="'.$row[16].'"/> Nm</td>
                </tr>
                <tr>
                    <td>Max Torque @ RPM</td>
                    <td><input type="text" name="torquerpm" id="" value="'.$row[17].'"/> RPM</td>
                </tr>
                <tr>
                    <td>Mileage (ARAI)</td>
                    <td><input type="text" name="mileage" id="" value="'.$row[18].'"/> kmpl</td>
                </tr>
                <tr>
                    <td>Transmission Type</td>
                    <td><input type="text" name="transmission" id="" value="'.$row[19].'"/></td>
                </tr>
                <tr>
                    <td>No of gears</td>
                    <td><input type="text" name="gears" id="" value="'.$row[20].'"/> Gears</td>
                </tr>
                <tr>
                   
                    <td>Air Conditioner</td>
                    <td><input type="text" name="ac" id="" value="'.$row[21].'"/></td>
                </tr>
                <tr>
                    <td>Power Steering</td>
                    <td><input type="text" name="steering" id="" value="'.$row[22].'"/></td>
                </tr>
                <tr>
                    <td>Power Windows</td>
                    <td><input type="text" name="window" id="" value="'.$row[23].'"/></td>
                </tr>
                <tr>
                    <td>Braking System</td>
                    <td><input type="text" name="brake" id="" value="'.$row[24].'"/></td>
                </tr>
                <tr>
                    <td>Airbags</td>
                    <td><input type="text" name="airbag" id="" value="'.$row[25].'"/></td>
                </tr>
                <tr>
                    <td>Alloy Wheels</td>
                    <td><input type="text" name="alloy" id="" value="'.$row[26].'"/>
                    </td>
                </tr>
                <tr>
                    <td>About</td>
                    <td><textarea name="about" cols="20" rows="2">'.$row[27].'"</textarea>
                    </td>
                </tr>
                <tr>
                    <td>Add Picture 1 :</td>
                    <td><input name="Picture1" type="file" value="'.$row[28].'"/>
                    </td>
                </tr>
                <tr>
                    <td>Add Picture 2 :</td>
                    <td><input name="Picture2" type="file" value="'.$row[29].'" />
                    </td>
                </tr>
                <tr>
                    <td>Add Picture 3 :</td>
                    <td><input name="Picture3" type="file" value="'.$row[30].'"/>
                    </td>
                </tr>
                <tr>
                    <td>Add Picture 4 :</td>
                    <td><input name="Picture4" type="file" value="'.$row[31].'"/>
                    </td>
                </tr>
                
                <tr><td></td>
                <td>
                <input name="add" value="Register Car" type="submit" class="red-btn" />
                
                </td></tr>
            </tbody></table>
		</form>';
		}
	?>
      </div>
   </section> 
  <!--==============================footer=================================-->
<?php
	include_once "footer.php";
?>
