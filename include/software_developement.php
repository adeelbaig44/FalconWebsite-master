<?php
include './libraries/config.php';
if(isset($_GET['lang'])){
    $GETLANG = $_GET['lang'];
}
//-------------------------------------------------------------------------------
// if the language if english
if($GETLANG == 'en'){ ?>
<div class="PageBackgorundImage" id="webdev-bg"></div>
<div class="container carousal-inner-div" style="width:80% !important">
<!-- <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12"><center><a href="<?php if($GETLANG == 'en'){echo 'index.php?lang=en';} else{ echo 'index.php' ;} ?>"><img src="_img/logo.svg" class="img-responsive"></a></center></div> -->
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
    <h2>
    SOFTWARE DEVELOPMENT
    </h2>
    <p>Digitalize your company and gain in <br/>productivity ! </p>
</div>
</div>
<!-- <center><h2><b>Web Development</b></h2></center> -->
<div class="PageContent">
<div class="container">
<div class="SpacingBox">&nbsp;</div>
<h1>We help you to accelerate disruption both within your organizations and industries.</h1>
<h5>Strategize your new ideas and obtain real business value by getting the most out of our production-ready custom software development services!</h5>
<div class="SpacingBox">&nbsp;</div>
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12"><center><img class="img-responsive" src="_img/web_development.png" alt="" /></center></div>
</div>
</div>
<div class="SpacingBox">&nbsp;</div>
</div>
<div class="WebService">
<div class="container">
<div class="SpacingBox">&nbsp;</div>
<div class="SpacingBox">&nbsp;</div>
<div class="row"><!------------------------------------------------------------------------------------------>
<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
<div class="Box"><center><img class="img-responsive" src="_img/web_01.png" alt="" /></center>
<h4>Desktop Development</h4>
<p>Our specialists have a proven track record in developing complex desktop applications for Windows, Linux, and MacOS platforms.</p>
</div>
</div>
<!------------------------------------------------------------------------------------------>
<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
<div class="Box"><center><img class="img-responsive" src="_img/web_01.png" alt="" /></center>
<h4>Cloud Development</h4>
<p>We provide full-cycle cloud application development services, including IaaS, PaaS, SaaS, Azure, Amazon app development.</p>
</div>
</div>
<!------------------------------------------------------------------------------------------>
<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
<div class="Box"><center><img class="img-responsive" src="_img/web_01.png" alt="" /></center>
<h4>DevOps Services</h4>
<p>Our DevOps engineers help in solving the issues on the resources optimization, reassigning the load, etc.</p>
</div>
</div>
<!------------------------------------------------------------------------------------------></div>
</div>
<div class="SpacingBox">&nbsp;</div>
<div class="SpacingBox">&nbsp;</div>
</div>
<!-- new section for steps -->
<section class="falconStepBlock">
    <div class="SpacingBox"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="image-blockhh">
                <h2 style="font-size: 30px; font-family: open-sans-regular;text-transform:upercase;font-weight: 600; color: #fff; margin-bottom: 30px;">
                WHAT SERVICE ARE YOU LOOKING FOR?</h2>
                <p class="sub_text_pera">Invent, build, integrate, scale and upgrade your applications with Falcon Consulting! For more than one decade, Falcon Consulting has been harnessing digital technologies for the benefit of mid and large enterprises, and startups across the variety of industries across the world. Fully in the art and science of software engineering and management, we help you to build high-quality software solutions and products as well as deliver a wide range of related professional services.</p>
                <p class="responsive_center"><img src="_img/TeamBG/infoCardBG.png" alt="Internet Marketing Agency"></p>
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="row d-flex">
                    <div class="col-sm-6">
                        <div class="savecontent-block">
                        <h5 class="saveapp-title">Software Consulting</h5>
                        <p class="saveapp-content">A holistic set of consulting services for both new and ongoing software development projects – from ideation and feasibility study to implementation strategy.</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="savecontent-block">
                        <h5 class="saveapp-title">Custom software development</h5>
                        <p class="saveapp-content">Development of web, cloud, mobile, and desktop software solutions to address the unique complex needs or objectives of your business.</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="savecontent-block">
                        <h5 class="saveapp-title">Software product development</h5>
                        <p class="saveapp-content">Development of single- / multi-tenant SaaS, mobile and desktop applications for marketing, distributing to mass enterprise/consumer users and many more businesses.</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="savecontent-block">
                        <h5 class="saveapp-title">Software development outsourcing</h5>
                        <p class="saveapp-content">Shouldering complete software development project pipeline or its part of startups, mid and large enterprises to support their business growth.</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="savecontent-block">
                        <h5 class="saveapp-title">Enterprise application services</h5>
                        <p class="saveapp-content">A broad set of services – Help Desk & Support, cloud migration, legacy reengineering, and more – to keep your business-critical applications healthy and stable.</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="savecontent-block">
                        <h5 class="saveapp-title">Development team augmentation</h5>
                        <p class="saveapp-content">More than 50 IT specilists to help you handle the lack of your internal resources and capabilities.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="SpacingBox"></div>
</section>
<?php
// --------------------------------------------------end of if ------------------------------
}else{
//-------------------------------------------------------------------------------------------
// if language is not english
?>
<div class="PageBackgorundImage" id="webdev-bg">
</div>
<div class="container carousal-inner-div" style="width:80% !important">
  <!-- <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12"><center><a href="<?php if($GETLANG == 'en'){echo 'index.php?lang=en';} else{ echo 'index.php' ;} ?>"><img src="_img/logo.svg" class="img-responsive"></a></center></div> -->
  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
    <h2>
        Développement Logiciel
    </h2>
    <p>Digitalisez votre entreprise et gagnez en productivité !</p>
  </div>
</div>
<!-- <center><h2><b>Développement Web</b></h2></center> -->
<div class="PageContent">
<div class="container">
<div class="SpacingBox">&nbsp;</div>
<h1 style="text-align:center;">Nous vous aidons à accélérer les processus au sein de votre organisation.</h1>
<h5>Élaborez une stratégie pour vos nouvelles idées et obtenez une réelle valeur commerciale en tirant le meilleur parti de nos services de développement de logiciels personnalisés prêts pour la production!</h5>
<div class="SpacingBox">&nbsp;</div>
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12"><center><img class="img-responsive" src="_img/web_development.png" alt="" /></center></div>
</div>
</div>
<div class="SpacingBox">&nbsp;</div>
</div>
<div class="WebService">
<div class="container">
<div class="SpacingBox">&nbsp;</div>
<div class="SpacingBox">&nbsp;</div>
<div class="row"><!------------------------------------------------------------------------------------------>
<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
<div class="Box"><center><img class="img-responsive" src="_img/web_01.png" alt="" /></center>
<h4>Développement d'applications de bureau</h4>
<p>Nos spécialistes ont fait leurs preuves dans le développement d'applications de bureau complexes pour les plates-formes Windows, Linux et MacOS.</p>
</div>
</div>
<!------------------------------------------------------------------------------------------>
<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
<div class="Box"><center><img class="img-responsive" src="_img/web_01.png" alt="" /></center>
<h4>Développement pour le cloud</h4>
<p>Développement pour le cloud

Nous fournissons des services de développement d'applications cloud à cycle complet, y compris le développement d'applications IaaS, PaaS, SaaS, Azure et Amazon.</p>
</div>
</div>
<!------------------------------------------------------------------------------------------>
<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
<div class="Box"><center><img class="img-responsive" src="_img/web_01.png" alt="" /></center>
<h4>Services DevOps</h4>
<p>Nos ingénieurs DevOps aident à résoudre les problèmes d'optimisation des ressources, de répartition de la charge, etc.</p>
</div>
</div>
<!------------------------------------------------------------------------------------------></div>
</div>
<div class="SpacingBox">&nbsp;</div>
<div class="SpacingBox">&nbsp;</div>
</div>
<!-- new section for steps -->
<section class="falconStepBlock">
    <div class="SpacingBox"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="image-blockhh">
                <h2 style="font-size: 30px; font-family: open-sans-regular;text-transform:upercase;font-weight: 600; color: #fff; margin-bottom: 30px;">
                QUEL SERVICE RECHERCHEZ-VOUS?</h2>
                <p class="sub_text_pera">Inventez, construisez, intégrez, faites évoluer et mettez à niveau vos applications avec Falcon Consulting! Depuis plus d'une décennie, Falcon Consulting exploite les technologies numériques au profit des moyennes et grandes entreprises et des startups de divers secteurs à travers le monde. Pleinement dans l'art et la science du génie logiciel et de la gestion, nous vous aidons à créer des solutions et des produits logiciels de haute qualité, ainsi qu'à fournir une large gamme de services professionnels connexes.</p>
                <p class="responsive_center"><img src="_img/TeamBG/infoCardBG.png" alt="Internet Marketing Agency"></p>
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="row d-flex">
                    <div class="col-sm-6">
                        <div class="savecontent-block">
                        <h5 class="saveapp-title">Conseil en logiciel</h5>
                        <p class="saveapp-content">Un ensemble complet de services de conseil pour les projets de développement de logiciels nouveaux et en cours - de l'étude d'idéation et de faisabilité à la stratégie de mise en œuvre.</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="savecontent-block">
                        <h5 class="saveapp-title">Développement de logiciels personnalisés</h5>
                        <p class="saveapp-content">Développement de solutions logicielles Web, cloud, mobiles et de bureau pour répondre aux besoins ou objectifs complexes uniques de votre entreprise.</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="savecontent-block">
                        <h5 class="saveapp-title">Développement de produits logiciels</h5>
                        <p class="saveapp-content">Développement d'applications SaaS, mobiles et de bureau mono / multi-tenant pour le marketing, pour la distribution aux utilisateurs grand public et pour de nombreuses autres entreprises.</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="savecontent-block">
                        <h5 class="saveapp-title">Externalisation du développement logiciel</h5>
                        <p class="saveapp-content">Nous accompagnons des startups, des moyennes et grandes entreprises sur le pipeline de projets de développement de logiciels complets ou en partie pour soutenir la croissance de leur entreprise.</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="savecontent-block">
                        <h5 class="saveapp-title">Services d'application d'entreprise</h5>
                        <p class="saveapp-content">Un large éventail de services - Help Desk & Support, migration vers le cloud, reengineering, et plus encore - pour maintenir vos applications critiques en bonne santé et stables.</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="savecontent-block">
                        <h5 class="saveapp-title">Augmentation de votre équipe de développement</h5>
                        <p class="saveapp-content">Plus de 50 spécialistes de l'IT sont à votre disposition pour vous aider à gérer le manque de ressources et capacités internes.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="SpacingBox"></div>
</section>    
<?php
//---------------------------------------------------end of else ----------------------------------            
}
?>