<?php
include "libraries/header.php";
//require "libraries/loginchecker.php";


//option functions
if(isset($_GET['view'])){
	$view = $_GET['view'];
	if ($view != null)
	{
	$path = "include/".$view.".php";
	
	if(file_exists($path))
	{
	include($path);
	}
	else
	{
	echo "<table width='1000' height='50%' border='0'>
  <tr>
    <td align='center' valign='middle'>Oops! Web page is not found.</td>
  </tr>
</table>";
	}
    }
    else{
        include 'include/login.php';
    }
}
	else
	{
	include "include/login.php";
	}


include "libraries/footer.php";
?>
