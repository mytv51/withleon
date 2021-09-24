// JavaScript Document

//slider
jQuery(function() {
	$('.mv-slider').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		fade: true,
		autoplay: true,
		autoplaySpeed: 2000,
		speed: 4000,
		arrows: false,
		pauseOnHover: false
	});
});


//アイコン表示
var item = '.type-wrap .item';
var item_n = '.type-wrap .item:nth-child(n+5)';
$(function() {
	$('.room-area .text-link').on('click', function() {
		
		if($(item_n).is(':hidden')){
			$(item).show();
		}	else {
			$(item_n).hide();
		}
		
	});
});