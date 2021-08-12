<?php 
    if(isset($_GET['lang'])){
        $GETLANG = $_GET['lang'];
    }
?>
<section class="slider-home slider-home-2019">
    <div class="slider-banner-full" >
    <!-- <div class="industry_banner_text hire-developer-banner">
        <article>
            <h1 class="gold-gradient-color">
                A CLIENT-CENTRIC APPROACH 
                <br/>AS A BASE VALUE 
            </h1>
            <p>You can rely on us for the success of your projects </p>
        </article>
    </div> -->
    <div class="container banner-div-about">
        <div style="text-align:right;">
            <h2 style="font-family: open-sans-bold;font-size: 38px !important;">
                <?php if($GETLANG == 'en'){
                    echo "A CLIENT-CENTRIC APPROACH <br/>AS A BASE VALUE";
                } else {
                    // echo "UNE APPROCHE BASÉE SUR LA SATISFACTION<br/>DE NOS CLIENTS";
                    echo "LA QUALITÉ AU RENDEZ-VOUS !"; 
                }
                ?>
            </h2>
            <p>
                <?php if($GETLANG == 'en'){
                    echo "You can rely on us for the success of your projects ";
                } else {
                    echo "Lorsque notre agence s'engage dans un projet, c'est pour le mener à bien, et ce à tout prix !"; 
                }
                ?>
            </p>
        </div>
    </div>
    </div>
</section>
<?php
if($GETLANG =='en') {
    $title_text = "Our<span> priorities</span>";
    $point1_text = "To respond fully to the needs of our customers";
    $point2_text = "To deliver our products within the deadlines";
    $point3_text = "To support the customer during the development and post-delivery phases";
    $point4_text = "To be flexible in management so as to adapt to the specific needs of each customer.";
    $desciption_text = "Throughout our history we have created a wealth of technological and management know-how which is embodied in a set of organisational tools and methods for the development, verification and validation of hardware and software.";
    // description section 3
    $title_section3 = "QA standards that shaped <span> the development and quality</span>";
    $desciption_section3 = "Falcon Consulting performs quality assurance throughout the process of entire project development. Our QA team is indulged in testing at all the stages and assures to deliver error-free products. Right from the requirement analysis till deployment, we make it a priority to loop our QA team in order to chart a better understanding amongst them. Our QA approach is being graphed in the following way:";
    $point1_title_section3 = "Planning and requirement analysis";
    $point2_title_section3 = "Code Review";
    $point3_title_section3 = "Immediate testing";
    $point4_title_section3 = "Final verification";
    $point1_description_section3 = "We specify the project test cases along with its elaboration. Teams are assigned as required.";
    $point2_description_section3 = "Profound testing is being conducted at the time of delivering and according to the test cases and plans is refined.";
    $point3_description_section3 = "For the just build products, we ensure to run QA test for to meet with the foreseen challenges.";

}else{
    $title_text = "NOS<span> PRIORITÉS</span>";
    $point1_text = "Respecter à 100% le cahier des charges, et réaliser toutes les fonctionnalités demandées";
    $point2_text = "Livrer les produits en respectant les délais";
    $point3_text = "Accompagner notre client pendant toutes les phases du projet, et en particulier à la livraison";
    $point4_text = "Être flexible dans notre management, afin de prendre en compte tous les besoins spécifiques de nos clients";
    $desciption_text = "Tout au long de notre expérience, nous avons développé des méthodologies de travail qui permettent de garantir une totale transparence à nos clients, et de permettre une gestion de la qualité optimale. ";
    // description section 3
    $title_section3 = "LA GESTION DE LA QUALITÉ AU CENTRE DE NOS RÉALISATIONS";
    $desciption_section3 = "Falcon Consulting réalise une process qualité pendant toutes les phases de réalisation de nos projets. Notre équipe qualité s'efforce de tester toutes les pages et fonctionnalités de nos applications, afin de livrer un produit fini sans erreurs. Ce process commence à l'analyse des spécifications, et va jusqu'à la phase finale de livraison. Notre approche qualité est la suivante";
    $point1_title_section3 = "Analyse des spécifications";
    $point2_title_section3 = "Vérification du code";
    $point3_title_section3 = "Tests en continu";
    $point4_title_section3 = "Tests finaux";
    $point1_description_section3 = "Nous éprouvons avec vigueur le cahier des charges, afin d'anticiper toute éventuelle difficulté";
    $point2_description_section3 = "Le code est revu régulièrement par l'équipe qualité et par le directeur technique";
    $point3_description_section3 = "Nous testons continuellement nos applications afin de nous assurer que le code est qualitatif à tout moment";
    $point4_description_section3 = "Avant de livrer notre produit, il est éprouvé à nouveau par nos équipes de testeurs";
}
?>
<div class="text-description">
    <div class="SpacingBox"></div>
    <div class="SpacingBox"></div>
    <h2>
    <?php echo $title_text;?>
    </h2>
    <div class="wrapper-text">
        <ul class="llista">
            <li><?php echo $point1_text;?></li>
            <li><?php echo $point2_text;?></li>
            <li><?php echo $point3_text;?></li>
            <li><?php echo $point4_text;?></li>
        </ul>
        <p>
            <span><?php echo $desciption_text;?></span>
        </p>
    </div>
</div>
<!-- <div class="descargas">
    <div class="SpacingBox"></div>
	<div class="container">
		<h2><span>Downloads</span></h2>
		<div class="wrapper-text">
			<ul>
				<li><a href="/sites/default/files/calidad/appraisal-disclosure-statement-2015.pdf" target="_blank">Appraisal Disclosure Statement</a></li>
				<li><a href="/sites/default/files/calidad/Statement-CMMI.pdf" target="_blank">Statment of Scampi Class A Appraisal</a></li>
				<li><a href="/sites/default/files/calidad/ISO9001-EN.pdf" target="_blank">ISO 9001</a></li>
				<li><a href="/sites/default/files/calidad/gtd_sistemas_de_informacion_pecal.pdf" target="_blank">PECAL 2100-2210</a></li>
				<li><a href="/sites/default/files/calidad/iso_9001_285305_2019_aq_Iibe_enac_1_eng.pdf" target="_blank">ISO 9001:2015</a></li>
				<li><a href="/sites/default/files/calidad/Certificate-ISO27001.pdf" target="_blank">ISO 27001:2013</a></li>
			</ul>
		</div>
	</div>
</div> -->
<section class="development-life" style="padding:0px 0px 80px 0px;background-color:#fffed">
    <div class="container">
    <div class="SectionHeading">
        <h2 class="gold-gradient-color text-left"><?php echo $title_section3;?></h2>
        <p><?php echo $desciption_section3;?></p>
    </div>
    <div class="row">
        <div class="col-md-3">
            <article>
                <span>1</span>
                <h4><?php echo $point1_title_section3;?></h4>
                <p><?php echo $point1_description_section3;?></p>
            </article>
        </div>
        <div class="col-md-3">
            <article>
                <span>2</span>
                <h4><?php echo $point2_title_section3;?></h4>
                <p><?php echo $point2_description_section3;?></p>
            </article>
        </div>
        <div class="col-md-3">
            <article>
                <span>3</span>
                <h4><?php echo $point3_title_section3;?></h4>
                <p><?php echo $point3_description_section3;?></p>

            </article>
        </div>
        <div class="col-md-3">
            <article>
                <span>4</span>
                <h4><?php echo $point4_title_section3;?></h4>
                <p><?php echo $point4_description_section3;?></p>
            </article>
        </div>
    </div>
    </div>
</section>

<?php
if($GETLANG == 'en'){
    $quality_title='Fully modularized QA department';
    $quality_desc = "Falcon Consulting is reserved with an extraordinary division that is truly meant for processing the testing in the right way. Our team of astute and skilled engineers’ works dedicatedly on the assigned projects order to bring the best out of it, Depending on the project's complexity, we deploy our team that can be shifted to other in case of urgency:";
    $quality_point_heading1 = 'Profound  QA Testing';
    $quality_point_heading2 = 'Documentation and code review';
    $quality_point_heading3 = 'Defect monitoring, tracking, and fixation';
    $quality_point_heading4 = 'Configuration update and management';
    $quality_point_heading5 = 'Process and progress management';
    $quality_point_heading6 = 'Risk handling';
}else{
    $quality_title = 'NOTRE DÉPARTEMENT QUALITÉ';
    $quality_desc = "Falcon Consulting a un département qualité qui est formé à tester et éprouver chacun de ses projets. Les testeurs qualité ont une formation de développeur eux-même, ce qui permet d'identifier toute faille et de la rectifier rapidement. En fonction de la taille et de la complexité du projet, nous pouvons intégrer une équipe adaptée pour répondre aux besoins du projet.";
    $quality_point_heading1 = 'Tests Qualité avancés';
    $quality_point_heading2 = 'Analyse de la documentation';
    $quality_point_heading3 = "Management et suivie des failles jusqu'à correction";
    $quality_point_heading4 = "Équipe pouvant être dédiée à votre projet";
    $quality_point_heading5 = "Suivie de l'avancement";
    $quality_point_heading6 = 'Suivie et optimisation de tout risque';
    
}

?>
<section class="independent-box clearfix" style="padding:80px 0px">
    <div class="row" style="width:100%">
    <div class="col-md-6" style="margin-left:auto;float:right">
        <div class="SectionHeading">
            <h2 class="gold-gradient-color text-center" style="margin-left:20px"><span><?php echo $quality_title ?></span></h2>
            <p><?php echo $quality_desc ?></p>
        </div>
        <ul class="clearfix">
            <li>
                <article>
                <img decoding="async" src="_img/quality_management/clipboard.svg" />
                <h4><?php echo $quality_point_heading1; ?></h4>
                </article>
            </li>
            <li>
                <article>
                <img decoding="async" src="_img/quality_management/test.svg"/>
                <h4><?php echo $quality_point_heading2; ?></h4>
                </article>
            </li>
            <li>
                <article>
                <img decoding="async" src="_img/quality_management/monitoring.svg" />
                <h4><?php echo $quality_point_heading3; ?></h4>
                </article>
            </li>
            <li>
                <article>
                    <img decoding="async" src="_img/quality_management/file.svg">
                <h4><?php echo $quality_point_heading4; ?></h4>
                </article>
            </li>
            <li>
                <article>
                <img decoding="async" src="_img/quality_management/process.svg" >
                <h4><?php echo $quality_point_heading5; ?></h4>
                </article>
            </li>
            <li>
                <article>
                    <img decoding="async" src="_img/quality_management/protection.svg"/>
                <h4><?php echo $quality_point_heading6; ?></h4>
                </article>
            </li>
        </ul>
    </div>
    </div>
</section>