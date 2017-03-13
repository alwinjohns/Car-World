<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" media="screen" href="css/reset.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/slidersmall.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700,300' rel='stylesheet' type='text/css'>
    <script src="js/jquery-1.7.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/tms-0.4.1.js"></script>
    
    <script type="text/javascript">
		function Validate() 
		{	//email
			var emailFilter = /^[^@]+@[^@.]+\.[^@]*\w\w$/ ;
			var illegalChars= /[\(\)\<\>\,\;\:\\\"\[\]]/ ;
			if(document.Register.user.value=="") 
			{				
				document.getElementById("user").innerHTML="Enter e-mail id";
				return(false);
			}
			else if (!emailFilter.test(document.Register.user.value))
			{             
				document.getElementById("user").innerHTML= "Enter a valid email address";
				return(false);
			}
			else if(document.Register.user.value.match(illegalChars)) 
			{
				document.getElementById("user").innerHTML= "Email address contains illegal characters";
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
</head>
<body>
<div class="bg">
			<?php
                include_once "header.php";
            ?>
   <!--==============================content================================-->
   <section id="content"><div class="ic"></div>
      <div class="block-1 box-1">
        <div>
			<br><br><br>
			<?php
			  		$sql="select * from slideshow"; 
					$rs=dbcon($sql);
                    echo '<marquee direction="up" loop="-1" 	scrollamount="2" height="150" behavior="alternate" onmouseover="this.stop()"; onmouseout="this.start()"; height="600" width="400">';
					while($row=mysql_fetch_array($rs))
					{
					  echo '<img src="images/Slideshow/'.$row['Picture'].'" alt="" height="300" width="400"/>';
					}
                   echo '</marquee>';
			?>
        </div>
        <div>
            <img src="images/user.jpg" alt="" height="100" width="100">
        </div>
        <div class="last">
    		<form name="Register" enctype="multipart/form-data" method="post" action="" onsubmit="return Validate();">
                <table width="400" height="300" border="1">
                      <tr>
                        <th scope="col" colspan="2" align="center"><center><font>&nbsp;User Login</font></center></th>
                      </tr>
                      <tr>
                        <td colspan="2">&nbsp;
                        	<input type="text" name="user" value="" placeholder="E-mail">
                            <font color="#FF0000">&nbsp;<label id="user"></label></font>
                        </td>
                      </tr>
                      <tr>
                        <td>&nbsp;       
                            <input type="password" name="password" value="" placeholder="Password">
                            <font color="#FF0000">&nbsp;<label id="password"></label></font>
						</td>
                      </tr>
                      <tr>
                        <td colspan="2">&nbsp;
                        	            <p class="remember_me">
                                          <label>
                                            <input type="checkbox" name="remember_me" id="remember_me">
                                            Remember me on this computer
                                          </label>
                                        </p>
                        </td>
                      </tr>
                      <tr>
                      	<td colspan="2"><p class="submit"><input type="submit" name="login" value="Login"></p></td>
                      </tr>
                   </table> 
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
                        $q="select * from users where Mail='$user' and Password='$pass'";
                        $result=dbcon($q);
                        if($row=mysql_fetch_array($result))
                        {
                            $_SESSION['user']=$row['Name'];
							header("location:userhome.php");
                        }
                        else
                        {
                    		echo '<font color="#FF0000" size="+6">Sorry invalid user name or password</font>';
                        }
                }
                ?>
             </form>
        </div>
      </div>
   </section> 
  <!--==============================footer=================================-->
<?php
	include_once "footer.php";
?>
