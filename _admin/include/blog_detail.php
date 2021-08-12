<?php
                include '../libraries/config.php';

				require "libraries/loginchecker.php";
									
?>


<div class="HomeHeading">
<div class="container-fluid">
  <div class="row">
   <h1><a href="index.php?view=blog_list"><img src="images/back_icon.png" border="0"></a> | Update Blog</h1>
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

$blog_id = $_GET['blog_id'];
$get_content = mysqli_query($login_db,"SELECT * FROM sm_blog WHERE id='$blog_id'") or die("Error with querry");
				while ($row = mysqli_fetch_assoc($get_content))
		{
            $cur_title = $row['title'];
            $fr_title = $row['fr_title'];
            $cur_desc = $row['description'];
            $fr_desc = $row['fr_description'];
            $cur_pub_date = $row['publish_date'];
            $cur_pub_by = $row['publish_by'];
        }

	  
  if($_POST){
 //file properties
    $title                =	$_POST['title'];
    $fr_title                =	$_POST['fr_title'];
    $description        =	$_POST['description'];
    $fr_description     = $_POST['fr_description'];
    $pub_date          =	$_POST["publish_date"];
    $pub_by             = $_POST["pub_by"];
    
    if($_FILES['blog_image']["name"] != null || $_FILES['blog_image']["name"] != "" ){
    
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
        	$insert = mysqli_query($login_db,"update sm_blog set 
            title='$title',
            fr_title=  `$fr_title`,
            description=`$description`,
            fr_description=`$fr_description`,
            publish_date='$pub_date',
            publish_by ='$pub_by',
            blog_image='$newName' where id='$blog_id'")or die(mysqli_error($login_db));
            // check if inserted or not
            if($insert){
                    echo "<div class='alert alert-success'><p>Blog is updated successfully With New Image</p></div>";
                } else {
                    echo "<div class='alert alert-danger'><p>Unable to update blog try again.</p></div>";
                }
        }	
        else
        {
        	echo "<div class='alert alert-danger'>Error Uploading Image and saving data try agian.</div>";
        }
    }
    else{
        $insert = mysqli_query($login_db,"update sm_blog set 
        title='$title',
        description='$description',
        fr_title='$fr_title',
        fr_description='$fr_description',
        publish_date='$pub_date',
        publish_by ='$pub_by'   where id='$blog_id'")or die(mysqli_error($login_db));
        // check if inserted or not
        if($insert){
                echo "<div class='alert alert-success'><p>Blog is updated successfully</p></div>";
            } else {
                echo "<div class='alert alert-danger'><p>Unable to update blog try again.</p></div>";
            }
    }
} 	
  
  mysqli_close($login_db);
  
?>


<div class="SpacingBox"></div>	

<div class="wrapper">
<div class="container form">
  <div class="row">
    <div class="col-sm-12">
    <form class="form-horizontal" enctype="multipart/form-data" method="POST" data-ajax='false'>
  <div class="form-group">
    <label class="control-label col-sm-3" for="title">Title:</label>
    <div class="col-sm-9"> 
      <input type="text" class="form-control" name="title" value="<?php echo $cur_title; ?>">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-3" for="fr_title">FR Title:</label>
    <div class="col-sm-9"> 
      <input type="text" class="form-control" name="fr_title" value="<?php echo $fr_title; ?>">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-3" for="blog_image">Image for Blog:</label>
    <div class="col-sm-9"> 
      <input type="file" class="form-control" name="blog_image">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-3" for="description">Description:</label>
    <div class="col-sm-9"> 
      <textarea class="form-control" name="description" rows="30"><?php echo $cur_desc; ?></textarea>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-3" for="fr_description">FR Description:</label>
    <div class="col-sm-9"> 
      <textarea class="form-control" name="fr_description" rows="30"><?php echo $fr_desc; ?></textarea>
    </div>
  </div>
 <div class="form-group">
    <label class="control-label col-sm-3" for="publish_date">Publish Date:</label>
    <div class="col-sm-9"> 
      <input type="date" class="form-control" name="publish_date" value="<?php echo $cur_pub_date; ?>">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-3" for="pub_by">Publish By:</label>
    <div class="col-sm-9"> 
      <input type="text" class="form-control" name="pub_by" value="<?php echo $cur_pub_by ?>">
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
  </div>
</div>		
</div>