<?php 
	session_start();
	$id=$_SESSION['admin'];
	if($id==null)
	{
		header("location:adminlogin.php");
	}
echo '   <header>
       <div class="main wrap">
       		<h1><a href="index.html"><img src="images/logo.png" alt=""></a></h1> 
            <p>Ettumanoor, Kottayam <span>0481 2536575</span></p>
       </div>
		   <nav>  
			  <ul class="menu">
				  <li class="current"><a href="adminhome.php">'.$id.'</a></li>
				  <li><a href="addcompany.php">Add company</a></li>
				  <li><a href="addmodel.php">Add Model</a></li>
				  <li><a href="updatemodel.php">Update Model</a></li>
				  <li><a href="addnews.php">Add News</a></li>
				  <li><a href="adminpricelist.php">Price List</a></li>
				  <li><a href="adminlogout.php">Log Out</a></li>
			  </ul>
			  <div class="clear"></div>
			</nav>
	   </header>';
?>
