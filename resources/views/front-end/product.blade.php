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
	    <meta name="keywords" content="{{$product->seo_keyword}}" />
	    <meta name="description" content="{{$product->seo_description}}" />
	    <meta property="og:type" content="website" />
	    <meta property="og:title" content="{{$product->title}}" />
	    <meta property="og:description" content="{{$product->seo_description}}" />
	    <meta property="og:site_name" content="{{$product->title}}" />
	    <meta property="og:url" content="{{$system->website}}/{{$product->url}}" />
	    <meta property="og:image" content="{{asset('uploads/images/products/avatars/'.$product->avata)}}" />
	    <meta property="og:locale" content="vi_VN" />
	    <link rel="canonical" href="" /> 
	    <title>{{$product->title}}</title>

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
            
            <li ><a href="{{URL::route('merchantInfo')}}">H??? s?? c???a t??i</a></li>
            <!-- <li ><a href="/lich-su-mua-hang.html">L???ch s??? ????n h??ng</a></li> -->
            <li ><a href="{{URL::route('logout')}}">????ng xu???t</a></li>
            @else
                <li ng-click="signin()"><a href="">????ng nh???p</a></li>
                <li ng-click="signup()"><a href="">????ng k??</a></li>
            @endif
        </ul>
        <div class="top-cart-mobile" id="icon-cart-mobile">
            <a href="/gio-hang">
                <i class="fa fa-shopping-cart"></i>
                 @php
                    $total_cart_item = Cart::count();
                @endphp
                <span class="product-detail__quantity total-item-in-cart" >{{$total_cart_item}}</span>
            </a>
        </div>
    </div>
</div>
<div class="b__detail--main-wapper" ng-controller="product" ng-init="init()">
    <div class="detail-group-btn-mobile">
        <button class="btn-add-mobile add-to-cart" href="{{URL::route('addToCart',[$product->id,1])}}"><i class="fas fa-cart-arrow-down" style="margin-right: 10px;"></i>TH??M V??O GI???</button>
        <button class="btn-buy-mobile buy-now" href="{{URL::route('addToCart',[$product->id,1])}}"><i class="fas fa-arrow-circle-right"></i>MUA NGAY</button>
        <!-- <button class="btn-stop-mobile" ng-if="available">H???t h??ng</button> -->
    </div>
    <div class="b__detail--wapper">
        <div class="container">
            <div class="b__detail--info">
                <nav class="b__breadcrumb" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Trang ch???</a></li>
                        
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
                                        <span>H???t h??ng</span>
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

                                            <span><label><strong>10</strong></label> ????nh gi??</span>
                                            <span> ???? b??n <label>6</label></span>

                                        </h2>
                                        <div class="b__price-mobile">
                                            <div class="c-product-main__text">
                                                    @if($product->sale=='')
                                                    <span class="c-product-main__oldprice ng-binding">{!!number_format($product->price)!!}<sup>??</sup></span>
                                                    @else
                                                    <span class="c-product-main__oldprice ng-binding">{!!number_format($product->sale)!!}<sup>??</sup></span>
                                                    <span class="c-product-main__price ng-scope"><span class="ng-binding">{!!number_format($product->price)!!}</span><sup>??</sup></span>
                                                    @php
                                                        $percent = ($product->price-$product->sale)/$product->price;
                                                        $percent = floor($percent*100);
                                                    @endphp
                                                    <span class="c-tag-sale ng-binding ng-scope">Gi???m {{$percent}}%</span>
                                                    @endif
                                                </div>
                                        </div>
                                        
                                        <div class="box-program-info">
                                        	<div class="b__price ng-scope">
                                        		<div class="c-product-main__text">
                                                    @if($product->sale=='')
                                                    <span class="c-product-main__oldprice ng-binding">{!!number_format($product->price)!!}<sup>??</sup></span>
                                                    @else
                                                    <span class="c-product-main__oldprice ng-binding">{!!number_format($product->sale)!!}<sup>??</sup></span>
                                                    <span class="c-product-main__price ng-scope"><span class="ng-binding">{!!number_format($product->price)!!}</span><sup>??</sup></span>
                                                    @php
                                                        $percent = ($product->price-$product->sale)/$product->price;
                                                        $percent = floor($percent*100);
                                                    @endphp
                                                    <span class="c-tag-sale ng-binding ng-scope">Gi???m {{$percent}}%</span>
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
                                	<a class="img_mess" href="#" onclick="update()" style="border: 1px solid #c3000c; font-weight: 800; color: #c3000c"><img src="{{asset('images/chat-icon.png')}}" style="margin-right: 10px;"> Chat ngay</a>
                                    <a href="{{URL::route('addToCart',[$product->id,1])}}" class="add-to-cart btn-cart">
                                        <span id="add-to-cart">Th??m v??o gi??? h??ng</span>
                                    </a>
                                    <a href="{{URL::route('addToCart',[$product->id,1])}}" class="btn btn-buy buy-now"><img src="{{asset('images/icon-buy-now.png')}}" />Mua ngay</a>
                                    
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
                                                        <p><img style="padding-right: 3px" src="{{asset('images/online-status-icon.png')}}" />??ang ho???t ?????ng</p>
                                                        @else
                                                        <p><img style="padding-right: 3px" src="{{asset('images/offline-status-icon.png')}}" />Ng???ng ho???t ?????ng</p>
                                                        @endif
                                                    </div>
                                                    <ul ng-controller="chatCtrl">
                                                        <li><a class="img_mess" onclick="update()" href="#"><img src="{{asset('images/message.png')}}" /> Chat ngay</a></li>
                                                        <li><a class="go_to_shop" href="{{$s->name_s}}-si{{$s->id}}"><img src="{{asset('images/icon_go_to_shop.png')}}" />Xem shop</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="b__shop--ls b__shop--thongso ml-auto d-flex align-items-center">
                                            <div class="info-content mr-3">
                                                <label>S???n ph???m</label> <br>
                                                <span>{{count($s_products)}}</span>
                                            </div>
                                            <div class="info-content mr-3">
                                                <label>????nh gi??</label> <br>
                                                <span>10</label>
                                                </div>
                                                <div class="info-content mr-3">
                                                	@php
                                                		Carbon\Carbon::setLocale('vi');
					                                	$time_in = \Carbon\Carbon::createFromTimestamp(strtotime($s->created_at))->toDayDateTimeString();
				                                        
				                                        $now = \Carbon\Carbon::now();
                                                	@endphp
                                                    <label>Ng??y tham gia</label> <br>
                                                    <span>{{\Carbon\Carbon::createFromTimestamp(strtotime($s->created_at))->diffForHumans($now)}}</span>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="b__product--detail">
                                        
                                        <div class="b__product--detail_ls">
                                            <h3>M?? t??? s???n ph???m </h3>
                                            <div ta-bind="text" class="b__product--description">
                                            	{!!$product->content!!}
                                            </div>
                                        </div>
                                    </div>

                                    


                                    <div class="b__product--detail b__product--evaluate">
                                        <div class="row">

                                            <div class="col-md-6 col-xs-6">
                                                <h3>????nh gi?? s???n ph???m</h3>
                                            </div>
                                            
                                        </div>
                                        <div class="b__product--evaluate_ls">
                                            
                                            <div class="b__product--evaluate_left">
                                                <div class="rate-sanpham">
                                                    <div class="rate-num">
                                                        <span class="num-big">5</span>
                                                        <span class="num-small">/5</span>
                                                    </div>
                                                    <span class="jstars" data-value="5"></span>
                                                </div>
                                            </div>
                                            

                                        </div>
                                        <div class="b__product--comment">
                                            @foreach($feedbacks as $feedback)
                                        	<div class="media ng-scope">
                                        		<img class="mr-3" ng-src="{{asset('uploads/images/users/avatars/'.$feedback->user_avatar)}}" alt="kh??ch h??ng" src="{{asset('uploads/images/users/avatars/'.$feedback->user_avatar)}}">
                                        		<div class="media-body">
                                        			<h5 class="mt-0 ng-binding">{{$feedback->user_name}}</h5>
                                        			<div class="f-items__ls main-rating">
                                        				<span class="jstars" data-value="{{$feedback->rate}}"></span>
                                        			</div>
                                        			<div class="rating-content ng-binding"></div>
                                        			<div class="rating-group-texts">
                                        				<span>{{$feedback->messages}}</span>
                                        			</div>
                                        			
                                        			<div class="rating-time">
                                        				<span class="ng-binding">09:54 11/03/2021</span>
                                        			</div>
                                        		</div>
                                        	</div>
                                        	@endforeach

                                        	<!-- ngIf: rates.length==0 -->
                                        </div>
                                        @php
                                            if(Auth::check()){
                                                $check = App\Http\Controllers\MerchantController::checkCreateFeedback($product->id);
                                            }
                                            else{
                                                $check = false;
                                            }
                                        @endphp
                                        @if($check)
                                        <div class="row">
                                            <div class="col-md-12" style="text-align: right;">
                                                <button class="btn btn-danger add-fb"><i class="fa fa-plus" style="margin-right: 5px;"></i>????NH GI?? S???N PH???M</button>
                                            </div>
                                        </div>
                                        <form method="POST" action="{{URL::route('postAddFeedback',$product->id)}}">
                                            <input type="hidden" name="_token" value="{{ csrf_token()}}">
                                            <div class="row fb-content">
                                                <div class="col-md-12 mb-5">
                                                    <div class="btn-toolbar mb-2" role="toolbar" aria-label="Toolbar with button groups">
                                                      <div class="btn-group " role="group" aria-label="First group">
                                                        <button type="button" class="btn rating btn-danger" value="5">5 Sao <span class="jstars" data-value="5"></span></button>
                                                        
                                                      </div>
                                                      <div class="btn-group " role="group" aria-label="Second group">
                                                        
                                                        <button type="button" class="btn rating btn-light" value="4">4 Sao <span class="jstars" data-value="4"></span></button>
                                                      </div>
                                                      <div class="btn-group" role="group" aria-label="Third group">
                                                        <button type="button" class="btn rating btn-light" value="3">3 Sao <span class="jstars" data-value="3"></span></button>
                                                      </div>
                                                      <div class="btn-group" role="group" aria-label="Third group">
                                                        <button type="button" class="btn rating btn-light" value="2">2 Sao <span class="jstars" data-value="2"></span></button>
                                                      </div>
                                                      <div class="btn-group" role="group" aria-label="Third group">
                                                        <button type="button" class="btn rating btn-light" value="1">1 Sao <span class="jstars" data-value="1"></span></button>
                                                      </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">

                                                            <div class="form-group" >
                                                                <div class="note-content">
                                                                    <div class="note-content__in">
                                                                        <label>N???i dung ????nh gi??</label>
                                                                        <textarea name="messages" placeholder="..." rows="5" class="form-control customer-note" ></textarea>
                                                                        
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group hidden" >
                                                                <input type="number" name="rate" value="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                                
                                                <div class="col-md-12" style="text-align: right;">
                                                    <button type="submit" class="btn btn-primary"><i class="fa fa-paper-plane" style="margin-right: 5px;"></i>G???I ????NH GI?? S???N PH???M</button>
                                                </div>
                                            </div>
                                        </form>
                                        @else
                                        @endif

                                        
                                    </div>

                                </div>
                                <div class="b__shop--info shop-info-pc">
                                    <div class="product_related">
                                        <div class="b__product--other b__product--relate">
                                            <h3>S???n ph???m t????ng t???</h3>
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
                                            <img src="{{asset('uploads/images/users/avatars/'.$s->avatar)}}" />
                                        </div>
                                        <div class="b__shop--description">
                                            <span>{{$s->name_s}}</span>

                                            @if($s->status)
                                            <p><img style="padding-right: 3px" src="{{asset('images/online-status-icon.png')}}" />??ang ho???t ?????ng</p>
                                            @else
                                            <p><img style="padding-right: 3px" src="{{asset('images/offline-status-icon.png')}}" />Ng???ng ho???t ?????ng</p>
                                            @endif
                                            <p class="detail-merchant-provice-mobile">?????a ch???: <b style="color: #333333;">{{$s->address}}</b></p>
                                            <ul ng-controller="chatCtrl">
                                                <li><a class="img_mess" onclick="update()" href="#" ><img src="{{asset('images/icon_mess.png')}}" /> Chat ngay</a></li>
                                                <li><a href="{{$s->name_s}}-si{{$s->id}}"><img src="{{asset('images/icon_go_to_shop.png')}}" />Gh?? th??m shop</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="b__shop--ls pd-top-17-mb">
                                    <div class="info-content">
                                        <label>????nh gi??:</label>
                                        <span class="jstars" data-value="0"></span>
                                    </div>
                                    <div class="info-content">
                                        <label>S??? S???n Ph???m:</label>
                                        <span>{{count($s_products)}}</span>
                                    </div>
                                    <div class="info-content">
                                        <label>Ng??y Tham Gia:</label>
                                        <span>{{\Carbon\Carbon::createFromTimestamp(strtotime($s->created_at))->diffForHumans($now)}}</span>
                                    </div>
                                    <div class="info-content">
                                        <label>?????a ch???:</label>
                                        <span>{{$s->address}}</span>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        
            <div class="b__product--other b__product--favourite">
                <h3>C?? th??? b???n c??ng th??ch</h3>
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
        <h3>S???n ph???m t????ng t???</h3>
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
            $('.fb-content').addClass('hidden');
            
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
                dataType: 'json',
                success: function(data) {
                    toastr.success('???? th??m v??o gi??? h??ng');
                    $('.total-item-in-cart').text(data[0]);
                    console.log(data);
                }
            });
        });
        $(document).on('click', '.buy-now', function(event) {
            event.preventDefault();
            url = $(this).attr('href');
            $.ajax({
                type: 'GET',
                url: url,
                dataType: 'json',
                success: function(data) {
                    location.href = '/gio-hang';
                }
            });
        });
        $(document).on('click', '.add-fb', function(event) {
            event.preventDefault();
            $('.fb-content').removeClass('hidden');
            $(this).addClass('hidden');
        });
        $(document).on('click', 'button.rating', function(event) {
            event.preventDefault();
            $('button.rating').each(function(){
                if($(this).hasClass('btn-danger')){
                    $(this).removeClass('btn-danger');
                    $(this).addClass('btn-light');
                }
            });
            $(this).removeClass('btn-light');
            $(this).addClass('btn-danger');
            $('input[name="rate"]').val($(this).val());
            
        });
        function update(){
            swal("Ch???c n??ng ??ang ???????c ph??t tri???n", "R???t xin l???i qu?? kh??ch v?? s??? b???t ti???n n??y!");
        }
        
    </script>

@endsection