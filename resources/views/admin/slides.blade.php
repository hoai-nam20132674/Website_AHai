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
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/admin/dataTables.bootstrap.min.css')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/admin/simple-slider-admin.css')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/admin/table.css')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/admin/default.css')}}">
@endsection
@section('content')
<div class="page-content ">
                    <ol class="breadcrumb">
        
                            <li class="breadcrumb-item"><a href="http://hasa.botble.com/admin">Bảng điều khiển</a></li>
            
        
                            <li class="breadcrumb-item"><a href="http://hasa.botble.com/admin/simple-sliders">Simple sliders</a></li>
            
        
                            <li class="breadcrumb-item active">Edit slider &quot;Home slider&quot;</li>
            
            </ol>


                    <div class="clearfix"></div>
                    <div id="main">
                                    <form method="POST" action="http://hasa.botble.com/admin/simple-sliders/edit/1" accept-charset="UTF-8" id="form_7fca581d66339e20cfafdde8cb43d48d"><input name="_token" type="hidden" value="CmLloqLtBJqv9TD8tl8oit00Zm1pIcQRuVfpL29r">
    
        <div class="row">
        <div class="col-md-9">
                            <div class="main-form">
                    <div class="form-body">
                                                                                                                                                                            <div class="form-group"  >
    
    <label for="name" class="control-label required">T&ecirc;n</label>
    <input class="form-control" data-counter="120" name="name" type="text" value="Home slider" id="name">
    


        </div>
    
                                                                    
                                                                                                                                                                                                                                        <div class="form-group"  >
    
    <label for="key" class="control-label required">Key</label>
    <input class="form-control" data-counter="120" name="key" type="text" value="home-slider" id="key">
    


        </div>
    
                                                                                                                                                                                                                                        <div class="form-group"  >
    
    <label for="description" class="control-label">M&ocirc; tả</label>
    <textarea class="form-control" rows="4" placeholder="Mô tả ngắn" data-counter="400" name="description" cols="50" id="description"></textarea>
    


        </div>
    
                                                                                                                                                                        <div class="clearfix"></div>
                    </div>
                </div>
            
                            <div class="widget meta-boxes" >
        <div class="widget-title">
            <h4>
                <span> Slide Items</span>
            </h4>
        </div>
        <div class="widget-body">
            <div class="float-left">
    <a data-fancybox data-type="ajax"
       data-src="http://hasa.botble.com/admin/simple-slider-items/create?simple_slider_id=1"
       href="javascript:;" class="btn btn-info"><i class="fa fa-plus-circle"></i> Add new</a>
    <button class="btn-success btn btn-save-sort-order" style="display: none;"><i
                class="fa fa-save"></i> Save sorting</button>
</div>
<br>

<table  class="table table-striped table-hover vertical-middle" id="simple-slider-items-table"><thead><tr><th  title="ID" width="20px">ID</th><th  title="Hình ảnh" class="text-center">Hình ảnh</th><th  title="Thứ tự" class="text-left order-column">Thứ tự</th><th  title="Ngày tạo" width="100px">Ngày tạo</th><th  title="Tác vụ" width="170px;" class="text-center">Tác vụ</th></tr></thead></table>

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
        
                            <li class="breadcrumb-item"><a href="http://hasa.botble.com/admin">Bảng điều khiển</a></li>
            
        
                            <li class="breadcrumb-item"><a href="http://hasa.botble.com/admin/simple-sliders">Simple sliders</a></li>
            
        
                            <li class="breadcrumb-item active">Edit slider &quot;Home slider&quot;</li>
            
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
                            <h4><label for="status" class="control-label required">Trạng th&aacute;i</label></h4>
                        </div>
                        <div class="widget-body">
                            <div class="ui-select-wrapper">
        <select class="form-control ui-select ui-select" id="status" name="status"><option value="published" selected="selected">Published</option><option value="draft">Bản nháp</option><option value="pending">Đang chờ xử lý</option></select>
    <svg class="svg-next-icon svg-next-icon-size-16">
        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#select-chevron"></use>
    </svg>
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
    <script src="{{asset('js/admin/jquery.blockui.min.js')}}"></script>
    <script src="{{asset('js/admin/sortable.min.js')}}"></script>
    <script src="{{asset('js/admin/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('js/admin/dataTables.bootstrap.min.js')}}"></script>
    <script src="{{asset('js/admin/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('js/admin/buttons.bootstrap.min.js')}}"></script>
    <script src="{{asset('js/admin/moment-with-locales.min.js')}}"></script>
    <script src="{{asset('js/admin/js-validation.js')}}"></script>
    <script src="{{asset('js/admin/jquery.are-you-sure.js')}}"></script>
    <script src="{{asset('js/admin/simple-slider-admin.js')}}"></script>
    <script src="{{asset('js/admin/bootstrap3-typeahead.min.js')}}"></script>
    <script src="{{asset('js/admin/table.js')}}"></script>
    <script src="{{asset('js/admin/filter.js')}}"></script>
@endsection