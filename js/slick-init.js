// jQuery(document).ready(function($){
// 	$('.slider-for').slick({
// 		slidesToShow: 1,
// 		slidesToScroll: 1,
// 		arrows: false,
// 		fade: true,
// 		asNavFor: '.slider-nav'
// 	});
// 	$('.slider-nav').slick({
// 		slidesToShow: 3,
// 		slidesToScroll: 1,
// 		asNavFor: '.slider-for',
// 		dots: true,
// 		centerMode: true,
// 		focusOnSelect: true
// 	});
// });


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