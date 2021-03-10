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
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/admin/upload-image.css')}}">
@endsection
@section('content')
    <div class="page-content ">
        <ol class="breadcrumb">

            <li class="breadcrumb-item"><a href="{{URL::route('home')}}">Bảng điều khiển</a></li>


            <li class="breadcrumb-item"><a href="{{URL::route('cards')}}">Thẻ bảo hành</a></li>


            <li class="breadcrumb-item active">Thêm thẻ bảo hành</li>
        
        </ol>


        <div class="clearfix"></div>
        <div id="main">
            <form method="POST" action="{{URL::route('postAddCard')}}" accept-charset="UTF-8" id="form_56d0a8f2e8c8165e444275f5c4091d06">
                <input type="hidden" name="_token" value="{{ csrf_token()}}">
    
                <div class="row">
                    <div class="col-md-9">
                        <div class="main-form">
                            <div class="form-body">
                                <div class="row">
                                    <div class="form-group col-md-12"  >
                                        <label for="name" class="control-label">Tên khách hàng</label>
                                        <input class="form-control" data-counter="30" name="name" type="text" value="" id="name">
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6"  >
            
                                        <label for="code" class="control-label required">Mã thẻ bảo hành</label>
                                        <input class="form-control" data-counter="30" name="code" type="text" required id="code">
                                    </div>
                                    <div class="form-group col-md-6"  >
                                        
                                        <label for="type" class="control-label">Loại thẻ</label>
                                        <input class="form-control" placeholder="Thẻ VIP ..." data-counter="60" name="type" type="text" id="type">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6"  >
            
                                        <label for="dental" class="control-label">Nha khoa</label>
                                        <input class="form-control" data-counter="60" name="dental" type="text" id="dental">
                                    </div>
                                    <div class="form-group col-md-6"  >
                                        
                                        <label for="labo" class="control-label">Labo</label>
                                        <input class="form-control" data-counter="60" name="labo" type="text" id="labo">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6"  >
            
                                        <label for="tooth" class="control-label">Số răng</label>
                                        <input class="form-control" data-counter="60" name="tooth" type="text" id="tooth">
                                    </div>
                                    <div class="form-group col-md-6"  >
                                        
                                        <label for="time" class="control-label required">Thời gian bảo hành</label>
                                        <input class="form-control" data-counter="60" required name="time" type="text" id="time">
                                    </div>
                                </div>
                                <div class="clearfix"></div>
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


                                <li class="breadcrumb-item"><a href="{{URL::route('cards')}}">Thẻ bảo hành</a></li>


                                <li class="breadcrumb-item active">Thêm thẻ bảo hành</li>
                            
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
@endsection