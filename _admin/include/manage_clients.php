<?php
include '../libraries/config.php';
require "libraries/loginchecker.php";
									
?>
<div class="account_auctionlist_content">
	<div class="back_icon"><table width="100%" border="0">
  <tr class="back_icon_text">
    <td width="46"><a href="index.php?view=home"><img src="images/back_icon.png" border="0"></a></td>
    <td width="20">|</td>
    <td width="98%">Manage Clients</td>
  </tr>
</table></div>
<BR><BR>

<?php
if($_POST){
 $cl_id = $_POST['cl_id'];
$delete_client = $_POST['delete_client'];   

if ($_POST['delete_client']){

$delete = mysqli_query($login_db,"DELETE FROM sm_client WHERE ct_id='$cl_id'") or die (mysqli_error());
echo "<div class='alert alert-success'>DELETE - Item has been deleted.</div>";

}
}
 //file properties
if($_FILES){
$file   =	$_FILES["image"]["tmp_name"];

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


	//file checker image or not image
	if ($image_size==FALSE)
	echo "<div class='alert alert-danger'>Thats not an image. Please select only JPG, JPEG, PNG & GIF.</div>";
	else
	{	
	//intert data in sql & problem issio
	if (!$insert = mysqli_query($login_db,"INSERT INTO sm_client VALUES ('',
			'','$newName')"))	
		echo "<div class='alert alert-danger'>Your image size to high. Please select 1.5MB File.</div>";
	
	else
	{
	$lastid = mysqli_insert_id();
	//move the image form pc to server with random name
	if (move_uploaded_file($file_tmp, '../_img/clients/'.$newName) ){
	echo "<div class='alert alert-success'><center>Your product has been uploaded.</div>";}
	}	
}
	}
	}
}
?>
<form id="form1" name="form1" method="post"  class="table table-striped" enctype="multipart/form-data" action="index.php?view=manage_clients">
  <table width="1000" border="0">
<tr>
      <td><label for="image">Select Image:</label></td>
      <td><input type="file" name="image" id="image"></td>
    </tr>
	 <tr>
      <td><label for="image">Size: 350 x 350px:</label></td>
      <td align="center"><input type="submit" name="submit" id="submit" value="Save"></td>
    </tr>
  </table>
</form>

<table width="1000" border="0" class="table table-striped">
  <tbody>
  <?php
				$GetWebSlider = mysqli_query($login_db,"SELECT * FROM sm_client") or die("Error with querry");
				while ($row = mysqli_fetch_assoc($GetWebSlider))
				{
				
				$ct_id 		= $row['ct_id'];
				$ct_image 	= $row['ct_image'];
                    
				?>
				
    <tr bgcolor="#E5E5E5">
      <td width="72"><?php echo $ct_id;?></td>
      <td width="791"><img src="../_img/clients/<?php echo $ct_image;?>" height="150"></td>
      <form id='form1' name='form1' method='post' action='index.php?view=manage_clients'>
	  <td width="115" align="center" >
	  <input type='hidden' id='cl_id' name='cl_id' value='<?php echo $ct_id;?>'>
	  <input type='submit' id='btn' name='delete_client' value='Delete'>
		</td></form>
    </tr>
	<?php } 
       mysqli_close($login_db);?>
  </tbody>
</table>
<BR><BR>
			</div>
	
			