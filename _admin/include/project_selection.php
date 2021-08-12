<?php
include '../libraries/config.php';		
require "libraries/loginchecker.php";
										
?><!-- 
ADMIN DESIGNED AND DEVELOPED BY SWISMAX SOLUTIONS
info@swismax.com | webexpert786@hotmail.co.uk
www.swismax.com
03125190928, 03215001033
-->


<div class="HomeHeading">
<div class="container-fluid">
  <div class="row">
  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
   <h1><a href="index.php?view=home"><img src="images/back_icon.png" border="0"></a> | Select Project for Edit</h1>
  </div>
  </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <a href="index.php?view=add_project"><img src="images/icon_add_project.png"/></a>
        </div>
    </div>
</div></div>



<div class="wrapper">


<?php
echo "<div id='menubar'>
<ul>";
//display data
$get_content = mysqli_query($login_db,"SELECT * FROM sm_projects") or die("Error with querry");
				while ($row = mysqli_fetch_assoc($get_content))
{
 //get data
	$pr_id = $row['pr_id'];
	$pr_name = $row['pr_name'];
 
 
 echo "
<li><a href='index.php?view=project_details&content=$pr_id'><img src='images/folder.png' /><br />$pr_name</a></li>
";
}
echo "</ul><div> ";
	
	
mysqli_close($login_db);	

?>
   
   </div>
  
<div class="SpacingBox"></div>	
<div class="SpacingBox"></div>	
<div class="SpacingBox"></div>	
<div class="SpacingBox"></div>	


