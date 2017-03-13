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
	
if(isset($_SESSION['SBI_user']))	
{	
	$name=$_SESSION['SBI_user'];
	$balance=$_SESSION['balance'];
	if(!isset($_SESSION['bill']))
	{ echo '<a href="research.php"><br/><br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;Choose a CAR to buy >Click here.....</a>';} else{
	$bill=$_SESSION['bill'];
?>
<!DOCTYPE html>
<html lang="en"> 
<head>
  
  <title>:: SBI ONLINE Transaction ::</title>
  <link rel="stylesheet" href="css/transaction_style.css">
   </head>
<body>
  <section class="container">
    <div class="login">

      <h1>Welcome STATE BANK OF INDIA Customer</h1>
           <p>&nbsp;</p>          
<?php
	
	if($_SESSION['balance']>=$_SESSION['bill'])	
	{    
		$customer_balance=$balance-$bill;
		
		$q1="update sbi set Balance='$customer_balance' where Name='$name' and Balance='$balance'";
		$result1=dbcon($q1);
		
		$q2="select * from SBI where Username='carworld'";
		$result2=dbcon($q2);
		$r=mysql_fetch_array($result2);
		
		$carworld_balance=$r[3]+$bill;
		$q3="update sbi set Balance='$carworld_balance' where Username='carworld'";
		$result3=dbcon($q3);	
		
?>
<h1>Transaction Successful!!!</h1><br/>
Customer Name  : <?php echo "$name"; ?>   <br/><br/>
Rs: <?php echo "$bill"; ?>  has been deducted from your account<br/><br/>
Date : <?php echo idate("d")."/".idate("m")."/".idate("Y"); ?> <br/>
Current Balance :  <?php echo "$customer_balance"; ?><br/>
        
        <p class="remember_me">
        <br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          Thank you for using SBI Internet Banking.
        </p>
        
        
    </div>
  </section>
 </body>
</html> 
<?php
}

else
{
?>
	<h1>Transaction Failed!!!</h1><br/>
Customer Name  :  <?php echo "$name"; ?>  <br/><br/>
Your account has insufficient balance for this transaction.<br/><br/>
Date :  <br/>
Time :   <br/><br/>
Current Balance : <?php echo "$balance"; ?> <br/>
        
        <p class="remember_me">
        <br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          Thank you for using SBI Internet Banking.
        </p>
        
        
    </div>
  </section>
 </body>
</html> 
<?php

	}
}}


else
{
	header("location: sbilogin.php");
}
session_unset($_SESSION['SBI_user']);
?>