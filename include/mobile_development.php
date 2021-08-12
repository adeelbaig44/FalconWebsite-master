<?php    
include './libraries/config.php';
if(isset($_GET['lang'])){
    $GETLANG = $_GET['lang'];
}
//=======================================================================================
require 'phpmailer/PHPMailerAutoload.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST'){
		
	$first_name 			= $_POST['first_name'];
	$email				= $_POST['email'];
	$ph_number 				= $_POST['ph_number'];
	$last_name 			= $_POST['last_name'];
	$type_of_project 			= $_POST['type_of_project'];
    $project_desc               = $_POST['project-desc'];



 $mail = new PHPMailer;
//  $mail->isSMTP();
 $mail->Host='n3plcpnl0108.prod.ams3.secureserver.net';
 $mail->Port=465;
 $mail->SMTPAuth=true;
 $mail->SMTPSecure='tls';


 $mail->Username='contact@falconconsulting.fr';
 $mail->Password='falconcontact123';


 $mail->setFrom($_POST['email'], 'Falcon Consulting');
 $mail->addAddress('contact@falconconsulting.fr');
 $mail->addAddress('zain.asif@hotmail.fr');
 $mail->addAddress('engr.adeelbaig@gmail.com');
 $mail->addAddress('blawal.asghar@gmail.com');
 $mail->addReplyTo($_POST['email']);
  
 $mail->isHTML(true);
 $mail->Subject= 'Falcon Consulting Demander un devis gratuit';
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
   <td class='Heading'> <img src='http://falconconsulting.fr/_img/logo.svg' width='20%'><br>
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
      <td width='82%'>$first_name</td>
    </tr>
    <tr>
      <td>Subject:</td>
      <td>$last_name</td>
    </tr>
    <tr>
      <td>Contact No.</td>
      <td>$ph_number</td>
    </tr>
    <tr>
      <td>E-Mail:</td>
      <td>$email</td>
    </tr>
  </tbody>
</table></td>
  </tr>
  <tr>
    <td height='40' class='DetailsMessage'>Project Type: $type_of_project</td>
  </tr>
  <tr>
    <td height='40' class='DetailsMessage'>Project Description : $project_desc</td>
  </tr>

</table>
 ";

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
 $mail->addAddress($_POST['email']);
 $mail->addReplyTo('contact@falconconsulting.fr');
  
 $mail->isHTML(true);
 $mail->Subject= 'Falcon Consulting Demander un devis gratuit';
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
   <td class='Heading'> <img src='http://falconconsulting.fr/_img/logo.svg' width='20%'><br>
	Falcon Consulting </td>
  </tr>
  <tr>
    <td height='40' class='DetailsMessage'>
	<p>Dear $first_name,<br>
	Thankyou for your E-Mail.We will you contact soon!</p><br>
	<p>Kindest Regards,</strong><br>
  Falcon Consulting</strong></p></td>
  </tr>
</table>
 ";

 if(!$mail->send()){
   echo "";
 }
 else{

  echo "";
 }


}
//=======================================================================================
if($GETLANG == 'en')
{ ?>
<!-- ------------------------------------if language is english -------------- -->

<div class="PageBackgorundImage" id="mobdev-bg"></div>
<div class="container carousal-inner-div" style="width:80% !important">
  <!-- <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12"><center><a href="<?php if($GETLANG == 'en'){echo 'index.php?lang=en';} else{ echo 'index.php' ;} ?>"><img src="_img/logo.svg" class="img-responsive"></a></center></div> -->
  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
    <h2>
    Mobile APP Developement
    </h2>
    <p>Partenering with Startups are Enterprises to bring their <br/>s
      projects to life !  </p>
  </div>
</div>
<!-- <center><h2><b>Mobile Developement</b></h2></center> -->
<div class="SpacingBox"></div>
<div class="container">
  <p class="p1 text-center">
    <span style="font-size: x-large;">
      <span class="Apple-converted-space">In most fields, mobile applications have become essential: they allow you to carry
         out projects at the cutting edge of technology and make your business, 
         your activities, your projects accessible from a large number of mobile terminals!</span>
      </span>
    </p>
</div>
<div class="container">
  <center><img class="img-responsive sr_pic" src="_img/mobiledevphoto1.png" alt="service_image" /></center>
</div>
<div class="SpacingBox">&nbsp;</div>
<div class="PageService">
  <div class="container">
    <div class="row">
    <h1 class="text-center">Let's work together!</h1>
    <h4 class="text-center">LISTEN. COMPREHENSION. ACHIEVEMENT.</h4>
    <div class="SpacingBox">&nbsp;</div>
    <p class="text-center">From conception to final implementation, 
      Falcon Consulting accompanies you in all the stages of the realization of your mobile application, 
      and meets your expectations as well as possible.</p>
    <br/>
    <?php if(isset($Message)){ echo $Message; }?>
    <center>
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Ask for quote</button>
    </center>
    <div class="SpacingBox">&nbsp;</div>
    </div>
  </div>
</div>
<!-------------------------------------------schema here------------------------------->
<div class="WebService">
  <div class="container">
    <div class="SpacingBox">&nbsp;</div>
    <div class="SpacingBox">&nbsp;</div>
    <div class="row"><!------------------------------------------------------------------------------------------>
      <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
        <div class="Box"><center><img class="img-responsive img_size" src="_img/Definition du besoin.png" alt="schema Image" /></center>
          <h4 class="text-center">Definition Of Need</h4>
          <p class="text-center">Formalization of the need in a clear and synthetic way. The Falcon Consulting team will be able to advise you in order to propose an application that meets your expectations and fits within your budget.</p>
        </div>
      </div>
      <!------------------------------------------------------------------------------------------>
      <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
        <div class="Box"><center><img class="img-responsive img_size" src="_img/R&eacute;daction du cahier des charges.png" alt="schema Image" /></center>
          <h4 class="text-center">Specification Writing</h4>
          <p class="text-center">This step is sometimes neglected or rushed, but it is nonetheless essential and allows us to anticipate and prevent future technical difficulties. Falcon Consulting will offer you its expertise in order to choose the most suitable technologies for your project.</p>
        </div>
      </div>
      <!------------------------------------------------------------------------------------------>
      <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
        <div class="Box"><center><img class="img-responsive img_size" src="_img/R&eacute;alisation des mockups.png" alt="schema Image" /></center>
          <h4 class="text-center">Mockups realization</h4>
          <p class="text-center">This phase provides a meaningful visual overview and ensures that the project has been well defined.</p>
        </div>
      </div>
      <!-------------------------------------------------------------------->
      <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
        <div class="Box"><center><img class="img-responsive img_size" src="_img/D&eacute;veloppement informatique.png" alt="schema Image" /></center>
          <h4 class="text-center">Computer Development</h4>
          <p class="text-center">Our developers take the lead, and code the application using the AGILE method. As this step is often long, Falcon Consulting sets up a transparent process, allowing you to follow the progress of the project at any time.</p>
        </div>
      </div>
      <!------------------------------------------------------------------------------------------>
      <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
        <div class="Box"><center><img class="img-responsive img_size" src="_img/Tests et d&eacute;ploiement.png" alt="schema Image" /></center>
          <h4 class="text-center">Testing And Deployment</h4>
          <p class="text-center">The application is intensively tested before being sent to you for a final test. After making the final adjustments, the application is deployed on the blinds and is ready for use!</p>
        </div>
      </div>
  <!------------------------------------------------------------------------------------------>
    </div>
  </div>
  <div class="SpacingBox">&nbsp;</div>
  <div class="SpacingBox">&nbsp;</div>
</div>
<!-----------------------------------iosmaterial------------------->
<!-- <p>&nbsp;</p> -->
<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog" style='color:black;margin-top:20px;'>
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Ask for qoute</h4>
      </div>
      <div class="modal-body">
    <span>Fill form or e-mail us at <a href="mailto:info@falconconsulting.fr">info@falconconsulting.fr</a></span>
    <form method='POST' enctype="multipart/form-data"  action='index.php?view=mobile_development&hfun=1&lang=en'>
        <div class="form-group">
    <label class="label-control">First Name</label>
    <input type="text" id='first_name' name="first_name" class="form-control" required>
    </div>
    <div class="form-group">
    <label class="label-control">Last name</label>
    <input type="text" id='last_name' name="last_name" class="form-control" required>
    </div>
    <div class="form-group">	
    <label class="label-control">Email Address</label>
    <input type="email" id='email' name="email" class="form-control" required>
    </div>
    <div class="form-group">
    <label class="label-control">Numéro de téléphone</label>
    <input type="number" id='ph_number' name="ph_number" class="form-control" required>
        </div>
        <div class="form-group">
            <label class="label-control">Type of project</label>
            <select class="form-control" name="type_of_project" id='type_of_project'>
                <option value="website">Website</option>
                <option value="mobile app">Mobile Application</option>
                <option value="software">Software</option>
                <option value="other">Other</option>
            </select>
        </div>
        <div class="form-group">
            <label class="label-control">Description of project</label>
            <textarea class="form-control" name="project-desc" id="projet-desc" rows="5"></textarea>
        </div>
        <div class="form-group">
          <label class="label-control">Attachment</label>
          <input type="file" name="project-file" class="form-control" id="file-desc">
        </div>
    <br/>
    <div>
    <button type="submit" id='get_doc' class="btn btn-info">Send</button>
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
<!-- --------------------------------new section -------------------------- -->
<section class="falconStepBlock">
    <div class="SpacingBox"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="image-blockhh">
                <h2 style="font-size: 30px; font-family: open-sans-regular;text-transform:upercase;font-weight: 600; color: #fff; margin-bottom: 30px;">
                Native or hybrid application? SQL or Cloud database? </h2>
                <p class="sub_text_pera">Whether you are familiar with the IT world or not, Falcon Consulting will offer you its expertise in order to make the right technology choices in order to have a viable and easily scalable project.</p>
                <p class="responsive_center"><img src="_img/TeamBG/infoCardBG.png" alt="Internet Marketing Agency"></p>
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="row d-flex">
                    <div class="col-sm-6">
                        <div class="savecontent-block">
                        <h5 class="saveapp-title">Scalable Application</h5>
                        <p class="saveapp-content">Realization of applications that can be deployed on a large scale, to reach our most ambitious objectives!</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="savecontent-block">
                        <h5 class="saveapp-title">Strategic Consultants</h5>
                        <p class="saveapp-content">From the concept phase to the final realization, our team offers you expert advice at each stage of the project.</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="savecontent-block">
                        <h5 class="saveapp-title">Realization According To The Rules Of The Art</h5>
                        <p class="saveapp-content">Our mobile developers are experienced and carry out their own coding according to international standards.</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="savecontent-block">
                        <h5 class="saveapp-title">Proven Methodology</h5>
                        <p class="saveapp-content">Having known how to evolve in this ever more innovative environment, the Falcon Consulting team is at the cutting edge of technology!</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="savecontent-block">
                        <h5 class="saveapp-title">Responsiveness</h5>
                        <p class="saveapp-content">The applications are responsive and can be adapted to any type of device!</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="savecontent-block">
                        <h5 class="saveapp-title">Detection And Deletion</h5>
                        <p class="saveapp-content">A rigor in order to detect and remove inconsistencies in the code, in order to give a bug-free application, and a unique user experience!</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="savecontent-block">
                        <h5 class="saveapp-title">Time Management</h5>
                        <p class="saveapp-content">Our goal is to develop your application on time. You can follow the progress of the project transparently.</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="savecontent-block">
                        <h5 class="saveapp-title">A Clear And Accessible Price</h5>
                        <p class="saveapp-content">Mobile applications at an affordable price, it's finally possible with Falcon Consulting!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="SpacingBox"></div>
</section>
<!-- ------------------------endif----------------- -->
    
<!-- ------------------------------------if language is french -------------- -->
<?php }else{ ?>
<div class="PageBackgorundImage" id="mobdev-bg">
</div>
<div class="container carousal-inner-div" style="width:80% !important">
  <!-- <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12"><center><a href="<?php if($GETLANG == 'en'){echo 'index.php?lang=en';} else{ echo 'index.php' ;} ?>"><img src="_img/logo.svg" class="img-responsive"></a></center></div> -->
  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
    <h2>
    Développement d'applications mobiles
    </h2>
    <p>Partenaires avec les startups, les entreprises doivent apporter leur <br/>
    projets à la vie!</p>
  </div>
</div>
<!-- <center><h2><b>Développement mobile</b></h2></center> -->
<div class="SpacingBox"></div>
<div class="container">
    <p class="p1 text-center"><span style="font-size: x-large;"><span class="Apple-converted-space">Dans la plupart des domaines, les applications mobiles sont devenues incontournables: elles permettent de r&eacute;aliser des projets &agrave; la pointe de la technologie et rendre votre m&eacute;tier, vos activit&eacute;s, vos projets accessibles depuis un grand nombre de terminaux mobiles !</span></span></p>
</div>
<div class="container">
    <center><img class="img-responsive sr_pic" src="_img/mobiledevphoto1.png" alt="service_image" /></center>
</div>
<div class="SpacingBox">&nbsp;</div>
<div class="PageService">
    <div class="container">
        <div class="row">
            <h1 class="text-center">Travaillons ensemble !</h1>
            <h4 class="text-center">ECOUTE. COMPREHENSION. REALISATION.</h4>
            <div class="SpacingBox">&nbsp;</div>
            <p class="text-center">De l'&eacute;bauche &agrave; la r&eacute;alisation finale, Falcon Consulting vous accompagne dans toutes les &eacute;tapes de r&eacute;alisation de votre application mobile, et r&eacute;pond au mieux &agrave; vos attentes.&nbsp;</p>
            <br/>
            <?php if(isset($Message)){ echo $Message; }?>
            <center><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Demander un devis gratuit</button></center>
            <div class="SpacingBox">&nbsp;</div>
        </div>
    </div>
</div>
<!-------------------------------------------schema here------------------------------->
<div class="WebService">
<div class="container">
<div class="SpacingBox">&nbsp;</div>
<div class="SpacingBox">&nbsp;</div>
<div class="row"><!------------------------------------------------------------------------------------------>
<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
<div class="Box"><center><img class="img-responsive img_size" src="_img/Definition du besoin.png" alt="schema Image" /></center>
<h4 class="text-center">D&eacute;finition du besoin</h4>
<p class="text-center">Formalisation du besoin de fa&ccedil;on claire et synth&eacute;tique. L&rsquo;&eacute;quipe Falcon Consulting pourra vous conseiller afin de proposer une application r&eacute;pondant &agrave; vos attentes, et rentrant dans votre budget.</p>
</div>
</div>
<!------------------------------------------------------------------------------------------>
<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
<div class="Box"><center><img class="img-responsive img_size" src="_img/R&eacute;daction du cahier des charges.png" alt="schema Image" /></center>
<h4 class="text-center">R&eacute;daction des sp&eacute;cifications</h4>
<p class="text-center">Etape parfois n&eacute;glig&eacute;e ou faites &agrave; la va-vite, elle est pourtant indispensable et permet d&rsquo;anticiper et de pr&eacute;venir de futurs difficult&eacute;s techniques. Falcon Consulting vous proposera son expertise afin de choisir les technologies les plus adapt&eacute;es &agrave; votre projet.</p>
</div>
</div>
<!------------------------------------------------------------------------------------------>
<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
<div class="Box"><center><img class="img-responsive img_size" src="_img/R&eacute;alisation des mockups.png" alt="schema Image" /></center>
<h4 class="text-center">R&eacute;alisation des mockups</h4>
<p class="text-center">Cette phase permet d&rsquo;avoir un aper&ccedil;u visuel parlant, et de s&rsquo;assurer que le projet a bien &eacute;t&eacute; d&eacute;fini.</p>
</div>
</div>
<!-------------------------------------------------------------------->
<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
<div class="Box"><center><img class="img-responsive img_size" src="_img/D&eacute;veloppement informatique.png" alt="schema Image" /></center>
<h4 class="text-center">D&eacute;veloppement informatique</h4>
<p class="text-center">Nos d&eacute;veloppeurs prennent la main, et codent l&rsquo;application en utilisant la m&eacute;thode AGILE. Cette &eacute;tape &eacute;tant souvent longue, Falcon Consulting met en place un process transparent, vous permettant de suivre l&rsquo;avancement du projet &agrave; tout moment.</p>
</div>
</div>
<!------------------------------------------------------------------------------------------>
<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
<div class="Box"><center><img class="img-responsive img_size" src="_img/Tests et d&eacute;ploiement.png" alt="schema Image" /></center>
<h4 class="text-center">Tests et d&eacute;ploiement</h4>
<p class="text-center">L&rsquo;application est test&eacute;e intensivement avant de vous l&rsquo;&ecirc;tre transmise pour un test final. Apr&egrave;s avoir effectu&eacute; les derniers ajustements, l&rsquo;application est d&eacute;ploy&eacute;es sur les Stores et est pr&ecirc;te &agrave; l&rsquo;utilisation !</p>
</div>
</div>
<!------------------------------------------------------------------------------------------></div>
</div>
<div class="SpacingBox">&nbsp;</div>
<div class="SpacingBox">&nbsp;</div>
</div>

<!-----------------------------------iosmaterial------------------->
<!-- <p>&nbsp;</p> -->

<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog" style='color:black;margin-top:20px;'>
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Demander un devis gratuit</h4>
        </div>
        <div class="modal-body">
        <span>Remplissez le formulaire ou envoyez-nous un e-mail à <a href="mailto:info@falconconsulting.fr">info@falconconsulting.fr</a></span>
		<form method='POST' enctype="multipart/form-data"  action='index.php?view=mobile_development&hfun=1'>
          <div class="form-group">
			<label class="label-control">Prénom</label>
			<input type="text" id='first_name' name="first_name" class="form-control" required>
		  </div>
		  <div class="form-group">
			<label class="label-control">Nom</label>
			<input type="text" id='last_name' name="last_name" class="form-control" required>
		  </div>
		  <div class="form-group">	
			<label class="label-control">E-mail</label>
			<input type="email" id='email' name="email" class="form-control" required>
		  </div>
		  <div class="form-group">
			<label class="label-control">Numéro de téléphone</label>
			<input type="number" id='ph_number' name="ph_number" class="form-control" required>
          </div>
          <div class="form-group">
              <label class="label-control">Type de projet</label>
              <select class="form-control" name="type_of_project" id='type_of_project'>
                  <option value="website">Site Internet</option>
                  <option value="mobile app">Application Mobile</option>
                  <option value="software">Logiciel</option>
                  <option value="other">Autre</option>
              </select>
          </div>
          <div class="form-group">
              <label class="label-control">Description du projet</label>
              <textarea class="form-control" name="project-desc" id="projet-desc" rows="5"></textarea>
          </div>
          <div class="form-group">
            <label class="label-control">Pièce jointe</label>
            <input type="file" name="project-file" class="form-control" id="file-desc">
          </div>
		  <br/>
		  <div>
			<button type="submit" id='get_doc' class="btn btn-info">Envoyer</button>
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
<!-- --------------------------------new section -------------------------- -->
<section class="falconStepBlock">
    <div class="SpacingBox"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="image-blockhh">
                <h2 style="font-size: 30px; font-family: open-sans-regular;text-transform:upercase;font-weight: 600; color: #fff; margin-bottom: 30px;">
                Application native ou hybride ? Base de données SQL ou Cloud?</h2>
                <p class="sub_text_pera">Que vous soyez familier ou non avec le monde informatique, Falcon Consulting vous proposera son expertise afin de faire les bons choix de technologie afin d’avoir un projet viable, et scalable facilement.</p>
                <p class="responsive_center"><img src="_img/TeamBG/infoCardBG.png" alt="Internet Marketing Agency"></p>
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="row d-flex">
                    <div class="col-sm-6">
                        <div class="savecontent-block">
                        <h5 class="saveapp-title">Application Scalable</h5>
                        <p class="saveapp-content">Réalisation d'applications pouvant se déployer à large échelle, pour atteindre nos objectifs les plus ambitieux!</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="savecontent-block">
                        <h5 class="saveapp-title">Consultants Stratégiques</h5>
                        <p class="saveapp-content">De la phase de concept à la réalisation finale, notre équipe vous offre des conseils avisés à chaque étape de réalisation du projet. </p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="savecontent-block">
                        <h5 class="saveapp-title">Réalisation Selon Les Règles De L'Art</h5>
                        <p class="saveapp-content">Nos développeurs mobiles sont expérimentés et réalisent du codage propre selon les</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="savecontent-block">
                        <h5 class="saveapp-title">Méthodologie Éprouvée</h5>
                        <p class="saveapp-content">Ayant su évoluer dans cet environnement toujours plus novateur, l'équipe Falcon Consulting est à la pointe de la technologie!</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="savecontent-block">
                        <h5 class="saveapp-title">Responsivité</h5>
                        <p class="saveapp-content">Les applications sont responsives et peuvent être adaptée à tout type d'appareil!</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="savecontent-block">
                        <h5 class="saveapp-title">Détection Et Suppression</h5>
                        <p class="saveapp-content">Une rigueur afin de détecter et supprimer les incohérences dans le code, afin de donner une application sans bugs, et une expérience utilisateur unique!</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="savecontent-block">
                        <h5 class="saveapp-title">Management Du Temps</h5>
                        <p class="saveapp-content">Notre but est de développer votre application dans les temps impartis. Vous pourrez suivre de façon transparente l'évolution du projet.</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="savecontent-block">
                        <h5 class="saveapp-title">Un Prix Clair Et Accessible</h5>
                        <p class="saveapp-content">Les applications mobiles à un prix accessible, c'est enfin possible avec Falcon Consulting!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="SpacingBox"></div>
</section>
<!-- end of else -->
<?php } ?>