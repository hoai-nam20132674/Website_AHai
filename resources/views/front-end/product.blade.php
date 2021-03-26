@extends('front-end.layout.default')
@section('body-name')
   body-product-detail
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
	    <meta property="og:title" content="{{$product->title}}" />
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
	    <!-- <link href="css/ban-do-dac-san.css?v=1612447411" rel="stylesheet"> -->
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

<script data-cfasync="false" src="https://voso.vn/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>

<div class="product-detail__header-top">
    <div class="top-referrer-detail" id="top-referrer-detail">
        <a class="top-referrer-detail-href" href="/">
            <i class="fa fa-chevron-left"></i>
        </a>
        <div class="top-product-name">
            <span class="product-detail__product-name">{{$product->name}}</span>
        </div>
        <div class="login_succses_mobile">
            <i class="fa fa-ellipsis-h"></i>
        </div>
        <ul class="login_succses_menu_mobile">
            @if(Auth::user())
            
            <li ><a href="{{URL::route('merchantInfo')}}">Hồ sơ của tôi</a></li>
            <!-- <li ><a href="/lich-su-mua-hang.html">Lịch sử đơn hàng</a></li> -->
            <li ><a href="{{URL::route('logout')}}">Đăng xuất</a></li>
            @else
                <li ng-click="signin()"><a href="">Đăng nhập</a></li>
                <li ng-click="signup()"><a href="">Đăng ký</a></li>
            @endif
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
                                                <img src="{{asset('uploads/images/products/avatars/'.$product->avata)}}" alt="{{$product->name}}" />
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
                                        <div class="b__price-mobile">
                                            <div class="c-product-main__text">
                                                    @if($product->sale=='')
                                                    <span class="c-product-main__oldprice ng-binding">{!!number_format($product->price)!!}<sup>đ</sup></span>
                                                    @else
                                                    <span class="c-product-main__oldprice ng-binding">{!!number_format($product->sale)!!}<sup>đ</sup></span>
                                                    <span class="c-product-main__price ng-scope"><span class="ng-binding">{!!number_format($product->price)!!}</span><sup>đ</sup></span>
                                                    @php
                                                        $percent = ($product->price-$product->sale)/$product->price;
                                                        $percent = floor($percent*100);
                                                    @endphp
                                                    <span class="c-tag-sale ng-binding ng-scope">Giảm {{$percent}}%</span>
                                                    @endif
                                                </div>
                                        </div>
                                        
                                        <div class="box-program-info">
                                        	<div class="b__price ng-scope">
                                        		<div class="c-product-main__text">
                                                    @if($product->sale=='')
                                                    <span class="c-product-main__oldprice ng-binding">{!!number_format($product->price)!!}<sup>đ</sup></span>
                                                    @else
                                                    <span class="c-product-main__oldprice ng-binding">{!!number_format($product->sale)!!}<sup>đ</sup></span>
                                                    <span class="c-product-main__price ng-scope"><span class="ng-binding">{!!number_format($product->price)!!}</span><sup>đ</sup></span>
                                                    @php
                                                        $percent = ($product->price-$product->sale)/$product->price;
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
                                    <a href="javascript:;" class="btn btn-buy"><img src="{{asset('images/icon-buy-now.png')}}" />Mua ngay</a>
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
                                                @php
                                                    $s = App\User::where('id',$product->user_id)->get()->first();
                                                    $s_products = App\Product::where('user_id',$s->id)->get();
                                                @endphp
                                                <div class="b__shop--avatar">
                                                    <img src="{{asset('uploads/images/users/avatars/'.$s->avatar)}}" />
                                                </div>
                                                
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
                                        		<img class="mr-3" ng-src="{{asset('images/avatar_default.png')}}" alt="khách hàng" src="{{asset('images/avatar_default.png')}}">
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
                                        		<img class="mr-3" ng-src="{{asset('images/avatar_default.png')}}" alt="khách hàng" src="{{asset('images/avatar_default.png')}}">
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
                                                @foreach($same_products as $item)
                                                <div class="o-items">
                                                    <div class="f-items">
                                                        <div class="f-items__info">
                                                            @include('front-end.layout.product-item')
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach
                                                
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
                            
                        </div>
                        
            <div class="b__product--other b__product--favourite">
                <h3>Có thể bạn cũng thích</h3>
                <div id="favouriteSlide" class="owl-carousel">
                    @foreach($recommend_products as $item)
                        <div class="o-items">
                            <div class="f-items">
                                <div class="f-items__info">
                                   @include('front-end.layout.product-item')
                            
                                </div>
                            </div>
                        </div>
                    @endforeach
                
            
                </div>
            </div>
        </div>
</div>
<div class="product-related-pc">
    <div class="b__product--other b__product--relate">
        <h3>Sản phẩm tương tự</h3>
        <div id="relateSlide" class="owl-carousel">
        	@foreach($same_products as $item)
            <div class="o-items">
                <div class="f-items">
                    <div class="f-items__info">
                        @include('front-end.layout.product-item')
                    </div>
                </div>
            </div>
            @endforeach
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