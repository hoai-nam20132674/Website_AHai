@extends('front-end.layout.default')
@section('meta')
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">			
	<title>{{$service->title}}</title>
	<meta name="description" content="{{$service->seo_description}}">
	<meta name="keywords" content="{{$service->seo_keyword}}"/>		
	<link rel="canonical" href="{{$system->website}}/{{$service->url}}"/>
	<meta name='revisit-after' content='1 days' />
	<meta name="robots" content="noodp,index,follow" />
	<link rel="icon" href="{{asset('uploads/images/systems/'.$system->shortcut_logo)}}" type="image/x-icon" />
	<meta property="og:type" content="website">
	<meta property="og:title" content="{{$service->title}}">
	<meta property="og:image" content="{{asset('uploads/images/services/'.$service->avata)}}">
	<meta property="og:image:secure_url" content="{{asset('uploads/images/services/'.$service->avata)}}">
	<meta property="og:description" content="{{$service->seo_description}}">
	<meta property="og:url" content="{{$system->website}}/{{$service->url}}">
	<meta property="og:site_name" content="{{$system->name}}">
@endsection
@section('css')
	<link href="{{asset('css/bootstrap.scss.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('css/plugin.scss.css')}}" rel="stylesheet" type="text/css" />							
	<link href="{{asset('css/base.scss.css')}}" rel="stylesheet" type="text/css" />	
	<link href="{{asset('css/evo-main.scss.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('css/slick.scss.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('css/evo-index.scss.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('css/evo-dich-vu.scss.css')}}" rel="stylesheet" type="text/css" />
	
	
@endsection
@section('body_class')
bg-body product-dich-vu
@endsection
@section('content')
	<section class="bread-crumb margin-bottom-10">
		<div class="container">
			<ul class="breadcrumb" itemscope itemtype="">						
				<li class="home" itemprop="itemListElement" itemscope itemtype="">
					<a itemprop="item" href="/" title="Trang chủ">
						<span itemprop="name">Trang chủ</span>
						<meta itemprop="position" content="1" />
					</a>
					<span><i class="fa fa-angle-right"></i></span>
				</li>
				
				
				<li itemprop="itemListElement" itemscope itemtype="">
					<span itemprop="name">{{$service->name}}</span>
					<meta itemprop="position" content="3" />
				</li>
				
			</ul>
		</div>
	</section>
	<div id="product" class="productDetail-page product-dich-vu" itemscope itemtype="">
		
		<div class="container">
			<div class="row product-detail-wrapper">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="row product-detail-main pr_style_01">
						
						<div class="col-md-12 col-sm-12 col-xs-12 product-content-desc details-pro" id="detail-product">
							<div class="product-title">
								<h1 class="title-head">{{$service->title}}</h1>
							</div>
							<div class="product-description">
								<!-- <div class="contact" style="border: 1px solid #cca900; border-radius: 5px; padding: 10px;">
									<div>
										<p><i class="fa fa-hand-o-right" style="color: green;"></i> Quý khách quan tâm đến dịch vụ mà khách hàng sử dụng tại Dental Plus có thể liên hệ số điện thoại bên dưới để được tư vấn trực tiếp hoặc click <span class="badge badge-warning" style="background: #dcb048;">đăng ký tư vấn</span> và để lại thông tin trong form đăng ký. Đội ngũ y bác sỹ của Dental Plus sẽ liên hệ ngay cho quý khách</p>
									</div>
									<div class="row-flex" >
									
									
										<br>
										<a class="service_button" style="font-weight: 800;" href="tel:{{$system->phone}}" title="Liên hệ {{$system->phone}}"><i class="fa fa-phone-square"></i> Liên hệ {{$system->phone}}</a>
										
										<button class="service_button" style="font-weight: 800;" type="button" data-toggle="modal" data-target="#myModalCall">
											Đăng ký tư vấn
										</button>
									</div>
								</div> -->
								<div class="description-content">
									
									{!!$service->content!!}
									
									
								</div>
								<div class="contact" style="border: 1px solid #cca900; border-radius: 5px; padding: 10px;">
									<div>
										<p><i class="fa fa-hand-o-right" style="color: green;"></i> Quý khách quan tâm đến dịch vụ <span class="badge badge-success" style="background: #006cab;">{{$service->name}}</span> tại Dental Plus có thể liên hệ số điện thoại bên dưới để được tư vấn trực tiếp hoặc click <span class="badge badge-warning" style="background: #dcb048;">đăng ký tư vấn</span> và để lại thông tin trong form đăng ký. Đội ngũ y bác sỹ của Dental Plus sẽ liên hệ ngay cho quý khách</p>
									</div>
									<div class="row-flex" >
									
									
										<br>
										<a class="service_button" style="font-weight: 800;" href="tel:{{$system->phone}}" title="Liên hệ {{$system->phone}}"><i class="fa fa-phone-square"></i> Liên hệ {{$system->phone}}</a>
										
										<button class="service_button" style="font-weight: 800;" type="button" data-toggle="modal" data-target="#myModalCall">
											Đăng ký tư vấn
										</button>
									</div>
								</div>
								
							</div>
						</div>
					</div>
				</div>					
				
				
				
				
									
				
				<div class="list-productRelated clearfix">
					<div class="heading-title text-center">
						<h2>DỊCH VỤ KHÁC</h2>
					</div>
					<div class="evo-owl-product clearfix">
						@foreach($services as $service)
							<div class="evo-slick">
								
								<div class="evo-product-block-item product.dich-vu">
									<div class="product-img">
										
										<a href="/{{$service->url}}" title="{{$service->title}}" class="image-resize">
											<img class="lazy" src="{{asset('uploads/images/services/'.$service->avata)}}" data-src="{{asset('uploads/images/services/'.$service->avata)}}" alt="{{$service->title}}" />
											
											<img class="lazy hidden-sm hidden-xs" src="{{asset('uploads/images/services/'.$service->avata)}}" data-src="{{asset('uploads/images/services/'.$service->avata)}}" alt="{{$service->title}}" />
											
										</a>
										<div class="button-add">
											<form action="/cart/add" method="post" enctype="multipart/form-data" class="hidden-md variants form-nut-grid form-ajaxtocart" data-id="product-actions-15001645">
												
												<button title="Chi tiết" type="button" onclick="location.href='/{{$service->url}}'" class="action cart-button">Chi tiết</button>
												
											</form>
										</div>	
									</div>
									<div class="product-detail clearfix">
										<div class="box-pro-detail">
											<h3 class="pro-name">
												<a href="/{{$service->url}}" title="{{$service->title}}">{{$service->name}}</a>
											</h3>
											
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
	
	<script>
		$(document).ready(function(){
			$(".evo-owl-product").slick({
				dots: false,
				infinite: false,
				speed: 300,
				slidesToShow: 5,
				slidesToScroll: 5,
				responsive: [
					{
						breakpoint: 1024,
						settings: {
							slidesToShow: 5,
							slidesToScroll: 5
						}
					},
					{
						breakpoint: 991,
						settings: {
							slidesToShow: 3,
							slidesToScroll: 3
						}
					},
					{
						breakpoint: 767,
						settings: {
							slidesToShow: 2,
							slidesToScroll: 2,
							dots: true
						}
					},
					{
						breakpoint: 480,
						settings: {
							slidesToShow: 2,
							slidesToScroll: 2,
							dots: true
						}
					}
				]
			});
		});
		$(document).on("click","#product-zoom-in",function(){
			$("body").addClass("open_layer");
			$("#divzoom").css({'opcaity':0,'visibility':'hidden'}).show();
			$(".divzoom_main").flickity({
				resize:true,
				draggable: true,
			});
			if($(window).width() > 768){
				var ncurrent = parseInt($(".gallery-index .current").html()) - 1;
			}
			else{
				var ncurrent = parseInt($(".product-gallery-item.is-selected").index());
			}
			$(".divzoom_main").flickity('select',ncurrent);
			setTimeout(function(){$("#divzoom").css({'opcaity': 1,'visibility':'visible'})},50);
		});
		$(document).on('click','#closedivZoom', function(event) {
			$("#divzoom").hide();
			$("body").removeClass("open_layer");
			$(".divzoom_main").flickity('select',0);
		});
	</script>
	<script>
		$(".product-gallery__thumb img").click(function(){
			$(".product-gallery__thumb").removeClass('active');
			$(this).parents('.product-gallery__thumb').addClass('active');
			var img_thumb = $(this).data('image');
			$("html, body").animate({
				scrollTop: $("#sliderproduct img[src='"+img_thumb+"']").offset().top
			}, 1000);
		});
		$(".product-gallery__thumb").first().addClass('active');
	</script>
	
	

@endsection