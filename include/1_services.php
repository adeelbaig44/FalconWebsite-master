



<div class="HomeService">
	<div class="container">
	<div class="SpacingBox"></div>
	<div class="SpacingBox"></div>
	<h2>PROVIDING SERVICES</h2>
	<div class="HBar"></div>
	<div class="SpacingBox"></div>
	<div class="SpacingBox"></div>
	<div class="SpacingBox"></div>
		<div class="row">
		<?php 
			include './libraries/config.php';
	$GETService = mysqli_query($login_db,"SELECT * FROM sm_services ORDER By sr_id") or die("Error with querry");
		while ($row = mysqli_fetch_assoc($GETService))
		{
			$sr_id			 = $row['sr_id'];
			$sr_text		 = $row['sr_text'];
			$sr_name		 = $row['sr_name'];
			$sr_url			 = $row['sr_url'];
		?>
		  <div class="col-md-4 col-sm-4"><a href="index.php?view=hdd_services_details&ser=<?php echo $sr_id; ?>"><img src="_img/<?php echo $sr_url; ?>" alt="..." class="img-responsive center-block img-circle"></a><h4><?php echo $sr_name; ?></h4></div>
		<?php }
            mysqli_close($login_db)
            ?>  </div>
	
	<div class="SpacingBox"></div>
	<div class="SpacingBox"></div>
	</div>
</div>

