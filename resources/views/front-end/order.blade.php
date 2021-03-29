@extends('front-end.layout.default')
@section('body-name')
   body-cart
@endsection
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
	    <meta property="og:title" content="Giỏ hàng" />
	    <meta property="og:description" content="" />
	    <meta property="og:site_name" content="Giỏ hàng" />
	    <meta property="og:url" content="{{$system->website}}/dat-hang" />
	    <meta property="og:image" content="" />
	    <meta property="og:locale" content="vi_VN" />
	    <link rel="canonical" href="" /> 
	    <title>Đặt hàng</title>

	    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
	    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
	    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
	    <link href="{{asset('css/owl.carousel.min.css')}}" rel="stylesheet">
	    <link href="{{asset('css/toastr.min.css')}}" rel="stylesheet">
	    <link href="{{asset('css/fontawesome.css')}}" rel="stylesheet">
	    <link href="{{asset('css/cloudzoom.css')}}" rel="stylesheet">
	    <link href="{{asset('css/select2.min.css')}}" rel="stylesheet">
	    <link href="{{asset('css/select2-bootstrap4.min.css')}}" rel="stylesheet">
	    <link href="{{asset('css/pretty-checkbox.min.css')}}" rel="stylesheet">
	    <link href="{{asset('css/brands.css')}}" rel="stylesheet">
	    <link href="{{asset('css/solid.css')}}" rel="stylesheet">
	    <link href="{{asset('css/all.css')}}" rel="stylesheet">
	    <link href="{{asset('css/chat.css')}}" rel="stylesheet">
	    <link href="{{asset('css/card.css')}}" rel="stylesheet">
	    <link href="{{asset('css/jquery-ui.css')}}" rel="stylesheet">
	    <link href="{{asset('css/checkout.css')}}" rel="stylesheet">
	    <link href="{{asset('css/stylev2.css')}}" rel="stylesheet">
	    <link href="{{asset('css/style.css')}}" rel="stylesheet">
	    <link href="{{asset('css/custom.css')}}" rel="stylesheet">
	    <link href="{{asset('css/stars.css')}}" rel="stylesheet">
	    <link href="{{asset('css/product-detail.css')}}" rel="stylesheet">
	    <link href="{{asset('css/gio-hang.css')}}" rel="stylesheet">
	    <!-- <link href="css/ban-do-dac-san.css?v=1612447411" rel="stylesheet"> -->
	    <link href="{{asset('css/lich-su-don-hang.css')}}" rel="stylesheet">
	    <style>
	    	.item-price{
	    		color: red;

	    	}
	    	.item-oldprice{
	    		color: #cecece;
	    		text-decoration: line-through;
	    	}
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
	        
	        @media (max-width: 575px){
	        	.b-header{
		        	display: none;
		        }
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

@if( Session::has('flash_message'))
    <div style="display: none;" class="note note-{{ Session::get('flash_level')}}">
        <p class="flash_message" level="{{Session::get('flash_level')}}">{{ Session::get('flash_message')}}</p>
    </div>
@endif
@if( count($errors) > 0)
                
    @foreach($errors->all() as $error)
        <div style="display: none;" class="note note-danger">
            <p class="error">{{$error}}</p>
        </div>
    @endforeach
        
@endif

<div class="b__cart--wapper" ng-controller="cart_pagev2" ng-cloak>

    <div class="container contaiver-v2">
        <div class="navbar-generic__back navbar-generic__back_cart">
            <button class="top-referrer-detail-href">
                <img src="{{asset('images/arrow-left.png')}}" alt="">
            </button>
            <span>ĐẶT HÀNG</span>
        </div>
        <div class="b__cart--info">
            <nav class="b__breadcrumb" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">TRANG CHỦ</a></li>
                    <li class="breadcrumb-item active" aria-current="page">ĐẶT HÀNG</li>
                </ol>
            </nav>
            @if(Cart::count() == 0)
            <div class="a__cart" ng-show="packages.length == 0">
                
                <p class="p1">Giỏ hàng của bạn chưa có sản phẩm</p>
                <p class="p2"><a class="btn btn-outline-primary" href="/">Mua sắm ngay</a></p>
            </div>
            @else
            <div class="b__cart" >
                <div class="row fix-mobile-cart">
                    <div class="col-md-7 col-sm-12 b__cart-info-left">
                        <div class="b__cart-content">
                        	<form method="POST" action="{{URL::route('postAddOrder')}}">
                            <input type="hidden" name="_token" value="{{ csrf_token()}}">
                            <div class="b__cart-body">
                            	@if(Auth::user())
                                	<h3 class="title-step customer-info">Thông tin khách hàng (Đang sử dụng thông tin đăng nhập)</h3>
                                
	                                <div class="form-row">
	                                    <div class="form-group col-md-6 col-sm-12 col-xs-12">
	                                        <div class="form-group" >
	                                            <label>Họ và tên <span class="text-red">(*)</span></label>
	                                            <input type="text" name="name" required class="form-control" value="{{Auth::user()->name}}" placeholder="" >
	                                            
	                                        </div>
	                                    </div>
	                                    <div class="form-group col-md-6 col-sm-12 col-xs-12">
	                                        <div class="form-group">
	                                            <label>Số điện thoại <span class="text-red">(*)</span></label>
	                                            <input type="text" name="phone" value="{{Auth::user()->phone}}" required class="form-control" style="border-radius: 4px" placeholder="" >
	                                            
	                                        </div>
	                                    </div>
	                                </div>
	                                
	                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
	                                    <div class="form-group" ng-class="errors.buyerAddress?'has-error':''">
	                                        <label>Địa chỉ nhận hàng<span class="text-red"></span></label>
	                                        <input required name="address" value="{{Auth::user()->address}}" class="form-control" type="text" placeholder="" />
	                                        
	                                    </div>
	                                </div>
                                @else
                                	<h3 class="title-step customer-info">Thông tin khách hàng</h3>
	                                <div class="form-row">
	                                    <div class="form-group col-md-6 col-sm-12 col-xs-12">
	                                        <div class="form-group" ng-class="errors.buyerName?'has-error':''">
	                                            <label>Họ và tên <span class="text-red">(*)</span></label>
	                                            <input type="text" name="name" required class="form-control" placeholder="" >
	                                            
	                                        </div>
	                                    </div>
	                                    <div class="form-group col-md-6 col-sm-12 col-xs-12">
	                                        <div class="form-group">
	                                            <label>Số điện thoại <span class="text-red">(*)</span></label>
	                                            <input type="text" name="phone" required class="form-control" style="border-radius: 4px" placeholder="" >
	                                            
	                                        </div>
	                                    </div>
	                                </div>
	                                
	                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
	                                    <div class="form-group" ng-class="errors.buyerAddress?'has-error':''">
	                                        <label>Địa chỉ nhận hàng<span class="text-red"></span></label>
	                                        <input required name="address" class="form-control" type="text" placeholder="" />
	                                        
	                                    </div>
	                                </div>
                                @endif
                                
                                <div class="col-md-12 col-sm-6 col-xs-12 p-0" style="padding: 0 15px">
                                    <div class="form-group" >
                                        <div class="note-content">
                                            <div class="note-content__in">
                                                <label>Ghi chú</label>
                                                <textarea name="messages" placeholder="Lưu ý cho người bán..." rows="5" class="form-control customer-note" ></textarea>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                


                            </div>
                            
                            
                            
                        
                        <div class="cart__submit">
                            <div class="btn-re-order hidden-xs" ng-show="step <= 3">
                                <a href="/" class="btn btn-primary re-order">MUA THÊM</a>
                            </div>
                            <div class="b__cart-footer order_submit_cart_pc">

                                <div class="total-price-cart-mb">
                                    <a href="/" class="btn btn-primary re-order">MUA THÊM</a>
                                    <div class="total__cart__price">
                                        <p class="title">Tổng tiền hàng</p>
                                        <p class="value-money">{{Cart::subtotal()}} đ</p>
                                    </div>
                                </div>
                                <button class="btn-next pull-right order_submit" type="submit">

                                    <span >ĐẶT HÀNG</span>
                                   
                                </button>
                            </div>
                        </div>

                        </form>
                    </div>
                </div>
                <div class="col-md-5 col-sm-12 b__cart-info-right">
                    <div class="b__cart-content ng-scope">
                        <div class="b__cart-header">
                            
                        </div>
                        <div class="b__cart-body">
                            <div class="b__cart-body-products">
                                <ul>
                                    <li>
                                        <span>Sản phẩm</span>
                                        <span class="s-right">Thành tiền</span>
                                    </li>
                                    <li class="ng-scope">
                                    	@foreach($items_cart as $item)
                                        <div class="product-item-cart" style="border-bottom: 1px solid #d8d8d8; margin-bottom: 5px">
                                            <img class="b__cart-body-product-img" src="{{asset('uploads/images/products/avatars/'.$item->options->img)}}">
                                            <div class="cart-content">
                                                <h4 class="product-name-cart"><a href="/{{$item->options->url}}" class="ng-binding">{{$item->name}}</a></h4>
                                               

                                               
                                                <div class="b__cart-body-product-number">
                                                    <span class="group_product-price ng-binding">{!!number_format($item->price)!!}<sup>đ</sup> - <span> Số lượng: {{$item->qty}}</span></span>
                                                    @php
                                                    	$price_item = $item->qty*$item->price;
                                                    @endphp
                                                    <span class="group_product-total-price ng-binding">{!!number_format($price_item)!!}<sup>đ</sup></span>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
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
                                            <span class="total_b_price ng-binding" style="font-size: 24px; font-weight: bold; color: #e02020">{{Cart::subtotal()}}<sup>đ</sup></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="b__cart-content total-cart-price-mb visible-xs-block"></div>
        </div>
        @endif
    </div>
</div>
</div>


@endsection
@section('js')
	<script>
        var baseUrl = '';
        var csrf_token = '9OsL--E0oa2MS4oboU1Hra_tBw7_bNckXWiqU0YhXUGNjl2ku2DU5b89s1TVOz_Z2dVUN5NaknQsIccwEkIoOQ==' ? '9OsL--E0oa2MS4oboU1Hra_tBw7_bNckXWiqU0YhXUGNjl2ku2DU5b89s1TVOz_Z2dVUN5NaknQsIccwEkIoOQ==' : '';
        var csrfTokenName = '_csrf' ? '_csrf' : '';
        const locationVersion = '';
    </script>
    <script src="/js/jquery.js?v=1568371444"></script>
    <!-- <script src="https://domain.com/assets/d6da31be/yii.js?v=1566957476"></script> -->
    <script src="/js/bootstrap.js?v=1568371445"></script>
    <script src="/js/progressive-image.js?v=1603338120"></script>
    <script src="/js/jquery-ui.min.js?v=1603338120"></script>
    <script src="/js/bootstrap.min.js?v=1603338120"></script>
    <script src="/js/owl.carousel.min.js?v=1603338120"></script>
    <!-- <script src="https://domain.com/static/v2/js/brands.js?v=1603338120"></script> -->
    <!-- <script src="https://domain.com/static/v2/js/solid.js?v=1603338120"></script> -->
    <script src="/js/fontawesome.js?v=1603338120"></script>
    <script src="/js/jquery.nstSlider.js?v=1603338120"></script>
    <script src="/js/cloudzoom.js?v=1603338120"></script>
    <script src="/js/select2.full.min.js?v=1603338119"></script>
    <script src="/js/jstars.min.js?v=1603338120"></script>
    <script src="/js/style.js?v=1614350823"></script>
    <!-- <script src="https://domain.com/jsv2/lib/imboclient.min.js?v=1603338118"></script> -->
    <!-- <script src="https://domain.com/jsv2/lib/bootbox.js?v=1603338118"></script> -->
    <script src="/js/angular.min.js?v=1603338118"></script>
    <script src="/js/angular-filedialog.js?v=1603338118"></script>
    <script src="/js/angular-animate.min.js?v=1603338118"></script>
    <script src="/js/angular-ui-bootstrap.min.js?v=1603338118"></script>
    <script src="/js/moment.min.js?v=1603338118"></script>
    <script src="/js/angular-moment.min.js?v=1603338118"></script>
    <script src="/js/angular-local-storage.min.js?v=1603338118"></script>
    <script src="/js/customSelect.js?v=1603338118"></script>
    <script src="/js/angular-recaptcha.js?v=1603338118"></script>
    <!-- <script src="https://domain.com/jsv2/lib/simple.money.format.js?v=1603338118"></script> -->
    <script src="/js/text-angular-rangy.min.js?v=1603338118"></script>
    <script src="/js/text-angular-sanitize.min.js?v=1603338118"></script>
    <script src="/js/text-angular.min.js?v=1603338118"></script>
    <script src="/js/text-angular-setup.js?v=1603338118"></script>
    <!-- <script src="https://domain.com/jsv2/lib/firebase-app.js?v=1603338118"></script> -->
    <!-- <script src="https://domain.com/jsv2/lib/firebase-messaging.js?v=1603338118"></script> -->
    <!-- <script src="https://www.gstatic.com/firebasejs/7.15.0/firebase-auth.js"></script> -->
    <!-- <script src="https://www.gstatic.com/firebasejs/7.15.0/firebase-database.js"></script> -->
    <!-- <script src="https://domain.com/jsv2/inputmask.js?v=1603338118"></script> -->
    <!-- <script src="https://domain.com/jsv2/utils.js?v=1603338118"></script> -->
    <script src="/js/app.js?v=1614350823"></script>
    <!-- <script src="https://domain.com/jsv2/wallet.js?v=1603338118"></script> -->
    <script src="/js/modal.js?v=1603338118"></script>
    <script src="/js/firebase-notification.js?v=1603338118"></script>
    <script src="/js/auth.js?v=1603338118"></script>
    <!-- <script src="/js/main.js?v=1605193566"></script> -->
    <!-- <script src="/js/product.js?v=1610977888"></script> -->
    <!-- <script src="https://domain.com/jsv2/order.js?v=1603338118"></script> -->
    <!-- <script src="https://domain.com/jsv2/cartv2.js?v=1610981070"></script> -->
    <!-- <script src="https://domain.com/jsv2/cartmb.js?v=1603338118"></script> -->
    <!-- <script src="https://domain.com/jsv2/user.js?v=1603338118"></script> -->
    <script src="/js/footer.js?v=1603338118"></script>
    <script src="/js/search.js?v=1603338118"></script>
    <!-- <script src="https://domain.com/jsv2/home.js?v=1603338118"></script> -->
    <script src="/js/style-jsv2.js?v=1608046089"></script>
    <!-- <script src="https://domain.com/jsv2/lodash.min.js?v=1603338118"></script> -->
    <script src="/js/angularjs-dropdown-multiselect.min.js?v=1603338118"></script>
    <!-- <script src="https://domain.com/jsv2/o2o-detail.js?v=1603338118"></script> -->
    <!-- <script src="https://domain.com/jsv2/o2o.js?v=1603338118"></script> -->
    <!-- <script src="https://domain.com/jsv2/chat.js?v=1603338118"></script> -->
    <script src="/js/angularfire.min.js?v=1603338118"></script>
    <!-- <script src="https://domain.com/jsv2/popup.js?v=1603338118"></script> -->
    <!-- <script src="https://domain.com/jsv2/flashsale-homepage.js?v=1610286800"></script> -->
    <!-- <script src="https://domain.com/jsv2/flashsale-page.js?v=1603338118"></script> -->
    <!-- <script src="https://domain.com/jsv2/browse.js?v=1603338118"></script> -->
    <script src="/js/currency-mask.js?v=1603338118"></script>
    <!-- <script src="https://domain.com/jsv2/custom-select.js?v=1603338118"></script> -->
    <!-- <script src="https://domain.com/jsv2/toastr.min.js?v=1603338118"></script> -->
    <!-- <script src="https://domain.com/jsv2/product-family-notification.js?v=1603338118"></script> -->
    <!-- <script src="https://domain.com/jsv2/notifications-page.js?v=1607615500"></script> -->
    <!-- <script src="https://domain.com/jsv2/buy-card.js?v=1603338131"></script> -->
    <!-- <script src="https://domain.com/jsv2/telecharge-viettel.js?v=1603338118"></script> -->
    <!-- <script src="https://domain.com/jsv2/wallet-withdrawals.js?v=1605193566"></script> -->
    <!-- <script src="https://domain.com/jsv2/history-order.js?v=1610977888"></script> -->
    <!-- <script src="https://domain.com/jsv2/recommendation.js?v=1614350823"></script>  -->
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
    <script type="text/javascript">
        $(document).on('click', '.add-to-cart', function(event) {
            event.preventDefault();
            url = $(this).attr('href');
            $.ajax({
                type: 'GET',
                url: url,
                dataType: 'html',
                success: function(data) {
                    toastr.success('Đã thêm vào giỏ hàng');
                    // $('.total-item-in-cart').text(data);
                    console.log(data);

                }
            });
        });
        $(document).on('click', '.delete-item-cart', function(event) {
            event.preventDefault();
            url = $(this).attr('href');
            item_id = $(this).attr('item-id');

            $.ajax({
                type: 'GET',
                url: url,
                dataType: 'json',
                success: function(data) {
                    toastr.success('Đã xóa khỏi giỏ hàng');
                    $('.cart-products__product[item-id='+item_id+']').remove();
                    $('.total-item-in-cart').text(data[0]);
                    $('.cart-products__count').text('('+data[0]+')');
                    $('.prices__value').text(data[1]+' đ');
                    $('.prices__value').attr('value',data[1]);
                    // console.log(item_id);

                }
            });
        });
        $(document).on('click', '.minus', function(event) {
            event.preventDefault();
            id = $(this).attr('id');
            value = parseInt($('input[id='+id+']').val());
            if(value == 1){

            }
            else{
            	new_value = value-1;
            	$('input[id='+id+']').val(new_value);
            	$('input[id='+id+']').attr('old-value',new_value);
            	$('input[id='+id+']').attr('value',new_value);
            	url = '/add-to-cart/'+id+'--1';
            	$.ajax({
	                type: 'GET',
	                url: url,
	                dataType: 'json',
	                success: function(data) {
	                    
	                    $('.total-item-in-cart').text(data[0]);
	                    $('.cart-products__count').text('('+data[0]+')');
	                    $('.prices__value').text(data[1]+' đ');
	                    $('.prices__value').attr('value',data[1]);
	                    

	                }
	            });

            }
            
            
        });
        $(document).on('click', '.plus', function(event) {
            event.preventDefault();
            id = $(this).attr('id');
            value = parseInt($('input[id='+id+']').val());
            new_value = value+1;
        	$('input[id='+id+']').val(new_value);
        	$('input[id='+id+']').attr('old-value',new_value);
        	$('input[id='+id+']').attr('value',new_value);
        	url = '/add-to-cart/'+id+'-1';
        	$.ajax({
                type: 'GET',
                url: url,
                dataType: 'json',
                success: function(data) {
                    
                    $('.total-item-in-cart').text(data[0]);
                    $('.cart-products__count').text('('+data[0]+')');
                    $('.prices__value').text(data[1]+' đ');
                    $('.prices__value').attr('value',data[1]);
                    

                }
            });
        });
        function updateCart(id){
        	value = parseInt($('input[id='+id+']').val());
        	oldvalue = parseInt($('input[id='+id+']').attr('old-value'));
        	if(value <=0){
        		$('input[id='+id+']').val(oldvalue);
	        	toastr.warning('Số lượng nhập phải lớn hoặc hoặc bằng 1');
        	}
        	else{
	        	count_item_update = value-oldvalue;
	        	$('input[id='+id+']').attr('old-value',value);
	        	$('input[id='+id+']').attr('value',value);
	        	url = '/add-to-cart/'+id+'-'+count_item_update;
	        	$.ajax({
	                type: 'GET',
	                url: url,
	                dataType: 'json',
	                success: function(data) {
	                    
	                    $('.total-item-in-cart').text(data[0]);
	                    $('.cart-products__count').text('('+data[0]+')');
	                    $('.prices__value').text(data[1]+' đ');
	                    $('.prices__value').attr('value',data[1]);
	                    

	                }
	            });
			}
        }
    </script>

@endsection