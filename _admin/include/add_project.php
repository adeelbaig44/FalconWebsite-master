<?php
                include '../libraries/config.php';

				require "libraries/loginchecker.php";
									
?>


<div class="HomeHeading">
<div class="container-fluid">
  <div class="row">
   <h1><a href="index.php?view=project_selection"><img src="images/back_icon.png" border="0"></a> | Add Project Details</h1>
  </div>
</div></div>
<script type="text/javascript" src="jscripts/tiny_mce/tiny_mce.js"></script>
<script src="https://cdn.ckeditor.com/4.4.3/standard/ckeditor.js" type="text/javascript"></script>
    <script type="text/javascript">
      $(function () {
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace('pr_description');
        CKEDITOR.replace('pr_our_part');
        CKEDITOR.replace('pr_challenges');
        CKEDITOR.replace('sm_technologies');
//        CKEDITOR.replace('pr_res_desc');
        CKEDITOR.replace('en_technologie');
        CKEDITOR.replace('en_chalanges');
        CKEDITOR.replace('en_our_part');
        CKEDITOR.replace('en_description');
        //bootstrap WYSIHTML5 - text editor
        $(".textarea").wysihtml5();
      });
    </script>
<?php

	  
  if($_POST){
 //file properties
$pr_name                =	$_POST['pr_name'];
$en_name                =	$_POST['en_name'];
$pr_logo          =	$_FILES["pr_logo"]["tmp_name"];
$pr_main_image          =	$_FILES["pr_main_image"]["tmp_name"];
$pr_sec_image           =	$_FILES["pr_sec_image"]["tmp_name"];   
$pr_description         =	$_POST['pr_description'];
$pr_our_part            =	$_POST['pr_our_part'];
$pr_challenges          =	$_POST['pr_challenges'];
$sm_technologies        =	$_POST['sm_technologies'];
$sm_link                = $_POST['sm_link'];
$en_description         =$_POST['en_description'];
$en_our_part         =$_POST['en_our_part'];
$en_technologie         =$_POST['en_technologie'];
$en_chalanges         =$_POST['en_chalanges'];
      
//$pr_res_desc            =	$_POST['pr_res_desc'];

if ($pr_name&&$pr_main_image&&$pr_description){
	
	//get data form main image with extension
	$image = addslashes(file_get_contents($_FILES['pr_main_image']['tmp_name']));
	$image_name = addslashes($_FILES['pr_main_image']['name']);
	$image_size = getimagesize($_FILES['pr_main_image']['tmp_name']);
	$file_tmp = $_FILES['pr_main_image']['tmp_name'];
	
	//logo 
	$image_logo = addslashes(file_get_contents($_FILES['pr_logo']['tmp_name']));
	$image_name_logo = addslashes($_FILES['pr_logo']['name']);
	$image_size_logo = getimagesize($_FILES['pr_logo']['tmp_name']);
	$file_tmp_logo = $_FILES['pr_logo']['tmp_name'];
	
	
	
	
	//give the random name genator
	$randomNumber = rand(0000, 99999); 
	//give the random name image
	$newName = $randomNumber . $image_name;
	$newNameLogo = $randomNumber . $image_name_logo;
    //--------------------------------------------------
    //get data form  sec image with extension
    
    
	$insert = mysqli_query($login_db,"INSERT INTO sm_projects (
    pr_name,
    en_name,
    pr_description,
    en_description,
    pr_main_image,
    pr_our_part,
    en_our_part,
    pr_challenges,
    en_chalanges,
    sm_technologies,
    en_technologie,
    sm_link,
    pr_logo) VALUES ( 
	'$pr_name',
    '$en_name',
    '$pr_description',
    '$en_description',
	'$newName',
	'$pr_our_part',
    '$en_our_part',
	'$pr_challenges',
    '$en_chalanges',
	'$sm_technologies',
    '$en_technologie',
	'$sm_link',
    '$newNameLogo')")or die(mysqli_error($login_db));
	    
	if (move_uploaded_file($file_tmp, '../_img/products/'.$newName) ){
	echo "<div class='alert alert-success'><p>Your products Details And Main Images has been uploaded.</p></div>";
    }	
    else
    {
    	echo "<div class='alert alert-danger'>Please fill all fields & select Main image</div>";
    }
    // secondary Images uploading
    
	$lastid = mysqli_insert_id($login_db);
    foreach($_FILES['pr_sec_image']['tmp_name'] as $key=>$val){
    $imageSec = basename($_FILES['pr_sec_image']['tmp_name'][$key]);
	$image_name_sec = addslashes($_FILES['pr_sec_image']['name'][$key]);
	$image_size_sec = getimagesize($_FILES['pr_sec_image']['tmp_name'][$key]);
	$file_tmp_sec = $_FILES['pr_sec_image']['tmp_name'][$key];
	$newNameSec = $randomNumber . $image_name_sec;
    $ins_sec=mysqli_query($login_db,"insert into sm_image (si_image,pr_id) values ('$newNameSec','$lastid')")or die(mysqli_error($login_db));
	// move the image form pc to server with random name
	if (move_uploaded_file($file_tmp_sec, '../_img/products/'.$newNameSec) ){
	echo "<div class='alert alert-success'><p>Your products Details and Secondary Images has been uploaded.</p></div>";
    }
    else
    {
    	echo "<div class='alert alert-danger'>Please fill all fields & select Secondary images</div>";
    }
} 	
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
    <label class="control-label col-sm-3" for="pr_name">Project Name(FR)</label>
    <div class="col-sm-9"> 
      <input type="text" class="form-control" name="pr_name">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-3" for="en_name">Project Name(EN)</label>
    <div class="col-sm-9"> 
      <input type="text" class="form-control" name="en_name">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-3" for="sm_link">Project Link</label>
    <div class="col-sm-9"> 
      <input type="text" class="form-control" name="sm_link">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-3" for="pr_logo">Select Logo:</label>
    <div class="col-sm-9">
      <input type="file" class="form-control" name="pr_logo" id="pr_logo">
    </div>
  </div> 
  <div class="form-group">
    <label class="control-label col-sm-3" for="pr_image">Select Main Image:</label>
    <div class="col-sm-9">
      <input type="file" class="form-control" name="pr_main_image" id="pr_main_image">
    </div>
  </div> 
    <div class="form-group">
    <label class="control-label col-sm-3" for="pr_image">Select Secondary Image:</label>
    <div class="col-sm-9">
      <input type="file" class="form-control" name="pr_sec_image[]" id="pr_sec_image" multiple/>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-3" for="pr_description">Details(FR):</label>
    <div class="col-sm-9"> 
      <textarea class="form-control" name="pr_description" rows="15"></textarea>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-3" for="en_description">Details(EN):</label>
    <div class="col-sm-9"> 
      <textarea class="form-control" name="en_description" rows="15"></textarea>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-3" for="pr_our_part">Our Contribution(FR):</label>
    <div class="col-sm-9"> 
      <textarea class="form-control" name="pr_our_part" rows="15"></textarea>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-3" for="en_our_part">Our Contribution(EN):</label>
    <div class="col-sm-9"> 
      <textarea class="form-control" name="en_our_part" rows="15"></textarea>
    </div>
  </div>
    <div class="form-group">
    <label class="control-label col-sm-3" for="sm_technologies">Technologies(FR):</label>
    <div class="col-sm-9"> 
      <textarea class="form-control" name="sm_technologies" rows="15"></textarea>
    </div>
  </div>
    <div class="form-group">
    <label class="control-label col-sm-3" for="en_technologie">Technologies(EN):</label>
    <div class="col-sm-9"> 
      <textarea class="form-control" name="en_technologie" rows="15"></textarea>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-3" for="pr_challenges">Challenges/Solutions(FR):</label>
    <div class="col-sm-9"> 
      <textarea class="form-control" name="pr_challenges" rows="15"></textarea>
    </div>
  </div> 
 <div class="form-group">
    <label class="control-label col-sm-3" for="en_chalanges">Challenges/Solutions(EN):</label>
    <div class="col-sm-9"> 
      <textarea class="form-control" name="en_chalanges" rows="15"></textarea>
    </div>
  </div> 
<!--
    <div class="form-group">
    <label class="control-label col-sm-3" for="pr_res_desc">Result Description:</label>
    <div class="col-sm-9"> 
      <textarea class="form-control" name="pr_res_desc" rows="15"></textarea>
    </div>
  </div>
-->
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
			
			