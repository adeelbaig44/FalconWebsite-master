<?php

//session start

	session_start();

	
require "config.php";
	
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