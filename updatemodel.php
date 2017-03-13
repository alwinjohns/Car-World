<?php
include_once "dbcon.php";
if(isset($_GET['cmpny']))  
	{
		 $t1=$_GET['cmpny'];
		 $t2=$_GET['model'];
		 header("Location: updatemodel2.php?company=$t1&model=$t2");	
	}
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

	
</head>
<body>
<div class="bg">
			<?php
                include_once "adminheader.php";
            ?>
   <!--==============================content================================-->
   <section id="content"><div class="ic"></div>
      <div class="block-1 box-1">
        <h1>Update Details &nbsp;&nbsp;</h1><br/><br/>
  <?php
       
echo '<fieldset>
<form id="research" name="research" method="get" action="">
  <label for="comp"></label>
  <p><br/>&nbsp;Select a company<select name="cmpny" id="cmpny" onChange="showUser(this.value)">
		<br/>
		<option>Select a company </option>';
		while($row=mysql_fetch_array($r))
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
    </p>
    </div> 
          <p class="submit"><input type="submit" name="search" value="GO"></p>
          </for><p>
          </form> 
    </p>
    <br>
          <div class="last">
            <img src="images/1.jpg" alt="" height="300" width="500">
      </div>

</fieldset>
      <br/><br/><br/><br/>
        </div>
      </div>
   </section> 
  <!--==============================footer=================================-->
<?php
	include_once "footer.php";
?>
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