@extends('front-end.layout.default')
@section('meta')
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">			
	<title>Liên Hệ</title>
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
						<h1>Gửi thông tin</h1>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="contact margin-bottom-20 page-contact margin-top-30">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class="page-login">
						
						<h2 class="title-head text-center">Gửi thông tin</h2>
						
						<span class="text-contact block text-center">Bạn hãy điền nội dung tin nhắn vào form dưới đây và gửi cho chúng tôi. Chúng tôi sẽ trả lời bạn sau khi nhận được.</span>
						<form accept-charset="utf-8" action="{{URL::route('addContact')}}" id="contact" method="post">
							<input type="hidden" name="_token" value="{{ csrf_token()}}">
	
						
							<div class="form-signup clearfix">
								<div class="row">
									<div class="col-sm-12 col-xs-12">
										<fieldset class="form-group">
											<label>Họ và tên<span class="required">*</span></label>
											<input placeholder="Nhập họ và tên" type="text" name="name" id="name" class="form-control  form-control-lg" data-validation-error-msg= "Không được để trống" data-validation="required" required />
										</fieldset>
									</div>
									<div class="col-sm-12 col-xs-12">
										<fieldset class="form-group">
											<label>Điện thoại<span class="required">*</span></label>
											<input placeholder="Nhập số điện thoại" type="tel" name="phone" data-validation="tel" data-validation-error-msg= "Không được để trống" id="tel" class="number-sidebar form-control form-control-lg" required />
										</fieldset>
									</div>
									<div class="col-sm-12 col-xs-12">
										<fieldset class="form-group">
											<label>Email<span class="required">*</span></label>
											<input placeholder="Nhập địa chỉ Email" type="email" name="email" data-validation="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,63}$" data-validation-error-msg= "Email sai định dạng" id="email" class="form-control form-control-lg" required />
										</fieldset>
									</div>
									
									<div class="col-sm-12 col-xs-12">
										<fieldset class="form-group">
											<label>Nội dung<span class="required">*</span></label>
											<textarea placeholder="Nội dung liên hệ" name="message" id="comment" class="form-control form-control-lg" rows="5" data-validation-error-msg= "Không được để trống" data-validation="required" required></textarea>
										</fieldset>
										<div class="pull-xs-left" style="margin-top:20px; font-weight: 800">
											<button type="submit" class="btn btn-blues btn-style btn-style-active">GỬI YÊU CẦU</button>
										</div> 
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="contact-map">
						<div class="page-login text-center">
							<h3 class="title-head">Bản đồ phòng khám</h3>
						</div>
						<div class="box-maps margin-bottom-10">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.374855715216!2d105.85193331528276!3d21.017681986004348!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135abf296660097%3A0x20a4c8a806d50cfc!2zMSBQaOG7kSBUaGkgU8OhY2gsIE5nw7QgVGjDrCBOaOG6rW0sIEhhaSBCw6AgVHLGsG5nLCBIw6AgTuG7mWksIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1595190130111!5m2!1svi!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection