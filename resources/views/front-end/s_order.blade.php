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
	<title>Đơn hàng bán</title>

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
	.order-detail-border{
		border: 2px solid red;
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
	<div class="b__seller--wapper affileate order-history">
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
						<div class="col-md-9 col-sm-12 pr-0 content-right">
							<ul class="nav nav-tabs">
								<li class="active"><a href="#">Tất cả({{count($orders)}})</a></li>
								<li ><a href="#">Chờ duyệt(0)</a></li>
								<li ><a href="#">Đang lấy hàng(0)</a></li>
								<li ><a href="#">Đang giao hàng(0)</a></li>
								<li ><a href="#">Đã giao(0)</a></li>
								<li ><a href="#">Đã hủy(0)</a></li>
							</ul>
							<div class="tab-content responsive-hide">
								<div id="home" class="tab-pane fade in active ">
									<div class="form-group search-bar">
										<input type="text" ng-model="code" ng-change="search();" class="form-control" placeholder="Tìm kiếm theo mã đơn hàng, mã bưu gửi">
									</div>
									<div class="order-content__header table-header border-bottom" style="padding: 8px 0px 0 7px; font-size: 13px;height: 35px;">
										<div class="order col-md-5 col-sm-12 font-weight-bold p-0">ĐƠN HÀNG</div>
										<div class="status-head col-md-2 text-center font-weight-bold">TRẠNG THÁI </div>
										<div class="col-md-2 font-weight-bold">SỐ LƯỢNG</div>
										<div class="total-head col-md-3 text-center font-weight-bold">TỔNG TIỀN</div>
										
									</div>
									@foreach($orders as $order)
									<div id="group" order-id="{{$order->id}}" class="order-card__content-wrapper ng-scope" >
										<div id="top" class="order-content__header">
											@php
												$phone = $order->phone;
												$user = App\User::where('phone',$phone)->get()->first();
												$check = 0;
												if(isset($user)){
													$check=1;
												}
												$totalPrice=0;
												
											@endphp
											<div class="purchase-card-left-top">
												<div href="/qua-tang-toan-quoc-s32695" class="shop-info">
													<div class="order-content__header__seller__name d-flex ng-scope" ng-controller="chatCtrl">
														@if($check)
														<div class="visible-xs">
															<div class="d-flex" a="" title="Quà tặng toàn quốc" href="/qua-tang-toan-quoc-s32695">
																<div class="avatar">
																	<img src="{{asset('uploads/images/users/avatars/'.$user->avatar)}}" alt="">
																</div>

																<a href="/qua-tang-toan-quoc-s32695" target="_blank" class="shop-name visible-xs ng-binding">{{$order->name}}</a>
															</div>
														</div>
														
														<a href="#chat" class="btn btn-primary visible-xs button-chat">
															<i class="fas fa-qrcode mr-1"></i>Mã đơn: MDH{{$order->id}}
														</a>
														@else
														<div class="visible-xs">
															<div class="d-flex" a="" title="" href="">
																<div class="avatar">
																	<img src="{{asset('images/avatar_default.png')}}" alt="">
																</div>

																<a href="/qua-tang-toan-quoc-s32695" target="_blank" class="shop-name visible-xs ng-binding">{{$order->name}}</a>
															</div>
														</div>
														<a href="#chat" class="btn btn-primary visible-xs button-chat">
															<i class="fas fa-qrcode mr-1"></i>Mã đơn: MDH{{$order->id}}
														</a>
														@endif

													</div>
												</div>
												<div>
													
													@if($order->status ==0)
														<div class="badge1 badge badge-pill pack-status visible-xs ng-binding badge-danger" style="padding: 3px;">
															<div class="form-group" style="margin-bottom: 0px;">
						                                        <select class="form-control ui-select ui-select" name="" id="">
						                                        	<option value="0">Chờ duyệt</option>
						                                        	<option value="1">Đang giao hàng</option>
						                                        	<option value="2">Đã giao hàng</option>
						                                        </select>
						                                    </div>
														</div>
													@elseif($order->status ==1)
														<div class="badge1 badge badge-pill pack-status visible-xs ng-binding badge-warning" style="padding: 3px;">
															<div class="form-group" style="margin-bottom: 0px;">
						                                        <select class="form-control ui-select ui-select" name="" id="">
						                                        	<option value="1">Đang giao hàng</option>
						                                        	<option value="0">Chờ duyệt</option>
						                                        	<option value="2">Đã giao hàng</option>
						                                        </select>
						                                    </div>
														</div>
													@else
														<div class="badge1 badge badge-pill pack-status visible-xs ng-binding badge-Success" style="padding: 3px;">
															<div class="form-group" style="margin-bottom: 0px;">
						                                        <select class="form-control ui-select ui-select" name="" id="">
						                                        	<option value="2">Đã giao hàng</option>
						                                        	<option value="0">Chờ duyệt</option>
						                                        	<option value="1">Đang giao hàng</option>
						                                        	
						                                        </select>
						                                    </div>
														</div>
													@endif
												</div>
												<div class="order-content__header__seller__view-shop-btn">
												</div>
											</div>
											<div>
												<!-- <a order-id="{{$order->id}}" href="{{URL::route('removeOrder',$order->id)}}" class=" remove-order mb-2 btn btn-danger btn-res detail-button hidden-xs">HỦY ĐƠN</a> -->
												<a href="#" id="{{$order->id}}" class="mb-2 btn btn-info btn-res detail-button hidden-xs show-detail">XEM CHI TIẾT</a>
											</div>
											
										</div>
										<div class="info-detail hidden" id="{{$order->id}}">
											<div class="b__title title_filter">
												<div class="form-row" style="padding-bottom: 10px">
													<div class="col-md-6 col-sm-12">
														<h3>Thông tin người mua</h3>
													</div>
													
												</div>
											</div>
											<div class="row">
												<div class="col-md-12">
						                            <div class="main-form">
						                                <div class="form-body">
						                                	<div class="row">
						                            			<div class="col-md-6">
								                                    <div class="form-group"  >
								                
								                                        <label for="name" class="control-label required">Họ tên</label>
								                                        <input disabled class="form-control" placeholder="Nhập họ tên" data-counter="120" value="{{$order->name}}" name="name" type="text" required id="name">
								                                    </div>
								                
								                                    
								                                    <input type="hidden" name="model" value="">
								                
								                                    <div class="clearfix"></div>
								                                </div>
								                                <div class="col-md-6">
								                                    <div class="form-group"  >
								                
								                                        <label for="name_s" class="control-label ">Số điện thoại</label>
								                                        <input disabled class="form-control" placeholder="Nhập tên gian hàng" data-counter="120" value="{{$order->phone}}" name="name_s" type="text" required id="name_s">
								                                    </div>
								                
								                                    
								                                    <input type="hidden" name="model" value="">
								                
								                                    <div class="clearfix"></div>
								                                </div>
								                            </div>
								                            <div class="row">
						                            			<div class="col-md-12">
								                                    <div class="form-group"  >
								                
								                                        <label for="phone" class="control-label required">Địa chỉ nhận hàng</label>
								                                        <input disabled class="form-control" placeholder="Nhập sđt" data-counter="120" value="{{$order->address}}" name="phone" type="text" required id="phone">
								                                    </div>
								                
								                                    
								                                    <input type="hidden" name="model" value="">
								                
								                                    <div class="clearfix"></div>
								                                </div>
								                                
								                            </div>
								                            <div class="row">
								                            	<div class="col-md-12">
								                            		<div class="form-group"  >
								                
								                                        <label for="messages" class="control-label required">Ghi chú</label>
								                                        <textarea disabled name="messages" placeholder="Lưu ý cho người bán..." rows="5" class="form-control customer-note" >{{$order->messages}}</textarea>
								                                    </div>
								                
								                                    
								                                    <input type="hidden" name="model" value="">
								                            	</div>
								                            </div>
						                                </div>
						                            </div>
						                    </div>
											</div>
										</div>
										@foreach($orders_detail as $order_detail)
											@if($order_detail->orders_id == $order->id)
												@php
													$product = App\Product::where('id',$order_detail->products_id)->get()->first();
													$totalPrice = $totalPrice + $order_detail->amount;
												@endphp
												<div id="mid" class="border-bottom cart-item p-0 ng-scope" >
													<div class="cart-item">
														<div class="cart-info col-md-5 col-sm-8 p-0">
															<a href="#">
																<div class="image-wrapper">
																	<img style="height: 65px" src="{{asset('uploads/images/products/avatars/'.$product->avata)}}">
																	<span class="b-order-code visible-xs ng-binding">MDH{{$order->id}}</span>
																</div>
															</a>
															<div class="product">

																<div class="order-product-name"><a href="/{{$product->url}}" class="ng-binding">{{$product->name}}</a></div>
															</div>
														</div>
														<div class="col-md-2 text-center hidden-xs text-center">
															@if($order_detail->status ==0)
																<div class="badge1 badge badge-pill pack-status ng-binding badge-danger" style="padding: 3px;">
																	<div class="form-group" style="margin-bottom: 0px;">
								                                        <select class="form-control ui-select ui-select" name="" id="">
								                                        	<option value="0">Chờ duyệt</option>
								                                        	<option value="1">Đang giao hàng</option>
								                                        	<option value="2">Đã giao hàng</option>
								                                        </select>
								                                    </div>
																</div>
															@elseif($order_detail->status ==1)
																<div class="badge1 badge badge-pill pack-status ng-binding badge-warning" style="padding: 3px;">
																	<div class="form-group" style="margin-bottom: 0px;">
								                                        <select class="form-control ui-select ui-select" name="" id="">
								                                        	<option value="1">Đang giao hàng</option>
								                                        	<option value="0">Chờ duyệt</option>
								                                        	<option value="2">Đã giao hàng</option>
								                                        </select>
								                                    </div>
																</div>
															@else
																<div class="badge1 badge badge-pill pack-status ng-binding badge-Success" style="padding: 3px;">
																	<div class="form-group" style="margin-bottom: 0px;">
								                                        <select class="form-control ui-select ui-select" name="" id="">
								                                        	<option value="2">Đã giao hàng</option>
								                                        	<option value="0">Chờ duyệt</option>
								                                        	<option value="1">Đang giao hàng</option>
								                                        	
								                                        </select>
								                                    </div>
																</div>
															@endif
														</div>
														<div class="see-more col-md-2 text-center">
															
															<!-- ngIf: package.status*1 == 5 -->
															<div class="product-quantity product-quantity-res p-absolute"><span class="ng-binding">SL: {{$order_detail->qty}}</span></div>
														</div>
														<div class="cart-price col-md-3 col-sm-4 p-relative text-center">
															<span class="price font-19 font-weight-bold ng-binding">{!!number_format($order_detail->amount)!!}<sup>đ</sup></span>
														</div>
														
													</div>
												</div>
												<br>
												
											@else
											@endif
										@endforeach
										<div class="purchase-card"></div>
										<div id="bottom" class="purchase-card">
											<div class="purchase-card-left d-flex p-relative">
												<div class="shop-info">
													@if($check)
														<a class="avatar" title="Quà tặng toàn quốc" href="/qua-tang-toan-quoc-s32695">
															<img src="{{asset('uploads/images/users/avatars/'.$user->avatar)}}" alt="">
														</a>
														<div class="order-content__header__seller__name d-flex ng-scope" style="margin: 0 10px" ng-controller="chatCtrl">
															<a title="" href="#" target="_blank" class="shop-name ng-binding">{{$order->name}} - {{$order->phone}}</a>
															
															<!-- <a href="#chat" class="btn btn-primary hidden-xs button-chat">
																<i class="fas fa-qrcode mr-1"></i>Chat với người mua
															</a> -->
															

														</div>
													@else
														<a class="avatar" title="Quà tặng toàn quốc" href="/qua-tang-toan-quoc-s32695">
															<img src="{{asset('images/avatar_default.png')}}" alt="">
														</a>
														<div class="order-content__header__seller__name d-flex ng-scope" style="margin: 0 10px" ng-controller="chatCtrl">
															<a title="" href="#" target="_blank" class="shop-name ng-binding">{{$order->name}}  - {{$order->phone}}</a>
														</div>
													@endif
												</div>

												<!-- ngIf: !package.hasRating && package.status*1 == 5 -->
											</div>
											<div class="order-info-bottom">
												<div class="rating-mb visible-xs">
													<!-- <a order-id="{{$order->id}}" href="{{URL::route('removeOrder',$order->id)}}" class="remove-order mb-2 btn btn-danger btn-res detail-button visible-xs">HỦY ĐƠN</a> -->
													<a href="#" id="{{$order->id}}" class="mb-2 btn btn-info btn-res detail-button visible-xs show-detail">XEM CHI TIẾT</a>
													</div>
													<div class="purchase-card-right p-relative">
														<span class="purchase-id hidden-xs mr-4">Mã đơn hàng: <span class="order-code font-weight-bold ng-binding">MDH-{{$order->id}}</span></span>
														@php
	                                                		Carbon\Carbon::setLocale('vi');
					                                        $now = \Carbon\Carbon::now();
	                                                	@endphp
														<span class="purchase-time hidden-xs">Ngày tạo: <span class="font-weight-bold ng-binding">{{\Carbon\Carbon::createFromTimestamp(strtotime($order->created_at))->toDateString()}}</span></span>
														<span class="price-res font-weight-bold font-16 visible-xs">Tổng tiền: <span class="history-order-total-value ng-binding">{!!number_format($totalPrice)!!}<sup>đ</sup></span></span>
													</div>
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
	</div>
	<style>
	    .modal-dialog {
	        max-width: 730px;
	    }
	    .rating-label{
	        margin-right: 5px;
	        user-select: none;
	    }
	    .rating-text{
	        display: block;
	        border: 1px solid #ada7a7;
	        border-radius: 50px;
	        padding: 3px 12px;
	    }
	    .rating-label:hover .rating-text{
	        border: 1px solid #0971ce;
	    }
	    .rating-label .active{
	        border: 1px solid #0971ce;
	        color: #0971ce;
	    }
	    .mg-b-7{
	        margin-bottom: 7px;
	        background: #f7f7f7;
	        padding: 10px 10px;
	    }
	    .image-group{

	    }
	    .image-group .image-item{
	        width: 50px;
	        margin-right: 5px;
	        float: left;
	        position: relative;
	    }
	    .image-group .image-item .image-img{
	        width: 50px;
	        height: 50px;
	    }
	    .image-group .image-item .image-remove{
	        position: absolute;
	        top: 0;
	        right: 0;
	        background: #5d5b5b;
	        color: #fff;
	        width: 16px;
	        height: 16px;
	        text-align: center;
	        line-height: 16px;
	    }
	    .image-group .image-item .image-add{
	        width: 50px;
	        position: relative;
	        height: 50px;
	        text-align: center;
	        border: 1px dashed #777272;
	        padding-top: 4px;
	    }
	    .image-group .image-item .image-add .image-add-img{
	        width: 25px;
	    }
	    .image-group .image-item .image-add .image-add-text{
	        font-size: 11px;
	        color: #060cd0;
	        display: block;
	        line-height: 20px;
	    }
	</style>
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
				
@endsection
@section('js')
							<script>
								var baseUrl = '';
								var csrf_token = 'iVZtMW8C3OyM2PAP7-VFxyOx3xUYufETm_byfqGGxo_zGFR6I2WKg8-VhWGagXO-RPmMTFSKvCXSxplLy-Sr2g==' ? 'iVZtMW8C3OyM2PAP7-VFxyOx3xUYufETm_byfqGGxo_zGFR6I2WKg8-VhWGagXO-RPmMTFSKvCXSxplLy-Sr2g==' : '';
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
	<script type="text/javascript">
		$(document).on('click', '.remove-order', function(event) {
			event.preventDefault();
			url = $(this).attr('href');
			order_id = $(this).attr('order-id');
			swal({
			  title: "Bạn có chắc muốn hủy đơn hàng",
			  text: "Đơn hàng sẽ bị xóa vĩnh viễn không thể hoàn tác",
			  icon: "warning",
			  buttons: true,
			  dangerMode: true,
			})
			.then((willDelete) => {
			  if (willDelete) {
			    $.ajax({
	                type: 'GET',
	                url: url,
	                dataType: 'html',
	                success: function(data) {
	                	$('#group[order-id='+order_id+']').remove();
	                    toastr.success('Đã hủy đơn hàng thành công');

	                }
	            });
			  } else {
			    
			  }
			});
		});
		
	</script>
	<script type="text/javascript">
		$(document).on('click', '.show-detail', function(event) {
			event.preventDefault();
			id = $(this).attr('id');

			if($('.info-detail[id="'+id+'"]').hasClass("hidden")){
				$('div #group').each(function(){
					if($(this).hasClass("order-detail-border")){
						$(this).removeClass("order-detail-border");
						order_id = $(this).attr('order-id');
						$('.show-detail[id="'+order_id+'"]').text('Xem chi tiết')
						$('.show-detail[id="'+order_id+'"]').removeClass('btn-danger');
						$('.show-detail[id="'+order_id+'"]').addClass('btn-info');
					}
					else{

					}
				});
				$('div .info-detail').each(function(){
					if($(this).hasClass("hidden")){

					}
					else{
						$(this).addClass("hidden");
					}
					
				});
				$('div #group[order-id="'+id+'"]').addClass("order-detail-border");
				$('div .info-detail[id="'+id+'"]').removeClass("hidden");
				$(this).text('Thu gọn');
				$(this).removeClass('btn-info');
				$(this).addClass('btn-danger');

				
				
			}
			else{
				$('div #group').each(function(){
					if($(this).hasClass("order-detail-border")){
						$(this).removeClass("order-detail-border");
					}
					else{

					}
				});
				$('div .info-detail').each(function(){
					if($(this).hasClass("hidden")){

					}
					else{
						$(this).addClass("hidden");
					}
					
				});
				$(this).text('Xem chi tiết');
				$(this).removeClass('btn-danger');
				$(this).addClass('btn-info');
				// $('#group[order-id="'+id+'"]').removeClass("order-detail-border");
				// $('.info-detail[id="'+id+'"]').addClass("hidden");
				
			}
			console.log(id);
		});
	</script>

    
@endsection