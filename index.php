<?php

include "libraries/web_header.php";


//option functions
if(isset($_GET['view'])){
	$view = $_GET['view'];
	if ($view)
	{
	$path = "include/".$view.".php";
	
	if(file_exists($path))
	{
	include($path);
	}
	else
	{
	echo "<div class='ErrorNotFount'>Oops! Web page is not found.</div>";
	}
	
    }
	}
	else
	{
	include "include/home.php";
	}
include "libraries/web_footer.php";
?>
