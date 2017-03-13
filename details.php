<?php
  	include_once "dbcon.php";
?>
<script type="text/javascript">
function disp() 
{
  document.getElementById("help").innerHTML="Price is calculated as taking 12.5% VAT";              
}
function remove() 
{
   document.getElementById("help").innerHTML="";              
}
</script>


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
      <?php
	  if($_GET['model']=="-- model --")
	  {
		header("location: home.php");  
	  }
		else if(isset($_GET['company'])&&isset($_GET['model']))
		{
		$cmpny=$_GET['company'];
		$model=$_GET['model'];
		$q="select * from spec where Company='$cmpny' and Model='$model'";
		$result=dbcon($q);
		if($row=mysql_fetch_array($result))
		{	
			$_SESSION['bill']=$row[4];
	?>
    <table width="700" border="0">
					<tr>
						<td width="263" rowspan="2"><img src="images/pic/<?php echo "$row[3]";?>" alt="Image 1" title="<?php echo "$row[2]";?>" height="160" width="230"/></td>
						<td width="427">
<span class="note"><br/>Price : </span> <b>Rs.<?php echo "$row[4]";?></b><br/><br/><br/>Onroad Price &nbsp;&nbsp;<img src="images/help.gif" onmousemove="disp();" onmouseout="remove();"/> 
<font color="#FF0000">&nbsp;
<label id="help"></label></font>
							<br/><br/><h3>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs : 
<?php $t=$row[4]*1.25;echo "$t";?></h3><br/>

	<a href="userlogin.php" >To Buy Now..Please Login</a>
</td>
                			</tr>
				  </table><br>
			<div class="mid-box detailsBox">
            <table id="tbOverview" width="700">
                <tbody>			
                <tr>
                	 <td>Type</td>
                    <td><?php echo "$row[6]"?> </td>
                </tr>
                <tr>   
                    <td>Length</td>
                    <td><?php echo "$row[7]"?> mm</td>
                </tr>
                <tr>
                    <td>Width</td>
                    <td><?php echo "$row[8]"?> mm</td>
                </tr>
                <tr>
                    <td>Height</td>
                    <td><?php echo "$row[9]"?> mm</td>
                </tr>
                <tr>
                    <td>Seating Capacity</td>
                    <td><?php echo "$row[10]"?> Person</td>
                </tr>
                <tr>
                    <td>Displacement</td>
                    <td><?php echo "$row[11]"?> cc</td>
                </tr>
                <tr>
                    <td>Fuel Type</td>
                    <td><?php echo "$row[12]"?></td>
                </tr>
                <tr>
                    <td>Max Power</td>
                    <td><?php echo "$row[13]"?> bhp</td>
                </tr>
                <tr>
                    <td>Max Power @ RPM</td>
                    <td><?php echo "$row[14]"?> RPM</td>
                </tr>
                <tr>
                    <td>Max Torque</td>
                    <td><?php echo "$row[15]"?> Nm</td>
                </tr>
                <tr>
                    <td>Max Torque @ RPM</td>
                    <td><?php echo "$row[16]"?> RPM</td>
                </tr>
                <tr>
                    <td>Mileage (ARAI)</td>
                    <td><?php echo "$row[17]"?> kmpl</td>
                </tr>
                <tr>
                    <td>Transmission Type</td>
                    <td><?php echo "$row[18]"?></td>
                </tr>
                <tr>
                    <td>No of gears</td>
                    <td><?php echo "$row[19]"?> Gears</td>
                </tr>
                <tr>
                   
                    <td>Air Conditioner</td>
                    <td><?php echo "$row[20]"?></td>
                </tr>
                <tr>
                    <td>Power Steering</td>
                    <td><?php echo "$row[21]"?></td>
                </tr>
                <tr>
                    <td>Power Windows</td>
                    <td><?php echo "$row[22]"?></td>
                </tr>
                <tr>
                    <td>Braking System</td>
                    <td><?php echo "$row[23]"?></td>
                </tr>
                <tr>
                    <td>Airbags</td>
                    <td><?php echo "$row[24]"?></td>
                </tr>
                <tr>
                    <td>Alloy Wheels</td>
                    <td><?php echo "$row[25]"?></td>
                </tr>
 </tbody></table>
<!-- pic-->

<script type="text/javascript">
	var lastsel = 0;
	function SelectImage(id) 
	{
	if (lastsel > 0) 
	{
		document.getElementById(lastsel).className = "normal";
	}
	document.getElementById(id).className = "sel";
	var srcnam = document.getElementById(id).src;
	document.getElementById(0).src = srcnam;
	lastsel = id;
	}
	function LoadTrigger()
	{
		SelectImage(1);
	}
	window.onload = LoadTrigger;
</script>
<div align=center>
	<b>Move the mouse over image to view its full size.</b>
</div>

<table border=0 align=center>
	<tr><td valign=top>
    
<img id=1 class="normal" src="images/pic/<?php echo "$row[26]";?>"  height="80" width=120 onmousemove="SelectImage(1)"><br/>   
 <img id=2 class="normal" src="images/pic/<?php echo "$row[27]";?>" width=120 onmousemove="SelectImage(2)"><br/>
	<img id=3 class="normal" src="images/pic/<?php echo "$row[28]";?>" width=120 onmousemove="SelectImage(3)">
	</td>
    
	<td width=15> </td>
	<td valign=top>
	<img id=0 src="" width=480 height=310>
	</td></tr>
</table>
</form>
<?php
	}
}
else
{
	header("location: home.php");	
}
?>
      </div>
   </section> 
  <!--==============================footer=================================-->
<?php
	include_once "footer.php";
?>
