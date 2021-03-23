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
	    <meta property="og:title" content="Giày Sneaker Nam Thể Thao - P101533 " />
	    <meta property="og:title" content="" />
	    <meta property="og:description" content="" />
	    <meta property="og:site_name" content="" />
	    <meta property="og:url" content="" />
	    <meta property="og:image" content="" />
	    <meta property="og:locale" content="vi_VN" />
	    <link rel="canonical" href="" /> 
	    <title>{{$product->title}}</title>

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
<div typeof="schema:Product">
    <div rel="schema:review">
        <div typeof="schema:Review">
            <div rel="schema:reviewRating">
                <div typeof="schema:Rating">
                    <div property="schema:ratingValue" content="0"></div>
                    <div property="schema:bestRating" content="5"></div>
                </div>
            </div>
            <div rel="schema:author">
                <div typeof="schema:Person">
                    <div property="schema:name" content="Gic Store"></div>
                </div>
            </div>
        </div>
    </div>
    <div rel="schema:image" resource="https://image.voso.vn/users/vosoimage/images/47ab29ffff6fb2024a887ee17f656adc?t%5B0%5D=compress%3Alevel%3D100&accessToken=95e63af9fee4f9ca62ec259bf971154cdeb1875a5981d3a044eb19385bfdde37"></div>
    <div property="schema:name" content="Giày Nam"></div>
    <div property="schema:description" content="Giày Sneaker Nam Thể Thao"></div>
    <div rel="schema:brand">
        <div typeof="schema:Thing">
            <div property="schema:name" content="Gic Store"></div>
        </div>
    </div>
    <div rel="schema:aggregateRating">
        <div typeof="schema:AggregateRating">
            <div property="schema:reviewCount" content="2544"></div>
            <div property="schema:ratingValue" content="0"></div>
        </div>
    </div>
    <div rel="schema:offers">
        <div typeof="schema:Offer">
            <div property="schema:priceCurrency" content="VND"></div>
            <div property="schema:price" content="199000"></div>
            <div property="schema:availability" content="instock"></div>
            <div rel="schema:seller">
                <div typeof="schema:Organization">
                    <div property="schema:name" content="Giày Nam"></div>
                </div>
            </div>
            <div property="schema:priceValidUntil" datatype="xsd:date" content="2020-12-05"></div>
            <div rel="schema:url" resource="/giay-sneaker-nam-den-giay-sneaker-nam-giay-sneaker-nam-the-thao-p101533.html"></div>
        </div>
    </div>
    <div rel="schema:image" resource="https://image.voso.vn/users/vosoimage/images/47ab29ffff6fb2024a887ee17f656adc?t%5B0%5D=compress%3Alevel%3D100&accessToken=95e63af9fee4f9ca62ec259bf971154cdeb1875a5981d3a044eb19385bfdde37"></div>
    <div property="schema:mpn" content="925872"></div>
    <div property="schema:sku" content="0446310786"></div>
</div>
<script data-cfasync="false" src="https://voso.vn/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>

<div class="product-detail__header-top">
    <div class="top-referrer-detail" id="top-referrer-detail">
        <a class="top-referrer-detail-href" href="/">
            <i class="fa fa-chevron-left"></i>
        </a>
        <div class="top-product-name">
            <span class="product-detail__product-name">
            Giày Sneaker Nam Thể Thao </span>
        </div>
        <div class="login_succses_mobile">
            <i class="fa fa-ellipsis-h"></i>
        </div>
        <ul class="login_succses_menu_mobile">
            <li ng-if="user == null"><a href="/mobile-dang-nhap">Đăng nhập</a></li>
            <li ng-if="user == null"><a href="/mobile-dang-ky">Đăng ký</a></li>
            <li ng-if="user != null"><a href="/khach-hang.html">Hồ sơ của tôi</a></li>
            <li ng-if="user != null"><a href="/lich-su-mua-hang.html">Lịch sử đơn hàng</a></li>
            <li ng-if="user != null"><a href="/auth/signout">Đăng xuất</a></li>
        </ul>
        <div class="top-cart-mobile" id="icon-cart-mobile">
            <a href="/gio-hang">
                <i class="fa fa-shopping-cart"></i>
                <span class="product-detail__quantity total-item-in-cart" ng-bind="total_items">0</span>
            </a>
        </div>
    </div>
</div>
<div class="b__detail--main-wapper" ng-controller="product" ng-init="init()">
    <div class="detail-group-btn-mobile">
        <button class="btn-add-mobile" href="javascript:;">
            <img src="{{asset('images/tittle-mua-chung.png')}}" alt="">
            <p id="add-to-cart-mobile">Thêm vào giỏ</p>
        </button>
        <button class="btn-buy-mobile"><i class="fas fa-arrow-circle-right"></i>Mua ngay</button>
        <!-- <button class="btn-stop-mobile" ng-if="available">Hết hàng</button> -->
    </div>
    <div class="b__detail--wapper">
        <div class="container">
            <div class="b__detail--info">
                <nav class="b__breadcrumb" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Trang chủ</a></li>
                        
                        <li class="breadcrumb-item active" aria-current="page">{{$product->name}}</li>
                    </ol>
                </nav>
                <div class="product-detail-content">
                    <div class="b__product">
                        <div class="wrap-first-view-product">
                            <div class="c-product-left c-product-ls">
                                <div class="c-product-image">
                                    <div class="b-table">
                                        <div class="b-table__row">
                                            <div class="b-table__cell">
                                                <img id="myCloudZoom" class="cloudzoom" src="{{asset('uploads/images/products/avatars/'.$product->avata)}}" data-cloudzoom="zoomSizeMode: 'image',zoomPosition:'inside',zoomOffsetX:0, zoomImage: '{{asset('uploads/images/products/avatars/'.$product->avata)}}'" alt="{{$product->name}}" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ocop_info">
                                    </div>
                                </div>
                                <div class="c-product-thumb">
                                    <div ng-if="available" class="c-product-out-of-stock">
                                        <span>Hết hàng</span>
                                    </div>
                                    <div id="product-thumb-id" class="owl-carousel">
                                    	<div class="c-thumb-item is-active">
                                            <a class="cloudzoom-gallery" rel="gallery-detail" href="{{asset('uploads/images/products/avatars/'.$product->avata)}}" data-cloudzoom="useZoom:'.cloudzoom', image:'{{asset('uploads/images/products/avatars/'.$product->avata)}}'">
                                                <img src="{{asset('uploads/images/products/details/'.$product->avata)}}" alt="{{$product->name}}" />
                                            </a>
                                        </div>
                                    	@foreach($images as $image)
                                        <div class="c-thumb-item">
                                            <a class="cloudzoom-gallery" rel="gallery-detail" href="{{asset('uploads/images/products/details/'.$image->url)}}" data-cloudzoom="useZoom:'.cloudzoom', image:'{{asset('uploads/images/products/details/'.$image->url)}}'">
                                                <img src="{{asset('uploads/images/products/details/'.$image->url)}}" alt="{{$product->name}}" />
                                            </a>
                                        </div>
                                        @endforeach
                                    </div>
                                    <span class="position-slider-mobile">
                                        <span id="positon-slider">1</span>/<span>5</span>
                                    </span>
                                    <div class="ocop_info_mb">
                                    </div>
                                </div>
                                <div ng-if="hasBuyTogether()" class="buy-together">
                                    <div class="b__together--countdown together-detail-mobile">
                                        <div class="b__flash--countdown_top">
                                            <h3><img src="https://voso.vn/static/v2/upload/win.png" /><span>Mua chung</span></h3>
                                        </div>
                                        <div class="ml-auto b__flash--countdown_right">
                                            <div class="b__flash--time">
                                                <img src="https://voso.vn/static/v2/upload/icon_clock.png" /><span class="text__countdown--right">Kết thúc trong </span>
                                            </div>
                                            <div class="b__flash--countdown">Thời gian</div>
                                        </div>
                                    </div>
                                </div>
                                <div ng-if="hasFlashSale()" class="flashsale-detail-mobile">
                                    <div class="dong-tren-flashsale" style="height: 100%;">

                                        <div class="b__flash--countdown_top">
                                            <h3><img src="images/flashsale-icon.png" /> Flash sale</h3>
                                        </div>
                                        <div class="ml-auto b__flash--countdown_right">
                                            <div class="b__flash--time">
                                                <span class="text__countdown--right">Kết thúc sau </span>
                                            </div>
                                            <div class="b__flash--countdown">Thời gian</div>
                                        </div>
                                    </div>
                                    <div class="dong-duoi-flashsale">
                                        <div class="b__price b__price-mb">
                                            <div class="c-product-main__text">
                                                <span class="c-product-main__price"><strike>100.000<sup>đ</sup></span></strike>
                                            </div>
                                            <div class="c-product-main__text">
                                                <span class="c-product-main__oldprice"> 100.000<sup>đ</sup></span>
                                                <span ng-if="calculateSalePercent()" class="c-tag-sale-in-name-mobile">10%</span>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="c-product-right c-product-ls">
                                <div class="c-product-head">
                                    <div class="c-product__row">
                                        <h1 class="c-product-head__title">
                                            <span>{{$product->name}}</span>
                                            <br>
                                        </h1>
                                    </div>
                                    <div class="c-product__row mb-0">
                                        <h2 class="c-product-head__desc">

                                            <span class="pl-0"><span class="num-big">5</span><span class="num-small">/5</span></span>
                                            <span class="jstars" data-value="4"></span>

                                            <span><label><strong>10</strong></label> Đánh giá</span>
                                            <span> Đã bán <label>6</label></span>

                                        </h2>
                                        <div ng-if="!hasFlashSale() && !hasBuyTogether()" class="b__price-mobile">
                                            <div class="c-product-main__text">
                                                <span class="c-product-main__oldprice">100.000<sup>đ</sup></span>
                                            </div>
                                            <div class="c-product-main__text">
                                                <span class="c-product-main__price" ng-if="variation.listPrice > variation.price">100.000<sup>đ</sup></span>
                                            </div>
                                        </div>
                                        <div ng-if="hasBuyTogether()" class="buy-together">
                                            <div class="b__flashsale--countdown flashsale-detail-desktop buy-togetther-detail-desktop">
                                                <div class="b__flash--countdown_top">
                                                    <h3><img src="https://voso.vn/static/v2/upload/win.png" /><span>Mua chung</span></h3>
                                                </div>
                                                <div class="ml-auto b__flash--countdown_right">
                                                    <div class="b__flash--time">
                                                        <img src="https://voso.vn/static/v2/upload/icon_clock.png" /><span class="text__countdown--right">Kết thúc trong </span>
                                                    </div>
                                                    <div class="b__flash--countdown">Thời gian</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div ng-if="hasFlashSale()" class="flashsale">
                                            <div class="box-program-info">
                                                <div class="b__price">
                                                    <div class="c-product-main__text">
                                                        <span class="c-product-main__oldprice">100.000<sup>đ</sup></span>
                                                        <span class="c-product-main__price" ng-if="getOriginalPrice() > getSalePrice()"> <span>100.000</span><sup>đ</sup></span>
                                                        <span ng-if="calculateSalePercent()" class="c-tag-sale">Giảm 10%</span>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="b__flashsale--countdown flashsale-detail-desktop">
                                                <div class="b__flash--countdown_top">
                                                    <h3><img src="images/flashsale-icon.png" /> Flash sale</h3>
                                                </div>
                                                <div class="ml-auto b__flash--countdown_right">
                                                    <div class="b__flash--time">
                                                        <span class="text__countdown--right">Kết thúc sau </span>
                                                    </div>
                                                    <div class="b__flash--countdown">thời gian</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="box-program-info">
                                        	<div class="b__price ng-scope">
                                        		<div class="c-product-main__text">
                                        			@if($product->sale=='')
                                        			<span class="c-product-main__oldprice ng-binding">{{$product->price}}<sup>đ</sup></span>
                                        			@else
                                        			<span class="c-product-main__oldprice ng-binding">{{$product->sale}}<sup>đ</sup></span>
                                        			<span class="c-product-main__price ng-scope"><span class="ng-binding">{{$product->price}}</span><sup>đ</sup></span>
                                        			@php
									                    $percent = $product->sale/$product->price;
									                    $percent = floor($percent*100);
									                @endphp
                                        			<span class="c-tag-sale ng-binding ng-scope">Giảm {{$percent}}%</span>
                                        			@endif
                                        		</div>

                                        	</div>
                                        </div>

                                        
                                        
                                        
                                    </div>
                                </div>
                                <div class="product_p">
                                    {!!$product->short_description!!}
                                </div>

                                
                                <div class="c-button__gr group-btn-cart-desktop">
                                	<a class="img_mess" href="javascript:;" ng-click="chat(8590)" style="border: 1px solid #c3000c; font-weight: 800; color: #c3000c"><img src="{{asset('images/chat-icon.png')}}" style="margin-right: 10px;"> Chat ngay</a>
                                    <a href="javascript:;" class="btn-cart">
                                        <span id="add-to-cart">Thêm vào giỏ hàng</span>
                                    </a>
                                    <a href="javascript:;" class="btn btn-buy"><img src="https://voso.vn/static/v2/images/icon-buy-now.png" />Mua ngay</a>
                                    <a href="javascript:;" class="btn btn-out-of-stock" ng-if="available">Hết hàng</a>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="thong_tin_sp">
                                <div class="shop-info shop-info-pc">
                                    <div class="box-supplier d-flex">
                                        <div class="b__shop--ls">
                                            <div class="b__shop--ls_content">
                                                <div class="b__shop--avatar">
                                                    <img src="https://image.voso.vn/users/vosoimage/images/58a5b6421eea9a2f5fe6af805de69952?t%5B0%5D=compress%3Alevel%3D100&accessToken=b4032b8e82fa13813374c4f91ed39e0fafadda5d17eeb567c87395b59261097a" />
                                                </div>
                                                @php
                                                	$s = App\User::where('id',$product->user_id)->get()->first();
                                                	$s_products = App\Product::where('user_id',$s->id)->get();
                                                @endphp
                                                <div class="b__shop--description">
                                                    <span class="b__shop--name">{{$s->name_s}}</span>

                                                    <div class="b__shop--moreinfo d-flex">
                                                        <p class="detail-merchant-provice-mobile"><img src="{{asset('images/icon-location.png')}}" />{{$s->address}}</p>
                                                        @if($s->status)
                                                        <p><img style="padding-right: 3px" src="{{asset('images/online-status-icon.png')}}" />Đang hoạt động</p>
                                                        @else
                                                        <p><img style="padding-right: 3px" src="{{asset('images/offline-status-icon.png')}}" />Ngừng hoạt động</p>
                                                        @endif
                                                    </div>
                                                    <ul ng-controller="chatCtrl">
                                                        <li><a class="img_mess" href="javascript:;"><img src="{{asset('images/message.png')}}" /> Chat ngay</a></li>
                                                        <li><a class="go_to_shop" href="{{$s->name_s}}-si{{$s->id}}"><img src="{{asset('images/icon_go_to_shop.png')}}" />Xem shop</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="b__shop--ls b__shop--thongso ml-auto d-flex align-items-center">
                                            <div class="info-content mr-3">
                                                <label>Sản phẩm</label> <br>
                                                <span>{{count($s_products)}}</span>
                                            </div>
                                            <div class="info-content mr-3">
                                                <label>Đánh giá</label> <br>
                                                <span>10</label>
                                                </div>
                                                <div class="info-content mr-3">
                                                	@php
                                                		Carbon\Carbon::setLocale('vi');
					                                	$time_in = \Carbon\Carbon::createFromTimestamp(strtotime($s->created_at))->toDayDateTimeString();
				                                        
				                                        $now = \Carbon\Carbon::now();
                                                	@endphp
                                                    <label>Ngày tham gia</label> <br>
                                                    <span>{{\Carbon\Carbon::createFromTimestamp(strtotime($s->created_at))->diffForHumans($now)}}</span>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="b__product--detail">
                                        
                                        <div class="b__product--detail_ls">
                                            <h3>Mô tả sản phẩm </h3>
                                            <div ta-bind="text" class="b__product--description">
                                            	{!!$product->content!!}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="b__product--detail b__product--dam-bao visible-xs">
                                        <h3>Đảm bảo sản phẩm</h3>
                                        <div class="b__product--dam-bao noi-dung">
                                            <div class="dichvu">
                                                <img src="images/Icon-box.png" alt="">Trả hàng 2-3 ngày
                                            </div>
                                            <div class="dichvu">
                                                <img src="images/icon-ship.png" alt="">Giao hàng nhanh cùng Viettel Post
                                            </div>
                                        </div>
                                    </div>


                                    <div class="b__product--detail b__product--evaluate">
                                        <h3>Đánh giá sản phẩm</h3>
                                        <div class="b__product--evaluate_ls">
                                            <div class="b__product--evaluate_left">
                                                <div class="rate-sanpham">
                                                    <div class="rate-num">
                                                        <span class="num-big">5</span>
                                                        <span class="num-small">/5</span>
                                                    </div>
                                                    <span class="jstars" data-value="4"></span>
                                                </div>
                                            </div>
                                            <div class="b__product--evaluate_right">
                                                <ul>
                                                    <li class="prd_filter active" ng-click="getRate(0)">Tất cả</li>
                                                    <li class="prd_filter" ng-click="getRate(5)">5 Sao (<span ng-bind="countRate.c5"></span>)</li>
                                                    <li class="prd_filter" ng-click="getRate(4)">4 Sao (<span ng-bind="countRate.c4"></span>)</li>
                                                    <li class="prd_filter" ng-click="getRate(3)">3 Sao (<span ng-bind="countRate.c3"></span>)</li>
                                                    <li class="prd_filter" ng-click="getRate(2)">2 Sao (<span ng-bind="countRate.c2"></span>)</li>
                                                    <li class="prd_filter" ng-click="getRate(1)">1 Sao (<span ng-bind="countRate.c1"></span>)</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="b__product--comment">
                                        	<div class="media ng-scope">
                                        		<img class="mr-3" ng-src="https://image.voso.vn/users/vosoimage/images/1e54c71c82697602aa6c03551e42ee02?t%5B%5D=maxSize%3Awidth%3D256%2Cheight%3D256&amp;t%5B%5D=compress%3Alevel%3D100&amp;accessToken=23f638260a2227d5b090993f77c9334eaa02ddc051025c2e432f80797b6b3e99" alt="khách hàng" src="https://image.voso.vn/users/vosoimage/images/1e54c71c82697602aa6c03551e42ee02?t%5B%5D=maxSize%3Awidth%3D256%2Cheight%3D256&amp;t%5B%5D=compress%3Alevel%3D100&amp;accessToken=23f638260a2227d5b090993f77c9334eaa02ddc051025c2e432f80797b6b3e99">
                                        		<div class="media-body">
                                        			<h5 class="mt-0 ng-binding">Trần Bửu</h5>
                                        			<div class="f-items__ls main-rating">
                                        				<span class="jstars" data-value="5"></span>
                                        			</div>
                                        			<div class="rating-content ng-binding">Rất tốt, chúc shop làm ăn phát đạt</div>
                                        			<div class="rating-group-texts">
                                        				<!-- ngRepeat: (ktext,rtext) in rate.texts -->
                                        			</div>
                                        			<div class="rating-group-images">
                                        				<!-- ngRepeat: (kimage,rimage) in rate.images -->
                                        			</div>
                                        			<div class="rating-time">
                                        				<span class="ng-binding">09:54 11/03/2021</span>
                                        			</div>
                                        		</div>
                                        	</div>
                                        	<div class="media ng-scope" >
                                        		<img class="mr-3" ng-src="https://image.voso.vn/users/vosoimage/images/d9bf60935204c8fe2798c3f83efb47d5?t%5B%5D=maxSize%3Awidth%3D256%2Cheight%3D256&amp;t%5B%5D=compress%3Alevel%3D100&amp;accessToken=ffe29617d7c98d074dcfb2b90d2c230ccf43e7da3561bb4b3b1ca8c33ca3b6e4" alt="khách hàng" src="https://image.voso.vn/users/vosoimage/images/d9bf60935204c8fe2798c3f83efb47d5?t%5B%5D=maxSize%3Awidth%3D256%2Cheight%3D256&amp;t%5B%5D=compress%3Alevel%3D100&amp;accessToken=ffe29617d7c98d074dcfb2b90d2c230ccf43e7da3561bb4b3b1ca8c33ca3b6e4">
                                        		<div class="media-body">
                                        			<h5 class="mt-0 ng-binding">Nguyễn Thị Hương Ly</h5>
                                        			<div class="f-items__ls main-rating">
                                        				<span class="jstars" data-value="4"></span>
                                        			</div>
                                        			<div class="rating-content ng-binding"></div>
                                        			<div class="rating-group-texts">
                                        				<!-- ngRepeat: (ktext,rtext) in rate.texts -->
                                        			</div>
                                        			<div class="rating-group-images">
                                        				<!-- ngRepeat: (kimage,rimage) in rate.images -->
                                        			</div>
                                        			<div class="rating-time">
                                        				<span class="ng-binding">09:45 11/03/2021</span>
                                        			</div>
                                        		</div>
                                        	</div>

                                        	<!-- ngIf: rates.length==0 -->
                                        </div>

                                        
                                    </div>

                                </div>
                                <div class="b__shop--info shop-info-pc">
                                    <div class="product_related">
                                        <div class="b__product--other b__product--relate">
                                            <h3>Sản phẩm tương tự</h3>
                                            <div>
                                                <div class="o-items">
                                                    <div class="f-items">
                                                        <div class="f-items__info">
                                                            <div class="f-product-item__thumb">
                                                                <a href="/giay-boot-nam-co-lung-de-khau-da-tron-mau-den-cuc-chat-m354den-p278434.html">
                                                                    <div class="f-product-item__thumb-img" title="Giày Boot Nam Cổ Lửng Đế Khâu Da Trơn Màu Đen Cực Chất - M354-DEN">
                                                                        <img src="https://image.voso.vn/users/vosoimage/images/b0e9e690a985fa57704808c532946919?t%5B0%5D=maxSize%3Awidth%3D301%2Cheight%3D212&t%5B1%5D=compress%3Alevel%3D100&accessToken=59eeb1ffd8d0a59991532c46c4209c06a6c73031eb461373ecc6944f3a043ae5" alt="">
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="f-items_description f-items_show-name">
                                                                <div class="f-items_name"><a href="/giay-boot-nam-co-lung-de-khau-da-tron-mau-den-cuc-chat-m354den-p278434.html">Giày Boot Nam Cổ Lửng Đế Khâu Da Trơn Màu Đen Cực Chất - M354-DEN</a></div>
                                                                <div class="b__price">
                                                                    <div class="price">
                                                                        <strong>230,000<sup>₫</sup></strong>
                                                                    </div>
                                                                    <div class="listPrice">
                                                                        <del>460,000<sup>₫</sup></del>
                                                                    </div>
                                                                </div>
                                                                <div class="f-items__ls main-rating">
                                                                    <span class="jstars" data-value="0"></span>
                                                                    <label class="ml-auto">0 đã bán</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="o-items">
                                                    <div class="f-items">
                                                        <div class="f-items__info">
                                                            <div class="f-product-item__thumb">
                                                                <a href="/lot-giay-tang-chieu-cao-eva-nguyen-ban-v2-p276007.html">
                                                                    <div class="f-product-item__thumb-img" title="Lót giày tăng chiều cao EVA nguyên bàn V.2">
                                                                        <img src="https://image.voso.vn/users/vosoimage/images/d6b06856ea8a1c8ad2ae68f7268b6998?t%5B0%5D=maxSize%3Awidth%3D301%2Cheight%3D212&t%5B1%5D=compress%3Alevel%3D100&accessToken=35f20837cbdb78899c3036156c48d49a603d99361d1b447063999311bd345958" alt="">
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="f-items_description f-items_show-name">
                                                                <div class="f-items_name"><a href="/lot-giay-tang-chieu-cao-eva-nguyen-ban-v2-p276007.html">Lót giày tăng chiều cao EVA nguyên bàn V.2</a></div>
                                                                <div class="b__price">
                                                                    <div class="price">
                                                                        <strong>130,000<sup>₫</sup></strong>
                                                                    </div>
                                                                    <div class="listPrice">
                                                                        <del>162,500<sup>₫</sup></del>
                                                                    </div>
                                                                </div>
                                                                <div class="f-items__ls main-rating">
                                                                    <span class="jstars" data-value="0"></span>
                                                                    <label class="ml-auto">0 đã bán</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="o-items">
                                                    <div class="f-items">
                                                        <div class="f-items__info">
                                                            <div class="f-product-item__thumb">
                                                                <a href="/giay-the-thao-de-bang-nam-ma-gh0165-xanh-p498721.html">
                                                                    <div class="f-product-item__thumb-img" title="giày thể thao đế bằng nam Mã: GH0165 - XANH">
                                                                        <img src="https://image.voso.vn/users/vosoimage/images/b1739d0c18f5dc74228ca6e50133cb7e?t%5B0%5D=maxSize%3Awidth%3D301%2Cheight%3D212&t%5B1%5D=compress%3Alevel%3D100&accessToken=2e93e98be2e4bbdf73afc3c044dc9496aa784a2131cdc1dcd166f1cd3a074234" alt="">
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="f-items_description f-items_show-name">
                                                                <div class="f-items_name"><a href="/giay-the-thao-de-bang-nam-ma-gh0165-xanh-p498721.html">giày thể thao đế bằng nam Mã: GH0165 - XANH</a></div>
                                                                <div class="b__price">
                                                                    <div class="price">
                                                                        <strong>248,000<sup>₫</sup></strong>
                                                                    </div>
                                                                </div>
                                                                <div class="f-items__ls main-rating">
                                                                    <span class="jstars" data-value="0"></span>
                                                                    <label class="ml-auto">0 đã bán</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="o-items">
                                                    <div class="f-items">
                                                        <div class="f-items__info">
                                                            <div class="f-product-item__thumb">
                                                                <a href="/giay-the-thao-da-bo-nam-z01-den-da-that-vnxk-bao-hanh-12-thang-p479329.html">
                                                                    <div class="f-product-item__thumb-img" title="Giày Thể Thao Da Bò Nam Z01 Đen Da Thật VNXK - Bảo hành 12 tháng">
                                                                        <img src="https://image.voso.vn/users/vosoimage/images/fa655bdcc844a03d826dde628e0e8041?t%5B0%5D=maxSize%3Awidth%3D301%2Cheight%3D212&t%5B1%5D=compress%3Alevel%3D100&accessToken=2f1c368128e5ff0e74899bd7333207b363e812da4edb32c819b1a4d2e279ddc4" alt="">
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="f-items_description f-items_show-name">
                                                                <div class="f-items_name"><a href="/giay-the-thao-da-bo-nam-z01-den-da-that-vnxk-bao-hanh-12-thang-p479329.html">Giày Thể Thao Da Bò Nam Z01 Đen Da Thật VNXK - Bảo hành 12 tháng</a></div>
                                                                <div class="b__price">
                                                                    <div class="price">
                                                                        <strong>365,000<sup>₫</sup></strong>
                                                                    </div>
                                                                    <div class="listPrice">
                                                                        <del>550,000<sup>₫</sup></del>
                                                                    </div>
                                                                </div>
                                                                <div class="f-items__ls main-rating">
                                                                    <span class="jstars" data-value="0"></span>
                                                                    <label class="ml-auto">0 đã bán</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="o-items">
                                                    <div class="f-items">
                                                        <div class="f-items__info">
                                                            <div class="f-product-item__thumb">
                                                                <a href="/giay-the-thao-nam-cao-cap-libra010-den-do-size-3944-p541351.html">
                                                                    <div class="f-product-item__thumb-img" title="Giày thể thao nam cao cấp libra010 đen đỏ size 39-44">
                                                                        <img src="https://image.voso.vn/users/vosoimage/images/bfafc9d491f3aee813a9f744b200df78?t%5B0%5D=maxSize%3Awidth%3D301%2Cheight%3D212&t%5B1%5D=compress%3Alevel%3D100&accessToken=d10c67e5fd3fada6788bfb5c2843724c5db00e7745b014836bc2597d92726100" alt="">
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="f-items_description f-items_show-name">
                                                                <div class="f-items_name"><a href="/giay-the-thao-nam-cao-cap-libra010-den-do-size-3944-p541351.html">Giày thể thao nam cao cấp libra010 đen đỏ size 39-44</a></div>
                                                                <div class="b__price">
                                                                    <div class="price">
                                                                        <strong>250,000<sup>₫</sup></strong>
                                                                    </div>
                                                                    <div class="listPrice">
                                                                        <del>390,000<sup>₫</sup></del>
                                                                    </div>
                                                                </div>
                                                                <div class="f-items__ls main-rating">
                                                                    <span class="jstars" data-value="0"></span>
                                                                    <label class="ml-auto">0 đã bán</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="o-items">
                                                    <div class="f-items">
                                                        <div class="f-items__info">
                                                            <div class="f-product-item__thumb">
                                                               <a href="/giay-luoi-nam-dep-bang-khuyet-da-bong-rat-sang-trong-m367bong-p279019.html">
                                                                <div class="f-product-item__thumb-img" title="Giày Lười Nam Đẹp Băng Khuyết Da Bóng Rất Sang Trọng - M367-BONG">
                                                                    <img src="https://image.voso.vn/users/vosoimage/images/8d4e84e527a762686c7c98c715157244?t%5B0%5D=maxSize%3Awidth%3D301%2Cheight%3D212&t%5B1%5D=compress%3Alevel%3D100&accessToken=9467912cbf4389ccc0f7df41615c7cb3e3ec2fccd356321785ae4c21499b1ac4" alt="">
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="f-items_description f-items_show-name">
                                                            <div class="f-items_name"><a href="/giay-luoi-nam-dep-bang-khuyet-da-bong-rat-sang-trong-m367bong-p279019.html">Giày Lười Nam Đẹp Băng Khuyết Da Bóng Rất Sang Trọng - M367-BONG</a></div>
                                                            <div class="b__price">
                                                                <div class="price">
                                                                    <strong>175,000<sup>₫</sup></strong>
                                                                </div>
                                                                <div class="listPrice">
                                                                    <del>350,000<sup>₫</sup></del>
                                                                </div>
                                                            </div>
                                                            <div class="f-items__ls main-rating">
                                                                <span class="jstars" data-value="0"></span>
                                                                <label class="ml-auto">0 đã bán</label>
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
                        <div class="b__shop--info shop-info-mobile">
                            <div class="box-supplier">
                                <div class="b__shop--ls">
                                    <div class="b__shop--ls_content">
                                        <div class="b__shop--avatar">
                                            <img src="https://image.voso.vn/users/vosoimage/images/58a5b6421eea9a2f5fe6af805de69952?t%5B0%5D=compress%3Alevel%3D100&accessToken=b4032b8e82fa13813374c4f91ed39e0fafadda5d17eeb567c87395b59261097a" />
                                        </div>
                                        <div class="b__shop--description">
                                            <span>{{$s->name_s}}</span>

                                            @if($s->status)
                                            <p><img style="padding-right: 3px" src="{{asset('images/online-status-icon.png')}}" />Đang hoạt động</p>
                                            @else
                                            <p><img style="padding-right: 3px" src="{{asset('images/offline-status-icon.png')}}" />Ngừng hoạt động</p>
                                            @endif
                                            <p class="detail-merchant-provice-mobile">Địa chỉ: <b style="color: #333333;">{{$s->address}}</b></p>
                                            <ul ng-controller="chatCtrl">
                                                <li><a class="img_mess" href="javascript:;" ><img src="{{asset('images/icon_mess.png')}}" /> Chat ngay</a></li>
                                                <li><a href="{{$s->name_s}}-si{{$s->id}}"><img src="{{asset('images/icon_go_to_shop.png')}}" />Ghé thăm shop</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="b__shop--ls pd-top-17-mb">
                                    <div class="info-content">
                                        <label>Đánh giá:</label>
                                        <span class="jstars" data-value="0"></span>
                                    </div>
                                    <div class="info-content">
                                        <label>Số Sản Phẩm:</label>
                                        <span>{{count($s_products)}}</span>
                                    </div>
                                    <div class="info-content">
                                        <label>Ngày Tham Gia:</label>
                                        <span>{{\Carbon\Carbon::createFromTimestamp(strtotime($s->created_at))->diffForHumans($now)}}</span>
                                    </div>
                                    <div class="info-content">
                                        <label>Địa chỉ:</label>
                                        <span>{{$s->address}}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="box-module box-support">
                                <span class="title-box">Hỗ trợ</span>
                                <div class="box-body body-support">
                                    <p><svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="phone-rotary" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-phone-rotary fa-w-16 fa-2x">
                                        <path fill="#0871ce" d="M256 240a80 80 0 1 0 80 80 80 80 0 0 0-80-80zm0 128a48 48 0 1 1 48-48 48.05 48.05 0 0 1-48 48zm114.43-175.75A64 64 0 0 0 314.86 160H197.14a64 64 0 0 0-55.57 32.25L36.21 376.62A32 32 0 0 0 32 392.5V448a32 32 0 0 0 32 32h384a32 32 0 0 0 32-32v-55.5a32 32 0 0 0-4.21-15.88zM448 448H64v-55.5l105.36-184.38A32.07 32.07 0 0 1 197.14 192h117.72a32.07 32.07 0 0 1 27.78 16.12L448 392.5zm52.27-329.8C431.72 63.21 344.81 32 256 32S80.28 63.21 11.73 118.2A32.17 32.17 0 0 0 0 143.29V208a16 16 0 0 0 16 16h70.11a16 16 0 0 0 14.31-8.85L128 152c39.9-17.28 83.23-24 128-24 44.77 0 88.08 6.72 128 24l27.58 63.15a16 16 0 0 0 14.31 8.85H496a16 16 0 0 0 16-16v-64.71a32.17 32.17 0 0 0-11.73-25.09zM480 192h-43.61l-23.07-52.81-5-11.55-11.57-5C355.33 104.71 309.3 96 256 96s-99.32 8.71-140.71 26.63l-11.57 5-5 11.55L75.61 192H31.94l-.18-48.84A359.7 359.7 0 0 1 256 64a357.89 357.89 0 0 1 224 79.29z" class=""></path>
                                    </svg></i> <span>Hotline: 1900 989 888</span></p>
                                    <p><svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="envelope" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-envelope fa-w-16 fa-2x">
                                        <path fill="#0871ce" d="M464 64H48C21.5 64 0 85.5 0 112v288c0 26.5 21.5 48 48 48h416c26.5 0 48-21.5 48-48V112c0-26.5-21.5-48-48-48zM48 96h416c8.8 0 16 7.2 16 16v41.4c-21.9 18.5-53.2 44-150.6 121.3-16.9 13.4-50.2 45.7-73.4 45.3-23.2.4-56.6-31.9-73.4-45.3C85.2 197.4 53.9 171.9 32 153.4V112c0-8.8 7.2-16 16-16zm416 320H48c-8.8 0-16-7.2-16-16V195c22.8 18.7 58.8 47.6 130.7 104.7 20.5 16.4 56.7 52.5 93.3 52.3 36.4.3 72.3-35.5 93.3-52.3 71.9-57.1 107.9-86 130.7-104.7v205c0 8.8-7.2 16-16 16z" class=""></path>
                                    </svg> <span>Hỗ trợ: <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="3e56514a4c517e48514d51104850">[email&#160;protected]</a></span></p>
                                </div>
                            </div>
                        </div>
                        <div class="product-other">
                            <div class="b__product--other">
                                <h3>Sản phẩm khác <a href="/gic-store-s8590" class="link_mb">Xem tất cả <i class="fas fa-angle-double-right"></i></a></h3>
                                <div id="otherSlide" class="owl-carousel">
                                    <div class="o-items">
                                        <div class="f-items">
                                            <div class="f-items__info">
                                                <div class="f-product-item__thumb">
                                                    <a href="/giay-da-luoi-nam-cao-cap-gs126-p317113.html">
                                                        <div class="f-product-item__thumb-img" title="GIÀY DA LƯỜI NAM CAO CẤP GS126">
                                                            <img src="https://image.voso.vn/users/vosoimage/images/38c70d4aca66703ce64db4ea1165dea3?t%5B0%5D=maxSize%3Awidth%3D301%2Cheight%3D212&t%5B1%5D=compress%3Alevel%3D100&accessToken=cf224d36279a06713711a81147e74d3e3f337e2bf31e28f786b33bbc6cd62a85" alt="">
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="f-items_description f-items_show-name">
                                                    <div class="f-items_name"><a href="/giay-da-luoi-nam-cao-cap-gs126-p317113.html">GIÀY DA LƯỜI NAM CAO CẤP GS126</a></div>
                                                    <div class="b__price">
                                                        <div class="price">
                                                            <strong>1,060,000<sup>₫</sup></strong>
                                                        </div>
                                                        <div class="listPrice">
                                                            <del class="listPrice">1,250,000<sup>₫</sup></del>
                                                        </div>
                                                    </div>
                                                    <div class="f-items__ls main-rating">
                                                        <span class="jstars" data-value="0"></span>
                                                        <label class="ml-auto">0 đã bán</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="o-items">
                                        <div class="f-items">
                                           <div class="f-items__info">
                                            <div class="f-product-item__thumb">
                                                <a href="/giay-the-thao-da-mo-thoi-trang-phong-cach-han-quoc-p320182.html">
                                                    <div class="f-product-item__thumb-img" title="GIÀY THỂ THAO DA MỜ THỜI TRANG PHONG CÁCH HÀN QUỐC">
                                                        <img src="https://image.voso.vn/users/vosoimage/images/ea4f30ff0ca6dd847d91de55e573e552?t%5B0%5D=maxSize%3Awidth%3D301%2Cheight%3D212&t%5B1%5D=compress%3Alevel%3D100&accessToken=46075c26f95c8818e6b3ac05c072536f536515a8b73193adb0ebe27b3afa3045" alt="">
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="f-items_description f-items_show-name">
                                                <div class="f-items_name"><a href="/giay-the-thao-da-mo-thoi-trang-phong-cach-han-quoc-p320182.html">GIÀY THỂ THAO DA MỜ THỜI TRANG PHONG CÁCH HÀN QUỐC</a></div>
                                                <div class="b__price">
                                                    <div class="price">
                                                        <strong>560,000<sup>₫</sup></strong>
                                                    </div>
                                                </div>
                                                <div class="f-items__ls main-rating">
                                                    <span class="jstars" data-value="0"></span>
                                                    <label class="ml-auto">0 đã bán</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="o-items">
                                    <div class="f-items">
                                        <div class="f-items__info">
                                            <div class="f-product-item__thumb">
                                                <a href="/chinh-hang-ttd-fullbox-bh-vo-kh-ghi-ro-size-o-phan-ghi-chu-giay-sneaker-danh-cho-nam-xam-thoai-mai-v189-size-4044-cam-ket-chinh-hang-cam-ket-hinh-that-p676141.html">
                                                    <div class="f-product-item__thumb-img" title="[CHÍNH HÃNG TTD + FULLBOX + BH + VỚ + KH GHI RÕ SIZE Ở PHẦN GHI CHÚ] Giày Sneaker Dành Cho Nam XÁM - Thoải Mái - V18-9 SIZE 40-44 - CAM KẾT CHÍNH HÃNG - CAM KẾT HÌNH THẬT">
                                                        <img src="https://image.voso.vn/users/vosoimage/images/e5a02fca93eb579f339d8c51031f90bc?t%5B0%5D=maxSize%3Awidth%3D301%2Cheight%3D212&t%5B1%5D=compress%3Alevel%3D100&accessToken=17cc88955dba0318339fb7326673402dfc7ad9c1af3b2948ec5bae24e2f2808a" alt="">
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="f-items_description f-items_show-name">
                                               <div class="f-items_name"><a href="/chinh-hang-ttd-fullbox-bh-vo-kh-ghi-ro-size-o-phan-ghi-chu-giay-sneaker-danh-cho-nam-xam-thoai-mai-v189-size-4044-cam-ket-chinh-hang-cam-ket-hinh-that-p676141.html">[CHÍNH HÃNG TTD + FULLBOX + BH + VỚ + KH GHI RÕ SIZE Ở PHẦN GHI CHÚ] Giày Sneaker Dành Cho Nam XÁM - Thoải Mái - V18-9 SIZE 40-44 - CAM KẾT CHÍNH HÃNG - CAM KẾT HÌNH THẬT</a></div>
                                               <div class="b__price">
                                                <div class="price">
                                                    <strong>460,000<sup>₫</sup></strong>
                                                </div>
                                                <div class="listPrice">
                                                    <del class="listPrice">470,000<sup>₫</sup></del>
                                                </div>
                                            </div>
                                            <div class="f-items__ls main-rating">
                                                <span class="jstars" data-value="0"></span>
                                                <label class="ml-auto">0 đã bán</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="o-items">
                                <div class="f-items">
                                    <div class="f-items__info">
                                        <div class="f-product-item__thumb">
                                            <a href="/fullbox-kh-ghi-ro-size-o-phan-ghi-chu-giay-the-thao-sneaker-ttd-v1811-size-4044-ttdshoes-hang-chinh-hang-p669903.html">
                                                <div class="f-product-item__thumb-img" title="[FULLBOX + KH GHI RÕ SIZE Ở PHẦN GHI CHÚ + GIÀY THỂ THAO SNEAKER TTD V1811 SIZE 40-44, TTDShoes - Hàng Chính Hãng">
                                                    <img src="https://image.voso.vn/users/vosoimage/images/bf59d5c4f968e081d79c7584e946cdae?t%5B0%5D=maxSize%3Awidth%3D301%2Cheight%3D212&t%5B1%5D=compress%3Alevel%3D100&accessToken=550881271442a2922d72cad8860246e12a739523ac4fc19a2e82141543bbc281" alt="">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="f-items_description f-items_show-name">
                                            <div class="f-items_name"><a href="/fullbox-kh-ghi-ro-size-o-phan-ghi-chu-giay-the-thao-sneaker-ttd-v1811-size-4044-ttdshoes-hang-chinh-hang-p669903.html">[FULLBOX + KH GHI RÕ SIZE Ở PHẦN GHI CHÚ + GIÀY THỂ THAO SNEAKER TTD V1811 SIZE 40-44, TTDShoes - Hàng Chính Hãng</a></div>
                                            <div class="b__price">
                                                <div class="price">
                                                    <strong>390,000<sup>₫</sup></strong>
                                                </div>
                                                <div class="listPrice">
                                                    <del class="listPrice">400,000<sup>₫</sup></del>
                                                </div>
                                            </div>
                                            <div class="f-items__ls main-rating">
                                                <span class="jstars" data-value="0"></span>
                                                <label class="ml-auto">0 đã bán</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="o-items">
                                <div class="f-items">
                                    <div class="f-items__info">
                                        <div class="f-product-item__thumb">
                                            <a href="/giay-luoi-nam-da-bo-g51-p390184.html">
                                                <div class="f-product-item__thumb-img" title="Giày Lười Nam Da Bò - G51">
                                                    <img src="https://image.voso.vn/users/vosoimage/images/a675241d8f2100cc27fafe8dc46ecd23?t%5B0%5D=maxSize%3Awidth%3D301%2Cheight%3D212&t%5B1%5D=compress%3Alevel%3D100&accessToken=1f0ec56345f70e9bbc55770fc2fdfa7b5863d2f2d842d94ace81754468388696" alt="">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="f-items_description f-items_show-name">
                                            <div class="f-items_name"><a href="/giay-luoi-nam-da-bo-g51-p390184.html">Giày Lười Nam Da Bò - G51</a></div>
                                            <div class="b__price">
                                                <div class="price">
                                                    <strong>699,000<sup>₫</sup></strong>
                                                </div>
                                                <div class="listPrice">
                                                    <del class="listPrice">1,000,000<sup>₫</sup></del>
                                                </div>
                                            </div>
                                            <div class="f-items__ls main-rating">
                                                <span class="jstars" data-value="0"></span>
                                                <label class="ml-auto">0 đã bán</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="o-items">
                                <div class="f-items">
                                    <div class="f-items__info">
                                        <div class="f-product-item__thumb">
                                            <a href="/giay-the-thao-giay-cau-long-thuong-hieu-chinh-hang-victor-922ac-chinh-hang-p201379.html">
                                                <div class="f-product-item__thumb-img" title="Giày thể thao- Giày cầu lông thương hiệu, chính hãng VICTOR 922AC chính hãng">
                                                    <img src="https://image.voso.vn/users/vosoimage/images/f176c21c05c53c3d12346b7a76f65b6e?t%5B0%5D=maxSize%3Awidth%3D301%2Cheight%3D212&t%5B1%5D=compress%3Alevel%3D100&accessToken=3a68b894505a9318fe6b6be53c375007e095c8e9cd12b59810e55fc55e1a255f" alt="">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="f-items_description f-items_show-name">
                                            <div class="f-items_name"><a href="/giay-the-thao-giay-cau-long-thuong-hieu-chinh-hang-victor-922ac-chinh-hang-p201379.html">Giày thể thao- Giày cầu lông thương hiệu, chính hãng VICTOR 922AC chính hãng</a></div>
                                            <div class="b__price">
                                                <div class="price">
                                                    <strong>1,799,000<sup>₫</sup></strong>
                                                </div>
                                                <div class="listPrice">
                                                    <del class="listPrice">2,570,000<sup>₫</sup></del>
                                                </div>
                                            </div>
                                            <div class="f-items__ls main-rating">
                                                <span class="jstars" data-value="0"></span>
                                                <label class="ml-auto">0 đã bán</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="o-items">
                                <div class="f-items">
                                    <div class="f-items__info">
                                        <div class="f-product-item__thumb">
                                            <a href="/dep-da-nam-quai-hau-d28-den-bao-hanh-6-thang-p490354.html">
                                                <div class="f-product-item__thumb-img" title="Dép Da Nam Quai Hậu D28 Đen - Bảo Hành 6 Tháng">
                                                    <img src="https://image.voso.vn/users/vosoimage/images/608f8ac4bcb53bd9ae58300ccdeb4235?t%5B0%5D=maxSize%3Awidth%3D301%2Cheight%3D212&t%5B1%5D=compress%3Alevel%3D100&accessToken=410372b6507800681b550ab9c4484128070c4a0fcfd2c9530a03549b5f646dbc" alt="">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="f-items_description f-items_show-name">
                                            <div class="f-items_name"><a href="/dep-da-nam-quai-hau-d28-den-bao-hanh-6-thang-p490354.html">Dép Da Nam Quai Hậu D28 Đen - Bảo Hành 6 Tháng</a></div>
                                            <div class="b__price">
                                                <div class="price">
                                                    <strong>225,000<sup>₫</sup></strong>
                                                </div>
                                                <div class="listPrice">
                                                    <del class="listPrice">395,000<sup>₫</sup></del>
                                                </div>
                                            </div>
                                            <div class="f-items__ls main-rating">
                                                <span class="jstars" data-value="0"></span>
                                                <label class="ml-auto">0 đã bán</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="o-items">
                                <div class="f-items">
                                    <div class="f-items__info">
                                        <div class="f-product-item__thumb">
                                            <a href="/giay-luoi-giay-moi-nam-duc-lo-da-that-oml05d-p29926.html">
                                                <div class="f-product-item__thumb-img" title="Giày lười, giày mọi Nam Đục Lỗ Da Thật OML05D">
                                                    <img src="https://image.voso.vn/users/vosoimage/images/8e5925bb69795f7a4156b5c0fc187122?t%5B0%5D=maxSize%3Awidth%3D301%2Cheight%3D212&t%5B1%5D=compress%3Alevel%3D100&accessToken=11f1b70545e3fbaa86ce296c66b8ee0ace033890e21c19ff0bdfe2813cd5e154" alt="">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="f-items_description f-items_show-name">
                                            <div class="f-items_name"><a href="/giay-luoi-giay-moi-nam-duc-lo-da-that-oml05d-p29926.html">Giày lười, giày mọi Nam Đục Lỗ Da Thật OML05D</a></div>
                                            <div class="b__price">
                                                <div class="price">
                                                   <strong>550,000<sup>₫</sup></strong>
                                               </div>
                                               <div class="listPrice">
                                                <del class="listPrice">850,000<sup>₫</sup></del>
                                            </div>
                                        </div>
                                        <div class="f-items__ls main-rating">
                                            <span class="jstars" data-value="0"></span>
                                            <label class="ml-auto">0 đã bán</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="o-items">
                            <div class="f-items">
                                <div class="f-items__info">
                                    <div class="f-product-item__thumb">
                                        <a href="/giay-tay-nam-da-bo-that-chinh-hang-gcs6-p39442.html">
                                            <div class="f-product-item__thumb-img" title="Giày tây nam da bò thật chính hãng GCS6">
                                                <img src="https://image.voso.vn/users/vosoimage/images/74a0166ae3c16338acbca93bdd7378fa?t%5B0%5D=maxSize%3Awidth%3D301%2Cheight%3D212&t%5B1%5D=compress%3Alevel%3D100&accessToken=bfc8ac414e93271da264506cd9a7b82603fabe4257ec6df31850ead1f9d57b8d" alt="">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="f-items_description f-items_show-name">
                                        <div class="f-items_name"><a href="/giay-tay-nam-da-bo-that-chinh-hang-gcs6-p39442.html">Giày tây nam da bò thật chính hãng GCS6</a></div>
                                        <div class="b__price">
                                            <div class="price">
                                                <strong>375,000<sup>₫</sup></strong>
                                            </div>
                                            <div class="listPrice">
                                                <del class="listPrice">700,000<sup>₫</sup></del>
                                            </div>
                                        </div>
                                        <div class="f-items__ls main-rating">
                                            <span class="jstars" data-value="0"></span>
                                            <label class="ml-auto">0 đã bán</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="o-items">
                            <div class="f-items">
                                <div class="f-items__info">
                                    <div class="f-product-item__thumb">
                                        <a href="/giay-luoi-nam-tang-cao-giay-nam-tang-chieu-cao-6cm-p707300.html">
                                            <div class="f-product-item__thumb-img" title="Giày lười nam tăng cao - giày nam tặng chiều cao 6cm">
                                                <img src="https://image.voso.vn/users/vosoimage/images/acae708d4710e8ef4593dd3e561da949?t%5B0%5D=maxSize%3Awidth%3D301%2Cheight%3D212&t%5B1%5D=compress%3Alevel%3D100&accessToken=4703b210962df781adbd35d2743dfa390917319318c6f6d9dd659de04e371df5" alt="">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="f-items_description f-items_show-name">
                                        <div class="f-items_name"><a href="/giay-luoi-nam-tang-cao-giay-nam-tang-chieu-cao-6cm-p707300.html">Giày lười nam tăng cao - giày nam tặng chiều cao 6cm</a></div>
                                        <div class="b__price">
                                            <div class="price">
                                                <strong>590,000<sup>₫</sup></strong>
                                            </div>
                                            <div class="listPrice">
                                                <del class="listPrice">850,000<sup>₫</sup></del>
                                            </div>
                                        </div>
                                        <div class="f-items__ls main-rating">
                                            <span class="jstars" data-value="0"></span>
                                            <label class="ml-auto">0 đã bán</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="b__product--other b__product--favourite">
                <h3>Có thể bạn cũng thích</h3>
                <div id="favouriteSlide" class="owl-carousel">
                    <div class="o-items">
                        <div class="f-items">
                            <div class="f-items__info">
                               <div class="f-product-item__thumb">
                                <a href="/tinh-dau-hoa-ngoc-lan-p737732.html">
                                    <div class="f-product-item__thumb-img" title="TINH DẦU HOA NGỌC LAN">
                                        <img src="https://image.voso.vn/users/vosoimage/images/dd8f55ff24fb4f3d4980970d0d5d3472?t%5B0%5D=maxSize%3Awidth%3D301%2Cheight%3D212&t%5B1%5D=compress%3Alevel%3D100&accessToken=dea910737bcfa507ce2a63c807ab0360034efcaa5007b6d10b92b24d78f8f442" alt="">
                                    </div>
                                </a>
                            </div>
                            <div class="f-items_description f-items_show-name">
                                <div class="f-items_name"><a href="/tinh-dau-hoa-ngoc-lan-p737732.html">TINH DẦU HOA NGỌC LAN</a></div>
                                <div class="b__price">
                                    <div class="price">
                                        <strong>135,000<sup>₫</sup></strong>
                                    </div>
                                    <div class="listPrice">
                                        <del>150,000<sup>₫</sup></del>
                                    </div>
                                </div>
                                <div class="f-items__ls main-rating">
                                    <span class="jstars" data-value="0"></span>
                                    <label class="ml-auto">0 đã bán</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="o-items">
                    <div class="f-items">
                        <div class="f-items__info">
                            <div class="f-product-item__thumb">
                                <a href="/tinh-dau-hoa-buoi-p737731.html">
                                    <div class="f-product-item__thumb-img" title="TINH DẦU HOA BƯỞI">
                                        <img src="https://image.voso.vn/users/vosoimage/images/c5ef2765a3a971b3f0a7ec146fb4ce1d?t%5B0%5D=maxSize%3Awidth%3D301%2Cheight%3D212&t%5B1%5D=compress%3Alevel%3D100&accessToken=b55f64260fa2ee9e805492732283c6f94a4cd8c03fb33061fea6c6824dc6471a" alt="">
                                    </div>
                                </a>
                            </div>
                            <div class="f-items_description f-items_show-name">
                                <div class="f-items_name"><a href="/tinh-dau-hoa-buoi-p737731.html">TINH DẦU HOA BƯỞI</a></div>
                                <div class="b__price">
                                    <div class="price">
                                        <strong>155,000<sup>₫</sup></strong>
                                    </div>
                                </div>
                                <div class="f-items__ls main-rating">
                                    <span class="jstars" data-value="0"></span>
                                    <label class="ml-auto">0 đã bán</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="o-items">
                    <div class="f-items">
                        <div class="f-items__info">
                            <div class="f-product-item__thumb">
                                <a href="/tinh-dau-tram-50ml-p737728.html">
                                    <div class="f-product-item__thumb-img" title="TINH DẦU TRÀM 50ML">
                                        <img src="https://image.voso.vn/users/vosoimage/images/3d356242751591ee6f64efe11d51a67c?t%5B0%5D=maxSize%3Awidth%3D301%2Cheight%3D212&t%5B1%5D=compress%3Alevel%3D100&accessToken=3f984c94c63ecda0bdc8baf7c3f0010b9f41f0624190e355222bedc82a5853fe" alt="">
                                    </div>
                                </a>
                            </div>
                            <div class="f-items_description f-items_show-name">
                                <div class="f-items_name"><a href="/tinh-dau-tram-50ml-p737728.html">TINH DẦU TRÀM 50ML</a></div>
                                <div class="b__price">
                                    <div class="price">
                                        <strong>135,000<sup>₫</sup></strong>
                                    </div>
                                    <div class="listPrice">
                                        <del>150,000<sup>₫</sup></del>
                                    </div>
                                </div>
                                <div class="f-items__ls main-rating">
                                    <span class="jstars" data-value="0"></span>
                                    <label class="ml-auto">0 đã bán</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="o-items">
                    <div class="f-items">
                        <div class="f-items__info">
                            <div class="f-product-item__thumb">
                                <a href="/tinh-dau-gu-huong-50ml-p737725.html">
                                    <div class="f-product-item__thumb-img" title="TINH DẦU GÙ HƯƠNG 50ML">
                                        <img src="https://image.voso.vn/users/vosoimage/images/cb45a1b095dac18255cc614d5a353bde?t%5B0%5D=maxSize%3Awidth%3D301%2Cheight%3D212&t%5B1%5D=compress%3Alevel%3D100&accessToken=57754a0cb61f5da6f5dc257bc87b1db6f790f8276d089fbb84e10243ebc40caa" alt="">
                                    </div>
                                </a>
                            </div>
                            <div class="f-items_description f-items_show-name">
                                <div class="f-items_name"><a href="/tinh-dau-gu-huong-50ml-p737725.html">TINH DẦU GÙ HƯƠNG 50ML</a></div>
                                <div class="b__price">
                                    <div class="price">
                                        <strong>155,000<sup>₫</sup></strong>
                                    </div>
                                    <div class="listPrice">
                                        <del>170,000<sup>₫</sup></del>
                                    </div>
                                </div>
                                <div class="f-items__ls main-rating">
                                    <span class="jstars" data-value="0"></span>
                                    <label class="ml-auto">0 đã bán</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="o-items">
                    <div class="f-items">
                        <div class="f-items__info">
                            <div class="f-product-item__thumb">
                                <a href="/giay-cao-co-da-bo-cho-nam-phong-cach-han-quoc-nang-dong-ca-tinh-thoi-trang-p737721.html">
                                    <div class="f-product-item__thumb-img" title="Giày cao cổ da bò cho nam phong cách Hàn Quốc , năng động cá tính thời trang">
                                        <img src="https://image.voso.vn/users/vosoimage/images/1d7cdf60c2220d2a233747b82424021e?t%5B0%5D=maxSize%3Awidth%3D301%2Cheight%3D212&t%5B1%5D=compress%3Alevel%3D100&accessToken=7d5a065e2f4c03ca87f74a2f0790d266a10988e5c83dd10c24667ee969137443" alt="">
                                    </div>
                                </a>
                            </div>
                            <div class="f-items_description f-items_show-name">
                                <div class="f-items_name"><a href="/giay-cao-co-da-bo-cho-nam-phong-cach-han-quoc-nang-dong-ca-tinh-thoi-trang-p737721.html">Giày cao cổ da bò cho nam phong cách Hàn Quốc , năng động cá tính thời trang</a></div>
                                <div class="b__price">
                                    <div class="price">
                                        <strong>1,099,000<sup>₫</sup></strong>
                                    </div>
                                    <div class="listPrice">
                                        <del>1,599,000<sup>₫</sup></del>
                                    </div>
                                </div>
                                <div class="f-items__ls main-rating">
                                    <span class="jstars" data-value="0"></span>
                                    <label class="ml-auto">0 đã bán</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="o-items">
                    <div class="f-items">
                        <div class="f-items__info">
                            <div class="f-product-item__thumb">
                                <a href="/giay-cao-co-da-bo-cho-nam-phong-cach-han-quoc-nang-dong-ca-tinh-thoi-trang-p737722.html">
                                    <div class="f-product-item__thumb-img" title="Giày cao cổ da bò cho nam phong cách Hàn Quốc , năng động cá tính thời trang">
                                        <img src="https://image.voso.vn/users/vosoimage/images/1d7cdf60c2220d2a233747b82424021e?t%5B0%5D=maxSize%3Awidth%3D301%2Cheight%3D212&t%5B1%5D=compress%3Alevel%3D100&accessToken=7d5a065e2f4c03ca87f74a2f0790d266a10988e5c83dd10c24667ee969137443" alt="">
                                    </div>
                                </a>
                            </div>
                            <div class="f-items_description f-items_show-name">
                                <div class="f-items_name"><a href="/giay-cao-co-da-bo-cho-nam-phong-cach-han-quoc-nang-dong-ca-tinh-thoi-trang-p737722.html">Giày cao cổ da bò cho nam phong cách Hàn Quốc , năng động cá tính thời trang</a></div>
                                <div class="b__price">
                                    <div class="price">
                                        <strong>1,099,000<sup>₫</sup></strong>
                                    </div>
                                    <div class="listPrice">
                                        <del>1,599,000<sup>₫</sup></del>
                                    </div>
                                </div>
                                <div class="f-items__ls main-rating">
                                    <span class="jstars" data-value="0"></span>
                                    <label class="ml-auto">0 đã bán</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="o-items">
                    <div class="f-items">
                        <div class="f-items__info">
                            <div class="f-product-item__thumb">
                                <a href="/giay-cao-co-da-bo-cho-nam-phong-cach-han-quoc-nang-dong-ca-tinh-thoi-trang-p737724.html">
                                    <div class="f-product-item__thumb-img" title="Giày cao cổ da bò cho nam phong cách Hàn Quốc , năng động cá tính thời trang">
                                        <img src="https://image.voso.vn/users/vosoimage/images/1d7cdf60c2220d2a233747b82424021e?t%5B0%5D=maxSize%3Awidth%3D301%2Cheight%3D212&t%5B1%5D=compress%3Alevel%3D100&accessToken=7d5a065e2f4c03ca87f74a2f0790d266a10988e5c83dd10c24667ee969137443" alt="">
                                    </div>
                                </a>
                            </div>
                            <div class="f-items_description f-items_show-name">
                                <div class="f-items_name"><a href="/giay-cao-co-da-bo-cho-nam-phong-cach-han-quoc-nang-dong-ca-tinh-thoi-trang-p737724.html">Giày cao cổ da bò cho nam phong cách Hàn Quốc , năng động cá tính thời trang</a></div>
                                <div class="b__price">
                                    <div class="price">
                                        <strong>1,099,000<sup>₫</sup></strong>
                                    </div>
                                    <div class="listPrice">
                                        <del>1,599,000<sup>₫</sup></del>
                                    </div>
                                </div>
                                <div class="f-items__ls main-rating">
                                    <span class="jstars" data-value="0"></span>
                                    <label class="ml-auto">0 đã bán</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="o-items">
                    <div class="f-items">
                        <div class="f-items__info">
                           <div class="f-product-item__thumb">
                            <a href="/giay-cao-co-da-bo-cho-nam-phong-cach-han-quoc-nang-dong-ca-tinh-thoi-trang-p737726.html">
                                <div class="f-product-item__thumb-img" title="Giày cao cổ da bò cho nam phong cách Hàn Quốc , năng động cá tính thời trang">
                                    <img src="https://image.voso.vn/users/vosoimage/images/1d7cdf60c2220d2a233747b82424021e?t%5B0%5D=maxSize%3Awidth%3D301%2Cheight%3D212&t%5B1%5D=compress%3Alevel%3D100&accessToken=7d5a065e2f4c03ca87f74a2f0790d266a10988e5c83dd10c24667ee969137443" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="f-items_description f-items_show-name">
                            <div class="f-items_name"><a href="/giay-cao-co-da-bo-cho-nam-phong-cach-han-quoc-nang-dong-ca-tinh-thoi-trang-p737726.html">Giày cao cổ da bò cho nam phong cách Hàn Quốc , năng động cá tính thời trang</a></div>
                            <div class="b__price">
                                <div class="price">
                                    <strong>1,099,000<sup>₫</sup></strong>
                                </div>
                                <div class="listPrice">
                                    <del>1,599,000<sup>₫</sup></del>
                                </div>
                            </div>
                            <div class="f-items__ls main-rating">
                                <span class="jstars" data-value="0"></span>
                                <label class="ml-auto">0 đã bán</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="o-items">
                <div class="f-items">
                    <div class="f-items__info">
                        <div class="f-product-item__thumb">
                            <a href="/giay-cao-co-da-bo-cho-nam-phong-cach-han-quoc-nang-dong-ca-tinh-thoi-trang-p737727.html">
                                <div class="f-product-item__thumb-img" title="Giày cao cổ da bò cho nam phong cách Hàn Quốc , năng động cá tính thời trang">
                                    <img src="https://image.voso.vn/users/vosoimage/images/1d7cdf60c2220d2a233747b82424021e?t%5B0%5D=maxSize%3Awidth%3D301%2Cheight%3D212&t%5B1%5D=compress%3Alevel%3D100&accessToken=7d5a065e2f4c03ca87f74a2f0790d266a10988e5c83dd10c24667ee969137443" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="f-items_description f-items_show-name">
                            <div class="f-items_name"><a href="/giay-cao-co-da-bo-cho-nam-phong-cach-han-quoc-nang-dong-ca-tinh-thoi-trang-p737727.html">Giày cao cổ da bò cho nam phong cách Hàn Quốc , năng động cá tính thời trang</a></div>
                            <div class="b__price">
                                <div class="price">
                                    <strong>1,099,000<sup>₫</sup></strong>
                                </div>
                                <div class="listPrice">
                                    <del>1,599,000<sup>₫</sup></del>
                                </div>
                            </div>
                            <div class="f-items__ls main-rating">
                                <span class="jstars" data-value="0"></span>
                                <label class="ml-auto">0 đã bán</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="o-items">
                <div class="f-items">
                    <div class="f-items__info">
                        <div class="f-product-item__thumb">
                            <a href="/tui-khan-nen-dang-vien-keo-20-vientui-p737716.html">
                                <div class="f-product-item__thumb-img" title="Túi khăn nén dạng viên kẹo - 20 viên/túi">
                                    <img src="https://image.voso.vn/users/vosoimage/images/fcfb1bfedef9105bf8b268997b3c3b33?t%5B0%5D=maxSize%3Awidth%3D301%2Cheight%3D212&t%5B1%5D=compress%3Alevel%3D100&accessToken=8574cb0c54447640d1783bf835d62432784dc10c14f964a1b7332725e1e69d8d" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="f-items_description f-items_show-name">
                            <div class="f-items_name"><a href="/tui-khan-nen-dang-vien-keo-20-vientui-p737716.html">Túi khăn nén dạng viên kẹo - 20 viên/túi</a></div>
                            <div class="b__price">
                                <div class="price">
                                    <strong>55,000<sup>₫</sup></strong>
                                </div>
                            </div>
                            <div class="f-items__ls main-rating">
                                <span class="jstars" data-value="0"></span>
                                <label class="ml-auto">0 đã bán</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<div class="product-related-pc">
    <div class="b__product--other b__product--relate">
        <h3>Sản phẩm tương tự</h3>
        <div id="relateSlide" class="owl-carousel">
            <div class="o-items">
                <div class="f-items">
                    <div class="f-items__info">
                        <div class="f-product-item__thumb">
                            <a href="/giay-boot-nam-co-lung-de-khau-da-tron-mau-den-cuc-chat-m354den-p278434.html">
                                <div class="f-product-item__thumb-img" title="Giày Boot Nam Cổ Lửng Đế Khâu Da Trơn Màu Đen Cực Chất - M354-DEN">
                                    <img src="https://image.voso.vn/users/vosoimage/images/b0e9e690a985fa57704808c532946919?t%5B0%5D=maxSize%3Awidth%3D301%2Cheight%3D212&t%5B1%5D=compress%3Alevel%3D100&accessToken=59eeb1ffd8d0a59991532c46c4209c06a6c73031eb461373ecc6944f3a043ae5" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="f-items_description f-items_show-name">
                            <div class="f-items_name"><a href="/giay-boot-nam-co-lung-de-khau-da-tron-mau-den-cuc-chat-m354den-p278434.html">Giày Boot Nam Cổ Lửng Đế Khâu Da Trơn Màu Đen Cực Chất - M354-DEN</a></div>
                            <div class="f-items__ls main-rating">
                                <span class="jstars" data-value="0"></span>
                            </div>
                            <div class="b__price">
                                <strong>230,000<sup>₫</sup></strong>
                                <del class="listPrice">460,000<sup>₫</sup></del>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="o-items">
                <div class="f-items">
                    <div class="f-items__info">
                        <div class="f-product-item__thumb">
                            <a href="/lot-giay-tang-chieu-cao-eva-nguyen-ban-v2-p276007.html">
                                <div class="f-product-item__thumb-img" title="Lót giày tăng chiều cao EVA nguyên bàn V.2">
                                    <img src="https://image.voso.vn/users/vosoimage/images/d6b06856ea8a1c8ad2ae68f7268b6998?t%5B0%5D=maxSize%3Awidth%3D301%2Cheight%3D212&t%5B1%5D=compress%3Alevel%3D100&accessToken=35f20837cbdb78899c3036156c48d49a603d99361d1b447063999311bd345958" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="f-items_description f-items_show-name">
                            <div class="f-items_name"><a href="/lot-giay-tang-chieu-cao-eva-nguyen-ban-v2-p276007.html">Lót giày tăng chiều cao EVA nguyên bàn V.2</a></div>
                            <div class="f-items__ls main-rating">
                                <span class="jstars" data-value="0"></span>
                            </div>
                            <div class="b__price">
                                <strong>130,000<sup>₫</sup></strong>
                                <del class="listPrice">162,500<sup>₫</sup></del>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="o-items">
                <div class="f-items">
                    <div class="f-items__info">
                        <div class="f-product-item__thumb">
                            <a href="/giay-the-thao-de-bang-nam-ma-gh0165-xanh-p498721.html">
                                <div class="f-product-item__thumb-img" title="giày thể thao đế bằng nam Mã: GH0165 - XANH">
                                    <img src="https://image.voso.vn/users/vosoimage/images/b1739d0c18f5dc74228ca6e50133cb7e?t%5B0%5D=maxSize%3Awidth%3D301%2Cheight%3D212&t%5B1%5D=compress%3Alevel%3D100&accessToken=2e93e98be2e4bbdf73afc3c044dc9496aa784a2131cdc1dcd166f1cd3a074234" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="f-items_description f-items_show-name">
                            <div class="f-items_name"><a href="/giay-the-thao-de-bang-nam-ma-gh0165-xanh-p498721.html">giày thể thao đế bằng nam Mã: GH0165 - XANH</a></div>
                            <div class="f-items__ls main-rating">
                                <span class="jstars" data-value="0"></span>
                            </div>
                            <div class="b__price">
                                <strong>248,000<sup>₫</sup></strong>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="o-items">
                <div class="f-items">
                    <div class="f-items__info">
                        <div class="f-product-item__thumb">
                            <a href="/giay-the-thao-da-bo-nam-z01-den-da-that-vnxk-bao-hanh-12-thang-p479329.html">
                                <div class="f-product-item__thumb-img" title="Giày Thể Thao Da Bò Nam Z01 Đen Da Thật VNXK - Bảo hành 12 tháng">
                                    <img src="https://image.voso.vn/users/vosoimage/images/fa655bdcc844a03d826dde628e0e8041?t%5B0%5D=maxSize%3Awidth%3D301%2Cheight%3D212&t%5B1%5D=compress%3Alevel%3D100&accessToken=2f1c368128e5ff0e74899bd7333207b363e812da4edb32c819b1a4d2e279ddc4" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="f-items_description f-items_show-name">
                            <div class="f-items_name"><a href="/giay-the-thao-da-bo-nam-z01-den-da-that-vnxk-bao-hanh-12-thang-p479329.html">Giày Thể Thao Da Bò Nam Z01 Đen Da Thật VNXK - Bảo hành 12 tháng</a></div>
                            <div class="f-items__ls main-rating">
                                <span class="jstars" data-value="0"></span>
                            </div>
                            <div class="b__price">
                                <strong>365,000<sup>₫</sup></strong>
                                <del class="listPrice">550,000<sup>₫</sup></del>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="o-items">
                <div class="f-items">
                    <div class="f-items__info">
                        <div class="f-product-item__thumb">
                            <a href="/giay-the-thao-nam-cao-cap-libra010-den-do-size-3944-p541351.html">
                                <div class="f-product-item__thumb-img" title="Giày thể thao nam cao cấp libra010 đen đỏ size 39-44">
                                    <img src="https://image.voso.vn/users/vosoimage/images/bfafc9d491f3aee813a9f744b200df78?t%5B0%5D=maxSize%3Awidth%3D301%2Cheight%3D212&t%5B1%5D=compress%3Alevel%3D100&accessToken=d10c67e5fd3fada6788bfb5c2843724c5db00e7745b014836bc2597d92726100" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="f-items_description f-items_show-name">
                            <div class="f-items_name"><a href="/giay-the-thao-nam-cao-cap-libra010-den-do-size-3944-p541351.html">Giày thể thao nam cao cấp libra010 đen đỏ size 39-44</a></div>
                            <div class="f-items__ls main-rating">
                                <span class="jstars" data-value="0"></span>
                            </div>
                            <div class="b__price">
                                <strong>250,000<sup>₫</sup></strong>
                                <del class="listPrice">390,000<sup>₫</sup></del>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="o-items">
                <div class="f-items">
                    <div class="f-items__info">
                        <div class="f-product-item__thumb">
                            <a href="/giay-luoi-nam-dep-bang-khuyet-da-bong-rat-sang-trong-m367bong-p279019.html">
                                <div class="f-product-item__thumb-img" title="Giày Lười Nam Đẹp Băng Khuyết Da Bóng Rất Sang Trọng - M367-BONG">
                                    <img src="https://image.voso.vn/users/vosoimage/images/8d4e84e527a762686c7c98c715157244?t%5B0%5D=maxSize%3Awidth%3D301%2Cheight%3D212&t%5B1%5D=compress%3Alevel%3D100&accessToken=9467912cbf4389ccc0f7df41615c7cb3e3ec2fccd356321785ae4c21499b1ac4" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="f-items_description f-items_show-name">
                            <div class="f-items_name"><a href="/giay-luoi-nam-dep-bang-khuyet-da-bong-rat-sang-trong-m367bong-p279019.html">Giày Lười Nam Đẹp Băng Khuyết Da Bóng Rất Sang Trọng - M367-BONG</a></div>
                            <div class="f-items__ls main-rating">
                                <span class="jstars" data-value="0"></span>
                            </div>
                            <div class="b__price">
                                <strong>175,000<sup>₫</sup></strong>
                                <del class="listPrice">350,000<sup>₫</sup></del>
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

</div>
</div>
<div id="popup_add_product" class="popup_add_product">
    <div class="popup_content">
        <p>Thêm thành công</p>
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