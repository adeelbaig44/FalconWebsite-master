<?php

//session start

	session_start();

 include "../libraries/config.php";
	
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