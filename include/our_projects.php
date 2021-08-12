<img class="responsive" src="_img/background/project-page.png" alt="main_about_bg_image" style="height:90vh;object-fit:cover;object-position:center">
<div class="container carousal-inner-div" style="width:90% !important">
    <!-- <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12"><center><a href="<?php if($GETLANG == 'en'){echo 'index.php?lang=en';} else{ echo 'index.php' ;} ?>"><img src="_img/logo.svg" class="img-responsive"></a></center></div> -->
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
        <h2>
            <?php if($GETLANG == 'en'){
                echo "ALL PROJECTS START BY A SIMPLE IDEA,<br/>LET US TAKE CARE OF THE REST !";
            }else{
                echo " CHAQUE PROJET COMMENCE PAR UNE SIMPLE IDÉE.<br/> NOUS NOUS OCCUPONS DU RESTE!";
            }
            ?>
            </h2>
            <p>
            <?php if($GETLANG == 'en'){
                echo "Software house with a team of experienced developers and project managers";
            }else{
                echo "Non pas un prestataire, mais un vrai partenaire ! Nous retravaillons votre projet et le portons à maturité.";
            }
            ?>
        </p>
    </div>
</div>
<div class="container content projectcard">
<?php
    if(isset($_GET['lang'])){
        $GETLANG = $_GET['lang'];
    }
?>
<div class="SpacingBox"></div>
    <div class="heading">
        <?php
        if($GETLANG == 'en'){ 
         echo  "<h2 class=\"text-center\">Latest <strong>Projects</strong></h2>";
        } else{
         echo  "<h2 class=\"text-center\">Derniers <strong>Projets</strong></h2>";
        }
        ?>    
    </div><!-- //end heading -->


	<div class="row">
<?php
	
	include './libraries/config.php';
$GetData = mysqli_query($login_db,"SELECT * FROM sm_projects")or die("Error Fetching");
while ($row = mysqli_fetch_array($GetData)){
	
	
$pr_id             =	$row['pr_id'];
$pr_main_image          =	$row["pr_logo"];
    if($GETLANG == 'en'){
$pr_name           =	$row['en_name'];
$pr_description    =	substr($row['en_description'],0,100);
$pr_our_part            =	$row['en_our_part'];
$pr_challenges            =	$row['en_chalanges'];        
    }else{
$pr_name           =	$row['pr_name'];
$pr_description    =	substr($row['pr_description'],0,100);
$pr_our_part            =	$row['pr_our_part'];
$pr_challenges            =	$row['pr_challenges'];
    }
				?>
					
	 <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
   <div class="Box">
    <div class="SpacingBox"></div>
   <center><img style="wdth:100px; height:100px" src="_img/products/<?php echo $pr_main_image;?>" class="img-responsive" alt="Project Logo Here"></center>
   <h4 class="text-center"><?php echo $pr_name; ?></h4>
   <p class="text-center"><?php echo $pr_description; ?>....</p>
       <br/>
       <center>
           <?php if($GETLANG == 'en'){  ?>
           <a class="project-link" href="index.php?view=project_details&pro_id=<?php echo $pr_id ?>&lang=en">See Project</a>
           <?php }else{ ?>
           <a class="project-link" href="index.php?view=project_details&pro_id=<?php echo $pr_id ?>">Voir le projet</a>
           <?php } ?>
       </center>
   </div>
    </div>
	
	<?php } 
        mysqli_close($login_db); ?>
	
	
    </div><!-- //end row -->
<div class="SpacingBox"></div>
<div class="SpacingBox"></div>
</div>