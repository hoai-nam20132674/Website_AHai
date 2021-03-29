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
	    <meta property="og:url" content="{{$system->website}}/gio-hang" />
	    <meta property="og:image" content="" />
	    <meta property="og:locale" content="vi_VN" />
	    <link rel="canonical" href="" /> 
	    <title>Giỏ hàng</title>

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

<div class="page-cart-v3" ng-controller="review_product_in_cart">
	<div class="container">
		<div class="page-cart-content">
			<div class="product-buy">
				<a href="/"><label class="cart-products__title">TRANG CHỦ </label><i class="fas fa-chevron-right" style="padding: 0 5px;"></i></a>
				<label class="cart-products__title"> GIỎ HÀNG</label>
				<span class="cart-products__count">({{Cart::count()}})</span>
				
			</div>
			<div class="cart">
				<div class="cart-inner">
					<div class="cart-products-inner">
						<div class="cart-products__group">
							<div class="cart-product-item">
								<ul class="cart-products__products list-group">
									@foreach($items_cart as $item)
									<li class="cart-products__product list-group-item ng-scope" item-id="{{$item->rowId}}">
										<ul class="product-by-shop list-group">
											<li class="list-group-item">
												<div class="merchant">
													<a href="/{{$item->options->shop_name}}-si{{$item->options->shop_id}}">
														<img src="{{asset('uploads/images/users/avatars/'.$item->options->shop_avatar)}}">
														<div class="merchant__name ng-binding">{{$item->options->shop_name}}</div>
													</a>
												</div>
											</li>

											<li class="list-group-item ng-scope item-product" >
												<div class="item-cart">

													<div class="cart-products__img">
														<a href="/{{$item->options->url}}">
															<img alt="" src="{{asset('uploads/images/products/avatars/'.$item->options->img)}}">
														</a>
													</div>
													<div class="cart-products__content">
														<div class="product-name">
															<p class="ng-binding">{{$item->name}}</p>
															<span item-id="{{$item->rowId}}" class="btn-delete-product delete-item-cart" href="{{URL::route('removeItemCart',$item->rowId)}}" >Xóa</span>
														</div>
														<div class="product-price-cart">
															<!-- <div class="product-price-current">
																<span class="ng-binding">199.000đ</span>
															</div> -->
															<div class="product-price-discount" >
																@if($item->price == $item->options->oldprice)
																<span class="item-price">{!!number_format($item->price)!!} đ</span>
																
																@else
																<span class="item-price">{!!number_format($item->price)!!} đ</span>
																<span class="seperate">|</span>
																<span class="item-oldprice">{!!number_format($item->options->oldprice)!!} đ</span>
																@endif
																
															</div>
														</div>
														<div class="product-quantity">
															<div class="quantity">
																<span class="minus" id="{{$item->id}}">
																	<img src="{{asset('images/minus.png')}}" alt="">
																</span>
																<input type="number" id="{{$item->id}}" min="1" onchange="updateCart({{$item->id}})" string-to-number="" old-value="{{$item->qty}}" value="{{$item->qty}}" class="">
																<span class="plus" id="{{$item->id}}">
																	<img src="{{asset('images/plus.png')}}" alt="">
																</span>
															</div>
														</div>
													</div>
												</div>
											</li>
										</ul>
									</li>
									@endforeach
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
									<span class="prices__text">Tổng ({{Cart::count()}} sản phẩm)</span>

								</div>
								<div class="prices__total">
									<span>Tổng tiền hàng</span>
									<div class="prices__value prices__value--final" value="{{Cart::subtotal()}}">{{Cart::subtotal()}} đ

									</div>
								</div>
							</div>
						</div>
						<a href="{{URL::route('order')}}" class="cart__submit btn btn-primary btn-block">
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
	                    toastr.success('Đã cập nhật giỏ hàng');
	                    

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
                    toastr.success('Đã cập nhật giỏ hàng');

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
	                    toastr.success('Đã cập nhật giỏ hàng');

	                }
	            });
			}
        }
    </script>

@endsection