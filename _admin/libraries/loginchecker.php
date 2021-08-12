<?php
include 'config.php';
if (!loggedin())
{
header("Location: index.php");
exit();
}
 $username = $_SESSION['username'];
				  
				 $get_user_id = mysqli_query($login_db,"SELECT * FROM imt_user WHERE username='$username'") or die("Error with querry");
				if ($row = mysqli_fetch_row($get_user_id))
				{
				$admin = $row[9];
											
				if ($admin!=1)
				{
				header("Location: index.php");
				exit();
				}
				}										
?>