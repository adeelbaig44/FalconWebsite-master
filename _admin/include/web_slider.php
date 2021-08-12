<?php
include '../libraries/config.php';
				require "libraries/loginchecker.php";
									
?>


<div class="HomeHeading">
<div class="container-fluid">
  <div class="row">
   <h1><a href="index.php?view=home"><img src="images/back_icon.png" border="0"></a> | Web Slider</h1>
  </div>
</div></div>

<?php


 //file properties
$file   =	$_FILES["image"]["tmp_name"];
$SL_URL   =	$_POST['sl_url'];

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


	$insert = mysqli_query($login_db,"INSERT INTO sm_slider VALUES ('',
			'$newName','$SL_URL')");
			
	$lastid = mysqli_insert_id();
	//move the image form pc to server with random name
	if (move_uploaded_file($file_tmp, '../_img/slider/'.$newName) ){
	echo "<div class='WebPageBoxStepTwo'><p>Your product has been uploaded.</p></div>";}
		
}
	}
	
?>


<div class="SpacingBox"></div>	

<div class="wrapper">
<div class="container form">
  <div class="row">
    <div class="col-sm-8">
    <form class="form-horizontal" enctype="multipart/form-data" action="index.php?view=web_slider" method="post">
  <div class="form-group">
    <label class="control-label col-sm-2" for="image">Select Image:</label>
    <div class="col-sm-10">
      <input type="file" class="form-control" name="image" id="image">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="sl_url">URL:</label>
    <div class="col-sm-10"> 
      <input type="text" class="form-control" name="sl_url" value="<?php echo $sl_url; ?>">
    </div>
  </div>
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <input type="submit" name="submit" id="btn" value="Save" style="float: right;">
    </div>
  </div>
</form>
    </div>
    <div class="col-sm-4">
    </div>
  </div>
</div>		

    <div class="NewsHead">	
	<div class="container-fluid">
  <div class="row">

      
<div class="SpacingBox"></div>

<?php


$sl_id = $_POST['sl_id'];
if ($_POST['delete_webslider']){

$delete = mysqli_query($login_db,"DELETE FROM sm_slider WHERE sl_id='$sl_id'") or die (mysqli_error());
echo "<div class='alert alert-success'><p>DELETE - Item has been deleted.</p></div>";

}

?>
<div class="SpacingBox"></div>
         	  
	 <div class="table-responsive">
        <table summary="This table shows how to create responsive tables using Bootstrap's default functionality" class="table table-bordered table-hover">
         <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Image</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>	
	
	
	<?php
				$GetWebSlider = mysqli_query($login_db,"SELECT * FROM sm_slider") or die("Error with querry");
				while ($row = mysqli_fetch_assoc($GetWebSlider))
				{
				
				$sl_id 		= $row['sl_id'];
				$sl_image 	= $row['sl_image'];
				?>
					
	<tbody>
    <tr>
      <td><?php echo $sl_id ?></td>
	  <td><img src="../_img/slider/<?php echo $sl_image;?>" height="150"></td>
      <form id='form1' name='form1' method='post' action='index.php?view=web_slider'>
	  <td>
		<input type='hidden' id='sl_id' name='sl_id' value='<?php echo $sl_id;?>'>
		<input type='submit' id='btn' name='delete_webslider' value='Delete'>
		</td></form>
		</tr>
  </tbody>
				<?php }
            mysqli_close($login_db);
            ?>
				
				</table>
</div></div></div></div></div>
			
			