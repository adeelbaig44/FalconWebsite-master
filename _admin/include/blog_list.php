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
        <a href="index.php?view=add_blog"><img src="images/icon_lecture.png"/></a>
        </div>
    </div>
</div></div>



<div class="wrapper">


<?php
echo "<div id='menubar'>
<ul>";
//display data
$get_content = mysqli_query($login_db,"SELECT * FROM sm_blog") or die("Error with querry");
				while ($row = mysqli_fetch_assoc($get_content))
{
 //get data
	$id = $row['id'];
	$title = $row['title'];
 
 
 echo "
<li style='max-width:200px'><a href='index.php?view=blog_detail&blog_id=$id'><img src='images/folder.png' /><br />$title</a></li>
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
