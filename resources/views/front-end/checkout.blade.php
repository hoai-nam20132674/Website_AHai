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
		
		<title>Đặt hàng</title>

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
	<div class="b__cart--wapper" ng-controller="cart_pagev2" ng-cloak>

    <div class="container contaiver-v2">
        <div class="navbar-generic__back navbar-generic__back_cart">
            <button class="top-referrer-detail-href">
                <img src="https://voso.vn/static/v2/images/icon/arrow-left.png" alt="">
            </button>
            <span>Giỏ hàng</span>
        </div>
        <div class="b__cart--info">
            <nav class="b__breadcrumb" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Trang chủ</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Giỏ hàng</li>
                </ol>
            </nav>
            <div class="a__cart" ng-show="packages.length == 0">
                <img src="https://cdn.dribbble.com/users/204955/screenshots/4930541/emptycart.png" alt="empty cart">
                <p class="p1">Giỏ hàng của bạn chưa có sản phẩm</p>
                <p class="p2"><a class="btn btn-outline-primary" href="/">Mua sắm ngay</a></p>
            </div>
            <div class="b__cart" >
                <div class="row fix-mobile-cart">
                    <div class="col-md-7 col-sm-12 b__cart-info-left">
                        <div class="b__cart-content">

                            
                            <div class="b__cart-body">
                                <h3 class="title-step customer-info">Thông tin khách hàng</h3>

                                <div class="form-row">
                                    <div class="form-group col-md-6 col-sm-12 col-xs-12">
                                        <div class="form-group" ng-class="errors.buyerName?'has-error':''">
                                            <label>Họ và tên <span class="text-red">(*)</span></label>
                                            <input type="text" class="form-control" placeholder="" ng-model="buyer.buyerName">
                                            <small class="help-block" ng-if="errors.buyerName">Họ tên</small>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6 col-sm-12 col-xs-12">
                                        <div class="form-group" ng-class="errors.buyerPhone?'has-error':''">
                                            <label>Số điện thoại <span class="text-red">(*)</span></label>
                                            <input type="text" class="form-control" style="border-radius: 4px" placeholder="" ng-model="buyer.buyerPhone">
                                            <small class="help-block" ng-if="errors.buyerPhone">SĐT</small>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group" ng-class="errors.buyerAddress?'has-error':''">
                                        <label>Địa chỉ nhận hàng<span class="text-red"></span></label>
                                        <input class="form-control" type="text" ng-model="buyer.buyerAddress" placeholder="" />
                                        <small class="help-block" ng-if="errors.buyerAddress">Địa chỉ</small>
                                    </div>
                                </div>
                                
                                
                                <div class="col-md-12 col-sm-6 col-xs-12 p-0" style="padding: 0 15px">
                                    <div class="form-group hidden-xs" ng-class="errors.buyerNote?'has-error':''">
                                        <div class="note-content">



                                            <div class="note-content__in">
                                                <label>Ghi chú</label>
                                                <textarea placeholder="Lưu ý cho người bán..." class="form-control customer-note" ng-model="buyer.buyerNote"></textarea>
                                                <small class="help-block" ng-if="errors.buyerNote">Ghi chú</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                


                            </div>
                            
                            
                            <div class="b__cart-body" >
                                <h3 class="title-step">Hình thức thanh toán</h3>
                                <div class="form-row">
                                    <div class="col-md-6 col-sm-12 col-xs-12">
                                       <div class="form-group">
                                        <label class="payment-item choose_payment_method " ng-class="buyer.paymentMethod == 'cod'?'payment-method-active':''">
                                            <div class="radio_check">
                                                <label class="container payment_method">
                                                    <img src="https://voso.vn/static/v2/images/icon/cod-method.png" alt="Coin">
                                                    <input type="radio" ng-model="buyer.paymentMethod" value="cod" name="pay_method" ng-click="buyer.paymentMethod = 'cod';resetMerchantSelfShippingStatus();caculateTotalShippingPackages(4)" />

                                                    <div class="content-left">
                                                        <div class="title-p">Thanh toán khi nhận hàng</div>
                                                    </div>
                                                </label>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label class="payment-item choose_payment_method " ng-class="buyer.paymentMethod == 'voso-pay'?'payment-method-active':''">
                                            <div class="radio_check ">
                                                <label class="container mb-0">
                                                    <div class="payment_method_wallet">
                                                        <img width="26px" src="https://images.vexels.com/media/users/3/141691/isolated/preview/a3b1c761a82f0eb10fca610a1847b61e-mobile-payment-application-smartphone-by-vexels.png" alt="Coin">
                                                    </div>
                                                    <input type="radio" ng-model="buyer.paymentMethod" value="voso-pay" name="pay_method" ng-change="buyer.paymentMethod = 'voso-pay';resetMerchantSelfShippingStatus();caculateTotalShippingPackages(4)" ng-disabled="surplus < orderAmount" />

                                                    <div class="content-left payment-method-wallet-voso">
                                                        <div class="title-p">Chuyển khoản ngân hàng</div>
                                                        <small class="help-block" ng-if="errors.useVosoPay"></small>
                                                    </div>
                                                </label>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            

                            







                        </div>
                        
                        <div class="cart__submit">
                            <div class="btn-re-order hidden-xs" ng-show="step <= 3">
                                <a href="/gio-hang" class="btn btn-primary re-order">Quay lại</a>
                            </div>
                            <div class="b__cart-footer order_submit_cart_pc" ng-show="step <= 3">

                                <div class="total-price-cart-mb">
                                    <a href="/" class="btn btn-primary re-order">Mua thêm</a>
                                    <div class="total__cart__price">
                                        <p class="title">Tổng tiền hàng</p>
                                        <p class="value-money">100.000đ</p>
                                    </div>
                                </div>
                                <button class="btn-next pull-right order_submit" ng-click="validateCart()" ng-show="step <= 3">

                                    <span ng-show="step < 3">Đặt hàng</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-sm-12 b__cart-info-right">
                    <div class="b__cart-content ng-scope">
                        <div class="b__cart-header">
                            <ul>
                                <li class="merchant-name">
                                    <img ng-src="https://image.voso.vn/users/vosoimage/images/58a5b6421eea9a2f5fe6af805de69952?t%5B0%5D=maxSize%3Awidth%3D256%2Cheight%3D256&amp;t%5B1%5D=compress%3Alevel%3D100&amp;accessToken=f831db5ee56eb7d9196df038f24cd00c61f86801959456c20047f65f1eb87e5e" src="https://image.voso.vn/users/vosoimage/images/58a5b6421eea9a2f5fe6af805de69952?t%5B0%5D=maxSize%3Awidth%3D256%2Cheight%3D256&amp;t%5B1%5D=compress%3Alevel%3D100&amp;accessToken=f831db5ee56eb7d9196df038f24cd00c61f86801959456c20047f65f1eb87e5e">
                                    <a href="/gic-store-s8590" class="ng-binding">Gic Store</a>
                                </li>
                            </ul>
                        </div>
                        <div class="b__cart-body">
                            <div class="b__cart-body-products">
                                <ul>
                                    <li>
                                        <span>Sản phẩm</span>
                                        <span class="s-right">Thành tiền</span>
                                    </li>
                                    <li class="ng-scope">
                                        <div class="product-item-cart" style="border-bottom: 1px solid #d8d8d8; margin-bottom: 5px">
                                            <img class="b__cart-body-product-img" ng-src="https://image.voso.vn/users/vosoimage/images/47ab29ffff6fb2024a887ee17f656adc?t%5B0%5D=maxSize%3Awidth%3D256%2Cheight%3D256&amp;t%5B1%5D=compress%3Alevel%3D100&amp;accessToken=16cbc4984d1aaf2b48ef75b0897b849b769694466a170dd75d108eed17dc1135" src="https://image.voso.vn/users/vosoimage/images/47ab29ffff6fb2024a887ee17f656adc?t%5B0%5D=maxSize%3Awidth%3D256%2Cheight%3D256&amp;t%5B1%5D=compress%3Alevel%3D100&amp;accessToken=16cbc4984d1aaf2b48ef75b0897b849b769694466a170dd75d108eed17dc1135">
                                            <div class="cart-content">
                                                <h4 class="product-name-cart"><a href="/giay-sneaker-nam-den-giay-sneaker-nam-giay-sneaker-nam-the-thao-p101533.html" class="ng-binding">Giày Sneaker Nam Đen, Giày Sneaker Nam, Giày Sneaker Nam Thể Thao</a></h4>

                                                <div class="b__cart-body-product-property">
                                                    <!-- ngRepeat: property in item.properties -->
                                                </div>
                                                <div class="b__cart-body-product-number">





                                                    <span class="group_product-price ng-binding">199,000<sup>đ</sup> - <span> Số lượng: 1</span></span>
                                                    <span class="group_product-total-price ng-binding">995,000<sup>đ</sup></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item-cart">
                                            <img class="b__cart-body-product-img" ng-src="https://image.voso.vn/users/vosoimage/images/47ab29ffff6fb2024a887ee17f656adc?t%5B0%5D=maxSize%3Awidth%3D256%2Cheight%3D256&amp;t%5B1%5D=compress%3Alevel%3D100&amp;accessToken=16cbc4984d1aaf2b48ef75b0897b849b769694466a170dd75d108eed17dc1135" src="https://image.voso.vn/users/vosoimage/images/47ab29ffff6fb2024a887ee17f656adc?t%5B0%5D=maxSize%3Awidth%3D256%2Cheight%3D256&amp;t%5B1%5D=compress%3Alevel%3D100&amp;accessToken=16cbc4984d1aaf2b48ef75b0897b849b769694466a170dd75d108eed17dc1135">
                                            <div class="cart-content">
                                                <h4 class="product-name-cart"><a href="/giay-sneaker-nam-den-giay-sneaker-nam-giay-sneaker-nam-the-thao-p101533.html" class="ng-binding">Giày Sneaker Nam Đen, Giày Sneaker Nam, Giày Sneaker Nam Thể Thao</a></h4>

                                                <div class="b__cart-body-product-property">
                                                    <!-- ngRepeat: property in item.properties -->
                                                </div>
                                                <div class="b__cart-body-product-number">





                                                    <span class="group_product-price ng-binding">199,000<sup>đ</sup> - <span> Số lượng: 1</span></span>
                                                    <span class="group_product-total-price ng-binding">995,000<sup>đ</sup></span>
                                                </div>
                                            </div>
                                        </div>
                                    </li><!-- end ngRepeat: item in package.items -->
                                    
                                    <!-- <li>
                                        <div class="b__cart-pay-info">
                                            <div class="b__cart-pay-group">
                                                
                                               
                                                <div class="b__cart-pay-item">
                                                    <div class="b__cart-pay-item-left">Tổng giá trị gói hàng</div>
                                                    <div class="b__cart-pay-item-right package-total ng-binding">995,000<sup>đ</sup></div>
                                                </div>
                                                <div class="b__cart-pay-item" style=""></div>
                                            </div>
                                        </div>
                                    </li> -->
                                </ul>
                            </div>
                        </div>
                    </div><!-- end ngRepeat: (k,package) in packages track by $index -->
                    <div class="b__cart-content total-cart-price-pc hidden-xs">
                        <div class="b__cart-header">
                            <ul>
                                <li>Tổng giá trị</li>
                            </ul>
                        </div>
                        <div class="b__cart-body">
                            <div class="b__cart-pay-info">
                                <div class="b__cart-pay-group">
                                    <div class="b__cart-pay-item b__cart-pay-item_total">
                                        <div class="b__cart-pay-item-left">Tổng tiền hàng</div>
                                        <div class="b__cart-pay-item-right">
                                            <span class="total_b_price ng-binding" style="font-size: 24px; font-weight: bold; color: #e02020">995,000<sup>đ</sup></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="container">
                            <div class="b__cart-footer order_submit_cart_mb" ng-show="step <= 3">
                                <span style="display: none !important;" class="btn-prev pull-left ng-hide" ng-click="stepPrev()" ng-show="step > 1"><svg class="svg-inline--fa fa-angle-left fa-w-8" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="angle-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" data-fa-i2svg=""><path fill="currentColor" d="M31.7 239l136-136c9.4-9.4 24.6-9.4 33.9 0l22.6 22.6c9.4 9.4 9.4 24.6 0 33.9L127.9 256l96.4 96.4c9.4 9.4 9.4 24.6 0 33.9L201.7 409c-9.4 9.4-24.6 9.4-33.9 0l-136-136c-9.5-9.4-9.5-24.6-.1-34z"></path></svg><!-- <i class="fa fa-angle-left"></i> --> Quay lại</span>
                                <button class="btn-next pull-right" ng-click="validateCart()" ng-show="step <= 3">

                                    <span ng-show="step < 3">Đặt hàng</span>
                                    <span ng-show="step == 3" class="ng-hide">Đặt hàng</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="b__cart-content total-cart-price-mb visible-xs-block">





                <div class="b__cart-body">
                    <div class="b__cart-pay-info">
                        <div class="b__cart-pay-group">
                            <div class="b__cart-pay-item promotion-code">
                                <div class="b__cart-pay-item-left">Mã giảm giá</div>
                                <div class="b__cart-pay-item-right">

                                    <span class="product-price-pc" ng-show="promotionTotalProduct.length > 0">
                                        <img src="https://voso.vn/static/v2/images/icon/money.png">
                                        <span>Giảm <span ng-bind="promotionTotalProduct"></span></span>
                                    </span>
                                    <p style="" class="no-condition-promotion" ng-show="promotionTotalShiping*1 == 0 && promotion_shipping > 0">Không đủ điều kiện áp dụng</p>
                                    <span class="shipping-fee" ng-show="promotionTotalShiping">
                                        <img src="https://voso.vn/static/v2/images/icon/shipping.png">
                                        <span>Mã vận chuyển</span>
                                    </span>
                                    <span class="not-promotion area-promotion" ng-click="popupPromotion()" ng-show="promotionValue == 0 && checkInfoReceiver()">
                                        <span class="promotion">Chọn khuyến mại</span>
                                    </span>
                                    <p style="margin-bottom: 0;" ng-show="promotionValue == 0 && !checkInfoReceiver()">Bạn vui lòng nhập đầy đủ thông tin nhận hàng để được áp dụng khuyến mại!</p>
                                    <span class="select-other" ng-show="promotionValue > 0" ng-click="popupPromotion()"><span>Chọn mã khác</span></span>
                                </div>
                            </div>
                            <div class="b__cart-pay-item" ng-show="promotionValue > 0">
                                <div class="b__cart-pay-item-left">Giá khuyến mại</div>
                                <div class="b__cart-pay-item-right hidden-xs">-<span ng-bind="promotionValue | number">0</span><sup>đ</sup></div>
                            </div>
                            <div class="b__cart-pay-item" ng-show="orderViettelPlusAmount > 0">
                                <div class="b__cart-pay-item-left">Dùng Viettel++</div>
                                <div class="b__cart-pay-item-right">-<span ng-bind="orderViettelPlusAmount | number">0</span><sup>đ</sup></div>
                            </div>


                            <div class="b__cart-pay-item b__cart-pay-item_total">
                                <div class="b__cart-pay-item-left">Tổng tiền hàng</div>
                                <div class="b__cart-pay-item-right">
                                    <span class="total_b_price" style="font-size: 24px; font-weight: bold; color: #e02020">100.000<sup>đ</sup></span>
                                </div>
                            </div>
                            <div class="note-content">



                                <div class="note-content__in visible-xs-block">
                                    <label>Ghi chú</label>
                                    <textarea placeholder="Lưu ý cho người bán..." class="form-control customer-note" ng-model="buyer.buyerNote"></textarea>
                                    <small class="help-block" ng-if="errors.buyerNote">Ghi chú</small>
                                </div>
                            </div>
                        </div>
                    </div>
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