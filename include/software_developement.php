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
                        <p class="saveapp-content">A holistic set of consulting services for both new and ongoing software development projects ??? from ideation and feasibility study to implementation strategy.</p>
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
                        <p class="saveapp-content">A broad set of services ??? Help Desk & Support, cloud migration, legacy reengineering, and more ??? to keep your business-critical applications healthy and stable.</p>
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
        D??veloppement Logiciel
    </h2>
    <p>Digitalisez votre entreprise et gagnez en productivit?? !</p>
  </div>
</div>
<!-- <center><h2><b>D??veloppement Web</b></h2></center> -->
<div class="PageContent">
<div class="container">
<div class="SpacingBox">&nbsp;</div>
<h1 style="text-align:center;">Nous vous aidons ?? acc??l??rer les processus au sein de votre organisation.</h1>
<h5>??laborez une strat??gie pour vos nouvelles id??es et obtenez une r??elle valeur commerciale en tirant le meilleur parti de nos services de d??veloppement de logiciels personnalis??s pr??ts pour la production!</h5>
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
<h4>D??veloppement d'applications de bureau</h4>
<p>Nos sp??cialistes ont fait leurs preuves dans le d??veloppement d'applications de bureau complexes pour les plates-formes Windows, Linux et MacOS.</p>
</div>
</div>
<!------------------------------------------------------------------------------------------>
<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
<div class="Box"><center><img class="img-responsive" src="_img/web_01.png" alt="" /></center>
<h4>D??veloppement pour le cloud</h4>
<p>D??veloppement pour le cloud

Nous fournissons des services de d??veloppement d'applications cloud ?? cycle complet, y compris le d??veloppement d'applications IaaS, PaaS, SaaS, Azure et Amazon.</p>
</div>
</div>
<!------------------------------------------------------------------------------------------>
<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
<div class="Box"><center><img class="img-responsive" src="_img/web_01.png" alt="" /></center>
<h4>Services DevOps</h4>
<p>Nos ing??nieurs DevOps aident ?? r??soudre les probl??mes d'optimisation des ressources, de r??partition de la charge, etc.</p>
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
                <p class="sub_text_pera">Inventez, construisez, int??grez, faites ??voluer et mettez ?? niveau vos applications avec Falcon Consulting! Depuis plus d'une d??cennie, Falcon Consulting exploite les technologies num??riques au profit des moyennes et grandes entreprises et des startups de divers secteurs ?? travers le monde. Pleinement dans l'art et la science du g??nie logiciel et de la gestion, nous vous aidons ?? cr??er des solutions et des produits logiciels de haute qualit??, ainsi qu'?? fournir une large gamme de services professionnels connexes.</p>
                <p class="responsive_center"><img src="_img/TeamBG/infoCardBG.png" alt="Internet Marketing Agency"></p>
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="row d-flex">
                    <div class="col-sm-6">
                        <div class="savecontent-block">
                        <h5 class="saveapp-title">Conseil en logiciel</h5>
                        <p class="saveapp-content">Un ensemble complet de services de conseil pour les projets de d??veloppement de logiciels nouveaux et en cours - de l'??tude d'id??ation et de faisabilit?? ?? la strat??gie de mise en ??uvre.</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="savecontent-block">
                        <h5 class="saveapp-title">D??veloppement de logiciels personnalis??s</h5>
                        <p class="saveapp-content">D??veloppement de solutions logicielles Web, cloud, mobiles et de bureau pour r??pondre aux besoins ou objectifs complexes uniques de votre entreprise.</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="savecontent-block">
                        <h5 class="saveapp-title">D??veloppement de produits logiciels</h5>
                        <p class="saveapp-content">D??veloppement d'applications SaaS, mobiles et de bureau mono / multi-tenant pour le marketing, pour la distribution aux utilisateurs grand public et pour de nombreuses autres entreprises.</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="savecontent-block">
                        <h5 class="saveapp-title">Externalisation du d??veloppement logiciel</h5>
                        <p class="saveapp-content">Nous accompagnons des startups, des moyennes et grandes entreprises sur le pipeline de projets de d??veloppement de logiciels complets ou en partie pour soutenir la croissance de leur entreprise.</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="savecontent-block">
                        <h5 class="saveapp-title">Services d'application d'entreprise</h5>
                        <p class="saveapp-content">Un large ??ventail de services - Help Desk & Support, migration vers le cloud, reengineering, et plus encore - pour maintenir vos applications critiques en bonne sant?? et stables.</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="savecontent-block">
                        <h5 class="saveapp-title">Augmentation de votre ??quipe de d??veloppement</h5>
                        <p class="saveapp-content">Plus de 50 sp??cialistes de l'IT sont ?? votre disposition pour vous aider ?? g??rer le manque de ressources et capacit??s internes.</p>
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