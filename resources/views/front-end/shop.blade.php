@extends('front-end.layout.default')
@section('head')
	<head>

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
	<link rel="shortcut icon" href="/static/v2/images/favicon.ico" />
	<title>Tạo chiến dịch đại lý bán hàng</title>

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
</head>
	
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
					<div class="col-md-3 col-sm-12">
						<div class="l-sidebar is-normal">
							<div class="accordion-2 hidden-xs">
								<button class="accordion"><img style="width: 20px;border-radius: 50%;margin-right: 10px;" src="https://st2.depositphotos.com/5266903/8119/v/950/depositphotos_81198408-stock-illustration-store-flat-red-color-rounded.jpg" alt="">Gian hàng</button>
								<div class="panel">
									<ul>
										<li class="active">
											<a href="/gian-hang-cua-toi.html">Danh sách sản phẩm</a>
										</li>
										
										<li class="">
											<a href="/danh-sach-don-hang-ban-hang-lien-ket.html">Đơn hàng đã bán</a>
										</li>
										
									</ul>
								</div>

								<button class="accordion"><img style="width: 20px;border-radius: 50%;margin-right: 10px;" src="https://images.assetsdelivery.com/compings_v2/koblizeek/koblizeek1901/koblizeek190100017.jpg" alt="">Tài khoản</button>
								<div class="panel">
									<ul>
										<li class="">
											<a href="/khach-hang.html">Thông tin cá nhân </a>
										</li>
										<li class="">
											<a href="/doi-mat-khau.html">Thay đổi mật khẩu </a>
										</li>
										
									</ul>
								</div>
								
								
								<button class="accordion">
									<img style="width: 20px;border-radius: 50%;margin-right: 10px;" src="https://previews.123rf.com/images/asmati/asmati1610/asmati161000005/63402423-ringing-bell-icon-white-icon-on-red-circle-.jpg" alt="">Thông báo</button>
									<div class="panel">
										<ul>
											<li class="">
												<a href="/thong-bao-cap-nhat-don-hang.html">
													<span></span>Cập nhật đơn hàng
												</a>
											</li>
											<li class="">
												<a href="/thong-bao-vi-voso.html">
													<span></span>Thay đổi Ví Voso
												</a>
											</li>
											<li class="">
												<a href="/thong-bao-khuyen-mai.html">
													<span></span>Khuyến mãi
												</a>
											</li>
											<li class="">
												<a href="/thong-bao-khac.html">
													<span></span>Thông báo khác
												</a>
											</li>
										</ul>
									</div>
								</div>
								<script data-cfasync="false" src="https://voso.vn/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>
									var acc = document.getElementsByClassName("accordion");
									var i;

									for (i = 0; i < acc.length; i++) {
										acc[i].addEventListener("click", function() {
											this.classList.toggle("active");
											var panel = this.nextElementSibling;
											if (panel.style.maxHeight) {
												panel.style.maxHeight = null;
											} else {
												panel.style.maxHeight = panel.scrollHeight + "px";
											}
										});
									}
								</script> </div>
							</div>
							<div class="col-md-9 col-sm-12">
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
													<h3>Gian hàng của tôi</h3>
												</div>
												<div class="col-md-6 col-sm-12 text-right">
													<div class="button_filter">
														<button class="btn btn-outline-primary" id="button">
															Thêm sản phẩm
															<i class="fa fa-plus"></i>
														</button>
													</div>
												</div>
											</div>
										</div>
										<div class="filter_form" style="display: none">
											<form method="get" action="">
												<div class="row form-affiliate">
													<div class="col-md-4">
														<div class="form-group">
															<label>Tên sản phẩm</label>
															<input type="text" class="form-control" placeholder="" name="name" value="">
														</div>
													</div>
													<div class="col-md-4">
														<div class="form-group">
															<label>Giá bán</label>
															<input type="text" class="form-control" placeholder="" name="id" value="">
														</div>
													</div>
													<div class="col-md-4">
														<div class="form-group">
															<label>Giá khuyến mại</label>
															<input type="text" class="form-control" placeholder="" name="id" value="">
														</div>
													</div>
													
												</div>

											</form>
										</div>
									</div>
											<div class="b__seller--box">
												<div class="b__title">
													<div class="form-row">
														<div class="col-md-9 col-sm-12" style="line-height: 28px;font-weight: 500">
															<h3>Danh sách sản phẩm</h3>
														</div>
														<div class="col-md-3 col-sm-12 text-right">
															<button class="btn btn-register btn-outline-danger" ng-click="deteleProduct()">Xóa tất cả khỏi gian hàng</button>
														</div>
													</div>
												</div>
												<div class="b__seller--gr">
													<ul>
														<li>
															<div class="card">
																<a href="/bo-pijama-lua-cao-cap-mau-ca-rot-p3106.html?o2o=535175">
																	<div class="b__img--card">
																		<img class="card-img-top" src="https://image.voso.vn/users/vosoimage/images/b83aeaa86158250eb682f877b2c45f16?t%5B0%5D=maxSize%3Awidth%3D255&t%5B1%5D=compress%3Alevel%3D100&accessToken=3287fe3834190762bb67b4ac81e2d6785c3cb750f2f897f71537578bf558d2fd" />
																	</div>
																</a>
																<div class="card-body">
																	<div class="product_name" style="overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-line-clamp: 2;-webkit-box-orient: vertical;min-height: 42px;">
																		<a href="/bo-pijama-lua-cao-cap-mau-ca-rot-p3106.html?o2o=535175">BỘ PIJAMA LỤA CAO CẤP - MÀU CÀ RỐT</a>
																	</div>
																	<div class="b__text" style="display: block;">
																		<h5 style="width: 50%; float: left;" class="card-title">250,000<sup>đ</sup></h5>
																		<span style="width: 50%; float: right;" class="c-product-item__discount">Đã bán: 3</span>
																	</div>
																	<div class="b__seller--button" style="display: flex">
																		<button style="width: 50%; margin-right: 2px" ng-click="shareFacebook('http://voso.vn/bo-pijama-lua-cao-cap-mau-ca-rot-p3106.html?o2o=535175')" class="btn btn-share btn-outline-primary">Chỉnh sửa</button>
																		<button ng-click="removeProducts(3106, true)" class="btn btn-outline-danger btn-cancel" style="width: 50%">Xóa bỏ</button>
																	</div>
																	
																	
																</div>
															</div>
														</li>
														<li>
															<div class="card">
																<a href="/bo-pijama-lua-cao-cap-mau-ca-rot-p3106.html?o2o=535175">
																	<div class="b__img--card">
																		<img class="card-img-top" src="https://image.voso.vn/users/vosoimage/images/b83aeaa86158250eb682f877b2c45f16?t%5B0%5D=maxSize%3Awidth%3D255&t%5B1%5D=compress%3Alevel%3D100&accessToken=3287fe3834190762bb67b4ac81e2d6785c3cb750f2f897f71537578bf558d2fd" />
																	</div>
																</a>
																<div class="card-body">
																	<div class="product_name" style="overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-line-clamp: 2;-webkit-box-orient: vertical;min-height: 42px;">
																		<a href="/bo-pijama-lua-cao-cap-mau-ca-rot-p3106.html?o2o=535175">BỘ PIJAMA LỤA CAO CẤP - MÀU CÀ RỐT</a>
																	</div>
																	<div class="b__text" style="display: block;">
																		<h5 style="width: 50%; float: left;" class="card-title">250,000<sup>đ</sup></h5>
																		<span style="width: 50%; float: right;" class="c-product-item__discount">Đã bán: 3</span>
																	</div>
																	<div class="b__seller--button" style="display: flex">
																		<button style="width: 50%; margin-right: 2px" ng-click="shareFacebook('http://voso.vn/bo-pijama-lua-cao-cap-mau-ca-rot-p3106.html?o2o=535175')" class="btn btn-share btn-outline-primary">Chỉnh sửa</button>
																		<button ng-click="removeProducts(3106, true)" class="btn btn-outline-danger btn-cancel" style="width: 50%">Xóa bỏ</button>
																	</div>
																	
																	
																</div>
															</div>
														</li>
														<li>
															<div class="card">
																<a href="/bo-pijama-lua-cao-cap-mau-ca-rot-p3106.html?o2o=535175">
																	<div class="b__img--card">
																		<img class="card-img-top" src="https://image.voso.vn/users/vosoimage/images/b83aeaa86158250eb682f877b2c45f16?t%5B0%5D=maxSize%3Awidth%3D255&t%5B1%5D=compress%3Alevel%3D100&accessToken=3287fe3834190762bb67b4ac81e2d6785c3cb750f2f897f71537578bf558d2fd" />
																	</div>
																</a>
																<div class="card-body">
																	<div class="product_name" style="overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-line-clamp: 2;-webkit-box-orient: vertical;min-height: 42px;">
																		<a href="/bo-pijama-lua-cao-cap-mau-ca-rot-p3106.html?o2o=535175">BỘ PIJAMA LỤA CAO CẤP - MÀU CÀ RỐT</a>
																	</div>
																	<div class="b__text" style="display: block;">
																		<h5 style="width: 50%; float: left;" class="card-title">250,000<sup>đ</sup></h5>
																		<span style="width: 50%; float: right;" class="c-product-item__discount">Đã bán: 3</span>
																	</div>
																	<div class="b__seller--button" style="display: flex">
																		<button style="width: 50%; margin-right: 2px" ng-click="shareFacebook('http://voso.vn/bo-pijama-lua-cao-cap-mau-ca-rot-p3106.html?o2o=535175')" class="btn btn-share btn-outline-primary">Chỉnh sửa</button>
																		<button ng-click="removeProducts(3106, true)" class="btn btn-outline-danger btn-cancel" style="width: 50%">Xóa bỏ</button>
																	</div>
																	
																	
																</div>
															</div>
														</li>
														<li>
															<div class="card">
																<a href="/bo-pijama-lua-cao-cap-mau-ca-rot-p3106.html?o2o=535175">
																	<div class="b__img--card">
																		<img class="card-img-top" src="https://image.voso.vn/users/vosoimage/images/b83aeaa86158250eb682f877b2c45f16?t%5B0%5D=maxSize%3Awidth%3D255&t%5B1%5D=compress%3Alevel%3D100&accessToken=3287fe3834190762bb67b4ac81e2d6785c3cb750f2f897f71537578bf558d2fd" />
																	</div>
																</a>
																<div class="card-body">
																	<div class="product_name" style="overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-line-clamp: 2;-webkit-box-orient: vertical;min-height: 42px;">
																		<a href="/bo-pijama-lua-cao-cap-mau-ca-rot-p3106.html?o2o=535175">BỘ PIJAMA LỤA CAO CẤP - MÀU CÀ RỐT</a>
																	</div>
																	<div class="b__text" style="display: block;">
																		<h5 style="width: 50%; float: left;" class="card-title">250,000<sup>đ</sup></h5>
																		<span style="width: 50%; float: right;" class="c-product-item__discount">Đã bán: 3</span>
																	</div>
																	<div class="b__seller--button" style="display: flex">
																		<button style="width: 50%; margin-right: 2px" ng-click="shareFacebook('http://voso.vn/bo-pijama-lua-cao-cap-mau-ca-rot-p3106.html?o2o=535175')" class="btn btn-share btn-outline-primary">Chỉnh sửa</button>
																		<button ng-click="removeProducts(3106, true)" class="btn btn-outline-danger btn-cancel" style="width: 50%">Xóa bỏ</button>
																	</div>
																	
																	
																</div>
															</div>
														</li>
														<li>
															<div class="card">
																<a href="/bo-pijama-lua-cao-cap-mau-ca-rot-p3106.html?o2o=535175">
																	<div class="b__img--card">
																		<img class="card-img-top" src="https://image.voso.vn/users/vosoimage/images/b83aeaa86158250eb682f877b2c45f16?t%5B0%5D=maxSize%3Awidth%3D255&t%5B1%5D=compress%3Alevel%3D100&accessToken=3287fe3834190762bb67b4ac81e2d6785c3cb750f2f897f71537578bf558d2fd" />
																	</div>
																</a>
																<div class="card-body">
																	<div class="product_name" style="overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-line-clamp: 2;-webkit-box-orient: vertical;min-height: 42px;">
																		<a href="/bo-pijama-lua-cao-cap-mau-ca-rot-p3106.html?o2o=535175">BỘ PIJAMA LỤA CAO CẤP - MÀU CÀ RỐT</a>
																	</div>
																	<div class="b__text" style="display: block;">
																		<h5 style="width: 50%; float: left;" class="card-title">250,000<sup>đ</sup></h5>
																		<span style="width: 50%; float: right;" class="c-product-item__discount">Đã bán: 3</span>
																	</div>
																	<div class="b__seller--button" style="display: flex">
																		<button style="width: 50%; margin-right: 2px" ng-click="shareFacebook('http://voso.vn/bo-pijama-lua-cao-cap-mau-ca-rot-p3106.html?o2o=535175')" class="btn btn-share btn-outline-primary">Chỉnh sửa</button>
																		<button ng-click="removeProducts(3106, true)" class="btn btn-outline-danger btn-cancel" style="width: 50%">Xóa bỏ</button>
																	</div>
																	
																	
																</div>
															</div>
														</li>
														<li>
															<div class="card">
																<a href="/bo-pijama-lua-cao-cap-mau-ca-rot-p3106.html?o2o=535175">
																	<div class="b__img--card">
																		<img class="card-img-top" src="https://image.voso.vn/users/vosoimage/images/b83aeaa86158250eb682f877b2c45f16?t%5B0%5D=maxSize%3Awidth%3D255&t%5B1%5D=compress%3Alevel%3D100&accessToken=3287fe3834190762bb67b4ac81e2d6785c3cb750f2f897f71537578bf558d2fd" />
																	</div>
																</a>
																<div class="card-body">
																	<div class="product_name" style="overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-line-clamp: 2;-webkit-box-orient: vertical;min-height: 42px;">
																		<a href="/bo-pijama-lua-cao-cap-mau-ca-rot-p3106.html?o2o=535175">BỘ PIJAMA LỤA CAO CẤP - MÀU CÀ RỐT</a>
																	</div>
																	<div class="b__text" style="display: block;">
																		<h5 style="width: 50%; float: left;" class="card-title">250,000<sup>đ</sup></h5>
																		<span style="width: 50%; float: right;" class="c-product-item__discount">Đã bán: 3</span>
																	</div>
																	<div class="b__seller--button" style="display: flex">
																		<button style="width: 50%; margin-right: 2px" ng-click="shareFacebook('http://voso.vn/bo-pijama-lua-cao-cap-mau-ca-rot-p3106.html?o2o=535175')" class="btn btn-share btn-outline-primary">Chỉnh sửa</button>
																		<button ng-click="removeProducts(3106, true)" class="btn btn-outline-danger btn-cancel" style="width: 50%">Xóa bỏ</button>
																	</div>
																	
																	
																</div>
															</div>
														</li>
														<li>
															<div class="card">
																<a href="/bo-pijama-lua-cao-cap-mau-ca-rot-p3106.html?o2o=535175">
																	<div class="b__img--card">
																		<img class="card-img-top" src="https://image.voso.vn/users/vosoimage/images/b83aeaa86158250eb682f877b2c45f16?t%5B0%5D=maxSize%3Awidth%3D255&t%5B1%5D=compress%3Alevel%3D100&accessToken=3287fe3834190762bb67b4ac81e2d6785c3cb750f2f897f71537578bf558d2fd" />
																	</div>
																</a>
																<div class="card-body">
																	<div class="product_name" style="overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-line-clamp: 2;-webkit-box-orient: vertical;min-height: 42px;">
																		<a href="/bo-pijama-lua-cao-cap-mau-ca-rot-p3106.html?o2o=535175">BỘ PIJAMA LỤA CAO CẤP - MÀU CÀ RỐT</a>
																	</div>
																	<div class="b__text" style="display: block;">
																		<h5 style="width: 50%; float: left;" class="card-title">250,000<sup>đ</sup></h5>
																		<span style="width: 50%; float: right;" class="c-product-item__discount">Đã bán: 3</span>
																	</div>
																	<div class="b__seller--button" style="display: flex">
																		<button style="width: 50%; margin-right: 2px" ng-click="shareFacebook('http://voso.vn/bo-pijama-lua-cao-cap-mau-ca-rot-p3106.html?o2o=535175')" class="btn btn-share btn-outline-primary">Chỉnh sửa</button>
																		<button ng-click="removeProducts(3106, true)" class="btn btn-outline-danger btn-cancel" style="width: 50%">Xóa bỏ</button>
																	</div>
																	
																	
																</div>
															</div>
														</li>
														<li>
															<div class="card">
																<a href="/bo-pijama-lua-cao-cap-mau-ca-rot-p3106.html?o2o=535175">
																	<div class="b__img--card">
																		<img class="card-img-top" src="https://image.voso.vn/users/vosoimage/images/b83aeaa86158250eb682f877b2c45f16?t%5B0%5D=maxSize%3Awidth%3D255&t%5B1%5D=compress%3Alevel%3D100&accessToken=3287fe3834190762bb67b4ac81e2d6785c3cb750f2f897f71537578bf558d2fd" />
																	</div>
																</a>
																<div class="card-body">
																	<div class="product_name" style="overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-line-clamp: 2;-webkit-box-orient: vertical;min-height: 42px;">
																		<a href="/bo-pijama-lua-cao-cap-mau-ca-rot-p3106.html?o2o=535175">BỘ PIJAMA LỤA CAO CẤP - MÀU CÀ RỐT</a>
																	</div>
																	<div class="b__text" style="display: block;">
																		<h5 style="width: 50%; float: left;" class="card-title">250,000<sup>đ</sup></h5>
																		<span style="width: 50%; float: right;" class="c-product-item__discount">Đã bán: 3</span>
																	</div>
																	<div class="b__seller--button" style="display: flex">
																		<button style="width: 50%; margin-right: 2px" ng-click="shareFacebook('http://voso.vn/bo-pijama-lua-cao-cap-mau-ca-rot-p3106.html?o2o=535175')" class="btn btn-share btn-outline-primary">Chỉnh sửa</button>
																		<button ng-click="removeProducts(3106, true)" class="btn btn-outline-danger btn-cancel" style="width: 50%">Xóa bỏ</button>
																	</div>
																	
																	
																</div>
															</div>
														</li>
														<li>
															<div class="card">
																<a href="/bo-pijama-lua-cao-cap-mau-ca-rot-p3106.html?o2o=535175">
																	<div class="b__img--card">
																		<img class="card-img-top" src="https://image.voso.vn/users/vosoimage/images/b83aeaa86158250eb682f877b2c45f16?t%5B0%5D=maxSize%3Awidth%3D255&t%5B1%5D=compress%3Alevel%3D100&accessToken=3287fe3834190762bb67b4ac81e2d6785c3cb750f2f897f71537578bf558d2fd" />
																	</div>
																</a>
																<div class="card-body">
																	<div class="product_name" style="overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-line-clamp: 2;-webkit-box-orient: vertical;min-height: 42px;">
																		<a href="/bo-pijama-lua-cao-cap-mau-ca-rot-p3106.html?o2o=535175">BỘ PIJAMA LỤA CAO CẤP - MÀU CÀ RỐT</a>
																	</div>
																	<div class="b__text" style="display: block;">
																		<h5 style="width: 50%; float: left;" class="card-title">250,000<sup>đ</sup></h5>
																		<span style="width: 50%; float: right;" class="c-product-item__discount">Đã bán: 3</span>
																	</div>
																	<div class="b__seller--button" style="display: flex">
																		<button style="width: 50%; margin-right: 2px" ng-click="shareFacebook('http://voso.vn/bo-pijama-lua-cao-cap-mau-ca-rot-p3106.html?o2o=535175')" class="btn btn-share btn-outline-primary">Chỉnh sửa</button>
																		<button ng-click="removeProducts(3106, true)" class="btn btn-outline-danger btn-cancel" style="width: 50%">Xóa bỏ</button>
																	</div>
																	
																	
																</div>
															</div>
														</li>
														<li>
															<div class="card">
																<a href="/bo-pijama-lua-cao-cap-mau-ca-rot-p3106.html?o2o=535175">
																	<div class="b__img--card">
																		<img class="card-img-top" src="https://image.voso.vn/users/vosoimage/images/b83aeaa86158250eb682f877b2c45f16?t%5B0%5D=maxSize%3Awidth%3D255&t%5B1%5D=compress%3Alevel%3D100&accessToken=3287fe3834190762bb67b4ac81e2d6785c3cb750f2f897f71537578bf558d2fd" />
																	</div>
																</a>
																<div class="card-body">
																	<div class="product_name" style="overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-line-clamp: 2;-webkit-box-orient: vertical;min-height: 42px;">
																		<a href="/bo-pijama-lua-cao-cap-mau-ca-rot-p3106.html?o2o=535175">BỘ PIJAMA LỤA CAO CẤP - MÀU CÀ RỐT</a>
																	</div>
																	<div class="b__text" style="display: block;">
																		<h5 style="width: 50%; float: left;" class="card-title">250,000<sup>đ</sup></h5>
																		<span style="width: 50%; float: right;" class="c-product-item__discount">Đã bán: 3</span>
																	</div>
																	<div class="b__seller--button" style="display: flex">
																		<button style="width: 50%; margin-right: 2px" ng-click="shareFacebook('http://voso.vn/bo-pijama-lua-cao-cap-mau-ca-rot-p3106.html?o2o=535175')" class="btn btn-share btn-outline-primary">Chỉnh sửa</button>
																		<button ng-click="removeProducts(3106, true)" class="btn btn-outline-danger btn-cancel" style="width: 50%">Xóa bỏ</button>
																	</div>
																	
																	
																</div>
															</div>
														</li>
													</ul>
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
@endsection