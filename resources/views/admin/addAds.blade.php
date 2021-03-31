@extends('admin.layout.default')
@section('css')
	<link media="all" type="text/css" rel="stylesheet" href="{{asset('css/admin/fontawesome.min.css')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/admin/simple-line-icons.css')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/admin/select2.min.css')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/admin/select2-bootstrap.min.css')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/admin/pace-theme-minimal.css')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/admin/toastr.min.css')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/admin/jquery.mCustomScrollbar.css')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/admin/bootstrap-datepicker3.min.css')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/admin/spectrum.css')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/admin/jquery.fancybox.min.css')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/admin/core.css')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/admin/default.css')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/admin/slug.css')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/admin/seo-helper.css')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/admin/upload-image.css')}}">
@endsection
@section('content')
<div class="page-content ">
	<ol class="breadcrumb">

		<li class="breadcrumb-item"><a href="{{URL::route('home')}}">Bảng điều khiển</a></li>
		<li class="breadcrumb-item"><a href="{{URL::route('adss')}}">Danh sách banner</a></li>
		<li class="breadcrumb-item active">Thêm banner mới</li>
	</ol>


	<div class="clearfix"></div>
	<div id="main">
		<form method="POST" action="{{URL::route('postAddAds')}}" enctype="multipart/form-data" accept-charset="UTF-8" id="form_1aa3f76ebce588e61c3b18ff42edfa1a">
			<input type="hidden" name="_token" value="{{ csrf_token()}}">

			<div class="row">
				<div class="col-md-9">
					

					<div class="widget meta-boxes">
						<div class="widget-title">
							<h4><label for="images" class="control-label">Hình ảnh</label></h4>
						</div>
						<div class="widget-body">
							<div class="image-box" style="border: 1px solid #e2e2e2;">
								<div class="file-upload">   
									<div class="file-upload-content file-upload-content100" style="position: relative;">
										<img width="100%" class="file-upload-image file-upload-image100" src="{{asset('uploads/images/click-here.gif')}}" alt="your image" />
										<div class="image-title-wrap image-title-wrap100" style="position: absolute;top: 0px; right: 0px;">
											<button type="button" onclick="removeUploadTest(100)" class="remove-image">choose file to upload</button>
										</div>
										<input required style="z-index: 100; position: absolute; top: 0px; left: 0px;" class="file-upload-input file-upload-input100" type='file' required name="images" onchange="readURLTest(this,100);" accept="image/*" />
									</div>
								</div>

							</div>




						</div>
					</div>



				</div>
				<div class="col-md-3 right-sidebar">
					<div class="widget meta-boxes form-actions form-actions-default action-horizontal">
						<div class="widget-title">
							<h4>
								<span>Xuất bản</span>
							</h4>
						</div>
						<div class="widget-body">
							<div class="btn-set">
								<button type="submit" name="submit" value="save" class="btn btn-info">
									<i class="fa fa-save"></i> Lưu
								</button>
								&nbsp;
								<button type="submit" name="submit" value="apply" class="btn btn-success">
									<i class="fa fa-check-circle"></i> Lưu &amp; chỉnh sửa
								</button>
							</div>
						</div>
					</div>
					<div id="waypoint"></div>
					<div class="form-actions form-actions-fixed-top hidden">
						<ol class="breadcrumb">

							<li class="breadcrumb-item"><a href="{{URL::route('home')}}">Bảng điều khiển</a></li>
							<li class="breadcrumb-item"><a href="{{URL::route('adss')}}">Danh sách banner</a></li>
							<li class="breadcrumb-item active">Thêm banner mới</li>
						</ol>


						<div class="btn-set">
							<button type="submit" name="submit" value="save" class="btn btn-info">
								<i class="fa fa-save"></i> Lưu
							</button>
							&nbsp;
							<button type="submit" name="submit" value="apply" class="btn btn-success">
								<i class="fa fa-check-circle"></i> Lưu &amp; chỉnh sửa
							</button>
						</div>
					</div>

					<div class="widget meta-boxes">
						<div class="widget-title">
							<h4><label for="status" class="control-label required">Loại banner quảng cáo</label></h4>
						</div>
						<div class="widget-body">
							<div class="ui-select-wrapper">
								<select class="form-control ui-select ui-select" id="type" name="type">
									<option value="0">Quảng cáo đầu trang</option>
									<option value="1">Quảng cáo thân trang</option>
									<option value="2">Quảng cáo cuối trang</option>
								</select>
								<svg class="svg-next-icon svg-next-icon-size-16">
									<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#select-chevron"></use>
								</svg>
							</div>
						</div>
					</div>


					<div class="widget meta-boxes">
						<div class="widget-title">
							<h4><label for="status" class="control-label required">Trạng th&aacute;i</label></h4>
						</div>
						<div class="widget-body">
							<div class="ui-select-wrapper">
								<select class="form-control ui-select ui-select" id="status" name="display">
									<option value="1">Xuất bản</option>
									<option value="0">Bản nháp</option>
								</select>
								<svg class="svg-next-icon svg-next-icon-size-16">
									<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#select-chevron"></use>
								</svg>
							</div>
						</div>
					</div>

					<div class="widget meta-boxes">
						<div class="widget-title">
							<h4><label for="" class="control-label" aria-required="true">Trang đích</label></h4>
						</div>
						<div class="widget-body">
							<div class="main-form" style="margin-bottom: 0px">
								<div class="form-body">
									<div class="form-group" style="margin-bottom: 0px" >
										<input class="form-control" placeholder="Link trang đích" value="{{old('href')}}" name="href" type="text" id="href">
									</div>


									<input type="hidden" name="model" value="">



									<div class="clearfix"></div>
								</div>
							</div>
						</div>
					</div>

					<div class="widget meta-boxes">
						<div class="widget-title">
							<h4><label for="" class="control-label required" aria-required="true">Mục tiêu</label></h4>
						</div>
						<div class="widget-body">
							<div class="ui-select-wrapper">
								<select class="form-control ui-select ui-select" id="target" name="target">
									
									<option value="_self">Mở trong tab hiện tại</option>
									<option value="_blank">Mở trong tab mới</option>
								</select>
								<svg class="svg-next-icon svg-next-icon-size-16">
									<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#select-chevron"></use>
								</svg>
							</div>
						</div>
					</div>
					<div class="widget meta-boxes">
						<div class="widget-title">
							<h4><label for="" class="control-label" aria-required="true">Thứ tự hiển thị</label></h4>
						</div>
						<div class="widget-body">
							<div class="main-form" style="margin-bottom: 0px">
								<div class="form-body">
									<div class="form-group" style="margin-bottom: 0px" >
										<input class="form-control" placeholder="Thứ tự hiển thị" value="{{old('stt')}}" name="stt" type="number" id="stt">
									</div>


									<input type="hidden" name="model" value="">



									<div class="clearfix"></div>
								</div>
							</div>
						</div>
					</div>
					
				</div>
			</div>

		</form>

	</div>
</div>
@endsection
@section('js')
	<script src="{{asset('js/admin/respond.min.js')}}"></script>
    <script src="{{asset('js/admin/excanvas.min.js')}}"></script>
    <script src="{{asset('js/admin/ie8.fix.min.js')}}"></script>
    <script src="{{asset('js/admin/modernizr.min.js')}}"></script>
    <script src="{{asset('js/admin/select2.min.js')}}"></script>
    <script src="{{asset('js/admin/bootstrap-datepicker.min.js')}}"></script>
    <script src="{{asset('js/admin/jquery.cookie.js')}}"></script>
    <script src="{{asset('js/admin/core.js')}}"></script>
    <script src="{{asset('js/admin/toastr.min.js')}}"></script>
    <script src="{{asset('js/admin/pace.min.js')}}"></script>
    <script src="{{asset('js/admin/jquery.mCustomScrollbar.js')}}"></script>
    <script src="{{asset('js/admin/jquery.stickytableheaders.js')}}"></script>
    <script src="{{asset('js/admin/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('js/admin/spectrum.js')}}"></script>
    <script src="{{asset('js/admin/jquery.fancybox.min.js')}}"></script>
    <script src="{{asset('js/admin/js-validation.js')}}"></script>
    <script src="{{asset('js/admin/jquery.are-you-sure.js')}}"></script>
    <script src="{{asset('js/admin/slug.js')}}"></script>
    <script src="{{asset('js/admin/seo-helper.js')}}"></script>
    <script src="{{asset('js/admin/upload-image.js')}}"></script>
    <script type="text/javascript">
			
		function more_image(){
			var i = parseInt($("input[type=file]").length);
			i=i+1;
			var more_image = $("#more_image");
			more_image.append('<div class="col-md-2"><div class="file-upload"><div class="file-upload-content file-upload-content'+i+'" style="position: relative;"><img width="100%" class="file-upload-image file-upload-image'+i+'" src="{{asset("uploads/images/icon-image.gif")}}" alt="your image" /><div class="image-title-wrap image-title-wrap'+i+'" style="position: absolute;top: 0px; right: 0px;"><button type="button" onclick="removeUploadTest('+i+')" class="remove-image">Ảnh chi tiết</button></div><input style="z-index: 100; position: absolute; top: 0px; left: 0px;" class="file-upload-input file-upload-input'+i+'" type="file" name="images[]" onchange="readURLTest(this,'+i+');" accept="image/*" /></div></div></div>');
			i++;
		};
		
	</script>
@endsection