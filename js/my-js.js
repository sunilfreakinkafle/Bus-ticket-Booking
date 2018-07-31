// JavaScript Document

$(function(){	
	//$("body").append('<div class="btn btn-primary btn-sm backtotop" style="position:fixed;bottom:5px;right:5px;display:none;"><i class="glyphicon glyphicon-chevron-up"></i></div>');
	
	/*$(window).scroll(function() {
		if ($(this).scrollTop() > 10) {
			$('.backtotop').fadeIn();
		} else {
			$('.backtotop').fadeOut();
		}
	});*/

	$(".backtotop").click(function(){	
	   $("html, body").animate({scrollTop: 0}, 1000);
	});	
	
	
	$(".package-tab ul li:first-child").addClass('active');
	$(".package-tab > .tab-content div:first-child").addClass('active');
	
	// ADD SLIDEDOWN ANIMATION TO DROPDOWN //
  jQuery(function($) {
  	if($(window).width()>769){
  		$('.navbar .dropdown').hover(function() {
            $(this).find('.dropdown-menu').first().stop(true, true).delay(250).slideDown();

        }, function() {
            $(this).find('.dropdown-menu').first().stop(true, true).delay(100).slideUp();

        });
    }
  });
  
});