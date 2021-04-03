@extends('front-end.layout.default')
@section('body-name')
    body-home-page
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
	    <meta name="description" content="{{$system->description}}" />
	    <meta property="og:type" content="website" />
	    <meta name="apple-itunes-app" content="">
	    <meta name="google-play-app" content="">
	    <meta property="og:description" content="{{$system->description}}" />
        <meta property="og:url" content="{{$system->website}}" />
        <meta property="og:image" content="" />
        <meta property="og:locale" content="vi_VN" />
         
        
	    <title>{{$system->title}}</title>

	    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
	    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
	    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
	    <link href="{{asset('css/owl.carousel.min.css')}}" rel="stylesheet">
	    <link href="{{asset('css/toastr.min.css')}}" rel="stylesheet">
	    <link href="{{asset('css/fontawesome.css')}}" rel="stylesheet">
	    <link href="{{asset('css/stylev2.css')}}" rel="stylesheet">
	    <link href="{{asset('css/all.css')}}" rel="stylesheet">
	    <link href="{{asset('css/chat.css')}}" rel="stylesheet">
	    <link href="{{asset('css/style.css')}}" rel="stylesheet">
	    <link href="{{asset('css/custom.css')}}" rel="stylesheet"> 
	    <style>
            .ads-footer .items {
                margin-right: 5px;
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
        <style>
            @media (max-width: 767px) {
                .b__banner--gr .b__banner--info {
                    display: none;
                }
            }
        </style>
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
                    @foreach($adss_header as $ads_header)
                    <div class="b__banner--top">
                        <a class="progressive replace" data-href="{{asset('uploads/images/adss/'.$ads_header->url)}}" href="{{$ads_header->href}}" target="{{$ads_header->target}}">
                            <img class="preview" src="{{asset('uploads/images/adss/'.$ads_header->url)}}" width="100%" />
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    
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
                                        <img class="preview" src="{{asset('images/loader.gif')}}" />
                                    </div>
                                    <div class="category-name">{{$categories[$i*2]->name}}</div>
                                </div>
                            </a>
                            
                            <a href="{{$categories[$i*2+1]->url}}">
                                <div class="list-category">
                                    <div class="category-thumbnail progressive replace" data-href="{{asset('uploads/images/products/categories/'.$categories[$i*2+1]->avata)}}">
                                        <img class="preview" src="{{asset('images/loader.gif')}}" />
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
                                            <img class="preview" src="{{asset('images/loader.gif')}}" />
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
                                        <img class="preview" src="{{asset('images/loader.gif')}}" />
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

</div>
<div class="container contaiver-v2">
    <div id="ads-body" class="owl-carousel b__banner--browser">
        @foreach($adss_body as $ads_body)
            
                <div class="items">
                    <a href="{{$ads_body->href}}" target="{{$ads_body->target}}" data-href="{{asset('uploads/images/adss/'.$ads_body->url)}}" class="flex100 progressive replace">
                        <img class="preview" src="{{asset('uploads/images/adss/'.$ads_body->url)}}" width="100%" />
                    </a>

                </div>
            
        @endforeach
       
    </div>
</div>

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
                    @if(count($adss_cate)>=1)
                    <div class="b__vosoMall--banner b__vosoMall--pc">
                        <a href="{{$adss_cate[0]->href}}" target="{{$adss_cate[0]->target}}" class="progressive replace" data-href="{{asset('uploads/images/adss/'.$adss_cate[0]->url)}}">
                            <img class="preview" src="{{asset('uploads/images/adss/'.$adss_cate[0]->url)}}" width="100%" />
                        </a>
                    </div>
                    @endif
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
                    <a href="#" class="ml-auto">Xem tất cả <i class="fas fa-angle-double-right"></i></a>
                </div>
            </div>
            <div class="b__vosoMall--content stretch">
                @if(count($adss_cate)>=2)
                <div class="b__vosoMall--banner b__vosoMall--pc">
                    <a href="{{$adss_cate[1]->href}}" target="{{$adss_cate[1]->target}}" class="progressive replace" data-href="{{asset('uploads/images/adss/'.$adss_cate[1]->url)}}">
                            <img class="preview" src="{{asset('uploads/images/adss/'.$adss_cate[1]->url)}}" width="100%" />
                        </a>
                </div>
                @endif
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
                    <a href="#" class="ml-auto">Xem tất cả <i class="fas fa-angle-double-right"></i></a>
                </div>
            </div>
            <div class="b__vosoMall--content stretch">
                @if(count($adss_cate)>=3)
                <div class="b__vosoMall--banner b__vosoMall--pc">
                    <a href="{{$adss_cate[2]->href}}" target="{{$adss_cate[2]->target}}" class="progressive replace" data-href="{{asset('uploads/images/adss/'.$adss_cate[2]->url)}}">
                            <img class="preview" src="{{asset('uploads/images/adss/'.$adss_cate[2]->url)}}" width="100%" />
                        </a>
                </div>
                @endif
                <div class="b__vosoMall--right ">


                    

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

</div>
<div class="container contaiver-v2">
    <div id="ads-footer" class="owl-carousel b__banner--browser">
        
        @foreach($adss_footer as $ads_footer)
           
                <div class="items">
                    <a href="{{$ads_footer->href}}" target="{{$ads_footer->target}}" data-href="{{asset('uploads/images/adss/'.$ads_footer->url)}}" class="flex100 progressive replace">
                        <img class="preview" src="" width="100%" />
                    </a>

                </div>
            
        @endforeach
       
    </div>
</div>
<br>

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
                    @php
                        $count = count($products);
                    @endphp
                    @for($i=0;$i<$count;$i++)
                    <div class="f-items">
                        <div class="box-pr-suggest">
                            @php
                                $item = $products[$i];
                            @endphp
                            @include('front-end.layout.product-item')
                        </div>
                    </div>
                    @endfor
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
    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{asset('js/yii.js')}}"></script>
    <script src="{{asset('js/bootstrap.js')}}"></script>
    <script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/progressive-image.js')}}"></script>
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/cloudzoom.js')}}"></script>
    <script src="{{asset('js/jstars.min.js')}}"></script>
    <script src="{{asset('js/style.js')}}"></script>
    <script src="{{asset('js/jquery.nstSlider.js')}}"></script>
    <script src="{{asset('js/jquery-ui.min.js')}}"></script>
    <script src="{{asset('js/utils.js')}}"></script>
    <script src="{{asset('js/inputmask.js')}}"></script>
    <script src="{{asset('js/imboclient.min.js')}}"></script>
    <script src="{{asset('js/angular.min.js')}}"></script>
    <script src="{{asset('js/angular-filedialog.js')}}"></script>
    <script src="{{asset('js/angular-ui-bootstrap.min.js')}}"></script>
    <script src="{{asset('js/moment.min.js')}}"></script>
    <script src="{{asset('js/angular-moment.min.js')}}"></script>
    <script src="{{asset('js/angular-local-storage.min.js')}}"></script>
    <script src="{{asset('js/customSelect.js')}}"></script>
    <script src="{{asset('js/angular-recaptcha.js')}}"></script>
    <script src="{{asset('js/text-angular-rangy.min.js')}}"></script>
    <script src="{{asset('js/text-angular-sanitize.min.js')}}"></script>
    <script src="{{asset('js/text-angular.min.js')}}"></script>
    <script src="{{asset('js/firebase-app.js')}}"></script>
    <script src="{{asset('js/firebase-messaging.js')}}"></script>
    <script src="https://www.gstatic.com/firebasejs/7.15.0/firebase-auth.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.15.0/firebase-database.js"></script>
    <script src="{{asset('js/app.js')}}"></script>
    <script src="{{asset('js/modal.js')}}"></script>
    <script src="{{asset('js/firebase-notification.js')}}"></script>
    <script src="{{asset('js/auth.js')}}"></script>
    <script src="{{asset('js/order.js')}}"></script>
    <script src="{{asset('js/search.js')}}"></script>
    <script src="{{asset('js/style-jsv2.js')}}"></script>
    <script src="{{asset('js/angularjs-dropdown-multiselect.min.js')}}"></script>
    <script src="{{asset('js/chat.js')}}"></script>
    <script src="{{asset('js/angularfire.min.js')}}"></script>
    <script src="{{asset('js/popup.js')}}"></script>
    <script src="{{asset('js/flashsale-homepage.js')}}"></script>
    <script src="{{asset('js/flashsale-page.js')}}"></script>
    <script src="{{asset('js/currency-mask.js')}}"></script>
    <script src="{{asset('js/toastr.min.js')}}"></script>
    <script src="{{asset('js/recommendation.js')}}"></script> <script>

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
            $("#ads-body").owlCarousel({
                items : 1,
                loop: true,
                autoplay : true,
              });
            $("#ads-footer").owlCarousel({
                loop: true,
                autoplay : true,
                margin:10,
                responsive:{
                    0:{ //for width 0px and up
                        items:1 //show only one item at a time
                    },
                    600:{ //for width 600px and up
                        items:2 //show 3 items at a time
                    },
                    1000:{ //for width 1000px and up
                        items:3 //show 5 items at a time
                    }
                }
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
    
    
@endsection