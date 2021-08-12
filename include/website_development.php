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
    WEB DEVELOPMENT <br/>
    SERVICES
    </h2>
    <p>We are ready to handle your ambitious projects !</p>
</div>
</div>
<!-- <center><h2><b>Web Development</b></h2></center> -->
<div class="PageContent">
<div class="container">
<div class="SpacingBox">&nbsp;</div>
<h1>We offer innovative solutions for your projects</h1>
<h5>Being at the cutting edge of technology to allow your web application to fully express itself!</h5>
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
<h4>Conception And Design</h4>
<p>After having identified your needs, we create a modern design in line with your brand image.</p>
</div>
</div>
<!------------------------------------------------------------------------------------------>
<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
<div class="Box"><center><img class="img-responsive" src="_img/web_01.png" alt="" /></center>
<h4>Web Development</h4>
<p>We advise you on the best IT technologies to have a flexible and scalable application.</p>
</div>
</div>
<!------------------------------------------------------------------------------------------>
<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
<div class="Box"><center><img class="img-responsive" src="_img/web_01.png" alt="" /></center>
<h4>Testing And Deployment</h4>
<p>Before the official deployment, your application is tested with a test phase to ensure the best final rendering.</p>
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
                We are a multi-talented web development company that provides unique, dynamic and innovative custom website development services.</h2>
                <p class="sub_text_pera">By developing a strategy that will allow you to have the best possible website development services at a minimal cost. Therefore, by applying all our expertise to create a visually appealing and appealing website that no user will admit to leaving your site without becoming your customer.</p>
                <p class="responsive_center"><img src="_img/TeamBG/webInfo.png" alt="Internet Marketing Agency"></p>
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="row d-flex">
                    <div class="col-sm-6">
                        <div class="savecontent-block">
                        <h5 class="saveapp-title">Usability</h5>
                        <p class="saveapp-content">Our web applications are process-driven and are able to streamline and trigger actions based on current events, resulting in superior quality, consistency and speed.</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="savecontent-block">
                        <h5 class="saveapp-title">Accessibility</h5>
                        <p class="saveapp-content">Web applications run on most Internet-enabled devices, giving you the widest possible audience for the cost of production.</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="savecontent-block">
                        <h5 class="saveapp-title">Always Up To Date</h5>
                        <p class="saveapp-content">We make sure your application is up to date with the latest industry standard tools and technologies. More often than not, with advances in technology, cloud-based software can be updated immediately, reducing the IT costs involved.</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="savecontent-block">
                        <h5 class="saveapp-title">Centralized</h5>
                        <p class="saveapp-content">A centralized database to keep your data and application in a secure location. Accessing this database on multiple servers in separate locations for backup or loading provides you with a high level of resilience and reduces business risk.</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="savecontent-block">
                        <h5 class="saveapp-title">Information Architecture</h5>
                        <p class="saveapp-content">We are perfectly able to assign objectives to each element so that your web application looks organized with useful and logical information.</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="savecontent-block">
                        <h5 class="saveapp-title">Customized</h5>
                        <p class="saveapp-content">Our applications are tailor-made for a logical approach and use the functionalities derived from the web application for further use of your company's statistics, goals and objectives.</p>
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
    DÉVELOPPEMENT WEB <br/>
    PRESTATIONS DE SERVICE
    </h2>
    <p>Nous sommes prêts à gérer vos projets ambitieux!</p>
  </div>
</div>
<!-- <center><h2><b>Développement Web</b></h2></center> -->
<div class="PageContent">
<div class="container">
<div class="SpacingBox">&nbsp;</div>
<h1 style="text-align:center;">Nous proposons des solutions novatrices pour vos projets&nbsp;</h1>
<h5>Etant &agrave; la pointe de la technologie afin de permettre &agrave; votre application web de s'exprimer pleinement !</h5>
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
<h4>Conception et Design</h4>
<p>Apr&egrave;s avoir cern&eacute; votre besoin, nous r&eacute;alisons un design moderne et en ad&eacute;quation avec votre image de marque.</p>
</div>
</div>
<!------------------------------------------------------------------------------------------>
<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
<div class="Box"><center><img class="img-responsive" src="_img/web_01.png" alt="" /></center>
<h4>D&eacute;veloppement web</h4>
<p>Nous vous conseillons sur les meilleurs technologies informatiques afin d'avoir une application flexible et scalable.</p>
</div>
</div>
<!------------------------------------------------------------------------------------------>
<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
<div class="Box"><center><img class="img-responsive" src="_img/web_01.png" alt="" /></center>
<h4>Tests et D&eacute;ploiement</h4>
<p>Avant le d&eacute;ploiement officiel, votre application est epprouv&eacute;e avec une phase de test, afin de s'assurer du meilleur rendu final.</p>
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
                Nous sommes une société de développement Web multi-talentueuse qui fournit des services de développement de site Web personnalisés uniques, dynamiques et innovants.</h2>
                <p class="sub_text_pera">En élaborant une stratégie qui vous permettra d’avoir les meilleurs services de développement de sites Web possible à un coût minimal. Par conséquent, en appliquant toute notre expertise pour créer un site Web attrayant et visuellement attrayant, qu'aucun utilisateur n'admettra avoir quitté votre site sans devenir votre client.</p>
                <p class="responsive_center"><img src="_img/TeamBG/webInfo.png" alt="Internet Marketing Agency"></p>
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="row d-flex">
                    <div class="col-sm-6">
                        <div class="savecontent-block">
                        <h5 class="saveapp-title">Utilisabilité</h5>
                        <p class="saveapp-content">Nos applications Web sont motivées par le processus et sont capables de rationaliser les choses et de déclencher des actions en fonction d'événements courants, ce qui se traduit par une qualité, une cohérence et une vitesse supérieures.</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="savecontent-block">
                        <h5 class="saveapp-title">Accessibilité</h5>
                        <p class="saveapp-content">Les applications Web fonctionnent sur la plupart des appareils compatibles Internet, ce qui vous permet d’avoir l’audience la plus large possible par rapport au coût de production.</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="savecontent-block">
                        <h5 class="saveapp-title">Toujours À Jour</h5>
                        <p class="saveapp-content">Nous nous assurons que votre application est à jour avec les derniers outils et technologies conformes aux normes de l'industrie. Le plus souvent, avec les avancées technologiques, les logiciels en cloud peuvent être mis à jour immédiatement, réduisant ainsi les coûts informatiques impliqués.</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="savecontent-block">
                        <h5 class="saveapp-title">Centralisé</h5>
                        <p class="saveapp-content">Une base de données centralisée pour conserver vos données et votre application dans un endroit sécurisé. Accéder à cette base de données sur plusieurs serveurs dans des emplacements distincts pour effectuer une sauvegarde ou un chargement vous offre une grande résilience et réduit les risques pour l'entreprise.</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="savecontent-block">
                        <h5 class="saveapp-title">Architecture De L'information</h5>
                        <p class="saveapp-content">Nous sommes parfaitement à même d'attribuer les objectifs à chaque élément afin que votre application Web semble organisée avec des informations utiles et logiques.</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="savecontent-block">
                        <h5 class="saveapp-title">Sur Mesure</h5>
                        <p class="saveapp-content">Nos applications sont conçues sur mesure pour une approche logique et utilisent les fonctionnalités dérivées de l'application Web pour une utilisation ultérieure des statistiques, buts et objectifs de votre entreprise.</p>
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