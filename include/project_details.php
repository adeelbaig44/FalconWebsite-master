<img class="responsive" src="_img/background/bg1.png" alt="main_about_bg_image" style="height:150px;object-fit:cover;object-position:bottom">
<div class="content projectdetails">
<!-- <br/> -->

        <?php
        if(isset($_GET['lang'])){
            $GETLANG =$_GET['lang'];
        }
	   $pro_id =$_GET['pro_id'];
	   include './libraries/config.php';
        $GetData = mysqli_query($login_db,"SELECT * FROM sm_projects where pr_id='$pro_id'")or die("Error Fetching Querry");
        if ($row = mysqli_fetch_array($GetData)){
	

                $pr_id             =	$row['pr_id'];
                $pr_main_image          =	$row["pr_main_image"];
                $sm_link          =	$row['sm_link'];
                $pr_res_desc           =	$row['pr_res_desc'];
            if($GETLANG == 'en'){
                $pr_name           =	$row['en_name'];
                $pr_description    =	$row['en_description'];
                $pr_our_part            =	$row['en_our_part'];
                $pr_challenges            =	$row['en_chalanges'];
                $sm_technologies          =	$row['en_technologie'];
            } else {
                $pr_name           =	$row['pr_name'];
                $pr_description    =	$row['pr_description'];
                $pr_our_part            =	$row['pr_our_part'];
                $pr_challenges            =	$row['pr_challenges'];
                $sm_technologies          =	$row['sm_technologies'];
            }
            ?>
        <div>
            <center><h2 style="text-align:center"><strong><?php echo $pr_name ?></strong></h2></center>
        </div>
        <hr />
        <div class="container">
            <p style="font-size:26px"><?php echo $pr_description ?></p>
        </div>
        <br/><br/>
    <div class="main_image container">
        <center><img class="my_img" style="max-height: 575px; max-width: 100%;" src="_img/products/<?php echo $pr_main_image?>"alt="main image here" /></center>
        <br/>
        <?php
        if($sm_link != '#' && $GETLANG == 'en'){
            echo '<center><a href="'.$sm_link.'" target="_blank" ><button>Visit Website</button></a></center>';
        }
        else if($sm_link !='#' && $GETLANG != 'en'){
            echo '<center><a href="'.$sm_link.'" target="_blank" ><button>Visiter le site web</button></a></center>';
        }
        ?>
    </div>
        <br/>
        <br/>
    <div class="container-fluid" style="background: url(_img/project_bg.jpg);color:white;">
        <br/>
        <div class="container">
        <h4><strong>
            <?php
                if ($GETLANG == 'en'){
                    echo "OUR CONTRIBUTION";
                } else{
                    echo "NOTRE CONTRIBUTION";
                }
            ?>    
            </strong></h4>
        <div>
        <p style="font-size:16px"><?php echo $pr_our_part ?></p>
        </div>
        </div>
        <div class="container">
        <h4><strong>TECHNOLOGIES</strong></h4>
        <div>
        <p style="font-size:16px"><?php echo $sm_technologies ?></p>
        </div>
        </div>
        <br/>
    </div>
    <br/>
    <div class="container-fluid">
        <div class="container">
        <h4><strong>
            <?php
                if($GETLANG == 'en'){
                    echo "CHALLENGES AND SOLUTIONS";
                } else{
                    echo "CHALLENGES ET SOLUTIONS";
                }
            ?>
            </strong></h4>
        <div>
            <p style="font-size:16px"><?php echo $pr_challenges ?></p>
        </div>
        </div>
    </div>
    <br/>
        <br/>
    <div class="container-fluid" style="background: url(_img/project_bg.jpg);color:white;">
        <br/>
    <div class="container">
            <?php
            if ($pr_res_desc){ ?>
            <h4><strong>RESULTAT ET SATISFACTION</strong></h4>
            <div>
                <p style="font-size:16px;align-items:'center';"><?php echo $pr_res_desc ?></p>
            </div>
            <br/>
            <?php } ?>
    <div>
            <div class="row">
            <?php
            $Getsec_image = mysqli_query($login_db,"SELECT * FROM sm_image where pr_id='$pro_id'")or die("Error Fetching Querry");
            while ($row = mysqli_fetch_array($Getsec_image)){
                $im_id = $row['si_id'];
                $im_name=$row['si_image'];
            ?>
         <div class="col-md-6 col-lg-6 col-xl-6">
            <div class="Box" style="padding-left: -10px;padding-right: -10px;background-color:#fff01;margin-top:5px;color:white">
               <center><img style="max-height: 575px; max-width: 100%;" src="_img/products/<?php echo $im_name;?>" class="img-responsive my_img" alt="image here"></center>
               <br/> 
           </div>
        </div>

            <?php } ?>
            </div>
        </div>
        </div>
    </div>
    </div>
        
        
        
        
        
	 		<?php			
        }
        mysqli_close($login_db);
        ?>