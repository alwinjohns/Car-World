<?php
	function dbcon($sql)
	{
		$db_handle=mysql_connect("localhost","root","");
		mysql_select_db("car",$db_handle);
		$result=mysql_query($sql,$db_handle);
		mysql_close($db_handle);
		return $result;
	}
?>
