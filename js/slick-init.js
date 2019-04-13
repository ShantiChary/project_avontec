jQuery(document).ready(function($){
	$('.slider-for').slick({
	 slidesToShow: 1,
	 slidesToScroll: 1,
	 dots: false,
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


	// $('.news-multiple').slick({
	// 	infinite: true,
	// 	slidesToShow: 3,
	// 	slidesToScroll: 1,
	// 	arrows: false,
	// 	fade: true,
	// 	asNavFor: '.news-nav'
	// });
	// $('.news-nav').slick({
	// 	slidesToShow: 3,
	// 	slidesToScroll: 1,
	// 	asNavFor: '.news-multiple',
	// 	arrows: true,
	// 	autoplay: true,
	// 	autoplaySpeed: 3000,
	// 	focusOnSelect: true
	// });
});
