window.awe = window.awe || {};
awe.init = function () {
	awe.showPopup();
	awe.hidePopup();	
};
$(document).ready(function ($) {
	"use strict";
	awe_backtotop();
	awe_category();
	awe_lazyloadImage();
	awe_tab();
	convertprice();

	$('.filter-content .aside-item .aside-title').click(function(e){
		if ($(this).parent().hasClass('active')) {
			$('.filter-content .aside-item').removeClass('active');
		} else {
			$('.filter-content .aside-item').removeClass('active');
			$(this).parent().addClass('active');
		}
	})
	$('.filter-content .aside-item .title').click(function(e){
		$(this).parent().toggleClass('active');
	});

});


$('.close-pop').click(function() {
	$('#popup-cart').removeClass('opencart');
	$('body').removeClass('opacitycart');
});
$(document).on('click','.overlay, .close-popup, .btn-continue, .fancybox-close', function() {   
	hidePopup('.awe-popup'); 	
	setTimeout(function(){
		$('.loading').removeClass('loaded-content');
	},500);
	return false;
})
function awe_lazyloadImage() {
	var ll = new LazyLoad({
		elements_selector: ".lazyload",
		load_delay: 500,
		threshold: 0
	});
} window.awe_lazyloadImage=awe_lazyloadImage;
function awe_showLoading(selector) {
	var loading = $('.loader').html();
	$(selector).addClass("loading").append(loading); 
}  window.awe_showLoading=awe_showLoading;
function awe_hideLoading(selector) {
	$(selector).removeClass("loading"); 
	$(selector + ' .loading-icon').remove();
}  window.awe_hideLoading=awe_hideLoading;
function awe_showPopup(selector) {
	$(selector).addClass('active');
}  window.awe_showPopup=awe_showPopup;
function awe_hidePopup(selector) {
	$(selector).removeClass('active');
}  window.awe_hidePopup=awe_hidePopup;
awe.hidePopup = function (selector) {
	$(selector).removeClass('active');
}
$(document).on('click','.overlay, .close-window, .btn-continue, .fancybox-close', function() {   
	awe.hidePopup('.awe-popup'); 
	setTimeout(function(){
		$('.loading').removeClass('loaded-content');
	},500);
	return false;
})
var wDWs = $(window).width();
if (wDWs < 1199) {
	/*Remove html mobile*/
	$('.quickview-product').remove();
}
function awe_convertVietnamese(str) { 
	str= str.toLowerCase();
	str= str.replace(/à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ/g,"a"); 
	str= str.replace(/è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ/g,"e"); 
	str= str.replace(/ì|í|ị|ỉ|ĩ/g,"i"); 
	str= str.replace(/ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ/g,"o"); 
	str= str.replace(/ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ/g,"u"); 
	str= str.replace(/ỳ|ý|ỵ|ỷ|ỹ/g,"y"); 
	str= str.replace(/đ/g,"d"); 
	str= str.replace(/!|@|%|\^|\*|\(|\)|\+|\=|\<|\>|\?|\/|,|\.|\:|\;|\'| |\"|\&|\#|\[|\]|~|$|_/g,"-");
	str= str.replace(/-+-/g,"-");
	str= str.replace(/^\-+|\-+$/g,""); 
	return str; 
} window.awe_convertVietnamese=awe_convertVietnamese;
function awe_category(){
	$('.nav-category .fa-plus').click(function(e){
		$(this).toggleClass('fa-minus fa-plus');
		$(this).parent().toggleClass('active');
	});
	$('.nav-category .fa-minus').click(function(e){
		$(this).toggleClass('fa-plus');
		$(this).parent().toggleClass('active');
	});
} window.awe_category=awe_category;


function awe_backtotop() { 
	$(window).scroll(function() {
		$(this).scrollTop() > 200 ? $('.backtop').addClass('show') : $('.backtop').removeClass('show')
	});
	$('.backtop').click(function() {
		return $("body,html").animate({
			scrollTop: 0
		}, 800), !1
	});
} window.awe_backtotop=awe_backtotop;
function awe_tab() {
	$(".e-tabs:not(.not-dqtab)").each( function(){
		$(this).find('.tabs-title li:first-child').addClass('current');
		$(this).find('.tab-content').first().addClass('current');
		$(this).find('.tabs-title li').click(function(e){
			var tab_id = $(this).attr('data-tab');
			var url = $(this).attr('data-url');
			$(this).closest('.e-tabs').find('.tab-viewall').attr('href',url);
			$(this).closest('.e-tabs').find('.tabs-title li').removeClass('current');
			$(this).closest('.e-tabs').find('.tab-content').removeClass('current');
			$(this).addClass('current');
			$(this).closest('.e-tabs').find("#"+tab_id).addClass('current');

		});    
	});
} window.awe_tab=awe_tab;
$('.dropdown-toggle').click(function() {
	$(this).parent().toggleClass('open'); 	
}); 
$('.btn-close').click(function() {
	$(this).parents('.dropdown').toggleClass('open');
}); 
$(document).on('keydown','#qty, .number-sidebar',function(e){-1!==$.inArray(e.keyCode,[46,8,9,27,13,110,190])||/65|67|86|88/.test(e.keyCode)&&(!0===e.ctrlKey||!0===e.metaKey)||35<=e.keyCode&&40>=e.keyCode||(e.shiftKey||48>e.keyCode||57<e.keyCode)&&(96>e.keyCode||105<e.keyCode)&&e.preventDefault()});
$(document).on('click','.qtyplus',function(e){
	e.preventDefault();   
	fieldName = $(this).attr('data-field'); 
	var currentVal = parseInt($('input[data-field='+fieldName+']').val());
	if (!isNaN(currentVal)) { 
		$('input[data-field='+fieldName+']').val(currentVal + 1);
	} else {
		$('input[data-field='+fieldName+']').val(0);
	}
});
$(document).on('click','.qtyminus',function(e){
	e.preventDefault(); 
	fieldName = $(this).attr('data-field');
	var currentVal = parseInt($('input[data-field='+fieldName+']').val());
	if (!isNaN(currentVal) && currentVal > 1) {          
		$('input[data-field='+fieldName+']').val(currentVal - 1);
	} else {
		$('input[data-field='+fieldName+']').val(1);
	}
});
$('.menubutton').click(function(e){
	e.stopPropagation();
	$('.wrapmenu_right').toggleClass('open_sidebar_menu');
	$('.opacity_menu').toggleClass('open_opacity');
});
$('.opacity_menu').click(function(e){
	$('.wrapmenu_right').removeClass('open_sidebar_menu');
	$('.opacity_menu').removeClass('open_opacity');
});
$('.open-filters').click(function(e){
	e.stopPropagation();
	$(this).toggleClass('openf');
	$('.dqdt-sidebar').toggleClass('openf');
});
$(".menubar_pc").click(function(){ 
	$('.wrapmenu_full').slideToggle('fast');
	$('.wrapmenu_full, .cloed').toggleClass('open_menu');
	$('.dqdt-sidebar, .open-filters').removeClass('openf')
});
$(".cloed").click(function(){ 
	$(this).toggleClass('open_menu');
	$('.wrapmenu_full').slideToggle('fast');
});
$(".opacity_menu").click(function(){ 
	$('.opacity_menu').removeClass('open_opacity');
});
if ($('.dqdt-sidebar').hasClass('openf')) {
	$('.wrapmenu_full').removeClass('open_menu');
} 
$('.ul_collections li > .fa').click(function(){
	$(this).parent().toggleClass('current');
	$(this).toggleClass('fa-chevron-up fa-chevron-down');
	$(this).next('ul').slideToggle("fast");
	$(this).next('div').slideToggle("fast");
});
$('.searchion').mouseover(function() {
	$('.searchmini input').focus();                    
})
$('.quenmk').on('click', function() {
	$('.h_recover').slideToggle();
});
$('a[data-toggle="collapse"]').click(function(e){
	if ($(window).width() >= 767) { 
		// Should prevent the collapsible and default anchor linking 
		// behavior for screen sizes equal or larger than 768px.
		e.preventDefault();
		e.stopPropagation();
	}    
});

/*************************Convertpricefunction**********************/
/*******************************************************************/



function convertprice() { 
	$('.product_convert').each( function(){

		var pricetext = $(this).find('.price-box .product-price-convert').text().replace('₫', '').replace('.', '').replace('.', '').replace('.', ''),
			so = pricetext.toString().length;
		/*
			docprice = docso.doc(pricetext);
			*/

		/*product-price*/
		if (so <= 6) {
			var nghin = $(this).find('.price-box .product-price-convert').text().replace('₫', '');
			$(this).find('.product-price-convert').html(nghin);

		} else if (so >= 7 && so <= 9) {
			var trieu = $(this).find('.price-box .product-price-convert').text().replace('₫', '').replace('.', 'tr ').replace('000.000', '');
			$(this).find('.product-price-convert').html(trieu);


		} else if (so >= 10) {
			if (pricetext == '1000000000') {
				$(this).find('.product-price-convert').html('1 tỷ');
			}else {
				var ty = $(this).find('.price-box .product-price-convert').text().replace('₫', '').replace('.', 'tỷ ').replace('000', '').replace('.', 'tr ').replace('000', '').replace('.', '');
				$(this).find('.product-price-convert').html(ty);
			}

		} else {
			var nghin = $(this).find('.price-box .product-price-convert').text().replace('₫', '');
			$(this).find('.product-price-convert').html(nghin);
		}
		/*compare*/



	});
}window.convertprice=convertprice;