<?php
include './libraries/config.php';

if ($_GET['name']){

$PageID = $_GET['name'];

	  $GetPageContents = mysqli_query($login_db,"SELECT * FROM im_page_content WHERE page_heading='$PageID'") or die("Error with querry");
				if ($row = mysqli_fetch_assoc($GetPageContents))
				{
				$cont_heading    = $row['cont_heading'];
				$page_heading    = $row['page_heading'];
				$page_content    = $row['page_content'];
	            $content_image   = $row['content_image'];
				
				
	?>

<div class="PageBackgorundImage" style="background: url(_img/<?php echo $content_image; ?>); background-size: cover;">
    <div class="container">
	<h2><?php echo $cont_heading; ?></h2>
	</div>	
	</div>	

   
   


<div class="PageContent">
<div class="container">
<div class="SpacingBox"></div>
  <div class="row">
   <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12"><?php echo mb_convert_encoding($page_content, 'UTF-8', 'UTF-8'); ?></div>
   
   </div>
   </div>
   </div>

   </div>

<div class="SpacingBox"></div>
	
	<?php 
		}
	  }

mysqli_close($login_db);
	  ?>
