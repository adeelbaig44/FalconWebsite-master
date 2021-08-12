
<div class="PageHeader">
	<div class="Headingbg"><h1>Our Partners</h1></div>

	<div class="container">
	<div class="SpacingBox"></div>
	<div class="row">
		
	<div class="SpacingBox"></div>
	
	<?php
        include './libraries/config.php';
				$GetWebSlider = mysqli_query($login_db,"SELECT * FROM sm_partnership ORDER By ps_id DESC") or die("Error with querry");
				while ($row = mysqli_fetch_assoc($GetWebSlider))
				{
				
				$ps_id 		= $row['ps_id'];
				$ps_image 	= $row['ps_image'];
				?>
					<div class="col-sm-4 col-md-3"><div class="img_section">
					<figure><img src="_img/partners/<?php echo $ps_image;?>"  class="img-responsive" alt=""></figure></div></div><?php } 
        mysqli_close($login_db);
        ?>
	
		
	</div>
	<div class="SpacingBox"></div>

	</div>
	
	
</div>
 