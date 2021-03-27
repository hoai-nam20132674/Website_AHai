@extends('front-end.layout.default')
@section('body-name')
    body-product-browser
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
	    <meta property="og:title" content="Tìm kiếm từ khóa {{$request->keyword}}" />
	    <meta property="og:title" content="" />
	    <meta property="og:description" content="" />
	    <meta property="og:site_name" content="" />
	    <meta property="og:url" content="" />
	    <meta property="og:image" content="" />
	    <meta property="og:locale" content="vi_VN" />
	    <link rel="canonical" href="" /> 
	    <title>Tìm kiếm từ khóa {{$request->keyword}}</title>

	    <link href="/css/bootstrap.css?v=1568371445" rel="stylesheet">
	    <link href="/css/font-awesome.min.css?v=1566957476" rel="stylesheet">
	    <link href="/css/bootstrap.min.css?v=1603338119" rel="stylesheet">
	    <link href="/css/owl.carousel.min.css?v=1603338119" rel="stylesheet">
	    <link href="/css/toastr.min.css?v=1603338119" rel="stylesheet">
	    <link href="/css/fontawesome.css?v=1603338119" rel="stylesheet">
	    <link href="/css/cloudzoom.css?v=1603338119" rel="stylesheet">
	    <link href="/css/select2.min.css?v=1603338119" rel="stylesheet">
	    <link href="/css/select2-bootstrap4.min.css?v=1603338119" rel="stylesheet">
	    <link href="/css/pretty-checkbox.min.css?v=1603338119" rel="stylesheet">
	    <link href="/css/brands.css?v=1603338119" rel="stylesheet">
	    <link href="/css/solid.css?v=1603338119" rel="stylesheet">
	    <link href="/css/all.css?v=1603338119" rel="stylesheet">
	    <link href="/css/chat.css?v=1603338119" rel="stylesheet">
	    <link href="/css/card.css?v=1603338119" rel="stylesheet">
	    <link href="/css/jquery-ui.css?v=1603338119" rel="stylesheet">
	    <link href="/css/checkout.css?v=1610977888" rel="stylesheet">
	    <link href="/css/stylev2.css?v=1614350823" rel="stylesheet">
	    <link href="/css/style.css?v=1610977888" rel="stylesheet">
	    <link href="/css/custom.css?v=1614350823" rel="stylesheet">
	    <link href="/css/stars.css?v=1603338118" rel="stylesheet">
	    <link href="/css/product-detail.css?v=1612447411" rel="stylesheet">
	    <link href="/css/gio-hang.css?v=1612447411" rel="stylesheet">
	    <link href="/css/ban-do-dac-san.css?v=1612447411" rel="stylesheet">
	    <link href="/css/lich-su-don-hang.css?v=1610977888" rel="stylesheet">
	    <style>
		    .b__heart .b__heart--info .b__heart--content .f-items {
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

		    .modal.fade .modal-dialog{
		      transform: unset;
		    }

		    @media (min-width: 992px){
		      .f-items .f-items__ls {
		        display: flex;
		        height: inherit;
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
	<div class="b__browser--wapper" ng-controller="browse" data-ng-init="init(-1, -1)">
    <div class="container contaiver-v2">
      <div class="navbar-generic__back">
        <button class="top-referrer-detail-href">
          <i class="fa fa-arrow-left"></i>
          <span>Tìm kiếm từ khóa {{$request->keyword}}</span>
        </button>
      </div>
      <div class="b__browser--info">
        <nav class="b__breadcrumb" aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Trang chủ</a></li>
            <li class="breadcrumb-item active" aria-current="page">Tìm kiếm từ khóa {{$request->keyword}}</li>
          </ol>
        </nav>
        <div id="slideBrowser" class="owl-carousel b__banner--browser">
        	@foreach($sliders as $slider)
	          <div class="b-items">
	            <a href="{{$slider->href}}" target="{{$slider->target}}">
	              <img src="{{asset('uploads/images/sliders/'.$slider->url)}}" />
	            </a>
	          </div>
          	@endforeach
        </div>
        <div class="b__browser--content">
          <div class="b__browser--content_right">
            <div class="b__dropdown text-left">
              <label>Có {{count($products)}} kết quả tìm thấy với từ khóa <span style="color: #fff;background-color: #ee2624; padding: 2px 5px; border-radius: 5px;">{{$request->keyword}}</span></label>
              
            </div>
            <div class="b__browser--content_info">
            	@foreach($products as $item)
	            	<div class="f-items">
	            		<div class="f-items__info">
	            			@include('front-end.layout.product-item')
	            		</div>
	            	</div>
	            @endforeach
</div>
<div class="pagination-router">
	@php
		$items = $products;
	@endphp
  <ul class="pagination">
  	@if($items->currentPage() != 1)
		
		<li><a href="{{$items->url($items->currentPage()-1)}}">« Trước</a></li>
	@else
		
		<li class="disabled"><a href="{{$items->url($items->currentPage()-1)}}">« Trước</a></li>
	@endif
  	@for($i =1; $i<=$items->lastPage();$i++)
		@if($request->page == $i)
			
			<li class="active"><a href="{{$items->url($i)}}">{{$i}}</a></li>
		@else
			<li class=""><a href="{{$items->url($i)}}">{{$i}}</a></li>
		@endif
	@endfor
    @if( $items->currentPage() != $items->lastPage())
		
		<li><a href="{{$items->url($items->currentPage()+1)}}">Sau »</a></li>
	@else
		<li class="disabled"><a href="{{$items->url($items->currentPage()+1)}}">Sau »</a></li>
	@endif
    
   </ul>
  </div>
</div>
<div class="b__browser--content_left info_box_browser_right toggle-navbar">
  <span class="close"><i class="fas fa-times"></i></span>
  <div class="b__browser--content_wapper">
    <div id="all-categories" class="b__browser--box">
	    <h3>Tất Cả Các Danh Mục </h3>
	    <ul>
	    @foreach($categories as $c)
	      <li class="">
	        <a href="{{$c->url}}"><img width="20"  src="{{asset('uploads/images/products/categories/'.$c->avata)}}">{{$c->name}}</a>
	      </li>
	    @endforeach
	    </ul>
	</div>
    
  </div>
</div>
<div class="submenu-bg"></div>
</div>
</div>
</div>
</div>
<div class="clear-both" id="end-search"></div>
<script data-cfasync="false" src="https://voso.vn/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>
  var urlWithoutProvince = '/thoi-trang-nu-c104?order=xem-nhieu';
  var dataSearch = {"keyword":"/thoi-trang-nu-c104"};
  var keyword = dataSearch.keyword;
</script>
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

@endsection