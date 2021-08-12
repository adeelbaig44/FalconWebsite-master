<?php
include '../libraries/config.php';

				require "libraries/loginchecker.php";
									
?><!-- 
ADMIN DESIGNED AND DEVELOPED BY FALCONITC SOLUTIONS
-->


<div class="HomeHeading">
<div class="container-fluid">
  <div class="row">
   <h1><a href="index.php?view=home"><img src="images/back_icon.png" border="0"></a> | Edit Project</h1>
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



<div class="wrapper">


<?php
    
$content = $_GET['content'];
$get_content = mysqli_query($login_db,"SELECT * FROM sm_projects WHERE pr_id='$content'") or die("Error with querry");
				while ($row = mysqli_fetch_assoc($get_content))
		{
			
$pr_id             =	$row['pr_id'];
$pr_name           =	$row['pr_name'];
$pr_logo           =    $row['pr_logo'];
$pr_main_image          =	$row["pr_main_image"];
$pr_description    =	$row['pr_description'];
$pr_our_part            =	$row['pr_our_part'];
$pr_challenges            =	$row['pr_challenges'];
$sm_technologies           =	$row['sm_technologies'];
$sm_link                =$row['sm_link'];
//$pr_res_desc          =	$row['pr_res_desc'];
$en_name                =$row['en_name'];
$en_description         =$row['en_description'];
$en_our_part         =$row['en_our_part'];
$en_technologie         =$row['en_technologie'];
$en_chalanges         =$row['en_chalanges'];
                        
?>          
<div class='container form'>
  <div class='row'>
   <div class='col-sm-1'>
    </div>
    <div class='col-sm-9'>
    <form class='form-horizontal' action='index.php?view=save_project' enctype="multipart/form-data" method='post'>
  <div class='form-group'>
      <input type='hidden' class='form-control' name='pr_id' value='<?php echo $pr_id; ?>'>
  </div>
 <div class="form-group">
    <label class="control-label col-sm-3" for="pr_name">Project Name(FR)</label>
    <div class="col-sm-9"> 
      <input type="text" class="form-control" name="pr_name" value='<?php echo $pr_name; ?>'>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-3" for="en_name">Project Name(EN)</label>
    <div class="col-sm-9"> 
      <input type="text" class="form-control" name="en_name" value='<?php echo $en_name; ?>'>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-3" for="sm_link">Project Link</label>
    <div class="col-sm-9"> 
      <input type="text" class="form-control" name="sm_link" value='<?php echo $sm_link; ?>'>
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
      <textarea class="form-control" name="pr_description" rows="15"><?php echo $pr_description; ?></textarea>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-3" for="en_description">Details(EN):</label>
    <div class="col-sm-9"> 
      <textarea class="form-control" name="en_description" rows="15"><?php echo $en_description; ?></textarea>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-3" for="pr_our_part">Our Contribution(FR):</label>
    <div class="col-sm-9"> 
      <textarea class="form-control" name="pr_our_part" rows="15"><?php echo $pr_our_part; ?></textarea>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-3" for="en_our_part">Our Contribution(EN):</label>
    <div class="col-sm-9"> 
      <textarea class="form-control" name="en_our_part" rows="15"><?php echo $en_our_part; ?></textarea>
    </div>
  </div>
    <div class="form-group">
    <label class="control-label col-sm-3" for="sm_technologies">Technologies(FR):</label>
    <div class="col-sm-9"> 
      <textarea class="form-control" name="sm_technologies" rows="15"><?php echo $sm_technologies; ?></textarea>
    </div>
  </div>
    <div class="form-group">
    <label class="control-label col-sm-3" for="en_technologie">Technologies(EN):</label>
    <div class="col-sm-9"> 
      <textarea class="form-control" name="en_technologie" rows="15"><?php echo $en_technologie; ?></textarea>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-3" for="pr_challenges">Challenges/Solutions(FR):</label>
    <div class="col-sm-9"> 
      <textarea class="form-control" name="pr_challenges" rows="15"><?php echo $pr_challenges; ?></textarea>
    </div>
  </div> 
 <div class="form-group">
    <label class="control-label col-sm-3" for="en_chalanges">Challenges/Solutions(EN):</label>
    <div class="col-sm-9"> 
      <textarea class="form-control" name="en_chalanges" rows="15"><?php echo $en_chalanges; ?></textarea>
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
  	
  <div class='form-group'> 
    <div class='col-sm-offset-2 col-sm-10'>
      <input type='submit' name='submit' value='Save' id='btn' style='float: right;'>
    </div>
  </div>
</form>
    </div>
      <?php
	  } 
    mysqli_close($login_db);
    ?>
    <div class="col-sm-2">
    </div>
  </div>
</div></div>
   	
	
			