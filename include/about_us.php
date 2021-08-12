<?php
    include './libraries/config.php';
    if(isset($_GET['lang'])){
        $GETLANG = $_GET['lang'];
    }
	  $GetPageContents = mysqli_query($login_db,"SELECT * FROM im_page_content WHERE page_id='7'") or die("Error with querry");
				if ($row = mysqli_fetch_assoc($GetPageContents))
				{
				$cont_heading    = $row['cont_heading'];
				$page_heading    = $row['page_heading'];
                if($GETLANG == 'en'){
                    $page_content = $row['en_page_content'];
                }else{
				    $page_content    = $row['page_content'];
                }
	            $content_image   = $row['content_image'];
				
				
	?>
   


<?php if ($GETLANG == 'en'){ 
    $info_section_title =  "Accessible price, with no compromise on <br/>the Quality!";
    $info_section_desc = "Modern IT agency with high skilled members";
    $info_section_dash_text = "We Are";
    $info_section_icon_1_text = "Office Location";
    $info_section_icon_2_text = "Projects";
    $info_section_icon_3_text = "Experience";
    $info_section_icon_4_text = "Clients satisfaits";
    $info_section_icon_heading_1_text = "3"; 
    $info_section_icon_heading_2_text = "50+"; 
    $info_section_icon_heading_3_text = "15 Years"; 
    $info_section_icon_heading_4_text = "25+"; 
  
}else{ 
    $info_section_title =  "PRIX ACCESSIBLE, SANS COMPROMIS SUR <br/>LA QUALITÉ";
    $info_section_desc = "Une équipe utilisant des technologies modernes, et avec de grandes ambitions pour vos projets !";
    $info_section_dash_text = "NOUS SOMMES";
    $info_section_icon_1_text = "Pays";
    $info_section_icon_2_text = "Projets";
    $info_section_icon_3_text = "d'expérience";
    $info_section_icon_4_text = "Clients satisfaits";
    $info_section_icon_heading_1_text = "3"; 
    $info_section_icon_heading_2_text = "50+"; 
    $info_section_icon_heading_3_text = "15 années"; 
    $info_section_icon_heading_4_text = "25+"; 
  
} 
?>

<img class="responsive" src="_img/background/HomeMain.png" alt="main_about_bg_image" style="height:99vh;object-fit:cover;object-position:center">
<div class="container banner-div-about">
        <div style="text-align:right;">
            <h2 style="font-family: open-sans-bold;font-size: 38px !important;">
                <?php if($GETLANG == 'en'){
                    echo "OUR GOAL IS TO EXCEED<br/>YOUR EXPECTATIONS";
                } else {
                    echo "NOTRE OBJECTIF : LA SATISFACTION CLIENT <br/> SANS COMPROMIS !"; 
                }
                ?>
            </h2>
            <p>
                <?php if($GETLANG == 'en'){
                   echo "Healthy, skilled and ambitious team";
                }else{
                    echo "De la phase de pré-développement au service après-vente, vivez une expérience de qualité";
                }
                ?>
            </p>
        </div>
</div>
<div class="AboutUsPage">
    <div class="container">
    <!-- <center><hr style="width:30%;border-color:black"/></center> -->

      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
            <div class="SpacingBox"></div>
            <center>
                <img class="img-responsive" src="_img/logo.svg" style="width:90%" />
            </center>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-8 col-xl-8">
        <div class="SpacingBox"></div>
        <center><h2 style='color:#489bd4'><b>
            <?php if($GETLANG == 'en'){
                echo "About Falcon Consulting";
            } else {
                echo "À propos de Falcon Consulting"; }?>
            </b></h2></center>
        <!-- <div class="SpacingBox"></div> -->
    	<p style="font-size:16px;text-align:left;">
    	    <?php 
            echo $page_content;
                }
            mysqli_close($login_db);
            ?>
        </p>
        </div>
      </div>
         <!-- <div class="SpacingBox"></div> -->
         <!--<div class="SpacingBox"></div>-->
         
    </div>
    <div class="SpacingBox"></div>
    <section class="about-falcon-block">
        <div class="SpacingBox"></div>
        <div class="container text-center">
            <h3><?php echo $info_section_title;?></h3>
            <p class="falcon-who"><?php echo $info_section_dash_text ?></p>
            <h5><?php echo $info_section_desc; ?></h5>
            <div class="block-with-info">
                <div class="row">
                    <div class="col-sm-3 col-md-2">
                        <div class="info-box">
                            <img src="_img/svg/location.svg" alt="icon" />
                            <p class="info-header"><?php echo $info_section_icon_heading_1_text;?></p>
                            <p class="info-description"><?php echo $info_section_icon_1_text;?></p>
                        </div>
                    </div>
                    <div class="col-sm-3 col-md-2">
                        <div class="info-box">
                            <img src="_img/svg/computer.svg" alt="icon" />
                            <p class="info-header"><?php echo $info_section_icon_heading_2_text;?></p>
                            <p class="info-description"><?php echo $info_section_icon_2_text;?></p>
                        </div>
                    </div>
                    <div class="col-sm-3 col-md-2">
                        <div class="info-box">
                            <img src="_img/svg/team.svg" alt="icon" />
                            <p class="info-header"><?php echo $info_section_icon_heading_3_text;?></p>
                            <p class="info-description"><?php echo $info_section_icon_3_text;?></p>
                        </div>
                    </div>
                    <div class="col-sm-3 col-md-2">
                        <div class="info-box">
                            <img src="_img/svg/start-up.svg" alt="icon" />
                            <p class="info-header"><?php echo $info_section_icon_heading_4_text;?></p>
                            <p class="info-description"><?php echo $info_section_icon_4_text;?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php if ($GETLANG == 'en'){ 
        $heading =  "Our Vision";
        $sub_heading = "We believe that talent and skills do not have borders.";
        $description = 'We are a human-oriented company, investing in training, healthy atmosphere and cooperative management to make sure our employees reach their full potential, and personally develop through their work. Our team is sensitized every day about the importance of quality management, and we strive to put in place a continuous improvement process internally.';
        
    }else{ 
        $heading =  "Notre vision";
        $sub_heading = "Nous investissons grandement dans chacun de nos collaborateurs!";
        $description = "Nous sommes une entreprise à taille humaine, investissant jour après jour dans la formation de nos équipe, en leur transmettant la notion de la satisfaction client. 
        Notre process d'amélioration continue vise à s'assurer que chaque membre de l'équipe atteint son potentiel maximum, et s'épanouit pleinement à travers ses projets. 
        Notre objectif est d'atteindre et d'excéder les attentes de nos clients, et cela est un élément central dans les décisions prises chaque jour.";
        
    } 
    ?>
    <!-- our vision section -->
    <section class="our-vision-block" style="background-color:#f1f7f7">
        <div class="SpacingBox"></div>
        <div class="container">
            <div class="row">
            
                    <div class="col-sm-12 col-md-4" style="margin-top:6em;">
                        <img src="_img/our-vision.png" style='width:100%' />
                    </div>
                    <div class="col-sm-12 col-md-8 our-vision-text-section">
                        <h3><?php echo $heading; ?></h3>
                        <h5><?php echo $sub_heading; ?></h5>
                        <p><?php echo $description; ?></p>
                    </div>
            </div>
        </div>
    </section>
    <div class="SpacingBox"></div>
    <div>
	    <?php
        if($GETLANG == 'en'){ 
         echo  "<h1 style='color:#489bd4'  class=\"text-center\">Our Clients</h1>";
        } else{
         echo  "<h1 style='color:#489bd4' class=\"text-center\">Nos Clients</h1>";
        }
        ?>   
    </div>
    <center><hr style="width:20%;border-color:black"/></center>
    <!-- <div class="SpacingBox"></div> -->
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
                $ct_name    = $row['ct_name'];
				?>
				<div class="col-xs-6 col-sm-6 col-md-4 client-logo">
				    <div class="img_section">
					    <center><img class="img-responsive" id="client<?php echo $ct_id; ?>" src="_img/clients/<?php echo $ct_image;?>"  alt="<?php echo $ct_name ?>"></center>  
				    </div>
				</div><?php }
        mysqli_close($login_db);
        ?>
		
	</div>
	    <div class="SpacingBox"></div>
        <div class="SpacingBox"></div>
	</div>
</div>
<div class="SpacingBox1"></div>
<?php
if($GETLANG == 'en') {
    $section1_heading="IN-HOUSE TEAM";
    $section2_heading="TECHNOLOGIES ";
    $section3_heading="USER-FOCUSED PROCESS";
    $section4_heading="SMOOTH COMMUNICATION";
    $section5_heading="HIGH QUALITY CODE";
    $section6_heading="TRANSPARENCY";
    $section7_heading="FULL FLEXIBILITY";
    $section8_heading="CAN-DO ATTITUDE";
    $section9_heading="6 YEARS' EXPERIENCE";
    $section1_description="Excellent team of intelligent and experienced Developers and designers at your disposal, trained to meet challenges with out-of-the box solutions.";
    $section2_description="We are well aligned team with extensive knowledge of technology and latest development trends, technology is vital for us to thrive.";
    $section3_description="Agility is all about bringing ease to our clients, we have formulated our development process to make things as easy for our clients as they can be.";
    $section4_description="Now connect anytime with our project managers, and get a detailed information on your projects progress, we are prepared for last minute changes.";
    $section5_description="Strong command over latest development platforms and frameworks, now unleash high-end security, agility and high functionality.";
    $section6_description="Quality, Time, Cost and Value – our 4 pillars that help us ensure transparency in our development work and maintain long term relations with our esteemed clients.";
    $section7_description="Our development process is uniquely made to serve and fit the requirements of Startups, SME’s and big corporates, that help us flexibly revitalise your apps and websites.";
    $section8_description="We look challenges as opportunities, we retaliate with robust solutions and extensive knowledge of development and attain victory.";
    $section9_description="Impeccable work record of 7+ years and a legacy of world class development, our portfolio tells the tale of your wonderful journey.";

}else{
    $section1_heading="DEVELOPPEMENT EN INTERNE";
    $section2_heading="TECHNOLOGY STACK";
    $section3_heading="SATISFACTION CLIENT";
    $section4_heading="COMMUNICATION EFFICACE";
    $section5_heading="CODE DE QUALITÉ";
    $section6_heading="TRANSPARENCY";
    $section7_heading="FLEXIBILITÉ TOTALE";
    $section8_heading="ATTITUDE DE RÉUSSITE";
    $section9_heading="6 ANNÉES D'EXPÉRIENCE RÉUSSIE";
    $section1_description="Excellent équipe de talentueux et expérimentés développeurs à votre disposition, formés pour atteindre les objectifs fixés.";
    $section2_description="Utilisation de technologies modernes et à la pointe de la technologie, grâce à une veille active des tendances du moment. ";
    $section3_description="Notre approche Agile permet une expérience cliente très confortable. Nos étapes de validation permettent de garder une transparence totale tout au long de la réalisation. ";
    $section4_description="Notre équipe fait preuve d'une grande disponibilité et réactivité, afin de transmettre l'avancée du projet. Nous sommes flexibles pour tout changement de dernière minute. ";
    $section5_description="Rigueur dans la réalisation d'un code à la fois lisible, structuré et sécurisé. ";
    $section6_description="Qualité, Temps, Coût et Valeur - nos 4 piliers qui nous permettent d'assurer une transparence dans notre développement et maintenir des relations de longue durée avec nos clients.";
    $section7_description="Notre process de développement permet de prendre en compte toutes les demandes de nos clients, que ce soit une Start-Up ou un Grand Compte.";
    $section8_description="Nous sommes tous les jours confrontés à des challenges techniques, et nous aimons cela ! Notre équipe expérimenté est formée pour atteindre les objectifs. ";
    $section9_description="De nos débuts à aujourd'hui, nous nous efforçons de garder les meilleurs relations avec nos clients.";
}
?>
<!-- <section class="our-team-lead">
    <center><h2 class="gold-gradient-color text-center"><?php if($GETLANG == 'en'){ echo 'Team Leaders'; }else{ echo 'Team Leaders'; } ?></h2></center>
    <div class="SpacingBox"></div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-4">
                <img src="_img/faculty/placeholder.jpg" alt="Zain Asif" class="img-responsive leader__img">
                <div class="leader__info">
                    <h2>Zain Asif</h2>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fuga, assumenda.</p>
                </div>
            </div>
            <div class="col-sm-12 col-md-4">
                <img src="_img/faculty/placeholder.jpg" alt="Bilawal Asghar" class="img-responsive leader__img">
                <div class="leader__info">
                    <h2>Bilawal Asghar</h2>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fuga, assumenda.</p>
                </div>
            </div>
            <div class="col-sm-12 col-md-4">
                <img src="_img/faculty/placeholder.jpg" alt="Adeel Baig" class="img-responsive leader__img">
                <div class="leader__info">
                    <h2>Adeel Baig</h2>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fuga, assumenda.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="SpacingBox"></div>
</section> -->
<section class="card-new-block">
    <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-4 row-col">
            <div class="card-box">
                <span class="card-number">1</span>
                <center><img src="_img/android_logo.png" class="img_responsive new-card__img"/></center>
                <h3><?php echo $section1_heading;?></h3>
                <p><?php echo $section1_description;?></p>
            </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-4 row-col">
            <div class="card-box">
                <span class="card-number">2</span>
                <center><img src="_img/aboutus_svg/technology.svg" class="img_responsive new-card__img"/></center>

                <h3><?php echo $section2_heading;?></h3>
                <p><?php echo $section2_description;?></p>
            </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-4 row-col">
            <div class="card-box">
                <span class="card-number">3</span>
                <center><img src="_img/aboutus_svg/user-focus-process.svg" class="img_responsive new-card__img"/></center>

                <h3><?php echo $section3_heading;?></h3>
                <p><?php echo $section3_description;?></p>
            </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-4 row-col">
            <div class="card-box">
                <span class="card-number">4</span>
                <center><img src="_img/aboutus_svg/smoth-communication.svg" class="img_responsive new-card__img"/></center>

                <h3><?php echo $section4_heading;?></h3>
                <p><?php echo $section4_description;?></p>
            </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-4 row-col">
            <div class="card-box">
                <span class="card-number">5</span>
                <center><img src="_img/aboutus_svg/high-quality-code.svg" class="img_responsive new-card__img"/></center>

                <h3><?php echo $section5_heading;?></h3>
                <p><?php echo $section5_description;?></p>
            </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-4 row-col">
            <div class="card-box">
                <span class="card-number">6</span>
                <center><img src="_img/aboutus_svg/transparent.svg" class="img_responsive new-card__img"/></center>

                <h3><?php echo $section6_heading;?></h3>
                <p><?php echo $section6_description;?></p>
            </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-4 row-col">
            <div class="card-box">
                <span class="card-number">7</span>
                <center><img src="_img/aboutus_svg/flexible.svg" class="img_responsive new-card__img"/></center>

                <h3><?php echo $section7_heading;?></h3>
                <p><?php echo $section7_description;?></p>
            </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-4 row-col">
            <div class="card-box">
                <span class="card-number">8</span>
                <center><img src="_img/aboutus_svg/attiude.svg" class="img_responsive new-card__img"/></center>

                <h3><?php echo $section8_heading;?></h3>
                <p><?php echo $section8_description;?></p>
            </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-4 row-col">
            <div class="card-box">
                <span class="card-number">9</span>
                <center><img src="_img/aboutus_svg/year-exp.svg" class="img_responsive new-card__img"/></center>

                <h3><?php echo $section9_heading;?></h3>
                <p><?php echo $section9_description;?></p>
            </div>
        </div>
    </div>
</section>     
     
<div class="SpacingBox1"></div>
<div class="SpacingBox1"></div>