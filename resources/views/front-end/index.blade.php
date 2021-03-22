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
	    <meta name="apple-itunes-app" content="app-id=1504041888">
	    <meta name="google-play-app" content="app-id=vn.voso.buyer">
	    <meta property="og:description" content="Sàn thương mại điện tử của khách hàng Viettelpost" />
        <meta property="og:url" content="https://voso.vn" />
        <meta property="og:image" content="http://voso.vn/static/images/logo/avatar_voso.png" /><meta property="og:locale" content="vi_VN" />
        <link rel="canonical" href="" /> 
        
	    <title>Sàn thương mại điện tử của khách hàng Viettelpost</title>

	    <link href="css/bootstrap.css?v=1568371445" rel="stylesheet">
	    <link href="css/font-awesome.min.css?v=1566957476" rel="stylesheet">
	    <link href="css/bootstrap.min.css?v=1603338119" rel="stylesheet">
	    <link href="css/owl.carousel.min.css?v=1603338119" rel="stylesheet">
	    <link href="css/toastr.min.css?v=1603338119" rel="stylesheet">
	    <link href="css/fontawesome.css?v=1603338119" rel="stylesheet">
	    <link href="css/stylev2.css?v=1614350823" rel="stylesheet">
	    <link href="css/all.css?v=1603338119" rel="stylesheet">
	    <link href="css/chat.css?v=1603338119" rel="stylesheet">
	    <link href="css/style.css?v=1610977888" rel="stylesheet">
	    <link href="css/custom.css?v=1614350823" rel="stylesheet"> 
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
	                align-items: center;
	                min-height: 25px;
	            }
	        }
	        .modal.fade .modal-dialog{
	            transform: unset;
	        }

	        [id|=textAngular-editableFix]{
	            display: none !important;
	        }
	    </style>
	    <style>
		    .b__flashsale-cloned {
		        display: none;
		    }


		    .b__box--title {
		        display: flex !important;
		        align-items: center;
		        justify-content: center;
		        margin-bottom: 5px;

		    }

		    .b__box-title {
		        flex: 1;
		        flex-basis: 66%;
		        max-width: 66%;
		    }

		    .b__box_h3 {
		        font-size: 22px;
		        margin: 0;
		        font-weight: 300;
		    }

		    .url-all {
		        flex: 1;
		        text-align: right;
		        align-items: center;
		        justify-content: center;
		        padding-right: 15px;
		    }

		    .b__vosoMall .b__box--title .url-all a.ml-auto {
		        position: inherit;
		    }

		    @media (max-width: 767px) {
		        .b__search--box {
		            width: 100%;
		        }

		        .navbar-generic__back {
		            display: none;
		        }
		    }

		    @media (max-width: 575px) {
		        .b__box_h3 {
		            font-size: 15px;
		            font-weight: 500;
		        }
		    }

		    @media (max-width: 767px) {
		        .icon-cart-mb {
		            position: relative;
		        }

		        .tabbar {
		            display: block;
		        }

		        .h2-tabbar {
		            display: -webkit-box;
		            display: -webkit-flex;
		            display: -ms-flexbox;
		            display: flex;
		            height: 48px;
		            position: fixed;
		            bottom: 0;
		            left: 0;
		            right: 0;
		            z-index: 1000;
		            box-shadow: 0 -1px 1px 0 rgba(0, 0, 0, .15);
		            background-color: #fff;
		            box-sizing: border-box;
		        }

		        .h2-tabbar .svg-icon {
		            vertical-align: middle;
		            overflow: hidden;
		            margin: 0 auto;
		        }

		        .h2-tabbar .svg-icon a:focus {
		            text-decoration: unset;
		        }

		        .h2-tabbar .svg-icon svg {
		            color: #0871ce;
		            font-size: 14px;
		            width: 20px;
		            vertical-align: middle;
		            overflow: hidden;
		            margin: 0 auto;
		        }

		        .h2-tabbar .svg-icon img {
		            height: 100%;
		            width: 100%;
		        }

		        .h2-tabbar .item {
		            width: 100%;
		            text-align: center;
		            padding-top: 5px;
		        }

		        .h2-tabbar .item p {
		            font-size: 10px;
		            color: #8C8C8C;
		        }
		        
		        .tabbar .svg-icon .fas {
		            color: #8C8C8C;
		            font-size: 13px;
		        }

		        .acount-member ul li {
		            border-bottom: 0;
		        }
		        .section-category-list {
		            /*display: none;*/
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
<div ng-controller="popup">
    <div ng-if="data && canDisplay" ng-class="isFull ? 'popup' : ''">
        <div ng-class="isFull ? 'popup-overlay' : ''" ng-click="thumb()"></div>
        <div ng-class="isFull ? 'popup-center' : 'popup-corner'">
            <div class="popup-close" ng-click="isFull ? thumb() : close()">
                <i class="fas fa-times"></i>
            </div>
            <div class="popup-image" ng-click="clickPopup()">
                <img />
            </div>
        </div>
    </div>
</div>
<div class="header-mobile-show">
    <div class="b__banner--pc">
        <div class="container">
            <div class="b__banner--pc_info stretch">
                <div class="b__sldier--left b__slider--ls">
                    <div id="imgSlide" class="owl-carousel">
                        @foreach($sliders as $slider)
                        <div class="b__img">
                            <a class="banner-img progressive replace" data-href="{{asset('uploads/images/sliders/'.$slider->url)}}">
                                <img class="preview" src="{{asset('uploads/images/sliders/'.$slider->url)}}" />
                            </a>
                        </div>
                        @endforeach
                        
                    </div>
                </div>
                <div class="b__banner--right b__slider--ls">
                    <div class="b__banner--top">
                        <a class="progressive replace" data-href="https://media3.scdn.vn/img4/2021/03_01/uFa7gNSFnX7Ix40bBKRH.png" href="https://voso.vn/dac-san-vo-so-s3145375">
                            <img class="preview" src="https://media3.scdn.vn/img4/2021/03_01/uFa7gNSFnX7Ix40bBKRH.png" width="100%" />
                        </a>
                    </div>
                    <div class="b__banner--top">
                        <a class="progressive replace" data-href="https://media3.scdn.vn/img4/2021/03_01/gWx8HOQuCnC2sPkxeLHk.png" href="https://voso.vn/ocop">
                            <img class="preview" src="https://media3.scdn.vn/img4/2021/03_01/gWx8HOQuCnC2sPkxeLHk.png" width="100%" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        .section-category-list .b__box--title {
            padding: 10px ;
            background-color: #ffffff;
            margin-bottom: 0;
            border-bottom: 1px solid rgba(0,0,0,.05);
        }
        .section-category-list .m-items a:hover {
            text-decoration: unset;
            color: #0a0a0a;
        }
        .section-category-list .m-items a {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 123px;
            border-right: 1px solid rgba(0,0,0,.05);
            border-bottom: 1px solid rgba(0,0,0,.05);
        }

        .section-category-list .owl-item:last-child .m-items a{
            border-right: none;
        }
        .grid-list-wrapper{
            background-color: #ffffff;
        }

        .category-thumbnail {
            width: 80px;
            margin: 0 auto;
        }
        .category-name {
            text-align: center;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 2;
            overflow: hidden;
            display: -webkit-box;
            font-size: 13px;
        }
        
        .section-category-list {
            margin: 15px 0 20px 0;
        }
        .section-category-list .m-items a:hover {
            box-shadow: 0 2px 4px 0 rgba(0,0,0,.25);
            position: relative;
        }
        @media (max-width: 767px) {
            .section-category-list {
                margin: 0px 0 10px 0;
            }
            .category-thumbnail {
                width: 55px;
            }
            .grid-list-wrapper .owl-dots{
                display: none;
            }
            .section-category-list .m-items a {
                border-right: none;
                border-bottom: none;
                min-height: 100px;
            }
            .section-category-list .b__box--title {
                border-bottom: none;
            }
            .section-category-list .m-items a:hover {
                box-shadow: none !important;
            }
        }
    </style>
    <div class="section-category-list">
        <div class="container contaiver-v2">
            <div class="b__box--title">

                <div class="b__box-title">
                    <h3 class="b__box_h3">DANH MỤC</h3>
                </div>
                <div class="url-all">
                </div>
            </div>
            <div class="grid-list-wrapper">
                <div id="slideListCategory" class="owl-carousel">
                    @php
                        $count = count($categories);
                        $a = floor($count/2);
                    @endphp
                    @if($count!=1)
                        @for($i=0;$i<$a;$i++)
                        <div class="m-items">
                            <a href="{{$categories[$i*2]->url}}">
                                <div class="list-category">
                                    <div class="category-thumbnail progressive replace" data-href="{{asset('uploads/images/products/categories/'.$categories[$i*2]->avata)}}">
                                        <img class="preview" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" />
                                    </div>
                                    <div class="category-name">{{$categories[$i*2]->name}}</div>
                                </div>
                            </a>
                            
                            <a href="{{$categories[$i*2+1]->url}}">
                                <div class="list-category">
                                    <div class="category-thumbnail progressive replace" data-href="{{asset('uploads/images/products/categories/'.$categories[$i*2+1]->avata)}}">
                                        <img class="preview" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" />
                                        <div class="category-name">
                                        {{$categories[$i*2+1]->name}}</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        @endfor
                        @if($count%2==1)
                            <div class="m-items">
                                <a href="{{$categories[$count-1]->url}}">
                                    <div class="list-category">
                                        <div class="category-thumbnail progressive replace" data-href="{{asset('uploads/images/products/categories/'.$categories[$count-1]->avata)}}">
                                            <img class="preview" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" />
                                        </div>
                                        <div class="category-name">{{$categories[$count-1]->name}}</div>
                                    </div>
                                </a>
                                
                                
                            </div>
                        @endif
                    
                    @else
                        <div class="m-items">
                            <a href="{{$categories[$count-1]->url}}">
                                <div class="list-category">
                                    <div class="category-thumbnail progressive replace" data-href="{{asset('uploads/images/products/categories/'.$categories[$count-1]->avata)}}">
                                        <img class="preview" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" />
                                    </div>
                                    <div class="category-name">{{$categories[$count-1]->name}}</div>
                                </div>
                            </a>
                            
                            
                        </div>
                    @endif
                    
                    
            </div>
        </div>
    </div>
</div>
<div class="b__icon--gr" style="padding: 5px 0; margin-bottom: 10px; display: none;">
    <div class="container contaiver-v2">
        <div class="title" style="text-align: left !important;padding-left: 10px;">

            <h3 class="b__box_h3" style="padding: 5px 0 20px 0;font-weight: 500; color: #0871ce">Dịch vụ tiện ích</h3>
        </div>
        <div class="b__icon--gr_info">
            <ul>
                <li>
                    <a href="https://voso.vn/mall">
                        <div class="b__img--thumbs">
                            <img src="https://image.voso.vn/users/vosoimage/images/955ea586c860629e7933edfc0e616255?t%5B0%5D=maxSize%3Awidth%3D100%2Cheight%3D100&t%5B1%5D=compress%3Alevel%3D100&accessToken=fb81e6035d4c5039f6cdb1e6a3c75d63217c734596136c5e40c8e59172a09bca" onerror="this.src='/static/v2/images/logo.png'" />
                        </div>
                        <span>Voso Mall</span>
                    </a>
                </li>
                <li>
                    <a href="https://voso.vn/san-dac-san-c137">
                        <div class="b__img--thumbs">
                            <img src="https://image.voso.vn/users/vosoimage/images/26c1fe772461478b1fe158d31acb07bd?t%5B0%5D=maxSize%3Awidth%3D100%2Cheight%3D100&t%5B1%5D=compress%3Alevel%3D100&accessToken=2af281fbe66415a19ae249fd96b198d68e14842cf3c6a30f2e5d7dee16253677" onerror="this.src='/static/v2/images/logo.png'" />
                        </div>
                        <span>Đặc sản</span>
                    </a>
                </li>
                <li>
                    <a href="https://voso.vn/ocop">
                        <div class="b__img--thumbs">
                            <img src="https://image.voso.vn/users/vosoimage/images/cb3a8f77d4b08e49ab17ae2ebbb272c3?t%5B0%5D=maxSize%3Awidth%3D100%2Cheight%3D100&t%5B1%5D=compress%3Alevel%3D100&accessToken=0e4f65b58c5f76e6ecc1535986b2f3d7d511512eb5a72fee25c81cb35c0743c3" onerror="this.src='/static/v2/images/logo.png'" />
                        </div>
                        <span>Gian hàng OCOP</span>
                    </a>
                </li>
                <li>
                    <a href="https://vtbay.com.vn/">
                        <div class="b__img--thumbs">
                            <img src="https://image.voso.vn/users/vosoimage/images/8fe1097cdeb2fa96bafc10aa70ddda11?t%5B0%5D=maxSize%3Awidth%3D100%2Cheight%3D100&t%5B1%5D=compress%3Alevel%3D100&accessToken=fd320de24d51650d0dc1364cf3b931e2e49e8182e5dbdc67b2b34512fa6651e3" onerror="this.src='/static/v2/images/logo.png'" />
                        </div>
                        <span>Máy bay</span>
                    </a>
                </li>
                <li>
                    <a href="https://voso.vn/bach-hoa-online.html">
                        <div class="b__img--thumbs">
                            <img src="https://image.voso.vn/users/vosoimage/images/d859190c2e863e40cb8df5455a28a911?t%5B0%5D=maxSize%3Awidth%3D100%2Cheight%3D100&t%5B1%5D=compress%3Alevel%3D100&accessToken=58feed5256eafb598d33626ffa833b317e5459d1a85db361cf23e6954c048651" onerror="this.src='/static/v2/images/logo.png'" />
                        </div>
                        <span>Đi chợ</span>
                    </a>
                </li>
                <li>
                    <a href="https://voso.vn/gian-hang-viet">
                        <div class="b__img--thumbs">
                            <img src="https://image.voso.vn/users/vosoimage/images/46fa381726da7f6ed4277595ebf61e37?t%5B0%5D=maxSize%3Awidth%3D100%2Cheight%3D100&t%5B1%5D=compress%3Alevel%3D100&accessToken=a01452b8c355ec352709e29f0bde310b6fac22370baf54929dc6b1b72028a35d" onerror="this.src='/static/v2/images/logo.png'" />
                        </div>
                        <span>Gian hàng Việt</span>
                    </a>
                </li>
                <li>
                    <a href="http://staging.voso.vn/ban-do-dac-san#">
                        <div class="b__img--thumbs">
                            <img src="https://image.voso.vn/users/vosoimage/images/5d240c213659ffc6709cdccd5d04ccc5?t%5B0%5D=maxSize%3Awidth%3D100%2Cheight%3D100&t%5B1%5D=compress%3Alevel%3D100&accessToken=dfe7fda206cdaf441d36d2f0fb81d9ee7ad0969b9b18ad6a751d55e27aa98854" onerror="this.src='/static/v2/images/logo.png'" />
                        </div>
                        <span>Bản đồ đặc sản</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
</div>

<style>
    @media (max-width: 767px) {
        .b__banner--gr .b__banner--info {
            display: none;
        }
    }
</style>
<div class="b__banner--gr">
    <div class="container contaiver-v2">
        <div class="b__banner--info">









            <a data-href="https://media3.scdn.vn/img4/2021/03_09/U6xnR9eyr69B0zhU3Jxg.png" class="flex100 progressive replace">
                <img class="preview" src="https://media3.scdn.vn/img4/2021/03_09/U6xnR9eyr69B0zhU3Jxg.png" width="100%" />
            </a>
        </div>
    </div>
</div>
@if( Session::has('flash_message'))
    <div style="display: none;" class="note note-{{ Session::get('flash_level')}}">
        <p class="flash_message">{{ Session::get('flash_message')}}</p>
    </div>
@endif
@if( count($errors) > 0)
                
    @foreach($errors->all() as $error)
        <div style="display: none;" class="note note-danger">
            <p class="error">{{$error}}</p>
        </div>
    @endforeach
        
@endif
<div class="b__vosoMall--box_list">
    <div class="b__vosoMall">
        <div class="container">
            <div class="b__vosoMall--info">
                <div class="b__box--title">

                    <div class="b__box-title">
                        <h3 class="b__box_h3">Săn sale giờ vàng</h3>
                    </div>
                    <div class="url-all">
                        <a href="#" class="ml-auto">Xem tất cả <i class="fas fa-angle-double-right"></i></a>
                    </div>
                </div>
                <div class="b__vosoMall--content stretch">

                    <div class="b__vosoMall--banner b__vosoMall--pc">
                        <a href="https://voso.vn/dac-san-hai-duonghdg-s1120" class="progressive replace" data-href="https://cf.shopee.vn/file/f3ceffcefc97d5bbc42f29f982ed1888">
                            <img class="preview" src="https://cf.shopee.vn/file/f3ceffcefc97d5bbc42f29f982ed1888" width="100%" />
                        </a>
                    </div>
                    <div class="b__vosoMall--right ">


                        <div class="category-suggestions">
                        </div>

                        <div id="slideVosomall" class="owl-carousel">
                            @php
                                $count = count($best_sale);
                                $b = floor($count/2);
                            @endphp
                            @if($count == 0)
                            @elseif($count!=1)
                                @for($i=0;$i<$b;$i++)
                                    <div class="l-items">

                                        <div class="f-items">
                                            @php
                                                $item=$best_sale[$i*2];
                                            @endphp
                                            @include('front-end.layout.product-item')
                                        </div>

                                        <div class="f-items f-hidden">
                                            @php
                                                $item=$best_sale[$i*2+1];
                                            @endphp
                                            @include('front-end.layout.product-item')
                                            
                                        </div>
                                    </div>
                                @endfor
                                @if($count%2==1)
                                    <div class="l-items">

                                        <div class="f-items">
                                            @php
                                                $item=$best_sale[$count-1];
                                            @endphp
                                            @include('front-end.layout.product-item')
                                            
                                        </div>

                                        
                                    </div>
                                @endif

                            @else
                                <div class="l-items">

                                    <div class="f-items">
                                        @php
                                            $item=$best_sale[$count-1];
                                        @endphp
                                        @include('front-end.layout.product-item')
                                        
                                    </div>

                                    
                                </div>
                            @endif
                            
                        
                    
                    
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<div class="b__vosoMall">
    <div class="container">
        <div class="b__vosoMall--info">
            <div class="b__box--title">

                <div class="b__box-title">
                    <h3 class="b__box_h3">Sản phẩm mới</h3>
                </div>
                <div class="url-all">
                    <a href="https://voso.vn/mall" class="ml-auto">Xem tất cả <i class="fas fa-angle-double-right"></i></a>
                </div>
            </div>
            <div class="b__vosoMall--content stretch">

                <div class="b__vosoMall--banner b__vosoMall--pc">
                    <a href="https://voso.vn/flash-sale.html" class="progressive replace" data-href="https://cf.shopee.vn/file/1745822c753e7c0c1043fe990afd1d54">
                        <img class="preview" src="https://cf.shopee.vn/file/1745822c753e7c0c1043fe990afd1d54" width="100%" />
                    </a>
                </div>
                <div class="b__vosoMall--right ">


                    <div class="category-suggestions">
                    </div>

                    <div id="slideVosomall" class="owl-carousel">
                        @php
                            $count = count($product_new);
                            $b = floor($count/2);
                        @endphp
                        @if($count == 0)
                        @elseif($count!=1)
                            @for($i=0;$i<$b;$i++)
                                <div class="l-items">

                                    <div class="f-items">
                                        @php
                                            $item=$product_new[$i*2];
                                        @endphp
                                        @include('front-end.layout.product-item')
                                    </div>

                                    <div class="f-items f-hidden">
                                        @php
                                            $item=$product_new[$i*2+1];
                                        @endphp
                                        @include('front-end.layout.product-item')
                                        
                                    </div>
                                </div>
                            @endfor
                            @if($count%2==1)
                                <div class="l-items">

                                    <div class="f-items">
                                        @php
                                            $item=$product_new[$count-1];
                                        @endphp
                                        @include('front-end.layout.product-item')
                                        
                                    </div>

                                    
                                </div>
                            @endif

                        @else
                            <div class="l-items">

                                <div class="f-items">
                                    @php
                                        $item=$product_new[$count-1];
                                    @endphp
                                    @include('front-end.layout.product-item')
                                    
                                </div>

                                
                            </div>
                        @endif
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<div class="b__vosoMall">
    <div class="container">
        <div class="b__vosoMall--info">
            <div class="b__box--title">

                <div class="b__box-title">
                    <h3 class="b__box_h3">Sản phẩm nổi bật</h3>
                </div>
                <div class="url-all">
                    <a href="https://voso.vn/tim-kiem-dac-san?qqq=%C4%91%E1%BA%B7c%20s%E1%BA%A3n" class="ml-auto">Xem tất cả <i class="fas fa-angle-double-right"></i></a>
                </div>
            </div>
            <div class="b__vosoMall--content stretch">

                <div class="b__vosoMall--banner b__vosoMall--pc">
                    <a href="https://voso.vn/combo-5kg-cam-cao-phong-dac-san-hoa-binh-loai-1-p12708.html" class="progressive replace" data-href="https://cf.shopee.vn/file/159fda3f3b1b99794a5e341cbfd9a33e">
                        <img class="preview" src="https://cf.shopee.vn/file/159fda3f3b1b99794a5e341cbfd9a33e" width="100%" />
                    </a>
                </div>
                <div class="b__vosoMall--right ">


                    <div class="category-suggestions">
                        <a class="categories__item " href="https://voso.vn/dac-san-mien-bac-c138">Đặc sản miền Bắc</a>
                        <a class="categories__item " href="https://voso.vn/dac-san-mien-trung-c139">Đặc sản miền Trung</a>
                        <a class="categories__item " href="https://voso.vn/dac-san-mien-tay-c140">Đặc sản miền Tây</a>
                        <a class="categories__item " href="https://voso.vn/dac-san-nam-bo-c141">Đặc sản Nam Bộ</a>
                        <a class="categories__item " href="https://voso.vn/dac-san-tay-nguyen-c142">Đặc sản Tây Nguyên</a>
                    </div>

                    <div id="slideVosomall" class="owl-carousel">
                        @php
                            $count = count($product_hot);
                            $b = floor($count/2);
                        @endphp
                        @if($count == 0)
                        @elseif($count!=1)
                            @for($i=0;$i<$b;$i++)
                                <div class="l-items">

                                    <div class="f-items">
                                        @php
                                            $item=$product_hot[$i*2];
                                        @endphp
                                        @include('front-end.layout.product-item')
                                    </div>

                                    <div class="f-items f-hidden">
                                        @php
                                            $item=$product_hot[$i*2+1];
                                        @endphp
                                        @include('front-end.layout.product-item')
                                        
                                    </div>
                                </div>
                            @endfor
                            @if($count%2==1)
                                <div class="l-items">

                                    <div class="f-items">
                                        @php
                                            $item=$product_hot[$count-1];
                                        @endphp
                                        @include('front-end.layout.product-item')
                                        
                                    </div>

                                    
                                </div>
                            @endif

                        @else
                            <div class="l-items">

                                <div class="f-items">
                                    @php
                                        $item=$product_hot[$count-1];
                                    @endphp
                                    @include('front-end.layout.product-item')
                                    
                                </div>

                                
                            </div>
                        @endif
                    </div>
        </div>
    </div>
</div>
</div>
</div>
<div class="b__vosoMall">
    <div class="container">
        <div class="b__vosoMall--info">
            <div class="b__box--title">

                <div class="b__box-title">
                    <h3 class="b__box_h3">Sản phẩm bán chạy</h3>
                </div>
                <div class="url-all">
                    <a href="https://voso.vn/cham-soc-da-c65" class="ml-auto">Xem tất cả <i class="fas fa-angle-double-right"></i></a>
                </div>
            </div>
            <div class="b__vosoMall--content stretch">

                <div class="b__vosoMall--banner b__vosoMall--pc">
                    <a href="https://voso.vn/vs-beauty-s3157181" class="progressive replace" data-href="https://cf.shopee.vn/file/8b056b6b34d3bdd7124792f33f20021d">
                        <img class="preview" src="https://cf.shopee.vn/file/8b056b6b34d3bdd7124792f33f20021d" width="100%" />
                    </a>
                </div>
                <div class="b__vosoMall--right ">


                    <div class="category-suggestions">
                        <a class="categories__item " href="https://voso.vn/suc-khoe-lam-dep-c63">Sức khỏe - Làm đẹp</a>
                        <a class="categories__item " href="https://voso.vn/trang-diem-c64">Trang điểm</a>
                    </div>

                    <div id="slideVosomall" class="owl-carousel">
                        <div class="l-items">

                            <div class="f-items">
                                <div class="f-product-item__thumb">
                                    <a href="https://voso.vn/sap-duong-moi-cho-nu-lip-balm-for-women-p711236.html">
                                        <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/f4d06bcb5fd739b49b63845e455766a2?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=1c2d01465b271a2dc7ae9ec148397aeb06672a4ef423e58fa5bc3db6f0a45567">
                                            <img class="preview" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                                        </div>
                                    </a>
                                </div>
                                <div class="f-items_description f-items_show-name">
                                    <div class="f-items_name">
                                        <div class="tag-mall">
                                            
                                        </div>
                                        <a href="https://voso.vn/sap-duong-moi-cho-nu-lip-balm-for-women-p711236.html">
                                        Sáp dưỡng môi cho nữ - Lip Balm For Women </a>
                                    </div>
                                    <div class="f-items__ls main-rating b-sold-rating">
                                        <span class="jstars" data-value="5"></span>
                                    </div>
                                    <div class="b-price">
                                        <div class="b__price">
                                            <strong>150,000<sup>₫</sup></strong>
                                        </div>
                                        <div class="listed-price">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="f-items f-hidden">
                                <div class="f-product-item__thumb">
                                    <a href="https://voso.vn/dau-mu-u-ngan-mun-mau-moi-p680437.html">
                                        <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/202973a260d468d757fbc98ac017fb4a?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=da2f37f30f40c200b348cc24e8659c51a8fb303c424c1099e033ad3ebd481d1f">
                                            <img class="preview thumbnail-product" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                                        </div>
                                    </a>
                                </div>
                                <div class="f-items_description f-items_show-name">
                                    <div class="f-items_name">
                                        <div class="tag-mall">
                                            
                                        </div>
                                        <a href="https://voso.vn/dau-mu-u-ngan-mun-mau-moi-p680437.html">
                                        Dầu mù u ngăn mụn mẫu mới </a>
                                    </div>
                                    <div class="f-items__ls main-rating b-sold-rating">
                                        <span class="jstars" data-value="5"></span>
                                    </div>
                                    <div class="b-price">
                                        <div class="b__price">
                                            <strong>95,000<sup>₫</sup></strong>
                                        </div>
                                        <div class="listed-price">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="l-items">

                            <div class="f-items">
                                <div class="f-product-item__thumb">
                                    <a href="https://voso.vn/muoi-tam-tinh-dau-sa-chanh-tui-100g-p680429.html">
                                        <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/873d89f23201c7890d8c76ea74ce33e3?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=3a0242900415315f2fc4d30b774daac7b3da73449fdce5b1a0eb8d319586ec3e">
                                            <img class="preview" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                                        </div>
                                    </a>
                                </div>
                                <div class="f-items_description f-items_show-name">
                                    <div class="f-items_name">
                                        <div class="tag-mall">
                                            
                                        </div>
                                        <a href="https://voso.vn/muoi-tam-tinh-dau-sa-chanh-tui-100g-p680429.html">
                                        Muối tắm tinh dầu sả chanh (Túi 100g) </a>
                                    </div>
                                    <div class="f-items__ls main-rating b-sold-rating">
                                        <span class="jstars" data-value="5"></span>
                                    </div>
                                    <div class="b-price">
                                        <div class="b__price">
                                            <strong>90,000<sup>₫</sup></strong>
                                        </div>
                                        <div class="listed-price">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="f-items f-hidden">
                                <div class="f-product-item__thumb">
                                    <a href="https://voso.vn/da-thom-khuech-tan-ngoc-lan-hinh-chua-p678669.html">
                                        <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/600c1ab923068010cca126433e7c14ed?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=5ea0a850eb4972b41e5dbd7ad181a119d555cd1289bd9d5722f1ec703cef5388">
                                            <img class="preview thumbnail-product" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                                        </div>
                                    </a>
                                </div>
                                <div class="f-items_description f-items_show-name">
                                    <div class="f-items_name">
                                        <div class="tag-mall">
                                            
                                        </div>
                                        <a href="https://voso.vn/da-thom-khuech-tan-ngoc-lan-hinh-chua-p678669.html">
                                        Đá thơm khuếch tán ngọc lan Hình Chúa </a>
                                    </div>
                                    <div class="f-items__ls main-rating b-sold-rating">
                                        <span class="jstars" data-value="5"></span>
                                    </div>
                                    <div class="b-price">
                                        <div class="b__price">
                                            <strong>130,000<sup>₫</sup></strong>
                                        </div>
                                        <div class="listed-price">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="l-items">

                            <div class="f-items">
                                <div class="f-product-item__thumb">
                                    <a href="https://voso.vn/bot-tra-xanh-dap-mat-green-tea-powder-p678509.html">
                                        <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/2fb676d27828cbb9cb0dd20981c163e6?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=d924eacc37053cea2179c780a898e49e7424798fc63168c0957bff957b9bda17">
                                            <img class="preview" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                                        </div>
                                    </a>
                                </div>
                                <div class="f-items_description f-items_show-name">
                                    <div class="f-items_name">
                                        <div class="tag-mall">
                                            
                                        </div>
                                        <a href="https://voso.vn/bot-tra-xanh-dap-mat-green-tea-powder-p678509.html">
                                        Bột trà xanh đắp mặt - Green Tea Powder </a>
                                    </div>
                                    <div class="f-items__ls main-rating b-sold-rating">
                                        <span class="jstars" data-value="5"></span>
                                    </div>
                                    <div class="b-price">
                                        <div class="b__price">
                                           <strong>75,000<sup>₫</sup></strong>
                                       </div>
                                       <div class="listed-price">
                                       </div>
                                   </div>
                               </div>
                           </div>

                           <div class="f-items f-hidden">
                            <div class="f-product-item__thumb">
                                <a href="https://voso.vn/tinh-bot-nghe-huu-co-turmeric-starch-p678477.html">
                                    <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/4bc3afa45d9739918276762599c8ab03?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=e131dddc11a35b6ccd1e09d0e15defd03d9b59203fe1195870140f0e184f63cf">
                                        <img class="preview thumbnail-product" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                                    </div>
                                </a>
                            </div>
                            <div class="f-items_description f-items_show-name">
                                <div class="f-items_name">
                                    <div class="tag-mall">
                                        
                                    </div>
                                    <a href="https://voso.vn/tinh-bot-nghe-huu-co-turmeric-starch-p678477.html">
                                    Tinh bột nghệ hữu cơ - Turmeric starch </a>
                                </div>
                                <div class="f-items__ls main-rating b-sold-rating">
                                    <span class="jstars" data-value="5"></span>
                                </div>
                                <div class="b-price">
                                    <div class="b__price">
                                        <strong>130,000<sup>₫</sup></strong>
                                    </div>
                                    <div class="listed-price">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="l-items">

                        <div class="f-items">
                            <div class="f-product-item__thumb">
                                <a href="https://voso.vn/combo-tam-trang-toan-than-truesky-huong-nuoc-hoa-lavender-gom-1-chai-u-trang-100ml-1-chai-duong-trang-lavender-100ml-p681359.html">
                                    <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/d8d2025406cbb280ee7f87ff260262f5?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=d5d2708867e8526d3ad564265c26dea4fab8f688b10ae6c8f5f4d0d38ff00732">
                                        <img class="preview" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                                    </div>
                                    <div class='product-item-price product-item-price-mall'>
                                        <span class="product-price">-39%</span>
                                    </div>
                                </a>
                            </div>
                            <div class="f-items_description f-items_show-name">
                                <div class="f-items_name">
                                    <div class="tag-mall">
                                        
                                    </div>
                                    <a href="https://voso.vn/combo-tam-trang-toan-than-truesky-huong-nuoc-hoa-lavender-gom-1-chai-u-trang-100ml-1-chai-duong-trang-lavender-100ml-p681359.html">
                                    Combo tắm trắng toàn thân Truesky hương nước hoa Lavender gồm 1 chai ủ trắng 100ml &amp; 1 chai dưỡng trắng Lavender 100ml </a>
                                </div>
                                <div class="f-items__ls main-rating b-sold-rating">
                                    <span class="jstars" data-value="5"></span>
                                </div>
                                <div class="b-price">
                                    <div class="b__price">
                                        <strong>198,000<sup>₫</sup></strong>
                                    </div>
                                    <div class="listed-price">
                                        320,000<sup>₫</sup>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="f-items f-hidden">
                            <div class="f-product-item__thumb">
                                <a href="https://voso.vn/kem-tan-mo-bung-cap-toc-chiet-xuat-que-gung-truesky-premium-dang-voi-nhan-tiet-kiem-200ml-slimming-cream-p681109.html">
                                    <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/1dc7002c74f9e6e98ac8853ef97a2ab8?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=bf5a03bd660f300b16add458a9f4d0528ced295bc2fbdf0b28efaf110e13295e">
                                        <img class="preview thumbnail-product" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                                    </div>
                                    <div class='product-item-price product-item-price-mall'>
                                        <span class="product-price">-36%</span>
                                    </div>
                                </a>
                            </div>
                            <div class="f-items_description f-items_show-name">
                                <div class="f-items_name">
                                    <div class="tag-mall">
                                        
                                    </div>
                                    <a href="https://voso.vn/kem-tan-mo-bung-cap-toc-chiet-xuat-que-gung-truesky-premium-dang-voi-nhan-tiet-kiem-200ml-slimming-cream-p681109.html">
                                    Kem tan mỡ bụng cấp tốc chiết xuất quế gừng Truesky Premium dạng vòi nhấn tiết kiệm 200ml - Slimming Cream </a>
                                </div>
                                <div class="f-items__ls main-rating b-sold-rating">
                                    <span class="jstars" data-value="5"></span>
                                </div>
                                <div class="b-price">
                                    <div class="b__price">
                                        <strong>225,000<sup>₫</sup></strong>
                                    </div>
                                    <div class="listed-price">
                                        350,000<sup>₫</sup>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="l-items">

                        <div class="f-items">
                            <div class="f-product-item__thumb">
                                <a href="https://voso.vn/serum-tri-mun-trang-da-truesky-premium-chiet-xuat-tram-tra-thien-nhien-20ml-acne-serum-p680641.html">
                                    <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/140cf7c99558269e1265c3fb33abeb99?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=866d8fcbb13cc3cc7f4faeab67ac3008710d8f533a375b0541cb61115b6f6de9">
                                        <img class="preview" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                                    </div>
                                    <div class='product-item-price product-item-price-mall'>
                                        <span class="product-price">-39%</span>
                                    </div>
                                </a>
                            </div>
                            <div class="f-items_description f-items_show-name">
                                <div class="f-items_name">
                                    <div class="tag-mall">
                                        
                                    </div>
                                    <a href="https://voso.vn/serum-tri-mun-trang-da-truesky-premium-chiet-xuat-tram-tra-thien-nhien-20ml-acne-serum-p680641.html">
                                    Serum trị mụn trắng da Truesky Premium chiết xuất tràm trà thiên nhiên 20ml - Acne Serum </a>
                                </div>
                                <div class="f-items__ls main-rating b-sold-rating">
                                    <span class="jstars" data-value="5"></span>
                                    <label class="ml-auto">4 đã bán</label>
                                </div>
                                <div class="b-price">
                                    <div class="b__price">
                                        <strong>198,000<sup>₫</sup></strong>
                                    </div>
                                    <div class="listed-price">
                                        320,000<sup>₫</sup>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="f-items f-hidden">
                            <div class="f-product-item__thumb">
                                <a href="https://voso.vn/sua-rua-mat-tao-bot-trang-da-truesky-chiet-xuat-nha-dam-60ml-arbutin-cleanser-p669203.html">
                                    <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/fc812303dca3c99dd006f6958a1c0cfa?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=b0141b0be54857bcd462486d8ce96545f9488b2a961cbf868acf006f4f4ac48c">
                                        <img class="preview thumbnail-product" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                                    </div>
                                    <div class='product-item-price product-item-price-mall'>
                                        <span class="product-price">-32%</span>
                                    </div>
                                </a>
                            </div>
                            <div class="f-items_description f-items_show-name">
                                <div class="f-items_name">
                                    <div class="tag-mall">
                                       
                                   </div>
                                   <a href="https://voso.vn/sua-rua-mat-tao-bot-trang-da-truesky-chiet-xuat-nha-dam-60ml-arbutin-cleanser-p669203.html">
                                   Sữa rửa mặt tạo bọt trắng da Truesky chiết xuất nha đam 60ml - Arbutin Cleanser </a>
                               </div>
                               <div class="f-items__ls main-rating b-sold-rating">
                                <span class="jstars" data-value="5"></span>
                            </div>
                            <div class="b-price">
                                <div class="b__price">
                                    <strong>68,000<sup>₫</sup></strong>
                                </div>
                                <div class="listed-price">
                                    100,000<sup>₫</sup>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="l-items">

                    <div class="f-items">
                        <div class="f-product-item__thumb">
                            <a href="https://voso.vn/sua-rua-mat-tri-mun-than-hoat-tinh-truesky-dang-tao-bot-60ml-ance-cleanser-p668801.html">
                                <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/8572eff1c49861a286ce1e06bc4e3751?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=34feca2ee767c7aa96d004d96e166539e92ff93aad3e857cb08ec831c70ad073">
                                    <img class="preview" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                                </div>
                                <div class='product-item-price product-item-price-mall'>
                                    <span class="product-price">-29%</span>
                                </div>
                            </a>
                        </div>
                        <div class="f-items_description f-items_show-name">
                            <div class="f-items_name">
                                <div class="tag-mall">
                                    
                                </div>
                                <a href="https://voso.vn/sua-rua-mat-tri-mun-than-hoat-tinh-truesky-dang-tao-bot-60ml-ance-cleanser-p668801.html">
                                Sữa rửa mặt trị mụn than hoạt tính Truesky dạng tạo bọt 60ml - Ance Cleanser </a>
                            </div>
                            <div class="f-items__ls main-rating b-sold-rating">
                                <span class="jstars" data-value="5"></span>
                            </div>
                            <div class="b-price">
                                <div class="b__price">
                                    <strong>86,000<sup>₫</sup></strong>
                                </div>
                                <div class="listed-price">
                                    120,000<sup>₫</sup>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="f-items f-hidden">
                        <div class="f-product-item__thumb">
                            <a href="https://voso.vn/spirularin-nagel-serum-tri-nam-phuc-hoi-mong-hu-ton-p678695.html">
                                <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/72183bdff9cfb807bf153252aab35dcd?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=efd27d116840812fa94f30e767e2cf7661fedbb0ab521eed5abebcbde47e4c0e">
                                    <img class="preview thumbnail-product" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                                    <span class="freeship"></span>
                                </div>
                                <div class='product-item-price product-item-price-mall'>
                                    <span class="product-price">-4%</span>
                                </div>
                            </a>
                        </div>
                        <div class="f-items_description f-items_show-name">
                            <div class="f-items_name">
                                <div class="tag-mall">
                                    
                                </div>
                                <a href="https://voso.vn/spirularin-nagel-serum-tri-nam-phuc-hoi-mong-hu-ton-p678695.html">
                                Spirularin® Nagel Serum Trị nấm &amp; phục hồi móng hư tổn </a>
                            </div>
                            <div class="f-items__ls main-rating b-sold-rating">
                                <span class="jstars" data-value="5"></span>
                            </div>
                            <div class="b-price">
                                <div class="b__price">
                                    <strong>805,000<sup>₫</sup></strong>
                                </div>
                                <div class="listed-price">
                                    830,000<sup>₫</sup>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="l-items">

                    <div class="f-items">
                        <div class="f-product-item__thumb">
                            <a href="https://voso.vn/kem-tri-mun-coc-mun-com-sui-mao-ga-spirularin-vs-cream-chlb-duc-p678683.html">
                                <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/8a36fdade05677f07a5859420b61769a?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=b141e25d64ff3ed9f42034d46c7bd7d050dbc9c7cfc7cf3f683063e5cf77246b">
                                    <img class="preview" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                                    <span class="freeship"></span>
                                </div>
                                <div class='product-item-price product-item-price-mall'>
                                    <span class="product-price">-2%</span>
                                </div>
                            </a>
                        </div>
                        <div class="f-items_description f-items_show-name">
                            <div class="f-items_name">
                               <div class="tag-mall">
                                
                            </div>
                            <a href="https://voso.vn/kem-tri-mun-coc-mun-com-sui-mao-ga-spirularin-vs-cream-chlb-duc-p678683.html">
                            Kem trị mụn cóc, mụn cơm, sùi mào gà Spirularin VS Cream - CHLB Đức </a>
                        </div>
                        <div class="f-items__ls main-rating b-sold-rating">
                            <span class="jstars" data-value="5"></span>
                        </div>
                        <div class="b-price">
                            <div class="b__price">
                                <strong>800,000<sup>₫</sup></strong>
                            </div>
                            <div class="listed-price">
                                810,000<sup>₫</sup>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="f-items f-hidden">
                    <div class="f-product-item__thumb">
                        <a href="https://voso.vn/kem-duong-moi-sau-xam-chong-mun-rop-herpes-spirularin-hs-cream-chlb-duc-p678569.html">
                            <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/3f5622360c3be5720c75da34d823aa1f?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=b452ffadb868012f6bf140bd4ed2ff34507c0dcb194dc3bfd2d9cbaec9116816">
                                <img class="preview thumbnail-product" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                                <span class="freeship"></span>
                            </div>
                            <div class='product-item-price product-item-price-mall'>
                                <span class="product-price">-4%</span>
                            </div>
                        </a>
                    </div>
                    <div class="f-items_description f-items_show-name">
                        <div class="f-items_name">
                            <div class="tag-mall">
                                
                            </div>
                            <a href="https://voso.vn/kem-duong-moi-sau-xam-chong-mun-rop-herpes-spirularin-hs-cream-chlb-duc-p678569.html">
                            Kem dưỡng môi sau xăm chống mụn rộp herpes Spirularin HS Cream - CHLB Đức </a>
                        </div>
                        <div class="f-items__ls main-rating b-sold-rating">
                            <span class="jstars" data-value="5"></span>
                        </div>
                        <div class="b-price">
                            <div class="b__price">
                                <strong>790,000<sup>₫</sup></strong>
                            </div>
                            <div class="listed-price">
                                815,000<sup>₫</sup>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="l-items">

                <div class="f-items">
                    <div class="f-product-item__thumb">
                        <a href="https://voso.vn/kem-tri-nam-va-tai-tao-da-skinmd-pure-whitenol-cream-p655330.html">
                            <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/8bc32d6261e04aef5a3f7d8a32d56296?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=890338230a12f12bf715f3c21560f2f7cf08b9cac70cc10daf99248049004b33">
                                <img class="preview" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                                <span class="freeship"></span>
                            </div>
                            <div class='product-item-price product-item-price-mall'>
                                <span class="product-price">-8%</span>
                            </div>
                        </a>
                    </div>
                    <div class="f-items_description f-items_show-name">
                        <div class="f-items_name">
                            <div class="tag-mall">
                                
                            </div>
                            <a href="https://voso.vn/kem-tri-nam-va-tai-tao-da-skinmd-pure-whitenol-cream-p655330.html">
                            Kem trị nám và tái tạo da SkinMD Pure Whitenol Cream </a>
                        </div>
                        <div class="f-items__ls main-rating b-sold-rating">
                            <span class="jstars" data-value="5"></span>
                        </div>
                        <div class="b-price">
                            <div class="b__price">
                                <strong>900,000<sup>₫</sup></strong>
                            </div>
                            <div class="listed-price">
                                968,000<sup>₫</sup>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="f-items f-hidden">
                    <div class="f-product-item__thumb">
                        <a href="https://voso.vn/dau-goi-tri-lieu-cho-da-dau-viem-ngua-skinicer-sedative-shampoo-100ml-duc-p666457.html">
                            <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/0181d7334e895b71c5abeba5278b1852?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=060f6094b4782b5cfdee673e816a3ac6ffa66e5ebc196a1a14912c634c2cb4b3">
                                <img class="preview thumbnail-product" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                                <span class="freeship"></span>
                            </div>
                            <div class='product-item-price product-item-price-mall'>
                                <span class="product-price">-9%</span>
                            </div>
                        </a>
                    </div>
                    <div class="f-items_description f-items_show-name">
                        <div class="f-items_name">
                            <div class="tag-mall">
                                
                            </div>
                            <a href="https://voso.vn/dau-goi-tri-lieu-cho-da-dau-viem-ngua-skinicer-sedative-shampoo-100ml-duc-p666457.html">
                            Dầu Gội Trị Liệu Cho Da Đầu Viêm Ngứa Skinicer® Sedative Shampoo 100ml - Đức </a>
                        </div>
                        <div class="f-items__ls main-rating b-sold-rating">
                            <span class="jstars" data-value="5"></span>
                        </div>
                        <div class="b-price">
                            <div class="b__price">
                                <strong>600,000<sup>₫</sup></strong>
                            </div>
                            <div class="listed-price">
                                654,000<sup>₫</sup>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="l-items">

                <div class="f-items">
                    <div class="f-product-item__thumb">
                        <a href="https://voso.vn/sua-rua-mat-trang-da-ngua-mun-chiet-xuat-dau-ngua-nagano-110ml-p506284.html">
                            <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/206f338699d9d61a3b3e72a5f9fa2785?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=58167d0114110d3f7bfe131e3c36814694dfdea388b08837f872450063ebaa1c">
                                <img class="preview" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                            </div>
                            <div class='product-item-price product-item-price-mall'>
                                <span class="product-price">-11%</span>
                            </div>
                        </a>
                    </div>
                    <div class="f-items_description f-items_show-name">
                        <div class="f-items_name">
                            <div class="tag-mall">
                                
                            </div>
                            <a href="https://voso.vn/sua-rua-mat-trang-da-ngua-mun-chiet-xuat-dau-ngua-nagano-110ml-p506284.html">
                            SỮA RỬA MẶT TRẮNG DA, NGỪA MỤN CHIẾT XUẤT DẦU NGỰA NAGANO - 110ml </a>
                        </div>
                        <div class="f-items__ls main-rating b-sold-rating">
                            <span class="jstars" data-value="5"></span>
                        </div>
                        <div class="b-price">
                            <div class="b__price">
                                <strong>495,000<sup>₫</sup></strong>
                            </div>
                            <div class="listed-price">
                                555,000<sup>₫</sup>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="f-items f-hidden">
                    <div class="f-product-item__thumb">
                        <a href="https://voso.vn/kem-tre-hoa-da-vung-mat-voi-vitamin-e-nagano-15g-p505939.html">
                            <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/7ddbcc40f4feb8a0e967be211d11ddc1?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=0b1a17f5dd13f019de5c8798ce7b7284d97130f488c3837fd857a2d8b2ffaf27">
                                <img class="preview thumbnail-product" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                            </div>
                            <div class='product-item-price product-item-price-mall'>
                                <span class="product-price">-7%</span>
                            </div>
                        </a>
                    </div>
                    <div class="f-items_description f-items_show-name">
                        <div class="f-items_name">
                            <div class="tag-mall">
                                
                            </div>
                            <a href="https://voso.vn/kem-tre-hoa-da-vung-mat-voi-vitamin-e-nagano-15g-p505939.html">
                            KEM TRẺ HÓA DA VÙNG MẮT VỚI VITAMIN E NAGANO - 15g </a>
                        </div>
                        <div class="f-items__ls main-rating b-sold-rating">
                            <span class="jstars" data-value="5"></span>
                        </div>
                        <div class="b-price">
                           <div class="b__price">
                            <strong>490,000<sup>₫</sup></strong>
                        </div>
                        <div class="listed-price">
                            525,000<sup>₫</sup>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="l-items">

            <div class="f-items">
                <div class="f-product-item__thumb">
                    <a href="https://voso.vn/dau-xa-toc-chiet-xuat-dau-ngua-250ml-p505909.html">
                        <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/53074b6878066ffeb028b1523b5104a8?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=03ca193687977abaee1ca0bee889707008c9aa13c9e947fc2d36cd21dddc162c">
                            <img class="preview" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                        </div>
                        <div class='product-item-price product-item-price-mall'>
                            <span class="product-price">-18%</span>
                        </div>
                    </a>
                </div>
                <div class="f-items_description f-items_show-name">
                    <div class="f-items_name">
                        <div class="tag-mall">
                            
                        </div>
                        <a href="https://voso.vn/dau-xa-toc-chiet-xuat-dau-ngua-250ml-p505909.html">
                        DẦU XẢ TÓC CHIẾT XUẤT DẦU NGỰA - 250ml </a>
                    </div>
                    <div class="f-items__ls main-rating b-sold-rating">
                        <span class="jstars" data-value="5"></span>
                    </div>
                    <div class="b-price">
                        <div class="b__price">
                            <strong>365,000<sup>₫</sup></strong>
                        </div>
                        <div class="listed-price">
                            440,000<sup>₫</sup>
                        </div>
                    </div>
                </div>
            </div>

            <div class="f-items f-hidden">
                <div class="f-product-item__thumb">
                    <a href="https://voso.vn/dau-goi-phuc-hoi-toc-chiet-xuat-dau-ngua-250ml-p505897.html">
                        <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/5e9487ddf425608753a08b0656d27a66?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=fafac931690a6453923b0efadd81adb4b54645f088234c3f4e9384e6ae5a5d06">
                            <img class="preview thumbnail-product" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                        </div>
                        <div class='product-item-price product-item-price-mall'>
                            <span class="product-price">-15%</span>
                        </div>
                    </a>
                </div>
                <div class="f-items_description f-items_show-name">
                    <div class="f-items_name">
                        <div class="tag-mall">
                            
                        </div>
                        <a href="https://voso.vn/dau-goi-phuc-hoi-toc-chiet-xuat-dau-ngua-250ml-p505897.html">
                        DẦU GỘI PHỤC HỒI TÓC CHIẾT XUẤT DẦU NGỰA - 250ml </a>
                    </div>
                    <div class="f-items__ls main-rating b-sold-rating">
                        <span class="jstars" data-value="5"></span>
                    </div>
                    <div class="b-price">
                        <div class="b__price">
                            <strong>365,000<sup>₫</sup></strong>
                        </div>
                        <div class="listed-price">
                            425,000<sup>₫</sup>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="l-items">

            <div class="f-items">
                <div class="f-product-item__thumb">
                    <a href="https://voso.vn/phan-nen-nagano-10g-p496921.html">
                        <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/00b64011fa76bc47699036142ae8b265?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=64d930966e61d7bf57c8fe12f74e2ddd988033b9d1b1dcfbbfabebfdf0a6783d">
                            <img class="preview" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                        </div>
                        <div class='product-item-price product-item-price-mall'>
                            <span class="product-price">-15%</span>
                        </div>
                    </a>
                </div>
                <div class="f-items_description f-items_show-name">
                    <div class="f-items_name">
                        <div class="tag-mall">
                            
                        </div>
                        <a href="https://voso.vn/phan-nen-nagano-10g-p496921.html">
                        PHẤN NỀN NAGANO - 10g </a>
                    </div>
                    <div class="f-items__ls main-rating b-sold-rating">
                        <span class="jstars" data-value="5"></span>
                    </div>
                    <div class="b-price">
                        <div class="b__price">
                            <strong>485,000<sup>₫</sup></strong>
                        </div>
                        <div class="listed-price">
                            570,000<sup>₫</sup>
                        </div>
                    </div>
                </div>
            </div>

            <div class="f-items f-hidden">
                <div class="f-product-item__thumb">
                    <a href="https://voso.vn/son-li-collagen-nagano-29g-p505795.html">
                        <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/c199fc8a35dba53509f6dbdedd5a9120?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=8613a75cca3bb77b3e106d93a3001dd8e20ee6d3680889c98ff0b9948fa50e7a">
                            <img class="preview thumbnail-product" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                        </div>
                        <div class='product-item-price product-item-price-mall'>
                            <span class="product-price">-22%</span>
                        </div>
                    </a>
                </div>
                <div class="f-items_description f-items_show-name">
                    <div class="f-items_name">
                        <div class="tag-mall">
                            
                        </div>
                        <a href="https://voso.vn/son-li-collagen-nagano-29g-p505795.html">
                        SON LÌ COLLAGEN NAGANO 2,9g </a>
                    </div>
                    <div class="f-items__ls main-rating b-sold-rating">
                        <span class="jstars" data-value="5"></span>
                    </div>
                    <div class="b-price">
                        <div class="b__price">
                            <strong>480,000<sup>₫</sup></strong>
                        </div>
                        <div class="listed-price">
                            610,000<sup>₫</sup>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="l-items">

            <div class="f-items">
                <div class="f-product-item__thumb">
                    <a href="https://voso.vn/phan-nuoc-kiem-soat-nhon-sum37-air-rising-tf-glow-cover-metal-cushion-spf50pa-15g-tang-them-loi-15g-p714248.html">
                        <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/60f91bbf4657349aa024d69f039b1fae?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=501a6fc991da1f9b052d0a759ab7a5cb282ef9f286791757c0c326f6b0e5d36f">
                            <img class="preview" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                        </div>
                        <div class='product-item-price product-item-price-mall'>
                            <span class="product-price">-10%</span>
                        </div>
                    </a>
                </div>
                <div class="f-items_description f-items_show-name">
                    <div class="f-items_name">
                        <div class="tag-mall">
                            
                        </div>
                        <a href="https://voso.vn/phan-nuoc-kiem-soat-nhon-sum37-air-rising-tf-glow-cover-metal-cushion-spf50pa-15g-tang-them-loi-15g-p714248.html">
                        Phấn nước kiểm soát nhờn Su:m37 Air Rising TF Glow Cover Metal Cushion SPF50+/PA+++ 15g (tặng thêm lõi 15g) </a>
                    </div>
                    <div class="f-items__ls main-rating b-sold-rating">
                        <span class="jstars" data-value="0"></span>
                    </div>
                    <div class="b-price">
                        <div class="b__price">
                            <strong>1,080,000<sup>₫</sup></strong>
                        </div>
                        <div class="listed-price">
                            1,200,000<sup>₫</sup>
                        </div>
                    </div>
                </div>
            </div>

            <div class="f-items f-hidden">
                <div class="f-product-item__thumb">
                    <a href="https://voso.vn/dau-tay-trang-duy-tri-do-am-sum37-skin-saver-essential-cleansing-oil-250ml-p714235.html">
                        <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/80fa634b1119b6d08d4ca24c930ef7d8?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=2d751cb0b5ebae4e40d7366c946b4d787579361dea40ec5b13f3504fab83fc4e">
                            <img class="preview thumbnail-product" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                        </div>
                    </a>
                </div>
                <div class="f-items_description f-items_show-name">
                    <div class="f-items_name">
                        <div class="tag-mall">
                            
                        </div>
                        <a href="https://voso.vn/dau-tay-trang-duy-tri-do-am-sum37-skin-saver-essential-cleansing-oil-250ml-p714235.html">
                        Dầu tẩy trang duy trì độ ẩm Su:m37 Skin Saver Essential Cleansing Oil 250ml </a>
                    </div>
                    <div class="f-items__ls main-rating b-sold-rating">
                        <span class="jstars" data-value="0"></span>
                    </div>
                    <div class="b-price">
                        <div class="b__price">
                            <strong>1,080,000<sup>₫</sup></strong>
                        </div>
                        <div class="listed-price">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="l-items">

            <div class="f-items">
                <div class="f-product-item__thumb">
                    <a href="https://voso.vn/mat-na-ngu-cap-nuoc-chuyen-sau-sum37-waterfull-hydrating-sleeping-mask-100ml-p714191.html">
                        <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/cc1dfc507b17d3ad60d950c1304ea2b2?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=41bf1f3f8141a0d20a0a34ca6c0d24b26a11d12b6b96aeb5797872dce55ca5b6">
                           <img class="preview" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                       </div>
                       <div class='product-item-price product-item-price-mall'>
                        <span class="product-price">-10%</span>
                    </div>
                </a>
            </div>
            <div class="f-items_description f-items_show-name">
                <div class="f-items_name">
                    <div class="tag-mall">
                        
                    </div>
                    <a href="https://voso.vn/mat-na-ngu-cap-nuoc-chuyen-sau-sum37-waterfull-hydrating-sleeping-mask-100ml-p714191.html">
                    Mặt nạ ngủ cấp nươc chuyên sâu Su:m37 Water-full Hydrating Sleeping Mask 100ml </a>
                </div>
                <div class="f-items__ls main-rating b-sold-rating">
                    <span class="jstars" data-value="0"></span>
                </div>
                <div class="b-price">
                    <div class="b__price">
                        <strong>990,000<sup>₫</sup></strong>
                    </div>
                    <div class="listed-price">
                        1,100,000<sup>₫</sup>
                    </div>
                </div>
            </div>
        </div>

        <div class="f-items f-hidden">
            <div class="f-product-item__thumb">
                <a href="https://voso.vn/set-toner-hoa-hong-mamonde-rose-water-toner-set-mua-1-tang-1-p685813.html">
                    <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/88a4c9906c482624b43198025a4cb6d6?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=f178eda07bd4203190e8ac87d1c899712ebb9e2436e332bdbf5ceaec6ffd0f7c">
                        <img class="preview thumbnail-product" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                    </div>
                    <div class='product-item-price product-item-price-mall'>
                        <span class="product-price">-13%</span>
                    </div>
                </a>
            </div>
            <div class="f-items_description f-items_show-name">
                <div class="f-items_name">
                    <a href="https://voso.vn/set-toner-hoa-hong-mamonde-rose-water-toner-set-mua-1-tang-1-p685813.html">
                    Set toner hoa hồng Mamonde - Rose water toner set, mua 1 tặng 1 </a>
                </div>
                <div class="f-items__ls main-rating b-sold-rating">
                    <span class="jstars" data-value="0"></span>
                </div>
                <div class="b-price">
                    <div class="b__price">
                        <strong>355,000<sup>₫</sup></strong>
                    </div>
                    <div class="listed-price">
                       405,000<sup>₫</sup>
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
<div class="b__link--banner">
    <div class="container contaiver-v2">
        <div class="b__link--banner_info">
            <a class="progressive replace" data-href="https://media3.scdn.vn/img4/2021/03_01/uFa7gNSFnX7Ix40bBKRH.png" href="https://bit.ly/tai-app-voso">
                <img class="preview" src="https://media3.scdn.vn/img4/2021/03_01/uFa7gNSFnX7Ix40bBKRH.png" width="100%" />
            </a>
            
            <a class="progressive replace" data-href="https://media3.scdn.vn/img4/2021/01_15/GyPhS3LugjsSHkgT1tjb.png" href="https://voso.vn/bach-hoa-online.html">
                <img class="preview" src="https://media3.scdn.vn/img4/2021/01_15/GyPhS3LugjsSHkgT1tjb.png" width="100%" />
            </a>
            <a class="progressive replace" data-href="https://media3.scdn.vn/img4/2021/03_01/gWx8HOQuCnC2sPkxeLHk.png" href="https://vtbay.vn/">
                <img class="preview" src="https://media3.scdn.vn/img4/2021/03_01/gWx8HOQuCnC2sPkxeLHk.png" width="100%" />
            </a>
        </div>
    </div>
</div>
<style>
	/*.f-items{
		width: auto !important;
       }*/

       @media only screen and (max-device-width: 480px) {
          .btn-center a{
             min-width: 200px !important;
         }
     }

 </style>
 <div class="b__heart">
    <div class="container contaiver-v2">

        <div class="b__box--title">
            <div class="b__box-title">
                <h2><img src="https://voso.vn/static/v2/upload/icon_heart.png" /> Gợi ý hôm nay</h2>
            </div>
            <div class="url-all">
            </div>
        </div>
        <div class="b__heart--info">

            <div class="b__heart--mb">
                <div class="b__heart--content">
                    <div class="f-items">
                        <div class="box-pr-suggest">
                            <div class="f-product-item__thumb">
                                <a href="https://voso.vn/hpl770-bo-hop-com-3tier-lunch-box-520ml3-136126180mm-p736525.html">
                                    <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/59baa37f8127acc481b090f62209440e?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=fb39b03cf4a6dace87ba949775b9de91bb48b68ae7b5f1d5e4525d795670062b">
                                        <img class="preview" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                                        <div class="tag-mall-product"></div>
                                    </div>
                                    <div class='product-item-price product-item-price-mall'>
                                        <span class="product-price">-14%</span>
                                    </div>
                                </a>
                            </div>
                            <div class="f-items_description f-items_show-name">
                                <div class="f-items_name">
                                    <a href="https://voso.vn/hpl770-bo-hop-com-3tier-lunch-box-520ml3-136126180mm-p736525.html">
                                    HPL770 - BỘ HỘP CƠM 3-TIER LUNCH BOX 520ML*3, 136*126*180MM </a>
                                </div>
                                <div class="f-items__ls main-rating">
                                    <span class="jstars" data-value="0"></span>
                                </div>
                                <div class="b-price">
                                    <div class="b__price">
                                        <strong>215,000<sup>₫</sup></strong>
                                    </div>
                                    <div class="listed-price">
                                        249,000<sup>₫</sup>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="f-items">
                        <div class="box-pr-suggest">
                            <div class="f-product-item__thumb">
                                <a href="https://voso.vn/combo-2-coc-nguyet-san-beucup-p463786.html">
                                    <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/b25f8b8c82cf070ff3e12a9170423b21?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=c69ec93dbf33ed7598ccb3c2c3840712088ad50e39beb135e6baede2e1a76cdf">
                                        <img class="preview" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                                    </div>
                                    <div class='product-item-price product-item-price-mall'>
                                        <span class="product-price">-47%</span>
                                    </div>
                                </a>
                            </div>
                            <div class="f-items_description f-items_show-name">
                                <div class="f-items_name">
                                    <a href="https://voso.vn/combo-2-coc-nguyet-san-beucup-p463786.html">
                                    Combo 2 Cốc Nguyệt San BeuCup </a>
                                </div>
                                <div class="f-items__ls main-rating">
                                    <span class="jstars" data-value="0"></span>
                                    <label class="ml-auto">1 đã bán</label>
                                </div>
                                <div class="b-price">
                                    <div class="b__price">
                                        <strong>749,000<sup>₫</sup></strong>
                                    </div>
                                    <div class="listed-price">
                                        1,399,000<sup>₫</sup>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="f-items">
                        <div class="box-pr-suggest">
                            <div class="f-product-item__thumb">
                                <a href="https://voso.vn/combo-qua-tang-hoa-nen-tinh-dau-den-xong-p215362.html">
                                    <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/6d879db1b21dca0192656e5b2ecbbca5?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=083ccf2ff3c2850598488b5962ef1cf36aaf458af2c6674ca6198979e5d90ff5">
                                        <img class="preview" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                                        <div class="tag-mall-product"></div>
                                    </div>
                                </a>
                            </div>
                            <div class="f-items_description f-items_show-name">
                                <div class="f-items_name">
                                    <a href="https://voso.vn/combo-qua-tang-hoa-nen-tinh-dau-den-xong-p215362.html">
                                    Combo quà tặng Hoa Nén (tinh dầu, đèn xông...) </a>
                                </div>
                                <div class="f-items__ls main-rating">
                                    <span class="jstars" data-value="5"></span>
                                    <label class="ml-auto">11 đã bán</label>
                                </div>
                                <div class="b-price">
                                    <div class="b__price">
                                        <strong>8,000,000<sup>₫</sup></strong>
                                    </div>
                                    <div class="listed-price">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="f-items">
                        <div class="box-pr-suggest">
                            <div class="f-product-item__thumb">
                                <a href="https://voso.vn/tinh-dau-tram-hue-kim-vui-50ml-p707187.html">
                                    <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/d447313b1b52336b863773dc6692e647?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=5d2a816efaff37068e438ada3306e2e17753f035cc5706e7eca342d32be7afee">
                                        <img class="preview" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                                        <div class="tag-mall-product"></div>
                                    </div>
                                </a>
                            </div>
                            <div class="f-items_description f-items_show-name">
                                <div class="f-items_name">
                                    <a href="https://voso.vn/tinh-dau-tram-hue-kim-vui-50ml-p707187.html">
                                    Tinh dầu tràm Huế - Kim vui 50ml </a>
                                </div>
                                <div class="f-items__ls main-rating">
                                    <span class="jstars" data-value="5"></span>
                                </div>
                                <div class="b-price">
                                    <div class="b__price">
                                        <strong>120,000<sup>₫</sup></strong>
                                    </div>
                                    <div class="listed-price">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="f-items">
                        <div class="box-pr-suggest">
                            <div class="f-product-item__thumb">
                                <a href="https://voso.vn/mat-ong-ruoi-200ml-dac-san-ben-tre-p717056.html">
                                    <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/4859d354a83f1f4ab0361309b48234c9?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=5f351cc1767bbbd5b6921feab5490781acd5a4fda30500d91d3342d243a50233">
                                        <img class="preview" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                                        <div class="tag-mall-product"></div>
                                    </div>
                                    <div class='product-item-price product-item-price-mall'>
                                        <span class="product-price">-20%</span>
                                    </div>
                                </a>
                            </div>
                            <div class="f-items_description f-items_show-name">
                                <div class="f-items_name">
                                    <a href="https://voso.vn/mat-ong-ruoi-200ml-dac-san-ben-tre-p717056.html">
                                    MẬT ONG RUỒI (200ML)- Đặc sản Bến Tre </a>
                                </div>
                                <div class="f-items__ls main-rating">
                                    <span class="jstars" data-value="0"></span>
                                    <label class="ml-auto">1 đã bán</label>
                                </div>
                                <div class="b-price">
                                    <div class="b__price">
                                        <strong>299,000<sup>₫</sup></strong>
                                    </div>
                                    <div class="listed-price">
                                        370,000<sup>₫</sup>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="f-items">
                        <div class="box-pr-suggest">
                            <div class="f-product-item__thumb">
                                <a href="https://voso.vn/may-tao-kieu-toc-panasonic-pastehka71w645-50-p716119.html">
                                    <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/9360050854b97dff5869445c90b849d9?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=e4d25a3992c9eacc7095fd977b968bf4ad2589f08311f79381995ddd1e38e4be">
                                        <img class="preview" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                                    </div>
                                    <div class='product-item-price product-item-price-mall'>
                                        <span class="product-price">-15%</span>
                                    </div>
                                </a>
                            </div>
                            <div class="f-items_description f-items_show-name">
                                <div class="f-items_name">
                                    <a href="https://voso.vn/may-tao-kieu-toc-panasonic-pastehka71w645-50-p716119.html">
                                    Máy tạo kiểu tóc Panasonic PAST-EH-KA71W645 5.0 </a>
                                </div>
                                <div class="f-items__ls main-rating">
                                    <span class="jstars" data-value="0"></span>
                                </div>
                                <div class="b-price">
                                    <div class="b__price">
                                        <strong>850,000<sup>₫</sup></strong>
                                    </div>
                                    <div class="listed-price">
                                        990,000<sup>₫</sup>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="f-items">
                        <div class="box-pr-suggest">
                            <div class="f-product-item__thumb">
                                <a href="https://voso.vn/sua-rua-mat-benew-brown-rice-100ml-p715863.html">
                                    <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/360920f172d7303cde2bdd9290caf298?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=e0ed403f6c3deb3be203722760c83c105a027e1494c8ca0999fa257d35113db0">
                                        <img class="preview" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                                    </div>
                                    <div class='product-item-price product-item-price-mall'>
                                        <span class="product-price">-20%</span>
                                    </div>
                                </a>
                            </div>
                            <div class="f-items_description f-items_show-name">
                                <div class="f-items_name">
                                    <a href="https://voso.vn/sua-rua-mat-benew-brown-rice-100ml-p715863.html">
                                    Sữa rửa mặt BENEW Brown Rice 100ml </a>
                                </div>
                                <div class="f-items__ls main-rating">
                                    <span class="jstars" data-value="0"></span>
                                </div>
                                <div class="b-price">
                                    <div class="b__price">
                                        <strong>85,000<sup>₫</sup></strong>
                                    </div>
                                    <div class="listed-price">
                                        105,000<sup>₫</sup>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="f-items">
                        <div class="box-pr-suggest">
                            <div class="f-product-item__thumb">
                                <a href="https://voso.vn/combo-2-ta-quan-sieu-cao-cap-huggies-platinum-m33l27xl24-p708731.html">
                                    <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/bb820f7769d5592a4a06423e57fda3ec?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=02845417ebe3dc022d169349f3e8c36e95288a0a8fc8d2cfd3f90f69cff9220a">
                                        <img class="preview" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                                    </div>
                                    <div class='product-item-price product-item-price-mall'>
                                        <span class="product-price">-22%</span>
                                    </div>
                                </a>
                            </div>
                            <div class="f-items_description f-items_show-name">
                                <div class="f-items_name">
                                    <a href="https://voso.vn/combo-2-ta-quan-sieu-cao-cap-huggies-platinum-m33l27xl24-p708731.html">
                                    Combo 2 Tã quần siêu cao cấp Huggies Platinum M33/L27/XL24 </a>
                                </div>
                                <div class="f-items__ls main-rating">
                                    <span class="jstars" data-value="0"></span>
                                </div>
                                <div class="b-price">
                                    <div class="b__price">
                                        <strong>439,000<sup>₫</sup></strong>
                                    </div>
                                    <div class="listed-price">
                                        560,000<sup>₫</sup>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="f-items">
                        <div class="box-pr-suggest">
                            <div class="f-product-item__thumb">
                                <a href="https://voso.vn/bo-10-mieng-dap-mat-na-benew-natural-herb-mask-pack-green-tea-22ml-p718041.html">
                                    <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/76be4584372f3cb45173fe84c93862b7?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=5605e5131fd06176b450a376be110673fdc855ca0655074f5748117e36fe8ead">
                                        <img class="preview" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                                    </div>
                                    <div class='product-item-price product-item-price-mall'>
                                        <span class="product-price">-7%</span>
                                    </div>
                                </a>
                            </div>
                            <div class="f-items_description f-items_show-name">
                                <div class="f-items_name">
                                    <a href="https://voso.vn/bo-10-mieng-dap-mat-na-benew-natural-herb-mask-pack-green-tea-22ml-p718041.html">
                                    Bộ 10 miếng Đắp mặt nạ Benew Natural Herb Mask Pack - Green Tea 22ml </a>
                                </div>
                                <div class="f-items__ls main-rating">
                                    <span class="jstars" data-value="0"></span>
                                </div>
                                <div class="b-price">
                                    <div class="b__price">
                                        <strong>145,000<sup>₫</sup></strong>
                                    </div>
                                    <div class="listed-price">
                                        155,000<sup>₫</sup>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="f-items">
                        <div class="box-pr-suggest">
                            <div class="f-product-item__thumb">
                                <a href="https://voso.vn/combo-sua-duong-the-va-xit-toan-than-huong-nuoc-hoa-rseries-malaysia-200ml75ml-p717364.html">
                                    <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/2bb5bedfb09da8b7526879d1c246b115?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=4978375d7b6978edd67f67de85e09851fad3685ef406c0a8e64fa3bbbbac3a73">
                                        <img class="preview" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                                    </div>
                                    <div class='product-item-price product-item-price-mall'>
                                        <span class="product-price">-31%</span>
                                    </div>
                                </a>
                            </div>
                            <div class="f-items_description f-items_show-name">
                                <div class="f-items_name">
                                    <a href="https://voso.vn/combo-sua-duong-the-va-xit-toan-than-huong-nuoc-hoa-rseries-malaysia-200ml75ml-p717364.html">
                                    Combo sữa dưỡng thể và xịt toàn thân hương nước hoa Rseries Malaysia 200ml+75ml </a>
                                </div>
                                <div class="f-items__ls main-rating">
                                    <span class="jstars" data-value="0"></span>
                                </div>
                                <div class="b-price">
                                    <div class="b__price">
                                        <strong>255,000<sup>₫</sup></strong>
                                    </div>
                                    <div class="listed-price">
                                        365,000<sup>₫</sup>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="f-items">
                        <div class="box-pr-suggest">
                            <div class="f-product-item__thumb">
                                <a href="https://voso.vn/ca-phe-rang-xay-dakmarcombo-2-bidac-san-kon-tum-200grbi-p10087.html">
                                   <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/9784cdb8b508fa8ac0f24f24fedb73fe?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=9094872ef661e05011d4c3a81cbccf79ed8b17b74a4b97a361c2f97e602a3684">
                                    <img class="preview" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                                    <div class="tag-mall-product"></div>
                                </div>
                            </a>
                        </div>
                        <div class="f-items_description f-items_show-name">
                            <div class="f-items_name">
                                <a href="https://voso.vn/ca-phe-rang-xay-dakmarcombo-2-bidac-san-kon-tum-200grbi-p10087.html">
                                CÀ PHÊ RANG XAY DAKMAR(COMBO 2 bì)_ĐẶC SẢN KON TUM (200gr/bì) </a>
                            </div>
                            <div class="f-items__ls main-rating">
                                <span class="jstars" data-value="5"></span>
                                <label class="ml-auto">4 đã bán</label>
                            </div>
                            <div class="b-price">
                                <div class="b__price">
                                    <strong>188,000<sup>₫</sup></strong>
                                </div>
                                <div class="listed-price">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="f-items">
                    <div class="box-pr-suggest">
                        <div class="f-product-item__thumb">
                            <a href="https://voso.vn/son-duong-dua-cocoben-tre-p299710.html">
                                <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/bafcdc2d2d50bcb0b5a04800b64bd1e1?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=af016ada02ff9e468be4cdd9a680e65a4cf183bda85c0c41cbfbcc18a29de2d9">
                                    <img class="preview" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                                    <div class="tag-mall-product"></div>
                                </div>
                                <div class='product-item-price product-item-price-mall'>
                                    <span class="product-price">-26%</span>
                                </div>
                            </a>
                        </div>
                        <div class="f-items_description f-items_show-name">
                            <div class="f-items_name">
                                <a href="https://voso.vn/son-duong-dua-cocoben-tre-p299710.html">
                                SON DƯỠNG DỪA COCO+_Bến Tre </a>
                            </div>
                            <div class="f-items__ls main-rating">
                                <span class="jstars" data-value="5"></span>
                                <label class="ml-auto">9 đã bán</label>
                            </div>
                            <div class="b-price">
                                <div class="b__price">
                                    <strong>89,000<sup>₫</sup></strong>
                                </div>
                                <div class="listed-price">
                                    120,000<sup>₫</sup>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="f-items">
                    <div class="box-pr-suggest">
                        <div class="f-product-item__thumb">
                            <a href="https://voso.vn/dau-dua-nguyen-chat-huong-lavender-p362962.html">
                                <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/0d3d92e8950da3159f0e8684da112176?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=f34ebebef3262bd2d4871223135b8f0befe5e1a428cef12c28d9b7569976a38b">
                                    <img class="preview" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                                    <div class="tag-mall-product"></div>
                                </div>
                                <div class='product-item-price product-item-price-mall'>
                                    <span class="product-price">-12%</span>
                                </div>
                            </a>
                        </div>
                        <div class="f-items_description f-items_show-name">
                            <div class="f-items_name">
                                <a href="https://voso.vn/dau-dua-nguyen-chat-huong-lavender-p362962.html">
                                DẦU DỪA NGUYÊN CHẤT HƯƠNG LAVENDER </a>
                            </div>
                            <div class="f-items__ls main-rating">
                                <span class="jstars" data-value="5"></span>
                                <label class="ml-auto">4 đã bán</label>
                            </div>
                            <div class="b-price">
                                <div class="b__price">
                                    <strong>80,000<sup>₫</sup></strong>
                                </div>
                                <div class="listed-price">
                                    90,000<sup>₫</sup>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="f-items">
                    <div class="box-pr-suggest">
                        <div class="f-product-item__thumb">
                            <a href="https://voso.vn/dau-dua-tinh-luyen-vietcoco-p361504.html">
                                <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/8e6b8b652890f99a0ade1c68b2834c2f?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=282ed328cfe673cac9ecfc954c27a73b5bb861303e80464a9ef8c4ded9492466">
                                    <img class="preview" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                                    <div class="tag-mall-product"></div>
                                </div>
                                <div class='product-item-price product-item-price-mall'>
                                    <span class="product-price">-7%</span>
                                </div>
                            </a>
                        </div>
                        <div class="f-items_description f-items_show-name">
                            <div class="f-items_name">
                                <a href="https://voso.vn/dau-dua-tinh-luyen-vietcoco-p361504.html">
                                DẦU DỪA TINH LUYỆN VIETCOCO </a>
                            </div>
                            <div class="f-items__ls main-rating">
                                <span class="jstars" data-value="5"></span>
                                <label class="ml-auto">11 đã bán</label>
                            </div>
                            <div class="b-price">
                                <div class="b__price">
                                    <strong>145,000<sup>₫</sup></strong>
                                </div>
                                <div class="listed-price">
                                    155,000<sup>₫</sup>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="f-items">
                    <div class="box-pr-suggest">
                        <div class="f-product-item__thumb">
                            <a href="https://voso.vn/khoai-lang-dac-biet-p462031.html">
                                <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/ccbccf3906b9bd5a859b515ccce62b1b?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=109a5b75a835bf649ae4b7f8fd879304d1aa245118e12c48be0d8c6747362a27">
                                    <img class="preview" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                                    <div class="tag-mall-product"></div>
                                </div>
                            </a>
                        </div>
                        <div class="f-items_description f-items_show-name">
                            <div class="f-items_name">
                                <a href="https://voso.vn/khoai-lang-dac-biet-p462031.html">
                                Khoai lang đặc biệt </a>
                            </div>
                            <div class="f-items__ls main-rating">
                                <span class="jstars" data-value="5"></span>
                                <label class="ml-auto">86 đã bán</label>
                            </div>
                            <div class="b-price">
                                <div class="b__price">
                                    <strong>240,000<sup>₫</sup></strong>
                                </div>
                                <div class="listed-price">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="f-items">
                    <div class="box-pr-suggest">
                        <div class="f-product-item__thumb">
                            <a href="https://voso.vn/bot-an-dam-ridielac-gold-ca-hoi-bong-cai-xanh-hop-giay-200g-p722142.html">
                                <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/278b0d4265f6b10d75adbc5d18e14312?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=ab955071f7716283c828b7a357dd6371e297cd50d93fcce06aa53b5ab2facb9e">
                                    <img class="preview" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                                </div>
                                <div class='product-item-price product-item-price-mall'>
                                    <span class="product-price">-7%</span>
                                </div>
                            </a>
                        </div>
                        <div class="f-items_description f-items_show-name">
                            <div class="f-items_name">
                                <a href="https://voso.vn/bot-an-dam-ridielac-gold-ca-hoi-bong-cai-xanh-hop-giay-200g-p722142.html">
                                BỘT ĂN DẶM RIDIELAC GOLD CÁ HỒI BÔNG CẢI XANH - HỘP GIẤY 200G </a>
                            </div>
                            <div class="f-items__ls main-rating">
                                <span class="jstars" data-value="0"></span>
                            </div>
                            <div class="b-price">
                                <div class="b__price">
                                    <strong>61,000<sup>₫</sup></strong>
                                </div>
                                <div class="listed-price">
                                    65,000<sup>₫</sup>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="f-items">
                    <div class="box-pr-suggest">
                        <div class="f-product-item__thumb">
                            <a href="https://voso.vn/combo-3-goi-giay-uot-lec-tinh-khiet-999-e165-cho-tay-va-mieng-80-to-p57097.html">
                                <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/f6e4d1043ff944580857fb1a2a62b3c7?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=e53f64d446ea5902c57e5ea679ddd8a32c07f94a80e82ca2d9f70e3afe5fd8df">
                                    <img class="preview" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                                    <div class="tag-mall-product"></div>
                                </div>
                            </a>
                        </div>
                        <div class="f-items_description f-items_show-name">
                            <div class="f-items_name">
                                <a href="https://voso.vn/combo-3-goi-giay-uot-lec-tinh-khiet-999-e165-cho-tay-va-mieng-80-to-p57097.html">
                                Combo 3 gói Giấy ướt LEC tinh khiết 99,9% E-165 cho tay và miệng 80 tờ </a>
                            </div>
                            <div class="f-items__ls main-rating">
                                <span class="jstars" data-value="5"></span>
                            </div>
                            <div class="b-price">
                                <div class="b__price">
                                    <strong>147,000<sup>₫</sup></strong>
                                </div>
                                <div class="listed-price">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="f-items">
                    <div class="box-pr-suggest">
                        <div class="f-product-item__thumb">
                            <a href="https://voso.vn/sua-bot-vinamilk-canxi-pro-hop-900g-p721984.html">
                                <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/5fd6bf65b24a31482d09cb19147552a4?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=2dff0cb3492ab983cf4cc0f1c24a818434f17d8e51b10267821cb39c0e83aafa">
                                    <img class="preview" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                                </div>
                            </a>
                        </div>
                        <div class="f-items_description f-items_show-name">
                            <div class="f-items_name">
                                <a href="https://voso.vn/sua-bot-vinamilk-canxi-pro-hop-900g-p721984.html">
                                Sữa Bột Vinamilk Canxi Pro Hộp 900g </a>
                            </div>
                            <div class="f-items__ls main-rating">
                                <span class="jstars" data-value="0"></span>
                            </div>
                            <div class="b-price">
                                <div class="b__price">
                                    <strong>340,000<sup>₫</sup></strong>
                                </div>
                                <div class="listed-price">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="f-items">
                    <div class="box-pr-suggest">
                        <div class="f-product-item__thumb">
                            <a href="https://voso.vn/tp-bvsk-nutrilite-double-x-khong-bao-gom-khay-dung-san-pham-p722016.html">
                                <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/458f0094bc0c3c84008f53c987e07583?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=59fb57d373faa36a10fc22ff63b416c986d4f198356f4d09a3fc33ea680ead19">
                                    <img class="preview" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                                </div>
                                <div class='product-item-price product-item-price-mall'>
                                    <span class="product-price">-14%</span>
                                </div>
                            </a>
                        </div>
                        <div class="f-items_description f-items_show-name">
                            <div class="f-items_name">
                                <a href="https://voso.vn/tp-bvsk-nutrilite-double-x-khong-bao-gom-khay-dung-san-pham-p722016.html">
                                TP BVSK Nutrilite Double X (Không Bao Gồm Khay Đựng Sản Phẩm) </a>
                            </div>
                            <div class="f-items__ls main-rating">
                                <span class="jstars" data-value="0"></span>
                                <label class="ml-auto">1 đã bán</label>
                            </div>
                            <div class="b-price">
                                <div class="b__price">
                                    <strong>1,075,000<sup>₫</sup></strong>
                                </div>
                                <div class="listed-price">
                                    1,250,000<sup>₫</sup>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="f-items">
                    <div class="box-pr-suggest">
                        <div class="f-product-item__thumb">
                            <a href="https://voso.vn/dau-xa-duong-am-satinique-amway-280ml-p721861.html">
                                <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/813b5053d79a12267d0271dc482c1418?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=d464762776999acd5568f1fa842d649a4d45423836c2e39f69e9053d978ab3a6">
                                    <img class="preview" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                                </div>
                                <div class='product-item-price product-item-price-mall'>
                                    <span class="product-price">-14%</span>
                                </div>
                            </a>
                        </div>
                        <div class="f-items_description f-items_show-name">
                            <div class="f-items_name">
                                <a href="https://voso.vn/dau-xa-duong-am-satinique-amway-280ml-p721861.html">
                                Dầu Xả Dưỡng Ẩm Satinique Amway (280ml) </a>
                            </div>
                            <div class="f-items__ls main-rating">
                                <span class="jstars" data-value="0"></span>
                            </div>
                            <div class="b-price">
                                <div class="b__price">
                                    <strong>198,000<sup>₫</sup></strong>
                                </div>
                                <div class="listed-price">
                                    230,000<sup>₫</sup>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="f-items">
                    <div class="box-pr-suggest">
                        <div class="f-product-item__thumb">
                            <a href="https://voso.vn/nuoc-hoa-nu-versace-crystal-noir-100ml-p721228.html">
                                <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/50555f376e442f6ea3492611d21f56cc?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=5f64ae821fd1b58a664e0e76965a8ed51b2e6c2ec44bf0e5e4ac2e47d25fa0e5">
                                    <img class="preview" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                                </div>
                            </a>
                        </div>
                        <div class="f-items_description f-items_show-name">
                            <div class="f-items_name">
                                <a href="https://voso.vn/nuoc-hoa-nu-versace-crystal-noir-100ml-p721228.html">
                                Nước hoa nữ Versace Crystal Noir 100ml </a>
                            </div>
                            <div class="f-items__ls main-rating">
                                <span class="jstars" data-value="0"></span>
                            </div>
                            <div class="b-price">
                                <div class="b__price">
                                    <strong>490,000<sup>₫</sup></strong>
                                </div>
                                <div class="listed-price">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="f-items">
                    <div class="box-pr-suggest">
                        <div class="f-product-item__thumb">
                            <a href="https://voso.vn/sua-rua-mat-lam-sang-da-va-duong-am-3wb-pretty-face-mild-foam-cleansing-90g-p720490.html">
                                <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/a1f66db741352bd922be2d21d845f108?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=8baf2216dbdf5dea9164da582d48f2e6c8a8011bdfccdd156cf401ba57d55a88">
                                    <img class="preview" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                                    <div class="tag-mall-product"></div>
                                </div>
                                <div class='product-item-price product-item-price-mall'>
                                    <span class="product-price">-45%</span>
                                </div>
                            </a>
                        </div>
                        <div class="f-items_description f-items_show-name">
                            <div class="f-items_name">
                                <a href="https://voso.vn/sua-rua-mat-lam-sang-da-va-duong-am-3wb-pretty-face-mild-foam-cleansing-90g-p720490.html">
                                Sữa rửa mặt làm sáng da và dưỡng ẩm 3WB Pretty Face Mild Foam Cleansing 90g </a>
                            </div>
                            <div class="f-items__ls main-rating">
                                <span class="jstars" data-value="0"></span>
                            </div>
                            <div class="b-price">
                                <div class="b__price">
                                    <strong>250,000<sup>₫</sup></strong>
                                </div>
                                <div class="listed-price">
                                    450,000<sup>₫</sup>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="f-items">
                    <div class="box-pr-suggest">
                        <div class="f-product-item__thumb">
                            <a href="https://voso.vn/kem-giam-dau-tinh-dau-da-dieu-uc-gwanjeolae-joint-massage-cream-100g-p720482.html">
                                <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/64e41394784b203db8850040a01f81e3?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=37116f8c583bb71997387eee72b0bea7f654bb1c6e85d7aea26eb16ba89a5fc7">
                                    <img class="preview" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                                    <div class="tag-mall-product"></div>
                                </div>
                                <div class='product-item-price product-item-price-mall'>
                                    <span class="product-price">-45%</span>
                                </div>
                            </a>
                        </div>
                        <div class="f-items_description f-items_show-name">
                            <div class="f-items_name">
                                <a href="https://voso.vn/kem-giam-dau-tinh-dau-da-dieu-uc-gwanjeolae-joint-massage-cream-100g-p720482.html">
                                Kem giảm đau tinh dầu đà điểu Úc Gwanjeolae Joint Massage Cream 100g </a>
                            </div>
                            <div class="f-items__ls main-rating">
                                <span class="jstars" data-value="0"></span>
                            </div>
                            <div class="b-price">
                                <div class="b__price">
                                    <strong>250,000<sup>₫</sup></strong>
                                </div>
                                <div class="listed-price">
                                    450,000<sup>₫</sup>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="f-items">
                    <div class="box-pr-suggest">
                        <div class="f-product-item__thumb">
                            <a href="https://voso.vn/tinh-dau-tram-hue-kim-vui-125ml-p707189.html">
                                <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/2f0f55c086e65be07d1f6c239cc9e269?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=6fe6573ddcb3ed405bdb9544cdf090954ce475919acabe86f8e33ce2a74f3295">
                                    <img class="preview" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                                    <div class="tag-mall-product"></div>
                                </div>
                            </a>
                        </div>
                        <div class="f-items_description f-items_show-name">
                            <div class="f-items_name">
                                <a href="https://voso.vn/tinh-dau-tram-hue-kim-vui-125ml-p707189.html">
                                Tinh dầu tràm Huế - Kim vui 125ml </a>
                            </div>
                            <div class="f-items__ls main-rating">
                                <span class="jstars" data-value="5"></span>
                                <label class="ml-auto">1 đã bán</label>
                            </div>
                            <div class="b-price">
                                <div class="b__price">
                                    <strong>195,000<sup>₫</sup></strong>
                                </div>
                                <div class="listed-price">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="f-items">
                    <div class="box-pr-suggest">
                        <div class="f-product-item__thumb">
                            <a href="https://voso.vn/combo-6-chai-nuoc-mam-tu-tuyet-490ml-btn-p706571.html">
                                <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/6ee236caee828f5852f8ff1cc0532bd5?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=1efd3fcb697edd5977e0fb5d862e8f673b79ab2f15c8fdfc34208cab098181c3">
                                    <img class="preview" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                                    <div class="tag-mall-product"></div>
                                </div>
                                <div class='product-item-price product-item-price-mall'>
                                    <span class="product-price">-3%</span>
                                </div>
                            </a>
                        </div>
                        <div class="f-items_description f-items_show-name">
                            <div class="f-items_name">
                                <a href="https://voso.vn/combo-6-chai-nuoc-mam-tu-tuyet-490ml-btn-p706571.html">
                                COMBO 6 CHAI NƯỚC MẮM TỨ TUYỆT 490ml - BTN </a>
                            </div>
                            <div class="f-items__ls main-rating">
                                <span class="jstars" data-value="5"></span>
                                <label class="ml-auto">3 đã bán</label>
                            </div>
                            <div class="b-price">
                               <div class="b__price">
                                <strong>360,000<sup>₫</sup></strong>
                            </div>
                            <div class="listed-price">
                                370,000<sup>₫</sup>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="f-items">
                <div class="box-pr-suggest">
                    <div class="f-product-item__thumb">
                        <a href="https://voso.vn/tac-xi-muoi-p706051.html">
                            <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/39b492ff21bd411e3ee088893f1d8856?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=e8d641a5bd02735a887f5f182873ce0303c7ffcc80f32a5acf1374374ef1c68c">
                                <img class="preview" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                                <div class="tag-mall-product"></div>
                            </div>
                            <div class='product-item-price product-item-price-mall'>
                                <span class="product-price">-20%</span>
                            </div>
                        </a>
                    </div>
                    <div class="f-items_description f-items_show-name">
                        <div class="f-items_name">
                            <a href="https://voso.vn/tac-xi-muoi-p706051.html">
                            TẮC XÍ MUỘI </a>
                        </div>
                        <div class="f-items__ls main-rating">
                            <span class="jstars" data-value="5"></span>
                            <label class="ml-auto">8 đã bán</label>
                        </div>
                        <div class="b-price">
                            <div class="b__price">
                                <strong>40,000<sup>₫</sup></strong>
                            </div>
                            <div class="listed-price">
                                50,000<sup>₫</sup>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="f-items">
                <div class="box-pr-suggest">
                    <div class="f-product-item__thumb">
                        <a href="https://voso.vn/combo-1kg-mang-cau-tay-ninh-vietgap-qua-na-tay-ninh--p705134.html">
                            <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/81e671a0227afc2c184487094d2f0848?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=ec095c53b317ee99c9a58b54e4edb5e12e6b81470d1f93a2f942e5a448e8d956">
                                <img class="preview" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                                <div class="tag-mall-product"></div>
                            </div>
                        </a>
                    </div>
                    <div class="f-items_description f-items_show-name">
                        <div class="f-items_name">
                            <a href="https://voso.vn/combo-1kg-mang-cau-tay-ninh-vietgap-qua-na-tay-ninh--p705134.html">
                            COMBO 1KG - MẢNG CẦU TÂY NINH VietGAP ( Quả Na Tây Ninh ) </a>
                        </div>
                        <div class="f-items__ls main-rating">
                            <span class="jstars" data-value="5"></span>
                            <label class="ml-auto">80 đã bán</label>
                        </div>
                        <div class="b-price">
                            <div class="b__price">
                                <strong>100,000<sup>₫</sup></strong>
                            </div>
                            <div class="listed-price">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="f-items">
                <div class="box-pr-suggest">
                    <div class="f-product-item__thumb">
                        <a href="https://voso.vn/noi-com-dien-nap-gai-comet-18l-cm8018-p717317.html">
                            <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/bdb3a91090edca6363eb3fb8bfee3dca?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=0753e9d743665fc3bb7d64e6b835aeb897ec71d6a5b0b278c39453cae0dc85f7">
                                <img class="preview" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                            </div>
                            <div class='product-item-price product-item-price-mall'>
                               <span class="product-price">-35%</span>
                           </div>
                       </a>
                   </div>
                   <div class="f-items_description f-items_show-name">
                    <div class="f-items_name">
                        <a href="https://voso.vn/noi-com-dien-nap-gai-comet-18l-cm8018-p717317.html">
                        Nồi cơm điện nắp gài Comet 1,8L CM8018 </a>
                    </div>
                    <div class="f-items__ls main-rating">
                        <span class="jstars" data-value="0"></span>
                    </div>
                    <div class="b-price">
                        <div class="b__price">
                            <strong>359,000<sup>₫</sup></strong>
                        </div>
                        <div class="listed-price">
                            550,000<sup>₫</sup>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="f-items">
            <div class="box-pr-suggest">
                <div class="f-product-item__thumb">
                    <a href="https://voso.vn/may-xay-sinh-to-thuy-tinh-2-coi-comet-cm9956-p716738.html">
                        <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/993750ae52f7347fea28592d4951ed4d?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=f76767d44dfa6a797cb6eb6e755fa275813e11c19b52d3a14bf26f48f6f21190">
                            <img class="preview" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                        </div>
                        <div class='product-item-price product-item-price-mall'>
                            <span class="product-price">-31%</span>
                        </div>
                    </a>
                </div>
                <div class="f-items_description f-items_show-name">
                    <div class="f-items_name">
                        <a href="https://voso.vn/may-xay-sinh-to-thuy-tinh-2-coi-comet-cm9956-p716738.html">
                        Máy xay Sinh tố thủy tinh 2 cối comet CM9956 </a>
                    </div>
                    <div class="f-items__ls main-rating">
                        <span class="jstars" data-value="0"></span>
                    </div>
                    <div class="b-price">
                        <div class="b__price">
                            <strong>299,000<sup>₫</sup></strong>
                        </div>
                        <div class="listed-price">
                            430,000<sup>₫</sup>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="f-items">
            <div class="box-pr-suggest">
                <div class="f-product-item__thumb">
                    <a href="https://voso.vn/am-sieu-toc-sato-st1803n-18l-p703536.html">
                        <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/a217f124d1e0fad64e575cfd3d0afc8b?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=8ef99dd7361877be586b1dfe0edaea615fdd04dc8755969b6a790b4795ea4dbc">
                            <img class="preview" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                            <div class="tag-mall-product"></div>
                        </div>
                        <div class='product-item-price product-item-price-mall'>
                            <span class="product-price">-13%</span>
                        </div>
                    </a>
                </div>
                <div class="f-items_description f-items_show-name">
                    <div class="f-items_name">
                        <a href="https://voso.vn/am-sieu-toc-sato-st1803n-18l-p703536.html">
                        Ấm siêu tốc SATO ST-1803(N) 1.8L </a>
                    </div>
                    <div class="f-items__ls main-rating">
                        <span class="jstars" data-value="5"></span>
                    </div>
                    <div class="b-price">
                        <div class="b__price">
                            <strong>433,000<sup>₫</sup></strong>
                        </div>
                        <div class="listed-price">
                            495,000<sup>₫</sup>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="b__box--title">

    <div class="b__box-title">
        <h3 class="b__box_h3">Danh mục gợi ý</h3>
    </div>
    <div class="url-all">
    </div>
</div>
<div class="b__tags slide-list-category-name">
    <div class="b__tags--info">
        <div id="slideListCategoryName" class="owl-carousel">
            <div class="m-items b__tags--ls b_tags08">
                <a href="https://voso.vn/suc-khoe-lam-dep-c63">
                Sức khỏe - Làm đẹp </a>
            </div>
            <div class="m-items b__tags--ls b_tags04">
                <a href="https://voso.vn/cham-soc-da-c65">
                Chăm sóc da </a>
            </div>
            <div class="m-items b__tags--ls b_tags04">
                <a href="https://voso.vn/cham-soc-toc-c66">
                Chăm sóc tóc </a>
            </div>
            <div class="m-items b__tags--ls b_tags03">
                <a href="https://voso.vn/bach-hoa-c84">
                Bách hóa </a>
            </div>
            <div class="m-items b__tags--ls b_tags08">
                <a href="https://voso.vn/thoi-trang-nu-c104">
                Thời trang Nữ </a>
            </div>
            <div class="m-items b__tags--ls b_tags08">
               <a href="https://voso.vn/hang-tieu-dung-thuc-pham-c165">
               Hàng tiêu dùng - Thực phẩm </a>
           </div>
           <div class="m-items b__tags--ls b_tags02">
                <a href="https://voso.vn/dac-san-trai-cay-c225">
                Đặc sản trái cây </a>
            </div>
        </div>
    </div>
</div>



</div>
</div>
</div>
<style>
    @media only screen and (max-device-width: 480px) {
        .btn-center a{
            min-width: 200px !important;
        }
    }
</style>

@endsection
@section('js')
	<script>
        var baseUrl = '';
        var csrf_token = 'G4gQaNaKrTMDxZlTxb-8DRm3G0agpTRbsOsetMZ1r5Fq50QwuMz9bGar12u3jPtgbeBfFeeXVQ-dikTwlh3__A==' ? 'G4gQaNaKrTMDxZlTxb-8DRm3G0agpTRbsOsetMZ1r5Fq50QwuMz9bGar12u3jPtgbeBfFeeXVQ-dikTwlh3__A==' : '';
        var csrfTokenName = '_csrf' ? '_csrf' : '';
        const locationVersion = '';
    </script>
    <script src="https://voso.vn/assets/e94ae26f/jquery.js?v=1568371444"></script>
    <script src="https://voso.vn/assets/d6da31be/yii.js?v=1566957476"></script>
    <script src="https://voso.vn/assets/31ced6d1/js/bootstrap.js?v=1568371445"></script>
    <script src="https://voso.vn/static/v2/js/jquery-3.2.1.min.js?v=1603338120"></script>
    <script src="https://voso.vn/static/v2/js/bootstrap.min.js?v=1603338120"></script>
    <script src="https://voso.vn/static/v2/js/progressive-image.js?v=1603338120"></script>
    <script src="https://voso.vn/static/v2/js/owl.carousel.min.js?v=1603338120"></script>
    <script src="https://voso.vn/static/v2/js/cloudzoom.js?v=1603338120"></script>
    <script src="https://voso.vn/static/v2/js/jstars.min.js?v=1603338120"></script>
    <script src="https://voso.vn/static/v2/js/style.js?v=1614350823"></script>
    <script src="https://voso.vn/static/v2/js/jquery.nstSlider.js?v=1603338120"></script>
    <script src="https://voso.vn/jsv2/jquery-ui.min.js?v=1603338118"></script>
    <script src="https://voso.vn/jsv2/utils.js?v=1603338118"></script>
    <script src="https://voso.vn/jsv2/inputmask.js?v=1603338118"></script>
    <script src="https://voso.vn/jsv2/lib/imboclient.min.js?v=1603338118"></script>
    <script src="https://voso.vn/jsv2/lib/angular.min.js?v=1603338118"></script>
    <script src="https://voso.vn/jsv2/lib/angular-filedialog.js?v=1603338118"></script>
    <script src="https://voso.vn/jsv2/lib/angular-ui-bootstrap.min.js?v=1603338118"></script>
    <script src="https://voso.vn/jsv2/lib/moment.min.js?v=1603338118"></script>
    <script src="https://voso.vn/jsv2/lib/angular-moment.min.js?v=1603338118"></script>
    <script src="https://voso.vn/jsv2/lib/angular-local-storage.min.js?v=1603338118"></script>
    <script src="https://voso.vn/jsv2/lib/customSelect.js?v=1603338118"></script>
    <script src="https://voso.vn/jsv2/lib/angular-recaptcha.js?v=1603338118"></script>
    <script src="https://voso.vn/jsv2/lib/text-angular-rangy.min.js?v=1603338118"></script>
    <script src="https://voso.vn/jsv2/lib/text-angular-sanitize.min.js?v=1603338118"></script>
    <script src="https://voso.vn/jsv2/lib/text-angular.min.js?v=1603338118"></script>
    <script src="https://voso.vn/jsv2/lib/firebase-app.js?v=1603338118"></script>
    <script src="https://voso.vn/jsv2/lib/firebase-messaging.js?v=1603338118"></script>
    <script src="https://www.gstatic.com/firebasejs/7.15.0/firebase-auth.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.15.0/firebase-database.js"></script>
    <script src="https://voso.vn/jsv2/app.js?v=1614350823"></script>
    <script src="https://voso.vn/jsv2/modal.js?v=1603338118"></script>
    <script src="https://voso.vn/jsv2/firebase-notification.js?v=1603338118"></script>
    <script src="https://voso.vn/jsv2/auth.js?v=1603338118"></script>
    <script src="https://voso.vn/jsv2/order.js?v=1603338118"></script>
    <script src="https://voso.vn/jsv2/search.js?v=1603338118"></script>
    <script src="https://voso.vn/jsv2/style.js?v=1608046089"></script>
    <script src="https://voso.vn/jsv2/angularjs-dropdown-multiselect.min.js?v=1603338118"></script>
    <script src="https://voso.vn/jsv2/chat.js?v=1603338118"></script>
    <script src="https://voso.vn/jsv2/angularfire.min.js?v=1603338118"></script>
    <script src="https://voso.vn/jsv2/popup.js?v=1603338118"></script>
    <script src="https://voso.vn/jsv2/flashsale-homepage.js?v=1610286800"></script>
    <script src="https://voso.vn/jsv2/flashsale-page.js?v=1603338118"></script>
    <script src="https://voso.vn/jsv2/currency-mask.js?v=1603338118"></script>
    <script src="https://voso.vn/jsv2/toastr.min.js?v=1603338118"></script>
    <script src="https://voso.vn/jsv2/recommendation.js?v=1614350823"></script> <script>

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
   
    <div id="fb-root"></div>
    <script>
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
        });
    </script>
    @if( Session::has('flash_message'))
        <script>
            var message = $(".flash_message").text();
            toastr.success(message);
        </script>
    @endif
    @if( count($errors) > 0)
        <script>
            $(".error").each(function(){
                toastr.warning($(this).text());
            });
        </script>
    @endif
@endsection