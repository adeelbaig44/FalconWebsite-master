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
   <h1><a href="index.php?view=home"><img src="images/back_icon.png" border="0"></a> | Contact Page</h1>
  </div>
</div></div>




<div class="SpacingBox"></div>	

	<?php 
	
	
	
	if(isset($_POST['view'])){
      	if ($_POST['view']== 'contact_page'){
		
			$ctn_id 			= $_POST['ctn_id'];
			$ctn_officename		= $_POST['ctn_officename'];
			$ctn_address		= $_POST['ctn_address'];
			$ctn_mail			= $_POST['ctn_mail'];
			$ctn_ph				= $_POST['ctn_ph'];
			$ctn_cell			= $_POST['ctn_cell'];
			$ctn_map			= $_POST['ctn_map'];
			$ctn_enable			= $_POST['ctn_enable'];
			
			if ($ctn_id){
			$change = mysqli_query($login_db,"UPDATE sm_contact SET 
			ctn_officename='$ctn_officename',
			ctn_address='$ctn_address',
			ctn_mail='$ctn_mail',
			ctn_ph='$ctn_ph',
			ctn_cell='$ctn_cell',
			ctn_map='$ctn_map',
			ctn_enable='$ctn_enable'
			WHERE ctn_id='$ctn_id'") or die (mysqli_error());
			echo "<div class='alert alert-success'>UPDATE - contact has been updated.</div>";
			}
	}
  
    }
		
		$GETContactDetails = mysqli_query($login_db,"SELECT * FROM sm_contact WHERE ctn_enable='1'") or die (mysqli_error());
		while ($row = mysqli_fetch_assoc($GETContactDetails))
		{
		$ctn_id					 			= $row['ctn_id'];
		$ctn_officename					 	= $row['ctn_officename'];
		$ctn_address		 				= $row['ctn_address'];
		$ctn_mail				 			= $row['ctn_mail'];
		$ctn_ph					 			= $row['ctn_ph'];
		$ctn_cell				 			= $row['ctn_cell'];
		$ctn_map				 			= $row['ctn_map'];
		?>


<div class="ContactDetails">
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-4"><?php echo $ctn_map; ?></div>
    <div class="col-sm-6">
	<h1><?php echo $ctn_officename; ?></h1>
	<h4><?php if (!empty($ctn_address)){  echo $ctn_address; } ?></h4>
	<p><?php if (!empty($ctn_mail)){  echo "Mail: ".$ctn_mail; } ?></p>
	<p><?php if (!empty($ctn_ph)){  echo "Ph: ".$ctn_ph; } ?></p>
	<p><?php if (!empty($ctn_cell)){  echo "Cell: ".$ctn_cell; } ?></p>
    </div>
    <div class="col-sm-2">
			<h2><a href="index.php?view=contact_page_edit&contactid=<?php echo $ctn_id; ?>"><img src="images/edit_admin.png"></a></h2>
   </div>
  </div><?php }
     mysqli_close($login_db);
    ?>
</div></div>	



<div class="SpacingBox"></div>	
<div class="SpacingBox"></div>	
<div class="SpacingBox"></div>		