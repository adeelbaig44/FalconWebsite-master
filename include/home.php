<?php 
include 'libraries/config.php';
include "libraries/web_slider.php";
if(isset($_GET['lang'])){
$GETLANG = $_GET['lang'];}
?>
<!-- slider icons
<div class="customer-logos" style="border-bottom:1px solid #ededed">
<?php  
    $GetData = mysqli_query($login_db,"SELECT * FROM sm_projects where pr_id !=32")or die("Error Fetching");
    while ($row = mysqli_fetch_array($GetData)){
      $pr_id  =	$row['pr_id'];
      $pr_main_image =	$row["pr_logo"];
	?>
      <div class="slide"><img src="_img/products/<?php echo $pr_main_image;?>"></div>
  <?php 
    }
  ?>
</div> -->
<!-- new slider -->
<center>
  <div id="jssor_1" class="jssor_home">
      <div data-u="slides" class="jssor__inner_div">
      <?php  
        $GetData = mysqli_query($login_db,"SELECT * FROM sm_projects where pr_id !=32")or die("Error Fetching");
        while ($row = mysqli_fetch_array($GetData)){
          $pr_id  =	$row['pr_id'];
          $pr_main_image =	$row["pr_logo"];
      ?>
          <div class="slide_jssor"><img data-u="image" style="padding:10px" src="_img/products/<?php echo $pr_main_image;?>"></div>
      <?php 
        }
      ?>
      </div><a data-scale="0" href="https://www.jssor.com" style="display:none;position:absolute;">web design</a>
  </div>
</center>
<!-- new About -->
<!-- <div class="SpacingBox"></div> -->
<section class="about-us z9">
  <div class="container about-us-wrapper">
    <div class="about-us-content z2">
        <?php 
        if ($GETLANG == 'en'){
          echo '<div class="h4">
            <p>Since 2015, Falcon Consulting provides full satisfaction to its clients, in realizing ambitious projects.</p>
          </div>
          <div class="b3 about-us-content__copy">
            <p>Falcon Consulting is a development agency that specializes in consulting, application development and consulting in the field of new technologies. We combine rigor, quality of work and optimized production costs.</p>
          </div>
          <a href="index.php?view=about_us&hfun=1&lang=en" class="button button--inline about-us-cta" target="_self" >
            <div class="button-content z2">
              <span class="b8 z2">SEE WHO WE ARE</span>
              <div class="svg svg--arrow button-svg_arrow"><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="svg-inline--fa fa-long-arrow-right fa-w-14" data-icon="long-arrow-right" data-prefix="fal" viewBox="0 0 448 512">
                <path fill="currentColor" d="M311.03 131.515l-7.071 7.07c-4.686 4.686-4.686 12.284 0 16.971L387.887 239H12c-6.627 0-12 5.373-12 12v10c0 6.627 5.373 12 12 12h375.887l-83.928 83.444c-4.686 4.686-4.686 12.284 0 16.971l7.071 7.07c4.686 4.686 12.284 4.686 16.97 0l116.485-116c4.686-4.686 4.686-12.284 0-16.971L328 131.515c-4.686-4.687-12.284-4.687-16.97 0z"></path>
                </svg>
              </div>  
            </div>
          </a>';
        }else{
          echo '<div class="h4">
            <p>Depuis 6 ans, Falcon Consulting accompagne au mieux ses clients dans la réalisation de leurs projets ambitieux</p>
          </div>
          <div class="b3 about-us-content__copy">
            <p>Falcon Consulting est une agence de développement qui est spécialisée en consulting, en développement d’applications et en conseil dans le domaine des nouvelles technologies. Nous allions rigueur, qualité de travail et coûts de réalisation optimisés.</p>
          </div>
          <a href="index.php?view=about_us&hfun=1" class="button button--inline about-us-cta" target="_self">
            <div class="button-content z2">
              <span class="b8 z2">EN SAVOIR PLUS</span>
              <div class="svg svg--arrow button-svg_arrow"><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="svg-inline--fa fa-long-arrow-right fa-w-14" data-icon="long-arrow-right" data-prefix="fal" viewBox="0 0 448 512">
                <path fill="currentColor" d="M311.03 131.515l-7.071 7.07c-4.686 4.686-4.686 12.284 0 16.971L387.887 239H12c-6.627 0-12 5.373-12 12v10c0 6.627 5.373 12 12 12h375.887l-83.928 83.444c-4.686 4.686-4.686 12.284 0 16.971l7.071 7.07c4.686 4.686 12.284 4.686 16.97 0l116.485-116c4.686-4.686 4.686-12.284 0-16.971L328 131.515c-4.686-4.687-12.284-4.687-16.97 0z"></path>
                </svg>
              </div>  
            </div>
          </a>';
        }?>
        <!-- <a href="" class="button button--inline about-us-cta" target="_self"> -->
      </div>
    <div class="svg svg--ruckus-mech about-us-svg about-us-svg-desktop">
      <img src="_img/we-are.png" class="img-responsive" />
    </div>    
    <div class="svg svg--ruckus-mech-mobile about-us-svg about-us-svg-mobile">
      <img src="_img/we-are.png" class="img-responsive" />
    </div>  
</div>
</section>
<!-------------------------------------Services Cards---------------------------------------->
<div class="container-fluid" style="background-color: #15304e">
<div class="ServicesCards newdesign container" id="ServicesCards">
    <div class="row">
        <div class="SpaceBox"></div>
        <h1 class="text-center" style="color:white">Services</h1>
        <br/>
        <?php
        
        $query = mysqli_query($login_db,"select * from sm_services") or die(mysqli_error());
        while ($row = mysqli_fetch_assoc($query))
				{
            $sr_id= $row['sr_id'];
            $sr_image= $row['sr_image'];
            if($GETLANG == 'en' ){
                $sr_name = $row['en_sr_name'];
                $sr_desc=$row['en_sr_desc'];
                $sr_url = $row['en_sr_url'];
             }else{
                $sr_name = $row['sr_name'];
                $sr_desc=$row['sr_desc'];
                $sr_url =$row['sr_url'];
            }
        if($sr_id != 4 and $sr_id !=1)
        {
        ?>
    <!------------------------------------------------------------------------------------------>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
          <div class="Box">
            <div class="SpacingBox"></div>
          <center><img style="wdth:110px; height:110px;" alt="service_img" src="_img/services/<?php echo $sr_image;?>" class="img-responsive"></center>
          <h4><?php echo $sr_name; ?></h4>
          <p><?php echo $sr_desc; ?></p>
              <br/>
              <center>
                  <?php
                  if($GETLANG == 'en'){ ?>
                    <a href="<?php echo $sr_url;?>">Read More</a>
                    <?php }else{ ?>
                    <a href="<?php echo $sr_url;?>">Lire la suite</a>
                  <?php } ?>
              </center>
        
          </div>
            </div>
                <?php }}
                ?>
                      

          
          <!------------------------------------------------------------------------------------------>
                
            </div>
        </div>
    <div class="SpacingBox"></div>
</div> 

<div class="SpacingBox"></div>
<!-- <hr/> -->
<!-- ------------------- -->
<section class="about-us-new">
    <div class="container about-new">
    <div class="about-left">
        <!-- <div class="card-container">
          <div class="card-div">
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
          </div>
        </div> -->
        <div class="image-container">
          <img src="_img/TeamBG/homeInfo.png" alt="card-image" class="card-image"/>
        </div>
      </div>
      <div class="about-right">
      <?php
      if($GETLANG =='en'){
        echo  '<div class="about-text-section">
          <h2>Why <span>Falcon Consulting</span></h2>
          <h2>We believe that talent and skills do not have borders.</h2>
          <br/>
          <p>We are a human-oriented company, investing in training, healthy atmosphere and cooperative management to make sure our employees reach their full potential, and personally develop through their work. Our team is sensitized every day about the importance of quality management, and we strive to put in place a continuous improvement process internally.</p>
          <p>These are the conditions to provide full satisfaction to our client, without any compromise.</p>
          <a href="#" class="about-new-link">lets talk</a>
        </div>';
      }else{
        echo  '<div class="about-text-section">
          <h2>Pourquoi choisir <span>Falcon Consulting?</span></h2>
          <h2>Nous croyons investissons grandement dans chacun de nos collaborateurs!</h2>
          <br/>
          <p>Nous sommes une entreprise à taille humaine, investissant jour après jour dans la formation de nos équipe, en leur transmettant la notion de la satisfaction client. Notre process d\'amélioration continue vise à s\'assurer que chaque membre de l\'équipe atteint son potentiel maximum, et s\'épanouit pleinement à travers ses projets. Notre objectif est d\'atteindre et d\'excéder les attentes de nos clients, et cela est un élément central dans les décisions prises chaque jour.</p>
          <p>Ce sont les conditions nécessaires pour apporter une satisfaction à 100% à nos clients, sans compromis.</p>
          <a href="#" class="about-new-link">Discutons de votre projet ! </a>
        </div>';
      
      }?>
      </div>
    </div>
</section>
<div class="SpacingBox"></div>
<!------------------------------------Projects------------------------------------>

<div class="container-fluids" style="background-color:#15304e;font-family:open-sans-regular">
    <br/>
    <!--<h1 class="text-center">Projects</h1>-->
    <?php
        if($GETLANG == 'en'){ 
         echo  "<h1 class=\"text-center\" style=\"color:white\">Latest <strong>Projects</strong></h1>";
        } else{
         echo  "<h1 class=\"text-center\" style=\"color:white\">Dernier <strong>Projets</strong></h1>";
        }
        ?>  
    <br/>
    <div class="ServicesCards newdesign container" id="ProjectsCards">
    <div class="row">

        <?php
	
	include './libraries/config.php';
$GetData = mysqli_query($login_db,"SELECT * FROM sm_projects where pr_id in( 24,25,27 )")or die("Error Fetching");
while ($row = mysqli_fetch_array($GetData)){
	

                    $pr_id             =	$row['pr_id'];
                    $pr_main_image          =	$row["pr_logo"];
        if ($GETLANG == 'en'){
                    $pr_name           =	$row['en_name'];
                    $pr_description    =	substr($row['en_description'],0,100);   
        } else{
                    $pr_name           =	$row['pr_name'];
                    $pr_description    =	substr($row['pr_description'],0,100);
        }
				?>
    <!------------------------------------------------------------------------------------------>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
   <div class="Box">
    <div class="SpacingBox"></div>
   <center><img style="wdth:100px; height:100px;margin-bottom: 10px" alt="project_img" src="_img/products/<?php echo $pr_main_image;?>" class="img-responsive"></center>
   <!-- <h4><?php echo $pr_name; ?></h4> -->
   <?php echo $pr_description; ?>...  
       <br/>
       <center>
            <?php
                if ($GETLANG == 'en'){ ?>
                    <a class="butn" href="index.php?view=project_details&pro_id=<?php echo $pr_id; ?>&lang=en">Read More</a>
                <?php } else { ?>
                    <a class="butn" href="index.php?view=project_details&pro_id=<?php echo $pr_id; ?>">Lire la suite</a>
                <?php
                            }
            ?>
       </center>
 
   </div>
    </div>
        <?php }
        ?>
               

   
   <!------------------------------------------------------------------------------------------>
        
    </div>
    <br/>
        <center>
            <?php
            if ($GETLANG == 'en'){
                echo "<a class=\"pro_btn\" href=\"index.php?view=our_projects&hfun=1&lang=en\">See all</a>";
            } else {
              echo "<a class=\"pro_btn\" href=\"index.php?view=our_projects&hfun=1\">Voir tout</a>";  
            }
            ?>
        </center>
        <div class="SpacingBox"></div>
    </div>
</div>

<!------------------------------------contact div----------------------------------------------->
<!-- start of new contact -->

<?php if ($GETLANG == 'en'){ 
  $firstNamePlaceHolder =  "Full.Name";
  $emailPlaceholder = "Email";
  $countryPlaceholder = "Country";
  $projectDescription = "Whats your project all about ?";
  $defult_budget="Select a Budget";
  $les_then_budget="Less then $1,000";
  $between_budget="Between $1,000 to $10,000";
  $greater_then_budget="Greater then $10,000";
  $not_sure_budget="Not Sure";
  
}else{ 
  $firstNamePlaceHolder =  "Prénom.et.Nom";
  $emailPlaceholder = "Adresse.E-mail";
  $countryPlaceholder = "Pays";
  $projectDescription = "Dites-nous tout à propos de votre projet !";
  $defult_budget = "Sélectionner un budget";
  $les_then_budget = "Moins de 1,000€";
  $between_budget = "Entre 1,000€ et 10,000€";
  $greater_then_budget = "Plus de 10,000€";
  $not_sure_budget = "Je ne sais pas";
  
} 
?>
<?php 	
  $GETContactDetails = mysqli_query($login_db,"SELECT * FROM sm_contact WHERE ctn_enable='1'") or die (mysqli_error());
  if ($row = mysqli_fetch_assoc($GETContactDetails))
  {
    $ctn_officename					 	= $row['ctn_officename'];
    $ctn_address		 				= $row['ctn_address'];
    $ctn_mail				 			= $row['ctn_mail'];
    $ctn_ph					 			= $row['ctn_ph'];
    $ctn_cell				 			= $row['ctn_cell'];
    $ctn_map				 			= $row['ctn_map'];
  }
?>

<section class="footer-request-form-bg" id="HomeForm">
    <div class="container=fluid contact-container">
        <div class="row">
          <div class="col-md-4">
            <div class="form-left-des"> 
              <div class="section-heading-box">
                <?php
                if ($GETLANG == 'en'){
                  echo "<h2 style='color:white;'>Tell us about your project</h2>";
                  echo "<p style='color:white'>Let’s discuss your project and find out what we can do to provide value.</p>";
                }else{
                  echo "<h2 style='color:white'>Parlez nous de votre projet</h2>";
                  echo "<p style='color:white'>Nous offrons une consultation d'une demi-heure gratuite pour identifier les besoins de votre projet. </p>";
                }
                ?>
              </div>

              <div class="form-graphic">
                <!-- <amp-img 
                  src="https://devtechnosys.com/images/2020-new/form-gr.svg" 
                  layout="responsive" 
                  width="50" 
                  height="50" 
                  class="i-amphtml-element i-amphtml-layout-responsive i-amphtml-layout-size-defined i-amphtml-layout" 
                  i-amphtml-layout="responsive"
                > -->
                  <!-- <i-amphtml-sizer slot="i-amphtml-svc" style="padding-top: 100%;"></i-amphtml-sizer> -->
                  <img  
                    src="_img/TeamBG/contactInfo.png" 
                    class="img-responsive"
                    style="width:100%;height:200px;object-fit:contain"  
                  >
                  <!-- </amp-img>    -->
              </div>
              <br/>
              <div class="social-info" >
                <i class="fa fa-phone-square"></i> <span><?php echo $ctn_ph; ?></span>
              </div>
              <div class="social-info" >
                <i class="fa fa-location-arrow"></i> <span><?php echo $ctn_address; ?></span>
              </div>
              <h3 style="color:white">
              <?php
                    if ($GETLANG == 'en'){
                        echo "Social Media";
                    } else {
                      echo "Réseaux sociaux";  
                    }
                ?>
              </h3>
              <hr/>
              <div class="social-info">
                <a href="mailto:zain.asif@falconconsulting.fr" class="fa fa-envelope"></a>
                <a href="https://www.facebook.com/FalconConsulting.fr/" target="_blank" class="fa fa-facebook-square"></a>
                <a href="https://www.linkedin.com/in/falconconsulting/" target="_blank" class="fa fa-linkedin-square"></a>
              </div>
              
              
            </div>
          </div>
          <div class="col-md-8">
              <div class="FooterForm">
                <form class="footer-form sample-form i-amphtml-form amp-form-dirty" method="post" target="_top" id="footer-form" enctype="multipart/form-data">
                    <div class="loaderBox" submitting="">
                      <div class="loaderBoxInner">
                          <amp-img src="https://devtechnosys.com/images/2019/rings-loader.svg" width="50" height="50" class="i-amphtml-element i-amphtml-layout-fixed i-amphtml-layout-size-defined" i-amphtml-layout="fixed" style="width: 50px; height: 50px;"></amp-img>
                      </div>
                    </div>
                    <div submit-success="">
                      <template type="amp-mustache">
                          {{message}}
                      </template>
                    </div>
                    <div class="sumitError" submit-error="">
                      <template type="amp-mustache">
                          Oops! Error # {{message}}.
                      </template>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                          <div class="form-group input-group">
                            <span class="input-group-addon" id="basic-addon1">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"></path><path d="M4 22a8 8 0 1 1 16 0h-2a6 6 0 1 0-12 0H4zm8-9c-3.315 0-6-2.685-6-6s2.685-6 6-6 6 2.685 6 6-2.685 6-6 6zm0-2c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4z"></path></svg>
                            </span>
                            <input type="text" name="contact_fullname" id="fullName" class="input form-control" required="" placeholder=<?php echo $firstNamePlaceHolder; ?>  required>
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-group input-group">
                            <span class="input-group-addon" id="basic-addon1">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"></path><path d="M3 3h18a1 1 0 0 1 1 1v16a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1zm17 4.238l-7.928 7.1L4 7.216V19h16V7.238zM4.511 5l7.55 6.662L19.502 5H4.511z"></path></svg>
                            </span>
                            <input reqired type="email" name="contact_email" id="email" class="input form-control" required="" placeholder=<?php echo $emailPlaceholder; ?>>
                            <!-- <span class="error-bg" visible-when-invalid="valueMissing" validation-for="email">You can't leave this field blank</span> -->
                            <!-- <span class="error-bg" visible-when-invalid="typeMismatch" validation-for="email">Please enter the correct email format </span> -->
                          </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                          <div class="form-group input-group">
                            <span class="input-group-addon" id="basic-addon1">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"></path><path d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm-2.29-2.333A17.9 17.9 0 0 1 8.027 13H4.062a8.008 8.008 0 0 0 5.648 6.667zM10.03 13c.151 2.439.848 4.73 1.97 6.752A15.905 15.905 0 0 0 13.97 13h-3.94zm9.908 0h-3.965a17.9 17.9 0 0 1-1.683 6.667A8.008 8.008 0 0 0 19.938 13zM4.062 11h3.965A17.9 17.9 0 0 1 9.71 4.333 8.008 8.008 0 0 0 4.062 11zm5.969 0h3.938A15.905 15.905 0 0 0 12 4.248 15.905 15.905 0 0 0 10.03 11zm4.259-6.667A17.9 17.9 0 0 1 15.973 11h3.965a8.008 8.008 0 0 0-5.648-6.667z"></path></svg>
                            </span>
                            <input type="text" required name="contact_country" id="countary" class="input form-control" placeholder=<?php echo $countryPlaceholder; ?> value="" required=""> 
                            <!-- <span class="error-bg" visible-when-invalid="valueMissing" validation-for="countary">You can't leave this field blank</span> -->
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-group input-group">
                            <span class="input-group-addon" id="basic-addon1">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"></path><path d="M7 4v16h10V4H7zM6 2h12a1 1 0 0 1 1 1v18a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V3a1 1 0 0 1 1-1zm6 15a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"></path></svg>
                            </span>
                            <input required type="tel" id="phoneNo" name="contact_no" class="input form-control" placeholder="06.XX.XX.XX.XX">
                            <input type="hidden" id="phoneNocode" name="phoneNocode">
                          </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                          <div class="form-group input-group">
                            <span class="input-group-addon" id="basic-addon1">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"></path><path d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm-3.5-6H14a.5.5 0 1 0 0-1h-4a2.5 2.5 0 1 1 0-5h1V6h2v2h2.5v2H10a.5.5 0 1 0 0 1h4a2.5 2.5 0 1 1 0 5h-1v2h-2v-2H8.5v-2z"></path></svg>
                            </span>
                            <select class="select form-control" name="contact_budget">
                                <!-- <option>NOT SURE</option> -->
                                <option><?php echo $defult_budget; ?></option>
                                <option><?php echo $les_then_budget; ?></option>
                                <option><?php echo $between_budget; ?></option>   
                                <option><?php echo $greater_then_budget; ?></option>
                                <option><?php echo $not_sure_budget; ?></option>

                                <!-- <option>Less than $5,000</option>
                                <option>$5,000 - $10,000</option>
                                <option>$10,000 - $20,000</option>
                                <option>$20,000 - $35,000</option>
                                <option>$35,000 - $50,000</option>
                                <option>$50,000 - $1,00,000</option>
                                <option>$1,00,000+</option> -->
                            </select>
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-group input-group">
                            <span class="input-group-addon" id="basic-addon1">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"></path><path d="M13.004 18.423a2 2 0 0 1 1.237.207 3.25 3.25 0 0 0 4.389-4.389 2 2 0 0 1-.207-1.237 6.5 6.5 0 0 0-7.427-7.427 2 2 0 0 1-1.237-.207A3.25 3.25 0 0 0 5.37 9.76a2 2 0 0 1 .207 1.237 6.5 6.5 0 0 0 7.427 7.427zM12 20.5a8.5 8.5 0 0 1-8.4-9.81 5.25 5.25 0 0 1 7.09-7.09 8.5 8.5 0 0 1 9.71 9.71 5.25 5.25 0 0 1-7.09 7.09c-.427.066-.865.1-1.31.1zm.053-3.5C9.25 17 8 15.62 8 14.586c0-.532.39-.902.928-.902 1.2 0 .887 1.725 3.125 1.725 1.143 0 1.776-.624 1.776-1.261 0-.384-.188-.808-.943-.996l-2.49-.623c-2.006-.504-2.37-1.592-2.37-2.612C8.026 7.797 10.018 7 11.89 7c1.72 0 3.756.956 3.756 2.228 0 .545-.48.863-1.012.863-1.023 0-.835-1.418-2.9-1.418-1.023 0-1.596.462-1.596 1.126 0 .663.803.876 1.502 1.035l1.836.409C15.49 11.695 16 12.876 16 13.989 16 15.713 14.675 17 12.015 17h.038z"></path></svg>
                            </span>
                            <input type="text" name="contact_skype" id="skype_Wtaap" class="input form-control" placeholder="Skype id">
                          </div>
                      </div>
                    </div>
                    <div class="form-group input-group" style="height:200px">
                      <span class="input-group-addon" id="basic-addon1">
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"></path><path d="M21 8v12.993A1 1 0 0 1 20.007 22H3.993A.993.993 0 0 1 3 21.008V2.992C3 2.455 3.449 2 4.002 2h10.995L21 8zm-2 1h-5V4H5v16h14V9zM8 7h3v2H8V7zm0 4h8v2H8v-2zm0 4h8v2H8v-2z"></path></svg>
                      </span>
                      <textarea required class="input form-control" style="height:200px" rows="5" name="contact_message" id="allabout" placeholder="<?php echo $projectDescription;?>"></textarea>
                    </div>
                    <div class="control-group ">
                      <div class="controls AttachFile">
                          <div class="form-group input-group">
                            <span class="input-group-addon" id="basic-addon1">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"></path><path d="M15 4H5v16h14V8h-4V4zM3 2.992C3 2.444 3.447 2 3.999 2H16l5 5v13.993A1 1 0 0 1 20.007 22H3.993A1 1 0 0 1 3 21.008V2.992zM11 11V8h2v3h3v2h-3v3h-2v-3H8v-2h3z"></path></svg>
                            </span>
                            <input name="contact_files" type="file" class="form-control span6" name="files[]" title="You can upload multiple file using CTRL while uploading" multiple="true"> 
                          </div>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div id="fileuploader" style="display:none;">Upload</div>
                    </div>
                    <div class="ReqBtn captchSendBg col-md-12 text-center d-flex">
                      <div class="send-btn-form">
                        <?php
                          if($GETLANG == 'en'){
                              echo "<input type=\"submit\" name=\"submit\" value=\"SEND\">";
                          }
                          else{
                              echo "<input type=\"submit\" name=\"submit\" value=\"ENVOYER\">";
                          }
                        ?>
                      </div>
                    </div>
                </form>
              </div>
          </div>
        </div>
    </div>
</section>

<!-- end of new form -->

<script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
<script>
window.sr = ScrollReveal();
sr.reveal('.social', {duration: 1500,
                       origin: 'top',
                       distance: '100px'
                      });
;
sr.reveal('.form', {duration: 1500,
                       origin: 'right',
                       distance: '100px'
                      });



</script>

<!--------------------------------------------->

<br/>

    
</div>

<div>

  	
<?php 

//  require 'phpmailer/PHPMailerAutoload.php';


function resturctureArray(array $arr){
  $result =array();
  foreach($arr as $key=> $value){
    for($i=0; $i<count($value);$i++){
      $result[$i][$key] = $value[$i];
    }
  }
  return $result;
}


if ($_SERVER["REQUEST_METHOD"] == "POST"){
		
	$contact_fullname 			= $_POST['contact_fullname'];
	$contact_email				= $_POST['contact_email'];
	$contact_no 				= $_POST['contact_no'];
	$contact_country 	     	= $_POST['contact_country'];
	$contact_skype 				= $_POST['contact_skype'];
  $contact_message 			= $_POST['contact_message'];
  $contact_budget       = $_POST['contact_budget'];
  $contact_files        = [];

  if(!empty($_FILES['contact_files'])){
    $contact_files = resturctureArray($_FILES['contact_files']);
  }



 $mail = new PHPMailer();
 $mail->isSMTP();
 $mail->Host='smtp.office365.com';  
 $mail->Port=587;
 $mail->SMTPAuth=true;
 $mail->SMTPSecure='tls';


 $mail->Username='contact@falconconsulting.fr';
 $mail->Password='F@Lc0n1234!';


 $mail->setFrom('contact@falconconsulting.fr', 'Falcon Consulting Contact',0);
//  $mail->addAddress('falconconsulting.fr@gmail.com');
 $mail -> addAddress('irtazahussain9@gmail.com');
//  $mail->addAddress('zain.asif@hotmail.fr');
//  $mail->addAddress('engr.adeelbaig@gmail.com');
//  $mail->addAddress('blawal.asghar@gmail.com');
 $mail->addReplyTo($contact_email);
  
 $mail->isHTML(true);
 $mail->Subject= "Online Inquiry and More Details";
 $mail->Body="<style>
.Heading {
	color: #000000;
	font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif;
	font-size: 24px;
	font-weight: 100;
	background-color: #F0F0F0;
	padding-top: 10px;
	padding-right: 10px;
	padding-bottom: 10px;
	padding-left: 10px;
	}
.Details {
	color: #000000;
	font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif;
	font-size: 14px;
	font-weight: 100;
	background-color: #F0F0F0;
	padding-top: 10px;
	padding-right: 10px;
	padding-bottom: 10px;
	padding-left: 10px;
	}
.DetailsMessage {
	color: #000000;
	font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif;
	font-size: 14px;
	font-weight: 100;
	padding-top: 10px;
	padding-right: 10px;
	padding-bottom: 10px;
	padding-left: 10px;
	}
.Footer {
	color: #000000;
	font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif;
	font-size: 14px;
	font-weight: 100;
	background-color: #DBDBDB;
	padding-top: 10px;
	padding-right: 10px;
	padding-bottom: 10px;
	padding-left: 10px;
	}
.Footer {
	color: #000000;
	font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif;
	font-size: 14px;
	font-weight: 100;
	background-color: #DBDBDB;
	padding-top: 10px;
	padding-right: 10px;
	padding-bottom: 10px;
	padding-left: 10px;
	}
.Footer a {
	color: #FF0000;
	font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif;
	font-size: 14px;
	font-weight: 100;
	}
</style>

<TABLE style='BORDER-RIGHT: #CCCCCC 1px solid; PADDING-RIGHT: 0px; BORDER-TOP: #CCCCCC 1px solid; PADDING-LEFT: 0px; PADDING-BOTTOM: 0px; BORDER-LEFT: #CCCCCC 1px solid; PADDING-TOP: 0px; BORDER-BOTTOM: #CCCCCC 1px solid'
height=238 cellSpacing='0' cellPadding='0' width='800'>
  <tr> 
   <td class='Heading'> <img src='http://falconitconsultant.com/_img/logo.svg' width='20%'><br>
	Falcon Consulting </td>
  </tr>
  <tr>
    <td height='37' class='DetailsMessage'>Contact Details</td>
  </tr>
  <tr>
    <td height='83' bgcolor='#EEEEEE' class='Details'><table width='100%' border='0'>
  <tbody>
    <tr>
      <td width='18%'>Full Name: </td>
      <td width='82%'>$contact_fullname</td>
    </tr>
    <tr>
      <td>Contact No.</td>
      <td>$contact_no</td>
    </tr>
    <tr>
      <td>E-Mail:</td>
      <td>$contact_email</td>
    </tr>
    <tr>
      <td>Company Name:</td>
      <td>$contact_country</td>
    </tr>
    <tr>
      <td>Skype ID:</td>
      <td>$contact_skype</td>
    </tr>
    <tr>
      <td>Budget:</td>
      <td>$contact_budget</td>
    </tr>
  </tbody>
</table></td>
  </tr>
  <tr>
    <td height='40' class='DetailsMessage'>Message: $contact_message</td>
  </tr>
</table>";
// add attachments
for($ct=0;$ct<count($_FILES['contact_files']);$ct++){
  $mail->AddAttachment($_FILES['contact_files']['tmp_name'][$ct],$_FILES['contact_files']['name'][$ct]);
}

 if(!$mail->send()){
 $Message = "<script>console.log('FAILED - ".$mail->ErrorInfo."');</script>";
 echo $Message;
 }
 else{
  $Message = "<script>console.log('Success! mail sent');</script>";
  echo $Message;
 }


/*--------------------------------------------------------------------------*/



 $mail = new PHPMailer();
 $mail->isSMTP();
 $mail->Host='smtp.office365.com';
 $mail->Port=587;
 $mail->SMTPAuth=true;
 $mail->SMTPSecure='tls';


 $mail->Username='contact@falconconsulting.fr';
 $mail->Password='F@Lc0n1234!';


 $mail->setFrom('contact@falconconsulting.fr', 'Falcon Consulting',0);
 $mail->addAddress($contact_email);
 $mail->addReplyTo('contact@falconconsulting.fr');
  
 $mail->isHTML(true);
 $mail->Subject= "Thank you For your getting in touch with us.";
 $mail->Body="
 <style>
.Heading {
	color: #000000;
	font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif;
	font-size: 24px;
	font-weight: 100;
	background-color: #ffffff;
	padding-top: 10px;
	padding-right: 10px;
	padding-bottom: 10px;
	padding-left: 10px;
	}
.Details {
	color: #000000;
	font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif;
	font-size: 14px;
	font-weight: 100;
	padding-top: 10px;
	background-color: #ffffff;
	padding-right: 10px;
	padding-bottom: 10px;
	padding-left: 10px;
	}
.DetailsMessage {
	color: #000000;
	font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif;
	font-size: 14px;
	font-weight: 100;
	background-color: #EEEEEE;
	padding-top: 10px;
	padding-right: 10px;
	padding-bottom: 10px;
	padding-left: 10px;
	}
.Footer {
	color: #000000;
	font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif;
	font-size: 14px;
	font-weight: 100;
	background-color: #DBDBDB;
	padding-top: 10px;
	padding-right: 10px;
	padding-bottom: 10px;
	padding-left: 10px;
	}
.Footer {
	color: #000000;
	font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif;
	font-size: 14px;
	font-weight: 100;
	background-color: #DBDBDB;
	padding-top: 10px;
	padding-right: 10px;
	padding-bottom: 10px;
	padding-left: 10px;
	}
.Footer a {
	color: #FF0000;
	font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif;
	font-size: 14px;
	font-weight: 100;
	}
</style>

<TABLE style='BORDER-RIGHT: #CCCCCC 1px solid; PADDING-RIGHT: 0px; BORDER-TOP: #CCCCCC 1px solid; PADDING-LEFT: 0px; PADDING-BOTTOM: 0px; BORDER-LEFT: #CCCCCC 1px solid; PADDING-TOP: 0px; BORDER-BOTTOM: #CCCCCC 1px solid'
height=238 cellSpacing='0' cellPadding='0' width='800'>
  <tr> 
   <td class='Heading'> <img src='http://falconitconsultant.com/_img/logo.svg' width='20%'><br>
	Falcon Consulting </td>
  </tr>
  <tr>
    <td height='40' class='DetailsMessage'>
	<p>Dear $contact_fullname,<br>
	Thankyou for your E-Mail.We will you contact soon!</p><br>
	<p>Kindest Regards,</strong><br>
  Falcon Consulting</strong></p></td>
  </tr>
</table>
 ";

 if(!$mail->send()){
  $Message = "<script>console.log(`FAILED1 - '$mail->ErrorInfo'`);</script>";
  echo $Message;
  }
  else{
   $Message = "<script>console.log('Success1! 2 mail sent');</script>";
   echo $Message;
  }


}
?>
</div>
</div>
</div>


<!------------------------------------------------------------------------>



	
