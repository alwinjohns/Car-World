<!DOCTYPE html>
<html lang="en">
<head>
    <title>About</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" media="screen" href="css/reset.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700,300' rel='stylesheet' type='text/css'>
    <script src="js/jquery-1.7.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>

<script type="text/javascript">
	function Validate() 
	{
		if(document.Register.Name.value=="") 
		{				
			document.getElementById("lbName").innerHTML="Enter name";
			return(false);
		}
		else
		{
			document.getElementById("lbName").innerHTML="";
		}
		
		if(document.Register.Address.value=="") 
		{				
			document.getElementById("lbAddress").innerHTML="Enter address";
			return(false);
		}
		else
		{
			document.getElementById("lbAddress").innerHTML="";
		}
		
		//Date of birth
		if(document.Register.Day.value=="Day" || document.Register.Month.value=="Month" || document.Register.Year.value=="Year") 
		{				
			document.getElementById("lbDob").innerHTML="Enter Date of birth";
			return(false);
		}
		else
		{
			document.getElementById("lbDob").innerHTML="";
		}

		//Phone Number
		if((document.Register.Land.value=="") || (document.Register.Mobile.value==""))
		{				
			document.getElementById("lbContact").innerHTML="Enter valid phone numbers";
			return(false);
		}
		else
		{
			document.getElementById("lbContact").innerHTML="";
		}
		
		var stripped1 = document.Register.Land.value.replace(/[\(\)\.\-\ ]/g, '');    
		var stripped2 = document.Register.Mobile.value.replace(/[\(\)\.\-\ ]/g, '');   
		if (isNaN(parseInt(stripped1))) 
		{
			document.getElementById("lbContact").innerHTML = "The phone number contains illegal characters";
			return(false);
		}
		else
		{
			document.getElementById("lbContact").innerHTML="";
		}
		
		if(document.Register.Mobile.value=="") 
		{				
			document.getElementById("lbContact").innerHTML="Invalid mobile number";
			return(false);
		}
		else
		{
			document.getElementById("lbContact").innerHTML="";
		}
		
		if (isNaN(parseInt(stripped2))) 
		{
			document.getElementById("lbContact").innerHTML = "The phone number contains illegal characters";
			return(false);
		}
		else
		{
			document.getElementById("lbContact").innerHTML="";
		}
		
		if(stripped1.length < 10)
		{
			document.getElementById("lbContact").innerHTML ="The land number has wrong length.";
			return(false);
		}
		else
		{
			document.getElementById("lbContact").innerHTML="";
		}
		if (!(stripped2.length == 10)) 
		{
		   document.getElementById("lbContact").innerHTML ="The mobile number has wrong length.";
			return(false);
		}
		else
		{
			document.getElementById("lbContact").innerHTML="";
		}
	   
	   	//Email
		var emailFilter = /^[^@]+@[^@.]+\.[^@]*\w\w$/ ;
		var illegalChars= /[\(\)\<\>\,\;\:\\\"\[\]]/ ;

		if(document.Register.Mail.value=="")
		{				
			document.getElementById("lbMail").innerHTML="Enter mail id";
			return(false);
		}		
		else if (!emailFilter.test(document.Register.Mail.value))
		{             
			document.getElementById("lbMail").innerHTML= "Enter a valid email address";
			return(false);
		}
		else if(document.Register.Mail.value.match(illegalChars)) 
		{
		 	document.getElementById("lbMail").innerHTML= "Email address contains illegal characters";
			return(false);
		}
		else
		{
			document.getElementById("lbMail").innerHTML="";
		}
				
		//Password
		if(document.Register.Password.value=="") 
		{				
			document.getElementById("lbPassword").innerHTML="Enter password";
			return(false);
		}
		else if((document.Register.Password.value.length < 7) || (document.Register.Password.value.length > 15))
		{
			document.getElementById("lbPassword").innerHTML= "Password length is between 7 & 15";
			return(false);
		}
		else if(illegalChars.test(document.Register.Password.value))
		{
			document.getElementById("lbPassword").innerHTML= "The password contains illegal characters";
			return(false);
		}
		else
		{
			document.getElementById("lbPassword").innerHTML="";
		}
	
		if(document.Register.RePassword.value=="")
		{				
			document.getElementById("lbRePassword").innerHTML= "Re enter password";
			return(false);
		}
		else
		{
			document.getElementById("lbRePassword").innerHTML="";
		}
		
		if(document.Register.Password.value!=document.Register.RePassword.value)
		{				
			document.getElementById("lbRePassword").innerHTML="Password confirmation failed";
			return(false);
		}
		else
		{
			document.getElementById("lbRePassword").innerHTML="";
		}

	return(true);
	}
</script>
<!--#######################################################################################################################-->
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
		include_once "header.php";
	?>
   <!--==============================content================================-->
   <section id="content"><div class="ic"></div>
      <div class="block-1 box-1">
        	<h2 class="p2">User Registration</h2>
            	<form name="Register" enctype="multipart/form-data" method="post" action="" onsubmit="return Validate();">
  				<div style="font-family:verdana;padding:10px;border-radius:10px;border:10px solid #EE872A;width:700px">
            	<center>
                <table width="700" border="0">
                  <tr>
                    <td>&nbsp;NAME</td>
                    <td>&nbsp;<input name="Name" type="text" size="30" placeholder="name"/><font color="#FF0000">&nbsp;<label id="lbName"></label></font></td>
                  </tr>
                  <tr>
                    <td>&nbsp;ADDRESS</td>
                    <td>&nbsp;<textarea name="Address" cols="30" rows="5" placeholder="enter your address"></textarea >&nbsp;<font color="#FF0000"><label id="lbAddress"></label></font></td>
                  </tr>
                  <tr>
                    <td>&nbsp;DATE OF BIRTH</td>
                    <td>&nbsp;<?php
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
                                    for($i=1980;$i<=2050;$i++)
                                    {
                                        echo '<option>'.$i.'</option>';
                                    }
                                    echo '</select>';
                                    echo '</form>';
                            ?>
                          	&nbsp;<font color="#FF0000"><label id="lbDob"></label></font>
                  </td>
                  </tr>
                  <tr>
                    <td>&nbsp;CONTACT NUMBER  (+91)</td>
                    <td>&nbsp;<input name="Land" type="text" size="30" maxlength="11" placeholder="Land Line"/><br />&nbsp;<input name="Mobile" type="text" size="30" maxlength="10" placeholder="Mobile" /><font color="#FF0000">&nbsp;<label id="lbContact"></label></font></td>
                  </tr>
                  <tr>
                    <td>&nbsp;E-MAIL ID</td>
                    <td>&nbsp;<input name="Mail" type="text" size="30" placeholder="username"/><font color="#FF0000">&nbsp;<label id="lbMail"></label></font></td>
                  </tr>
                  <tr>
                    <td>&nbsp;PASSWORD</td>
                    <td>&nbsp;<input name="Password" type="password" size="30" maxlength="10" placeholder="password"/>&nbsp;<font color="#FF0000"><label id="lbPassword"></label></font></td>
                  </tr>
                  <tr>
                    <td>&nbsp;RE-ENTER PASSWORD</td>
                    <td>&nbsp;<input name="RePassword" type="password" size="30" maxlength="10" placeholder="confirm"/>&nbsp;<font color="#FF0000"><label id="lbRePassword"></label></font></td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;<input name="Register" type="submit" class="row1" id="Register" value="Register" />
                    
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="clear" type="reset" value=" Clear " /></td>
                    </tr>
               </table> 
              </center>              
         </div>      
               <?php
					function dbcon($sql)
					{
						$db_handle=mysql_connect("localhost","root","");
						mysql_select_db("car",$db_handle);
		
						$result=mysql_query($sql,$db_handle);
	
						mysql_close($db_handle);
						return $result;
					}
					if(isset($_POST['Register']))
					{		
						$name=trim($_POST['Name']);
						$adrs=trim($_POST['Address']);
						
						$d=trim($_POST['Day']);
						$m=trim($_POST['Month']);
						$y=trim($_POST['Year']);
						
						$dob=$d.'/'.$m.'/'.$y;
						$land=trim($_POST['Land']);
						$mob=trim($_POST['Mobile']);
						$mail=trim($_POST['Mail']);
						$pass=trim($_POST['Password']);
						$repass=trim($_POST['RePassword']);
														
						$q="insert into users(Name,Address,Dob,Land,Mobile,Mail,Password)values('$name','$adrs','$dob','$land','$mob','$mail','$pass')";
						
						$res=dbcon($q);
						header("location: userlogin.php");
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
