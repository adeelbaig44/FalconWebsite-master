<?php
    if(isset($_GET['lang'])){
        $GETLANG = $_GET['lang'];
    }
?>
<!-----------Falcon Consulting Developed by Falcon IT Consultants----------------------------------------------------------------->
<div class="Footer"> 
<div class="container-fluid">
  <div class="row">
     <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 copyright">2020 - Falcon Consulting. 
        <?php
            if($GETLANG == 'en'){
                echo "<a href='index.php?view=legal_mention&lang=en'  style='color:#337ab7;font-size:14px'>Privacy Policy and Legal mention</a>";
            }else{
                echo "<a href='index.php?view=legal_mention' style='color:#337ab7;font-size:14px'>Mentions Légales</a>";
            }
        ?>
     </div>
 </div>
</div>
</div>
<!-- gdpr div -->
<div id="gdpr-cookie-message" class="d-none" style="">
    <div>
    <h4>Cookies &amp; Privacy</h4>
    <p>This website uses cookies to ensure you get the best experience on our website.</p>
    </div>
    <div>
    <p>
        <a href="/privacy/">More information</a>
        <button id="gdpr-cookie-accept" type="button">Accept</button>
        <button id="gdpr-cookie-close" type="button">Close</button>
    </p>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
<script>
    var cpf = localStorage.getItem('cpfAccept');
    var cpfDiv = $('#gdpr-cookie-message');
    if(cpf === "true"){
        cpfDiv.addClass('d-none');
    }
    else if(cpf === "false"){
        cpfDiv.removeClass('d-none');
    }
    else{
        setTimeout(function () {
            cpfDiv.removeClass('d-none');
        },2000)
    }

    $('#gdpr-cookie-accept').click(function(){
        var cpf = localStorage.setItem('cpfAccept',true);
        var cpfDiv = $('#gdpr-cookie-message');
        cpfDiv.css('display','none');
    })
    $('#gdpr-cookie-close').click(function(){
        localStorage.setItem('cpfAccept',false);
        var cpfDiv = $('#gdpr-cookie-message');
        cpfDiv.css('display','none');
    });
    $(document).ready(function(){
        $('.customer-logos').slick({
                slidesToShow: 5,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed:300,
                arrows: false,
                dots: false,
                pauseOnHover: false,
                responsive: [{
                // breakpoint: 768,
                breakpoint:0,
                settings: {
                    slidesToShow: 1
                }
            }, {
                //breakpoint: 520,
                breakpoint:0,
                settings: {
                    slidesToShow: 1
                }
            }]
        });
    });
</script>
<script src="js/jssor.slider-28.0.0.min.js" type="text/javascript"></script>
<script type="text/javascript">
    window.jssor_1_slider_init = function() {

        var jssor_1_options = {
            $AutoPlay: 1,
            $Idle: 0,
            $SlideDuration: 5000,
            $SlideEasing: $Jease$.$Linear,
            $PauseOnHover: 0,
            $SlideWidth: 140,
            $Align: 0
        };

        var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

        /*#region responsive code begin*/

        var MAX_WIDTH = '100%';

        function ScaleSlider() {
            var containerElement = jssor_1_slider.$Elmt.parentNode;
            var containerWidth = containerElement.clientWidth;

            if (containerWidth) {

                var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                jssor_1_slider.$ScaleWidth(expectedWidth);
            }
            else {
                window.setTimeout(ScaleSlider, 30);
            }
        }

        ScaleSlider();

        $Jssor$.$AddEvent(window, "load", ScaleSlider);
        $Jssor$.$AddEvent(window, "resize", ScaleSlider);
        $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
        /*#endregion responsive code end*/
    };
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<script>
      $(".slider-hire").owlCarousel({
        items:1,
        loop: true,
        autoplay: true,
        autoplayTimeout:3000, //3000ms = 3s;
        autoplayHoverPause: false,
      });
</script>
<script type="text/javascript">jssor_1_slider_init();</script>
</body>
</html>


