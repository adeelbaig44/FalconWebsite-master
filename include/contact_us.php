
<?php 
if(isset($_GET['lang'])){
$GETLANG = $_GET['lang'];
}
require 'phpmailer/PHPMailerAutoload.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST' || isset($_POST['submit'])){
		
	$contact_fullname 			= $_POST['contact_fullname'];
	$contact_email				= $_POST['contact_email'];
	$contact_no 				= $_POST['contact_no'];
	$contact_subject 			= $_POST['contact_subject'];
	$contact_message 			= $_POST['contact_message'];



 $mail = new PHPMailer;
 //$mail->isSMTP();
 $mail->Host='smtp.office365.com';
 $mail->Port=587;
 $mail->SMTPAuth=true;
 $mail->SMTPSecure='tls';


 $mail->Username='contact@falconconsulting.fr';
 $mail->Password='F@Lc0n1234!';


 $mail->setFrom($contact_email, 'Falcon Consulting');
 $mail->addAddress('irtazahussain9@gmail.com');
//  $mail->addAddress('zain.asif@hotmail.fr');
//  $mail->addAddress('engr.adeelbaig@gmail.com');
//  $mail->addAddress('blawal.asghar@gmail.com');
 $mail->addReplyTo($contact_email);
  
 $mail->isHTML(true);
 $mail->Subject= $_POST["contact_subject"] ;
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
      <td>Subject:</td>
      <td>$contact_subject</td>
    </tr>
  </tbody>
</table></td>
  </tr>
  <tr>
    <td height='40' class='DetailsMessage'>Message: $contact_message</td>
  </tr>
</table>
 ";

 if(!$mail->send()){
 $Message = "<script>console.log(`FAILED - '$mail->ErrorInfo'`);</script>";
 }
 else{

  $Message = "<script>console.log(Success!  mail sent);</script>";
 }
 
 
/*--------------------------------------------------------------------------*/



 $mail = new PHPMailer;
 //$mail->isSMTP();
 $mail->Host='smtp.office365.com';
 $mail->Port=587;
 $mail->SMTPAuth=true;
 $mail->SMTPSecure='tls';


 $mail->Username='contact@falconconsulting.fr';
 $mail->Password='F@Lc0n1234!';


 $mail->setFrom('contact@falconconsulting.fr', 'Falcon Consulting');
 $mail->addAddress($contact_email);
 $mail->addReplyTo('contact@falconconsulting.fr');
  
 $mail->isHTML(true);
 $mail->Subject= "Thank you For contacting us we will get back to you soon.";
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
	<p>Dear $contact_fullname,<br>
	Thankyou for your E-Mail.We will contact you soon!</p><br>
	<p>Kindest Regards,</strong><br>
  Falcon Consulting</strong></p></td>
  </tr>
</table>
 ";

 if(!$mail->send()){
   echo "<script>console.log(`FAILED1 - '$mail->ErrorInfo'`);</script>";
 }
 else{

  echo "<script>console.log(Success1! 2 mail sent);</script>";
 }


}
?>
<img class="responsive" src="_img/background/contact-page.png" alt="main_about_bg_image" style="height:99vh;object-fit:cover;object-position:center">
  <div class="container carousal-inner-div" style="width:90% !important">
      <!-- <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12"><center><a href="<?php if($GETLANG == 'en'){echo 'index.php?lang=en';} else{ echo 'index.php' ;} ?>"><img src="_img/logo.svg" class="img-responsive"></a></center></div> -->
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
        <h2>
            <?php if($GETLANG == 'en'){
                echo "TELL US ABOUT THE DAILY HASSLES <br/>IN YOUR BUSINESS";
            }else{
                echo "PARLEZ-NOUS DE VOS DÉFIS DU QUOTIDIEN ! ";
            }
            ?>
            </h2>
            <p>
            <?php if($GETLANG == 'en'){
                echo "We will plan a free consulting session and provide the most beneficial solution<br/>at the best price ! ";
            }else{
                echo "Nous vous offrons une consultation gratuite afin de proposer les solutions<br/> adaptées au meilleur prix ! (";
            }
            ?>
        </p>
      </div>
  </div>
  <section class="contact pt-100 pb-100" id="contact">
         <div class="container">
            <div class="row">
               <div class="col-xl-6 mx-auto text-center">
                  <div class="section-title mb-100">
                      <?php
                        if ($GETLANG == 'en'){
                            echo "<h4>Contact Us</h4>";
                        } else{
                            echo "<h4>Contactez nous !</h4>";
                        }
                      ?>
                  </div>
               </div>
            </div>
			<?php 
             if(isset($Message)){
             echo $Message; }?>
			
            <div class="row text-center">
                  <div class="col-md-8">
                     <form action="index.php?view=contact_us&hfun=1" method="POST" class="contact-form">
                            <div class="row">
                               <div class="col-xl-6">
                                  <input required type="text" name="contact_fullname" placeholder=<?php if ($GETLANG == 'en'){ echo "Name"; }else{ echo "Prénom et Nom";} ?> >
                               </div>
                               <div class="col-xl-6">
                                  <input required type="text" name="contact_email" placeholder="email">
                               </div>
                               <div class="col-xl-6">
                                  <input required type="text" name="contact_no" placeholder="Telephone">
                               </div>
                               <div class="col-xl-6">
                                  <input required type="text" name="contact_subject" placeholder=<?php if ($GETLANG == 'en'){ echo "Subject"; }else{ echo "Sujet";} ?>>
                               </div><br>
                               <div class="col-xl-12">
                                  <textarea placeholder="message" name="contact_message" cols="30" rows="10"></textarea>
                                  <input type="submit" name="submit" value=<?php if ($GETLANG == 'en'){ echo "Send"; }else{ echo "ENVOYER";} ?>>
                               </div>
                            </div>
                     </form>
                  </div>
                  <div class="col-md-4">
				  <?php 
		include './libraries/config.php';
		$GETContactDetails = mysqli_query($login_db,"SELECT * FROM sm_contact WHERE ctn_enable='1'") or die (mysqli_error());
		if ($row = mysqli_fetch_assoc($GETContactDetails))
		{
		$ctn_officename					 	= $row['ctn_officename'];
		$ctn_address		 				= $row['ctn_address'];
		$ctn_mail				 			= $row['ctn_mail'];
		$ctn_ph					 			= $row['ctn_ph'];
		$ctn_cell				 			= $row['ctn_cell'];
		$ctn_map				 			= $row['ctn_map'];
		?>
				  
                     <div class="single-contact">
                        <i class="fa fa-map-marker"></i>
                         <?php
                        if ($GETLANG == 'en'){
                            echo "<h5>Address</h5>";
                        } else{
                            echo "<h5>Adresse</h5>";
                        }
                      ?>
                        <p> <?php echo $ctn_address; ?></p>
                     </div>
                     <div class="single-contact">
                        <i class="fa fa-phone"></i>
                         <?php
                        if ($GETLANG == 'en'){
                            echo "<h5>Phone Number</h5>";
                        } else{
                            echo "<h5>Téléphone</h5>";
                        }
                      ?>
                        <p> <?php echo $ctn_ph; ?></p>
                     </div>
                     <div class="single-contact">
                        <i class="fa fa-envelope"></i>
                        <?php
                        if ($GETLANG == 'en'){
                            echo "<h5>Contact Us</h5>";
                        } else{
                            echo "<h5>Contactez Nous</h5>";
                        }
                      ?>
                        <?php
                        if ($GETLANG == 'en'){
                            echo "<a href='mailto:contact@falconconsulting.fr' style='text-decoration:none;color:white'>contact@falconconsulting.fr</a>";
                        } else{
                            echo "<a href='mailto:contact@falconconsulting.fr' style='text-decoration:none;color:white'>contact@falconconsulting.fr</a>";
                        }
                      ?>
                         <?php
                        if ($GETLANG == 'en'){ ?>
                            <p>Contact us via form</p>
                        <?php } else{ ?>
                            <p><?php echo $ctn_mail;  ?></p>
                        <?php } ?>
                     </div>
					 
		<?php } 
                      mysqli_close($login_db);
                      ?>
					 
                  </div>
            </div>
         </div>
      </section>
     
    <!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d21052.886573967095!2d2.3900424739569677!3d48.732027623604644!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e674fd78c8777d%3A0x70adc8bc7cfb3556!2sVilleneuve-le-Roi%2C%20France!5e0!3m2!1sen!2s!4v1594788059006!5m2!1sen!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>-->
	    
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d21052.886573967095!2d2.3900424739569677!3d48.732027623604644!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e674fd78c8777d%3A0x70adc8bc7cfb3556!2sVilleneuve-le-Roi%2C%20France!5e0!3m2!1sen!2s!4v1594788059006!5m2!1sen!2s" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
  