@extends('front-end.layout.default')
@section('meta')
	<title>{{$blog->title}}</title>
	<meta charset="UTF-8" />
	<meta name="theme-color" content="#f02b2b" />
	<link rel="canonical" href="{{$system->website}}/{{$blog->url}}"/>
	<meta name='revisit-after' content='2 days' />
	<meta name="robots" content="noodp,index,follow" />
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">	
	<meta name="description" content="{{$blog->seo_description}}">
	<meta name="keywords" content="{{$blog->seo_keyword}}"/>		
	<meta property="og:type" content="website">
	<meta property="og:title" content="{{$blog->title}}">
	<meta property="og:image" content="{{asset('uploads/images/products/avatas/'.$blog->avata)}}">
	<link rel="icon" href="{{asset('uploads/images/systems/'.$system->shortcut_logo)}}" type="image/x-icon" />
	<meta property="og:description" content="{{$blog->seo_description}}">
	<meta property="og:url" content="{{$system->website}}/{{$blog->url}}">
	<meta property="og:site_name" content="{{$blog->name}}">
@endsection
@section('css')
	<link rel="preload" as='style'  type="text/css" href="{{asset('css/bootstrap-4-3-min.css')}}">
	<link rel="preload" as='style' type="text/css" href="{{asset('css/main.scss.css')}}">
	<link rel="stylesheet" href="{{asset('css/bootstrap-4-3-min.css')}}">
	<link href="{{asset('css/main.scss.css')}}" rel="stylesheet" type="text/css" />	
	<link rel="preload" as='style'  type="text/css" href="{{asset('css/product_style.scss.css')}}">
	<link href="{{asset('css/product_style.scss.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('css/index.scss.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('css/sidebar_style.scss.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
<section id="content" class="product details-main  f-left w_100 clearfix" itemscope itemtype="https://schema.org/Product">	

	<div class="container">
		<div class="section wrap-padding-15 wp_product_main clearfix">
			<div class="details-product section clearfix">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 col-xl-9 details-promain clearfix">
						<div class="clearfix boxshadow firstcontent">
							
								<div class="fw relative clearfix w-100" itemprop="offers" itemscope itemtype="https://schema.org/Offer">

									<div class="clearfix group_tagprice product_convert">
										<div class="flexbreadcrumb clearfix">
											
											<ul class="breadcrumb clearfix a-center">					
												<li class="home">
													<a  href="/" ><i class="fa fa-home"></i><span> Trang chủ</span></a>						
													<span class="mr_lr">&nbsp;/&nbsp;</span>
												</li>
												
												
												<li>
													<a class="changeurl"  href="/tin-tuc#content"><span>Tin tức</span></a>						
													<span class="mr_lr">&nbsp;/&nbsp;</span>
												</li>
												
												<li><strong><span>{{$blog->name}}</span></strong><li>
												
											</ul>
										</div>
										<div class="price-box clearfix"></div>

									</div>
									<div class="clearfix boxinfo relative">
										<h1 class="title-product clearfix">{{$blog->name}}</h1>

									</div>
									<div class="content">{!!$blog->content!!}</div>
									
									
									
								</div>
							
						</div>
						<div class="clearfix tabscroll hidden">
							<ul class="grouptitletab clearfix">
								<li class="active"><a href="#data-tab-1">Tổng quan</a></li>
								
								<li><a href="#data-tab-2">Địa chỉ</a></li>
								
								
								<li><a href="#data-tab-3">Video</a></li>
								
								
								<li><a href="#data-tab-4">Xem 360º</a></li>
								
							</ul>
							<div class="clearfix tabcontentx">
								<div id="data-tab-1" class="clearfix tabcontent t1 boxshadow margin-bottom-40">
									<h4>
										Tổng quan
									</h4>
									<div class="clearfix contentdetails">
										
									</div>
								</div>
								
								<div id="data-tab-2" class="clearfix tabcontent t2 boxshadow margin-bottom-40">
									<h4>
										Địa chỉ
									</h4>
									
									<div id="mapsdetails" class="clearfix mapsdetails">

									</div>
									
								</div>
								
								
								<div id="data-tab-3" class="clearfix tabcontent t3 boxshadow margin-bottom-40">
									<h4>
										Video
									</h4>
									

									
									<div class="videoframe clearfix a-center" data-clip="https://www.youtube.com/embed/quMUHGsUTeo">

									</div>
									
								</div>
								
								
								<div id="data-tab-4" class="clearfix tabcontent t4 boxshadow margin-bottom-40">
									<h4>
										Xem 360º
									</h4>
									<div class="360frame clearfix a-center">
										<div id="panorama" class="panorama d-none">
											<div id="controls">
												<div class="ctrl" id="pan-up"><i class="fa fa-chevron-up"></i></div>
												<div class="ctrl" id="pan-down"><i class="fa fa-chevron-down"></i></div>
												<div class="ctrl" id="pan-left"><i class="fa fa-chevron-left"></i></div>
												<div class="ctrl" id="pan-right"><i class="fa fa-chevron-right"></i></div>
												<div class="ctrl" id="zoom-in"><i class="fa fa-plus"></i></div>
												<div class="ctrl" id="zoom-out"><i class="fa fa-minus"></i></div>
												<div class="ctrl" id="fullscreen"><i class="fa fa-expand"></i></div>
											</div>
										</div>
									</div>
								</div>
								
							</div>
						</div>

					</div>
					@include('front-end.layout.sidebar')
				</div>
			</div>
		</div>
	</div>





	<div class="section clearfix">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					
					
					
						
					<div class="section_prd_feature clearfix" id="sidebarproduct">
						<h2 class="title clearfix">
							<a title="Dự án bất động sản liên quan">Xem thêm <span class="cl">tin tức</span></a>
						</h2>
						
						<div class="product_related_slick clearfix ">

							@foreach($blogs as $blog)
								@include('front-end.layout.blog-box')
							@endforeach
							
							
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>


</section>

<script type="text/javascript" src="{{asset('js/slick-custom.js')}}"></script>
@endsection
@section('js')
	<script src="{{asset('js/api.jquery.js')}}" type="text/javascript"></script>
		
	<link rel="preload" as="script" href="{{asset('js/main.js')}}" />
	<script src="{{asset('js/main.js')}}" type="text/javascript"></script>
	
	<link rel="preload" as="script" href="{{asset('js/gmap2-min.js')}}" />
	<script src="{{asset('js/gmap2-min.js')}}" type="text/javascript"></script>
	<script src="{{asset('js/js.js')}}" type="text/javascript"></script>
	
	
	
	<link rel="preload" as="script" href="{{asset('js/box_gallary.js')}}" />
	<link rel="preload" as="script" href="{{asset('js/pluginviews.js')}}" />
	<link rel="preload" as="script" href="{{asset('js/picbox.js')}}" />
	<link rel="preload" as='style'  type="text/css" href="{{asset('css/picbox.scss.css')}}">
	<link rel="preload" as='style'  type="text/css" href="{{asset('css/box_gallary.scss.css')}}">
	<link rel="preload" as='style'  type="text/css" href="{{asset('css/pluginviews.css')}}">
	<link href="{{asset('css/box_gallary.scss.css')}}" rel="stylesheet" type="text/css" />
	<script src="{{asset('js/box_gallary.js')}}" type="text/javascript"></script>
	<link href="{{asset('css/pluginviews.css')}}" rel="stylesheet" type="text/css" />
	<script src="{{asset('js/pluginviews.js')}}" type="text/javascript"></script>

@endsection