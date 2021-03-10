@extends('front-end.layout.default')
@section('meta')
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">			
	<title>Error</title>
	<meta name="description" content="">
	<meta name="keywords" content="Dental Plus"/>		
	<link rel="canonical" href="http://dentalplusvn.com/lien-he"/>
	<meta name='revisit-after' content='1 days' />
	<link rel="icon" href="{{asset('uploads/images/systems/'.$system->shortcut_logo)}}" type="image/x-icon" />
	<meta property="og:type" content="website">
	<meta property="og:title" content="Dental Plus">
	<meta property="og:image" content="">
	<meta property="og:image:secure_url" content="">
	<meta property="og:description" content="">
	<meta property="og:url" content="http://dentalplusvn.com/lien-he">
	<meta property="og:site_name" content="Dental Plus">
@endsection
@section('css')
	<link href="{{asset('css/bootstrap.scss.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('css/plugin.scss.css')}}" rel="stylesheet" type="text/css" />							
	<link href="{{asset('css/base.scss.css')}}" rel="stylesheet" type="text/css" />	
	<link href="{{asset('css/evo-main.scss.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('css/slick.scss.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('css/evo-index.scss.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('css/evo-contacts.scss.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('body_class')
bg-body page-contact
@endsection
@section('content')
	@if( Session::has('flash_message'))
		<p style="display: none;" class="contact-success">{{ Session::get('flash_message')}}</p>
	@endif	
	<div class="evo-blog-header">
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div class="evo-blog-header-content">
						<h1>Lỗi : bạn đang truy cập trang không tồn tại</h1>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="contact margin-bottom-20 page-contact margin-top-30">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<img src="{{asset('uploads/images/systems/error.jpg')}}" width="100%">
				</div>
			</div>
			
		</div>
	</div>
@endsection