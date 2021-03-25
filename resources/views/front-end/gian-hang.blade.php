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
	    <title>{{$user->name_s}}</title>

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
        </button>
      </div>
      <div class="b__browser--info">
        <nav class="b__breadcrumb" aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">TRANG CHỦ</a></li>
            <li class="breadcrumb-item active"><a href="{{$user->name_s}}-si{{$user->id}}">{{$user->name_s}}</a></li>
          </ol>
        </nav>
        <div class="b__shop--info shop-own">
          <div class="b__shop--ls">
            <div class="b__shop--ls_content">
              <div class="b__shop--avatar">
                <img src="{{asset('uploads/images/users/avatars/'.$user->avatar)}}" />
              </div>
              <div class="b__shop--description">
                <h3>{{$user->name_s}}</h3>

                @if($user->status)
                <p><img style="padding-right: 3px" src="{{asset('images/online-status-icon.png')}}" />Đang hoạt động</p>
                @else
                <p><img style="padding-right: 3px" src="{{asset('images/offline-status-icon.png')}}" />Ngừng hoạt động</p>
                @endif
                <ul ng-controller="chatCtrl">
                  <li><a class="img_mess" href="javascript:;" ><img src="{{asset('images/icon_mess.png')}}" /> Chat ngay</a></li>
                  <li><a href="{{$user->name_s}}-si{{$user->id}}">Ghé thăm shop</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="b__shop--ls pd-top-17-mb shop-content-right">
            <div class="info-content-left">
              <div class="info-content">
                <label>Đánh giá:</label>
                <strong class="jstars" data-value="5"></strong>
              </div>
              <div class="info-content">
                <label>Số Sản Phẩm:</label>
                <strong>{{count($products)}}</strong>
              </div>
            </div>
            <div class="info-content-right">
              <div class="info-content">
              	@php
	              	Carbon\Carbon::setLocale('vi');
	              	$now = \Carbon\Carbon::now();
              	@endphp
                <label>Ngày Tham Gia:</label>
                <strong>{{\Carbon\Carbon::createFromTimestamp(strtotime($user->created_at))->diffForHumans($now)}}</strong>
              </div>
              <div class="info-content">
                <label>Địa chỉ:</label>
                <strong>{{$user->address}}</strong>
              </div>
            </div>
          </div>
        </div>
        <div class="b__browser--content">
          <div class="b__browser--content_right">
            
            <div class="b__browser--content_info">
            	@foreach($products as $item)
	              <div class="f-items">
	                <div class="f-items__info">
	                  @include('front-end.layout.product-item')
	                </div>
	              </div>
              	@endforeach
              
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
    var urlWithoutProvince = '/gic-store-s8590?order=xem-nhieu';
    var dataSearch = {"keyword":"/gic-store-s8590"};
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