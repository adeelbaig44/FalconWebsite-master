<?php
include '../libraries/config.php';
require "libraries/loginchecker.php";
										
?><!-- 
ADMIN DESIGNED AND DEVELOPED BY SWISMAX SOLUTIONS
info@swismax.com
www.swismax.com
03125190928
-->

<div class="HomeHeading">
<div class="container-fluid">
  <div class="row">
   <h1><a href="index.php?view=home"><img src="images/back_icon.png" border="0"></a> | Manage Landing Page</h1>
  </div>
</div></div>




<div class="SpacingBox"></div>	

	<?php 
	
	
	



 //file properties
if($_FILES){
$file   			=	$_FILES["image"]["tmp_name"];
$h_heading   		=	$_POST['h_heading'];
$h_text   			=	$_POST['h_text'];
$h_button_name   	=	$_POST['h_button_name'];
$h_button_url   	=	$_POST['h_button_url'];
}

if ($_POST){
if (empty($file)){
	$Update1 = mysqli_query($login_db,"UPDATE sm_home SET h_heading='$h_heading', h_text='$h_text', h_button_name='$h_button_name', h_button_url='$h_button_url' WHERE h_id='1'") or die (mysqli_error());
	
	echo "<div class='alert alert-success'><p>Your landing page has been updated.</p></div>";
}else{
 $uploadFile = $file;
if ($file){
if (!isset($file))
echo "<div class='alert alert-danger'>Please fill all fields & select image<BR> <a href='index.php?view=add_product'><img src='images/user_back.png'></a></div>";
     
	 
      	

else
{
	//get data form image with extension
	$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$image_name = addslashes($_FILES['image']['name']);
	$image_size = getimagesize($_FILES['image']['tmp_name']);
	$file_tmp = $_FILES['image']['tmp_name'];
	
	
	
	
	//give the random name genator
	$randomNumber = rand(0000, 99999); 
	//give the random name image
	$newName = $randomNumber . $image_name;


	$Update1 = mysqli_query($login_db,"UPDATE sm_home SET h_heading='$h_heading', h_text='$h_text', h_button_name='$h_button_name', h_button_url='$h_button_url', h_image='$newName' WHERE h_id='1'") or die (mysqli_error());
			
	$lastid = mysqli_insert_id();
	//move the image form pc to server with random name
	if (move_uploaded_file($file_tmp, '../_img/'.$newName) ){
	echo "<div class='alert alert-success'><p>Your landing page has been updated.</p></div>";
	}
		
}
	}
}

}	
		
		
		$GETContactDetails = mysqli_query($login_db,"SELECT * FROM sm_home WHERE h_id='1'") or die (mysqli_error());
		while ($row = mysqli_fetch_assoc($GETContactDetails))
		{
		$h_heading					 			= $row['h_heading'];
		$h_text					 				= $row['h_text'];
		$h_image		 						= $row['h_image'];
		$h_button_name				 			= $row['h_button_name'];
		$h_button_url					 		= $row['h_button_url'];
		?>


<div class="ContactDetails">
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-8">
	<form method="post" enctype="multipart/form-data" name="form1" id="form1">
  <table width="100%" border="1" class="table table-bordered table-hover">
    <tbody>
      <tr>
        <td width="20%"><label for="h_heading">Text Field:</label></td>
        <td width="80%"><input type="text" name="h_heading" id="h_heading" value="<?php echo $h_heading; ?>" class="form-control"></td>
      </tr>
      <tr>
        <td><label for="image">File:</label></td>
        <td><input type="file" name="image" id="image"> (Image Size: W: 1366 x H: 786) Image is Optional</td>
      </tr>
      <tr>
        <td><label for="h_text">Text Area:</label></td>
        <td><textarea name="h_text" id="h_text" class="form-control"><?php echo $h_text; ?></textarea></td>
      </tr>
      <tr>
        <td><label for="h_button_name">Text Field:</label></td>
        <td><input type="text" name="h_button_name" id="h_button_name"  value="<?php echo $h_button_name; ?>" class="form-control"></td>
      </tr>
      <tr>
        <td><label for="h_button_url">Text Field:</label></td>
        <td><input type="text" name="h_button_url" id="h_button_url" value="<?php echo $h_button_url; ?>" class="form-control"></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><input type="submit" name="submit" id="submit" value="Submit"></td>
      </tr>
    </tbody>
  </table>
    </div>
  </div><?php } 
      mysqli_close($login_db);?>
</div></div>	



<div class="SpacingBox"></div>	
<div class="SpacingBox"></div>	
<div class="SpacingBox"></div>		