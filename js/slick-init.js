jQuery(document).ready(function($){
	$('.slider-for').slick({
	 slidesToShow: 1,
	 slidesToScroll: 1,
	 arrows: false,
	 fade: false,
	 asNavFor: '.slider-nav'
   });
   $('.slider-nav').slick({
	 slidesToShow: 1,
	 slidesToScroll: 1,
	 asNavFor: '.slider-for',
	 dots: false,
	 centerMode: true,
	 focusOnSelect: true,
	 arrows: false,
	 autoplay: true,
	 autoplaySpeed: 7000
   });
});


jQuery(document).ready(function($){
	$('.autoplay').slick({
		slidesToShow: 3,
		slidesToScroll: 1,
		autoplay: true,
		arrows: true,
		autoplaySpeed: 3000
		// centerMode: true
	});
	$('.slider-nav').slick({
		slidesToShow: 3,
		slidesToScroll: 1,
		asNavFor: '.slider-for',
		dots: true,
		arrows: true,
		centerMode: true,
		focusOnSelect: true
	});
});