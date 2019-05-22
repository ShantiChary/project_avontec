// jQuery(function ($) {
//     $(document).ready(function () {
    
    jQuery(document).ready(function($){
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
// });


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
            })
            $('#content.site-content').css({
                'margin-top': 150+'px'
            })
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


jQuery(document).ready(function($){
    // var modal = document.querySelector(".modal");
    var modal = document.getElementById("modal-id");
    // var trigger = document.querySelector(".trigger");
    var trigger = document.getElementById("trigger-id");
    // var closeButton = document.querySelector(".close-button");
    var closeButton = document.getElementById("close-button-id");

    // window.onload=function(){
    if(modal && trigger && closeButton){    
        trigger.addEventListener("click", toggleModal);
        closeButton.addEventListener("click", toggleModal);
        window.addEventListener("click", windowOnClick);
    };

    function windowOnClick(event) {
        if (event.target === modal) {
            toggleModal();
        }
    }

    function toggleModal() {
        modal.classList.toggle("show-modal");
    }

});

// jQuery(document).ready(function($){
//     var wpcf7Elm = document.querySelector( '.wpcf7' );
 
//     wpcf7Elm.addEventListener( 'wpcf7submit', function( event ) {
//         alert( "Fire!" );
//     }, false );
// });