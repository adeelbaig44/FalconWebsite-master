
<!---------------------------------------------------------------------------->
<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
<?php
if(isset($_GET['lang'])){
$GETLANG = $_GET['lang'];
}
require('libraries/config.php');
$GETContactDetails = mysqli_query($login_db,"SELECT * FROM sm_home WHERE h_id='1'") or die (mysqli_error());
if ($row = mysqli_fetch_assoc($GETContactDetails))
{
if ($GETLANG == 'en'){
    $h_heading					 			= $row['en_h_heading'];
    $h_text					 				= $row['en_h_text'];
    $h_button_name				 			= $row['en_h_button_name'];
    $quote_btn                              = 'Get a free quote';
    $label_fname                            ='First Name';
    $label_lname                            ='Last Name';
    $label_email                            ='Email Address';
    $label_num                              ='Phone Number';
    $label_type_of_project                  ='Type of project';
    $label_desc                             ='Project Description';
    $label_desc_file                        ='Attachment';
    $label_submit                           ='Send';
    $label_cancel                           ='Cancel';
    $label_email_us                         ='Fill form or e-mail us at';
    $option1='Website';
    $option2='Mobile Application';
    $option3='Software';
    $option4='Other';
    $action = 'index.php?lang=en';

}else{
    $h_heading					 			= $row['h_heading'];
    $h_text					 				= $row['h_text'];
    $h_button_name				 			= $row['h_button_name'];
    $quote_btn                              = 'Demander un devis gratuit';
    $label_fname                            ='Prénom';
    $label_lname                            ='Nom';
    $label_email                            ='E-mail';
    $label_num                              ='Numéro de téléphone';
    $label_type_of_project                  ='Type de projet';
    $label_desc                             ='Description du projet';
    $label_desc_file                        ='Pièce jointe';
    $label_submit                           ='Envoyer';
    $label_cancel                           ='Annuler';
    $label_email_us                         ='Remplissez le formulaire ou envoyez-nous un e-mail à';
    $option1='Site Internet';
    $option2='Application Mobile';
    $option3='Logiciel';
    $option4='Autre';
    $action = 'index.php';
}
$h_image		 						= $row['h_image'];
$h_button_url					 		= $row['h_button_url'];
// ================================================mail here ======================================================================
    require 'phpmailer/PHPMailerAutoload.php';
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['quote-send'])){
		
      $first_name 			= $_POST['first_name'];
      $email				= $_POST['email'];
      $ph_number 				=(int)$_POST['ph_number'];
      $last_name 			= $_POST['last_name'];
      $type_of_project 			= $_POST['type_of_project'];
      $project_desc               = $_POST['project-desc'];
  try{
  $mail = new PHPMailer;
  //  $mail->isSMTP();
  //  $mail->SMTPDebug = 0;
  //  $mail->Mailer   = "smtp";
  $mail->Host='n3plcpnl0108.prod.ams3.secureserver.net';
  $mail->Port=465;
  $mail->SMTPAuth=true;
  $mail->SMTPSecure='tls';

  $mail->Username='contact@falconconsulting.fr';
  $mail->Password='Falcon@123';

  $mail->setFrom($email, $first_name);
  $mail->addAddress('contact@falconconsulting.fr');
  $mail -> addAddress('irtazahussain9@gmail.com');
  //  $mail->addAddress('zain.asif@hotmail.fr');
  //  $mail->addAddress('engr.adeelbaig@gmail.com');
  //  $mail->addAddress('blawal.asghar@gmail.com');
  $mail->addReplyTo($email);
    
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
    $mail->send();
    echo "<script>alert('Successfully Sent mail')</script>";
  } catch(phpmailerException $e){
    echo "<script>alert('this error occurw while sending mail'"+$e->errorMessage()+")</script>";
  } catch (Exception $e) {
    echo "<script>alert('this error occurw while sending mail'"+$e->errorMessage()+")</script>";
  }
 
 
/*--------------------------------------------------------------------------*/


try{
 $mail = new PHPMailer();
//  $mail->isSMTP();
//  $mail->SMTPDebug = 0;
//  $mail->Mailer   = "smtp";
 $mail->Host='n3plcpnl0108.prod.ams3.secureserver.net';
 $mail->Port=465;
 $mail->SMTPAuth=true;
 $mail->SMTPSecure='tls';


 $mail->Username='contact@falconconsulting.fr';
 $mail->Password='Falcon@123';

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

 $mail->send();
 echo "<script>alert('Successfully Sent mail')</script>";
} catch(phpmailerException $e){
 echo "<script>alert('this error occurw while sending mail'"+$e->errorMessage()+")</script>";
} catch (Exception $e) {
 echo "<script>alert('this error occurw while sending mail'"+$e->errorMessage()+")</script>";
}


}
// ===============================================end mail ========================================================================   
?>
		
<!-- <div class="HeaderTop" style="background:url('_img/<?php echo $h_image; ?>');"> -->
<!-- <div class="container">
  
<div class="SpacingBox"></div>
<div class="SpacingBox"></div>
<div class="SpacingBox"></div>
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12"><center><a href="<?php if($GETLANG == 'en'){echo 'index.php?lang=en';} else{ echo 'index.php' ;} ?>"><img src="_img/logo.svg" class="img-responsive"></a></center></div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12"><h2><span class="ion-minus"></span> <?php echo $h_heading; ?> <span class="ion-minus"></span></h2>
<h1 class="ml6">
  <span class="text-wrapper">
    <span class="letters"><?php echo $h_text; ?> </span>
  </span>
</h1>

<div class="SpacingBox"></div>
 <div class="Link"><a href="<?php echo $h_button_url; ?>"><?php echo $h_button_name; ?></a></div>
<div class="SpacingBox"></div>
 <div class="Link"><a href="javascript.void();" data-toggle="modal" data-target="#myModal" style="text-decoration:none;"><?php  echo $quote_btn; ?></a></div>
<div class="SpacingBox"></div>
<div class="LinkDown"><a href="#ServicesCards"><i class="fa fa-chevron-down"></i></a></div> -->

<div class="container-fluid" style="padding:0px">
  <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="3000">
    <!-- Indicators -->
    <!-- <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li> -->
      <!-- <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2" ></li> -->
    <!-- </ol> -->

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="_img/background/HomeMain1.png" class="bg-img" alt="falcon-logo">
      </div>
      <!-- <div class="item">
        <img src="_img/background/HomeMain.png" class="bg-img" alt="falcon-logo">
      </div>
      <div class="item">
        <img src="_img/background/bg1.png" class="bg-img" alt="falcon-logo">
      </div> -->
      <!-- overlay text will be her -->
      <div class="container carousal-inner-div">
        <!-- <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12"><center><a href="<?php if($GETLANG == 'en'){echo 'index.php?lang=en';} else{ echo 'index.php' ;} ?>"><img src="_img/logo.svg" class="img-responsive"></a></center></div> -->
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
          <h2>
            <?php if($GETLANG == 'en'){
              echo "WE PROVIDE GREAT SERVICES <br/>AT THE BEST PRICE.";
            }else{
              echo "Des prestations de qualité <br/> au meilleur prix !";
            }
            ?>
          </h2>
          <p>
            <?php if($GETLANG == 'en'){
              echo "Software house with a team of experienced developers <br/> and project managers";
            }else{
              echo "Agence de développement informatique avec une équipe <br/> expérimentée et talentueuse.";
            }
            ?>
          </p>
          <!-- <div class="SpacingBox"></div> -->
          <!-- <div class="Link"><a href="<?php echo $h_button_url; ?>"><?php echo $h_button_name; ?></a></div> -->
          <div class="SpacingBox"></div>
          <div class="Link"><a href="javascript.void();" data-toggle="modal" data-target="#myModal" style="text-decoration:none;"><?php  echo $quote_btn; ?></a></div>
          <div class="SpacingBox"></div>
          <!-- <div class="LinkDown"><a href="#ServicesCards"><i class="fa fa-chevron-down"></i></a></div> -->
        </div>
      </div>
    </div>
  </div>
</div>

<!-- </div> -->
<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog" style='color:black;margin-top:20px;'>
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"><?php echo $quote_btn ?></h4>
      </div>
      <div class="modal-body">
    <span><?php echo $label_email_us ?> <a href="mailto:info@falconconsulting.fr">info@falconconsulting.fr</a></span>
    <form method='POST' enctype="multipart/form-data"  action='<?php echo $action ?>'>
        <div class="form-group">
    <label class="label-control"><?php echo $label_fname ?></label>
    <input type="text" id='first_name' name="first_name" class="form-control" required>
    </div>
    <div class="form-group">
    <label class="label-control"><?php echo $label_lname ?></label>
    <input type="text" id='last_name' name="last_name" class="form-control" required>
    </div>
    <div class="form-group">	
    <label class="label-control"><?php echo $label_email ?></label>
    <input type="email" id='email' name="email" class="form-control" required>
    </div>
    <div class="form-group">
    <label class="label-control"><?php echo $label_num ?></label>
    <input type="number" id='ph_number' name="ph_number" class="form-control" required>
        </div>
        <div class="form-group">
            <label class="label-control"><?php echo $label_type_of_project ?></label>
            <select class="form-control" name="type_of_project" id='type_of_project'>
                <option value="website"><?php echo $option1 ?></option>
                <option value="mobile app"><?php echo $option2 ?></option>
                <option value="software"><?php echo $option3 ?></option>
                <option value="other"><?php echo $option4 ?></option>
            </select>
        </div>
        <div class="form-group">
            <label class="label-control"><?php echo $label_desc ?></label>
            <textarea class="form-control" name="project-desc" id="projet-desc" rows="5"></textarea>
        </div>
        <div class="form-group">
          <label class="label-control"><?php echo $label_desc_file ?></label>
          <input type="file" name="project-file" class="form-control" id="file-desc">
        </div>
        <input type='hidden' name='quote-send' value='ask for qoute'>
    <br/>
    <div>
    <button type="submit" name="send_quote" id='get_doc' class="btn btn-info"><?php echo $label_submit ?></button>
    </div>
    </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal"><?php echo $label_cancel; ?></button>
      </div>
    </div>
    
  </div>
</div>
<!-- ------------------------this is end dialog box----------------- -->		
  </div>
  </div>
</div>

<script>
// Wrap every letter in a span
$('.ml6 .letters').each(function(){
  $(this).html($(this).text().replace(/([^\x00-\x80]|\w)/g, "<span class='letter'>$&</span>"));
});

anime.timeline({loop: true})
  .add({
    targets: '.ml6 .letter',
    translateY: ["1.1em", 0],
    translateZ: 0,
    duration: 750,
    delay: function(el, i) {
      return 50 * i;
    }
  }).add({
    targets: '.ml6',
    opacity: 0,
    duration: 1000,
    easing: "easeOutExpo",
    delay: 1000
  });

  
  
</script>

<!--</script>-->

		<?php } ?>
