<?php
$q=$_GET["q"];
$con = mysql_connect('localhost', 'root', '');
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("car", $con);
$sql="SELECT * FROM spec WHERE Company ='$q'";
$result = mysql_query($sql);

echo '<p><br/>&nbsp;Select a model&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;      	
  	<select name="model" id="model">
       	<option  hidden=""> -- model --</option>';
while($row = mysql_fetch_array($result))
{
  echo '<option>'.$row[2].'</option>';
}


mysql_close($con);
?> 