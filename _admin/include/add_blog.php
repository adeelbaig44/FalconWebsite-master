<?php
                include '../libraries/config.php';

				require "libraries/loginchecker.php";
									
?>


<div class="HomeHeading">
<div class="container-fluid">
  <div class="row">
   <h1><a href="index.php?view=blog_list"><img src="images/back_icon.png" border="0"></a> | Add Blog</h1>
  </div>
</div></div>
<script type="text/javascript" src="jscripts/tiny_mce/tiny_mce.js"></script>
<script src="https://cdn.ckeditor.com/4.4.3/standard/ckeditor.js" type="text/javascript"></script>
    <script type="text/javascript">
      $(function () {
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace('description');
        CKEDITOR.replace('fr_description');
        //bootstrap WYSIHTML5 - text editor
        // $(".textarea").wysihtml5();
      });
    </script>
<?php

	  
  if($_POST){
 //file properties
    $title                =	$_POST['title'];
    $fr_title                =	$_POST['fr_title'];
    $description                =	$_POST['description'];
    $fr_description                =	$_POST['fr_description'];
    $pub_date          =	$_POST["publish_date"];
    $pub_by         = $_POST["pub_by"];
    
    if($_FILES){
    
    $image = addslashes(file_get_contents($_FILES['blog_image']['tmp_name']));
	$image_name = addslashes($_FILES['blog_image']['name']);
	$image_size = getimagesize($_FILES['blog_image']['tmp_name']);
	$file_tmp = $_FILES['blog_image']['tmp_name'];
// 	random number
	$randomNumber = rand(0000, 99999); 
// 	create filename with random number;
	$newName = $randomNumber . $image_name;
      

    
    if (move_uploaded_file($file_tmp, '../_img/blog/'.$newName) ){
    	echo "<div class='alert alert-success'><p>Images Uploaded Successfully</p></div>";
    	$insert = mysqli_query($login_db,"INSERT INTO sm_blog (title,fr_title,description,fr_description,publish_date,publish_by,blog_image) VALUES ( 
    	`$title`,
    	`$fr_title`,
        `$description`,
        `$fr_description`,
        `$pub_date`,
        `$pub_by`,
        `$newName`)")or die(mysqli_error($login_db));
        // check if inserted or not
        if($insert){
            echo "<div class='alert alert-success'><p>Blog is added successfully</p></div>";
        } else {
            echo "<div class='alert alert-danger'><p>Unable to add blog try again.</p></div>";
        }
    }	
    else
    {
    	echo "<div class='alert alert-danger'>Error Uploading Image and saving data try agian.</div>";
    }
    }else{
        echo "<div class='alert alert-danger'>Image file is required</div>";
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
    <label class="control-label col-sm-3" for="title">Title:</label>
    <div class="col-sm-9"> 
      <input type="text" class="form-control" name="title" required>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-3" for="fr_title" required>FR Title:</label>
    <div class="col-sm-9"> 
      <input type="text" class="form-control" name="fr_title" />
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-3" for="blog_image">Image for Blog:</label>
    <div class="col-sm-9"> 
      <input type="file" class="form-control" name="blog_image" required>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-3" for="description">Description:</label>
    <div class="col-sm-9"> 
      <textarea class="form-control" name="description" rows="15" required></textarea>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-3" for="fr_description">FR Description:</label>
    <div class="col-sm-9"> 
      <textarea class="form-control" name="fr_description" rows="30" required></textarea>
    </div>
  </div>
 <div class="form-group">
    <label class="control-label col-sm-3" for="publish_date">Publish Date:</label>
    <div class="col-sm-9"> 
      <input type="date" class="form-control" name="publish_date" required>
    </div>
  </div> 
  <div class="form-group">
    <label class="control-label col-sm-3" for="pub_by">Publish By:</label>
    <div class="col-sm-9"> 
      <input type="text" class="form-control" name="pub_by" required>
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