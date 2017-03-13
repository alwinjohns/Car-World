<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>:: SBI ONLINE ::</title>
<link href="css/sbi_log.css" rel="stylesheet" type="text/css"/>
</head>
<script type="text/javascript">
	function Validate() 
	{	//user name
		
		var illegalChars= /[\(\)\<\>\,\;\:\\\"\[\]]/ ;
		if(document.Register.user.value=="") 
		{				
			document.getElementById("user").innerHTML="Enter user name";
			return(false);
		}
		
		else if(document.Register.user.value.match(illegalChars)) 
		{
		 	document.getElementById("user").innerHTML= "User name contains illegal characters";
			return(false);
		}
		else
		{
			document.getElementById("user").innerHTML="";
		}
			
		
		//pass
		if(document.Register.password.value=="") 
		{				
			document.getElementById("password").innerHTML="Enter password";
			return(false);
		}
		else
		{
			document.getElementById("password").innerHTML="";
		}
		return(true);
	}
</script>
<body>
<form name="Register" enctype="multipart/form-data" method="post" action="" onsubmit="return Validate();">

<img src="images/sbi.jpg"/>
<div class="pos"><input name="user" type="text" /><font color="#FF0000">&nbsp;<label id="user"></label></font></div>

<div class="pass_pos"><input name="password" type="password" /><font color="#FF0000">&nbsp;<label id="password"></label></font></div>

<div class="login_pos"><input name="login" type="submit" value="Login" /></div>
<div class="reset_pos"><input name="reset" type="reset" value="Reset"/></div>

</form>
</body>
</html>
<?php
 	session_start();
	
	function dbcon($sql)
	{
		$db_handle=mysql_connect("localhost","root","");
		mysql_select_db("car",$db_handle);
		$result=mysql_query($sql,$db_handle);
		mysql_close($db_handle);
		return $result;
	}
	if(isset($_POST['login']))
	{
		$user=$_POST['user'];
		$pass=$_POST['password'];
		$q="select * from SBI where Username='$user' and Password='$pass'";
		$result=dbcon($q);
		if($row=mysql_fetch_array($result))
		{
			$_SESSION['SBI_user']=$row['Name'];
			$_SESSION['balance']=$row[3];
						
			header("location: SBI_transaction.php");
		}
		else
		{
	echo "<script>alert('Sorry incorrect user name or password...')</script>";
		}
		
}
?>