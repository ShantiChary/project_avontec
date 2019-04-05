jQuery(document).ready(function($) {
    $('.faq-item> .answer').hide();

    var $accordionFAQ = $('.faq-item> .open-answer'); 

    $accordionFAQ.click(function(){

    $('.plus-icon').removeClass('minus-icon');
    $(this).find( '.plus-icon' ).addClass('minus-icon');

    var $thisSection = $(this).next();
    var $plusIcon = $('.plus-icon');

    if($thisSection.is(':visible')){
        $thisSection.slideUp();
        $plusIcon.removeClass('minus-icon');		
    }else{
        $('.faq-item> .answer:visible').slideUp();	
        $thisSection.slideDown();
    }
    });
});

jQuery(document).ready(function($) {
    $('.faq-item2> .answer2').hide();

    var $accordionFAQ = $('.faq-item2> .open-answer2'); 

    $accordionFAQ.click(function(){

    $('.plus-icon2').removeClass('minus-icon2');
    $(this).find( '.plus-icon2' ).addClass('minus-icon2');

    var $thisSection = $(this).next();
    var $plusIcon = $('.plus-icon2');

    if($thisSection.is(':visible')){
        $thisSection.slideUp();
        $plusIcon.removeClass('minus-icon2');		
    }else{
        $('.faq-item2> .answer2:visible').slideUp();	
        $thisSection.slideDown();
    }
    });
});