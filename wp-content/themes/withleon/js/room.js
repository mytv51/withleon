// JavaScript Document

//slider
jQuery(function() {
$( '.slider-wrap' ).each( function( i ) {
    var $_t = $( this );

		//main-slider
			$_t.find('.slider-for').addClass('slider-for'+i).slick({
				slidesToShow: 1,
				slidesToScroll: 1,
				fade: true,
				asNavFor: '.slider-nav',
				arrows: true,
				prevArrow: '<div class="slide-arrow white prev-arrow"><span></span></div>',
				nextArrow: '<div class="slide-arrow white next-arrow"><span></span></div>',
				asNavFor: '.slider-nav' + i
			});
		//thmbnail
			$_t.find('.slider-nav').addClass('slider-nav'+i).slick({
				slidesToShow: 4,
				slidesToScroll: 1,
				asNavFor: '.slider-for',
				autoplay: true,
				autoplaySpeed: 3000,
				dots: false,
				focusOnSelect: true,
				arrows: true,
				prevArrow: '<div class="slide-arrow prev-arrow"><span></span></div>',
				nextArrow: '<div class="slide-arrow next-arrow"><span></span></div>',
				asNavFor: '.slider-for' + i
			});
	}); 

});


//アイコン表示
var icon = '.icon-wrap ul';
$(function() {
	$('.icon-wrap .text-link').on('click', function() {
		if($(icon).hasClass('active')) {
			$(icon).removeClass('active');
		} else {
			$(icon).addClass('active');
		}
	});
});


//tab切り替え
var searchItem = '.tab-btn li';   // 絞り込む項目を選択するエリア
var listItem = '.type-wrap .item';       // 絞り込み対象のアイテム
var hideClass = 'hide';         // 絞り込み対象外の場合に付与されるclass名
var activeClass = 'active';     // 選択中のグループに付与されるclass名

$(function() {
	//最初のグループAのみ表示
	$('[data="a"]').addClass(activeClass);

	// 絞り込みを変更
	$(searchItem).on('click', function() {
		$(searchItem).removeClass(activeClass);
		var group = $(this).addClass(activeClass).data('group');
		search_filter(group);
	});
});

//リストの絞り込み
function search_filter(group) {
	$(listItem).addClass(activeClass);
	$(listItem).removeClass(hideClass);

	// リスト内の各アイテムをチェック
	for (var i = 0; i < $(listItem).length; i++) {
		var itemData = $(listItem).eq(i).data('group');

		if(itemData !== group) {
			$(listItem).eq(i).addClass(hideClass);
			$(listItem).eq(i).removeClass(activeClass);
		}
	}
}