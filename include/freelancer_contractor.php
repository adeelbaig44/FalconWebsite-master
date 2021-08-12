<?php
include './libraries/config.php';
require 'phpmailer/PHPMailerAutoload.php';
if(isset($_GET['lang'])){
  $GETLANG = $_GET['lang'];  
}
// ---------------------------- if request is post---------------------------------------------
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
		
	$first_name 			= $_POST['first_name'];
	$email				= $_POST['email'];
	$last_name 				= $_POST['last_name'];
	$ph_number 			= $_POST['ph_number'];
	
 $mail = new PHPMailer;
// $mail->isSMTP();
 $mail->Host='n3plcpnl0108.prod.ams3.secureserver.net';
 $mail->Port=465;
 $mail->SMTPAuth=true;
 $mail->SMTPSecure='tls';


 $mail->Username='contact@falconconsulting.fr';
 $mail->Password='falconcontact123';


 $mail->setFrom($email,$first_name);
 $mail->addAddress('contact@falconconsulting.fr','Falcon Consulting' );
 $mail->addAddress('zain.asif@hotmail.fr','Zain Asif');
 $mail->addAddress('engr.adeelbaig@gmail.com','Adeel Baig');
 $mail->addAddress('blawal.asghar@gmail.com','Blawal Asghar');
 $mail->addReplyTo($email);
  
 $mail->isHTML(true);
 $mail->Subject= 'Falcon Consulting - Nos prix' ;
 $mail->Body="
<TABLE>
  <tr> 
   <td class='Heading'> <img src='http://falconconsulting.fr/_img/logo.svg'  width='20%'><br>
	Falcon Consulting </td>
  </tr>
  <tr>
    <td height='37'>Falcon Consulting - Nos prix</td>
  </tr>
  <tr>
    <td height='83' bgcolor='#EEEEEE' class='Details'>
    <table width='100%' border='0'>
        <tbody>
            <tr>
              <td width='18%'>First Name: </td>
              <td width='82%'>$first_name</td>
            </tr>
            <tr>
              <td>Last Name</td>
              <td>$last_name</td>
            </tr>
            <tr>
              <td>E-Mail:</td>
              <td>$email</td>
            </tr>
            <tr>
              <td>Phone Number:</td>
              <td>$ph_number</td>
            </tr>
        </tbody>
    </table>
    </td>
  </tr>
</table>";

 if(!$mail->send()){
 $Message = "<div class='alert alert-danger'>FAILED - Pease fill all required fileds.</div>";
 }
 else{

  $Message = "<div class='alert alert-success'>SUCCESS - Your message successfully sent.</div>";
 }
 
 
/*--------------------------------------------------------------------------*/



 $mail = new PHPMailer;
//  $mail->isSMTP();
 $mail->Host='n3plcpnl0108.prod.ams3.secureserver.net';
 $mail->Port=465;
 $mail->SMTPAuth=true;
 $mail->SMTPSecure='tls';


 $mail->Username='contact@falconconsulting.fr';
 $mail->Password='falconcontact123';


 $mail->setFrom('contact@falconconsulting.fr', 'Falcon Consulting');
 $mail->addAddress($email);
 $mail->addReplyTo('contact@falconconsulting.fr');
  
 $mail->isHTML(true);
 $mail->AddAttachment('_img/logo.png');
 $mail->Subject= "Falcon Consulting - Nos prix";
 $mail->Body="
<table>
  <tr> 
   <td class='Heading'> <img src='http://falconconsulting.fr/_img/logo.svg' width='20%'><br>
	Falcon Consulting </td>
  </tr>
  <tr>
    <td height='40' class='DetailsMessage'>
    	<p>Bonjour $first_name,<br>
    	Vous trouverez ci-joint le document de présentation de la société Falcon Consulting, avec un exemple de tarification.</p><br>
    	<p>Merci de votre intérêt</p><br/><br/>
    	<p>Equipe Falcon Consulting</p>
	</td>
  </tr>
</table>
 ";

 if(!$mail->send()){
   echo "<script>alert('mail not sent');</script>";
 }
 else{

  echo "<script>alert('mail sent');</script>";
 }
}
// --------------------------------------------------------------------------------------------
// =============================== if language is english =====================================
if($GETLANG == 'en'){?>
    <div class="PageBackgorundImage" id="condev-bg">
    </div>
    <center><h2><b>Freelance Contracting</b></h2></center>
    <div class="PageContent">
    <div class="container">
    <div class="row">
    <div class="SpacingBox">&nbsp;</div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
    <p class="p1"><span style="font-size:large;"><strong>A team of quality offshore developers.</strong></span></p>
    <p class="p1"><strong><span>Because talent, experience and professionalism have no boundaries, we invest in the training of our developers, to make them key elements for the realization of your projects!</span></strong></p>
    <p class="p1"><strong><span>Are you looking for a developer on a specific technology? Call on our services to find the right person for you! A developer 100% dedicated to your projects, working in Falcon Consulting's dressing rooms!</span></strong></p>
    <p class="p2">&nbsp;</p>

    <p class="p3"><strong><span style="font-size: large;">A course of the fighter</span></strong></p>
    <p class="p1">The search for a developer is sometimes an obstacle course: between the desired profile (mastered technology, experience, etc...) and the availability of the market, you have to be patient!</span></p>
    <p class="p1">It is estimated that in the world, there are 10 times fewer developers than necessary to accomplish all IT projects.</span></p>
    <p class="p2">&nbsp;</p>
    <p class="p3"><strong><span style="font-size: large;">The advantages of offshore</span></strong></p>
    <p class="p1">Using offshore means working with remote developers living in countries where the cost of living is low.	<span class="Apple-converted-space">&nbsp;</span></p>
    <p class="p1">This method has several advantages:<span class="Apple-converted-space">&nbsp;</span></p>
    <ul class="ul1">
    <li class="li1">A lot of availability of IT developers: in some countries such as Pakistan, the job of IT developer represents a real social lift. It makes it possible to have a salary well above the national average (studies show that Pakistani developers are relatively the best off in the world!). As a result, this career path is heavily influenced by the new generation of engineers<span class="Apple-converted-space">&nbsp;</span></li>
    </ul>
    <ul class="ul1">
    <li class="li1">Competitive costs: the MTR of a full-stack IT freelancer is between 300€/day for a beginner and 580€/day for a senior (Source: Kicklox.com - 2019). This represents a large budget for any company. With equal skills, it is possible to divide by 3 to 5 the costs by going through a Pakistani developer.<span class="Apple-converted-space">&nbsp;</span></li>
    </ul>
    <p class="p2">&nbsp;</p>
    <p class="p3"><strong><span style="font-size: large;">The doubts of the offshore</span></strong></p>
    <p class="p1">Offshore still has a degraded image in France, especially when development is carried out in India or Pakistan. Here is why:<span class="Apple-converted-space">&nbsp;</span></p>
    <p class="p1"><strong>A) Untrained developers</strong></p>
    <p class="p1">Ten years ago, Pakistani developers were lagging behind their French counterparts due to poor training. With the liberalization of the Internet and the potential for social ascension of IT, this gap has narrowed over time.<span class="Apple-converted-space">&nbsp;</span></p>
    <p class="p1">Today, the market is very ephemeral: from development geniuses with exemplary quality methods, to developers with minimalist and non-scalable code. Without a foot on the ground, it's easy to get tangled up in the mass of available profiles.<span class="Apple-converted-space">&nbsp;Sans un pied &agrave; terre, il est facile de s'emm&ecirc;ler les pinceux du fait de la masse de profil disponible.&nbsp;</span></p>
    <p class="p1">&nbsp;</p>
    <p class="p1"><strong>B) Questionable working conditions</strong></p>
    <p>Platforms for connecting customers and developers have become more and more popular around the world, with mastodons such as Fiverr or Upwork.</p>
    <p>This is a golden opportunity for Pakistani developers to find customers in countries where the exchange rate is favourable to them.</p>
    <p>But make no mistake: 7 times out of 10, when you use a Pakistani developer on these platforms, they are actually employees working as salaried employees during the day and freelancing at night.</p>
    <p>Some developers have told us that they have been freelancing for years, working 4 to 5 hours a night after their workday at the company.</p>
    <p>Obviously, these are very difficult and dubious working conditions, which do not allow them to do quality work.</p>
    <p class="p2">&nbsp;</p>
    <video width="100%" height="auto" id="video" preload controls>
      <source src="video/about_us.mp4" type="video/mp4">
      Your browser does not support the video tag.
    </video>
    <script>
         window.onload = function() {
            // var videos = document.getElementsByTagName("video"),
            // test viewport
            var IsInViewport = function(el) {
                if (typeof jQuery === "function" && el instanceof jQuery) el = el[0];
                var rect = el.getBoundingClientRect();
                return (
                    rect.top >= 0 &&
                    rect.left >= 0 &&
                    rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
                    rect.right <= (window.innerWidth || document.documentElement.clientWidth)
                );
            };

            // $('video').each(function(){
            //     console.log("video is",$(this));
                
            //     if(IsInViewport($(this))) {
            //         console.log("View-port",IsInViewport($(this)));
            //         $(this)[0].play();
            //     } else {
            //         $(this)[0].pause();
            //     }
            // })
            // test2 
            var videos = document.getElementsByTagName("video");
            
            function checkScroll() {
            
            for(var i = 0; i < videos.length; i++) {
            
                // var video = videos[i];
                // var fraction = 0;
            
                // var x = video.offsetLeft, y = video.offsetTop, w = video.offsetWidth, h = video.offsetHeight, r = x + w, //right
                //     b = y + h, //bottom
                //     visibleX, visibleY, visible;
            
                //     visibleX = Math.max(0, Math.min(w, window.pageXOffset + window.innerWidth - x, r - window.pageXOffset));
                //     visibleY = Math.max(0, Math.min(h, window.pageYOffset + window.innerHeight - y, b - window.pageYOffset));
            
                //     visible = visibleX * visibleY / (w * h);
                //     console.log(visible,fraction)
            
                //     // if (visible <= fraction) {
                //     //     video.play();
                //     // } else {
                //     //     video.pause();
                //     // }
                    if(IsInViewport(video)) {
                        console.log("View-port",IsInViewport(video));
                        video.play();
                    } else {
                        video.pause();
                    }
            
            }
            
            }
            
            window.addEventListener('scroll', checkScroll, false);
            window.addEventListener('resize', checkScroll, false);
        }
    </script>
    <p class="p2">&nbsp;</p>
    </div>
    </div>
    </div>
    <div class="container-fluid" style="background-color: #40385b; color: white;">
    <div class="SpacingBox">&nbsp;</div>
    <div class="container">
    <div>
    <p class="p3"><span style="font-size: xx-large;"><strong>The Falcon Consulting revolution!</strong></span></p>
    <p class="p1">The goal of our agency is to restore the image of Pakistani offshore, and integrating a method of training and continuous improvement with our developers.<span class="Apple-converted-space">&nbsp;</span></p>
    <p class="p1">We recruit our own developers in our premises located in Islamabad, and offer them decent working conditions, as well as continuous and personalized training.<span class="Apple-converted-space">&nbsp;</span></p>
    <ol class="ol1">
    <li class="li1">Our client makes us aware of his needs, explaining in detail the context of the project, the technologies and working tools used. We establish together the profile of the desired developer.<span class="Apple-converted-space">&nbsp;</span></li>
    <li class="li1">Thanks to its local network, Falcon Consulting finds the best profiles available in Pakistan through a scrupulous recruitment process:<span class="Apple-converted-space">&nbsp;</span></li>
    <ul style="list-style-type: circle;">
    <li class="li1">HR interview: evaluation of the general profile of the candidate, his level in English, and his work values.</li>
    <li class="li1">Technical interview: evaluation of training and past experience, ensuring that it corresponds to the profile sought.</li>
    <li class="li1">Written test conducted online to validate the candidate's technical level.</li>
    </ul>
    <li class="li1">Falcon Consulting proposes the best options to the client, who can then decide on the desired candidate.</li>
    <li class="li1">The developer is recruited by Falcon Consulting, and receives initial training.</li>
    <li class="li1">The developer works for the client's projects. Each month, a monthly review is made to study the improvement of the collaboration (example: advanced technical training by Falcon Consulting on a given technology).</li>
    </ol></div>
    <!-- ------------------------this is dialog box----------------- -->

    <?php if(isset($Message)){ echo $Message; } ?>
    <center><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Get Out Pricing</button></center>
      <!-- Modal -->
      <div class="modal fade" id="myModal" role="dialog" style='color:black'>
        <div class="modal-dialog">

          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Get our pricing!</h4>
            </div>
            <div class="modal-body">
            <span>Fill form or e-mail us at  <a href="mailto:info@falconconsulting.fr">info@falconconsulting.fr</a></span>
            <form method='POST' action='index.php?view=freelancer_contractor&hfun=1&lang=en'>
              <div class="form-group">
                <label class="label-control">First Name</label>
                <input type="text" id='first_name' name="first_name" class="form-control" required>
              </div>
              <div class="form-group">
                <label class="label-control">Last Name</label>
                <input type="text" id='last_name' name="last_name" class="form-control" required>
              </div>
              <div class="form-group">	
                <label class="label-control">Email Address</label>
                <input type="email" id='email' name="email" class="form-control" required>
              </div>
              <div class="form-group">
                <label class="label-control">Phone Number</label>
                <input type="number" id='ph_number' name="ph_number" class="form-control" required>
              </div>
              <br/>
              <div>
                <button type="submit" id='get_doc' class="btn btn-info">Download the document</button>
              </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            </div>
          </div>

        </div>
      </div>
    <!-- ------------------------this is end dialog box----------------- -->
    <div class='SpacingBox'></div>
    <div><img class="img_responsive" alt="freelance_image" style="width: 100%;" src="_img/services/freelance2.png" alt="" /></div>
    </div>
    </div>
<?php
// ===============================if language is not english ==================================
}else{?>
    <div class="PageBackgorundImage" id="condev-bg">
    </div>
    <center><h2><b>Régie informatique</b></h2></center>
    <div class="PageContent">
    <div class="container">
    <div class="row">
    <div class="SpacingBox">&nbsp;</div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
    <p class="p1"><span style="font-size:large;"><strong>Une &eacute;quipe de d&eacute;veloppeurs offshore de qualit&eacute;.</strong></span></p>
    <p class="p1"><strong><span>Parce que le talent, l'exp&eacute;rience et le professionnalisme n'ont pas de fronti&egrave;re, nous investissons dans la formation de nos d&eacute;veloppeurs, afin d'en faire des &eacute;l&eacute;ments-cl&eacute;s pour la r&eacute;alisation de vos projets !</span></strong></p>
    <p class="p1"><strong><span>Vous recherchez un d&eacute;veloppeur sur une technologie pr&eacute;cise ? Faites appel &agrave; nos services pour trouver la personne qu&rsquo;il vous faut ! Un d&eacute;veloppeur d&eacute;di&eacute; &agrave; 100% &agrave; vos projets, travaillant dans les loges de Falcon Consulting !&nbsp;</span></strong></p>
    <p class="p2">&nbsp;</p>

    <p class="p3"><strong><span style="font-size: large;">Un parcours du combattant</span></strong></p>
    <p class="p1">La recherche d&rsquo;un d&eacute;velopeur est parfois un parcours du combattant : entre le profil recherch&eacute; (technologie ma&icirc;tris&eacute;e, exp&eacute;rience, etc&hellip;) et la disponibilit&eacute; du march&eacute;, il faut savoir s&rsquo;armer de patience !<span class="Apple-converted-space">&nbsp;</span></p>
    <p class="p1">On estime que dans le monde, il y a 10 fois moins de d&eacute;veloppeurs que n&eacute;cessaire pour accomplir tous les projets informatiques.<span class="Apple-converted-space">&nbsp;</span></p>
    <p class="p2">&nbsp;</p>
    <p class="p3"><strong><span style="font-size: large;">Les avantages du offshore</span></strong></p>
    <p class="p1">Faire appel au offshore, c&rsquo;est travailler avec des d&eacute;veloppeurs &agrave; distance, habitant dans des pays o&ugrave; le co&ucirc;t de vie est avantageux.<span class="Apple-converted-space">&nbsp;</span></p>
    <p class="p1">Cette m&eacute;thode comporte plusieurs avantages :<span class="Apple-converted-space">&nbsp;</span></p>
    <ul class="ul1">
    <li class="li1">Beaucoup de disponibilit&eacute; en d&eacute;veloppeurs informatiques : dans certains pays comme au Pakistan, le m&eacute;tier de d&eacute;veloppeur informatique repr&eacute;sente un v&eacute;ritable ascenseur social. Il permet d&rsquo;avoir un salaire bien au-dessus de la moyenne nationale (des &eacute;tudes montrent que les d&eacute;veloppeurs pakistanais sont relativement les mieux lotis au monde !). De ce fait, cette voie est empreint&eacute;e massivement par la nouvelle g&eacute;n&eacute;ration d&rsquo;ing&eacute;nieurs;</li>
    </ul>
    <ul class="ul1">
    <li class="li1">Des co&ucirc;ts comp&eacute;titifs : le TJM d'un freelancer informatique full-stack est entre 300&euro;/jour pour un d&eacute;butant et 580&euro;/jour pour un senior (Source: Kicklox.com - 2019). Cela repr&eacute;sente un budget important pour toutes entreprises. A comp&eacute;tences &eacute;gales, il est possible de diviser par 3 &agrave; 5 les co&ucirc;ts en passant par un d&eacute;veloppeur pakistanais.<span class="Apple-converted-space">&nbsp;</span></li>
    </ul>
    <p class="p2">&nbsp;</p>
    <p class="p3"><strong><span style="font-size: large;">Les doutes du offshore</span></strong></p>
    <p class="p1">Le offshore a encore aujourd&rsquo;hui une image d&eacute;grad&eacute;e en France, et en particulier lorsque le d&eacute;veloppement est r&eacute;alis&eacute; en Inde ou au Pakistan. Voici donc pourquoi :<span class="Apple-converted-space">&nbsp;</span></p>
    <p class="p1"><strong>A) Des d&eacute;veloppeurs non form&eacute;s</strong></p>
    <p class="p1">Il y a 10 ans, les d&eacute;veloppeurs pakistanais avaient un retard certain sur leurs homologues fran&ccedil;ais, du fait d'une formation peu d&eacute;velopp&eacute;e. Avec la lib&eacute;ralisation d&rsquo;Internet et le potentiel d'ascension social de l'IT, ce retard s&rsquo;est r&eacute;duit avec le temps.<span class="Apple-converted-space">&nbsp;</span></p>
    <p class="p1">Aujourd&rsquo;hui, le march&eacute; est tr&egrave;s &eacute;ph&eacute;m&egrave;re : des g&eacute;nies du d&eacute;veloppement avec des m&eacute;thodes qualit&eacute; exemplaires, aux d&eacute;veloppeurs qui pr&eacute;sentent un code minimaliste et non scalable.<span class="Apple-converted-space">&nbsp;Sans un pied &agrave; terre, il est facile de s'emm&ecirc;ler les pinceux du fait de la masse de profil disponible.&nbsp;</span></p>
    <p class="p1">&nbsp;</p>
    <p class="p1"><strong>B) Conditions de travail douteux</strong></p>
    <p>Les plateformes de mise en relation entre clients et d&eacute;veloppeurs se sont d&eacute;mocratis&eacute;es dans le monde, avec des mastodontes telles que Fiverr ou Upwork.</p>
    <p>C&rsquo;est une opportunit&eacute; en or pour les d&eacute;veloppeurs pakistanais de trouver des clients dans des pays o&ugrave; le taux de change leur est favorable.</p>
    <p>Mais ne vous y m&eacute;prenez pas : 7 fois sur 10, lorsque vous faites appel &agrave; un d&eacute;veloppeur pakistanais sur ces plateformes, il s&rsquo;agit en r&eacute;alit&eacute; d&rsquo;employ&eacute;s qui travaillent en tant que salari&eacute;s en journ&eacute;e et font du freelancing le soir.</p>
    <p>Certains d&eacute;veloppeurs nous ont confi&eacute; qu&rsquo;ils travaillent en freelance depuis des ann&eacute;es, &agrave; raison de 4 &agrave; 5 heures par soir apr&egrave;s leur journ&eacute;e de travail en entreprise.</p>
    <p>Evidemment, il s&rsquo;agit de conditions de travail tr&egrave;s difficiles et douteuses, ne permettant pas de r&eacute;aliser un travail de qualit&eacute;.</p>
    <p class="p2">&nbsp;</p>
    <p class="p2">&nbsp;</p>
    </div>
    </div>
    </div>
    <div class="container-fluid" style="background-color: #40385b; color: white;">
    <div class="SpacingBox">&nbsp;</div>
    <div class="container">
    <div>
    <p class="p3"><span style="font-size: xx-large;"><strong>La revolution Falcon Consulting !</strong></span></p>
    <p class="p1">Le but de notre agence est de redorer le blason du offshore pakistanais, et int&eacute;grant une m&eacute;thode de formation et d&rsquo;am&eacute;lioration continue avec nos d&eacute;veloppeurs.<span class="Apple-converted-space">&nbsp;</span></p>
    <p class="p1">Nous recrutons nos propres d&eacute;veloppeurs dans nos locaux situ&eacute;s &agrave; Islamabad, et leur offrons des conditions de travail d&eacute;cents, ainsi qu&rsquo;une formation continue et personnalis&eacute;e.<span class="Apple-converted-space">&nbsp;</span></p>
    <ol class="ol1">
    <li class="li1">Notre client nous fait par de son besoin, expliquant en d&eacute;tail le contexte du projet, les technologies et outils de travail utilis&eacute;s. Nous &eacute;tablissons ensemble le profil du d&eacute;veloppeur souhait&eacute;.<span class="Apple-converted-space">&nbsp;</span></li>
    <li class="li1">Gr&acirc;ce &agrave; son r&eacute;seau local, Falcon Consulting trouve les meilleurs profils disponibles au Pakistan &agrave; travers un process de recrutement scrupuleux :<span class="Apple-converted-space">&nbsp;</span></li>
    <ul style="list-style-type: circle;">
    <li class="li1">Entretien RH : &eacute;valuation du profil g&eacute;n&eacute;ral du candidat, de son niveau en anglais, et de ses valeurs de travail</li>
    <li class="li1">Entretien technique : &eacute;valuation de la formation et des exp&eacute;riences pass&eacute;es, en s&rsquo;assurant qu&rsquo;il corresponde au profil recherch&eacute;;</li>
    <li class="li1">Test &eacute;crit r&eacute;alis&eacute; en direct afin de valider le niveau technique du candidat;</li>
    </ul>
    <li class="li1">Falcon Consulting propose les meilleurs options au client, qui peut alors d&eacute;cider du candidat souhait&eacute;;</li>
    <li class="li1">Le d&eacute;veloppeur est recrut&eacute; par Falcon Consulting, et re&ccedil;oit une formation initiale;</li>
    <li class="li1">Le d&eacute;veloppeur travaille pour les projets du client. Chaque mois, un point est fait afin d&rsquo;&eacute;tudier les pistes d&rsquo;am&eacute;liorations pour la collaboration<span class="Apple-converted-space">&nbsp; </span>(exemple: formations techniques pouss&eacute;es r&eacute;alis&eacute; par Falcon Consulting sur une technologie donn&eacute;e).</li>
    </ol></div>
    <!-- ------------------------this is dialog box----------------- -->
    <?php if(isset($Message)){ echo $Message; } ?>
    <center><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Consultez nos prix!</button></center>

      <!-- Modal -->
      <div class="modal fade" id="myModal" role="dialog" style='color:black'>
        <div class="modal-dialog">

          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Consultez nos prix!</h4>
            </div>
            <div class="modal-body">
            <span>Remplissez le formulaire ou envoyez-nous un e-mail à <a href="mailto:info@falconconsulting.fr">info@falconconsulting.fr</a></span>
            <form method='POST' action='index.php?view=freelancer_contractor&hfun=1'>
              <div class="form-group">
                <label class="label-control">Nom</label>
                <input type="text" id='last_name' name="last_name" class="form-control" required>
              </div>
              <div class="form-group">
                <label class="label-control">Prénom</label>
                <input type="text" id='first_name' name="first_name" class="form-control" required>
              </div>
              <div class="form-group">	
                <label class="label-control">E-mail</label>
                <input type="email" id='email' name="email" class="form-control" required>
              </div>
              <div class="form-group">
                <label class="label-control">Numéro de téléphone</label>
                <input type="number" id='ph_number' name="ph_number" class="form-control" required>
              </div>
              <br/>
              <div>
                <button type="submit" id='get_doc' class="btn btn-info">Télécharger le document</button>
              </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Annuler</button>
            </div>
          </div>

        </div>
      </div>
    <!-- ------------------------this is end dialog box----------------- -->
    <div class='SpacingBox'></div>
    <div><img class="img_responsive" alt="freelance_image" style="width: 100%;" src="_img/services/freelance2.png" alt="" /></div>
    </div>
    </div>
    </div>
    <!-- ------------------------------------------------------ -->
<?php
}
// ================================================================================================================
?>