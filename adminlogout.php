<?php
	session_start();
	$_SESSION['admin']=null;
	header("location:adminlogin.php");
?>