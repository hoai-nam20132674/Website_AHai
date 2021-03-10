@extends('front-end.layout.default')
@section('meta')
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">			
	<title>{{$service_cate->title}}</title>
	<meta name="description" content="{{$service_cate->seo_description}}">
	<meta name="keywords" content="{{$service_cate->seo_keyword}}"/>		
	<link rel="canonical" href="{{$system->website}}/{{$service_cate->url}}"/>
	<meta name='revisit-after' content='1 days' />
	<meta name="robots" content="noodp,index,follow" />
	<link rel="icon" href="{{asset('uploads/images/systems/'.$system->shortcut_logo)}}" type="image/x-icon" />
	<meta property="og:type" content="website">
	<meta property="og:title" content="{{$service_cate->title}}">
	<meta property="og:image" content="{{asset('uploads/images/services/'.$service_cate->avata)}}">
	<meta property="og:image:secure_url" content="{{asset('uploads/images/services/'.$service_cate->avata)}}">
	<meta property="og:description" content="{{$service_cate->seo_description}}">
	<meta property="og:url" content="{{$system->website}}/{{$service_cate->url}}">
	<meta property="og:site_name" content="{{$service_cate->name}}">
@endsection
@section('css')
	<link href="{{asset('css/bootstrap.scss.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('css/plugin.scss.css')}}" rel="stylesheet" type="text/css" />							
	<link href="{{asset('css/base.scss.css')}}" rel="stylesheet" type="text/css" />	
	<link href="{{asset('css/evo-main.scss.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('css/slick.scss.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('css/evo-index.scss.css')}}" rel="stylesheet" type="text/css" />
	
	<link href="{{asset('css/evo-collections.scss.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('css/evo-products.scss.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('body_class')
bg-body collection
@endsection
@section('content')
	<div class="container margin-top-20">
		<div class="row">
			<section class="main_container collection col-md-9" >
				<h1 class="col-title">{{$service_cate->name}}</h1>
				<div class="category-products products category-products-grids">
					
					<section class="products-view section_dich_vu row" style="background: #fff">
		
						@foreach($services as $service)
							<div class="col-md-4 col-sm-4 col-xs-6">
								<div class="evo-box-dich-vu">
									<div class="evo-box-dich-vu-group">
										<div class="evo-box-dich-vu-image">
											<img src="{{asset('uploads/images/services/'.$service->avata)}}" data-src="{{asset('uploads/images/services/'.$service->avata)}}" alt="{{$service->name}}" class="img-responsive center-block lazy" />
										</div>
										<div class="content-box-dich-vu hidden-sm hidden-xs">
											{{$service->seo_description}}
										</div>
									</div>
									<h3><a href="/{{$service->url}}" title="Nâng mũi Model">{{$service->name}}</a></h3>
								</div>
							</div>
						@endforeach

						
						
						<div class="clearfix"></div>
						<div class="text-xs-right">
							
						</div>
					</section>	
					
					
				</div>
			</section>
			@include('front-end.layout.sidebar')
			<div id="open-filters" class="open-filters hidden-lg hidden-md">
				<i class="fa fa-filter" aria-hidden="true"></i>
			</div>
		</div>
	</div>
@endsection