
	var ww = $(window).width();
	
	$('.btn_base.fast').click (function(e) {
		$('.Formdetails form .form-group:first-child input').focus();
		$('.Formdetails .formcontact').addClass('hightlight');
		var timerzs = undefined;
		timerzs = setTimeout(() => {
			$('.Formdetails .formcontact').removeClass('hightlight');
			timerzs = undefined;
		}, 1000);
		return $(".Formdetails").animate({
			scrollTop: 0
		}, 800), !1
		
	})

	function validate(evt) {
		var theEvent = evt || window.event;
		var key = theEvent.keyCode || theEvent.which;
		key = String.fromCharCode( key );
		var regex = /[0-9]|\./;
		if( !regex.test(key) ) {
			theEvent.returnValue = false;
			if(theEvent.preventDefault) theEvent.preventDefault();
		}
	}

	var selectCallback = function(variant, selector) {


		if (variant) {


			var form = jQuery('#' + selector.domIdPrefix).closest('form');

			for (var i=0,length=variant.options.length; i<length; i++) {

				var radioButton = form.find('.swatch[data-option-index="' + i + '"] :radio[value="' + variant.options[i] +'"]');
				if (radioButton.size()) {
					radioButton.get(0).checked = true;
				}
			}
		}
		var addToCart = jQuery('.form-product .btn-cart'),
			group = jQuery('.form_product_content'),
			form = jQuery('.form-product .button_actions'),
			form2 = jQuery('.soluong'),
			productPrice = jQuery('.details-promain .special-price .product-price'),
			qty = jQuery('.first_status .availabel'),
			sale = jQuery('.details-promain .old-price .product-price-old'),
			comparePrice = jQuery('.details-promain .old-price .product-price-old'),
			shipping = jQuery('.form_action_top .shipping');

		if (variant && variant.available) {
			if(variant.inventory_management == "bizweb" || variant.inventory_management == "sapo"){
				if (variant.inventory_quantity != 0) {
					qty.html('<link itemprop="availability" href="http://schema.org/OutOfStock" />Còn hàng');
				} else if (variant.inventory_quantity == ''){
					qty.html('<link itemprop="availability" href="http://schema.org/InStock" />Hết hàng');
				}
			} else {
				qty.html('<link itemprop="availability" href="http://schema.org/OutOfStock" />Còn hàng');
			}

			if (variant.requires_shipping == false) {
				shipping.html('(Miễn phí vận chuyển)&nbsp;|&nbsp;');
			}
			group.removeClass('hidden');
			addToCart.html('<span class="text_1">Thêm vào giỏ hàng</span>').removeAttr('disabled');	
			if(variant.price == 0){
				productPrice.html('Liên hệ');	
				comparePrice.hide();
				form.addClass('hidden');
				form2.addClass('hidden');
				sale.removeClass('sale');
				group.addClass('hidden');
				if(variant.inventory_management == "bizweb" || variant.inventory_management == "sapo"){
					if (variant.inventory_quantity != 0) {
						qty.html('<link itemprop="availability" href="http://schema.org/InStock" />Còn hàng');
					} else if (variant.inventory_quantity == ''){
						qty.html('<link itemprop="availability" href="http://schema.org/OutOfStock" />Hết hàng');
					}
				} else {
					qty.html('<link itemprop="availability" href="http://schema.org/InStock" />Còn hàng');
				}
			}else{
				form.removeClass('hidden');
				productPrice.html(Bizweb.formatMoney(variant.price, "{{amount_no_decimals_with_comma_separator}}₫"));
													 // Also update and show the product's compare price if necessary
													 if ( variant.compare_at_price > variant.price ) {
								  comparePrice.html(Bizweb.formatMoney(variant.compare_at_price, "{{amount_no_decimals_with_comma_separator}}₫")).show();
								  sale.addClass('sale');

				if(variant.inventory_management == "bizweb" || variant.inventory_management == "sapo"){
					if (variant.inventory_quantity != 0) {
						qty.html('<link itemprop="availability" href="http://schema.org/InStock" />Còn hàng');
						form2.removeClass('hidden');
						form.removeClass('hidden');
					} else if (variant.inventory_quantity == ''){
						qty.html('<link itemprop="availability" href="http://schema.org/InStock" />Còn hàng');
						form2.removeClass('hidden');
						form.removeClass('hidden');
					}
				} else {
					qty.html('<link itemprop="availability" href="http://schema.org/InStock" />Còn hàng');
					form2.removeClass('hidden');
					form.removeClass('hidden');
				}

			} else {
				comparePrice.hide();  
				sale.removeClass('sale');
				form2.removeClass('hidden');
				if(variant.inventory_management == "bizweb" || variant.inventory_management == "sapo"){
					if (variant.inventory_quantity != 0) {
						qty.html('<link itemprop="availability" href="http://schema.org/InStock" />Còn hàng');
						form2.removeClass('hidden');
						form.removeClass('hidden');
					} else if (variant.inventory_quantity == ''){
						qty.html('<link itemprop="availability" href="http://schema.org/InStock" />Còn hàng');
						form2.removeClass('hidden');
						form.removeClass('hidden');
					}
				} else {
					qty.html('<link itemprop="availability" href="http://schema.org/InStock" />Còn hàng');
					form2.removeClass('hidden');
					form.removeClass('hidden');
				}
			}       										
		}

	} else {
		addToCart.html('<span class="text_1">Hết hàng</span>').attr('disabled', 'disabled');
		qty.html('Hết hàng');
		form.removeClass('hidden');
		form2.addClass('hidden');
		group.removeClass('hidden');

		if (variant.requires_shipping == false) {

			shipping.html('(Miễn phí vận chuyển)&nbsp;|&nbsp;');
		}

		if(variant){
			if(variant.price != 0){
				form.removeClass('hidden');
				productPrice.html(Bizweb.formatMoney(variant.price, "{{amount_no_decimals_with_comma_separator}}₫"));
													 // Also update and show the product's compare price if necessary
													 if ( variant.compare_at_price > variant.price ) {
								  form.addClass('hidden');
				comparePrice.html(Bizweb.formatMoney(variant.compare_at_price, "{{amount_no_decimals_with_comma_separator}}₫")).show();
													 sale.addClass('sale');
								  addToCart.text('Hết hàng').attr('disabled', 'disabled').removeClass('hidden');

				if(variant.inventory_management == "bizweb" || variant.inventory_management == "sapo"){
					if (variant.inventory_quantity != 0) {
						qty.html('<link itemprop="availability" href="http://schema.org/InStock" />Còn hàng');
					} else if (variant.inventory_quantity == ''){
						qty.html('<link itemprop="availability" href="http://schema.org/OutOfStock" />Hết hàng');
						form2.addClass('hidden');
						form.removeClass('hidden');
					}
				} else {
					qty.html('<link itemprop="availability" href="http://schema.org/InStock" />Còn hàng');
				}

			} else {
				comparePrice.hide();   
				sale.removeClass('sale');
				form.addClass('hidden');
				addToCart.text('Hết hàng').attr('disabled', 'disabled').removeClass('hidden');
				if(variant.inventory_management == "bizweb" || variant.inventory_management == "sapo"){
					if (variant.inventory_quantity != 0) {
						qty.html('<link itemprop="availability" href="http://schema.org/InStock" />Còn hàng');
					} else if (variant.inventory_quantity == ''){
						form2.addClass('hidden');
						qty.html('<link itemprop="availability" href="http://schema.org/OutOfStock" />Hết hàng');
						form.removeClass('hidden');

					}
				} else {
					qty.html('<link itemprop="availability" href="http://schema.org/InStock" />Còn hàng');
				}
			}     
		}else{
			productPrice.html('Liên hệ');
			form2.addClass('hidden');
			comparePrice.hide();
			form.addClass('hidden');	
			sale.removeClass('sale');
		}
	}else{
		productPrice.html('Liên hệ');	
		form2.addClass('hidden');
		comparePrice.hide();
		form.addClass('hidden');	
		sale.removeClass('sale');
	}
	}
	/*begin variant image*/
	if (variant && variant.image) {  
		var originalImage = jQuery(".large-image img"); 
		var newImage = variant.image;
		var element = originalImage[0];
		Bizweb.Image.switchImage(newImage, element, function (newImageSizedSrc, newImage, element) {
			jQuery(element).parents('a').attr('data-href', newImageSizedSrc);
			jQuery(element).attr('src', newImageSizedSrc);
			jQuery('.thumb_scroll img').attr('src', newImageSizedSrc);
		});
	} 
	};
	jQuery(function($) {
		

		// Add label if only one product option and it isn't 'Title'. Could be 'Size'.
		

											 // Hide selectors if we only have 1 variant and its title contains 'Default'.
											 
											 $('.selector-wrapper').hide();
		 
		$('.selector-wrapper').css({
			'text-align':'left',
			'margin-bottom':'15px'
		});
	});

	jQuery('.swatch :radio').change(function() {
		var optionIndex = jQuery(this).closest('.swatch').attr('data-option-index');
		var optionValue = jQuery(this).val();
		jQuery(this)
			.closest('form')
			.find('.single-option-selector')
			.eq(optionIndex)
			.val(optionValue)
			.trigger('change');
	});

	$(document).ready(function (e) {
		$('#gallery_slick').slick({
			centerMode: true,
			infinite: true,
			centerPadding: 10,
			slidesToShow: 2,
			slidesToScroll: 1,
			speed: 500,
			variableWidth: true,
			dots: false,
			arrows: true,
			loop:true,
		});
		$('.product_related_slick').slick({
			autoplay: true,
			autoplaySpeed: 6000,
			dots: false,
			arrows: false,
			rows: 1,
			loop: false,
			infinite:false,
			speed: 300,
			slidesToShow: 4,
			slidesToScroll: 2,
			centerPadding: 15,
			responsive: [
				{
					breakpoint: 1366,
					settings: {
						slidesToShow: 4,
						slidesToScroll: 2
					}
				},
				{
					breakpoint: 1200,
					settings: {
						slidesToShow: 3,
						slidesToScroll: 2
					}
				},
				{
					breakpoint: 1024,
					settings: {
						slidesToShow: 3,
						slidesToScroll: 2
					}
				},
				{
					breakpoint: 991,
					settings: {
						slidesToShow: 2,
						slidesToScroll: 2
					}
				},
				{
					breakpoint: 767,
					settings: {
						slidesToShow: 1,
						slidesToScroll: 1
					}
				}
			]
		});

		
		var urlvideo = $('.videoframe').attr('data-clip').split("/");
		var html_iframe = $("<iframe class='hidden'  width='560' height='315' src='#' allow='autoplay; encrypted-media' allowfullscreen></iframe>");
		$(".videoframe").html(html_iframe);
		var timerz = undefined;
		timerz = setTimeout(() => {
			$(".videoframe iframe").attr('src', "https://www.youtube.com/embed/" + urlvideo[4]);
			timerz = undefined;
		}, 500);
		setTimeout(function(){
			$(".videoframe iframe").removeClass('hidden');
		},500);

		$('.contentdetails iframe').remove();
		


	});
	$('#gallery_slick .item a').each(function() {
		$(this).attr('rel','lightbox-demo'); 
	});


	var locations = [
				
		['Căn hộ Star Wish PentHouse', 'Đường Cổ linh,Thạch Bàn,Long Biên,Hà Nội', '/can-ho-star-wish-penthouse', '//bizweb.dktcdn.net/thumb/medium/100/393/384/products/pd-34.jpg?v=1592542128423', 'Cho bán' ],
		
	];
	$(document).ready(function ($) {

		var img_array = $(".contentdetails p img").map(function() {
			return $(this).attr("src");
		});
		
		$(".contentdetails p img").each(function() {
			if ($(this).attr('src').indexOf('360panorama') >= 0) {
				$(this).remove();
			}
		});

		if (img_array.length >= 1) {
			for (var i=0; i<img_array.length; i++) {
				if( img_array[i].indexOf('360panorama') >= 0){
					var imgurl = img_array[i].replace("thumb/large/", "").replace("thumb/grande/", "");
				}
			}
		} 

		if (imgurl != null) {
			$('.360frame .panorama').removeClass('d-none');
			viewer = pannellum.viewer('panorama', {
				"type": "equirectangular",
				"panorama": imgurl,
				"autoLoad": true,
				"showControls": false
			});	
		} else {
			$('.360frame').append('<p>Dự án không có ảnh 360º</p>');
		}



		// Make buttons work
		document.getElementById('pan-up').addEventListener('click', function(e) {
			viewer.setPitch(viewer.getPitch() + 10);
		});
		document.getElementById('pan-down').addEventListener('click', function(e) {
			viewer.setPitch(viewer.getPitch() - 10);
		});
		document.getElementById('pan-left').addEventListener('click', function(e) {
			viewer.setYaw(viewer.getYaw() - 10);
		});
		document.getElementById('pan-right').addEventListener('click', function(e) {
			viewer.setYaw(viewer.getYaw() + 10);
		});
		document.getElementById('zoom-in').addEventListener('click', function(e) {
			viewer.setHfov(viewer.getHfov() - 10);
		});
		document.getElementById('zoom-out').addEventListener('click', function(e) {
			viewer.setHfov(viewer.getHfov() + 10);
		});
		document.getElementById('fullscreen').addEventListener('click', function(e) {
			viewer.toggleFullscreen();
		});


		var timer = undefined;
		timer = setTimeout(() => {
			
			MapsCallBacke();
			
			timer = undefined;
		}, 1000);
		var timers = undefined;
		timers = setTimeout(() => {
			$(window).bind('scroll', function () {
				var height = $('.header_menu').height() + $('.bread-crumb').height() + $('.gallery_image').height() + $('.gallery_image').height() + $('.firstcontent').height(),
					heightcon = height + $('.t1').height() + $('.t2').height() + $('.t3').height() + $('.t4').height();
				if ($(window).scrollTop() > height && $(window).scrollTop() <= heightcon + 150) {
					$('.grouptitletab').addClass('fixed');
				} else {
					$('.grouptitletab').removeClass('fixed');
					$('.tabscroll ul li:first-child').addClass('active');
				}
			});

			timers = undefined;
		}, 2000);

	});
	function MapsCallBacke() {	
		var geocoder;
		var map;
		var bounds = new google.maps.LatLngBounds();

		function initialize() {
			map = new google.maps.Map(
				document.getElementById("mapsdetails"), {
					center: new google.maps.LatLng(37.4419, -122.1419),
					zoom: 40,
					mapTypeId: google.maps.MapTypeId.ROADMAP
				});
			geocoder = new google.maps.Geocoder();

			for (i = 0; i < locations.length; i++) {
				geocodeAddress(locations, i);
			}
		}
		google.maps.event.addDomListener(window, "load", initialize);
		initialize();
		function geocodeAddress(locations, i) {
			var title = locations[i][0];
			var address = locations[i][1];
			var url = locations[i][2];
			var image = locations[i][3];
			var thueorban = locations[i][4];
			geocoder.geocode({
				'address': locations[i][1]
			},

			function(results, status) {
				if (status == google.maps.GeocoderStatus.OK) {
					var marker = new google.maps.Marker({
						icon: "//bizweb.dktcdn.net/thumb/thumb/100/393/384/themes/773119/assets/marker.png?1593488744761",
						map: map,
						position: results[0].geometry.location,
						title: title,
						animation: google.maps.Animation.DROP,
						zoom: 10
					})
					bounds.extend(marker.getPosition());
					map.fitBounds(bounds);
				} else {
				}
			});
		}



		function createMarker(results) {
			var marker = new google.maps.Marker({
				icon: "//bizweb.dktcdn.net/thumb/thumb/100/393/384/themes/773119/assets/marker.png?1593488744761",
				map: map,
				position: results[0].geometry.location,
				title: title,
				animation: google.maps.Animation.DROP,
				zoom: 10
			})
			bounds.extend(marker.getPosition());
			map.fitBounds(bounds);
			return marker;
		}
	} window.MapsCallBacke=MapsCallBacke;


	// Cache selectors
	var topMenu = $(".grouptitletab"),
		topMenuHeight = topMenu.outerHeight()+15,
		// All list items
		menuItems = topMenu.find("a"),
		// Anchors corresponding to menu items
		scrollItems = menuItems.map(function(){
			var item = $($(this).attr("href"));
			if (item.length) { return item; }
		});
	function activeTab(obj){
		$('.tabscroll ul li').removeClass('active');
		$(obj).parent().addClass('active');
	}
	menuItems.click(function(e){
		activeTab(this);
		var href = $(this).attr("href"),
			offsetTop = href === "#" ? 0 : $(href).offset().top-topMenuHeight+1;
		$('html, body').stop().animate({ 
			scrollTop: offsetTop
		}, 500);
		e.preventDefault();
	});
	// Bind to scroll
	$(window).scroll(function(){
		// Get container scroll position
		var fromTop = $(this).scrollTop()+topMenuHeight;

		// Get id of current scroll item
		var cur = scrollItems.map(function(){
			if ($(this).offset().top < fromTop)
				return this;
		});
		// Get the id of the current element
		cur = cur[cur.length-1];
		var id = cur && cur.length ? cur[0].id : "";
		// Set/remove active class
		menuItems
			.parent().removeClass("active")
			.end().filter("[href='#"+id+"']").parent().addClass("active");
	});
