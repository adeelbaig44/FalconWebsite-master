<?php

include 'libraries/config.php';
require "libraries/functions.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Falcon Consulting</title>
    <link rel="shortcut icon" href="_img/logo.png" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <!--meta name="viewport" content="width=device-width, initial-scale=1"-->
    <meta name="viewport" content="width=device-width, user-scalable=no" />
    <meta property="og:image" content="http://falconconsulting.fr/_img/logo.svg" />

    <meta property="og:description" content="Falcon Consulting est une agence de développement qui est spécialisée en consulting, en développement d’applications et en conseil dans le domaine des nouvelles technologies. Nous allions rigueur, qualité de travail et coûts de réalisation optimisés. Créé en 2015." />
    
    <meta property="og:url"content="http://falconconsulting.fr/" />
    
    <meta property="og:title" content="Falcon IT Consulting" />
    <link rel="stylesheet" href="css/theme_css.css">
 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha384-tsQFqpEReu7ZLhBV2VZlAu7zcOV+rXbYlF2cqB8txI/8aZajjp4Bqd+V6D5IgvKT"
        crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <!--  	<link rel="stylesheet" href="css/main.css">-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet">
    <!—- ShareThis BEGIN -—>
    <script async src="https://platform-api.sharethis.com/js/sharethis.js#property=5eafd1ca3c3da4001226306d&product=sticky-share-buttons"></script>
    <!—- ShareThis END -—>
 </head>
<body>


<!-----------Falcon Consulting Developed by Falxon IT Consultanats----------------------------------------------------------------->


<script src="https://code.jquery.com/jquery-latest.js"></script>


<?php 
  $Header = $_SERVER['REQUEST_METHOD'] === 'GET';
    $GLOBALS['curr_link'] = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://" . (isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST']: '') . (isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI']:'');
    
    $GLOBALS['addis'] = (strpos($GLOBALS['curr_link'],'?') !== false)?'&lang=en' : '?lang=en';

//    echo $$GLOBALS['curr_link'];
    
    if(isset($_GET['lang'])){
        $GETLANG = $_GET['lang'];
    } else {
        $GETLANG = 'fr';
    }
    
		
		if ($Header==1){ ?>
<div class="SubMainHeader" id="submenu">
<div class="container">
<?php }else{ ?>
<div class="SubMainHeader" id="submenu">
<div class="container"><?php } ?>
  <div class="row">
  <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 col-xl-2">
      <center>
          <a href="<?php if($GETLANG == 'en'){echo 'index.php?lang=en';} else{ echo 'index.php' ;} ?>"><img src="_img/logo_nav.png" class="img-responsive" style="padding-top:30px"></a>
      </center>
      
      </div>
   <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 col-xl-10" id="nav-content">
       <?php
       if ($GETLANG == 'en' ){
        include "libraries/web_dropdown_menu_en.php";    
       }else{
       include "libraries/web_dropdown_menu.php";} ?>
   </div>
   </div>
  </div>
</div>
    </div>
    </div>

<!-- cookies concent script --> 
<script src="js/jquery.ihavecookies.js"></script>

<script type="text/javascript">
(function($) {          
    $(document).ready(function(){                    
        $(window).scroll(function(){                          
            if ($(this).scrollTop() > 200) {
                $('#menu').fadeIn(500);
            } else {
                $('#menu').fadeOut(500);
            }
        });
    });
})(jQuery);

(function($) {          
    $(document).ready(function(){                    
        $(window).scroll(function(){                          
            if ($(this).scrollTop() > 200) {
                $('#submenu').fadeIn(500);
            }
        });
    });
})(jQuery);

//for scroll match and 
$(document).ready(function(){       
    var scroll_start = 0;
    var startchange = $('#submenu');
    var offset = startchange.offset();
    if (startchange.length){
        $(document).scroll(function() { 
        scroll_start = $(this).scrollTop();
        if(scroll_start > 150) {
            $(".SubMainHeader").css('background-color', '#15304e');
            $(".SubMainHeader").css('opacity', '1');
        } else {
            $('.SubMainHeader').css('background-color', 'transparent');
        }
        });
    }
});
// $('body').ihavecookies({
//     title:"Cookies & Privacy",
//     message:"This website uses cookies to ensure you get the best experience on our website.",
//     link:"/privacy/",
//     delay: 2000,
//     expires: 30,// 30 days
//     moreInfoLabel:'More information',
//     acceptBtnLabel:'Accept Cookies',
//     // onAccept:function(){
//     //     debugger;
//     //     var cpfDiv = $('#gdpr-cookie-message');
//     //     localStorage.setItem('cpfAccept',true);
//     //     cpfDiv.addClass('d-none');
//     // },
//     moreInfoLabel:'More information',
    
// });
</script>



