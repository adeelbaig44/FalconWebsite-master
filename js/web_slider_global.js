// JavaScript Document
function changeTab(formName, tabName) {
	$("form[name = " + formName + "] > input[name = 'target']").each(function() {
		this.value = tabName;
	});

	$("form[name = " + formName + "]").submit();
}
function submitForm(formName) {
	$("form[name = " + formName + "]").submit();
}
function turnPage(formName, page) {
	$("form[name = " + formName + "] > input[name = 'page']").each(function() {
		this.value = parseInt(page);
	});
	$("form[name = " + formName + "]").submit();
}

$(document).ready(function() {

	/**
	 * Globla IE < 9 hack for checkboxes
	 **/
	 if(jQuery.browser.msie && jQuery.browser.version<9){


		 $('label.checkboxLabel').click(function(){
			if($(this).parents('div.inputShim:first').find('input.checkbox').attr('checked')=='checked'){
				$(this).removeClass('checked');
				$(this).parents('div.inputShim:first').find('input.checkbox').removeAttr('checked');
			}
			else{
				$(this).parents('div.inputShim:first').find('input.checkbox').attr('checked','checked');
				$(this).addClass('checked');
			}
		 });
		 
		 $('label.radioLabel').click(function(){

			/**
			 * uncheck all checkboxes
			 **/
			$("input[name='preferred[]']").each(function(){
				$(this).removeAttr('checked');
				$(this).parents('div.inputField:first').find('label').removeClass('radioChecked');
			});


			if($(this).parents('div.inputField:first').find("input[type='radio']").attr('checked')=='checked'){
				$(this).removeClass('radioChecked');
				$(this).parents('div.inputField:first').find("input[type='radio']").removeAttr('checked');


			}
			else{
				$(this).parents('div.inputField:first').find("input[type='radio']").attr('checked','checked');
				$(this).addClass('radioChecked');
			}
		 });
	 }

    setUpMenu();
    setUpKenBurnsBanner();
    setUpFooterOfficeMenu();
    setUpHilightBoxes();
    setUpCarousel();
    setUpHeaderLoginMenu();
    setUpShareButtons();

	if($("select").length>0){
		$("select").dropkick({startSpeed: 0,
			  change: function (value, label) {
				 if($(this).attr('name')=='vessel_builder_id' || $(this).attr('name')=='max_age' || $(this).attr('name')=='min_guests'){
					$(this).val(value);
					$(this).trigger('change');
					 ajaxGetSearchCount();
				 }
				 if($(this).attr('name')=='quick_jump_to_yacht_profile'){
					document.location.href = value;
				 }
			  }		
		});
	}

    // Language select
    jQuery('ul.siteLanguages li a').click(function(e){
        e.preventDefault();
        e.stopPropagation();
        language = $(this).parent().attr('class');

        $.ajax({
            type: 'POST',
            url: '/site/switch_language',
            data: { url: document.location.href, language: language},
            success: function(data) { document.location.href = data.url; },
            dataType: "json"
        });

        return true;
    });
});

/** Main menu **/
var menu_animating = false;
var menu_open = false;
var menu_current_item = null;
var menu_hover = false;
var menu_data_id = '';;
var menu_close_countdown = false;
var menu_close_countdown_ms = 0;
var menu_close_countdown_default = 500;
var current_section = '';
var header_height = 0;

var pageX = 0;
var pageY = 0;

// Settings
var normal_show_height = 100;
var normal_hide_height = 170;
var active_show_height = 130;
var active_hide_height = 170;

function setUpMenu() {
    header_height = $('#headerNavigationContainer').height();

    // Move all background images down
    $('nav ul li a').each(function() {
        if ($(this).hasClass('active')) {
            $(this).css( {padding: "0px 0px 0px 0px" });
            $(this).css( {backgroundPosition: "50% 130%" });
        }
        else {
            $(this).css( {backgroundPosition: "50% 170%" });
        }
    });



    // Grab the current section (if available)
    var selected_item = $('nav ul li a.active');
    if (selected_item.length) {
        current_section = selected_item.attr('data-id');
    }

    $('.navAdditonal').hide();

    var device = $('#headerInner').attr('data-id');
    if (device == 'tablet') {
        menuInit();
    }
    else {
        $(document).mousemove(function(e){
            pageX = e.pageX;
            pageY = e.pageY;
        });

        setTimeout(checkMouseMovement, 50);
    }
}

function checkMouseMovement() {
    if (pageX > 0 || pageY > 0) {
        // Figure out if the mouse is already over one of the nav items
        $('nav ul li a[data-id]').each(function (e) {
            var x = this.offsetLeft;
            var y = this.offsetTop;
        });

        menuInit();
    }
    else {
        setTimeout(checkMouseMovement, 50);
    }
}

function menuInit() {

    $('nav ul li a[data-id]').bind('mouseenter', function(){
        menu_hover = true;
        menu_data_id = $(this).attr('data-id');
        openMenu(menu_data_id);
    });

    $('nav ul li a[data-id]').bind('mouseleave', function(){
        menu_hover = false;
        closeMenu();
    });

    $('#navAdditonalContainer').bind('mouseenter', function(){
        menu_close_countdown = false;
    });

    $('#navAdditonalContainer').bind('mouseleave', function(){
        menu_close_countdown = true;
    });

    setInterval('checkMenuClose()', 100);
}

function animateMenu(height, callback) {
    menu_animating = true;
    $('#headerNavigationContainer').stop().animate({
        height: height
    }, {
        duration: 500,
        specialEasing: {
            width: 'linear',
            height: 'easeInOutExpo'
        },
        complete: function() {
            menu_animating = false;

            if (height == header_height) {
                menu_open = false;
            }
            else {
                menu_open = true;
            }

            if (callback != undefined) {
                callback();
            }
        }
    });
}

function openMenu(data_id) {

    menu_close_countdown = false;
    resetMenuCountdown();

    // Find the appropriate .navAdditonal element with the same data-id
    var subMenuItem = $('.navAdditonal[data-id="'+data_id+'"]');

    if (subMenuItem.length == 0) {
        return; // no matching submenu
    }

    $('nav ul li a[data-id]').each(function() {
        if ($(this).attr('data-id') != data_id) {
            $(this).removeClass('active');
//            $(this).removeClass('arrow');

            $(this).stop().animate({'background-position': '50% '+normal_hide_height+'%'}, 100, 'easeInCirc');
        }
    });

    var height = $(subMenuItem).height() + header_height;

    // Same menu item?
    if (menu_current_item != null && menu_current_item.attr('data-id') == subMenuItem.attr('data-id') && menu_open == true) {
        // do nothing
        return;
    }

    if ( menu_open == true) {
        // menu is already open?

        $('nav ul li a[data-id="'+data_id+'"]').css( {padding: "0px 0px 5px 0px" });
        $('nav ul li a[data-id="'+data_id+'"]').stop().animate({'background-position': '50% '+normal_show_height+'%'}, 250, 'easeOutBack');

//        $('nav ul li a[data-id="'+data_id+'"]').addClass('active');
//        $('nav ul li a[data-id="'+data_id+'"]').addClass('arrow');

        if (menu_current_item != null) {
            // Fade out the current item, then animate the menu, then fade in the new item
            $(menu_current_item).stop().fadeOut(250);
        }

//        console.log(height);

        animateMenu(height, function() {
            subMenuItem.fadeIn(250);
        });
    }
    else {

        $(menu_current_item).hide();
        subMenuItem.fadeIn(250);

        if ( $('nav ul li a[data-id="'+data_id+'"]').hasClass('active') ) {
            $('nav ul li a[data-id="'+data_id+'"]').delay(150).queue(function() {
                $(this).css( {backgroundPosition: "50% 100%" });
                $(this).css( {padding: "0px 0px 5px 0px" });
                $(this).dequeue();
            });
        }
        else {
            $('nav ul li a[data-id="'+data_id+'"]').css( {padding: "0px 0px 5px 0px" });
            $('nav ul li a[data-id="'+data_id+'"]').stop().delay(150).animate({'background-position': '50% '+normal_show_height+'%'}, 250, 'easeOutBack');
        }


        // then show?
        animateMenu(height, function() {
//            $('nav ul li a[data-id="'+data_id+'"]').addClass('active');
//            $('nav ul li a[data-id="'+data_id+'"]').addClass('arrow');
        });
    }

    menu_current_item = subMenuItem;

}

function resetMenuCountdown() {
    menu_close_countdown_ms = menu_close_countdown_default;
}

function closeMenu() {
    menu_close_countdown = true;
}

function quickMenuClose(){
    menu_close_countdown = true;
    menu_close_countdown_ms = 100;
    return;
}

function checkMenuClose() {

    if (menu_animating == false && menu_hover == true) {
        openMenu(menu_data_id);
    }

    if (menu_close_countdown == false) {
        return;
    }

    var called_every = 100;

    if (menu_close_countdown_ms == 100) {
        menu_close_countdown_ms = 0;

        var data_id = menu_current_item.attr('data-id');

        $('.navAdditonal[data-id="'+data_id+'"]').fadeOut();

        animateMenu(header_height, function() {
            // Hide all sub menus
            $('.navAdditonal').hide();

            // If there is a current section item set, put it back as active
            if (current_section != "") {
                $('nav ul li a[data-id="'+current_section+'"]').addClass('active');
                $('nav ul li a[data-id="'+current_section+'"]').css( {padding: "0px 0px 0px 0px" });
                $('nav ul li a[data-id="'+current_section+'"]').stop().animate({'background-position': '50% '+active_show_height+'%'}, 250, 'easeOutBack');
                // do not add arrow
            }
        });

        $('nav ul li a[data-id]').each(function() {

            $(this).stop().animate({'background-position': '50% '+normal_hide_height+'%'}, 150, 'easeInCirc');

            $(this).removeClass('active');
        });

        slideshow_paused = false;
        menu_close_countdown = false;
        return;
    }
    else if( menu_close_countdown_ms < 0 ) {
        // shouldn't happen
        menu_close_countdown_ms = 100;
    }

    menu_close_countdown_ms = menu_close_countdown_ms-called_every;
}


/* Ken burns banner */
function setUpKenBurnsBanner() {

    if ( $('.kenBurnsBanner').length == 0 ) {
        return;
    }

    var options = {
        skin: 'opportune',
        circleRadius:8,
        circleLineWidth:4,
        circleColor: "#ffffff", //849ef3
        circleAlpha: 50,
        behindCircleColor: "#000000",
        behindCircleAlpha: 20,
        thumbsWrapperMarginTop:-80,
        pauseOnMouseOver: false,
        showPreviewThumbs: false,
        duration: 10,
        autoPlay: 10,
		enableTouchScreen: false
    };

    options.responsive = true;
    options.width100Proc = true;
    options.width = 1680;
    options.height = 450;

    $('.kenBurnsBanner').bannerscollection_kenburns(options);
}

function setUpFooterOfficeMenu() {
    // Show hide offices in footer
    $('.officeButton').click(function() {

        var height = $('.footerSectionContainer .footerSection').height();

        if ( $('.footerSectionContainer').height() != 0 ) {
            height = 0;
        }

        $('#footerSectionContainer').stop().animate({
            height: height
        }, {
            duration: 750,
            specialEasing: {
                width: 'linear',
                height: 'easeInOutExpo'
            }
        });
    });
}

function setUpHeaderLoginMenu() {
    $('.jsShowHeaderLogin').click(function(e) {
        e.preventDefault();

        var height = $('#headerLogin').attr('data-id');

        if ( $('#headerLogin').height() == height ) {
            height = 0;
            $(this).removeClass('active');
        }
        else {
            $(this).addClass('active');
        }

        $('#headerLogin').stop().animate({
            height: height
        }, {
            duration: 750,
            specialEasing: {
                width: 'linear',
                height: 'easeInOutExpo'
            }
        });
    });
}

function setUpHilightBoxes() {

    $('.sectionHilightContainer').bind('mouseenter', function(){
        $('.sectionHilight', this).animate({
            bottom: 0, opacity: 0.9
        }, {queue:false, duration:300, easing:"easeOutExpo"} );
    });

    $('.sectionHilightContainer').bind('mouseleave', function(){
        $('.sectionHilight', this).animate({
            bottom: -142, opacity: 1
        }, {queue:false, duration:300, easing:"easeOutExpo"} );
    });

}

function setUpCarousel() {
    if($('.contentCarousel').length == 0 && $('.jsContentCarouselWithLightox').length == 0) {
        return;
    }

    $('.contentCarousel').each(function() {
        var options = {
            theme          : 'default',
            autoPlay       : true,
            buildStartStop : false,
            hashTags       : false,
            expand: true
        };

        if ($(this).hasClass('carouselFade')) {
            options.mode = 'fade';
        }
		else{
			options.mode = 'horiz';
		}
        if ($(this).hasClass('carouselHideControls')) {
            options.buildArrows = false;
            options.buildNavigation = false;
            options.pauseOnHover = false;
        }
        if ($(this).hasClass('carouselDouble')) {
            options.showMultiple = 2;
        }
		if ($(this).hasClass('carouselHideNavigation')) {
            options.buildNavigation = false;
        }
        if ($(this).hasClass('carouselTriple')) {
            options.showMultiple = 3;
        }

        $(this).anythingSlider(options);

        setInterval(resizeCarouselImages, 100);
    });

    resizeCarouselImages();

    $('.jsContentCarouselWithLightox').each(function() {
        var options = {
            buildStartStop : false,
            autoPlay       : true,
            hashTags       : false
        };

        if ($(this).hasClass('carouselFade')) {
            options.mode = 'fade';
        }
        if ($(this).hasClass('carouselHideControls')) {
            options.buildArrows = false;
            options.buildNavigation = false;
            options.pauseOnHover = false;
        }

        $(this).anythingSlider(options).find('.panel:not(.cloned) img') // ignore the cloned panels
		   .attr('rel','group')            // add all slider images to a colorbox group
		   .colorbox({
			 href: function(){ return $(this).parent().attr('href'); },
			 // use $(this).attr('title') for specific image captions
			 title: 'Press escape to close',
			 rel: 'group',
			 photo: true
		   });

        setInterval(resizeCarouselImages, 100);
    });


}

function setUpShareButtons() {
//    $('.socialMedia a').each(function())
}

function resizeCarouselImages() {
    $('.carouselSlideFull>img').each(function(i, img) {
        var new_left = Math.ceil(($(img).parent().width()/2) - ($(img).width()/2));

        if ( (new_left+'px') == $(img).css('left')) {
            return;
        }

        $(img).css({position: "relative", left: new_left});
    });
}

/* http://keith-wood.name/backgroundPos.html
 Background position animation for jQuery v1.1.0.
 Written by Keith Wood (kbwood{at}iinet.com.au) November 2010.
 Dual licensed under the GPL (http://dev.jquery.com/browser/trunk/jquery/GPL-LICENSE.txt) and
 MIT (http://dev.jquery.com/browser/trunk/jquery/MIT-LICENSE.txt) licenses.
 Please attribute the author if you use it. */
(function($){var g='bgPos';var h=!!$.Tween;if(h){$.Tween.propHooks['backgroundPosition']={get:function(a){return parseBackgroundPosition($(a.elem).css(a.prop))},set:function(a){setBackgroundPosition(a)}}}else{$.fx.step['backgroundPosition']=setBackgroundPosition};function parseBackgroundPosition(c){var d=(c||'').split(/ /);var e={center:'50%',left:'0%',right:'100%',top:'0%',bottom:'100%'};var f=function(a){var b=(e[d[a]]||d[a]||'50%').match(/^([+-]=)?([+-]?\d+(\.\d*)?)(.*)$/);d[a]=[b[1],parseFloat(b[2]),b[4]||'px']};if(d.length==1&&$.inArray(d[0],['top','bottom'])>-1){d[1]=d[0];d[0]='50%'}f(0);f(1);return d}function setBackgroundPosition(a){if(!a.set){initBackgroundPosition(a)}$(a.elem).css('background-position',((a.pos*(a.end[0][1]-a.start[0][1])+a.start[0][1])+a.end[0][2])+' '+((a.pos*(a.end[1][1]-a.start[1][1])+a.start[1][1])+a.end[1][2]))}function initBackgroundPosition(a){var b=$(a.elem);var c=b.data(g);b.css('backgroundPosition',c);a.start=parseBackgroundPosition(c);a.end=parseBackgroundPosition($.fn.jquery>='1.6'?a.end:a.options.curAnim['backgroundPosition']||a.options.curAnim['background-position']);for(var i=0;i<a.end.length;i++){if(a.end[i][0]){a.end[i][1]=a.start[i][1]+(a.end[i][0]=='-='?-1:+1)*a.end[i][1]}}a.set=true}$.fn.animate=function(e){return function(a,b,c,d){if(a['backgroundPosition']||a['background-position']){this.data(g,this.css('backgroundPosition')||'left top')}return e.apply(this,[a,b,c,d])}}($.fn.animate)})(jQuery);