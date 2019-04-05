jQuery(document).ready(function($) {

    // $('.about-content').height(150);
      
    $('.readMore').click(function() {     
        
        var $this = $(this);
           
        if ( $( this ).hasClass( "readMore" ) ) {   
            $this.toggleClass('readMore readLess');                            
            $this.text('Read Less -');
            $this.prev('.about-text-remaining').slideDown();             
        } 
        
        else if ( $( this ).hasClass( "readLess" ) ) { 
            // alert($(this).attr("class")); 
            $this.toggleClass('readMore readLess');                 
            $this.text('Read More +'); 
            $this.prev('.about-text-remaining').slideUp();                             
        }
    });     
});
