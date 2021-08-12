<?php

//session start

	session_start();

	//conect database
	mysql_connect("localhost","root","") or die();
	mysql_select_db("software_windraw") or die();

	
	//login check function
	function loggedin()
	{
	if (isset($_SESSION['username'])||isset($_COOKIE['username']))
	{
		$loggedin = TRUE;
		return $loggedin;
	}
	
	}
?>