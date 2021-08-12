<nav class="NavBarColor">
<nav class="navbar-inverse fixed-top">
    <!-- Brand and toggle get grouped for better mobile display -->
      <button type="button" id="nav-toogler" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
</nav>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
     <ul class="nav navbar-nav">
            <!-- <li><a href="index.php?lang=en">HOME</a></li> -->
            <!-- <li><a href="index.php?view=about_us&hfun=1&lang=en">Our Company</a></li> -->
            <li class="dropdown">
                <a class="dropdown-toggle" 
                    data-toggle="dropdown" 
                    role="button" 
                    aria-haspopup="true" 
                    aria-expanded="false" 
                    href="">About<span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="index.php?view=about_us&hfun=1&lang=en">Our Company</a></li>
                    <li><a href="index.php?view=quality_management&hfun=1&lang=en">Quality Management</a></li>
                    <!--<li><a href="index.php?view=freelancer_contractor&hfun=1&lang=en">Contracting</a></li>-->
                </ul>
            </li>
		    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="">Services<span class="caret"></span></a>
            <ul class="dropdown-menu">
                <li class="row">
                    <i class="fa fa-users fa-2x col-sm-2"></i>
                    <a style="padding-top:10px"  class="col-sm-10" href="index.php?view=our_team&hfun=1&lang=en">ON DEMAND DEVELOPERS</a>
                </li>
                <li class="row">
                    <i class="fa fa-mobile fa-3x col-sm-2"></i>
                    <a style="padding-top:10px"  class="col-sm-10" href="index.php?view=mobile_development&hfun=1&lang=en">Mobile Developement</a>
                </li>
                <li class="row">
                    <i class="fa fa-desktop fa-2x col-sm-2"></i>
                    <a class="col-sm-10" href="index.php?view=website_development&hfun=1&lang=en">Web Developement</a>
                </li>
                <li class="row">
                    <i class="fa fa-code fa-2x col-sm-2"></i>
                    <a class="col-sm-10" href="index.php?view=software_developement&hfun=1&lang=en">Software Developement</a>
                </li>
                <!--<li><a href="index.php?view=freelancer_contractor&hfun=1&lang=en">Contracting</a></li>-->
            </ul></li>
		  
            <li><a href="index.php?view=blog&lang=en">Blog</a></li>
		    <!--<li><a href="index.php?view=our_client&hfun=1&lang=en">Our Clients</a></li>-->
            <li><a href="index.php?view=our_projects&hfun=1&lang=en">Our Projects</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="index.php?view=contact_us&hfun=1&lang=en">Contact Us</a></li>
            <li><a href="<?php echo explode('lang',$GLOBALS['curr_link'])[0]; ?>" id="flag-link"><img src="./_img/svg/france.svg" /></a></li>
        </ul>
    </div><!-- /.navbar-collapse -->

<style>
.caret-up {
    width: 0; 
    height: 0; 
    border-left: 4px solid rgba(0, 0, 0, 0);
    border-right: 4px solid rgba(0, 0, 0, 0);
    border-bottom: 4px solid;
    display: inline-block;
    margin-left: 2px;
    vertical-align: middle;
}
</style>
<script>
    $(function(){
    $(".dropdown").hover(            
            function() {
                $('.dropdown-menu', this).stop( true, true ).fadeIn("fast");
                $(this).toggleClass('open');
                $('b', this).toggleClass("caret caret-up");                
            },
            function() {
                $('.dropdown-menu', this).stop( true, true ).fadeOut("fast");
                $(this).toggleClass('open');
                $('b', this).toggleClass("caret caret-up");                
            });
    });
    
</script>