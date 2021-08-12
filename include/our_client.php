<?php
    if(isset($_GET['lang'])){
        $GETLANG = $_GET['lang'];
    }
?>
<div class="PageHeader">
    <br/>
	<div>
	    <?php
        if($GETLANG == 'en'){ 
         echo  "<h1 class=\"text-center\"><strong>Our Clients</strong></h1>";
        } else{
         echo  "<h1 class=\"text-center\"><strong>Nos Clients</strong></h1>";
        }
        ?>   
	</div>

	<div class="container">
	<div class="row">
		<!--<div class="col-sm-12 col-md-12">-->
		<!--</div>-->
		<?php
        include './libraries/config.php';
				$GetWebSlider = mysqli_query($login_db,"SELECT * FROM sm_client ORDER By ct_id") or die("Error with querry");
				while ($row = mysqli_fetch_assoc($GetWebSlider))
				{
				
				$ct_id 		= $row['ct_id'];
				$ct_image 	= $row['ct_image'];
				?>
				<div class="col-sm-6 col-md-3" style="">
				    <div class="img_section">
					    <img  class="img-responsive" src="_img/clients/<?php echo $ct_image;?>"  alt="client logo">
				    </div>
				</div><?php }
        mysqli_close($login_db);
        ?>
		
	</div>
	<div class="SpacingBox"></div>
<div class="SpacingBox"></div>

	</div>
	
	
</div>
 