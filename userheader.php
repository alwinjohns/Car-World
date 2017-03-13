<?php 
	session_start();
	$id=$_SESSION['user'];
	if($id==null)
	{
		header("location:userlogin.php");
	}
echo '   <header>
       <div class="main wrap">
       		<h1><a href="index.html"><img src="images/logo.png" alt=""></a></h1> 
            <p>Ettumanoor, Kottayam <span>0481 2536575</span></p>
       </div>
		   <nav>  
			  <ul class="menu">
				  <li class="current"><a href="userhome.php">'.$id.'</a></li>
				  <li><a href="usernews.php">New Launches</a></li>
				  <li><a href="userpricelist.php">Price List</a></li>
				  <li><a href="usersearch.php">Search</a></li>
                  <li><a href="usercontactus.php">Complaints</a></li>
				  <li><a href="userlocations.php">Locations</a></li>
				  <li><a href="userlogout.php">Log Out</a></li>
			  </ul>
			  <div class="clear"></div>
			</nav>
	   </header>';
?>
