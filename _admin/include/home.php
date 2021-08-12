<?php
include '../libraries/config.php';
//require('libraries/loginchecker.php');
									
?>

<div class="AdminHead">

<div class="container-fluid">
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 EditBoxes">
    <h1>More Options</h1>
     <a href="index.php?view=edit_select_page"><img src="images/edit_page.png" border="0"></a>
											<a href="index.php?view=project_selection"><img src="images/edit_project.png" border="0"></a>
											
											<a href="index.php?view=contact_page"><img src="images/contact_page.png" border="0"></a>
											<a href="index.php?view=manage_faculty"><img src="images/icon_faculty.png" border="0"></a>
											
											<a href="index.php?view=manage_services"><img src="images/icon_manage_services.png" border="0"></a>
											<a href="index.php?view=manage_services_new"><img src="images/icon_manage_services_new.png" border="0"></a>
											
											<a href="index.php?view=change_password"><img src="images/change_password.png" border="0"></a>
											<a href="index.php?view=manage_clients"><img src="images/icon_manage_clients.png" border="0"></a>
<!--											<a href="index.php?view=manage_partners"><img src="images/icon_manage_partners.png" border="0"></a>-->
											<a href="index.php?view=manage_landingpage"><img src="images/landing_page.png" border="0"></a>
											<a href="index.php?view=blog_list"><img src="images/icon_lecture_view.png" border="0"></a>
   
    </div>
	
	<!---------------------------------------------------------------->
	
	
    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
	<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 SideBar">
	
	
	<!---------------------------------------------------------------->
	<?php

//--------------------------------------------------------------------- Change Password --------------------------------------------------------//

if (isset($_POST['change_tms_password']))
{
// check fields

   $current_password 			= md5($_POST['current_password']);
   $new_password 				= md5($_POST['new_password']);
   $again_new_password 			= md5($_POST['again_new_password']);

   // check password against db
   
 
   
   $queryget = mysqli_query($login_db,"SELECT password FROM imt_user WHERE id='1'") or die("Query didnt work");
   $row = mysqli_fetch_assoc($queryget);

   $oldpassworddb = $row['password'];
   
   //check passwords
   if ($current_password==$oldpassworddb)
   {
      // check two new password
      if ($new_password==$again_new_password)
      {
         //success
         //change password in db
         
         $querychange = mysqli_query($login_db,"
         UPDATE imt_user SET password='$new_password' WHERE id='1'
         ");
         session_destroy();
         $Message = "<div class='alert alert-success'>SUCCESS - Your password successfully change.</div>	 
		 <script language='javascript'>
		  window.location = 'logout.php';
		</script>";


      }
      else{
		  $Message = "<div class='alert alert-danger'>NOT MATCH - New passwords don't match please try again.</div>";
	  }

   }
   else{
	   $Message = "<div class='alert alert-danger'>OLD PASSWORD - Old password dosent match! please try again.</div>";
	  }

}
//--------------------------------------------------------------------- Change Password --------------------------------------------------------//
mysqli_close($login_db);
		
?>

	<a href="index.php?view=logout" style="float:right;"><img src="images/logout.png" border="0"></a>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ChangePassword">
	<p>Change Password</p>
	<?php
        if(isset($Message)){echo $Message;} ?>
	
	<form action="" method="POST">
  <div class="form-group">
    <label for="current_password">Current Password:</label>
     <input type="text" name="current_password" class="form-control" id="email">
  </div>
  <div class="form-group">
    <label for="new_password">New Password:</label>
    <input type="text" name="new_password" class="form-control" id="new_password">
   </div>
  <div class="form-group">
    <label for="again_new_password">Again New Password:</label>
    <input type="text" name="again_new_password" class="form-control" id="again_new_password">
   </div>
   <input type="submit" name="change_tms_password" value="Save & Change" id="btn">
 </form>
	
	</div>
	
	<!---------------------------------------------------------------->
	
	
  </div>
</div>

  </div>
</div>

</div>

