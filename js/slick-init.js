jQuery(document).ready(function($){
	$('.slider-for').slick({
	 slidesToShow: 1,
	 slidesToScroll: 1,
	 arrows: true,
	 fade: false,
	 asNavFor: '.slider-nav'
   });
   $('.slider-nav').slick({
	 slidesToShow: 1,
	 slidesToScroll: 1,
	 asNavFor: '.slider-for',
	 dots: true,
	 centerMode: true,
	 focusOnSelect: true,
	 arrows: true,
	 autoplay: true,
	 autoplaySpeed: 7000
   });
});

jQuery(document).ready(function($){
	$('.multiple-items').slick({
		infinite: true,
		slidesToShow: 4,
		slidesToScroll: 1,
		arrows: true,
	  });
   $('.multiple-nav').slick({
	 slidesToShow: 4,
	 slidesToScroll: 1,
	 asNavFor: '.multiple-items',
	 dots: false,
	 centerMode: false,
	 focusOnSelect: true,
	 arrows: true,
	 autoplay: true,
	 autoplaySpeed: 7000
   });
});

