<?php
    include './libraries/config.php';
    if(isset($_GET['lang'])){
        $GETLANG = $_GET['lang'];
    }              
?>
<img class="responsive" src="_img/background/team_bg.png" alt="team_bg_image" style="height:99vh;object-fit:cover;object-position:center">
<div class="container banner-div-about" style="text-align:right;align-items:flex-start">
        <div style="text-align:right;">
            <h2 style="font-family: open-sans-bold;font-size: 38px !important;">
                <?php if($GETLANG == 'en'){
                    echo "SKILLED DEVELOPERS ON DEMAND!";
                } else {
                    echo "DES DÉVELOPPEURS TALENTUEUX SUR-MESURE<br/> POUR TOUS VOS PROJETS!"; 
                }
                ?>
            </h2>
            <p>
                <?php if($GETLANG == 'en'){
                   echo "Hiring an efficient remote developer is now made easier<br/>
                   than ever ! Includes a 5 stars project management ! ";
                }else{
                    echo "Vous recherchez un développeur pour une mission courte ou de longue durée ?<br/> Ne cherchez plus, nous nous occupons de tout !";
                }
                ?>
            </p>
        </div>
</div>

<!-- hire a developer section -->
<?php 
if($GETLANG == 'en'){
    $hire_developer_title = 'Hire A Developers';
    $hire_developer_sub_title = 'Our developers are:';
    $hire_developer_point1_title = 'Agile ';
    $hire_developer_point2_title = 'Experienced';
    $hire_developer_point3_title = 'Trained';
    $hire_developer_point4_title = 'Dedicated';
    $hire_developer_point1_desc = 'We train them with Agile methodology in order for them to be fully efficient in your projects !';
    $hire_developer_point2_desc = 'We are flexible in looking for the best profile to match your requirement, and you can select among very experienced profiles';
    $hire_developer_point3_desc = 'We are training our developers in-house, on our own projects, in order to ensure that they get the soft and hard skills expected';
    $hire_developer_point4_desc = 'Our developers are working full-time on your projects, and our collaborative tools allow you to track the progress in live';
}else{
    $hire_developer_title = 'NOS DÉVELOPPEURS POUR VOS PROJETS';
    $hire_developer_sub_title = 'Nos développeurs sont:';
    $hire_developer_point1_title = 'Agile';
    $hire_developer_point2_title = 'Expérimentés';
    $hire_developer_point3_title = 'Formés';
    $hire_developer_point4_title = 'Dédiés à vos projets';
    $hire_developer_point1_desc = "Nous les formons aux méthodes de management Agile, afin d'en faire profiter pleinement nos partenaires !";
    $hire_developer_point2_desc = "Nous sommes flexibles dans la recherche du profil idéal, et nous pouvons vous proposer des profils très expérimentés";
    $hire_developer_point3_desc = 'Nous formons nous-mêmes nos développeurs en les positionnant sur des projets en interne, afin de nous assurer de leur transmettre les "soft skills" ainsi que les "hard skills"';
    $hire_developer_point4_desc = "Nos développeurs travaillent à temps plein sur vos projets, et nos outils collaboratives permettent de garantir une transparence par rapport à l'avancement des tâches";
}
?>
<section class="hire-us" style="padding:80px 0px">
    <div class="container">
    <div class="SectionHeading">
        <h4 class="gold-gradient-color"><?php echo $hire_developer_title; ?></h4>
        <p style="text-transform: uppercase;"><?php echo $hire_developer_sub_title; ?></p>
    </div>
    <div class="container" id='info-slider'>
        <div class="slider-hire owl-carousel">
            <div class="card">
                <div class="img">
                    <img src="_img/svg/agileNew.svg" alt="">
                </div>
                <div class="content">
                    <div class="sub-title title gold-gradient-color">
                        <?php echo $hire_developer_point1_title; ?>
                    </div>
                    <p style="text-align:left"><?php echo $hire_developer_point1_desc; ?></p>
                </div>
            </div>
            <div class="card">
                <div class="img">
                    <img src="_img/svg/experienced.svg" alt="">
                </div>
                <div class="content">
                    <div class="sub-title title gold-gradient-color">
                    <?php echo $hire_developer_point2_title; ?> 
                    </div>
                    <p style="text-align:left"><?php echo $hire_developer_point2_desc; ?></p>
                </div>
            </div>
            <div class="card">
                <div class="img">
                    <img src="_img/svg/wellTrained.svg" alt="">
                </div>
                <div class="content">
                    <div class="sub-title title gold-gradient-color">
                    <?php echo $hire_developer_point3_title; ?> 
                    </div>
                    <p style="text-align:left"><?php echo $hire_developer_point3_desc; ?></p>
                </div>
            </div>
            <div class="card">
                <div class="img">
                    <img src="_img/svg/dedicated.svg" alt="">
                </div>
                <div class="content">
                    <div class="sub-title title">
                    <?php echo $hire_developer_point4_title; ?>
                    </div>
                    <p style="text-align:left"><?php echo $hire_developer_point4_desc; ?></p>
                </div>
            </div>
        </div>
    </div>
    </div>  
    <center>
        <a href="index.php?view=contact_us&hfun=1">
            <button 
                class="pro_btn" 
                style="background:transparent;border:2px solid;color:#389cdd"
            ><?php if($GETLANG == 'en'){echo "Contact US";}else{ echo 'Contactez Nous'; } ?></button>
        </a>
    </center>
</div>
</section>
<?php
if($GETLANG == 'en'){
    $process_heading = "Our Process";
    $process_point1_heading = "You need a developer (or a team)";
    $process_point1_desc ="Nous organisons une réunion afin de comprendre au mieux votre besoin, ainsi que le profil idéal recherché pour votre projet. Si votre besoin change durant ce procédé, pas de panique : nous prenons en compte toute modification de dernière minute !
    We organize a meeting in order to exactly understand your needs, and the ideal profile that you are looking for. If your need has changed during this process, no worries : we take into account all last minute changes !";
    $process_point2_heading = "Targeting the ideal profile";
    $process_point2_desc ="Our turn now ! Our HR team look into a wide and skilled database of developers, in order to find you the best matches. We organize HR and technical interviews with them, so that we can propose you a pre-filtered list of candidates.";
    $process_point3_heading = " Make your choice !";
    $process_point3_desc ="Nous vous transmettons le profil des développeurs pré-sélectionnés. Vous pouvez alors décider de réaliser des entretiens avec eux, afin de vous conforter dans votre choix. Lorsque vous décidez de réaliser un entretien avec un développeur, il n'y a aucun engagement qui vous lie : gardez l'esprit libre !
    We send you the resume of the pre-filtered developers. You can then decide to move forward and interview them, in order to be sure of your choice. At this stage, there is no commitment, and you still can decide to end the process. ";
    $process_point4_heading = "Hire the ideal developer";
    $process_point4_desc ="Did you find your ideal profile ? Congratulations ! We can now sign the contract which is without long-term commitment, so that you can keep all your flexibility. The developer works directly for your projects.";
    $process_point5_heading = "Continuous improvement";
    $process_point5_desc ="At a defined frequency, we organize checkpoint meetings with you and the developer, in order to make sure everything is going fine. We detect any improvement topics, and we propose a training plan to the developer (without any cost for you !).";
    $pic_section_heading = "PROCESSING ‘IDEAS’ INTO ‘APPS’";
    $technologies_block_heading="Our Technologies";
}else {
    $process_heading = "Notre fonctionnement";
    $process_point1_heading = "Vous avez un besoin en développeur(s)";
    $process_point1_desc ="Nous organisons une réunion afin de comprendre au mieux votre besoin, ainsi que le profil idéal recherché pour votre projet. Si votre besoin change durant ce procédé, pas de panique : nous prenons en compte toute modification de dernière minute !";
    $process_point2_heading = "Ciblage du profil idéal";
    $process_point2_desc ="Pour cette étape, c'est à nous de jouer ! Notre équipe RH recherche parmi un vivier riche et talentueux de développeurs les meilleurs profils à proposer. Nous organisons des entretiens RH et techniques avec ces développeurs, afin de pré-sélectionner les meilleurs candidats.";
    $process_point3_heading = "Proposition de développeurs";
    $process_point3_desc ="Nous vous transmettons le profil des développeurs pré-sélectionnés. Vous pouvez alors décider de réaliser des entretiens avec eux, afin de vous conforter dans votre choix. Lorsque vous décidez de réaliser un entretien avec un développeur, il n'y a aucun engagement qui vous lie : gardez l'esprit libre !";
    $process_point4_heading = "Recrutement";
    $process_point4_desc ="Vous avez trouvez votre profil idéal ? Félicitations ! Nous concluons le contrat, qui est sans engagement de longue durée, afin que vous gardiez toute votre flexibilité. Le développeur travaille directement sur vos projets, sans passer par nous.";
    $process_point5_heading = "Amélioration continue";
    $process_point5_desc ="Nous organisons à une fréquence déterminée des points sur notre collaboration. Le principe est de nous assurer que la collaboration est optimale, et de cibler au mieux les points d'amélioration potentiel. Une fois repérés, nous proposons, à nos frais, une formation adéquate de nos développeurs afin d'augmenter sans cesse la qualité de la collaboration.";
    $pic_section_heading = "TRAITEMENT DES ‘IDÉES’ EN ‘APPLICATIONS’";
    $technologies_block_heading="Nos Technologies";
}

?>
<section class="TeamOperation" style="padding:80px 0px">
    <div class="SectionHeading">
        <h4 class="gold-gradient-color"><?php echo $process_heading; ?></h4>
    </div>
    <div class="container" style="font-family:open-sans-regular">
    <ul>
        <li>
            <div class="LeftOperations">
                <figure>
                <amp-img src="_img/TeamBG/hireDeveloper.png" width="585" height="400" layout="responsive" class="i-amphtml-element i-amphtml-layout-responsive i-amphtml-layout-size-defined i-amphtml-layout" i-amphtml-layout="responsive"><i-amphtml-sizer slot="i-amphtml-svc" style="padding-top: 68.3761%;"></i-amphtml-sizer><img decoding="async" src="_img/TeamBG/hireDeveloper.png" class="i-amphtml-fill-content i-amphtml-replaced-content"></amp-img>
                </figure>
            </div>
            <div class="RightOperations">
                <figcaption>
                <h4><?php echo $process_point1_heading; ?></h4>
                <p><?php echo $process_point1_desc; ?></p>
                </figcaption>
            </div>
        </li>
        <li>
            <div class="RightOperations">
                <figcaption>
                <h4><?php echo $process_point2_heading; ?></h4>
                <p><?php echo $process_point2_desc; ?></p>
                </figcaption>
            </div>
            <div class="LeftOperations">
                <figure>
                <amp-img src="_img/TeamBG/idealProfile.png" width="585" height="400" layout="responsive" class="i-amphtml-element i-amphtml-layout-responsive i-amphtml-layout-size-defined i-amphtml-layout" i-amphtml-layout="responsive"><i-amphtml-sizer slot="i-amphtml-svc" style="padding-top: 68.3761%;"></i-amphtml-sizer><img decoding="async" src="_img/TeamBG/idealProfile.png" class="i-amphtml-fill-content i-amphtml-replaced-content"></amp-img>
                </figure>
            </div>
        </li>
        <li>
            <div class="LeftOperations">
                <figure>
                <amp-img src="_img/TeamBG/makeChoice.png" width="585" height="400" layout="responsive" class="i-amphtml-element i-amphtml-layout-responsive i-amphtml-layout-size-defined i-amphtml-layout" i-amphtml-layout="responsive"><i-amphtml-sizer slot="i-amphtml-svc" style="padding-top: 68.3761%;"></i-amphtml-sizer><img decoding="async" src="_img/TeamBG/makeChoice.png" class="i-amphtml-fill-content i-amphtml-replaced-content"></amp-img>
                </figure>
            </div>
            <div class="RightOperations">
                <figcaption>
                <h4><?php echo $process_point3_heading; ?></h4>
                <p><?php echo $process_point3_desc; ?>
                </p>
                </figcaption>
            </div>
        </li>
        <li>
            <div class="RightOperations">
                <figcaption>
                <h4><?php echo $process_point4_heading; ?></h4>
                <p><?php echo $process_point4_desc; ?>
                </p>
                </figcaption>
            </div>
            <div class="LeftOperations">
                <figure>
                <amp-img src="_img/TeamBG/idealDeveloper.png" width="585" height="400" layout="responsive" class="i-amphtml-element i-amphtml-layout-responsive i-amphtml-layout-size-defined i-amphtml-layout" i-amphtml-layout="responsive"><i-amphtml-sizer slot="i-amphtml-svc" style="padding-top: 68.3761%;"></i-amphtml-sizer><img decoding="async" src="_img/TeamBG/idealDeveloper.png" class="i-amphtml-fill-content i-amphtml-replaced-content"></amp-img>
                </figure>
            </div>
        </li>
        <li>
            <div class="LeftOperations">
                <figure>
                <amp-img src="_img/TeamBG/continousImprovement.png" width="585" height="400" layout="responsive" class="i-amphtml-element i-amphtml-layout-responsive i-amphtml-layout-size-defined i-amphtml-layout" i-amphtml-layout="responsive"><i-amphtml-sizer slot="i-amphtml-svc" style="padding-top: 68.3761%;"></i-amphtml-sizer><img decoding="async" src="_img/TeamBG/continousImprovement.png" class="i-amphtml-fill-content i-amphtml-replaced-content"></amp-img>
                </figure>
            </div>
            <div class="RightOperations">
                <figcaption>
                <h4><?php echo $process_point5_heading; ?></h4>
                <p>
                <?php echo $process_point5_desc; ?>
                </p>
                </figcaption>
            </div>
        </li>
    </ul>
    </div>
</section>
<!-- web process section -->

<section data-vc-full-width="true" data-vc-full-width-init="true" class="vc_section gray-wrapper" style="width:100%;">
    <div class="vc_row wpb_row vc_row-fluid">
        <div class="wpb_column vc_column_container vc_col-sm-12">
            <div class="vc_column-inner">
                <div class="wpb_wrapper">
                    <div class="wpb_text_column wpb_content_element">
                        <div class="wpb_wrapper">
                            <h2 class="section-title gold-gradient-color text-center" style="text-align: center;">
                                <?php echo $technologies_block_heading; ?>
                            </h2>
                        </div>
                    </div>
                    <!-- <div class="wpb_single_image wpb_content_element vc_align_center">
                        <figure class="wpb_wrapper vc_figure">
                            <div class="vc_single_image-wrapper vc_box_border_grey">
                                <img 
                                    width="300" 
                                    height="300" 
                                    src="https://viremp.com/wp-content/uploads/2018/12/technology-300x300.png" 
                                    data-lazy-src="https://viremp.com/wp-content/uploads/2018/12/technology-300x300.png" 
                                    class="vc_single_image-img attachment-medium lazyloaded" 
                                    alt="technologies we use viremp" 
                                    data-lazy-srcset="https://viremp.com/wp-content/uploads/2018/12/technology-300x300.png 300w, https://viremp.com/wp-content/uploads/2018/12/technology-150x150.png 150w, https://viremp.com/wp-content/uploads/2018/12/technology-60x60.png 60w, https://viremp.com/wp-content/uploads/2018/12/technology-100x100.png 100w, https://viremp.com/wp-content/uploads/2018/12/technology.png 460w" 
                                    data-lazy-sizes="(max-width: 300px) 100vw, 300px" 
                                    sizes="(max-width: 300px) 100vw, 300px" 
                                    srcset="https://viremp.com/wp-content/uploads/2018/12/technology-300x300.png 300w, https://viremp.com/wp-content/uploads/2018/12/technology-150x150.png 150w, https://viremp.com/wp-content/uploads/2018/12/technology-60x60.png 60w, https://viremp.com/wp-content/uploads/2018/12/technology-100x100.png 100w, https://viremp.com/wp-content/uploads/2018/12/technology.png 460w" 
                                    data-was-processed="true"
                                >
                                <noscript>
                                    <img 
                                        width="300" 
                                        height="300" 
                                        src="https://viremp.com/wp-content/uploads/2018/12/technology-300x300.png" 
                                        class="vc_single_image-img attachment-medium" 
                                        alt="technologies we use viremp" 
                                        srcset="https://viremp.com/wp-content/uploads/2018/12/technology-300x300.png 300w, https://viremp.com/wp-content/uploads/2018/12/technology-150x150.png 150w, https://viremp.com/wp-content/uploads/2018/12/technology-60x60.png 60w, https://viremp.com/wp-content/uploads/2018/12/technology-100x100.png 100w, https://viremp.com/wp-content/uploads/2018/12/technology.png 460w" 
                                        sizes="(max-width: 300px) 100vw, 300px" 
                                    />
                                </noscript>
                            </div>
                        </figure>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
    <div id="jssor_1" >
    <div data-u="slides" class="jssor__inner_div">
        <div class="slide_jssor"><img data-u="image" style="padding:10px" src="_img/technologies/c-sharp-logo.svg"></div>
        <div class="slide_jssor"><img data-u="image" style="padding:10px" src="_img/technologies/python.svg"></div>
        <div class="slide_jssor"><img data-u="image" style="padding:10px" src="_img/technologies/django.svg"></div>
        <div class="slide_jssor"><img data-u="image" style="padding:10px" src="_img/technologies/html5.svg"></div>
        <div class="slide_jssor"><img data-u="image" style="padding:10px" src="_img/technologies/css.svg"></div>
        <div class="slide_jssor"><img data-u="image" style="padding:10px" src="_img/technologies/javascript.svg"></div>
        <div class="slide_jssor"><img data-u="image" style="padding:10px" src="_img/technologies/jquery.svg"></div>
        <div class="slide_jssor"><img data-u="image" style="padding:10px" src="_img/technologies/react.svg"></div>
        <div class="slide_jssor"><img data-u="image" style="padding:10px" src="_img/technologies/react-native.svg"></div>
        <div class="slide_jssor"><img data-u="image" style="padding:10px" src="_img/technologies/angularjs.svg"></div>
        <div class="slide_jssor"><img data-u="image" style="padding:10px" src="_img/technologies/vue-js.svg"></div>
        <div class="slide_jssor"><img data-u="image" style="padding:10px" src="_img/technologies/nodejs.svg"></div>
        <div class="slide_jssor"><img data-u="image" style="padding:10px" src="_img/technologies/redux.svg"></div>
        <div class="slide_jssor"><img data-u="image" style="padding:10px" src="_img/technologies/php-logo.svg"></div>
        <div class="slide_jssor"><img data-u="image" style="padding:10px" src="_img/technologies/android.svg"></div>
        <div class="slide_jssor"><img data-u="image" style="padding:10px" src="_img/technologies/ios-logo.svg"></div>
        <div class="slide_jssor"><img data-u="image" style="padding:10px" src="_img/technologies/mysql-logo.svg"></div>
        <div class="slide_jssor"><img data-u="image" style="padding:10px" src="_img/technologies/microsoft-sql-server.svg"></div>
        <div class="slide_jssor"><img data-u="image" style="padding:10px" src="_img/technologies/postgresql.svg"></div>
        <div class="slide_jssor"><img data-u="image" style="padding:10px" src="_img/technologies/mongodb.svg"></div>
        <div class="slide_jssor"><img data-u="image" style="padding:10px" src="_img/technologies/heroku.svg"></div>
        <div class="slide_jssor"><img data-u="image" style="padding:10px" src="_img/technologies/linux.svg"></div>
        <div class="slide_jssor"><img data-u="image" style="padding:10px" src="_img/technologies/windows.svg"></div>
        <div class="slide_jssor"><img data-u="image" style="padding:10px" src="_img/technologies/azure.svg"></div>
        
        </div><a data-scale="0" href="https://www.jssor.com" style="display:none;position:absolute;">web design</a>
    </div>
</section>
