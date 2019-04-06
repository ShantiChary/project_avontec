jQuery(function ($) {
    $(document).ready(function () {

        $(window).scroll(function () {
            if ($(this).scrollTop() > 100) {
                $('.scrollToTop').fadeIn();
            } else {
                $('.scrollToTop').fadeOut();
            }
        });

        $('.scrollToTop').click(function () {
            $("html, body").animate({
                scrollTop: 0
            }, 600);
            return false;
        });

    });
});


jQuery(document).ready(function($){
	//Sticky
	var stickyNavTop = $('#block-header').offset().top - 80; 
    var topHeight = $('.header-top-fixed').outerHeight();
  
	var stickyNav = function(){  
		var scrollTop = $(window).scrollTop();  
		       
		if (scrollTop >= stickyNavTop) {   
		    $('#block-header').css({
                'position': 'fixed',
                'top': topHeight+'px'
            }),
            $('#content.site-content').css({
                'margin-top': 120+'px'
            }); 
		} else {  
		    $('#block-header').css({
                'position': 'relative',
                'top': '0'
            }),
            $('#content.site-content').css({
                'margin-top': '0'
            });   
		}  
	};  
	  
	stickyNav();  
	  
	$(window).scroll(function() {  
	    stickyNav();  
	});
});