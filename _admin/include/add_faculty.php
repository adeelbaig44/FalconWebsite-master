<?php
                include '../libraries/config.php';

				require "libraries/loginchecker.php";
									
?>


<div class="HomeHeading">
<div class="container-fluid">
  <div class="row">
   <h1><a href="index.php?view=manage_faculty"><img src="images/back_icon.png" border="0"></a> | Add Faculty Members</h1>
  </div>
</div></div>
<script type="text/javascript" src="jscripts/tiny_mce/tiny_mce.js"></script>
<script src="https://cdn.ckeditor.com/4.4.3/standard/ckeditor.js" type="text/javascript"></script>
    <script type="text/javascript">
      $(function () {
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace('fc_description');
        //bootstrap WYSIHTML5 - text editor
        $(".textarea").wysihtml5();
      });
    </script>
<?php

	  
  if($_POST){
 //file properties
$fc_id             =	$_POST['fc_id'];
$fc_name           =	$_POST['fc_name'];
$fc_image          =	$_FILES["fc_image"]["tmp_name"];
$fc_description    =	$_POST['fc_description'];
$fc_end            =	$_POST['fc_end'];

if ($fc_name&&$fc_image&&$fc_description){
	
	//get data form image with extension
	$image = addslashes(file_get_contents($_FILES['fc_image']['tmp_name']));
	$image_name = addslashes($_FILES['fc_image']['name']);
	$image_size = getimagesize($_FILES['fc_image']['tmp_name']);
	$file_tmp = $_FILES['fc_image']['tmp_name'];
	
	
	
	
	//give the random name genator
	$randomNumber = rand(0000, 99999); 
	//give the random name image
	$newName = $randomNumber . $image_name;
	$insert = mysqli_query($login_db,"INSERT INTO sm_faculty VALUES ('',
	'$fc_name',
	'$newName',
	'$fc_description',
	'1')")or die("Error insert");
			
	$lastid = mysqli_insert_id();
	//move the image form pc to server with random name
	if (move_uploaded_file($file_tmp, '../_img/faculty/resized/'.$newName) ){
				include "../_img/faculty/resized/imageinc.php";
				create_thumbnail('../_img/faculty/resized/'.$newName, '../_img/faculty/'.$newName, 400, 600);
				unlink ('../_img/faculty/resized/'.$newName);
	echo "<div class='WebPageBoxStepTwo'><center>Product has been uploaded</div>";}
	
	
	
	if (move_uploaded_file($file_tmp, '../_img/faculty/'.$newName) ){
	echo "<div class='alert alert-success'><p>Your Faculty Details has been uploaded.</p></div>";}
	 	 
} 	

else
{
	echo "<div class='alert alert-danger'>Please fill all fields & select image</div>";
}
  }
  
  mysqli_close($login_db);
  
?>


<div class="SpacingBox"></div>	

<div class="wrapper">
<div class="container form">
  <div class="row">
    <div class="col-sm-8">
    <form class="form-horizontal" enctype="multipart/form-data" method="POST">
  <div class="form-group">
    <label class="control-label col-sm-3" for="fc_name">Name with Designation</label>
    <div class="col-sm-9"> 
      <input type="text" class="form-control" name="fc_name">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-3" for="fc_image">Select Image 600 x 600px:</label>
    <div class="col-sm-9">
      <input type="file" class="form-control" name="fc_image" id="fc_image">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-3" for="fc_description">Details:</label>
    <div class="col-sm-9"> 
      <textarea class="form-control" name="fc_description" rows="5"></textarea>
    </div>
  </div>
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <input type="submit" name="GetAdd" id="btn" value="Save" style="float: right;">
    </div>
  </div>
</form>
    </div>
    <div class="col-sm-4">
    </div>
  </div>
</div>		
</div>
			
			