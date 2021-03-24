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
	<title>Gian hàng</title>

	<link href="{{asset('css/bootstrap.css?v=1568371445')}}" rel="stylesheet">
    <link href="{{asset('css/font-awesome.min.css?v=1566957476')}}" rel="stylesheet">
    <link href="{{asset('css/bootstrap.min.css?v=1603338119')}}" rel="stylesheet">
    <link href="{{asset('css/owl.carousel.min.css?v=1603338119')}}" rel="stylesheet">
    <link href="{{asset('css/toastr.min.css?v=1603338119')}}" rel="stylesheet">
    <link href="{{asset('css/fontawesome.css?v=1603338119')}}" rel="stylesheet">
    <link href="{{asset('css/cloudzoom.css?v=1603338119')}}" rel="stylesheet">
    <link href="{{asset('css/select2.min.css?v=1603338119')}}" rel="stylesheet">
    <link href="{{asset('css/select2-bootstrap4.min.css?v=1603338119')}}" rel="stylesheet">
    <link href="{{asset('css/pretty-checkbox.min.css?v=1603338119')}}" rel="stylesheet">
    <link href="{{asset('css/brands.css?v=1603338119')}}" rel="stylesheet">
    <link href="{{asset('css/solid.css?v=1603338119')}}" rel="stylesheet">
    <link href="{{asset('css/all.css?v=1603338119')}}" rel="stylesheet">
    <link href="{{asset('css/chat.css?v=1603338119')}}" rel="stylesheet">
    <link href="{{asset('css/card.css?v=1603338119')}}" rel="stylesheet">
    <link href="{{asset('css/jquery-ui.css?v=1603338119')}}" rel="stylesheet">
    <link href="{{asset('css/checkout.css?v=1610977888')}}" rel="stylesheet">
    <link href="{{asset('css/stylev2.css?v=1614350823')}}" rel="stylesheet">
    <link href="{{asset('css/style.css?v=1610977888')}}" rel="stylesheet">
    <link href="{{asset('css/custom.css?v=1614350823')}}" rel="stylesheet">
    <link href="{{asset('css/stars.css?v=1603338118')}}" rel="stylesheet">
    <link href="{{asset('css/product-detail.css?v=1612447411')}}" rel="stylesheet">
    <link href="{{asset('css/gio-hang.css?v=1612447411')}}" rel="stylesheet">
    <link href="{{asset('css/ban-do-dac-san.css?v=1612447411')}}" rel="stylesheet">
    <link href="{{asset('css/lich-su-don-hang.css?v=1610977888')}}" rel="stylesheet">
    <!-- // -->
   	<script type="text/javascript" src="{{asset('auth/ckeditor/ckeditor.js')}}"></script>
    <script type="text/javascript" src="{{asset('auth/ckfinder/ckfinder.js')}}"></script>
    <!-- // -->
    <style type="text/css">
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
	.select2-container .select2-selection--single{
		height: 34px;
	}
	.navbar-generic__back {
		display: none;
	}
	.select2-container--default .select2-selection--single .select2-selection__rendered {
		line-height: 34px;
	}
	.b__seller--wapper .b__seller--info .b__seller--right .b__title h3 {
		padding-bottom: 0;
		margin-bottom: 0;
		line-height: 33px;
	}
	.b__seller--gr .card:hover {
		box-shadow: 0 2px 4px 0 rgba(0,0,0,.25);
		-webkit-transform: all .3s ease-in-out;
		-ms-transform: all .3s ease-in-out;
		transform: all .3s ease-in-out;
	}
	.file-upload-input {
		opacity: 0;
		position: absolute;
	    margin: 0;
	    padding: 0;
	    width: 100%;
	    height: 100%;
	    outline: none;
	    opacity: 0;
	    cursor: pointer;
	    z-index: 100;
	    top: 0px;
	    left: 0px;
	}
	.file-upload-content {
		position: relative;
	}
	.meta-boxes .widget-title {
	    cursor: move;
	    overflow: hidden;
	    height: 35px;
	    border-bottom: 1px solid #eee;
	    padding: 0 5px;
	    background: none;
	}
	.meta-boxes .widget-title>h4 {
	    line-height: 35px;
	    height: 35px;
	}
	.widget {
	    background: #fff;
	    clear: both;
	    margin-bottom: 20px;
	}
	.btn:not(.btn-sm):not(.btn-lg) {
	    line-height: 1.44;
	}
	.widget-title>h4 {
	    float: left;
	    font-size: 14px;
	    font-weight: 700;
	    line-height: 45px;
	    height: 45px;
	    overflow: hidden;
	    margin: 0;
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
	<div class="b__seller--wapper affileate">
	<div class="container contaiver-v2">
		<nav class="b__breadcrumb--seller" aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="/">Trang chủ</a></li>
				<li class="breadcrumb-item active" aria-current="page">Gian hàng của tôi</li>
			</ol>
		</nav>
		<div class="b__seller--info">
			<div class="container p-0">
				<div class="row">
					@include('front-end.layout.sidebar_merchant')
							<div class="col-md-9 col-sm-12">
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
								<div class="b__seller--right b__seller--ls product-affiliate" ng-controller="create-o2o-campaign" ng-cloak>
									<!-- <div class="b__seller--box" style="padding: 10px">
										<div class="form-row">
											<div class="col-md-9 col-sm-12" style="line-height: 28px;font-weight: 500">



												Vui lòng cập nhật đầy đủ thông tin gian hàng
											</div>
											<div class="col-md-3 col-sm-12 text-right">
												<a href="/chinh-sua-thong-tin-ban-hang-lien-ket.html" class="btn btn-outline-primary">Cập nhật</a>
											</div>
										</div>
									</div> -->
									
									<div class="b__seller--box">
										<div class="b__title title_filter">
											<div class="form-row" style="padding-bottom: 10px">
												<div class="col-md-6 col-sm-12">
													<h3>Thông tin cá nhân</h3>
												</div>
												
											</div>
										</div>
										<div class="filter_form" >
											<div id="main" style="padding-left: 0px;">
									            <form method="POST" action="{{URL::route('merchantPostEditPassword')}}" enctype="multipart/form-data" accept-charset="UTF-8" id="form_1aa3f76ebce588e61c3b18ff42edfa1a">
									            <input type="hidden" name="_token" value="{{ csrf_token()}}">
									    
									                <div class="row">
									                    <div class="col-md-9">
									                            <div class="main-form">
									                                <div class="form-body">
									                                	<div class="row">
									                                		<div class="col-md-3">
									                                			<label for="old_password" class="control-label required">Mật khẩu cũ</label>
									                                		</div>
									                            			<div class="col-md-6">
											                                    <div class="form-group"  >
											                
											                                        
											                                        <input class="form-control" placeholder="Nhập mật khẩu cũ" data-counter="120" value="" name="old_password" type="text" required id="old_password">
											                                    </div>
											                
											                                    
											                                    <input type="hidden" name="model" value="">
											                
											                                    <div class="clearfix"></div>
											                                </div>
											                                
											                            </div>
											                            <div class="row">
											                            	<div class="col-md-3"><label for="password" class="control-label required">Mật khẩu mới</label></div>
									                            			<div class="col-md-6">
											                                    <div class="form-group"  >
											                
											                                        
											                                        <input class="form-control" placeholder="Nhập mật khẩu mới" data-counter="120" value="" name="password" type="text" required id="password">
											                                    </div>
											                
											                                    
											                                    <input type="hidden" name="model" value="">
											                
											                                    <div class="clearfix"></div>
											                                </div>
											                            </div>
											                            <div class="row">
											                            	<div class="col-md-3"><label for="confirm_password" class="control-label required">Nhập lại mật khẩu mới</label></div>
											                            	<div class="col-md-6">
											                                    <div class="form-group"  >
											                
											                                        
											                                        <input class="form-control" placeholder="Nhập lại mật khẩu mới" data-counter="120" value="" name="confirm_password" type="text" required id="confirm_password">
											                                    </div>
											                
											                                    
											                                    <input type="hidden" name="model" value="">
											                
											                                    <div class="clearfix"></div>
											                                </div>
											                            </div>
									                                </div>
									                            </div>
									                    </div>
									                    
									                </div>
									                <div class="row">
									                	<div class="col-md-12">
									                		<div class="widget-body" >
								                                <div class="btn-set">
								                                    <button type="submit" name="submit" value="save" class="btn btn-danger" style="width: 100%">
								                                        <i class="fa fa-save"></i> Cập nhật mật khẩu
								                                    </button>
								                                    &nbsp;
								                                   
								                                </div>
								                            </div>
									                	</div>
									                </div>

									            </form>
									            
									        
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
				<style>
					.popup_copy_url{
						position: fixed;
						top: 0;
						left: 0;
						width: 100%;
						height: 100%;
						/* background: rgba(0,0,0,0.5); */
						z-index: 9999;
						display: none;
					}
					.popup_content{
						width: 300px;
						line-height: 230px;
						height: 230px;
						background: rgba(0,0,0,0.5);
						position: absolute;
						left: 50%;
						top: 50%;
						-ms-transform: translate(-50%,-50%);
						-webkit-transform: translate(-50%,-50%);
						transform: translate(-50%,-50%);
					}
					.popup_content p{
						color: #fff;
						font-size: 20px;
						text-align: center;
					}
				</style>
				<div id="popup_copy_url" class="popup_copy_url">
					<div class="popup_content">
						<p>Copy link chia sẻ thành công</p>
					</div>
				</div>
				<script>
					var brandIds = null;
					var merchantIds = null;
					var categoryIds = null;
					var provinceIds = null;
					var order = 0;
				</script>
				<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
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
    <!-- // -->
    
    
    <script src="{{asset('js/admin/upload-image.js')}}"></script>
    <script type="text/javascript">
			
		function more_image(){
			var i = parseInt($("input[type=file]").length);
			i=i+1;
			var more_image = $("#more_image");
			more_image.append('<div class="col-md-3 col-xs-3" style="width:33%" ><div class="file-upload"><div class="file-upload-content file-upload-content'+i+'" style="position: relative;"><img width="100%" class="file-upload-image file-upload-image'+i+'" src="{{asset("uploads/images/icon-image.gif")}}" alt="your image" /><div class="image-title-wrap image-title-wrap'+i+'" style="position: absolute;top: 0px; right: 0px;"><button type="button" onclick="removeUploadTest('+i+')" class="remove-image">Ảnh chi tiết</button></div><input style="z-index: 100; position: absolute; top: 0px; left: 0px;" class="file-upload-input file-upload-input'+i+'" type="file" name="images[]" onchange="readURLTest(this,'+i+');" accept="image/*" /></div></div></div>');
			i++;
		};
        function importDataValue(){
            // var value = $("#user_id option[value=" + $('#input[name="user_id"]').val() + "]").attr('data-value');
            var input_value = $('input[name="user_id"]').val();
            var e = $('#user_id').children('option[value="'+input_value+'"]').attr('data-value');
            e = input_value+'-'+e;
            if(e=='-undefined'){
                $('input[name="user_id"]').val('');
            }
            else{
                $('input[name="user_id"]').val(e);
            }
            console.log(e.length);
        }
		
	</script>
	<script type="text/javascript">
	    function convertToSlug(text){
	        var slug;
	        //Đổi chữ hoa thành chữ thường
	        slug = text.toLowerCase();
	     
	        //Đổi ký tự có dấu thành không dấu
	        slug = slug.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, 'a');
	        slug = slug.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'e');
	        slug = slug.replace(/i|í|ì|ỉ|ĩ|ị/gi, 'i');
	        slug = slug.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, 'o');
	        slug = slug.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'u');
	        slug = slug.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'y');
	        slug = slug.replace(/đ/gi, 'd');
	        //Xóa các ký tự đặt biệt
	        slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi, '');
	        //Đổi khoảng trắng thành ký tự gạch ngang
	        slug = slug.replace(/ /gi, "-");
	        //Đổi nhiều ký tự gạch ngang liên tiếp thành 1 ký tự gạch ngang
	        //Phòng trường hợp người nhập vào quá nhiều ký tự trắng
	        slug = slug.replace(/\-\-\-\-\-/gi, '-');
	        slug = slug.replace(/\-\-\-\-/gi, '-');
	        slug = slug.replace(/\-\-\-/gi, '-');
	        slug = slug.replace(/\-\-/gi, '-');
	        //Xóa các ký tự gạch ngang ở đầu và cuối
	        slug = '@' + slug + '@';
	        slug = slug.replace(/\@\-|\-\@|\@/gi, '');
	        return slug;
	    }
	     $(document).ready(function() {
	            var title = $('input[name="title"]').val();
	            var url = $('input[name="url"]').val();
	            var seo_description = $('textarea[name="seo_description"]').val();
	            $('.page-title-seo').empty();
	            $('.page-title-seo').append(title);
	            $('.page-url-seo').empty();
	            $('.page-url-seo').append('<p>https://domain/'+url+'</p>');
	            $('.page-description-seo').empty();
	            $('.page-description-seo').append(seo_description);
	            
	     });
	     function seo_preview(){
	            var name = $('input[name="name"]').val();
	            var title = $('input[name="title"]').val();
	            var title2 = $('input[name="title"]').attr('value');
	            var url = $('input[name="url"]').val();
	            var seo_description = $('textarea[name="seo_description"]').val();
	            if(title2 ==''){
	                url = convertToSlug(name);
	                $('input[name="url"]').val(url);
	            }
	            else{
	                
	            }
	            
	            
	            $('.page-title-seo').empty();
	            $('.page-title-seo').append(title);
	            $('.page-url-seo').empty();
	            $('.page-url-seo').append('<p>https://domain/'+url+'</p>');
	            $('.page-description-seo').empty();
	            $('.page-description-seo').append(seo_description);
	     }
	    
	</script>

    <!-- // -->
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
    <!-- Ckeditor config -->
@endsection