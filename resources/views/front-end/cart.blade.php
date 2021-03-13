@extends('front-end.layout.default')
@section('head')


		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="theme-color" content="#0871ce">

		<meta http-equiv="content-language" content="vi" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="author" content="Template" />
		<meta name='COPYRIGHT' content='&copy; Template' />
		<meta name="robots" content="noodp,index,follow" />
		<meta name="google" content="notranslate" />
		<meta name="keywords" content="" />
		<meta name="description" content="" />
		<meta property="og:type" content="website" />
		<title>Giỏ hàng</title>

		<link href="css/bootstrap.css?v=1568371445" rel="stylesheet">
	  <link href="css/font-awesome.min.css?v=1566957476" rel="stylesheet">
	  <link href="css/bootstrap.min.css?v=1603338119" rel="stylesheet">
	  <link href="css/owl.carousel.min.css?v=1603338119" rel="stylesheet">
	  <link href="css/toastr.min.css?v=1603338119" rel="stylesheet">
	  <link href="css/fontawesome.css?v=1603338119" rel="stylesheet">
	  <link href="css/cloudzoom.css?v=1603338119" rel="stylesheet">
	  <link href="css/select2.min.css?v=1603338119" rel="stylesheet">
	  <link href="css/select2-bootstrap4.min.css?v=1603338119" rel="stylesheet">
	  <link href="css/pretty-checkbox.min.css?v=1603338119" rel="stylesheet">
	  <link href="css/brands.css?v=1603338119" rel="stylesheet">
	  <link href="css/solid.css?v=1603338119" rel="stylesheet">
	  <link href="css/all.css?v=1603338119" rel="stylesheet">
	  <link href="css/chat.css?v=1603338119" rel="stylesheet">
	  <link href="css/card.css?v=1603338119" rel="stylesheet">
	  <link href="css/jquery-ui.css?v=1603338119" rel="stylesheet">
	  <link href="css/checkout.css?v=1610977888" rel="stylesheet">
	  <link href="css/stylev2.css?v=1614350823" rel="stylesheet">
	  <link href="css/style.css?v=1610977888" rel="stylesheet">
	  <link href="css/custom.css?v=1614350823" rel="stylesheet">
	  <link href="css/stars.css?v=1603338118" rel="stylesheet">
	  <link href="css/product-detail.css?v=1612447411" rel="stylesheet">
	  <link href="css/gio-hang.css?v=1612447411" rel="stylesheet">
	  <link href="css/ban-do-dac-san.css?v=1612447411" rel="stylesheet">
	  <link href="css/lich-su-don-hang.css?v=1610977888" rel="stylesheet">
		<style>
			.f-items_show-fullname .f-items_name{
				overflow: hidden;
				text-overflow: ellipsis;
				display: -webkit-box;
				-webkit-line-clamp: 2;
				-webkit-box-orient: vertical;
			}
			.f-items_show-fullname .f-items_name:hover{
				-webkit-line-clamp: inherit;
				text-align: justify;
			}
			.b__price .ml-auto {
				line-height: 1.8em;
			}
			@media (min-width: 992px){
				.f-items .f-items__ls {
					display: flex;
					height: inherit;
					justify-content: space-between;
					align-items: baseline;
					min-height: 34px;
				}
			}

			.modal.fade .modal-dialog{
				transform: unset;
			}

			[id|=textAngular-editableFix]{
				display: none !important;
			}
		</style>


	<!--[if lt IE 9]>
	        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	    <![endif]-->
	    <script>
	    	var user;
	    </script>
	    
	    <style>
	    	[ng\:cloak], [ng-cloak], [data-ng-cloak], [x-ng-cloak], .ng-cloak, .x-ng-cloak {
	    		display: none !important;
	    	}
	    </style>
	
@endsection

@section('content')
	<div class="page-cart-v3" ng-controller="review_product_in_cart">
	<div class="container">
		<div class="page-cart-content">
			<div class="product-buy">
				<label class="cart-products__title">GIỎ HÀNG</label>
				<span class="cart-products__count">(3)</span>
			</div>
			<div class="cart">
				<div class="cart-inner">
					<div class="cart-products-inner">
						<div class="cart-products__group">
							<div class="cart-product-item">
								<ul class="cart-products__products list-group">
									<li class="cart-products__product list-group-item ng-scope">
										<ul class="product-by-shop list-group">
											<li class="list-group-item">
												<div class="merchant">
													<a href="/gic-store-s8590">
														<img ng-src="https://image.voso.vn/users/vosoimage/images/58a5b6421eea9a2f5fe6af805de69952?t%5B0%5D=maxSize%3Awidth%3D256%2Cheight%3D256&amp;t%5B1%5D=compress%3Alevel%3D100&amp;accessToken=f831db5ee56eb7d9196df038f24cd00c61f86801959456c20047f65f1eb87e5e" src="https://image.voso.vn/users/vosoimage/images/58a5b6421eea9a2f5fe6af805de69952?t%5B0%5D=maxSize%3Awidth%3D256%2Cheight%3D256&amp;t%5B1%5D=compress%3Alevel%3D100&amp;accessToken=f831db5ee56eb7d9196df038f24cd00c61f86801959456c20047f65f1eb87e5e">
														<div class="merchant__name ng-binding">Gic Store</div>
													</a>
												</div>
											</li>
											<li class="list-group-item ng-scope">
												<div class="item-cart">

													<div class="cart-products__img">
														<a href="/giay-sneaker-nam-den-giay-sneaker-nam-giay-sneaker-nam-the-thao-p101533.html">
															<img ng-src="https://image.voso.vn/users/vosoimage/images/47ab29ffff6fb2024a887ee17f656adc?t%5B0%5D=maxSize%3Awidth%3D256%2Cheight%3D256&amp;t%5B1%5D=compress%3Alevel%3D100&amp;accessToken=16cbc4984d1aaf2b48ef75b0897b849b769694466a170dd75d108eed17dc1135" alt="" src="https://image.voso.vn/users/vosoimage/images/47ab29ffff6fb2024a887ee17f656adc?t%5B0%5D=maxSize%3Awidth%3D256%2Cheight%3D256&amp;t%5B1%5D=compress%3Alevel%3D100&amp;accessToken=16cbc4984d1aaf2b48ef75b0897b849b769694466a170dd75d108eed17dc1135">
														</a>
													</div>
													<div class="cart-products__content">
														<div class="product-name">
															<p class="ng-binding">Giày Sneaker Nam Đen, Giày Sneaker Nam, Giày Sneaker Nam Thể Thao</p>
															<span class="btn-delete-product" ng-click="update(item, 0, true)">Xóa</span>
														</div>
														<div class="product-price-cart">
															<div class="product-price-current">
																<span class="ng-binding">199.000đ</span>
															</div>
															<div class="product-price-discount" >
																<span class="discount-price ng-binding">350.000 đ</span>
																<span class="seperate">|</span>
																<span class="discount-percent ng-binding">44%</span>
															</div>
														</div>
														<div class="product-quantity">
															<div class="quantity">
																<span class="minus" ng-click="update(item, -1, false)">
																	<img src="https://voso.vn/static/v2/images/gio-hang/minus.png" alt="">
																</span>
																<input type="text" ng-model-options="{ debounce: 500 }" string-to-number="" ng-value="3" value="3" class="ng-pristine ng-untouched ng-valid">
																<span class="plus" ng-click="update(item, 1, false)">
																	<img src="https://voso.vn/static/v2/images/gio-hang/plus.png" alt="">
																</span>
															</div>
														</div>
													</div>
												</div>
											</li>
										</ul>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="cart-total-prices">
					<div class="show-mobile">
						<div class="cart-prices">
							<div class="prices">
								<div class="prices__items">
									<span class="prices__text">Tổng (1 sản phẩm)</span>

								</div>
								<div class="prices__total">
									<span>Tổng tiền hàng</span>
									<div class="prices__value prices__value--final">199.000 đ

									</div>
								</div>
							</div>
						</div>
						<a href="/dat-hang" class="cart__submit btn btn-primary btn-block">
							Tiến hành đặt hàng
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
@section('js')
	<script>
								var baseUrl = '';
								var csrf_token = 'iVZtMW8C3OyM2PAP7-VFxyOx3xUYufETm_byfqGGxo_zGFR6I2WKg8-VhWGagXO-RPmMTFSKvCXSxplLy-Sr2g==' ? 'iVZtMW8C3OyM2PAP7-VFxyOx3xUYufETm_byfqGGxo_zGFR6I2WKg8-VhWGagXO-RPmMTFSKvCXSxplLy-Sr2g==' : '';
								var csrfTokenName = '_csrf' ? '_csrf' : '';
								const locationVersion = '';
							</script>
							<script src="https://voso.vn/assets/e94ae26f/jquery.js?v=1568371444"></script>
						    <script src="https://voso.vn/assets/d6da31be/yii.js?v=1566957476"></script>
						    <script src="https://voso.vn/assets/31ced6d1/js/bootstrap.js?v=1568371445"></script>
						    <script src="https://voso.vn/static/v2/js/progressive-image.js?v=1603338120"></script>
						    <script src="https://voso.vn/static/v2/js/jquery-ui.min.js?v=1603338120"></script>
						    <script src="https://voso.vn/static/v2/js/bootstrap.min.js?v=1603338120"></script>
						    <script src="https://voso.vn/static/v2/js/owl.carousel.min.js?v=1603338120"></script>
						    <script src="https://voso.vn/static/v2/js/brands.js?v=1603338120"></script>
						    <script src="https://voso.vn/static/v2/js/solid.js?v=1603338120"></script>
						    <script src="https://voso.vn/static/v2/js/fontawesome.js?v=1603338120"></script>
						    <script src="https://voso.vn/static/v2/js/jquery.nstSlider.js?v=1603338120"></script>
						    <script src="https://voso.vn/static/v2/js/cloudzoom.js?v=1603338120"></script>
						    <script src="https://voso.vn/static/v2/css/select2/js/select2.full.min.js?v=1603338119"></script>
						    <script src="https://voso.vn/static/v2/js/jstars.min.js?v=1603338120"></script>
						    <script src="https://voso.vn/static/v2/js/style.js?v=1614350823"></script>
						    <script src="https://voso.vn/jsv2/lib/imboclient.min.js?v=1603338118"></script>
						    <script src="https://voso.vn/jsv2/lib/bootbox.js?v=1603338118"></script>
						    <script src="https://voso.vn/jsv2/lib/angular.min.js?v=1603338118"></script>
						    <script src="https://voso.vn/jsv2/lib/angular-filedialog.js?v=1603338118"></script>
						    <script src="https://voso.vn/jsv2/lib/angular-animate.min.js?v=1603338118"></script>
						    <script src="https://voso.vn/jsv2/lib/angular-ui-bootstrap.min.js?v=1603338118"></script>
						    <script src="https://voso.vn/jsv2/lib/moment.min.js?v=1603338118"></script>
						    <script src="https://voso.vn/jsv2/lib/angular-moment.min.js?v=1603338118"></script>
						    <script src="https://voso.vn/jsv2/lib/angular-local-storage.min.js?v=1603338118"></script>
						    <script src="https://voso.vn/jsv2/lib/customSelect.js?v=1603338118"></script>
						    <script src="https://voso.vn/jsv2/lib/angular-recaptcha.js?v=1603338118"></script>
						    <script src="https://voso.vn/jsv2/lib/simple.money.format.js?v=1603338118"></script>
						    <script src="https://voso.vn/jsv2/lib/text-angular-rangy.min.js?v=1603338118"></script>
						    <script src="https://voso.vn/jsv2/lib/text-angular-sanitize.min.js?v=1603338118"></script>
						    <script src="https://voso.vn/jsv2/lib/text-angular.min.js?v=1603338118"></script>
						    <script src="https://voso.vn/jsv2/lib/text-angular-setup.js?v=1603338118"></script>
						    <script src="https://voso.vn/jsv2/lib/firebase-app.js?v=1603338118"></script>
						    <script src="https://voso.vn/jsv2/lib/firebase-messaging.js?v=1603338118"></script>
						    <script src="https://www.gstatic.com/firebasejs/7.15.0/firebase-auth.js"></script>
						    <script src="https://www.gstatic.com/firebasejs/7.15.0/firebase-database.js"></script>
						    <script src="https://voso.vn/jsv2/inputmask.js?v=1603338118"></script>
						    <script src="https://voso.vn/jsv2/utils.js?v=1603338118"></script>
						    <script src="https://voso.vn/jsv2/app.js?v=1614350823"></script>
						    <script src="https://voso.vn/jsv2/wallet.js?v=1603338118"></script>
						    <script src="https://voso.vn/jsv2/modal.js?v=1603338118"></script>
						    <script src="https://voso.vn/jsv2/firebase-notification.js?v=1603338118"></script>
						    <script src="https://voso.vn/jsv2/auth.js?v=1603338118"></script>
						    <script src="https://voso.vn/jsv2/main.js?v=1605193566"></script>
						    <script src="https://voso.vn/jsv2/product.js?v=1610977888"></script>
						    <script src="https://voso.vn/jsv2/order.js?v=1603338118"></script>
						    <script src="https://voso.vn/jsv2/cartv2.js?v=1610981070"></script>
						    <script src="https://voso.vn/jsv2/cartmb.js?v=1603338118"></script>
						    <script src="https://voso.vn/jsv2/user.js?v=1603338118"></script>
						    <script src="https://voso.vn/jsv2/footer.js?v=1603338118"></script>
						    <script src="https://voso.vn/jsv2/search.js?v=1603338118"></script>
						    <script src="https://voso.vn/jsv2/home.js?v=1603338118"></script>
						    <script src="https://voso.vn/jsv2/style.js?v=1608046089"></script>
						    <script src="https://voso.vn/jsv2/lodash.min.js?v=1603338118"></script>
						    <script src="https://voso.vn/jsv2/angularjs-dropdown-multiselect.min.js?v=1603338118"></script>
						    <script src="https://voso.vn/jsv2/o2o-detail.js?v=1603338118"></script>
						    <script src="https://voso.vn/jsv2/o2o.js?v=1603338118"></script>
						    <script src="https://voso.vn/jsv2/chat.js?v=1603338118"></script>
						    <script src="https://voso.vn/jsv2/angularfire.min.js?v=1603338118"></script>
						    <script src="https://voso.vn/jsv2/popup.js?v=1603338118"></script>
						    <script src="https://voso.vn/jsv2/flashsale-homepage.js?v=1610286800"></script>
						    <script src="https://voso.vn/jsv2/flashsale-page.js?v=1603338118"></script>
						    <script src="https://voso.vn/jsv2/browse.js?v=1603338118"></script>
						    <script src="https://voso.vn/jsv2/currency-mask.js?v=1603338118"></script>
						    <script src="https://voso.vn/jsv2/custom-select.js?v=1603338118"></script>
						    <script src="https://voso.vn/jsv2/toastr.min.js?v=1603338118"></script>
						    <script src="https://voso.vn/jsv2/product-family-notification.js?v=1603338118"></script>
						    <script src="https://voso.vn/jsv2/notifications-page.js?v=1607615500"></script>
						    <script src="https://voso.vn/jsv2/buy-card.js?v=1603338131"></script>
						    <script src="https://voso.vn/jsv2/telecharge-viettel.js?v=1603338118"></script>
						    <script src="https://voso.vn/jsv2/wallet-withdrawals.js?v=1605193566"></script>
						    <script src="https://voso.vn/jsv2/history-order.js?v=1610977888"></script>
						    <script src="https://voso.vn/jsv2/recommendation.js?v=1614350823"></script> 
							<script>
								CloudZoom.quickStart();
								$('.nstSlider').nstSlider({
									"rounding": {
										"1000000" : "10000000"
									},
									"left_grip_selector": ".leftGrip",
									"right_grip_selector": ".rightGrip",
									"value_bar_selector": ".bar",
									"value_changed_callback": function(cause, leftValue, rightValue) {
										$('.leftLabel').val(leftValue);
										$('.rightLabel').val(rightValue);
									}
								});
							</script>




							<script>
								$(document).ready(function () {
									;
								});
							</script>
							<div id="fb-root"></div>

							<script>
        //       (function(d, s, id) {
        // 	var js, fjs = d.getElementsByTagName(s)[0];
        // 	if (d.getElementById(id)) return;
        // 	js = d.createElement(s); js.id = id;
        // 	js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js#xfbml=1&version=v3.3&autoLogAppEvents=1';
        // 	fjs.parentNode.insertBefore(js, fjs);
        // }(document, 'script', 'facebook-jssdk'));

        !function (f, b, e, v, n, t, s) {
        	if (f.fbq)return;
        	n = f.fbq = function () {
        		n.callMethod ? n.callMethod.apply(n, arguments) : n.queue.push(arguments)
        	};
        	if (!f._fbq)f._fbq = n;
        	n.push = n;
        	n.loaded = !0;
        	n.version = '2.0';
        	n.queue = [];
        	t = b.createElement(e);
        	t.async = !0;
        	t.src = v;
        	s = b.getElementsByTagName(e)[0];
        	s.parentNode.insertBefore(t, s)
        }(window, document, 'script', 'https://connect.facebook.net/vi_VN/fbevents.js');

        fbq('init', '156512524771845');
        fbq('track', "PageView");

        var customer = {"id":"535175","name":"Nguyễn Hoài Nam","email":"namnguyen20132674@gmail.com","phone":"0848384333","address":null,"provinceId":"0","districtId":"0","wardId":"0","province":null,"district":null,"ward":null};
        var maxWeight = 25000;
        if (customer != null) {
        	var buyer = {
        		buyerName: customer.name,
        		buyerEmail: customer.email,
        		buyerPhone: customer.phone,
        		buyerAddress: customer.address,
        		buyerProvinceId: customer.provinceId,
        		buyerDistrictId: customer.districtId,
        		province: customer.province,
        		district: customer.district,
        		ward: customer.ward,
        	};
        }

        var imboClient = new Imbo.Client({
        	hosts: ["https:\/\/image.voso.vn"],
        	user: "vosoimage",
        	publicKey: "vosoimage",
        	privateKey: "imagesovo"        });
        </script>



        <script>
        	var firebaseConfig = {
        		apiKey: "AIzaSyDVj-qPRypyzuP0cmV45x3_WYX208VfXys",
        		authDomain: "voso-f114c.firebaseapp.com",
        		databaseURL: "https://voso-f114c.firebaseio.com",
        		projectId: "voso-f114c",
        		storageBucket: "voso-f114c.appspot.com",
        		messagingSenderId: "636113340458",
        		appId: "1:636113340458:web:abb7f58ab4a4ed3b2b5b53",
        		measurementId: "G-SPNW8FE0RN"
        	};
        // Initialize Firebase
        firebase.initializeApp(firebaseConfig);
    </script>

    
    <script>
    	$(document).ready(function(){
    		$("#show-all-tinh-thanh").click(function(){
    			$("#tinh-thanh").removeClass("tinh-thanh");
    		});
    	});

    	$(document).ready(function(){
    		if($("#top-referrer-detail")){
    			$(window).scroll(function() {
    				var scroll = $(window).scrollTop();
    				if (scroll >= 50) {
    					$("#top-referrer-detail").addClass("detail-fixed-top");
    				}else{
    					$("#top-referrer-detail").removeClass("detail-fixed-top");
    				}
    			});
    		};


    		$(".login_succses_mobile").click(function(){
    			$(".login_succses_menu_mobile").toggle();
    		});
    	})
    </script>

@endsection